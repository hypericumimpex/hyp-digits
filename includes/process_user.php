<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_ajax_nopriv_digits_submit_form', 'digits_process_form' );
function digits_process_form() {

	$data = array();
	if ( isset( $_POST['digits_reg_mail'] ) ) {
		$data = digits_process_register();
	} else if ( isset( $_POST['mobmail'] ) ) {
		$data = digits_process_login();
	} else if ( isset( $_POST['forgotmail'] ) ) {
		$data = digits_process_forgotpassword();
	}
	wp_send_json( $data );
	die();
}


function digits_process_register() {
	$users_can_register = get_option( 'dig_enable_registration', 1 );

	$validation_error = new WP_Error();
	if ( isset( $_POST['dig_nounce'] ) && $users_can_register == 1 ) {

		$nounce = $_POST['dig_nounce'];
		if ( ! wp_verify_nonce( $nounce, 'dig_form' ) ) {
			return array( 'success' => false, 'data' => array( 'msg' => __( 'Error', 'digits' ), 'level' => 2 ) );
		}

		$page = 2;


		$dig_reg_details = digit_get_reg_fields();
		$user_id = null;

		$nameaccep     = $dig_reg_details['dig_reg_name'];
		$usernameaccep = $dig_reg_details['dig_reg_uname'];
		$emailaccep    = $dig_reg_details['dig_reg_email'];
		$passaccep     = $dig_reg_details['dig_reg_password'];
		$mobileaccp    = $dig_reg_details['dig_reg_mobilenumber'];

		if ( $emailaccep == 1 && $mobileaccp == 1 ) {
			$emailmob = __( "Email/Mobile Number", "digits" );
		} else if ( $mobileaccp > 0 ) {
			$emailmob = __( "Mobile Number", "digits" );
		} else if ( $emailaccep > 0 ) {
			$emailmob = __( "Email", "digits" );
		} else if ( $usernameaccep == 0 ) {
			$usernameaccep = 1;
			$emailmob      = __( "Username", "digits" );
		}


		$m        = '';
		$name     = '';
		$mail     = '';
		$password = '';
		$username = '';

		if ( $nameaccep > 0 ) {
			$name = sanitize_text_field( $_POST['digits_reg_name'] );
		}
		if ( $emailaccep > 0 ) {
			$mail = sanitize_email( $_POST['dig_reg_mail'] );
		}
		if ( $passaccep > 0 ) {
			$password = sanitize_text_field( $_POST['digits_reg_password'] );
		}
		if ( $usernameaccep > 0 ) {
			$username = sanitize_text_field( $_POST['digits_reg_username'] );
		}


		$code = sanitize_text_field( dig_get_var( 'code' ) );
		$csrf = sanitize_text_field( dig_get_var( 'csrf' ) );
		$otp  = sanitize_text_field( dig_get_var( 'dig_otp' ) );

		if ( $mobileaccp > 0 ) {
			$m = sanitize_text_field( $_POST['digits_reg_mail'] );
		}


		if ( empty( $name ) && $nameaccep == 2 ) {
			$validation_error->add( "invalidname", __( "Invalid Name!", "digits" ) );
		}

		if ( empty( $username ) && $usernameaccep == 2 ) {
			$validation_error->add( "invalidusername", __( "Invalid Username!", "digits" ) );
		}


		if ( $passaccep == 0 ) {
			$password = wp_generate_password();
		} else if ( $passaccep == 2 && empty( $password ) ) {
			$validation_error->add( "invalidpassword", __( "Invalid Password!", "digits" ) );
		} else {
			if ( empty( $code ) && empty( $otp ) && empty( $password ) && $passaccep > 0 ) {
				$validation_error->add( "invalidpassword", __( "Invalid Password!", "digits" ) );
			} else {
				if ( empty( $password ) ) {
					$password = wp_generate_password();
				}
			}
		}

		if ( $mobileaccp == 1 && ! is_numeric( $m ) && stripslashes( $m ) == $mail ) {
			$m = '';
		}


		if ( $mobileaccp == 2 ) {
			$m = sanitize_mobile_field_dig( $m );

			if ( empty( $m ) || ! is_numeric( $m ) ) {
				$validation_error->add( "Mobile", __( "Please enter a valid Mobile Number!", "digits" ) );
			}
			if ( empty( $code ) && empty( $otp ) ) {
				$validation_error->add( "Mobile", __( "Please enter a valid OTP!", "digits" ) );
			}

		} else if ( $mobileaccp == 1 && ! empty( $m ) ) {
			$m = sanitize_mobile_field_dig( $m );
			if ( ! is_numeric( $m ) || ( empty( $code ) && empty( $otp ) ) ) {
				$validation_error->add( "Mobile", __( "Please enter a valid Mobile Number!", "digits" ) );
			}
			if ( empty( $code ) && empty( $otp ) ) {
				$validation_error->add( "Mobile", __( "Please enter a valid OTP!", "digits" ) );
			}

		}

		if ( $emailaccep == 2 ) {
			if ( empty( $mail ) || ! isValidEmail( $mail ) ) {
				$validation_error->add( "Mail", __( "Please enter a valid Email!", "digits" ) );
			}
		} else if ( $emailaccep == 1 && ! empty( $mail ) ) {
			if ( ! isValidEmail( $mail ) ) {
				$validation_error->add( "Mail", __( "Please enter a valid Email!", "digits" ) );
			}
		}

		if ( $mobileaccp == 1 && $emailaccep == 1 ) {
			if ( ! is_numeric( $m ) && $emailaccep == 0 ) {
				$validation_error->add( "Mobile", __( "Please enter a valid Mobile Number!", "digits" ) );
			}

			if ( empty( $code ) && empty( $otp ) && empty( $mail ) ) {
				$validation_error->add( "invalidmailormob", __( "Invalid Email or Mobile Number", "digits" ) );
			}

			if ( ! empty( $mail ) && ! isValidEmail( $mail ) ) {
				$validation_error->add( "Mail", __( "Invalid Email!", "digits" ) );
			}
			if ( ! empty( $mail ) && email_exists( $mail ) ) {
				$validation_error->add( "MailinUse", __( "Email already in use!", "digits" ) );
			}

		}
		$validation_error = apply_filters( 'digits_validate_email', $validation_error, $mail );


		$useMobAsUname = get_option( 'dig_mobilein_uname', 0 );

		if ( $useMobAsUname == 3 && empty( $username ) ) {
			$username = $mail;
		}
		if ( empty( $username ) ) {

			$auto = 0;
			if ( $useMobAsUname == 1 && ! empty( $m ) ) {
				$tname = $m;
			} else if ( ( ! empty( $name ) || ! empty( $mail ) ) && $useMobAsUname == 0 ) {
				$auto = 1;
				if ( ! empty( $mail ) ) {
					$tname = strstr( $mail, '@', true );
				} else {
					$tname = digits_filter_username( $name );
				}
			} else {

				$tname = apply_filters( 'digits_username', '' );
			}

			if ( empty( $tname ) || $auto == 1 ) {
				if ( empty( $tname ) ) {
					if ( ! empty( $mail ) ) {
						$tname = strstr( $mail, '@', true );
					} else if ( ! empty( $m ) ) {
						$tname = $m;
					}
				}

				if ( empty( $tname ) ) {
					$validation_error->add( "username", __( "Error while generating username!", "digits" ) );
				} else {


					$check = username_exists( $tname );
					if ( $tname == $m && $check ) {
						$validation_error->add( "MobinUse", __( "Mobile number already in use!", "digits" ) );
					}

					if ( ! empty( $check ) ) {
						$suffix = 2;
						while ( ! empty( $check ) ) {
							$alt_ulogin = $tname . $suffix;
							$check      = username_exists( $alt_ulogin );
							$suffix ++;
						}
						$ulogin = $alt_ulogin;
					} else {
						$ulogin = $tname;
					}

				}


			} else {


				$check = username_exists( $tname );

				if ( ! empty( $check ) ) {
					$suffix = 2;
					while ( ! empty( $check ) ) {
						$alt_ulogin = $tname . $suffix;
						$check      = username_exists( $alt_ulogin );
						$suffix ++;
					}
					$ulogin = $alt_ulogin;
				} else {
					$ulogin = $tname;
				}
			}


		} else {
			if ( username_exists( $username ) ) {
				$validation_error->add( "UsernameinUse", __( "Username is already in use!", "digits" ) );
			} else {
				$ulogin = $username;
			}
		}

		$reg_custom_fields = stripslashes( base64_decode( get_option( "dig_reg_custom_field_data", "e30=" ) ) );
		$reg_custom_fields = json_decode( $reg_custom_fields, true );
		$validation_error  = validate_digp_reg_fields( $reg_custom_fields, $validation_error );

		if ( ( ! empty( $code ) || ! empty( $otp ) ) && $mobileaccp > 0 ) {


			$m  = sanitize_text_field( dig_get_var( 'digits_reg_mail' ) );
			$m2 = sanitize_text_field( dig_get_var( 'mobmail2' ) );

			if ( is_numeric( sanitize_mobile_field_dig( $m ) ) ) {
				$countrycode = sanitize_text_field( $_POST['digregcode'] );
			} else if ( is_numeric( sanitize_mobile_field_dig( $m2 ) ) ) {
				$countrycode = sanitize_text_field( $_POST['digregscode2'] );
			}

			if ( dig_gatewayToUse( $countrycode ) == 1 ) {

				if ( ! wp_verify_nonce( $csrf, 'crsf-otp' ) ) {
					$validation_error->add( "Error", __( "Error", "digits" ) );
				}
				$json = getUserPhoneFromAccountkit( $code );

				$phoneJson = json_decode( $json, true );

				$mob         = $phoneJson['phone'];
				$phone       = $phoneJson['nationalNumber'];
				$countrycode = $phoneJson['countrycode'];

				if ( $json == null ) {
					$validation_error->add( "apifail", __( "Invalid API credentials!", "digits" ) );

				}

			} else {
				$m  = sanitize_text_field( dig_get_var( 'digits_reg_mail' ) );
				$m2 = sanitize_text_field( dig_get_var( 'mobmail2' ) );
				if ( is_numeric( sanitize_mobile_field_dig( $m ) ) ) {
					$m           = sanitize_mobile_field_dig( $m );
					$countrycode = sanitize_text_field( $_POST['digregcode'] );
					if ( verifyOTP( $countrycode, $m, $otp, true ) ) {
						$mob   = $countrycode . $m;
						$phone = $m;
					}
				} else if ( is_numeric( sanitize_mobile_field_dig( $m2 ) ) ) {
					$countrycode = sanitize_text_field( $_POST['digregscode2'] );
					$m2          = sanitize_mobile_field_dig( $m2 );
					if ( verifyOTP( $countrycode, $m2, $otp, true ) ) {
						$mob   = $countrycode . $m2;
						$phone = $m2;
					}
				}

			}


			if ( empty( $ulogin ) ) {
				$mobu  = str_replace( "+", "", $mob );
				$check = username_exists( $mobu );
				if ( ! empty( $check ) ) {
					$validation_error->add( "MobinUse", __( "Mobile number already in use!", "digits" ) );
				} else {
					$ulogin = $mobu;
				}
			}


			$mobuser = getUserFromPhone( $mob );
			if ( $mobuser != null ) {
				$validation_error->add( "MobinUse", __( "Mobile Number already in use!", "digits" ) );
			} else if ( username_exists( $mob ) ) {
				$validation_error->add( "MobinUse", __( "Mobile Number already in use!", "digits" ) );
			} else if ( $mob == null ) {
				$validation_error->add( "MobinUse", __( "Invalid Mobile Number", "digits" ) );
			}

			if ( empty( $ulogin ) ) {
				$validation_error->add( "username", __( "Error while generating username!", "digits" ) );
			}


			$validation_error = apply_filters( 'digits_registration_errors', $validation_error, $ulogin, $mail );

			if ( ! $validation_error->get_error_code() ) {
				$ulogin  = sanitize_user( $ulogin, true );
				$user_id = wp_create_user( $ulogin, $password, $mail );
				$userd   = get_user_by( 'ID', $user_id );


				if ( ! is_wp_error( $user_id ) ) {

					update_user_meta( $user_id, 'digits_phone', $mob );
					update_user_meta( $user_id, 'digt_countrycode', $countrycode );
					update_user_meta( $user_id, 'digits_phone_no', $phone );

				} else {

					$validation_error->add( "Error", implode( ", ", $user_id->get_error_messages() ) );

				}


				$page = 2;
			}
		} else if ( $emailaccep > 0 ) {

			if ( empty( $ulogin ) ) {
				$ulogin = strstr( $mail, '@', true );
				if ( username_exists( $ulogin ) ) {
					$validation_error->add( "MailinUse", __( "Email is already in use!", "digits" ) );
				}

			}
			$validation_error = apply_filters( 'digits_registration_errors', $validation_error, $ulogin, $mail );

			if ( ! $validation_error->get_error_code() ) {
				$ulogin  = sanitize_user( $ulogin, true );
				$user_id = wp_create_user( $ulogin, $password, $mail );
				$userd   = get_user_by( 'ID', $user_id );


				$page = 2;
			}


		} else {
			if ( empty( $ulogin ) ) {
				$validation_error->add( "username", __( "Invalid Username!", "digits" ) );
			}
			$validation_error = apply_filters( 'digits_registration_errors', $validation_error, $ulogin, '' );

			if ( ! $validation_error->get_error_code() ) {
				$ulogin  = sanitize_user( $ulogin, true );
				$user_id = wp_create_user( $ulogin, $password );
				$userd   = get_user_by( 'ID', $user_id );

			}

		}
		$page = 2;

		if ( ! is_wp_error( $user_id ) && ! $validation_error->get_error_code() ) {

			$defaultuserrole = get_option( 'defaultuserrole', "customer" );
			wp_update_user( array(
				'ID'           => $user_id,
				'role'         => $defaultuserrole,
				'first_name'   => $name,
				'display_name' => $name
			) );


			update_digp_reg_fields( $reg_custom_fields, $user_id );

			if ( class_exists( 'WooCommerce' ) ) {
				// code that requires WooCommerce

				$userdaata = array(
					'user_login' => $ulogin,
					'user_pass'  => $password,
					'user_email' => $mail,
					'role'       => $defaultuserrole,
				);
				do_action( 'woocommerce_created_customer', $user_id, $userdaata, $password );
			} else {
				do_action( 'register_new_user', $user_id );
			}
			wp_set_current_user( $userd->ID, $userd->user_login );

			if ( wp_validate_auth_cookie() == false ) {
				wp_set_auth_cookie( $userd->ID, true, false );
			}

			if ( dig_is_doing_ajax() ) {
				$current_url = '-1';
			} else {
				$current_url = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
				$current_url = dig_removeStringParameter( $current_url, "login" );
				$current_url = dig_removeStringParameter( $current_url, "page" );
			}
			$t = get_option( "digits_regred" );
			if ( ! empty( $t ) ) {
				$current_url = $t;
			}

			$redirect_url = $current_url;

			$custom_redirect = dig_lgr_custom();
			if ( ! empty( $custom_redirect ) ) {
				$redirect_url = $custom_redirect;
			}
			if ( dig_output_json_response() ) {
				return array(
					'success' => true,
					'data'    => array(
						'code'     => '1',
						'msg'      => __( 'Registration Successful, Redirecting..', 'digits' ),
						'redirect' => $redirect_url
					)
				);
			} else {
				wp_safe_redirect( $redirect_url );
			}
			exit();
		} else {

			if ( is_wp_error( $user_id ) && ! $validation_error->get_error_code() ) {
				$validation_error = $user_id;
			}

			if ( dig_output_json_response() ) {
				if ( is_wp_error( $validation_error ) ) {
					$msg = implode( '<br />', $validation_error->get_error_messages() );
				} else {
					$msg = __( 'Error', 'digits' );
				}

				return array(
					'success' => false,
					'data'    => array( 'code' => '0', 'msg' => $msg, 'level' => 2 )
				);
			}

		}


	}


}

