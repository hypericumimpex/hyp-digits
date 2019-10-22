<?php

/*
 * Plugin Name: HYP Digits
 * Description:  Signup si Login cu nr de tel...
 * Version: 6.10
 * Plugin URI: https://github.com/hypericumimpex/hyp-digits/
 * Author URI: https://github.com/hypericumimpex/
 * Author: Romeo C.
 * Text Domain: digits
 * Requires PHP: 5.5
 * Domain Path: /languages
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

update_option('dig_purchasecode', '8699958a-77f3-4db8-9422-126b0836e1c5');

function digits_version() {
	return '6.10';
}

global $dig_logingpage, $dig_save_details;
$dig_logingpage   = 0;
$dig_save_details = 0;

require_once( 'admin/settings.php' );
require_once( 'includes/core/functions.php' );

require_once( 'includes/process_user.php' );
require_once( 'includes/woocommerce-registration.php' );
require_once( 'includes/userdata.php' );
require_once( 'includes/login.php' );
require_once( 'includes/register.php' );
require_once( 'includes/wp.php' );
require_once( 'update/plugin-update-checker.php' );
require_once( 'includes/wcs.php' );
require_once( 'includes/forms.php' );
require_once( 'includes/sessions/class-session-handler.php' );
require_once( 'includes/plugins/init.php' );

add_filter( 'plugin_row_meta', 'digits_update_plugin_meta', 10, 4 );

function digits_update_plugin_meta( $plugin_meta, $plugin_file, $plugin_data, $status ) {

	$list = apply_filters( 'digits_addon', array() );

	if ( ! isset( $plugin_data['slug'] ) ) {
		return $plugin_meta;
	}

	$slug = $plugin_data['slug'];
	if ( in_array( $slug, $list ) ) {
		$plugin_meta['1'] = $plugin_meta['1'] . '<input type="hidden" slug="' . $slug . '"  class="dig_slug_addon"/>';
		unset( $plugin_meta['2'] );

	} else if ( $slug == 'digits' ) {
		$plugin_meta['2'] = '<a href="https://digits.unitedover.com/changelog" target="_blank">' . __( 'View changelog', 'digits' ) . '</a>';
	}

	return $plugin_meta;

}

function get_digits_dir() {
	return plugin_dir_path( __FILE__ );
}

function get_digits_asset_uri( $path ) {
	return plugins_url( '/digits/' . $path );
}

add_action( 'init', function () {

	$session = new Digits_Session_Handler();


	if ( ! $session->get( 'digits_countrycode' ) ) {
		$session->set( 'digits_countrycode', getCountry() );
	}


}, 1 );


function digits_load_plugin_textdomain() {
	load_plugin_textdomain( 'digits', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

add_action( 'plugins_loaded', 'digits_load_plugin_textdomain' );


function dig_create_user_menu( $admin_bar ) {
	if ( ! user_can( get_current_user_id(), "create_users" ) ) {
		return;
	}

	$enable_createcustomeronorder = get_option( 'enable_createcustomeronorder' );
	if ( $enable_createcustomeronorder == 0 ) {
		return;
	}

	$args = array(
		'id'    => 'dig-create-user',
		'title' => __( '+ Add User', 'digits' ),
		'href'  => '#',
		'meta'  => array(
			'target' => '_self',
			'title'  => __( 'Add new user', 'digits' ),
			'class'  => 'DigCreateCustomer noaction',
		),
	);
	$admin_bar->add_menu( $args );

	createCustomerOnOrderPage( true );
}

add_action( 'admin_bar_menu', 'dig_create_user_menu', 100 ); // 10 = Position on the admin bar


function getCountry() {


	$countrycode_default = get_option( "dig_default_ccode" );

	if ( $countrycode_default != - 1 ) {
		$countrycode = getCountryCode( $countrycode_default );
		if ( ! empty( $countrycode ) ) {
			return $countrycode;
		}
	}
	$ip = isset( $_SERVER["HTTP_CF_CONNECTING_IP"] ) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER["REMOTE_ADDR"];

	$countryname = '';
	if ( class_exists( 'WC_Geolocation' ) ) {
		$location    = WC_Geolocation::geolocate_ip( '', true, false );
		$countrycode = $location['country'];
		$countryname = dig_countrycodetocountry( $countrycode );
	} else {


		if ( ! empty( $_SERVER['HTTP_CF_IPCOUNTRY'] ) ) { // WPCS: input var ok, CSRF ok.
			$countrycode = strtoupper( sanitize_text_field( wp_unslash( $_SERVER['HTTP_CF_IPCOUNTRY'] ) ) ); // WPCS: input var ok, CSRF ok.
		} elseif ( ! empty( $_SERVER['GEOIP_COUNTRY_CODE'] ) ) { // WPCS: input var ok, CSRF ok.
			// WP.com VIP has a variable available.
			$countrycode = strtoupper( sanitize_text_field( wp_unslash( $_SERVER['GEOIP_COUNTRY_CODE'] ) ) ); // WPCS: input var ok, CSRF ok.
		} elseif ( ! empty( $_SERVER['HTTP_X_COUNTRY_CODE'] ) ) { // WPCS: input var ok, CSRF ok.
			// VIP Go has a variable available also.
			$countrycode = strtoupper( sanitize_text_field( wp_unslash( $_SERVER['HTTP_X_COUNTRY_CODE'] ) ) ); // WPCS: input var ok, CSRF ok.
		} else {
			$ch = curl_init();
			curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );


			curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
			curl_setopt( $ch, CURLOPT_TIMEOUT, 6 );

			curl_setopt( $ch, CURLOPT_URL, 'https://tools.keycdn.com/geo.json?host=' . $ip );
			$result = curl_exec( $ch );
			curl_close( $ch );


			$uinfo = json_decode( $result );


			if ( isset( $uinfo->data->geo ) ) {
				$uinfo = $uinfo->data->geo;
			}
			if ( isset( $uinfo->country_name ) && ! empty( $uinfo->country_name ) ) {
				$countryname = $uinfo->country_name;
			}
		}
	}
	if ( empty( $countryname ) ) {
		$countrycode = getCountryCode( get_option( "dig_default_ccode" ) );
	} else {
		$countrycode = getCountryCode( $countryname );

	}


	if ( empty( $countrycode ) ) {

		$whiteListCountryCodes = get_option( "whitelistcountrycodes", array() );

		$size         = sizeof( $whiteListCountryCodes );
		$countryarray = getCountryList();

		if ( $size > 0 && is_array( $whiteListCountryCodes ) ) {
			$countrycode = $countryarray[ $whiteListCountryCodes[0] ];
		} else {
			$countrycode = reset( $countryarray );
		}
	}

	return $countrycode;
}

function getUserCountryCodeFunction() {


	$countrycode_default = get_option( "dig_default_ccode", - 1 );

	if ( $countrycode_default != - 1 ) {
		$countrycode = getCountryCode( $countrycode_default );

		if ( ! empty( $countrycode ) && checkwhitelistcode( $countrycode ) ) {
			return $countrycode;
		}
	}


	$session = new Digits_Session_Handler();

	if ( ! $session->get( 'digits_countrycode' ) ) {
		$country_code = getCountry();
		$session->set( 'digits_countrycode', $country_code );

		return $country_code;
	} else {
		$ccode = $session->get( 'digits_countrycode' );
		if ( checkwhitelistcode( $ccode ) ) {
			return $ccode;
		} else {
			return getCountry();
		}
	}
}

function getUserCountryCode() {
	$code = getUserCountryCodeFunction();

	if ( $code == null ) {
		return "+" . getCountryCode( get_option( "dig_default_ccode" ) );
	} else {
		return '+' . $code;
	}


}


add_action( 'woocommerce_admin_order_data_after_order_details', 'dig_ccreateCustomerOnOrderPage' );

function dig_ccreateCustomerOnOrderPage() {
	createCustomerOnOrderPage( false );

}

function createCustomerOnOrderPage( $noui = false ) {

	$enable_createcustomeronorder = get_option( 'enable_createcustomeronorder' );
	$defaultuserrole              = get_option( 'defaultuserrole' );

	if ( $enable_createcustomeronorder == 0 ) {
		return;
	}


	if ( ! $noui ) {
		?>

        <div class="digit-crncw button" id="DigCreateCustomer">
			<?php _e( 'Create New Customer', 'digits' ); ?>
        </div>
	<?php }

	$dir = 'ltr';
	if ( is_rtl() ) {
		$dir = 'rtl';
	}
	?>
    <div id="dig-ucr-container" class="dig-box">
        <div class="dig-content">
			<?php _e( 'Create Customer', 'digits' ); ?>

            <span class="dig-cont-close">&times;</span>
            <p>
                <input type="text" id="dig-cru-firstname" name="firstname"
                       placeholder="<?php _e( 'First Name', 'digits' ); ?>" autocomplete="off"
                       style="direction: <?php echo $dir ?>;"/>
                <input type="text" id="dig-cru-lastname" name="lastname"
                       placeholder="<?php _e( 'Last Name', 'digits' ); ?>" autocomplete="off"
                       style="direction: <?php echo $dir ?>;"/>
                <input type="text" id="username" class="dig-cru-mailormob" name="emailormobilenumber"
                       placeholder="<?php _e( 'Email/Mobile Number', 'digits' ); ?>"
                       autocomplete="off"/><br/>
            <div class="cancelccb button"><?php _e( 'Cancel', 'digits' ); ?></div>
            <div class="createcustomer dig_createcustomer button button-primary"><?php _e( 'Create Customer', 'digits' ); ?></div>
            <br/>
            </p>

        </div>

    </div>

	<?php

	wp_register_script( 'digits-cco', plugins_url( '/admin/assets/js/dig_cco.js', __FILE__ ), array( 'jquery' ), digits_version(), true );


	$jsData = array(
		'ajax_url'                           => admin_url( 'admin-ajax.php' ),
		'csrf'                               => wp_create_nonce( 'dig-create-user-order' ),
		'enterallfields'                     => __( 'Enter all fields!', 'digits' ),
		'invalidmailormobile'                => __( 'Invalid Email or mobile number!', 'digits' ),
		'error'                              => __( 'Error', 'digits' ),
		'EmailMobileNumberAlreadyRegistered' => __( 'Email/Mobile number has already registered', 'digits' ),
		'userregisteredsuccessfully'         => __( "User registered successfully", 'digits' )
	);
	wp_localize_script( 'digits-cco', 'dig_cco_obj', $jsData );


	wp_enqueue_script( 'digits-cco' );


	wp_enqueue_style( 'digits-cco-style', plugins_url( '/admin/assets/css/dig_cco.css', __FILE__ ), array(), digits_version() );


}

function createUserOnOrder() {
	if ( ! current_user_can( 'edit_user' ) && ! current_user_can( 'administrator' ) ) {
		die( '0' );
	}


	check_ajax_referer( 'dig-create-user-order', 'csrf', true );
	$enable_createcustomeronorder = get_option( 'enable_createcustomeronorder' );
	$defaultuserrole              = get_option( 'defaultuserrole' );


	$firstname = sanitize_text_field( $_REQUEST['firstname'] );
	$lastname  = sanitize_text_field( $_REQUEST['lastname'] );
	$phone     = sanitize_text_field( $_REQUEST['mailormob'] );

	$countrycode = sanitize_text_field( $_REQUEST['countrycode'] );

	if ( isValidMobile( $phone ) ) {
		$mailormob = $countrycode . $phone;
	} else {
		$mailormob = $phone;
	}


	if ( $firstname == "" || $lastname == "" || $mailormob == "" ) {
		die( "0" );
	}
	if ( ! isValidMobile( $phone ) && ! isValidEmail( $mailormob ) ) {
		die( "0" );
	}


	if ( empty( $pass ) ) {
		$pass = wp_generate_password();
	}


	$useMobAsUname = get_option( 'dig_mobilein_uname', 0 );

	if ( $useMobAsUname == 1 && isValidMobile( $phone ) ) {
		$mobu  = str_replace( "+", "", $mailormob );
		$check = username_exists( $mobu );
		if ( ! empty( $check ) ) {
			die( "0" );
		} else {
			$ulogin = $mobu;
		}
	} else {
		$check = username_exists( $firstname );
		if ( ! empty( $check ) ) {
			$suffix = 2;
			while ( ! empty( $check ) ) {
				$alt_ulogin = $firstname . $suffix;
				$check      = username_exists( $alt_ulogin );
				$suffix ++;
			}
			$ulogin = $alt_ulogin;
		} else {
			$ulogin = $firstname;
		}
	}


	if ( isValidMobile( $phone ) ) {
		$user1 = getUserFromPhone( $mailormob );
		if ( $user1 ) {
			die( "-1" );
		}
		$ulogin       = sanitize_user( $ulogin, true );
		$new_customer = wp_create_user( $ulogin, $pass );


		update_user_meta( $new_customer, 'digits_phone', $mailormob );
		update_user_meta( $new_customer, 'digt_countrycode', $countrycode );
		update_user_meta( $new_customer, 'digits_phone_no', $phone );

		update_user_meta( $new_customer, "billing_phone", $phone );


	} else {
		if ( email_exists( $mailormob ) ) {
			die( "-1" );
		}

		$validation_error = new WP_Error();
		$validation_error = apply_filters( 'digits_validate_email', $validation_error, $mailormob );

		if ( $validation_error->get_error_code() ) {
			die( '0' );
		}

		$ulogin       = sanitize_user( $ulogin, true );
		$new_customer = wp_create_user( $ulogin, $pass, $mailormob );
		update_user_meta( $new_customer, "billing_email", $mailormob );

	}

	if ( is_wp_error( $new_customer ) ) {
		die( "0" );
	}
	update_user_meta( $new_customer, 'last_name', $lastname );
	update_user_meta( $new_customer, 'first_name', $firstname );

	wp_update_user( array(
		'ID'           => $new_customer,
		'role'         => $defaultuserrole,
		'first_name'   => $firstname,
		'last_name'    => $lastname,
		'display_name' => $firstname
	) );

	do_action( 'register_new_user', $new_customer );
	$newuser->success = "1";
	$newuser->ID      = $new_customer;
	$newuser->url     = get_edit_user_link( $new_customer );
	echo json_encode( $newuser );

	die();


}

add_action( "wp_ajax_digits_create_user_order", "createUserOnOrder" );

if ( ! function_exists( 'isValidMobile' ) ) {
	function isValidMobile( $mobile ) {
		return preg_match( '/^[0-9]+$/', $mobile );
	}
}
if ( ! function_exists( 'isValidEmail' ) ) {
	function isValidEmail( $email ) {
		return is_email( $email );
	}
}

/**
 * Add a settings to plugin_action_links
 */
