<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function digit_getGatewayName( $digit_tapp ) {
	switch ( $digit_tapp ) {
		case 2:
			return "Twilio";
			break;
		case 3:
			return "Msg91";
			break;
		case 4:
			return "Yunpian";
			break;
		default:
			return '';
			break;
	}
}

function dig_accountkit_dep_notice() {
	if ( dig_is_gatewayEnabled( 1 ) ) {
		if ( isset( $_POST['dig_hid_accountkit_dep_notice'] ) ) {
			update_option( 'dig_accountkit_dep_notice', '1' );

			return;
		}
		if ( get_option( 'dig_accountkit_dep_notice', - 1 ) != 1 ) {
			?>
            <div class="notice notice-error is-dismissible" style="display: block">
                <p>
                    <b>DIGITS:</b> Account Kit by Facebook is depreciated as of September 9, 2019, you can read more
                    about it <a target="_blank"
                                href="https://developers.facebook.com/blog/post/2019/09/09/account-kit-services-no-longer-available-starting-march">here</a>.
                    If you are already using it then you can use it until March 9, 2020 or else you can switch your
                    gateway
                    to Firebase (Free).<br/><br/>
                    <b>Your user data will not get affected in any way as it gets stored on your website and all of your
                        old/new users will be able to login or signup using any other gateway.</b>

                <form method="post">
                    <input type="hidden" name="dig_hid_accountkit_dep_notice"/>
                    <button type="submit" class="notice-dismiss" style="z-index: 99">
                        <span class="screen-reader-text">Dismiss this notice.</span>
                    </button>
                </form>

                </p>
            </div>
			<?php
		}
	}
}

add_action( 'admin_notices', 'dig_accountkit_dep_notice' );


function digit_apisettings() {

	?>


    <h1><?php _e( "API Settings", "digits" ); ?></h1>
    <p class="lead"></p>

    <form method="post">
		<?php
		digits_api_settings();
		?>


        <p class="digits-setup-action step">
            <Button type="submit"
                    class="button-primary button button-large button-next"><?php _e( "Continue", "digits" ); ?></Button>
            <a href="<?php echo admin_url( 'index.php?page=digits-setup&step=documentation' ); ?>"
               class="button"><?php _e( "Back", "digits" ); ?></a>
        </p>
    </form>

	<?php
}

function digit_test_api_box() {
	$countrycode = esc_attr( get_the_author_meta( 'digt_countrycode', get_current_user_id() ) );
	?>
    <div class="dig_api_test">
        <div class="dig_gateway_sep_line"></div>

        <div class="dig_call_test_api">
            <div><?php _e( 'TEST GATEWAY SETTINGS', 'digits' ); ?></div>
            <div class="dig_test_mob_ho">

                <div class="digcon">
                    <div class="dig_wc_countrycodecontainer dig_wc_logincountrycodecontainer"
                         style="display: inline-block;">
                        <input dig-save="0" type="text" name="digt_countrycode"
                               class="input-text countrycode dig_wc_logincountrycode"
                               value="<?php echo $countrycode; ?>" maxlength="6" size="3"
                               placeholder="<?php echo $countrycode; ?>">
                    </div>
                    <input dig-save="0" class="mobile" type="text"
                           placeholder="<?php _e( 'Your Mobile Number', 'digits' ); ?>"
                           value="<?php echo esc_attr( get_the_author_meta( 'digits_phone_no', get_current_user_id() ) ); ?>"
                           name="mobile/email" style="padding-left:107px !important;"></div>

                <div class="dig_call_test_api_btn"><?php _e( 'Test', 'digits' ); ?></div>
            </div>

        </div>

        <div class="dig_call_test_response">
            <div class="dig_call_test_response_head"><?php _e( 'Response', 'digits' ); ?></div>
            <div class="dig_call_test_response_msg"></div>
        </div>
    </div>
	<?php
}

