<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once 'includes/functions.php';
require_once 'setup_wizard.php';

function add_digits_setting_page() {
	$m = add_menu_page(
		'Digits',
		'Digits',
		'manage_options',
		'digits_settings',
		'digits_plugin_settings',
		'',
		68
	);
	add_submenu_page(
		'digits_settings',
		'Digits',
		'Settings',
		'manage_options',
		'digits_settings'
	);

	add_action( 'admin_print_styles-' . $m, 'dig_add_gs_css' );
	add_action( 'admin_enqueue_scripts', 'dig_add_menu_css' );

}

add_action( "admin_menu", "add_digits_setting_page" );
function dig_add_menu_css() {
	wp_enqueue_style( 'digits-settings', get_digits_asset_uri( '/admin/assets/css/settings.css' ), array(), digits_version(), 'all' );

}


function digits_plugin_settings() {

	dig_add_gs_css();

	wp_print_request_filesystem_credentials_modal();

	?>
    <style>.notice, .update-nag, .updated {
            display: none;
        }
    </style>


	<?php
	if ( isset( $_GET['show_survey'] ) ) {
	    $link = 'https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAMAAASH_sdUNEZaSEFJN0c2NDlQNjVLT0JNQTJWQlhPVi4u';
		?>
        <style>body {
                overflow: hidden;
            }</style>

        <div class="dig-addon-box dig-modal-center_align dig_ma-box dig-box  dig-modal-con-reno">
            <div class="dig-modal-center dig_addons_pop">
                <a href="<?php echo $link;?>" target="_blank">
                    <img src="<?php echo get_digits_asset_uri( '/assets/images/survey-popup.png' ); ?>"/>
                </a>
            </div>
            <div class="dig_hide_modal">
            </div>
        </div>

		<?php
	}
	$digpc        = dig_get_option( 'dig_purchasecode' );
	$request_link = admin_url( 'admin.php?page=digits_settings&tab=activate' );

	$purchase_link = 'https://1.envato.market/0zxKP';
	if ( empty( $digpc ) ) {

		echo '<div class="dig_red_notice dig_pc_notice dig_notice">This is a trial version of Digits, please register the plugin using purchase code from <a href="' . $request_link . '">here</a> to use full version. If you have not purchased digits yet, then please visit this <a href="' . $purchase_link . '">link</a> to buy a genuine licensed copy.</div>';
	}


	if ( isset( $_POST['dig_hid_addon_domain_notice'] ) ) {

		update_site_option( 'dig_hid_addon_domain_notice', 1 );
	}
	$dig_hid_addon_domain_notice = get_site_option( 'dig_hid_addon_domain_notice', - 1 );

	if ( $dig_hid_addon_domain_notice == - 1 ) {
		?>

        <div class="dig_info_notice dig_notice">In case you are using same purchase code on your testing/production
            server, then make sure to request addon domain from <a href="<?php echo $request_link; ?>">here</a>.
            <form method="post">
                <button type="submit">x</button>
                <input type="hidden" name="dig_hid_addon_domain_notice"/></form>
        </div>
		<?php
	}
	?>
    <form method="post" autocomplete="off" id="digits_setting_update" class="dig_activation_form"
          enctype="multipart/form-data">

        <div class="digits_admim_conf">


			<?php
			if ( isset( $_GET['tab'] ) ) {
				$active_tab = sanitize_text_field( $_GET['tab'] );
			} else {
				$active_tab = 'apisettings';
			} // end if

			digits_update_data( 0 );


			if ( empty( $digpc ) ) {
				if ( $active_tab == "customize" ) {
					$active_tab = 'activate';
				}
			}
			?>

            <div class="dig_load_overlay">
                <div class="dig_load_content">
                    <div class="dig_spinner">
                        <div class="dig_double-bounce1"></div>
                        <div class="dig_double-bounce2"></div>
                    </div>
                </div>
            </div>

            <div class="dig_big_preset_show">
                <img src=""/>
            </div>

            <div class="dig_load_overlay_gs">
                <div class="dig_load_content">

                    <div class="circle-loader">
                        <div class="checkmark draw"></div>
                    </div>

                </div>
            </div>

            <div class="dig_log_setge">
                <div class="dig_ad_left_side">
                    <div class="dig_ad_left_side_content">


                        <div class="dig_sts_logo">
                            <a href="https://digits.unitedover.com/" target="_blank">
                                <img src="<?php echo get_digits_asset_uri( '/assets/images/Digits_logo.png' ); ?>"
                                     height="36px"/>
                            </a>
                            <ul class="dig_gs_log_men">
                                <li><a class="dig_ngmc"
                                       href="https://help.unitedover.com/?utm_source=digits-wp-settings&utm_medium=kb-button"
                                       target="_blank"><?php _e( 'KNOWLEDGEBASE', 'digits' ); ?></a></li>
                                <li><a id="dig_addonstab" href="?page=digits_settings&tab=addons"
                                       class="dig_ngmc updatetabview <?php echo $active_tab == 'addons' ? 'dig-nav-tab-active' : ''; ?>"
                                       tab="addonstab"><?php _e( 'Addons', 'digits' ); ?></a></li>
                                <li><a class="dig_ngmc" href="https://digits.unitedover.com/changelog/"
                                       target="_blank"><?php _e( 'CHANGELOG', 'digits' ); ?></a></li>

                                <li><a id="dig_activatetab" href="?page=digits_settings&tab=activate"
                                       class="dig_ngmc updatetabview <?php echo $active_tab == 'activate' ? 'dig-nav-tab-active' : ''; ?>"
                                       tab="activatetab"><?php _e( 'Register', 'digits' ); ?></a></li>
                            </ul>
                        </div>

						<?php
						if ( ! empty( $digpc ) ) {
							echo '<input type="hidden" id="dig_activated" value="1" />';
						} ?>


                        <div class="dig-tab-wrapper">

                            <ul class="dig-tab-ul">
                                <li><a href="?page=digits_settings&tab=apisettings"
                                       class="updatetabview dig-nav-tab <?php echo $active_tab == 'apisettings' ? 'dig-nav-tab-active' : ''; ?>"
                                       tab="apisettingstab"><?php _e( 'Gateway', 'digits' ); ?></a></li>

                                <li><a href="?page=digits_settings&tab=configure"
                                       class="updatetabview dig-nav-tab <?php echo $active_tab == 'configure' ? 'dig-nav-tab-active' : ''; ?>"
                                       tab="configuretab"><?php _e( 'General', 'digits' ); ?></a></li>

                                <li><a href="?page=digits_settings&tab=customfields"
                                       class="customfieldsNavTab updatetabview dig-nav-tab <?php echo $active_tab == 'customfields' ? 'dig-nav-tab-active' : ''; ?>"
                                       tab="customfieldstab"><?php _e( 'Form', 'digits' ); ?></a></li>

                                <li><a href="?page=digits_settings&tab=customize"
                                       class="updatetabview dig-nav-tab <?php echo $active_tab == 'customize' ? 'dig-nav-tab-active' : ''; ?>"
                                       tab="customizetab" acr="1"><?php _e( 'Style', 'digits' ); ?></a></li>

                                <li><a href="?page=digits_settings&tab=translations"
                                       class="updatetabview dig-nav-tab <?php echo $active_tab == 'translations' ? 'dig-nav-tab-active' : ''; ?>"
                                       tab="translationstab"><?php _e( 'Translations', 'digits' ); ?></a></li>

                                <li><a href="?page=digits_settings&tab=shortcodes"
                                       class="updatetabview dig-nav-tab <?php echo $active_tab == 'shortcodes' ? 'dig-nav-tab-active' : ''; ?>"
                                       tab="shortcodestab"><?php _e( 'Shortcodes', 'digits' ); ?></a></li>


                            </ul>

                        </div>


                        <div id="digits_setting_form_div" class="dig_settings_Form">
                            <div data-tab="apisettingstab"
                                 class="dig_ad_in_pt apisettingstab digtabview <?php echo $active_tab == 'apisettings' ? 'digcurrentactive' : '" style="display:none;'; ?>">
								<?php digits_api_settings();
								?>

                            </div>
                            <div data-tab="configuretab"
                                 class="dig_ad_in_pt configuretab digtabview <?php echo $active_tab == 'configure' ? 'digcurrentactive' : '" style="display:none;'; ?>">
								<?php
								digits_configure_settings();
								?>
                            </div>

                            <div data-tab="customizetab"
                                 class="dig_ad_in_pt customizetab digtabview <?php echo $active_tab == 'customize' ? 'digcurrentactive' : '" style="display:none;'; ?>">
								<?php

								digit_customize( false );


								?>

                            </div>

                            <div data-tab="translationstab"
                                 class="dig_ad_in_pt translationstab digtabview <?php echo $active_tab == 'translations' ? 'digcurrentactive' : '" style="display:none;'; ?>">
								<?php digit_shortcodes_translations(); ?>
                            </div>
                            <div data-tab="shortcodestab"
                                 class="dig_ad_in_pt shortcodestab digtabview <?php echo $active_tab == 'shortcodes' ? 'digcurrentactive' : '" style="display:none;'; ?>">
								<?php digit_shortcodes( false ); ?>

                            </div>
                            <div data-tab="activatetab"
                                 class="dig_ad_in_pt activatetab digtabview <?php echo $active_tab == 'activate' ? 'digcurrentactive' : '" style="display:none;'; ?>">
								<?php digit_activation( false ); ?>
                            </div>


                            <div data-tab="customfieldstab"
                                 class="dig_ad_in_pt customfieldstab digtabview <?php echo $active_tab == 'customfields' ? 'digcurrentactive' : '" style="display:none;'; ?>">
								<?php digit_customfields(); ?>
                            </div>


                            <div data-tab="addonstab"
                                 class="dig_ad_in_pt addonstab digtabview <?php echo $active_tab == 'addons' ? 'digcurrentactive' : '" style="display:none;'; ?>">
								<?php digit_addons( $active_tab ); ?>
                            </div>


							<?php do_action( 'digits_settings_page', $active_tab ); ?>
                            <Button type="submit" class="dig_ad_submit"
                                    disabled><?php _e( 'Save Changes', 'digits' ); ?></Button>
                        </div>


                    </div>
                </div>


                <div class="dig_ad_side">
					<?php
					$plugin_version = digits_version();
					echo dig_curl( 'http://unitedover.com/images/digits-wpsettings/sidebar.php?version=' . $plugin_version ); ?>
                </div>

            </div>
			<?php
			if ( is_rtl() ) {
				echo '<input type="hidden" id="is_rtl" value="1"/>';
			}
			?>
            <style type="text/css">
                #wpbody-content {
                    padding-bottom: 10px;
                }

                #wpfooter {
                    display: none;
                }
            </style>
        </div><!-- /.wrap -->

    </form>

	<?php

	wp_register_script( 'digits-upload-script', get_digits_asset_uri( '/admin/assets/js/upload.js' ), array( 'jquery' ), digits_version(), true );

	$jsData = array(
		'logo'        => get_option( 'digits_logo_image' ),
		'selectalogo' => __( 'Select a logo', 'digits' ),
		'usethislogo' => __( 'Use this logo', 'digits' ),
		'changeimage' => __( 'Change Image', 'digits' ),
		'selectimage' => __( 'Select Image', 'digits' ),
		'removeimage' => __( 'Remove Image', 'digits' ),
	);
	wp_localize_script( 'digits-upload-script', 'dig', $jsData );

	wp_enqueue_script( 'digits-upload-script' );
	wp_enqueue_media();

	dig_config_scripts();

	?>
	<?php

} // end