function dig_add_plugin_action_links( $links, $file ) {
	static $this_plugin;

	if ( ! $this_plugin ) {
		$this_plugin = plugin_basename( __FILE__ );
	}

	if ( $file == $this_plugin ) {
		$uri       = admin_url( "admin.php?page=digits_settings" );
		$wsl_links = '<a href="' . $uri . '">' . __( "Settings" ) . '</a>';

		array_unshift( $links, $wsl_links );
	}

	return $links;
}

add_filter( 'plugin_action_links', 'dig_add_plugin_action_links', 10, 2 );


add_action( 'wp_footer', function () {


	if ( function_exists( 'dig_custom_modal_temp' ) ) {
		return;
	}


	$registerContent = '';
	$dig_style       = 'style="display: none; opacity: 0; left: 31px; z-index: 2;top:0;"';
	$dig_main_re     = "dig-modal-con-reno";

	$userCountryCode = getUserCountryCode();


	$color     = get_option( 'digit_color' );
	$bgcolor   = "#4cc2fc";
	$fontcolor = 0;
	if ( $color !== false ) {
		$bgcolor = $color['bgcolor'];
		if ( isset( $color['fontcolor'] ) ) {
			$fontcolor = $color['fontcolor'];
		}
	}
	$theme             = "dark";
	$themevar          = "light";
	$themee            = "lighte";
	$bgtype            = "bgdark";
	$bgtransbordertype = "bgtransborderdark";
	$arrow             = plugins_url( 'assets/images/left_arrow_dark.png', __FILE__ );


	$color = get_option( 'digit_color_modal' );


	$bgcolor   = "rgba(6, 6, 6, 0.8)";
	$fontcolor = 0;

	$loginboxcolor = "rgba(255,255,255,1)";
	$sx            = 0;
	$sy            = 0;
	$sspread       = 0;
	$sblur         = 20;
	$scolor        = "rgba(0, 0, 0, 0.3)";
	$page_type     = 1;

	$fontcolor1       = "rgba(20,20,20,1)";
	$fontcolor2       = "rgba(255,255,255,1)";
	$sradius          = 4;
	$left_bg_position = 'Center Center';
	$left_bg_size     = 'auto';

	if ( $color !== false ) {
		$bgcolor = $color['bgcolor'];


		if ( isset( $color['fontcolor'] ) ) {
			$fontcolor = $color['fontcolor'];
			if ( $fontcolor == 1 ) {
				$fontcolor1 = "rgba(20,20,20,1)";
				$fontcolor2 = "rgba(255,255,255,1)";
			}
		}
		if ( isset( $color['sx'] ) ) {
			$sx            = $color['sx'];
			$sy            = $color['sy'];
			$sspread       = $color['sspread'];
			$sblur         = $color['sblur'];
			$scolor        = $color['scolor'];
			$fontcolor1    = $color['fontcolor1'];
			$fontcolor2    = $color['fontcolor2'];
			$loginboxcolor = $color['loginboxcolor'];
			$sradius       = $color['sradius'];


		}

	} else {

		$color         = get_option( 'digit_color' );
		$loginboxcolor = $color['bgcolor'];
		if ( isset( $color['fontcolor'] ) ) {
			$fontcolor = $color['fontcolor'];
			if ( $fontcolor == 1 ) {
				$fontcolor1 = "rgba(20,20,20,1)";
				$fontcolor2 = "rgba(255,255,255,1)";
			} else {
				$fontcolor2 = "rgba(20,20,20,1)";
				$fontcolor1 = "rgba(255,255,255,1)";
			}
		}
	}


	if ( isset( $color['type'] ) ) {
		$page_type = $color['type'];
		if ( $page_type == 2 ) {
			$left_color = $color['left_color'];
		}

		$input_bg_color             = $color['input_bg_color'];
		$input_border_color         = $color['input_border_color'];
		$input_text_color           = $color['input_text_color'];
		$button_bg_color            = $color['button_bg_color'];
		$signup_button_color        = $color['signup_button_color'];
		$signup_button_border_color = $color['signup_button_border_color'];
		$button_text_color          = $color['button_text_color'];
		$signup_button_text_color   = $color['signup_button_text_color'];
		$left_bg_position           = $color['left_bg_position'];
		$left_bg_size               = $color['left_bg_size'];
	}


	$left = 9;


	$bg  = get_option( 'digits_bg_image_modal' );
	$url = "";
	if ( ! empty( $bg ) ) {
		if ( is_numeric( $bg ) ) {
			$bg = wp_get_attachment_url( $bg );
		}
		$url = ", url('" . $bg . "')";
	}


	$custom_css = get_option( 'digit_custom_css' );
	$custom_css = str_replace( array( "\'", '/"' ), array( "'", '"' ), $custom_css );

	?>

    <style>
        <?php echo $custom_css;?>
        .dig-box {
            background-color: <?php echo $bgcolor;?>;
        }

        <?php if (!empty($backcolor)){?>

        .dig_page_cancel_color {
            color: <?php echo $backcolor;?>
        }

        <?php }?>
        .dig_login_rembe label:before,
        .dig-custom-field-type-radio .dig_opt_mult_con .selected:before,
        .dig-custom-field-type-radio .dig_opt_mult_con label:before,
        .dig-custom-field-type-tac .dig_opt_mult_con .selected:before,
        .dig-custom-field-type-checkbox .dig_opt_mult_con .selected:before,
        .dig-custom-field-type-tac .dig_opt_mult_con label:before,
        .dig-custom-field-type-checkbox .dig_opt_mult_con label:before {
            background-color: <?php echo $fontcolor1;?>;
        }

        .dig-modal-con {
            border-radius: <?php echo $sradius; ?>px;
            box-shadow: <?php echo $sx."px ".$sy."px ".$sblur."px ".$sspread."px ".$scolor; ?>;
            background: linear-gradient(<?php echo $loginboxcolor; ?>,<?php echo $loginboxcolor; ?>)<?php echo $url; ?>;
            background-size: cover;

        }

        <?php
        if($page_type==2){?>
        .dig_ul_left_side {
            background: <?php echo $left_color;?>;
        }

        <?php
        $input_bg_color = $color['input_bg_color'];
        $input_border_color = $color['input_border_color'];
        $input_text_color = $color['input_text_color'];
        $button_bg_color = $color['button_bg_color'];
        $signup_button_color = $color['signup_button_color'];
        $signup_button_border_color = $color['signup_button_border_color'];
        $button_text_color = $color['button_text_color'];
        $signup_button_text_color = $color['signup_button_text_color'];
        $left_bg_position = $color['left_bg_position'];
        $left_bg_size = $color['left_bg_size'];

?>
        .dig_ul_left_side {
            background-repeat: no-repeat;
            background-size: <?php echo $left_bg_size;?>;
            background-position: <?php echo $left_bg_position;?>;
        }

        .dig_ma-box .bgtransborderdark {
            color: <?php echo $signup_button_text_color; ?> !important;
        }

        .dig_ma-box .dark input[type="submit"], .dig_ma-box .lighte {
            color: <?php echo $button_text_color; ?> !important;
        }

        .dig_sbtncolor {
            color: <?php echo $button_text_color; ?>;
            background-color: <?php echo $button_bg_color; ?>;
        }


        .dig_ma-box .dark .nice-select span, .dig_ma-box .dark a, .dig_ma-box .dark .dig-cont-close, .dig_ma-box .dark,
        .dig_ma-box .dark .minput label, .dig_ma-box .dark .minput .minput input, .dig_ma-box .darke,
        .dig_pgmdl_2 .minput label {
            color: <?php echo $fontcolor1;?> !important;
        }

        .dig_pgmdl_2 .dark .nice-select span {
            color: <?php echo $input_text_color;?> !important;
        }

        .dig-custom-field .nice-select {
            background: <?php echo $input_bg_color;?>;
            padding-left: 1em;
            border: 1px solid <?php echo $input_border_color; ?> !important;
        }

        .dig_pgmdl_2 .nice-select::after {
            border-bottom: 2px solid <?php echo $input_border_color; ?> !important;
            border-right: 2px solid <?php echo $input_border_color; ?> !important;
        }

        .dig_ma-box .bgdark, .dig_ma-box .bgdark[type="submit"] {
            background-color: <?php echo $button_bg_color; ?> !important;
        }

        .dig_ma-box .bgtransborderdark {
            border: 1px solid<?php echo $signup_button_border_color; ?>;
            background: <?php echo $signup_button_color;?>;
        }


        #dig-ucr-container input[type="date"]:focus,
        #dig-ucr-container input[type="email"]:focus,
        #dig-ucr-container input[type="number"]:focus,
        #dig-ucr-container input[type="password"]:focus,
        #dig-ucr-container input[type="search"]:focus,
        #dig-ucr-container input[type="text"]:focus {
            background-color: <?php echo $input_bg_color;?> !important;
        }

        .dig_pgmdl_2 .minput .countrycodecontainer input,
        .dig_pgmdl_2 .minput input[type='date'],
        .dig_pgmdl_2 .minput input[type='number'],
        .dig_pgmdl_2 .minput input[type='password'],
        .dig_pgmdl_2 .minput textarea,
        .dig_pgmdl_2 .minput input[type='text'] {
            color: <?php echo $input_text_color;?> !important;
            background: <?php echo $input_bg_color;?>;
        }

        .dig_pgmdl_2 .minput .countrycodecontainer input,
        .dig_pgmdl_2 .minput input[type='date'],
        .dig_pgmdl_2 .minput input[type='number'],
        .dig_pgmdl_2 .minput textarea,
        .dig_pgmdl_2 .minput input[type='password'],
        .dig_pgmdl_2 .minput input[type='text'],
        .dig_pgmdl_2 input:focus:invalid:focus,
        .dig_pgmdl_2 textarea:focus:invalid:focus,
        .dig_pg_border_box,
        .dig_pgmdl_2 select:focus:invalid:focus {
            border: 1px solid <?php echo $input_border_color;?> !important;
        }

        .dig_ma-box .countrycodecontainer .dark {
            border-right: 1px solid <?php echo $input_border_color; ?> !important;
        }

        .dig_pgmdl_2 .minput .countrycodecontainer .dig_input_error,
        .dig_pgmdl_2 .minput .dig_input_error,
        .dig_pgmdl_2 .minput .dig_input_error[type='date'],
        .dig_pgmdl_2 .minput .dig_input_error[type='number'],
        .dig_pgmdl_2 .minput .dig_input_error[type='password'],
        .dig_pgmdl_2 .minput .dig_input_error[type='text'],
        .dig_pgmdl_2 .dig_input_error:focus:invalid:focus,
        .dig_pgmdl_2 .dig_input_error:focus:invalid:focus,
        .dig_pgmdl_2 .dig_input_error:focus:invalid:focus {
            border: 1px solid #E00000 !important;
        }

        <?php }else{ ?>

        .dig_ma-box .dark .nice-select span, .dig_ma-box .dark a, .dig_ma-box .dark .dig-cont-close, .dig_ma-box .dark, .dig_ma-box .dark .minput label, .dig_ma-box .dark .minput input, .dig_ma-box .darke {
            color: <?php echo $fontcolor1; ?> !important;
        }


        .dig_sbtncolor {
            color: <?php echo $fontcolor2; ?>;
            background-color: <?php echo $fontcolor1; ?>;
        }

        .dig_ma-box .dark input[type="submit"], .dig_ma-box .lighte {
            color: <?php echo $fontcolor2; ?> !important;
        }

        .dig_ma-box .bglight {
            background-color: <?php echo $fontcolor1; ?>;
        }

        .dig_ma-box .bgtransborderlight {
            border: 1px solid<?php echo $fontcolor1; ?>;
            background: transparent;
        }

        .dig_ma-box .bgdark, .dig_ma-box .bgdark[type="submit"] {
            background-color: <?php echo $fontcolor1; ?>;
        }

        .dig-custom-field .nice-select {
            border-bottom: 1px solid<?php echo $fontcolor1; ?>;
        }

        .dig_ma-box .bgtransborderdark {
            border: 1px solid<?php echo $fontcolor1; ?>;
            background: transparent;
        }

        .dig_ma-box .countrycodecontainer .dark {
            border-right: 1px solid <?php echo $fontcolor1; ?> !important;
        }

        #dig-ucr-container .minput input[type="date"]:focus,
        #dig-ucr-container .minput input[type="email"]:focus,
        #dig-ucr-container .minput input[type="number"]:focus,
        #dig-ucr-container .minput input[type="password"]:focus,
        #dig-ucr-container .minput input[type="search"]:focus,
        #dig-ucr-container .minput input[type="text"]:focus {
            background-color: transparent !important;
            background: transparent !important;;

        }

        <?php }
        if(is_rtl()){
            ?>
        .minput label {
            right: 0 !important;
            left: auto !important;
        }

        .dig_ma-box .minput input[type="checkbox"], .dig_ma-box .minput input[type="radio"] {
            margin-left: 4px;
        }

        <?php
                }
                ?>

    </style>
    <div class="dig_load_overlay">
        <div class="dig_load_content">
            <div class="dig_spinner">
                <div class="dig_double-bounce1"></div>
                <div class="dig_double-bounce2"></div>
            </div>
			<?php


			?>
        </div>
    </div>
	<?php if ( ! is_user_logged_in() ) {


		$digits_modal_class = implode( " ", apply_filters( 'digits_modal_class', array() ) );
		?>


        <div id="dig-ucr-container" class="<?php if ( is_rtl() ) {
			echo 'dig_rtl';
		} ?> dig_lrf_box dig_ma-box dig-box <?php echo $digits_modal_class . ' ';
		echo $dig_main_re;
		if ( $page_type == 2 ) {
			echo ' dig_pgmdl_2';
		} else {
			echo 'dig_pgmdl_1';
		} ?>" style="display:none;">


            <div class="dig-content dig-modal-con <?php if ( $page_type == 2 ) {
				echo 'dig_ul_divd';
			}
			echo ' ' . $theme; ?>">
				<?php if ( $page_type == 2 ) {
					$bg_left = get_option( 'digits_left_bg_image_modal' );

					if ( ! empty( $bg_left ) ) {
						if ( is_numeric( $bg_left ) ) {
							$bg_left = wp_get_attachment_url( $bg_left );
						}
					}
					?>
                    <div class="dig_ul_left_side" style="background-image: url('<?php echo $bg_left; ?>');">
                    </div>

				<?php } ?>


                <div class="digits_bx_cred_frm_container">
                    <span class="dig-box-login-title"><?php _e( 'Log In', 'digits' ); ?></span>
                    <span class="dig-cont-close"><span>&times;</span></span>

                    <div class="digits_bx_cred_frm">
                        <div class="dig_bx_cnt_mdl">


							<?php


							if ( $page_type == 2 ) {
								dig_verify_otp_box();
							}


							$dig_cust_forms = apply_filters( 'dig_hide_forms', 0 );
							if ( $dig_cust_forms === 0 ) {
								echo '<div class="dig-log-par">';
								digits_forms();
								echo '</div>';
							} else {
								do_action( 'digits_custom_form' );
							}
							?>
                        </div>
                    </div>
                </div>
				<?php
				if ( $page_type == 2 ) {
					/*<div class="dig_login_cancel">
						<a href="#"
						   class="dig_page_cancel_color"><span><?php _e( "Cancel", "digits" );<!--</span></a>
					</div> */
				}
				?>
            </div>
        </div>

		<?php
	}

	digCountry();
}
);