function getWhatsAppGateWayArray() {
	$gateways = array(
		__( 'Disabled', 'digits' ) => array(
			'value'  => - 1,
			'inputs' =>
				array(),
		),
		'Twilio'                   => array(
			'value'  => 2,
			'inputs' =>
				array(
					__( 'Twilio Account SID' ) => array( 'text' => true, 'name' => 'account_sid' ),
					__( 'Twilio Auth Token' )  => array( 'text' => true, 'name' => 'auth_token' ),
					__( 'Whatsapp Number' )    => array( 'text' => true, 'name' => 'whatsappnumber' )
				),
		),
	);

	return $gateways;
}

function getGateWayArray() {

	/// next 34
	$smsgateways = array(
		'Amazon SNS'      => array(
			'value'  => 25,
			'inputs' =>
				array(
					__( 'Access Key ID' )     => array( 'text' => true, 'name' => 'access_key' ),
					__( 'Secret Access Key' ) => array( 'text' => true, 'name' => 'access_secret' ),
					__( 'Region' )            => array( 'text' => true, 'name' => 'region' ),
					__( 'Sender ID' )         => array( 'text' => true, 'name' => 'sender_id' )
				),
		),
		'Amazon Pinpoint' => array(
			'value'  => 30,
			'inputs' =>
				array(
					__( 'Application ID' )    => array( 'text' => true, 'name' => 'app_id' ),
					__( 'Access Key ID' )     => array( 'text' => true, 'name' => 'access_key' ),
					__( 'Secret Access Key' ) => array( 'text' => true, 'name' => 'access_secret' ),
					__( 'Region' )            => array( 'text' => true, 'name' => 'region' ),
					__( 'Sender ID' )         => array( 'text' => true, 'name' => 'sender_id' )
				),
		),

		'Alibaba' => array(
			'value'  => 18,
			'label'  => 'Alibaba',
			'inputs' =>
				array(
					__( 'Access Key' )    => array( 'text' => true, 'name' => 'access_key' ),
					__( 'Access Secret' ) => array( 'text' => true, 'name' => 'access_secret' ),
					__( 'From' )          => array( 'text' => true, 'name' => 'from', 'optional' => 1 )
				)
		),

		'Alibaba Go China' => array(
			'value'  => 33,
			'label'  => 'Alibaba (Go China)',
			'inputs' =>
				array(
					__( 'Access Key' )      => array( 'text' => true, 'name' => 'access_key' ),
					__( 'Access Secret' )   => array( 'text' => true, 'name' => 'access_secret' ),
					__( 'From' )            => array( 'text' => true, 'name' => 'from', 'optional' => 1 ),
					__( 'TemplateParam' )   => array( 'text' => true, 'name' => 'templatecode' ),
					__( 'SmsUpExtendCode' ) => array( 'text' => true, 'name' => 'frosmsupextendcodem', 'optional' => 1 )
				)
		),

		'Clickatell'  => array(
			'value'  => 5,
			'inputs' => array(
				__( 'API Key' ) => array( 'text' => true, 'name' => 'api_key' ),
				__( 'From' )    => array(
					'text'     => true,
					'name'     => 'from',
					'optional' => 1
				)
			)
		),
		'ClickSend'   => array(
			'value'  => 6,
			'inputs' => array(
				__( 'API Username' ) => array(
					'text' => true,
					'name' => 'apiusername'
				),
				__( 'API Key' )      => array( 'text' => true, 'name' => 'apikey' ),
				__( 'From' )         => array( 'text' => true, 'name' => 'from' )
			)
		),
		'ClockWork'   => array(
			'value'  => 7,
			'inputs' => array(
				__( 'ClockWork API' ) => array(
					'text' => true,
					'name' => 'clockworkapi'
				),
				__( 'From' )          => array( 'text' => true, 'name' => 'from' )
			)
		),
		'Kaleyra'     => array(
			'value'  => 15,
			'inputs' => array(
				__( 'API Key' )   => array( 'text' => true, 'name' => 'api_key' ),
				__( 'Sender ID' ) => array( 'text' => true, 'name' => 'sender_id' )
			)
		),
		'MessageBird' => array(
			'value'  => 8,
			'inputs' => array(
				__( 'Access Key' ) => array( 'text' => true, 'name' => 'accesskey' ),
				__( 'Originator' ) => array( 'text' => true, 'name' => 'originator' )
			)
		),
		'Mobily.ws'   => array(
			'value'  => 9,
			'inputs' => array(
				__( 'Mobile' )   => array( 'text' => true, 'name' => 'mobile' ),
				__( 'Password' ) => array( 'text' => true, 'name' => 'password' ),
				__( 'Sender' )   => array( 'text' => true, 'name' => 'sender' )
			)
		),
		'Alfa Cell'   => array(
			'value'  => 28,
			'inputs' => array(
				__( 'API Key' ) => array( 'text' => true, 'name' => 'api_key' ),
				__( 'Sender' )  => array( 'text' => true, 'name' => 'sender' )
			)
		),
		'Nexmo'       => array(
			'value'  => 10,
			'inputs' => array(
				__( 'API Key' )    => array( 'text' => true, 'name' => 'api_key' ),
				__( 'API Secret' ) => array(
					'text' => true,
					'name' => 'api_secret'
				),
				__( 'From' )       => array( 'text' => true, 'name' => 'from' )
			)
		),
		'Plivo'       => array(
			'value'  => 11,
			'inputs' => array(
				__( 'Auth ID' )    => array( 'text' => true, 'name' => 'auth_id' ),
				__( 'Auth Token' ) => array(
					'text' => true,
					'name' => 'auth_token'
				),
				__( 'Sender' )     => array( 'text' => true, 'name' => 'sender_id' )
			)
		),
		/*'CM'          => array(
			'value'  => 27,
			'inputs' => array(
				__( 'API Key' ) => array(
					'text' => true,
					'name' => 'api_key'
				),
				__( 'From' )    => array( 'text' => true, 'name' => 'from' )
			)
		),*/
		'SMSAPI'      => array(
			'value'  => 12,
			'inputs' => array(
				__( 'Token' ) => array( 'text' => true, 'name' => 'token' ),
				__( 'From' )  => array( 'text' => true, 'name' => 'from' )
			)
		),
		'FireBase'    => array(
			'value'  => 13,
			'inputs' =>
				array( __( 'Firebase Config' ) => array( 'textarea' => true, 'name' => 'config' ) )
		),

		'infobip' => array(
			'value'  => 32,
			'inputs' =>
				array(
					__( 'Base URL' )  => array( 'text' => true, 'name' => 'base_url' ),
					__( 'API Key' )  => array( 'text' => true, 'name' => 'api_key' ),
					__( 'From' )     => array( 'text' => true, 'name' => 'from', 'optional' => 1 )
				)
		),

		'AfricasTalking' => array(
			'value'  => 26,
			'inputs' =>
				array(
					__( 'Username' ) => array( 'text' => true, 'name' => 'username' ),
					__( 'API Key' )  => array( 'text' => true, 'name' => 'api_key' ),
					__( 'From' )     => array( 'text' => true, 'name' => 'from', 'optional' => 1 )
				)
		),

		'Textlocal' => array(
			'value'  => 17,
			'inputs' =>
				array(
					__( 'API Key' ) => array( 'text' => true, 'name' => 'api_key' ),
					__( 'Sender' )  => array( 'text' => true, 'name' => 'sender' )
				)
		),
		'Unifonic'  => array(
			'value'  => 14,
			'inputs' =>
				array(
					__( 'AppSid' )    => array( 'text' => true, 'name' => 'appsid' ),
					__( 'Sender ID' ) => array( 'text' => true, 'name' => 'senderid', 'optional' => 1 )
				)
		),

		'Melipayamak' => array(
			'value'  => 16,
			'inputs' => array(
				__( 'Username' ) => array( 'text' => true, 'name' => 'username' ),
				__( 'Password' ) => array( 'text' => true, 'name' => 'password' ),
				__( 'From' )     => array( 'text' => true, 'name' => 'from' ),

			)
		),


		'Adnsms' => array(
			'value'  => 19,
			'inputs' =>
				array(
					__( 'API Key' )    => array( 'text' => true, 'name' => 'api_key' ),
					__( 'API Secret' ) => array( 'text' => true, 'name' => 'api_secret' )
				)
		),

		'Netgsm' => array(
			'value'  => 20,
			'inputs' =>
				array(
					__( 'Username' ) => array( 'text' => true, 'name' => 'username' ),
					__( 'Password' ) => array( 'text' => true, 'name' => 'password' ),
					__( 'From' )     => array( 'text' => true, 'name' => 'from' )
				)
		),

		'SMSC.ru'   => array(
			'value'  => 21,
			'inputs' =>
				array(
					__( 'Login' )    => array( 'text' => true, 'name' => 'login' ),
					__( 'Password' ) => array( 'text' => true, 'name' => 'password' ),
					__( 'Sender' )   => array( 'text' => true, 'name' => 'sender', 'optional' => 1 )
				)
		),
		'TargetSMS' => array(
			'value'  => 22,
			'inputs' =>
				array(
					__( 'Login' )    => array( 'text' => true, 'name' => 'login' ),
					__( 'Password' ) => array( 'text' => true, 'name' => 'password' ),
					__( 'Sender' )   => array( 'text' => true, 'name' => 'sender' )
				)
		),

		'Ghasedak'    => array(
			'value'  => 23,
			'inputs' =>
				array(
					__( 'API Key' ) => array( 'text' => true, 'name' => 'api_key' )
				)
		),
		'Farapayamak' => array(
			'value'  => 24,
			'inputs' =>
				array(
					__( 'Username' ) => array( 'text' => true, 'name' => 'username' ),
					__( 'Password' ) => array( 'text' => true, 'name' => 'password' ),
					__( 'From' )     => array( 'text' => true, 'name' => 'from' )
				)
		),
		'SendinBlue'  => array(
			'value'  => 31,
			'inputs' =>
				array(
					__( 'API Key' ) => array( 'text' => true, 'name' => 'api_key' ),
					__( 'Sender' )  => array( 'text' => true, 'name' => 'sender' )
				)
		),
		'IBulksms'    => array(
			'value'  => 29,
			'inputs' =>
				array(
					__( 'Auth Key' )  => array( 'text' => true, 'name' => 'auth_key' ),
					__( 'Sender ID' ) => array( 'text' => true, 'name' => 'sender' )
				)
		),


//        'LimeCellular'=>array('value'=>999,'inputs'=>array(__('User Name')=>array('text'=>true,'name'=>'user'), __('API ID')=>array('text'=>true,'name'=>'api_id'), __('Short Code')=>array('text'=>true,'name'=>'short_code','optional'=>1))),
	);

	return $smsgateways;
}