add_action( 'admin_head', 'digits_add_admin_settings_scripts' );

add_action( 'admin_enqueue_scripts', 'digits_add_admin_settings_scripts' );
function digits_add_admin_settings_scripts( $hook ) {

	if ( is_admin() ) {

		if ( $hook != - 1 ) {
			if ( $hook != 'plugins.php' ) {
				if ( ! isset( $_GET['page'] ) ) {
					return;
				}
				if ( $_GET['page'] != 'digits_settings' ) {
					return;
				}
			}
		}

		wp_register_style( 'select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css', array(), null, false );
		wp_enqueue_style( 'select2' );
		wp_register_script( 'select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js', array( 'jquery' ), null, false );
		wp_enqueue_script( 'select2' );


		// Add the color picker css__FILE__
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_style( 'google-roboto-regular', dig_fonts() );
		nice_select_scr();

		wp_enqueue_script( 'rubaxa-sortable', get_digits_asset_uri( '/assets/js/sortable.min.js' ), null );


		wp_enqueue_script( 'slick', get_digits_asset_uri( '/admin/assets/js/slick.min.js' ), null );


		// Include our custom jQuery__FILE__ with WordPress Color Picker dependency
		wp_register_script( 'digits-script', get_digits_asset_uri( '/admin/assets/js/settings.js' ), array(
			'jquery',
			'select2',
			'updates',
			'wp-color-picker',
			'rubaxa-sortable',
			'slick',
			'digits-login-script',
		), digits_version(), true );

		$settings_array = array(
			'plsActMessage'                         => __( 'Please activate your plugin to change the look and feel of your Login page and Popup', 'digits' ),
			'cannotUseEmailWithoutPass'             => __( 'Oops! You cannot enable email without password for login', 'digits' ),
			'bothPassAndOTPCannotBeDisabled'        => __( 'Both Password and OTP cannot be disabled', 'digits' ),
			'selectatype'                           => __( 'Select a type', 'digits' ),
			"Invalidmsg91senderid"                  => __( "Invalid msg91 sender id!", 'digits' ),
			"invalidpurchasecode"                   => __( "Invalid Purchase Code", 'digits' ),
			"Error"                                 => __( "Error! Please try again later", "digits" ),
			"PleasecompleteyourSettings"            => __( "Please complete your Settings", 'digits' ),
			"PleasecompleteyourAPISettings"         => __( "Please complete your API Settings", 'digits' ),
			"PleasecompleteyourCustomFieldSettings" => __( "Please complete your Custom Field Settings", 'digits' ),
			"Copiedtoclipboard"                     => __( "Copied to clipboard", "digits" ),
			'ajax_url'                              => admin_url( 'admin-ajax.php' ),
			'fieldAlreadyExist'                     => __( 'Field Already exist', 'digits' ),
			'duplicateValue'                        => __( 'Duplicate Value', 'digits' ),
			"string_no"                             => __( "No", "digits" ),
			"string_optional"                       => __( "Optional", "digits" ),
			"string_required"                       => __( "Required", "digits" ),
			"validnumber"                           => __( "Please enter a valid mobile number", "digits" ),
			"invalidimportcode"                     => __( "Please enter a valid import code", "digits" ),

		);
		wp_localize_script( 'digits-script', 'digsetobj', $settings_array );

		wp_enqueue_script( 'digits-script' );

		wp_register_script( 'jquery-mask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js', array( 'jquery' ), null, false );
		wp_print_scripts( 'jquery-mask' );


		digits_add_style();
		digits_add_scripts();
	}
}