function dig_login_contents( $modal, $type = 1, $page = false ) {

	$left           = 9;
	$element        = '';
	$registerButton = '';

	$modalBox = '';

	$dtype = 1;
	if ( ! $modal ) {
		$dtype = 10;
	}
	$element = 'onclick="jQuery(\'this\').digits_login_modal(jQuery(this));return false;" attr-disclick="1" class="digits-login-modal"';


	wp_enqueue_style( 'digits-login-style' );
	wp_enqueue_script( 'digits-login-script' );

	$diglogintrans     = get_option( "diglogintrans", "Login / Register" );
	$digregistertrans  = get_option( "digregistertrans", "Register" );
	$digforgottrans    = get_option( "digforgottrans", "Forgot your Password?" );
	$digmyaccounttrans = get_option( "digmyaccounttrans", "My Account" );

	$digonlylogintrans = get_option( "digonlylogintrans", __( "Login", "digits" ) );

	$opatt = "";
	if ( $page ) {
		$opatt = "data-fal='1'";
	}
	if ( ! is_user_logged_in() ) {

		if ( $type == 1 ) {
			return '<span href="?login=true' . dig_url_language() . '" ' . $element . ' ' . $opatt . ' type="' . $dtype . '"><span>' . $diglogintrans . '</span></span>' . $modalBox;
		} else if ( $type == 2 ) {
			return '<span href="?login=true&page=2' . dig_url_language() . '" ' . $element . ' ' . $opatt . ' type="2"><span>' . $digregistertrans . '</span></span>' . $modalBox;
		} else if ( $type == 3 ) {
			return '<span href="?login=true&page=3' . dig_url_language() . '" ' . $element . ' ' . $opatt . ' type="3"><span>' . $digforgottrans . '</span></span>' . $modalBox;
		} else if ( $type == 4 ) {
			return '<span href="?login=true&page=4' . dig_url_language() . '" ' . $element . ' ' . $opatt . ' type="4"><span>' . $digonlylogintrans . '</span></span>' . $modalBox;
		}

	} else if ( $type == 1 ) {
		$custom_redirect = get_option( 'digits_myaccount_redirect' );
		if ( ! empty( $custom_redirect ) ) {
			$url = $custom_redirect;
		} else if ( class_exists( 'WooCommerce' ) ) {
			$url = get_permalink( get_option( 'woocommerce_myaccount_page_id' ) );
		} else if ( function_exists( 'bp_is_active' ) ) {
			$url = bp_core_get_user_domain( get_current_user_id() ) . 'profile/';
		} else {
			$url = get_author_posts_url( get_current_user_id() );
		}

		return '<span href=' . $url . ' ' . $element . ' type="10"><span>' . $digmyaccounttrans . '</span></span>';
	}
}


add_filter( 'wp_nav_menu_items', 'do_shortcode' );

function digits_login_button() {
	return dig_login_contents( false );
}

add_shortcode( 'digits-login', 'digits_login_button' );


add_shortcode( 'dm-page', 'digits_login_button' );


function digits_logout() {
	if ( is_user_logged_in() ) {
		$url = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		$query = parse_url( $url, PHP_URL_QUERY );

// Returns a string if the URL has parameters or NULL if not
		if ( $query ) {
			$url .= '&logout=true&lnounce=' . wp_create_nonce( "lnounce" );
		} else {
			$url .= '?logout=true&lnounce=' . wp_create_nonce( "lnounce" );
		}

		$logouttrans = get_option( 'diglogouttrans', 'Logout' );

		return "<span href='" . $url . dig_url_language() . "' type='10' class=\"digits-login-modal\"><span>" . __( $logouttrans, "digits" ) . "</span></span>";
	}
}

add_shortcode( 'digits-logout', 'digits_logout' );
add_shortcode( 'dm-logout', 'digits_logout' );

//add_shortcode("digits-ihc-reg-mob","dig_addregmob");
function dig_addregmob() {
	?>
    <div id="dig_ihc_mobcon">
        <input type="hidden" name="dig_nounce" class="dig_nounce" value="<?php echo wp_create_nonce( 'dig_form' ) ?>">
        <input type="hidden" name="code" id="dig_ihc_ea_code"/>
        <input type="hidden" name="csrf" id="dig_ihc_ea_csrf"/>
        <input type="hidden" id="dig_ihc_reg_cqr"/>

        <input type="hidden" name="current_mob" id="dig_ihc_current_mob"
               value="<?php echo esc_attr( get_the_author_meta( 'digits_phone_no', get_current_user_id() ) ); ?>"/>
        <div id="dig_ihc_mobotp" class="iump-form-line-register iump-form-text" style="display:none;">
            <input type="text" id="dig_ihc_otp" name="dig_ihc_mobileno"
                   placeholder="<?php _e( "OTP", "digits" ); ?>"/>
        </div>
    </div>
	<?php
}

function dig_addmobile() {
	?>
    <div id="dig_ihc_mobcon">
        <input type="hidden" name="dig_nounce" class="dig_nounce" value="<?php echo wp_create_nonce( 'dig_form' ) ?>">
        <input type="hidden" name="code" id="dig_ihc_ea_code"/>
        <input type="hidden" name="csrf" id="dig_ihc_ea_csrf"/>

        <input type="hidden" name="dig_ihc_current_mob" id="dig_ihc_current_mob"
               value="<?php echo esc_attr( get_the_author_meta( 'digits_phone_no', get_current_user_id() ) ); ?>"/>
        <div class="iump-form-line-register iump-form-text">
            <label style="display:none;"><?php _e( "Mobile Number", "digits" ); ?></label>
            <input type="text" id="username" name="dig_ihc_mobileno"
                   placeholder="<?php _e( "Mobile Number", "digits" ); ?>" mob="1"
                   countryCode="<?php echo esc_attr( get_the_author_meta( 'digt_countrycode', get_current_user_id() ) ); ?>"
                   value="<?php echo esc_attr( get_the_author_meta( 'digits_phone_no', get_current_user_id() ) ); ?>"/>
        </div>

        <input type="hidden" name="current_mob" id="dig_bp_current_mob"
               value="<?php echo esc_attr( get_the_author_meta( 'digits_phone_no', get_current_user_id() ) ); ?>"/>

        <div id="dig_ihc_mobotp" class="iump-form-line-register iump-form-text" style="display:none;">
            <input type="text" id="dig_ihc_otp" name="dig_ihc_otp" placeholder="<?php _e( "OTP", "digits" ); ?>"/>
        </div>

    </div>
	<?php
}


function digits_modal_login() {
	return dig_login_contents( true );
}

add_shortcode( 'digits-modal-login', 'digits_modal_login' );


add_shortcode( 'dm-modal', 'digits_modal_login' );


function digits_modal_registration() {
	return dig_login_contents( true, 2 );

}

function digits_modal_forgotpass() {
	return dig_login_contents( true, 3 );
}

add_shortcode( 'digits-registration', 'digits_modal_registration' );
add_shortcode( 'digits-forgot-password', 'digits_modal_forgotpass' );

add_shortcode( 'dm-signup-modal', 'digits_modal_registration' );
add_shortcode( 'dm-registration-modal', 'digits_modal_registration' );
add_shortcode( 'dm-forgot-password-modal', 'digits_modal_forgotpass' );


function digits_page_registration() {
	return dig_login_contents( true, 2, true );

}

function digits_page_forgotpass() {
	return dig_login_contents( true, 3, true );
}

add_shortcode( 'digits-page-registration', 'digits_page_registration' );
add_shortcode( 'digits-page-forgot-password', 'digits_page_forgotpass' );


add_shortcode( 'dm-signup-page', 'digits_page_registration' );
add_shortcode( 'dm-registration-page', 'digits_page_registration' );
add_shortcode( 'dm-forgot-password-page', 'digits_page_forgotpass' );


function digits_modal_onlylogin() {
	return dig_login_contents( true, 4 );
}

function digits_page_onlylogin() {
	return dig_login_contents( false, 4, true );
}

add_shortcode( 'dm-login-modal', 'digits_modal_onlylogin' );
add_shortcode( 'dm-login-page', 'digits_page_onlylogin' );


add_action( 'admin_menu', 'digits_admin_menus' );


function digits_activate() {

	do_action( 'digits_activation_hooks' );

	if ( version_compare( PHP_VERSION, '5.5', '<' ) && is_admin() ) {
		$version_required = sprintf( '<div><p>You are currently using outdated version of PHP %1$s. Please update your PHP to newer version, Digits requires PHP v5.5 or higher to work. </p></div>', PHP_VERSION );
		wp_die( $version_required );
	}


	if ( ! function_exists( 'curl_version' ) ) {
		wp_die( __( '<div><p><b>Fatal Error</b>: Digits requires curl to work correctly. </p></div>', 'digits' ) );
	}

	dig_pcd_act();
	add_option( 'digits_do_activation_redirect', true );
}


add_action( 'admin_init', 'digits_redirect' );

register_activation_hook( __FILE__, 'digits_activate' );

function digits_redirect() {

	if ( get_option( 'digits_survery_pop_redirect', false ) == false ) {

		update_option( 'digits_survery_pop_redirect', true );
		wp_redirect( esc_url_raw( admin_url( "/admin.php?page=digits_settings&show_survey=1" ) ) );
	}
	/*if (get_option('digits_do_activation_redirect', false) == true) {
        update_option('digits_do_activation_redirect', false);
        wp_redirect(esc_url_raw(admin_url("index.php?page=digits-setup&step=page")));
    }*/
}