function digits_api_settings() {


	$digit_tapp = get_option( 'digit_tapp', 13 );

	$app             = get_option( 'digit_api' );
	$appid           = "";
	$appsecret       = "";
	$accountkit_type = "";
	if ( $app !== false ) {
		$appid     = $app['appid'];
		$appsecret = $app['appsecret'];
		if ( isset( $app['accountkit_type'] ) ) {
			$accountkit_type = $app['accountkit_type'];
		} else {
			$accountkit_type = "modal";
		}
	}

	$tiwilioapicred = get_option( 'digit_twilio_api' );
	$twiliosid      = "";
	$twiliotoken    = "";
	$twiliosenderid = "";


	if ( $tiwilioapicred !== false ) {
		$twiliosid      = $tiwilioapicred['twiliosid'];
		$twiliotoken    = $tiwilioapicred['twiliotoken'];
		$twiliosenderid = $tiwilioapicred['twiliosenderid'];
	}


	$msg91apicred  = get_option( 'digit_msg91_api' );
	$msg91authkey  = "";
	$msg91senderid = "";

	$msg91route = 1;
	if ( $msg91apicred !== false ) {
		$msg91authkey  = $msg91apicred['msg91authkey'];
		$msg91senderid = $msg91apicred['msg91senderid'];

		$msg91route = $msg91apicred['msg91route'];

		if ( empty( $msg91route ) ) {
			$msg91route = 2;
		}
	}


	$yunpianapi = get_option( 'digit_yunpianapi' );
	digCountry();
	$smsgateways = getGateWayArray();
	?>


    <input type="hidden" class="dig_save" value='1' name="dig_save"/>
    <div class="digits_gateway_container digits_gateway_api_box">
        <table class="form-table digits_default_gateway_details gateway_table">
			<?php digit_select_gateway( 'name="digit_tapp" id="digit_tapp"', $digit_tapp ); ?>

            <tr class="facebookcred gateway_conf" <?php if ( $digit_tapp != 1 ) {
				echo 'style="display:none;"';
			} ?> >
                <th scope="row"><label for="appid"><?php _e( 'App ID', 'digits' ); ?> </label></th>
                <td>
                    <input type="text" id="appid" name="appid" class="regular-text" value="<?php echo $appid; ?>"
                           placeholder="<?php _e( 'App ID', 'digits' ); ?>"
                           autocomplete="off"/>
                </td>
            </tr>
            <tr class="facebookcred gateway_conf" <?php if ( $digit_tapp != 1 ) {
				echo 'style="display:none;"';
			} ?> >
                <th scope="row"><label for="appsecret"><?php _e( 'AccountKit App Secret', 'digits' ); ?> </label></th>
                <td>
                    <input type="text" id="appsecret" name="appsecret" class="regular-text"
                           value="<?php echo $appsecret; ?>" autocomplete="off"
                           placeholder="<?php _e( 'App Secret', 'digits' ); ?>"/>
                </td>
            </tr>

            <tr class="facebookcred gateway_conf" <?php if ( $digit_tapp != 1 ) {
				echo 'style="display:none;"';
			} ?> >
                <th scope="row"><label for="accountkit_type"><?php _e( 'Type', 'digits' ); ?> </label></th>
                <td>
                    <select name="accountkit_type">
                        <option value="modal" <?php if ( $accountkit_type == 'modal' ) {
							echo "selected='selected'";
						} ?>><?php _e( 'Modal', 'digits' ); ?></option>
                        <option value="popup" <?php if ( $accountkit_type == 'popup' ) {
							echo "selected='selected'";
						} ?>><?php _e( 'Popup', 'digits' ); ?></option>
                    </select>

                    <p class="dig_ecr_desc">
						<?php _e( 'Only use Popup if your website is non https:// otherwise we highly recommend using modal.', 'digits' ); ?>
                    </p>
                </td>
            </tr>


            <tr class="twiliocred gateway_conf" <?php if ( $digit_tapp != 2 ) {
				echo 'style="display:none;"';
			} ?> >
                <th scope="row"><label for="twiliosid"><?php _e( 'Account SID', 'digits' ); ?> </label></th>
                <td>
                    <input type="text" id="twiliosid" name="twiliosid" class="regular-text"
                           value="<?php echo $twiliosid; ?>"
                           placeholder="<?php _e( 'Account SID', 'digits' ); ?>"
                           autocomplete="off"/>
                </td>
            </tr>
            <tr class="twiliocred gateway_conf" <?php if ( $digit_tapp != 2 ) {
				echo 'style="display:none;"';
			} ?> >
                <th scope="row"><label for="twiliotoken"><?php _e( 'Auth Token', 'digits' ); ?> </label></th>
                <td>
                    <input type="text" id="twiliotoken" name="twiliotoken" class="regular-text"
                           value="<?php echo $twiliotoken; ?>" autocomplete="off"
                           placeholder="<?php _e( 'Auth Token', 'digits' ); ?>"/>
                </td>
            </tr>
            <tr class="twiliocred gateway_conf" <?php if ( $digit_tapp != 2 ) {
				echo 'style="display:none;"';
			} ?> >
                <th scope="row"><label for="twiliosenderid"><?php _e( 'Sender ID', 'digits' ); ?> </label></th>
                <td>
                    <input type="text" id="twiliosenderid" name="twiliosenderid" class="regular-text"
                           value="<?php echo $twiliosenderid; ?>" autocomplete="off"
                           placeholder="<?php _e( 'Sender ID', 'digits' ); ?>"/>
                </td>
            </tr>

            <tr class="msg91cred gateway_conf" <?php if ( $digit_tapp != 3 ) {
				echo 'style="display:none;"';
			} ?>>
                <th scope="row"><label for="msg91authkey"><?php _e( 'Authentication Key', 'digits' ); ?> </label></th>
                <td>
                    <input type="text" id="msg91authkey" name="msg91authkey" class="regular-text"
                           value="<?php echo $msg91authkey; ?>" autocomplete="off"
                           placeholder="<?php _e( 'Authentication Key', 'digits' ); ?>"/>
                </td>
            </tr>
            <tr class="msg91cred gateway_conf" <?php if ( $digit_tapp != 3 ) {
				echo 'style="display:none;"';
			} ?>>
                <th scope="row"><label for="msg91route"><?php _e( 'ROUTE', 'digits' ); ?> </label></th>
                <td>
                    <select name="msg91route">
                        <option value="1" <?php if ( $msg91route == 1 ) {
							echo "selected='selected'";
						} ?>><?php _e( 'SendOTP', 'digits' ); ?></option>
                        <option value="2" <?php if ( $msg91route == 2 ) {
							echo "selected='selected'";
						} ?>><?php _e( 'Transactional', 'digits' ); ?></option>
                    </select>
                    <p class="dig_ecr_desc">
                        If your website users are only from <b>India</b> then you can use <b>Transactional</b> or
                        <b>SendOTP</b> route. But if your users are from any other <b>country than India</b> then you
                        should
                        only use <b>SendOTP</b> route.
                    </p>
                </td>
            </tr>
            <tr class="msg91cred gateway_conf" <?php if ( $digit_tapp != 3 ) {
				echo 'style="display:none;"';
			} ?>>
                <th scope="row"><label for="msg91senderid"><?php _e( 'Sender ID', 'digits' ); ?> </label></th>
                <td>
                    <input type="text" id="msg91senderid" name="msg91senderid" class="regular-text"
                           value="<?php echo $msg91senderid; ?>" autocomplete="off"
                           placeholder="<?php _e( 'Sender ID', 'digits' ); ?>"
                           maxlength="6"/>
                </td>
            </tr>


            <tr class="yunpiancred gateway_conf" <?php if ( $digit_tapp != 4 ) {
				echo 'style="display:none;"';
			} ?>>
                <th scope="row"><label for="yunpianapikey"><?php _e( 'API Key', 'digits' ); ?> </label></th>
                <td>
                    <input type="text" id="yunpianapikey" name="yunpianapikey" class="regular-text"
                           value="<?php echo $yunpianapi; ?>" autocomplete="off"
                           placeholder="<?php _e( 'API Key', 'digits' ); ?>"/>
                    <p class="dig_ecr_desc"><?php _e( 'Please keep this message template similar to the one on Yunpian, just replace #code# with %OTP% otherwise messages will not be sent.', 'digits' ); ?></p>
                </td>
            </tr>

			<?php
			dig_show_gateway_api_fields( $smsgateways, $digit_tapp, '' );
			?>


        </table>


		<?php
		$dig_messagetemplate = get_option( "dig_messagetemplate", "Your OTP for %NAME% is %OTP%" );

		?>
        <table class="form-table">
            <tr class="disotp">
                <th scope="row" style="vertical-align:top;"><label
                            for="dig_messagetemplate"><?php _e( 'Message Template', 'digits' ); ?></label></th>
                <td>
                    <input type="text" name="dig_messagetemplate" value="<?php echo $dig_messagetemplate; ?>"
                           placeholder="Message Template" class="dig_inp_wid3"
                           maxlength="<?php echo 128 - strlen( get_option( 'blogname' ) ); ?>" required>
                    <p class="dig_ecr_desc">Max char: 140<br/>
						<?php _e( 'Site Name', 'digits' ); ?> - %NAME%<Br/><?php _e( 'OTP', 'digits' ); ?> -
                        %OTP%</p>

                </td>
            </tr>
        </table>
		<?php
		digit_test_api_box();
		?>
    </div>
	<?php
	do_action( 'digits_api_settings' );


	?>
    <div class="dig_whatsapp_api_box digits_gateway_api_box">
		<?php
		$whatsapp_gateway = get_option( 'digit_whatsapp_gateway', - 1 );
		?>
        <div class="dig_ad_head"><span><?php _e( 'WhatsApp', 'digits' ); ?></span></div>
        <table class="form-table digits_default_gateway_details">
			<?php digit_select_gateway( 'name="digit_whatsapp_gateway" id="digit_whatsapp_gateway"', $whatsapp_gateway,
				getWhatsAppGateWayArray(), true ); ?>

			<?php
			dig_show_gateway_api_fields( getWhatsAppGateWayArray(), $whatsapp_gateway, 'whatsapp' );
			?>

        </table>
    </div>
	<?php
}