function dig_output_json_response() {
	if ( ( defined( 'DOING_AJAX' ) && DOING_AJAX ) || defined( 'REST_REQUEST' ) ) {
		return true;
	} else {
		return false;
	}
}

function digits_process_login() {
	if ( isset( $_POST['mobmail'] ) && $_POST['password'] ) {
		$page = 1;


		$dig_login_details = digit_get_login_fields();

		$emailaccep    = $dig_login_details['dig_login_email'];
		$passaccep     = $dig_login_details['dig_login_password'];
		$mobileaccp    = $dig_login_details['dig_login_mobilenumber'];
		$usernameaccep = $dig_login_details['dig_login_username'];

		if ( $passaccep == 0 ) {
			return array(
				'success' => false,
				'data'    => array( 'msg' => __( 'Please enter a valid password', 'digits' ), 'level' => 2 )
			);
		}


		if ( isset( $_POST['isimpc'] ) && defined( 'IHC_PATH' ) ) {
			$emailaccep = 1;
		}

		$nounce = $_POST['dig_nounce'];
		if ( ! wp_verify_nonce( $nounce, 'dig_form' ) ) {
			return array( 'success' => false, 'data' => array( 'msg' => __( 'Error', 'digits' ), 'level' => 2 ) );
		}

		$username = sanitize_text_field( $_POST['mobmail'] );
		$password = sanitize_text_field( $_POST['password'] );


		$countrycode = sanitize_text_field( $_POST['countrycode'] );

		$credentials   = array();
		$secure_cookie = false;
		$isValid       = true;

		if ( is_ssl() ) {
			$secure_cookie = true;
		}
		$userfromName = null;

		$temp_uname = sanitize_mobile_field_dig( $username );
		if ( is_numeric( sanitize_mobile_field_dig( $temp_uname ) ) && $mobileaccp == 1 ) {


			$userfromName = getUserFromPhone( "$countrycode$temp_uname" );

			if ( $userfromName != null ) {
				$username = $userfromName->user_login;
			} else {
				$userfromName = getUserFromPhone( $temp_uname );
				if ( $userfromName != null ) {
					$username = $userfromName->user_login;
				}
			}
		} else if ( isValidEmail( $username ) && $emailaccep == 1 ) {
			//$user = get_user_by('email', $username);
			//$username = $user->user_login;
		} else if ( ! username_exists( $username ) ) {
			$isValid = false;
		}

		if ( checkIfUsernameIsMobile_validate( $countrycode, $username ) == - 1 ) {
			$isValid = false;

		}

		if ( ! username_exists( $username ) ) {

			$tmp = sanitize_mobile_field_dig( $username );
			if ( is_numeric( $tmp ) ) {
				if ( username_exists( '0' . $tmp ) ) {
					$username = '0' . $tmp;
					$isValid  = true;
				}
			}
		}


		if ( $usernameaccep == 0 ) {
			if ( ! email_exists( $username ) && $userfromName == null ) {
				$isValid = false;
			}
		}


		$invalid_message = __( "Invalid Credentials!", "digits" );
		$captcha         = $dig_login_details['dig_login_captcha'];
		if ( $captcha == 1 ) {


			if ( ! dig_validate_login_captcha() ) {

				if ( ! isset( $_POST['isimpc'] ) ) {


					$invalid_message = __( "Please enter a valid captcha", "digits" );
					$isValid         = false;
				}
			}

		}


		if ( $isValid ) {
			$credentials['user_login']    = $username;
			$credentials['user_password'] = $password;
			$credentials['remember']      = ( isset( $_POST['digits_login_remember_me'] ) ? true : false );
			$user_obj                     = wp_signon( $credentials, $secure_cookie );
		}

		if ( is_wp_error( $user_obj ) || ! $isValid ) {

			if ( is_wp_error( $user_obj ) ) {
				$invalid_message = $user_obj->get_error_message();
			}

			$login_message = $invalid_message;

			if ( isset( $_POST['isimpc'] ) ) {
				$current_url = "//" . $_SERVER['HTTP_HOST'];

				//$current_url = dig_removeStringParameter($current_url, "login");
				// $current_url = dig_removeStringParameter($current_url, "page");
				// $current_url = $current_url . "/?ihc_login_fail=true";
				wp_safe_redirect( $current_url );
				exit();
			}

			return array( 'success' => false, 'data' => array( 'msg' => $login_message, 'level' => 2 ) );
		} else {


			if ( dig_is_doing_ajax() ) {
				$current_url = '-1';
			} else {
				if ( isset( $_POST['isimpc'] ) ) {
					$current_url = "//" . $_SERVER['HTTP_HOST'];
				} else {
					$current_url = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

					$current_url = dig_removeStringParameter( $current_url, "login" );
					$current_url = dig_removeStringParameter( $current_url, "page" );
				}
			}


			$t = get_option( "digits_loginred" );
			if ( ! empty( $t ) ) {
				$current_url = $t;
			}


			$redirect_url = $current_url;

			$custom_redirect = dig_lgr_custom();
			if ( ! empty( $custom_redirect ) ) {
				$redirect_url = $custom_redirect;
			}

			if ( dig_output_json_response() ) {
				return array(
					'success' => true,
					'data'    => array(
						'code'     => '1',
						'msg'      => __( 'Login Successful, Redirecting..', 'digits' ),
						'redirect' => $redirect_url
					)
				);
			} else {
				wp_safe_redirect( $redirect_url );
			}


			exit();
		}

	}

	return null;
}