function dig_fonts() {

	$fonts = array(
		"Roboto:700,500,500i,400,200,300"
	);

	$fonts_collection = add_query_arg( array(

		"family" => urlencode( implode( "|", $fonts ) ),

	), 'https://fonts.googleapis.com/css' );

	return $fonts_collection;
}


$DigitsUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://bridge.unitedover.com/updates/changelog/digits.json',
	__FILE__,
	'digits'
);

$DigitsUpdateChecker->addQueryArgFilter( 'dig_filter_update_checks' );
function dig_filter_update_checks( $queryArgs ) {

	$digpc = dig_get_option( 'dig_purchasecode' );
	if ( ! empty( $digpc ) ) {
		$queryArgs['license_key'] = dig_get_option( 'dig_purchasecode' );
	}

	$queryArgs['request_site'] = network_home_url();

	$queryArgs['license_type'] = dig_get_option( 'dig_license_type', 1 );

	$plugin_version = digits_version();

	$queryArgs['version'] = $plugin_version;


	return $queryArgs;
}


function dig_get_locale( $locale, $supportedLocales ) {
	foreach ( $supportedLocales as $v ) {
		;
		if ( stripos( strtolower( $v ), strtolower( $locale ) ) !== false ) {
			return $v;
		}
	}

	return false;
}


/**
 * Show the signin/signup page.
 */


function dig_removeParam( $url, $param ) {
	$url = preg_replace( '/(&|\?)' . preg_quote( $param ) . '=[^&]*$/', '', $url );
	$url = preg_replace( '/(&|\?)' . preg_quote( $param ) . '=[^&]*&/', '$1', $url );

	return $url;
}