/*
 * TODO: remove iniFireBaseinit after 7.1
 * */
function digit_select_gateway( $gatewayAttributes, $digit_tapp = - 1, $smsgateways = array(), $isWhatsapp = false ) {

	if ( empty( $smsgateways ) ) {
		$loadDefault = true;
		$smsgateways = getGateWayArray();
	}

	if ( $isWhatsapp ) {
		$gatewayLabel = __( 'WhatsApp Gateway', 'digits' );
	} else {
		$gatewayLabel = __( 'SMS Gateway', 'digits' );
	}
	$gatewayName = digit_getGatewayName( $digit_tapp );
	iniFireBaseinit();
	?>

    <tr>
        <th scope="row" valign="top" style="vertical-align: top;">
            <label><?php echo $gatewayLabel; ?> </label></th>
        <td class="dig-gs-gatway-select-td">

            <select class="digit_gateway" <?php echo $gatewayAttributes; ?> autocomplete="off">
				<?php if ( ! $isWhatsapp ) { ?>
                    <option <?php if ( $digit_tapp == 13 ) {
						echo 'selected="selected"';
					} ?> data-value="13" value="13" han="firebase" data-test="0">FireBase
                        (<?php _e( 'Free', 'digits' ); ?>)
                    </option>
                    <option <?php if ( $digit_tapp == 1 ) {
						echo 'selected="selected"';
					} ?> data-value="1" value="1" han="facebook" data-test="0">Account Kit
                        (<?php _e( 'Free', 'digits' ); ?>
                        )
                    </option>
                    <option <?php if ( $digit_tapp == 2 ) {
						echo 'selected="selected"';
					} ?> data-value="2" value="2" han="twilio">Twilio
                    </option>
                    <option <?php if ( $digit_tapp == 3 ) {
						echo 'selected="selected"';
					} ?> data-value="3" value="3" han="msg91">Msg91
                    </option>
					<?php
				}
				foreach ( $smsgateways as $name => $details ) {
					$sel   = "";
					$value = $details['value'];
					if ( $value == 13 ) {
						continue;
					}
					if ( $value == $digit_tapp ) {

						$gatewayName = $name;
						$sel         = 'selected="selected"';
					}

					if ( $isWhatsapp ) {
						$prefix = 'whatsapp';
					} else {
						$prefix = '';
					}
					$han = strtolower( str_replace( array( ".", " " ), "_", $prefix . strtolower( $name ) ) );
					if ( isset( $details['label'] ) ) {
						$gateway_label = $details['label'];
					} else {
						$gateway_label = $name;
					}
					echo '<option data-value="' . $value . '" value="' . $value . '" ' . $sel . ' han="' . $han . '">' . $gateway_label . '</option>';
				}
				if ( ! $isWhatsapp ) {
					?>
                    <option value="4" <?php if ( $digit_tapp == 4 ) {
						echo 'selected="selected"';
					} ?> data-value="4" han="yunpian">Yunpian
                    </option>
					<?php
				}
				?>
            </select><br/>
            <div>
				<?php if ( ! $isWhatsapp ) { ?>
                    <span class="dig_current_gateway"
                          style="<?php if ( $digit_tapp == 1 || $digit_tapp == 13 || $digit_tapp == - 1 ) {
						      echo 'display:none;';
					      } ?>"><?php printf( __( 'You should have paid <span>%s</span> plan to use this.', 'digits' ), $gatewayName ); ?></span>

                    <p class="dig_accountkit_notice facebookcred gateway_conf" <?php if ( $digit_tapp != 1 ) {
						echo 'style="display:none;"';
					} ?>>
                        Account Kit by Facebook is depreciated as of September 9, 2019, you can read more about it <a
                                target="_blank"
                                href="https://developers.facebook.com/blog/post/2019/09/09/account-kit-services-no-longer-available-starting-march">here</a>.
                        If you are already using it then you can use it until March 9, 2020 or else you can switch your
                        gateway
                        to Firebase (Free).<br/><br/>
                        <b>Your user data will not get affected in any way as it gets stored on your website and all of
                            your
                            old/new users will be able to login or signup using any other gateway.</b>
                    </p>
				<?php } ?>
            </div>

        </td>
    </tr>
	<?php
}