function digits_process_forgotpassword() {
	$digforgotpass = get_option( 'digforgotpass', 1 );

	function recoverpassword( $user_login ) {

		if ( class_exists( 'WooCommerce' ) ) {
			return wc_d_retrieve_password( $user_login );
		}
		$errors = new WP_Error();
		if ( empty( $user_login ) ) {
			return false;
		} else if ( strpos( $user_login, '@' ) ) {
			$user_data = get_user_by( 'email', trim( $user_login ) );
			if ( empty( $user_data ) ) {
				return false;
			}
		} else {
			$login     = trim( $user_login );
			$user_data = get_user_by( 'login', $login );
		}
		/**
		 * Fires before errors are returned from a password reset request.
		 *
		 * @param WP_Error $errors A WP_Error object containing any errors generated
		 *                         by using invalid credentials.
		 *
		 * @since 4.4.0 Added the `$errors` parameter.
		 *
		 * @since 2.1.0
		 */
		do_action( 'lostpassword_post', $errors );

		if ( $errors->get_error_code() ) {
			return false;
		}

		if ( ! $user_data ) {
			return false;
		}

		// Redefining user_login ensures we return the right case in the email.
		$user_login = $user_data->user_login;
		$user_email = $user_data->user_email;
		$key        = get_password_reset_key( $user_data );

		if ( is_wp_error( $key ) ) {
			return false;
		}


		$logo = get_option( 'digits_logo_image' );
		if ( ! empty( $logo ) ) {
			if ( is_numeric( $logo ) ) {
				$logo = wp_get_attachment_url( $logo );
			}
		}


		$headers = array( 'Content-Type: text/html; charset=UTF-8' );
		$subject = 'Password Reset - ' . get_bloginfo( 'name', 'display' );

		$activation_link = dig_fp_create_token( $user_data->ID );


		$message = dig_curl( plugins_url( dig_get_template( 3 ), __FILE__ ) );
		$message = str_replace( array(
			'{{firstname}}',
			'{{passwordresetlink}}',
			'{{sitename}}'
		), array( $user_data->first_name, $activation_link, get_bloginfo( 'name', 'display' ) ), $message );

		if ( $message && ! wp_mail( $user_email, wp_specialchars_decode( $subject ), $message, $headers ) ) {

			if ( dig_is_doing_ajax() ) {
				wp_send_json_error( array( 'msg' => __( 'The email could not be sent. Please contact site owner' ) ) );
			} else {
				wp_die( __( 'The email could not be sent.' ) . "<br />\n" . __( 'Possible reason: your host may have disabled the mail() function.' ) );
			}
		}

		return true;
	}

	$invalid_token = __( "Your password reset link appears to be expired or invalid. Please request a new link.", 'digits' );

	$show_changepass_fields = false;

	/*
	if ( isset( $_GET['token'] ) && ! isset( $_POST['dig_token'] ) ) {
		if ( ! isset( $_GET['user'] ) ) {
			unset( $_GET['token'] );
		} else {
			$user_login = sanitize_text_field( $_GET['user'] );
			$token      = sanitize_text_field( $_GET['token'] );

			$user = get_user_by( 'login', $user_login );

			if ( $user == null || ! $user ) {
				$forgmessage = $invalid_token;
				$page        = 3;
				unset( $_GET['token'] );
			} else {

				if ( dig_fp_verify_token( $token, $user->ID ) ) {
					$page                   = 3;
					$show_changepass_fields = true;

					$refresh_token = dig_fp_refresh_token( $user->ID );
					if ( ! $refresh_token ) {
						$forgmessage = $invalid_token;
						unset( $_GET['token'] );
					} else {
						$_GET['token'] = $refresh_token;
					}
				} else {
					$forgmessage = $invalid_token;
					$page        = 3;
					unset( $_GET['token'] );
				}

			}

		}

	}*/

	if ( isset( $_POST['forgotmail'] ) && $digforgotpass == 1 ) {

		$nounce = $_POST['dig_nounce'];
		if ( ! wp_verify_nonce( $nounce, 'dig_form' ) ) {
			return array( 'success' => false, 'data' => array( 'msg' => __( 'Error', 'digits' ), 'level' => 2 ) );
		}

		$code    = sanitize_text_field( dig_get_var( 'code' ) );
		$dig_otp = sanitize_text_field( dig_get_var( 'dig_otp' ) );

		if ( empty( $code ) && empty( $dig_otp ) ) {
			$user_login    = sanitize_text_field( $_POST['forgotmail'] );
			$forgotsuccess = recoverpassword( $user_login );

			if ( $forgotsuccess ) {
				$success     = true;
				$forgmessage = __( "A password reset email has been sent to the email address, but may take several minutes to show up in your inbox. Please wait at least 10 minutes before attempting another reset.", "digits" );

				return array( 'success' => $success, 'data' => array( 'msg' => $forgmessage, 'show_msg' => 1 ) );

			} else {
				$success     = false;
				$forgmessage = __( "Invalid Email!", "digits" );

				return array( 'success' => $success, 'data' => array( 'msg' => $forgmessage ), 'level' => 2 );
			}


			$page = 3;
		}

	}

	//$page = 2;

	if ( !isset( $_POST['digits_password'] ) || empty($_POST['digits_password']) ) {
		return array( 'success' => false, 'data' => array( 'msg' => __( 'Please enter a valid Password', 'digits' ), 'level' => 1 ) );
	}
	if ( $digforgotpass == 1 ) {


		$nounce = $_POST['dig_nounce'];
		if ( ! wp_verify_nonce( $nounce, 'dig_form' ) ) {
			return array( 'success' => false, 'data' => array( 'msg' => __( 'Error', 'digits' ), 'level' => 2 ) );
		}


		$user_login = sanitize_text_field( $_POST['forgotmail'] );
		if ( empty( $user_login ) ) {
			$user_login = sanitize_text_field( $_POST['user'] );
		}

		if ( empty( $user_login ) ) {
			return array( 'success' => false, 'data' => array( 'msg' => __( 'Error', 'digits' ), 'level' => 2 ) );
		}

		$password  = sanitize_text_field( $_POST['digits_password'] );
		$cpassword = sanitize_text_field( $_POST['digits_cpassword'] );
		$code      = sanitize_text_field( dig_get_var('code') );
		$csrf      = sanitize_text_field( dig_get_var('csrf') );
		$token     = '';

		if ( isset( $_POST['dig_token'] ) ) {
			$token = sanitize_text_field( $_POST['dig_token'] );
		}
		$user = get_user_by( 'login', $user_login );


		if ( isset( $_POST['dig_countrycodec'] ) ) {
			$countrycode = sanitize_text_field( $_POST['dig_countrycodec'] );
		} else {
			$countrycode = sanitize_text_field( $_POST['countrycode'] );
		}

		$otp = sanitize_text_field( $_POST['dig_otp'] );


		if ( $password != $cpassword ) {
			$page        = 3;
			$forgmessage = __( 'Passwords do not match!', 'digits' );
			if ( strlen( $password ) < 6 ) {
				$forgmessage = __( 'Please use a stronger password!', 'digits' );
			}

			return array( 'success' => false, 'data' => array( 'msg' => $forgmessage ), 'level' => 2 );
		} /*else if ( ! empty( $token ) ) {
			if ( $user == null || ! $user ) {
				$login_message = $invalid_token;
				$page          = 3;
				unset( $_GET['token'] );
			} else {
				if ( dig_fp_verify_one_time_token( $token, $user->ID ) ) {
					dig_fp_changepass_redirect( $user, $password );
					die();
				} else {
					$login_message = $invalid_token;
					$page          = 3;
					unset( $_GET['token'] );


				}

			}
		}*/
		else if ( ! empty( $code ) || ! empty( $otp ) ) {

			$page = 3;
			if ( $password != $cpassword ) {
				$forgmessage = __( "Passwords do not match!" );

				return array( 'success' => false, 'data' => array( 'msg' => $forgmessage ), 'level' => 2 );
			}


			if ( dig_gatewayToUse( $countrycode ) > 1 ) {
				$user_login = sanitize_mobile_field_dig( $user_login );
				if ( ! empty( $otp ) && verifyOTP( $countrycode, $user_login, $otp, true ) ) {
					$phone = $countrycode . $user_login;

				} else {
					$forgmessage = __( "Error", "digits" );

					return array( 'success' => false, 'data' => array( 'msg' => $forgmessage, 'level' => 2 ) );
				}
			} else {

				if ( ! wp_verify_nonce( $csrf, 'crsf-otp' ) ) {
					$forgmessage = __( "Error", "digits" );

					return array( 'success' => false, 'data' => array( 'msg' => $forgmessage, 'level' => 2 ) );
				}
				$json = getUserPhoneFromAccountkit( $code );

				$phoneJson = json_decode( $json, true );

				$phone = $phoneJson['phone'];
			}


			$userd = getUserFromPhone( $phone );


			if ( $userd != null ) {

				wp_set_password( $password, $userd->ID );
				wp_password_change_notification( $userd );

				if ( dig_is_doing_ajax() ) {
					$current_url = '-1';
				} else {
					$current_url = "//" . $_SERVER['HTTP_HOST'];
				}
				wp_set_current_user( $userd->ID, $userd->user_login );
				wp_set_auth_cookie( $userd->ID );

				do_action( 'wp_login', $userd->user_login, $userd );

				$t = get_option( "digits_forgotred" );
				if ( ! empty( $t ) ) {
					$current_url = $t;
				}


				$redirect_url = $current_url;

				$custom_redirect = dig_lgr_custom();
				if ( ! empty( $custom_redirect ) ) {
					$redirect_url = $custom_redirect;
				}

				if ( dig_output_json_response() ) {
					return array(
						'success' => true,
						'data'    => array(
							'code'     => '1',
							'msg'      => __( 'Password changed successfully, Redirecting..', 'digits' ),
							'redirect' => $redirect_url
						)
					);
				} else {
					wp_safe_redirect( $redirect_url );
				}

				die();

			} else {
				$page        = 3;
				$forgmessage = __( "Error! User not found.", "digits" );

				return array( 'success' => false, 'data' => array( 'msg' => $forgmessage, 'level' => 1 ) );
			}


		}

	}

}


function dig_get_var( $name ) {
	return isset( $_POST[ $name ] ) ? $_POST[ $name ] : '';
}

function dig_is_doing_ajax() {
	return defined( 'DOING_AJAX' ) && DOING_AJAX ? true : false;
}