function digits_login() {


	if ( isset( $_GET['logout'] ) && isset( $_GET['lnounce'] ) ) {
		if ( ! empty( $_GET['logout'] ) || 'true' == $_GET['logout'] ) {
			$nounce = wp_verify_nonce( $_GET['lnounce'], 'lnounce' );
			if ( is_user_logged_in() && $nounce ) {


				$current_url = get_option( "digits_logoutred" );
				if ( empty( $current_url ) ) {
					$current_url = site_url();
				}


				wp_logout();
				wp_safe_redirect( $current_url );
				exit();
			}
		}
	}
	if ( ! isset( $_GET['login'] ) ) {
		return;
	}
	if ( empty( $_GET['login'] ) || 'true' !== $_GET['login'] || is_user_logged_in() ) {
		return;
	}


	// Redirect to https login if forced to use SSL
	if ( force_ssl_admin() && ! is_ssl() ) {
		if ( 0 === strpos( $_SERVER['REQUEST_URI'], 'http' ) ) {
			wp_redirect( set_url_scheme( $_SERVER['REQUEST_URI'], 'https' ) );
			exit();
		} else {
			wp_redirect( 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
			exit();
		}
	}


	$digforgotpass      = get_option( 'digforgotpass', 1 );
	$users_can_register = get_option( 'dig_enable_registration', 1 );

	$page = ! empty( $_GET['page'] ) ? sanitize_text_field( $_GET['page'] ) : '1';
	if ( ( $users_can_register == 0 && $page == 2 ) || ( $digforgotpass == 0 && $page == 3 ) ) {
		$page = 1;
	}
	if ( $page > 1 && $page > 3 ) {
		$page = 1;
	}


	$validation_error = new WP_Error();

	$show_changepass_fields = false;

	digits_process_login();
	digits_process_forgotpassword();

	// Don't index any of these forms
	add_action( 'login_head', 'wp_no_robots' );

	add_action( 'login_head', 'wp_login_viewport_meta' );

	$separator = is_rtl() ? ' &rsaquo; ' : ' &lsaquo; ';

	$color     = get_option( 'digit_color' );
	$bgcolor   = "#4cc2fc";
	$fontcolor = 0;

	$loginboxcolor = "rgba(255,255,255,1)";
	$sx            = 0;
	$sy            = 2;
	$sspread       = 0;
	$sblur         = 4;
	$scolor        = "rgba(0, 0, 0, 0.5)";

	$fontcolor2 = "rgba(255,255,255,1)";
	$fontcolor1 = "rgba(20,20,20,1)";

	$left_color       = 'rgba(255,255,255,1)';
	$page_type        = 1;
	$sradius          = 4;
	$left_bg_position = 'Center Center';
	$left_bg_size     = 'auto';
	if ( $color !== false ) {
		$bgcolor = $color['bgcolor'];


		if ( isset( $color['fontcolor'] ) ) {
			$fontcolor     = $color['fontcolor'];
			$loginboxcolor = $bgcolor;
			$scolor        = "rgba(0,0,0,0)";
			if ( $fontcolor == 1 ) {
				$fontcolor1 = "rgba(20,20,20,1)";
				$fontcolor2 = "rgba(255,255,255,1)";
			}
		}
		if ( isset( $color['sx'] ) ) {
			$sx            = $color['sx'];
			$sy            = $color['sy'];
			$sspread       = $color['sspread'];
			$sblur         = $color['sblur'];
			$scolor        = $color['scolor'];
			$fontcolor1    = $color['fontcolor1'];
			$fontcolor2    = $color['fontcolor2'];
			$loginboxcolor = $color['loginboxcolor'];
			$sradius       = $color['sradius'];
			$backcolor     = $color['backcolor'];

		}
		if ( isset( $color['type'] ) ) {
			$page_type = $color['type'];
			if ( $page_type == 2 ) {
				$left_color = $color['left_color'];
			}

			$input_bg_color             = $color['input_bg_color'];
			$input_border_color         = $color['input_border_color'];
			$input_text_color           = $color['input_text_color'];
			$button_bg_color            = $color['button_bg_color'];
			$signup_button_color        = $color['signup_button_color'];
			$signup_button_border_color = $color['signup_button_border_color'];
			$button_text_color          = $color['button_text_color'];
			$signup_button_text_color   = $color['signup_button_text_color'];
			$left_bg_position           = $color['left_bg_position'];
			$left_bg_size               = $color['left_bg_size'];
		}

	}


	wp_register_style( 'digits-main-login-style', plugins_url( '/assets/css/login_body.css', __FILE__ ), array(), digits_version(), 'all' );

	$userCountryCode = getUserCountryCode();


	?>

    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
		<?php
		function wp_login_viewport_meta() {
			?>
            <meta name="viewport" content="width=device-width"/>
		<?php } ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title><?php echo get_bloginfo( 'name', 'display' ) . $separator; ?><?php _e( "Log In", "digits" ); ?></title>
		<?php
		/**
		 * Enqueue scripts and styles for the login page.
		 *
		 * @since 3.1.0
		 */

		do_action( 'login_enqueue_scripts' );
		wp_print_styles( 'digits-main-login-style' );
		do_action( 'login_head' );


		if ( isset( $_GET['back'] ) ) {
			$current_url = "//" . $_SERVER['HTTP_HOST'];
		} else {
			$current_url = "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			$current_url = dig_removeParam( $current_url, "login" );
			$current_url = dig_removeParam( $current_url, "page" );
		}

		$left = 9;

		$users_can_register = get_option( 'dig_enable_registration', 1 );


		$theme             = "dark";
		$themevar          = "light";
		$themee            = "lighte";
		$bgtype            = "bgdark";
		$bgtransbordertype = "bgtransborderdark";

		$bg  = get_option( 'digits_bg_image' );
		$url = "";
		if ( ! empty( $bg ) ) {
			if ( is_numeric( $bg ) ) {
				$bg = wp_get_attachment_url( $bg );
			}
			$url = ", url(" . $bg . ")";
		}


		$custom_css = get_option( 'digit_custom_css' );
		$custom_css = str_replace( array( "\'", '/"' ), array( "'", '"' ), $custom_css );
		?>
        <style>
            <?php echo $custom_css;?>
            .dig-container {
                background-color: <?php echo $loginboxcolor; ?>;
                border-radius: <?php echo $sradius; ?>px;
                box-shadow: <?php echo $sx."px ".$sy."px ".$sblur."px ".$sspread."px ".$scolor; ?>
            }

            body {
                background: linear-gradient(<?php echo $bgcolor; ?>,<?php echo $bgcolor; ?>)<?php echo $url; ?>;
                background-size: cover;
                background-attachment: fixed;
            }


            .dig_ma-box .bglight {
                background-color: <?php echo $fontcolor1; ?>;
            }


            <?php if (!empty($backcolor)){?>

            .dig_page_cancel_color {
                color: <?php echo $backcolor;?>
            }

            <?php }?>

            .dig_login_rembe label:before,
            .dig-custom-field-type-radio .dig_opt_mult_con .selected:before,
            .dig-custom-field-type-radio .dig_opt_mult_con label:before,
            .dig-custom-field-type-tac .dig_opt_mult_con .selected:before,
            .dig-custom-field-type-checkbox .dig_opt_mult_con .selected:before,
            .dig-custom-field-type-tac .dig_opt_mult_con label:before,
            .dig-custom-field-type-checkbox .dig_opt_mult_con label:before {
                background-color: <?php echo $fontcolor1;?>;
            }


            <?php if($page_type==2){ ?>
            .dig_ul_left_side {
                background: <?php echo $left_color;?>;
            }

            <?php
            $input_bg_color = $color['input_bg_color'];
            $input_border_color = $color['input_border_color'];
            $input_text_color = $color['input_text_color'];
            $button_bg_color = $color['button_bg_color'];
            $signup_button_color = $color['signup_button_color'];
            $signup_button_border_color = $color['signup_button_border_color'];
            $button_text_color = $color['button_text_color'];
            $signup_button_text_color = $color['signup_button_text_color'];
            $left_bg_position = $color['left_bg_position'];
            $left_bg_size = $color['left_bg_size'];

 ?>
            .dig_ul_left_side {
                background-repeat: no-repeat;
                background-size: <?php echo $left_bg_size;?>;
                background-position: <?php echo $left_bg_position;?>;
            }

            .dig_ma-box .bgtransborderdark {
                color: <?php echo $signup_button_text_color; ?>;
            }

            .dig_ma-box .dark input[type="submit"], .dig_ma-box .lighte {
                color: <?php echo $button_text_color; ?> !important;
            }

            .dig_ma-box .dark .nice-select span, .dig_ma-box .dark a, .dig_ma-box .dark .dig-cont-close, .dig_ma-box .dark,
            .dig_ma-box .dark .minput label, .dig_ma-box .dark .minput input, .dig_ma-box .darke,
            .dig_pgmdl_2 .minput label {
                color: <?php echo $fontcolor1;?> !important;
            }

            .dig_pgmdl_2 .dark .nice-select span {
                color: <?php echo $input_text_color;?> !important;
            }

            .dig_sbtncolor {
                color: <?php echo $button_text_color; ?>;
                background-color: <?php echo $button_bg_color; ?>;
            }

            .dig-custom-field .nice-select {
                background: <?php echo $input_bg_color;?>;
                padding-left: 1em;
                border: 1px solid <?php echo $input_border_color; ?> !important;
            }

            .dig_pgmdl_2 .nice-select::after {
                border-bottom: 2px solid <?php echo $input_border_color; ?> !important;
                border-right: 2px solid <?php echo $input_border_color; ?> !important;
            }

            .dig_ma-box .bgdark {
                background-color: <?php echo $button_bg_color; ?>;
            }

            .dig_ma-box .bgtransborderdark {
                border: 1px solid<?php echo $signup_button_border_color; ?>;
                background: <?php echo $signup_button_color;?>;
            }

            .dig_pgmdl_2 .minput .countrycodecontainer input,
            .dig_pgmdl_2 .minput input[type='date'],
            .dig_pgmdl_2 .minput input[type='number'],
            .dig_pgmdl_2 .minput input[type='password'],
            .dig_pgmdl_2 .minput textarea,
            .dig_pgmdl_2 .minput input[type='text'] {
                color: <?php echo $input_text_color;?> !important;
                background: <?php echo $input_bg_color;?>;
            }

            .dig_pgmdl_2 .minput .countrycodecontainer input,
            .dig_pgmdl_2 .minput input[type='date'],
            .dig_pgmdl_2 .minput input[type='number'],
            .dig_pgmdl_2 .minput textarea,
            .dig_pgmdl_2 .minput input[type='password'],
            .dig_pgmdl_2 .minput input[type='text'],
            .dig_pgmdl_2 input:focus:invalid:focus,
            .dig_pgmdl_2 textarea:focus:invalid:focus,
            .dig_pg_border_box,
            .dig_pgmdl_2 select:focus:invalid:focus {
                border: 1px solid <?php echo $input_border_color;?> !important;
            }

            .dig_ma-box .countrycodecontainer .dark {
                border-right: 1px solid <?php echo $input_border_color; ?> !important;
            }


            .dig-bgleft-arrow-right {
                border-left-color: <?php echo $left_color;?>;
            }

            .dig_pgmdl_2 .minput .countrycodecontainer .dig_input_error,
            .dig_pgmdl_2 .minput .dig_input_error,
            .dig_pgmdl_2 .minput .dig_input_error[type='date'],
            .dig_pgmdl_2 .minput .dig_input_error[type='number'],
            .dig_pgmdl_2 .minput .dig_input_error[type='password'],
            .dig_pgmdl_2 .minput .dig_input_error[type='text'],
            .dig_pgmdl_2 .dig_input_error:focus:invalid:focus,
            .dig_pgmdl_2 .dig_input_error:focus:invalid:focus,
            .dig_pgmdl_2 .dig_input_error:focus:invalid:focus {
                border: 1px solid #E00000 !important;
            }


            <?php
                $footer_text_color = get_option('login_page_footer_text_color');
                if(!empty($footer_text_color)){
                    echo '.dig_lp_footer,.dig_lp_footer *{color: '.$footer_text_color.';}';
                }
            ?>


            <?php }else{
                ?>
            .dig_sbtncolor {
                color: <?php echo $fontcolor2; ?>;
                background-color: <?php echo $fontcolor1; ?>;
            }

            .dig_ma-box .dark input[type="submit"], .dig_ma-box .lighte {
                color: <?php echo $fontcolor2; ?>;
            }

            .dig_ma-box .bgdark {
                background-color: <?php echo $fontcolor1; ?>;
            }

            .dig_ma-box .dark .nice-select span, .dig_ma-box .dark a, .dig_ma-box .dark .dig-cont-close, .dig_ma-box .dark,
            .dig_ma-box .dark .minput label, .dig_ma-box .dark .minput input, .dig_ma-box .darke {
                color: <?php echo $fontcolor1; ?>;
            }

            .dig_ma-box .countrycodecontainer .dark {
                border-right: 1px solid <?php echo $fontcolor1; ?> !important;
            }

            .dig_ma-box .bgtransborderdark {
                border: 1px solid<?php echo $fontcolor1; ?>;
                background: transparent;
            }

            .dig-custom-field .nice-select {
                border-bottom: 1px solid<?php echo $fontcolor1; ?>;
            }

            <?php
            }
            if(is_rtl()){
               ?>

            .minput label {
                right: 0 !important;
                left: auto !important;
            }

            <?php
         }?>
        </style>

    </head>
    <body>
    <div class="dig_bdy_container <?php if ( $page_type == 2 ) {
		echo 'dig_ul_divd';
	} ?>">
		<?php if ( $page_type == 2 ) {
			$bg_left = get_option( 'digits_left_bg_image' );

			if ( ! empty( $bg_left ) ) {
				if ( is_numeric( $bg_left ) ) {
					$bg_left = wp_get_attachment_url( $bg_left );
				}
			}
			?>
            <div class="dig_ul_left_side" style="background-image: url('<?php echo $bg_left; ?>');">
				<?php

				$footer = trim( get_option( 'login_page_footer' ) );

				if ( ! empty( $footer ) ) {
					echo '<div class="dig_lp_footer">' . base64_decode( $footer ) . '</div>';
				}
				?>
            </div>

            <div class="dig-bgleft-arrow-right"></div>

		<?php } ?>

        <div class="dig_lrf_box dig_ma-box <?php if ( $page_type == 2 ) {
			echo 'dig_pgmdl_2';
		} else {
			echo 'dig_pgmdl_1';
		} ?>">
            <div class="header <?php echo $theme; ?>">
				<?php if ( $page_type == 1 ) { ?>
                    <a href="<?php echo $current_url; ?>" <?php if ( ! empty( $backcolor ) ) {
						echo 'style="color:' . $backcolor . ';"';
					} ?>><span><?php _e( "BACK", "digits" ); ?></span></a>
				<?php } ?>
            </div>
			<?php
			$logo = get_option( 'digits_logo_image' );
			$top  = 0;

			if ( ! empty( $logo ) ) {
				$top = 0;
				?>
                <div class="logocontainer"><a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php
						$imgid = $logo;
						if ( is_numeric( $imgid ) ) {
							echo wp_get_attachment_url( $imgid );
						} else {
							echo $imgid;
						}
						?>" alt="Logo" draggable="false"/></a>
                </div>
			<?php } ?>
            <div class="dig_clg_bx" style="opacity: 0;">
                <div class="<?php if ( is_rtl() ) {
					echo 'dig_rtl';
				} ?> dig-container dig_lrf_box dig_ma-box <?php echo $theme; ?> <?php if ( $page == 2 ) {
					echo 'dig-min-het';
				} ?>">

					<?php
					$dig_login_details = digit_get_login_fields();


					$emailaccep = $dig_login_details['dig_login_email'];
					$passaccep  = $dig_login_details['dig_login_password'];
					$mobileaccp = $dig_login_details['dig_login_mobilenumber'];
					$otpaccp    = $dig_login_details['dig_login_otp'];

					$captcha = $dig_login_details['dig_login_captcha'];

					if ( $emailaccep == 1 && $mobileaccp == 1 ) {
						$emailaccep = 2;
					}

					if ( $emailaccep == 2 ) {
						$emailmob = __( "Email/Mobile Number", "digits" );
					} else if ( $mobileaccp == 1 ) {
						$emailmob = __( "Mobile Number", "digits" );
					} else if ( $emailaccep > 0 ) {
						$emailmob = __( "Email", "digits" );
					} else {
						$emailmob = __( "Username", "digits" );
					}


					$requested_redirect_to = isset( $_REQUEST['redirect_to'] ) ? $_REQUEST['redirect_to'] : '';
					/**
					 * Filters the login redirect URL.
					 *
					 * @param string $redirect_to The redirect destination URL.
					 * @param string $requested_redirect_to The requested redirect destination URL passed as a parameter.
					 * @param WP_User|WP_Error $user WP_User object if login was successful, WP_Error object otherwise.
					 *
					 * @since 3.0.0
					 *
					 */
					$redirect_to = apply_filters( 'login_redirect', '', $requested_redirect_to, '' );


					if ( $page_type == 2 ) {
						dig_verify_otp_box();
					}


					$dig_cust_forms = apply_filters( 'dig_hide_forms', 0 );

					if ( $dig_cust_forms === 0 ) {
						?>

                        <div class="digloginpage" <?php if ( $page != 1 ) {
							echo 'style="display: none;"';
						} ?>>
                            <form accept-charset="utf-8" class="digits_login" method="post">
                                <div class="dig_rl_msg_div"><?php if ( ! empty( $login_message ) ) {
										echo "<br />" . $login_message;
									} ?></div>
                                <div class="minput">
                                    <input type="text" name="mobmail" class="mobile_field mobile_format dig-mobmail"
                                           value="<?php if ( isset( $_POST['mobmail'] ) ) {
										       echo esc_attr( wp_unslash( $_POST['mobmail'] ) );
									       } ?>" required/>

                                    <div class="countrycodecontainer logincountrycodecontainer">
                                        <input type="text" name="countrycode"
                                               class="input-text countrycode logincountrycode <?php echo $theme; ?>"
                                               value="<?php if ( isset( $countrycode ) ) {
											       echo $countrycode;
										       } else {
											       echo $userCountryCode;
										       } ?>"
                                               maxlength="6" size="3" placeholder="<?php echo $userCountryCode; ?>"/>
                                    </div>

                                    <label><?php echo $emailmob; ?></label>
                                    <span class="<?php echo $bgtype; ?>"></span></div>


								<?php


								if ( $mobileaccp == 1 ) {
									?>
                                    <div class="minput dig_login_otp" style="display: none;">
                                        <input type="text" name="dig_otp" id="dig-login-otp"/>
                                        <label><?php _e( "OTP", "digits" ); ?></label>
                                        <span class="<?php echo $bgtype; ?>"></span>
                                    </div>
									<?php
								}


								if ( $passaccep == 1 ) {
									?>
                                    <div class="minput">
                                        <input type="password" name="password" required/>
                                        <label><?php _e( "Password", "digits" ); ?></label>
                                        <span class="<?php echo $bgtype; ?>"></span>
                                    </div>
									<?php
								}

								if ( $captcha == 1 ) {
									dig_show_login_captcha( 1, $bgtype );
								}
								?>

                                <input type="hidden" name="dig_nounce" class="dig_nounce"
                                       value="<?php echo wp_create_nonce( 'dig_form' ) ?>">


								<?php

								global $dig_logingpage;
								$dig_logingpage = 1;
								do_action( 'login_form' );
								$dig_logingpage = 0;

								dig_rememberMe();

								if ( $passaccep == 1 ) { ?>
                                    <div class="logforb">
                                        <input type="submit"
                                               class="<?php echo $themee; ?> <?php echo $bgtype; ?> button"
                                               value="<?php _e( "Log In", "digits" ); ?>"/>
										<?php
										$digforgotpass = get_option( 'digforgotpass', 1 );
										if ( $digforgotpass == 1 ) {
											?>
                                            <div class="forgotpasswordaContainer"><a
                                                        class="forgotpassworda"><?php _e( "Forgot your password?", "digits" ); ?></a>
                                            </div>
										<?php } ?>
                                    </div>
									<?php
								}


								if ( $mobileaccp == 1 && $otpaccp == 1 ) {
									?>

                                    <div id="dig_login_va_otp"
                                         class=" <?php echo $themee; ?> <?php echo $bgtype; ?> button loginviasms loginviasmsotp"><?php _e( "Login With OTP", "digits" ); ?></div>

									<?php if ( dig_isWhatsAppEnabled() ) { ?>
                                        <div id="dig_login_va_whatsapp"
                                             class=" <?php echo $themee; ?> <?php echo $bgtype; ?> button loginviasms loginviawhatsapp dig_use_whatsapp"><?php _e( 'Login With WhatsApp', 'digits' ); ?></div>
										<?php
									}
									?>

									<?php echo "<div  class=\"dig_resendotp dig_logof_log_resend\" id=\"dig_lo_resend_otp_btn\" dis='1'>" . __( "Resend OTP", "digits" ) . "<span>(00:<span>" . dig_getOtpTime() . "</span>)</span></div>"; ?>

									<?php
								}

								if ( $users_can_register == 1 ) { ?>
                                    <div class="signdesc"><?php _e( "Don't have an account?", "digits" ); ?></div>
                                    <div class="signupbutton transupbutton <?php echo $bgtransbordertype; ?>"><?php _e( "Sign Up", "digits" ); ?></div>
								<?php }

								?>


                                <input type="hidden" name="digits_redirect_page"
                                       value="<?php echo esc_attr( $redirect_to ); ?>"/>

                            </form>
                        </div>

						<?php

						if ( $users_can_register == 1 ) {

							$dig_reg_details = digit_get_reg_fields();


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

							if ( $emailaccep == 0 ) {
								echo "<input type=\"hidden\" value=\"1\" class=\"disable_email_digit\" />";
							}
							if ( $passaccep == 0 ) {
								echo "<input type=\"hidden\" value=\"1\" class=\"disable_password_digit\" />";
							}


							$registration_redirect = ! empty( $_REQUEST['redirect_to'] ) ? $_REQUEST['redirect_to'] : '';
							/**
							 * Filters the registration redirect URL.
							 *
							 * @param string $registration_redirect The redirect destination URL.
							 *
							 * @since 3.0.0
							 *
							 */
							$redirect_to = apply_filters( 'registration_redirect', $registration_redirect );


							?>
                            <div class="register" <?php if ( $page == 2 ) {
								echo 'style="display: block;"';
							} ?> >
                                <div class="dig_rl_msg_div"><span class="loginerrordg"><?php

										if ( $validation_error->get_error_code() ) {
											echo '<br /><ul>';
											echo '<li>' . implode( '</li><li>', $validation_error->get_error_messages() ) . '</li>';
											echo '</ul>';
										}
										?></span></div>
                                <form accept-charset="utf-8" method="post" class="digits_register">

                                    <div class="dig_reg_inputs">
										<?php
										if ( $nameaccep > 0 ) {
											?>

                                            <div class="minput" id="dig_cs_name">
                                                <input type="text" name="digits_reg_name" class="digits_reg_name"
                                                       value="<?php if ( isset( $name ) ) {
													       echo $name;
												       } ?>" <?php if ( $nameaccep == 2 ) {
													echo "required";
												} ?>/>
                                                <label><?php _e( "First Name", "digits" ); ?></label>
                                                <span class="<?php echo $bgtype; ?>"></span>
                                            </div>
										<?php }

										if ( $usernameaccep > 0 ) {
											?>

                                            <div class="minput" id="dig_cs_username">
                                                <input type="text" name="digits_reg_username" id="digits_reg_username"
                                                       value="<?php if ( isset( $username ) ) {
													       echo $username;
												       } ?>" <?php if ( $usernameaccep == 2 ) {
													echo "required";
												} ?>/>
                                                <label><?php _e( "Username", "digits" ); ?></label>
                                                <span class="<?php echo $bgtype; ?>"></span>
                                            </div>
										<?php }


										$reqoropt = "";


										if ( $emailaccep > 0 || $mobileaccp > 0 ) {

											?>
                                            <div class="minput" id="dig_cs_mobilenumber">
                                                <input type="text" class="mobile_field mobile_format digits_reg_email"
                                                       name="digits_reg_mail"
                                                       value="<?php if ( $emailaccep == 2 || $mobileaccp == 2 ) {
													       if ( $mobileaccp == 1 ) {
														       $reqoropt = "(" . __( "Optional", 'digits' ) . ")";
													       }
													       if ( isset( $mob ) ) {
														       echo $mob;
													       }
												       } else if ( isset( $mail ) ) {
													       echo $mail;
												       } ?>" <?php if ( empty( $reqoropt ) )
													echo 'required' ?>/>
                                                <div class="countrycodecontainer registercountrycodecontainer">
                                                    <input type="text" name="digregcode"
                                                           class="input-text countrycode registercountrycode  <?php echo $theme; ?>"
                                                           value="<?php echo $userCountryCode; ?>" maxlength="6"
                                                           size="3"
                                                           placeholder="<?php echo $userCountryCode; ?>" <?php if ( $emailaccep == 2 || $mobileaccp == 2 ) {
														echo 'required';
													} ?>/>
                                                </div>
                                                <label><?php if ( $emailaccep == 2 && $mobileaccp == 2 ) {
														echo __( 'Mobile Number', 'digits' );
													} else {
														echo $emailmob;
													} ?><?php echo $reqoropt; ?></label>
                                                <span class="<?php echo $bgtype; ?>"></span>
                                            </div>

											<?php
										}
										if ( $emailaccep > 0 && $mobileaccp > 0 ) {
											$emailmob = __( 'Email/Mobile Number', 'digits' );

											$reqoropt = "";
											if ( $emailaccep == 1 ) {
												$reqoropt = "(" . __( "Optional", 'digits' ) . ")";
											}
											if ( $emailaccep == 2 || $mobileaccp == 2 ) {
												$emailmob = __( 'Email', 'digits' );

											}

											?>
                                            <div id="dig_cs_email" class="minput dig-mailsecond" <?php if ( $emailaccep != 2 && $mobileaccp != 2 ) {
												echo 'style="display: none;"';
											} ?>>
                                                <input type="text"
                                                       class="mobile_field mobile_format dig-secondmailormobile"
                                                       name="mobmail2"
													<?php if ( $emailaccep == 2 ) {
														echo "required";
													} ?>/>
                                                <div class="countrycodecontainer secondregistercountrycodecontainer">
                                                    <input type="text" name="digregscode2"
                                                           class="input-text countrycode registersecondcountrycode  <?php echo $theme; ?>"
                                                           value="<?php echo $userCountryCode; ?>" maxlength="6"
                                                           size="3"
                                                           placeholder="<?php echo $userCountryCode; ?>"/>
                                                </div>
                                                <label><span
                                                            class="dig_secHolder"><?php echo $emailmob; ?></span> <?php echo $reqoropt; ?>
                                                </label>
                                                <span class="<?php echo $bgtype; ?>"></span>
                                            </div>
											<?php
										}

										if ( $passaccep > 0 ) {

											?>


                                            <div class="minput" <?php if ( $passaccep == 1 ) {
												echo 'style="display: none;"';
											} ?> id="dig_cs_password">
                                                <input type="password" name="digits_reg_password"
                                                       id="digits_reg_password" <?php if ( $passaccep == 2 ) {
													echo "required";
												} ?>/>
                                                <label><?php _e( "Password", "digits" ); ?></label>
                                                <span class="<?php echo $bgtype; ?>"></span>
                                            </div>
										<?php }


										show_digp_reg_fields( 1, $bgtype );

										echo '</div>';

										?>
                                        <div>
											<?php
											do_action( 'register_form' );
											?>
                                        </div>


                                        <div class="minput dig_register_otp" style="display: none;">
                                            <input type="text" name="dig_otp" id="dig-register-otp"/>
                                            <label><?php _e( "OTP", "digits" ); ?></label>
                                            <span class="<?php echo $bgtype; ?>"></span>
                                        </div>

                                        <input type="hidden" name="code" class="register_code"/>
                                        <input type="hidden" name="csrf" class="register_csrf"/>
                                        <input type="hidden" name="dig_reg_mail" class="dig_reg_mail">
                                        <input type="hidden" name="dig_nounce" class="dig_nounce"
                                               value="<?php echo wp_create_nonce( 'dig_form' ) ?>">


										<?php
										if ( $mobileaccp > 0 || $passaccep == 0 || $passaccep == 2 ) {
											if ( ( $passaccep == 0 && $mobileaccp == 0 ) || $passaccep == 2 || ( $passaccep == 0 && $mobileaccp > 0 ) ) {
												$subVal = __( "Signup", "digits" );
											} else {
												$subVal = __( "Signup With OTP", "digits" );
											}
											?>

                                            <button class="<?php echo $themee . ' ' . $bgtype; ?> button dig-signup-otp registerbutton"
                                                    value="<?php echo $subVal; ?>" type="submit">
												<?php echo $subVal; ?>
                                            </button>
											<?php if ( dig_isWhatsAppEnabled() ) { ?>
                                                <button class="<?php echo $themee . ' ' . $bgtype; ?> button dig-signup-otp registerbutton dig_use_whatsapp"
                                                        value="<?php echo $subVal; ?>" type="submit">
													<?php _e( 'Signup With WhatsApp', 'digits' ); ?>
                                                </button>
												<?php
											}
											?>
											<?php echo "<div  class=\"dig_resendotp dig_logof_reg_resend\" id=\"dig_lo_resend_otp_btn\" dis='1'>" . __( "Resend OTP", "digits" ) . " <span>(00:<span>" . dig_getOtpTime() . "</span>)</span></div>"; ?>
										<?php } ?>

										<?php if ( $passaccep == 1 ) { ?>
                                            <button class="dig_reg_btn_password <?php echo $themee . ' ' . $bgtype; ?> button registerbutton"
                                                    attr-dis="1"
                                                    value="<?php _e( "Signup With Password", "digits" ); ?>"
                                                    type="submit">
												<?php _e( "Signup With Password", "digits" ); ?>
                                            </button>


										<?php } ?>


                                        <div class="backtoLoginContainer"><a
                                                    class="backtoLogin"><?php _e( "Back to login", "digits" ); ?></a>
                                        </div>

                                        <input type="hidden" name="digits_redirect_page"
                                               value="<?php echo esc_attr( $redirect_to ); ?>"/>

                                </form>

                            </div>

							<?php
						}
						$top = $top;


						if ( $digforgotpass == 1 && $dig_login_details['dig_login_password'] == 1 ) {

							$emailmob = __( "Email/Mobile Number", "digits" );

							?>
                            <div class="forgot" <?php if ( $page == 3 ) {
								echo 'style="display:block;"';
							} ?>>
                                <form accept-charset="utf-8" method="post" class="digits_forgot_pass">
                                    <div class="dig_rl_msg_div"><?php if ( ! empty( $forgmessage ) ) {
											echo "<br />" . $forgmessage;
										} ?></div>


                                    <input type="hidden" name="code" class="digits_code"/>
                                    <input type="hidden" name="csrf" class="digits_csrf"/>

									<?php if ( $show_changepass_fields ) {
										echo '<input type="hidden" id="digits_forgotPassChange" value="1"/>';
									} ?>

                                    <input type="hidden" name="dig_nounce" class="dig_nounce"
                                           value="<?php echo wp_create_nonce( 'dig_form' ) ?>"/>


									<?php if ( ! $show_changepass_fields ) { ?>
                                        <div class="minput forgotpasscontainer">
                                            <input type="text" class="mobile_field mobile_format forgotpass"
                                                   name="forgotmail" required/>
                                            <div class="countrycodecontainer forgotcountrycodecontainer">
                                                <input type="text" name="countrycode"
                                                       class="input-text countrycode forgotcountrycode  <?php echo $theme; ?>"
                                                       value="<?php echo $userCountryCode; ?>"
                                                       maxlength="6" size="3"
                                                       placeholder="<?php echo $userCountryCode; ?>"/>
                                            </div>
                                            <label><?php echo $emailmob; ?></label>
                                            <span class="<?php echo $bgtype; ?>"></span>
                                        </div>
									<?php } ?>


                                    <div class="minput dig_forgot_otp" style="display: none;">
                                        <input type="text" name="dig_otp" id="dig-forgot-otp"/>
                                        <label><?php _e( "OTP", "digits" ); ?></label>
                                        <span class="<?php echo $bgtype; ?>"></span>
                                    </div>

                                    <input type="hidden" name="dig_token" class="dig_token"
                                           value="<?php if ( isset( $_GET['token'] ) ) {
										       echo esc_attr( $_GET['token'] );
									       } ?>"/>
                                    <input type="hidden" name="user" class="dig_user"
                                           value="<?php if ( isset( $_GET['user'] ) ) {
										       echo esc_attr( $_GET['user'] );
									       } ?>"/>

                                    <div class="changepassword" <?php if ( $show_changepass_fields )
										echo 'style="display:block;"' ?>>
                                        <div class="minput">
                                            <input type="password" class="digits_password" name="digits_password"
                                                   required/>
                                            <label><?php _e( "Password", "digits" ); ?></label>
                                            <span class="<?php echo $bgtype; ?>"></span>
                                        </div>

                                        <div class="minput">
                                            <input type="password" class="digits_cpassword" name="digits_cpassword"
                                                   required/>
                                            <label><?php _e( "Confirm Password", "digits" ); ?></label>
                                            <span class="<?php echo $bgtype; ?>"></span>
                                        </div>
                                    </div>
                                    <button type="submit"
                                            class="<?php echo $themee; ?> <?php echo $bgtype; ?> button forgotpassword"
                                            value="<?php _e( "Reset Password", "digits" ); ?>"><?php _e( "Reset Password", "digits" ); ?></button>
									<?php echo "<div  class=\"dig_resendotp dig_logof_forg_resend\" id=\"dig_lo_resend_otp_btn\" dis='1'>" . __( "Resend OTP", "digits" ) . " <span>(00:<span>" . dig_getOtpTime() . "</span>)</span></div>"; ?>

									<?php if ( ! $show_changepass_fields ) { ?>
                                        <div class="backtoLoginContainer"><a
                                                    class="backtoLogin"><?php _e( "Back to login", "digits" ); ?></a>
                                        </div>
									<?php } ?>
                                </form>

                            </div>


							<?php
						}


					} else {
						do_action( 'digits_custom_form' );
					}

					?>


                </div>
				<?php if ( $page_type == 2 ) { ?>
                    <div class="dig_login_cancel">
                        <a href="<?php echo $current_url; ?>"
                           class="dig_page_cancel_color" <?php if ( ! empty( $backcolor ) ) {
							echo 'style="color:' . $backcolor . ';"';
						} ?>><span><?php _e( "Cancel", "digits" ); ?></span></a>
                    </div>
				<?php } ?>
            </div>


            <div class="dig_load_overlay">
                <div class="dig_load_content">
                    <div class="dig_spinner">
                        <div class="dig_double-bounce1"></div>
                        <div class="dig_double-bounce2"></div>
                    </div>
					<?php
					?>

                </div>
            </div>
        </div>
    </div>

	<?php
	digCountry();
	do_action( 'login_footer' );
	?>
    </body>
    </html>
	<?php
	die();
}