function dig_config_scripts() {

	wp_register_script( 'digits-upload-script', get_digits_asset_uri( '/admin/assets/js/upload.js' ), array( 'jquery' ), digits_version(), true );


	$jsData = array(
		'logo'        => get_option( 'digits_logo_image' ),
		'selectalogo' => __( 'Select a Image', 'digits' ),
		'usethislogo' => __( 'Use this Image', 'digits' ),
		'changeimage' => __( 'Change Image', 'digits' ),
		'selectimage' => __( 'Select Image', 'digits' ),
		'removeimage' => __( 'Remove Image', 'digits' ),
	);
	wp_localize_script( 'digits-upload-script', 'dig', $jsData );


	wp_enqueue_script( 'wp-color-picker-alpha', get_digits_asset_uri( '/admin/assets/js/wp-color-picker-alpha.min.js'),
        array( 'jquery','wp-color-picker' ), '1.2.2', false );


	wp_enqueue_script( 'digits-upload-script' );

	@do_action( 'admin_footer' );
	do_action( 'admin_print_footer_scripts' );
}


function digits_add_admin_scripts() {
	digits_add_scripts();

	wp_print_scripts( 'scrollTo' );
	wp_print_scripts( 'digits-main-script' );
	wp_print_scripts( 'digits-login-script' );
	wp_print_scripts( 'google-roboto-regular', dig_fonts() );
	?>
    <style>
        .woocommerce-input-wrapper .dig_wc_countrycodecontainer {
            position: absolute;
        }
    </style>
	<?php
}

add_action( 'admin_print_footer_scripts', 'digits_add_admin_scripts' );

function dig_add_gs_css() {
	wp_enqueue_style( 'google-roboto-regular', dig_fonts() );
	nice_select_scr();
	wp_enqueue_style( 'digits-gs-style', get_digits_asset_uri( '/admin/assets/css/gs.css' ), array(
		'google-roboto-regular',
		'nice-select'
	), digits_version(), 'all' );

	if ( is_rtl() ) {
		wp_enqueue_style( 'digits-gs-rtl-style', get_digits_asset_uri( '/admin/assets/css/gs-rtl.css' ), array( 'digits-gs-style' ), null, 'all' );

	}

	digits_add_style();
}