function dig_show_gateway_api_fields( $smsgateways, $digit_tapp, $prefix = '' ) {
	foreach ( $smsgateways as $name => $details ) {
		$value = $details['value'];
		$name  = str_replace( array( ".", " " ), "_", $prefix . strtolower( $name ) );

		$gatewayCreds = get_option( 'digit_' . strtolower( $name ) );


		foreach ( $details['inputs'] as $inputLabel => $input ) {
			$inputname = $name . "_" . $input['name'];
			if ( isset( $gatewayCreds[ $input['name'] ] ) ) {
				$inputValue = stripslashes( $gatewayCreds[ $input['name'] ] );
			} else {
				$inputValue = '';
			}
			$optional = 0;
			if ( isset( $input['optional'] ) ) {
				$optional = $input['optional'];
			}

			?>
            <tr class="<?php echo $name; ?>cred gateway_conf" <?php if ( $digit_tapp != $value ) {
				echo 'style="display:none;"';
			} ?>>
                <th scope="row"><label for="<?php echo $inputname; ?>"> <?php _e( $inputLabel, 'digits' );
						if ( $optional == 1 ) {
							echo ' (Optional)';
						} ?> </label></th>
                <td>

					<?php
					if ( isset( $input['textarea'] ) ) {
						?>
                        <textarea type="text" id="<?php echo $inputname; ?>"
                                  name="<?php echo $inputname; ?>"
                                  class="regular-text"
                                  autocomplete="off"
                                  rows="9"
                                  placeholder="<?php _e( $inputLabel, 'digits' ); ?>"
                                  dig-optional="<?php echo $optional; ?>"><?php echo $inputValue; ?></textarea>
						<?php
					} else {
						?>
                        <input type="text" id="<?php echo $inputname; ?>" name="<?php echo $inputname; ?>"
                               class="regular-text"
                               value="<?php echo $inputValue; ?>" autocomplete="off"
                               placeholder="<?php _e( $inputLabel, 'digits' ); ?>"
                               dig-optional="<?php echo $optional; ?>"/>
						<?php
					}
					?>
                </td>
            </tr>
			<?php
		}
	}
}

function digits_update_api_settings() {
	$smsgateways = getGateWayArray();

	digits_update_gateway_api_details( $smsgateways, '' );
	digits_update_gateway_api_details( getWhatsAppGateWayArray(), 'whatsapp' );

	update_option( 'digit_whatsapp_gateway', sanitize_text_field( $_POST['digit_whatsapp_gateway'] ) );

}

function digits_update_gateway_api_details( $smsgateways, $prefix ) {

	foreach ( $smsgateways as $name => $details ) {
		$name        = strtolower( str_replace( [ ".", " " ], "_", $name ) );
		$gatewaycred = array();
		foreach ( $details['inputs'] as $inputlabel => $input ) {

			if ( isset( $input['textarea'] ) ) {
				$inputValue = sanitize_textarea_field( $_POST[ $prefix . $name . "_" . $input['name'] ] );
			} else {
				$inputValue = sanitize_text_field( $_POST[ $prefix . $name . "_" . $input['name'] ] );
			}

			$gatewaycred[ $input['name'] ] = $inputValue;

		}
		update_option( 'digit_' . $prefix . strtolower( $name ), $gatewaycred );
	}
}