function cust_dig_filter_string( $string ) {
	$string = str_replace( array( '[t]', '[/t]', '[p]', '[/p]' ), '', preg_replace( '/\s+/', '', $string ) );

	return strtolower( dig_filter_string( $string ) );
}

function dig_filter_string( $string ) {
	if ( empty( $string ) ) {
		return $string;
	}

	$string = preg_replace( '/[^\p{L}\p{N}\s]/u', '', $string );

	return esc_attr( trim( $string ) );
}


function dig_update_wpwc_custom_fields( $user_id, $meta_key, $value ) {


	if ( $meta_key == 'display_name' || $meta_key == 'last_name' || $meta_key == 'first_name' ) {
		wp_update_user( array( 'ID' => $user_id, $meta_key => $value ) );

		return true;
	} else if ( $meta_key == 'user_role' ) {
		$user = get_user_by( 'ID', $user_id );
		$user->set_role( $value );

		return true;
	}

	return false;
}

function update_digp_reg_fields( $reg_custom_fields, $user_id ) {


	foreach ( $reg_custom_fields as $label => $values ) {
		$type     = strtolower( $values['type'] );
		$meta_key = cust_dig_filter_string( $values['meta_key'] );

		$e_value = '';
		if ( $type == "captcha" ) {
			continue;
		}
		$label = cust_dig_filter_string( $label );


		if ( ! isset( $_POST[ 'digits_reg_' . $meta_key ] ) ) {
			continue;
		}
		$e_value = $_POST[ 'digits_reg_' . $meta_key ];


		$e_value = apply_filters( "dig_update_reg_field", $e_value, $type, $values, $user_id );

		if ( dig_update_wpwc_custom_fields( $user_id, $values['meta_key'], $e_value ) ) {
			continue;
		}

		if ( $type == "textarea" ) {
			$e_value = sanitize_textarea_field( $e_value );
		} else if ( $type == "checkbox" ) {

			$vals = array();

			foreach ( $e_value as $val ) {
				$vals[] = sanitize_text_field( $val );
			}
			$e_value = $vals;

		} else {
			$e_value = sanitize_text_field( $e_value );
		}


		dig_update_custom_field_data( $user_id, sanitize_text_field( $values['meta_key'] ), $e_value );
	}

}


function dig_update_custom_field_data( $user_id, $meta_key, $value ) {

	update_user_meta( $user_id, $meta_key, $value );
}

/*
 * todo: remove checking & retrieving value from label after version 6
 * */
function dig_get_custom_field_data( $user_id, $meta_key, $label = null, $single = true ) {


	$value = get_user_meta( $user_id, $meta_key, true );

	if ( $value == null && $label != null ) {
		$value = get_user_meta( $user_id, $label, true );
		update_user_meta( $user_id, $meta_key, $value );
	}

	return $value;
}


function dig_field_add_date_script() {

	wp_enqueue_style( 'datepicker', plugins_url( '/assets/css/datepicker.min.css', __FILE__ ), array(), null, 'all' );
	wp_enqueue_script( 'datepicker', plugins_url( '/assets/js/datepicker.min.js', __FILE__ ), array( 'jquery' ), null );
	wp_enqueue_script( 'datepicker-lang', plugins_url( '/assets/js/i18n/datepicker.en.js', __FILE__ ), array( 'jquery' ), null );

}

add_action( 'dig_field_type_date', 'dig_field_add_date_script' );

function validate_digp_reg_fields( $reg_custom_fields, $error, $captcha = true ) {
	if ( ! session_id() || session_status() == PHP_SESSION_NONE ) {
		session_start();
	}


	if ( session_id() == '' ) {
		session_start();
	}


	if ( current_user_can( 'edit_user' ) || current_user_can( 'administrator' ) ) {
		return $error;
	}

	if ( empty( $reg_custom_fields ) ) {
		return $error;
	}

	$digits_fields = digits_get_all_custom_fields();


	foreach ( $reg_custom_fields as $label => $values ) {


		$type = strtolower( $values['type'] );

		if ( ! array_key_exists( $type, $digits_fields ) ) {
			continue;
		}


		$e_value = null;

		$custom_class = null;
		$lb_class     = null;
		$label        = cust_dig_filter_string( $label );

		$required = $values['required'];
		$meta_key = cust_dig_filter_string( $values['meta_key'] );

		$post_index = 'digits_reg_' . $meta_key;

		if ( dig_custom_hide_to_loggedin( $type, $values['meta_key'] ) ) {
			continue;
		}


		$values['required'] = dig_check_required( $values );


		$e_value = apply_filters( "dig_validate_reg_field", $e_value, $type, $values, $post_index );
		if ( is_wp_error( $e_value ) ) {

			return $e_value;
		}
		if ( ! $e_value ) {
			$e_value = $_POST[ $post_index ];
		}


		if ( ! is_array( $e_value ) ) {
			$e_value = trim( $e_value );
		}
		if ( $required == 1 && empty( $e_value ) ) {

			if ( $type == "captcha" && ! $captcha ) {
				continue;
			}

			$continue = apply_filters( "dig_require_field", false, $values );
			if ( $continue ) {
				continue;
			}

			$error->add( "incompletedetails", __( 'Please fill all the required details!', 'digits' ) );
			break;
		} else {


			$options = dig_sanitize_options( $values['options'] );
			if ( $type == "captcha" ) {
				$ses = filter_var( $_POST['dig_captcha_ses'], FILTER_SANITIZE_NUMBER_FLOAT );
				if ( $e_value != $_SESSION[ 'dig_captcha' . $ses ] && $captcha ) {
					$error->add( "captcha", __( 'Please enter a valid Captcha!', 'digits' ) );
				} else if ( isset( $_SESSION[ 'dig_captcha' . $ses ] ) ) {
					unset( $_SESSION[ 'dig_captcha' . $ses ] );
				}
			} else if ( $type == "tac" ) {
				if ( $e_value != 1 && ! $e_value ) {
					$error->add( "tac", __( 'Please accept terms and condition!', 'digits' ) );
				}
			} else {

				if ( $type == 'user_role' ) {
					$type = 'dropdown';
				}
				if ( $type == "dropdown" || $type == "radio" ) {


					if ( $required == 0 && empty( $e_value ) ) {
						continue;
					} else if ( ! in_array( $e_value, $options ) && ! in_array( $e_value, $values['options'] ) ) {
						$error->add( "invalidValue", __( 'Please select a valid option!', 'digits' ) );
					}


				} else if ( $type == "checkbox" ) {

					if ( $required == 0 && empty( $e_value ) ) {
						continue;
					}
					if ( ! is_array( $e_value ) ) {
						$error->add( "invalidValue", __( 'Please select a valid option!', 'digits' ) );
					}

					foreach ( $e_value as $ev ) {
						if ( ! in_array( $ev, $options ) ) {
							$error->add( "invalidValue", __( 'Please select a valid option!', 'digits' ) );
						}
					}
				}
			}
		}
	}

	return $error;
}


function dig_custom_show_label( $type ) {

	if ( $type == 'tac' ) {
		return false;
	}

	return true;
}

function dig_custom_hide_to_loggedin( $type, $meta_key ) {
	if ( ! is_user_logged_in() ) {
		return false;
	}

	$hidden_types = array( 'captcha', 'tac', 'user_role' );
	if ( in_array( $type, $hidden_types ) ) {
		return true;
	}

	$hide = false;
	$hide = apply_filters( 'dig_show_field_to_loggedin_user', $hide, $type, $meta_key );

	return $hide;
}


function dig_show_login_captcha( $login_page = 1, $bgtype = null, $user_id = 0 ) {
	if ( isset( $_POST['digits_reg_logincaptcha'] ) ) {
		unset( $_POST['digits_reg_logincaptcha'] );
	}
	dig_show_fields( array(
		'Captcha' => array(
			'label'        => __( 'Captcha', 'digits' ),
			'type'         => 'captcha',
			'required'     => '1',
			'meta_key'     => 'login_captcha',
			'custom_class' => 'login_captcha'
		)
	), 0, $login_page, $bgtype, $user_id );
}

/*
 * 1-> digits
 * 2-> WC
 * 3-> WP
 */
function show_digp_reg_fields( $login_page = 1, $bgtype = null, $user_id = 0 ) {
	$reg_custom_fields = stripslashes( base64_decode( get_option( "dig_reg_custom_field_data", "e30=" ) ) );
	$reg_custom_fields = json_decode( $reg_custom_fields, true );
	$show_asterisk     = get_option( 'dig_show_asterisk', 0 );
	dig_show_fields( $reg_custom_fields, $show_asterisk, $login_page, $bgtype, $user_id );
}


function dig_check_required( $values ) {
	if ( function_exists( 'is_checkout' ) ) {
		if ( is_checkout() ) {
			if ( $values['meta_key'] == 'last_name' || $values['meta_key'] == 'first_name' ) {
				return 0;
			}
		}
	}

	return $values['required'];

}

function dig_hide_custom_field( $values ) {

	if ( function_exists( 'is_checkout' ) ) {
		if ( is_checkout() ) {
			$meta_key     = $values['meta_key'];
			$hidden_types = array( 'first_name', 'last_name' );
			if ( in_array( $meta_key, $hidden_types ) ) {
				return true;
			}
		}
	}

	return false;
}

function dig_show_fields( $reg_custom_fields, $show_asterisk, $login_page = 1, $bgtype = null, $user_id = 0 ) {

	if ( empty( $reg_custom_fields ) ) {
		return;
	}

	$digits_fields = digits_get_all_custom_fields();

	foreach ( $reg_custom_fields as $label => $values ) {
		$type = strtolower( $values['type'] );

		if ( ! array_key_exists( $type, $digits_fields ) ) {
			continue;
		}


		$values['required'] = dig_check_required( $values );
		$asterisk           = ( $show_asterisk == 1 && $values['required'] == 1 ) ? ' *' : '';

		$custom_class = null;
		$lb_class     = null;
		$label        = cust_dig_filter_string( $label );

		$meta_key = cust_dig_filter_string( $values['meta_key'] );


		do_action( 'dig_field_type_' . $type );


		if ( dig_hide_custom_field( $values ) ) {
			continue;
		}
		if ( is_user_logged_in() ) {
			if ( dig_custom_hide_to_loggedin( $type, $values['meta_key'] ) ) {
				continue;
			}
		}


		$wcClass = '';

		if ( $login_page == 2 ) {
			$wcClass = 'woocommerce-Input woocommerce-Input--text input-text';
		}
		if ( ! empty( $values['custom_class'] ) ) {
			$custom_class = 'class="' . dig_filter_string( $values['custom_class'] ) . ' ' . $wcClass . '"';
		} else {
			$custom_class = 'class="' . $wcClass . '"';
		}


		$e_value = false;

		if ( isset( $_POST[ 'digits_reg_' . $meta_key ] ) ) {
			$e_value = cust_dig_filter_string( $_POST[ 'digits_reg_' . $meta_key ] );
		}

		$extra_style = '';
		$user_role   = 0;
		if ( $type == 'user_role' ) {
			$type      = 'dropdown';
			$user_role = 1;
		}
		if ( $type == "dropdown" ) {
			$extra_style = 'style="min-height:32px;margin-top:32px;margin-bottom:24px;"';
		}


		$rand            = rand();
		$values['label'] = apply_filters( 'wpml_translate_single_string', $values['label'], 'digits', $values['label'] );
		if ( $login_page == 1 ) {
			$dg = 'dg_min_capt';
			if ( $type != "captcha" ) {
				$dg = '';
			}
			echo '<div id="dig_cs_' . cust_dig_filter_string( $label ) . '" class="minput ' . $dg . ' dig-custom-field dig-custom-field-type-' . $type . '" ' . $extra_style . '>';
		} else if ( $login_page == 2 ) {
			echo '<div id="dig_cs_' . cust_dig_filter_string( $label ) . '" class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide dig-custom-field dig-custom-field-type-' . $type . '" ' . $extra_style . '>';
			echo '<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">';
			if ( dig_custom_show_label( $type ) ) {
				?>
                <label for="digits_reg_<?php echo $meta_key . $rand; ?>"><?php _e( $values['label'], "digits" );
					if ( $values['required'] == 1 ) {
						echo '<span class="required">*</span>';
					} ?></label>
				<?php
			}
		} else if ( $login_page == 3 ) {
			echo '<tr id="dig_cs_' . cust_dig_filter_string( $label ) . '" class="dig-custom-field dig-custom-field-type-' . $type . '">';
			?>
            <th>
				<?php
				if ( dig_custom_show_label( $type ) ) {
					?>
                    <label for="digits_reg_<?php echo $meta_key . $rand; ?>"><?php _e( $values['label'], "digits" ); ?></label>
				<?php } ?>
            </th>
			<?php
			echo '<td>';
			$e_value = dig_get_custom_field_data( $user_id, sanitize_text_field( $values['meta_key'] ), sanitize_text_field( $label ), true );

		}

		if ( $type == "captcha" ) {
			if ( $login_page == 3 ) {
				continue;
			}
			show_digcaptcha();
		}


		$return = apply_filters( "before_dig_show_fields", false, $custom_class, $values, $type, $e_value, $meta_key, $user_id, $login_page );
		if ( ! $return ) {

			if ( $type == "textarea" ) {

				?>
                <textarea type="<?php echo $type; ?>" name="digits_reg_<?php echo $meta_key; ?>"
                          id="digits_reg_<?php echo $meta_key . $rand; ?>" <?php echo $custom_class; ?> <?php if ( $values['required'] == 1 ) {
					echo "required";
				} ?>
                      rows="2"><?php if ( $e_value ) {
						echo $e_value;
					} ?></textarea>
				<?php
			} else if ( $type == "dropdown" || $type == "checkbox" || $type == "radio" ) {


				if ( $type == "dropdown" && $user_role == 1 ) {
					nice_select_scr();
					global $wp_roles;
					$roles = $wp_roles->roles;
					?>
                    <select name="digits_reg_<?php echo $meta_key; ?>" <?php echo $custom_class; ?> <?php if ( $values['required'] == 1 ) {
						echo "required";
					} ?>>
						<?php

						if ( empty( $e_value ) ) {
							$selected = "selected";
						}

						$drop_required = '';
						if ( $values['required'] === 1 ) {
							$drop_required = 'disabled';
						}

						echo '<option value ' . $drop_required . ' ' . $selected . ' data-display="' . __( $values['label'], 'digits' ) . '">' . __( 'Nothing', 'digits' ) . '</option>';


						foreach ( $values['options'] as $option ) {
							$selected   = "";
							$san_option = dig_filter_string( $option );
							if ( $e_value == $san_option ) {
								$selected = "selected";
							}


							echo "<option " . $selected . " value='" . esc_html( $option ) . "'>" . __( $roles[ $option ]['name'], 'digits' ) . "</option>";
						}
						?>
                    </select>

					<?php

				} else if ( $type == "dropdown" ) {
					nice_select_scr();

					$drop_required = '';
					if ( $values['required'] === 1 ) {
						$drop_required = 'disabled';
					}

					?>
                    <select name="digits_reg_<?php echo $meta_key; ?>" <?php echo $custom_class; ?> <?php if ( $values['required'] == 1 ) {
						echo "required";
					} ?>>
						<?php

						if ( empty( $e_value ) ) {
							$selected = "selected";
						}

						echo '<option value ' . $drop_required . ' ' . $selected . ' data-display="' . __( $values['label'], 'digits' ) . '">' . __( 'Nothing', 'digits' ) . '</option>';


						foreach ( $values['options'] as $option_display ) {
							$selected = "";
							$option   = dig_filter_string( $option_display );
							if ( $e_value == $option ) {
								$selected = "selected";
							}

							$option_display = apply_filters( 'wpml_translate_single_string', $option_display, 'digits', $option_display );

							echo "<option " . $selected . " value='" . $option . "'>" . __( $option_display, 'digits' ) . "</option>";
						}
						?>
                    </select>

					<?php
				} else {

					$re = '';
					if ( $values['required'] == 1 ) {
						$re = "data-req=1";
					}

					echo "<div class='dig_opt_mult_con'>";

					$ar = "";
					if ( $type == 'checkbox' ) {
						$ar = "[]";

					}

					foreach ( $values['options'] as $option ) {
						$lb_class = "dig_opt_mult_lab";
						$option   = dig_filter_string( $option );

						$selected       = "";
						$selected_class = "";
						if ( $e_value == $option || ( $type == 'checkbox' && is_array( $e_value ) && in_array( $option, $e_value ) ) ) {
							$selected       = "checked";
							$selected_class = "class='selected'";
						}

						$option_display = apply_filters( 'wpml_translate_single_string', $option, 'digits', $option );


						echo '<div class="dig_opt_mult" >
                            <label ' . $selected_class . ' for="digits_reg_for_' . $meta_key . '_' . $option . $rand . '">
                            <input ' . $re . ' name="digits_reg_' . $meta_key . $ar . '" ' . $custom_class . ' id="digits_reg_for_' . $meta_key . '_' . $option . $rand . '" type="' . $type . '" value="' . $option . '" ' . $selected . '>' . $option_display . '
                            </label></div><br />';

					}
					echo "</div>";


				}
			} else if ( $type == 'tac' ) {
				$re = '';
				if ( $values['required'] == 1 ) {
					$re = "data-req=1";
				}
				echo "<div class='dig_opt_mult_con dig_opt_mult_con_tac'><div class=\"dig_opt_mult\" >";

				$option = $values['label'];
				$tac    = $option;

				$defaultValues = array( '[t]', '[/t]', '[p]', '[/p]' );

				$links = array(
					'<a href="' . $values['tac_link'] . '" target="_blank">',
					'</a>',
					'<a href="' . $values['tac_privacy_link'] . '" target="_blank">',
					'</a>'
				);

				$tac = str_replace( $defaultValues, $links, $tac );


				echo '<label for="digits_reg_for_' . $option . $rand . '">
                <input ' . $re . ' name="digits_reg_' . $meta_key . '" ' . $custom_class . ' id="digits_reg_for_' . $option . $rand . '" type="checkbox" value="1">' . $tac . '</label>';


				echo "</div></div>";
			} else {

				$inp_type = $type;
				if ( in_array( $inp_type, array( 'captcha', 'date' ) ) ) {
					$inp_type = 'text';
				}

				?>

                <input type="<?php echo $inp_type; ?>"
                       name="digits_reg_<?php echo $meta_key; ?>"
                       id="digits_reg_<?php echo $meta_key . $rand; ?>" <?php echo $custom_class; ?> <?php if ( $values['required'] == 1 ) {
					echo "required";
				} ?>
                       value="<?php if ( $e_value ) {
					       echo $e_value;
				       } ?>"
                />
				<?php

			}
		}
		?>

		<?php
		if ( $login_page == 1 ) {
			if ( dig_custom_show_label( $type ) ) {
				$str = apply_filters( "before_dig_custom_show_label", $type );
				?>
                <label <?php echo $str; ?> <?php if ( ! empty( $lb_class ) ) {
					echo 'class="' . $lb_class . '"';
				} ?>><?php _e( $values['label'], "digits" );
					echo $asterisk; ?></label>
				<?php
			}
			if ( $type != "dropdown" ) {
				$str = apply_filters( "before_dig_custom_show_line", $type );
				echo '<span ' . $str . ' class="' . $bgtype . '"></span>';
			}
			echo '</div>';
		} else if ( $login_page == 2 ) {
			echo '</p></div>';
		} else if ( $login_page == 3 ) {
			echo '</td></tr>';
		}
	}
}

function show_digcaptcha() {
	$r   = mt_rand();
	$cap = plugins_url( '/captcha/captcha.php', __FILE__ );
	?>
    <input type="hidden" class="dig_captcha_ses" name="dig_captcha_ses" value="<?php echo $r; ?>"/>
    <img src="<?php echo $cap . '?r=' . $r; ?>" cap_src="<?php echo $cap; ?>" class="dig_captcha"
         draggable="false"/>
	<?php
}


add_action( 'init', 'digits_login', 100 );


function dig_pcd_act() {
	if ( ! wp_next_scheduled( 'dig_pcd_act_chk' ) ) {
		wp_schedule_event( time(), 'daily', 'dig_pcd_act_chk' );
	}
}

add_action( 'init', 'dig_init_pcver' );
function dig_init_pcver() {
	if ( ! wp_next_scheduled( 'dig_pcd_act_chk' ) ) {
		wp_schedule_event( time(), 'daily', 'dig_pcd_act_chk' );
	}
	//digits_show_reg_check_disabled(false);
}


add_action( 'dig_pcd_act_chk', 'dig_pcd_act_chk_req' );


function dig_pcd_act_chk_req() {
	dig_pcd_act_chk_req_cd( false );

}

function dig_pcd_act_chk_req_cd( $dec = false ) {

	if ( ! function_exists( 'get_plugin_data' ) ) {
		/** @noinspection PhpIncludeInspection */
		require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
	}
	$dec  = false;// remove it
	$dpc  = base64_decode( 'ZGlnX3B1cmNoYXNlY29kZQ==' );
	$dicp = dig_get_option( $dpc );


	$plugin_version = digits_version();

	$type = base64_decode( 'ZGlnX2xpY2Vuc2VfdHlwZQ==' );

	$list   = apply_filters( 'digits_addon', array() );
	$params = array(
		base64_decode( 'anNvbg==' )         => 1,
		'code'                              => $dicp,
		base64_decode( 'cmVxdWVzdF9zaXRl' ) => network_home_url(),
		base64_decode( 'c2x1Zw==' )         => 'digits',
		$type                               => dig_get_option( base64_decode( 'ZGlnX2xpY2Vuc2VfdHlwZQ==' ), 1 ),
		base64_decode( 'dmVyc2lvbg==' )     => $plugin_version,
		'schedule'                          => 1,
		'addons'                            => implode( ",", $list )
	);

	if ( $dec ) {
		$params[ base64_decode( 'dW5yZWdpc3Rlcg==' ) ] = 1;
	}
	$u = base64_decode( "aHR0cHM6Ly9icmlkZ2UudW5pdGVkb3Zlci5jb20vdXBkYXRlcy92ZXJpZnkucGhw" );
	$c = curl_init();
	curl_setopt( $c, CURLOPT_URL, $u );
	curl_setopt( $c, CURLOPT_POST, true );
	curl_setopt( $c, CURLOPT_POSTFIELDS, $params );
	curl_setopt( $c, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $c, CURLOPT_SSL_VERIFYPEER, false );
	$result = curl_exec( $c );


	$http_status = curl_getinfo( $c, CURLINFO_HTTP_CODE );
	$un          = base64_decode( 'ZGlnX3Vucg==' );
	$ds          = base64_decode( 'ZGlnX2RzYg==' );

	if ( ! curl_errno( $c ) ) {


		$pcf = base64_decode( 'ZGlnX3B1cmNoYXNlZmFpbA==' );

		if ( $http_status == 200 ) {

			if ( $dec ) {
				return;
			}

			$response = json_decode( $result );
			$result   = $response->code;

			if ( $result == - 99 ) {
				update_site_option( $ds, 1 );
			} else if ( $result != 1 ) {
				$check = dig_get_option( $pcf, 2 );
				if ( $check == 2 ) {
					delete_site_option( $dpc );
					delete_site_option( $pcf );
					delete_site_option( $type );
				} else {
					update_site_option( $pcf, 2 );
				}

				$t = dig_get_option( $un, - 1 );

				if ( $t == - 1 ) {
					update_site_option( $un, time() );
				}

			} else if ( $result == 1 ) {
				delete_site_option( $pcf );
				delete_site_option( $un );
				delete_site_option( $ds );

				if ( isset( $response->type ) ) {

					if ( $response->type != - 1 ) {
						update_site_option( $type, $response->type );
					}
				}
			}
		}
	}


	curl_close( $c );

	if ( empty( $dicp ) ) {
		$time = get_option( $un, - 1 );
		if ( $time == - 1 ) {
			$time = time();
			update_site_option( $un, $time );
		}

		if ( ! empty( $time ) ) {
			$c            = 360 * 3600;
			$time         = $time + $c;
			$current_time = time();
			$t            = $time - $current_time;
			if ( $t < 0 || $t > $c ) {
				update_site_option( $ds, 1 );
			}
		}
	}

}


register_deactivation_hook( __FILE__, 'dig_pcd_decact' );

function dig_pcd_decact() {
	wp_clear_scheduled_hook( 'dig_pcd_act_chk' );
	dig_pcd_act_chk_req_cd( true );
}


function dig_getOtpTime() {
	return min( max( get_option( 'dig_mob_otp_resend_time', 30 ), 20 ), 3600 );
}

function dig_useStrongPass() {
	return get_option( 'dig_use_strongpass', 1 );
}


function digits_get_all_custom_fields() {
	$fields = digits_customfieldsTypeList();
	$fields = apply_filters( 'dig_all_custom_fields', $fields );

	return $fields;
}

/*
 * 0-> Disabled
 * 1-> Optional
 * 2-> Required
 */
function digit_default_login_fields() {
	return
		array(
			'dig_login_username'     => array( 'name' => __( 'Username', 'digits' ) ),
			'dig_login_email'        => array( 'name' => __( 'Email', 'digits' ) ),
			'dig_login_mobilenumber' => array( 'name' => __( 'Mobile Number', 'digits' ) ),
			'dig_login_otp'          => array( 'name' => __( 'OTP', 'digits' ), 'opt' => 1 ),
			'dig_login_password'     => array(
				'name'          => __( 'Password', 'digits' ),
				'ondis_disable' => 'dig_login_email',
				'opt'           => 1
			),
			'dig_login_captcha'      => array( 'name' => __( 'Captcha', 'digits' ), 'opt' => 1 ),
		);

}


function digit_get_login_fields() {
	$dig_login_fields = get_option( 'dig_login_fields', false );
	if ( $dig_login_fields ) {
		if ( ! isset( $dig_login_fields['dig_login_captcha'] ) ) {
			$dig_login_fields['dig_login_captcha'] = 0;
		}
		if ( ! isset( $dig_login_fields['dig_login_username'] ) ) {
			$dig_login_fields['dig_login_username'] = 1;
		}

		return $dig_login_fields;
	} else {
		return array(
			'dig_login_email'        => get_option( "digemailaccep", 1 ),
			'dig_login_username'     => 1,
			'dig_login_mobilenumber' => 1,
			'dig_login_otp'          => 1,
			'dig_login_password'     => get_option( "digpassaccep", 1 ),
			'dig_login_captcha'      => 0,
		);
	}

}


function digit_default_reg_fields() {
	return array(
		'dig_reg_name'         => array( 'name' => __( 'Name', 'digits' ),'id'=> 'name' ),
		'dig_reg_uname'        => array( 'name' => __( 'Username', 'digits' ),'id'=> 'username' ),
		'dig_reg_email'        => array( 'name' => __( 'Email', 'digits' ),'id'=> 'email' ),
		'dig_reg_mobilenumber' => array( 'name' => __( 'Mobile Number', 'digits' ),'id'=> 'mobilenumber' ),
		'dig_reg_password'     => array( 'name' => __( 'Password', 'digits' ),'id'=> 'password' ),

	);
}

function digit_get_reg_fields( $default = false ) {
	$dig_reg_fields = get_option( 'dig_reg_fields', false );
	if ( $dig_reg_fields && ! $default ) {
		return $dig_reg_fields;
	} else {
		return array(
			'dig_reg_name'         => 1,
			'dig_reg_uname'        => 0,
			'dig_reg_email'        => get_option( "digemailaccep", 1 ),
			'dig_reg_mobilenumber' => 1,
			'dig_reg_password'     => get_option( "digpassaccep", 1 )
		);
	}
}

function dig_requireCustomToString( $value ) {
	switch ( $value ) {
		case 0:
			return __( "Optional", "digits" );
		case 1:
			return __( "Required", "digits" );
		default:
			return null;
	}
}

?>