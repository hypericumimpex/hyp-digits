<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function digit_shortcodes( $showbuttons = true ) {

	if ( $showbuttons ) {
		echo "<h1>" . __( "Shortcodes", "digits" ) . "</h1>";
	}

	?>
    <table class="form-table">
        <tr>
            <th scope="row"><label for="digit_loginreg_short"><?php _e( "Login/Signup Page", "digits" ); ?> </label>
            </th>
            <td>
                <div class="digits_shortcode_tbs">
                    <input type="text" id="digit_loginreg_short" value="[dm-page]" readonly/>
                    <img class="dig_copy_shortcode" alt="<?php _e( 'Copy', "digits" ); ?>"
                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2016%2019%22%20width%3D%2232%22%20height%3D%2232%22%3E%3Cdefs%3E%3Cstyle%3E.c%7Bstroke%3A%237a889a%3Bstroke-linecap%3Around%3Bstroke-linejoin%3Around%3Bstroke-miterlimit%3A10%3Bfill%3Anone%7D%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20opacity%3D%22.4%22%3E%3Cpath%20d%3D%22M4.25%204.101H3v12h10v-12h-1.25%22%20stroke%3D%22%237a889a%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-miterlimit%3D%2210%22%20fill%3D%22%237a889a%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M11.469%202.301h3.406a.613.613%200%200%201%20.625.6v15a.613.613%200%200%201-.625.6H1.125a.613.613%200%200%201-.625-.6v-15a.613.613%200%200%201%20.625-.6h3.406%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M10.187%201.705h-.656a1.577%201.577%200%200%200-3.062%200h-.656a1.5%201.5%200%200%200-1.136.41%201.379%201.379%200%200%200-.427%201.09v.9h7.5v-.9a1.409%201.409%200%200%200-.438-1.079%201.535%201.535%200%200%200-1.125-.421z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row"><label
                        for="digit_loginreg_modal_short"><?php _e( "Login/Signup Modal", "digits" ); ?> </label></th>
            <td>
                <div class="digits_shortcode_tbs">
                    <input type="text" id="digit_loginreg_modal_short" value="[dm-modal]" readonly/>
                    <img class="dig_copy_shortcode" alt="<?php _e( 'Copy', "digits" ); ?>"
                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2016%2019%22%20width%3D%2232%22%20height%3D%2232%22%3E%3Cdefs%3E%3Cstyle%3E.c%7Bstroke%3A%237a889a%3Bstroke-linecap%3Around%3Bstroke-linejoin%3Around%3Bstroke-miterlimit%3A10%3Bfill%3Anone%7D%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20opacity%3D%22.4%22%3E%3Cpath%20d%3D%22M4.25%204.101H3v12h10v-12h-1.25%22%20stroke%3D%22%237a889a%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-miterlimit%3D%2210%22%20fill%3D%22%237a889a%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M11.469%202.301h3.406a.613.613%200%200%201%20.625.6v15a.613.613%200%200%201-.625.6H1.125a.613.613%200%200%201-.625-.6v-15a.613.613%200%200%201%20.625-.6h3.406%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M10.187%201.705h-.656a1.577%201.577%200%200%200-3.062%200h-.656a1.5%201.5%200%200%200-1.136.41%201.379%201.379%200%200%200-.427%201.09v.9h7.5v-.9a1.409%201.409%200%200%200-.438-1.079%201.535%201.535%200%200%200-1.125-.421z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                </div>
            </td>
        </tr>


        <tr>
            <th scope="row"><label for="digit_login_short"><?php _e( "Login Page", "digits" ); ?> </label></th>
            <td>
                <div class="digits_shortcode_tbs">
                    <input type="text" id="digit_login_short" value="[dm-login-page]" readonly/>
                    <img class="dig_copy_shortcode" alt="<?php _e( 'Copy', "digits" ); ?>"
                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2016%2019%22%20width%3D%2232%22%20height%3D%2232%22%3E%3Cdefs%3E%3Cstyle%3E.c%7Bstroke%3A%237a889a%3Bstroke-linecap%3Around%3Bstroke-linejoin%3Around%3Bstroke-miterlimit%3A10%3Bfill%3Anone%7D%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20opacity%3D%22.4%22%3E%3Cpath%20d%3D%22M4.25%204.101H3v12h10v-12h-1.25%22%20stroke%3D%22%237a889a%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-miterlimit%3D%2210%22%20fill%3D%22%237a889a%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M11.469%202.301h3.406a.613.613%200%200%201%20.625.6v15a.613.613%200%200%201-.625.6H1.125a.613.613%200%200%201-.625-.6v-15a.613.613%200%200%201%20.625-.6h3.406%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M10.187%201.705h-.656a1.577%201.577%200%200%200-3.062%200h-.656a1.5%201.5%200%200%200-1.136.41%201.379%201.379%200%200%200-.427%201.09v.9h7.5v-.9a1.409%201.409%200%200%200-.438-1.079%201.535%201.535%200%200%200-1.125-.421z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                </div>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="digit_login_modal_short"><?php _e( "Login Modal", "digits" ); ?>
                </label></th>
            <td>
                <div class="digits_shortcode_tbs">
                    <input type="text" id="digit_login_modal_short" value="[dm-login-modal]" readonly/>
                    <img class="dig_copy_shortcode" alt="<?php _e( 'Copy', "digits" ); ?>"
                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2016%2019%22%20width%3D%2232%22%20height%3D%2232%22%3E%3Cdefs%3E%3Cstyle%3E.c%7Bstroke%3A%237a889a%3Bstroke-linecap%3Around%3Bstroke-linejoin%3Around%3Bstroke-miterlimit%3A10%3Bfill%3Anone%7D%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20opacity%3D%22.4%22%3E%3Cpath%20d%3D%22M4.25%204.101H3v12h10v-12h-1.25%22%20stroke%3D%22%237a889a%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-miterlimit%3D%2210%22%20fill%3D%22%237a889a%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M11.469%202.301h3.406a.613.613%200%200%201%20.625.6v15a.613.613%200%200%201-.625.6H1.125a.613.613%200%200%201-.625-.6v-15a.613.613%200%200%201%20.625-.6h3.406%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M10.187%201.705h-.656a1.577%201.577%200%200%200-3.062%200h-.656a1.5%201.5%200%200%200-1.136.41%201.379%201.379%200%200%200-.427%201.09v.9h7.5v-.9a1.409%201.409%200%200%200-.438-1.079%201.535%201.535%200%200%200-1.125-.421z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                </div>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="digit_reg_page_short"><?php _e( "Sign Up Page", "digits" ); ?>
                </label></th>
            <td>
                <div class="digits_shortcode_tbs">
                    <input type="text" id="digit_reg_page_short" value="[dm-signup-page]" readonly/>
                    <img class="dig_copy_shortcode" alt="<?php _e( 'Copy', "digits" ); ?>"
                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2016%2019%22%20width%3D%2232%22%20height%3D%2232%22%3E%3Cdefs%3E%3Cstyle%3E.c%7Bstroke%3A%237a889a%3Bstroke-linecap%3Around%3Bstroke-linejoin%3Around%3Bstroke-miterlimit%3A10%3Bfill%3Anone%7D%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20opacity%3D%22.4%22%3E%3Cpath%20d%3D%22M4.25%204.101H3v12h10v-12h-1.25%22%20stroke%3D%22%237a889a%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-miterlimit%3D%2210%22%20fill%3D%22%237a889a%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M11.469%202.301h3.406a.613.613%200%200%201%20.625.6v15a.613.613%200%200%201-.625.6H1.125a.613.613%200%200%201-.625-.6v-15a.613.613%200%200%201%20.625-.6h3.406%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M10.187%201.705h-.656a1.577%201.577%200%200%200-3.062%200h-.656a1.5%201.5%200%200%200-1.136.41%201.379%201.379%200%200%200-.427%201.09v.9h7.5v-.9a1.409%201.409%200%200%200-.438-1.079%201.535%201.535%200%200%200-1.125-.421z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                </div>
            </td>
        </tr>


        <tr>
            <th scope="row"><label for="digit_reg_short"><?php _e( "Sign Up Modal", "digits" ); ?>
                </label></th>
            <td>
                <div class="digits_shortcode_tbs">
                    <input type="text" id="digit_reg_short" value="[dm-signup-modal]" readonly/>
                    <img class="dig_copy_shortcode" alt="<?php _e( 'Copy', "digits" ); ?>"
                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2016%2019%22%20width%3D%2232%22%20height%3D%2232%22%3E%3Cdefs%3E%3Cstyle%3E.c%7Bstroke%3A%237a889a%3Bstroke-linecap%3Around%3Bstroke-linejoin%3Around%3Bstroke-miterlimit%3A10%3Bfill%3Anone%7D%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20opacity%3D%22.4%22%3E%3Cpath%20d%3D%22M4.25%204.101H3v12h10v-12h-1.25%22%20stroke%3D%22%237a889a%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-miterlimit%3D%2210%22%20fill%3D%22%237a889a%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M11.469%202.301h3.406a.613.613%200%200%201%20.625.6v15a.613.613%200%200%201-.625.6H1.125a.613.613%200%200%201-.625-.6v-15a.613.613%200%200%201%20.625-.6h3.406%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M10.187%201.705h-.656a1.577%201.577%200%200%200-3.062%200h-.656a1.5%201.5%200%200%200-1.136.41%201.379%201.379%200%200%200-.427%201.09v.9h7.5v-.9a1.409%201.409%200%200%200-.438-1.079%201.535%201.535%200%200%200-1.125-.421z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                </div>
            </td>
        </tr>

        <tr>
            <th scope="row"><label
                        for="digit_forg_page_short"><?php _e( "Forgot Password Page", "digits" ); ?>
                </label></th>
            <td>
                <div class="digits_shortcode_tbs">
                    <input type="text" id="digit_forg_page_short" value="[dm-forgot-password-page]" readonly/>
                    <img class="dig_copy_shortcode" alt="<?php _e( 'Copy', "digits" ); ?>"
                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2016%2019%22%20width%3D%2232%22%20height%3D%2232%22%3E%3Cdefs%3E%3Cstyle%3E.c%7Bstroke%3A%237a889a%3Bstroke-linecap%3Around%3Bstroke-linejoin%3Around%3Bstroke-miterlimit%3A10%3Bfill%3Anone%7D%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20opacity%3D%22.4%22%3E%3Cpath%20d%3D%22M4.25%204.101H3v12h10v-12h-1.25%22%20stroke%3D%22%237a889a%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-miterlimit%3D%2210%22%20fill%3D%22%237a889a%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M11.469%202.301h3.406a.613.613%200%200%201%20.625.6v15a.613.613%200%200%201-.625.6H1.125a.613.613%200%200%201-.625-.6v-15a.613.613%200%200%201%20.625-.6h3.406%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M10.187%201.705h-.656a1.577%201.577%200%200%200-3.062%200h-.656a1.5%201.5%200%200%200-1.136.41%201.379%201.379%200%200%200-.427%201.09v.9h7.5v-.9a1.409%201.409%200%200%200-.438-1.079%201.535%201.535%200%200%200-1.125-.421z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                </div>
            </td>
        </tr>

        <tr>
            <th scope="row"><label
                        for="digit_forg_short"><?php _e( "Forgot Password Modal", "digits" ); ?>
                </label></th>
            <td>
                <div class="digits_shortcode_tbs">
                    <input type="text" id="digit_forg_short" value="[dm-forgot-password-modal]" readonly/>
                    <img class="dig_copy_shortcode" alt="<?php _e( 'Copy', "digits" ); ?>"
                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2016%2019%22%20width%3D%2232%22%20height%3D%2232%22%3E%3Cdefs%3E%3Cstyle%3E.c%7Bstroke%3A%237a889a%3Bstroke-linecap%3Around%3Bstroke-linejoin%3Around%3Bstroke-miterlimit%3A10%3Bfill%3Anone%7D%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20opacity%3D%22.4%22%3E%3Cpath%20d%3D%22M4.25%204.101H3v12h10v-12h-1.25%22%20stroke%3D%22%237a889a%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-miterlimit%3D%2210%22%20fill%3D%22%237a889a%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M11.469%202.301h3.406a.613.613%200%200%201%20.625.6v15a.613.613%200%200%201-.625.6H1.125a.613.613%200%200%201-.625-.6v-15a.613.613%200%200%201%20.625-.6h3.406%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M10.187%201.705h-.656a1.577%201.577%200%200%200-3.062%200h-.656a1.5%201.5%200%200%200-1.136.41%201.379%201.379%200%200%200-.427%201.09v.9h7.5v-.9a1.409%201.409%200%200%200-.438-1.079%201.535%201.535%200%200%200-1.125-.421z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                </div>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="digit_logout_short"><?php _e( "Logout Shortcode", "digits" ); ?> </label>
            </th>
            <td>
                <div class="digits_shortcode_tbs">
                    <input type="text" id="digit_logout_short" value="[dm-logout]" readonly/>
                    <img class="dig_copy_shortcode" alt="<?php _e( 'Copy', "digits" ); ?>"
                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2016%2019%22%20width%3D%2232%22%20height%3D%2232%22%3E%3Cdefs%3E%3Cstyle%3E.c%7Bstroke%3A%237a889a%3Bstroke-linecap%3Around%3Bstroke-linejoin%3Around%3Bstroke-miterlimit%3A10%3Bfill%3Anone%7D%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20opacity%3D%22.4%22%3E%3Cpath%20d%3D%22M4.25%204.101H3v12h10v-12h-1.25%22%20stroke%3D%22%237a889a%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-miterlimit%3D%2210%22%20fill%3D%22%237a889a%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M11.469%202.301h3.406a.613.613%200%200%201%20.625.6v15a.613.613%200%200%201-.625.6H1.125a.613.613%200%200%201-.625-.6v-15a.613.613%200%200%201%20.625-.6h3.406%22%2F%3E%3Cpath%20class%3D%22c%22%20d%3D%22M10.187%201.705h-.656a1.577%201.577%200%200%200-3.062%200h-.656a1.5%201.5%200%200%200-1.136.41%201.379%201.379%200%200%200-.427%201.09v.9h7.5v-.9a1.409%201.409%200%200%200-.438-1.079%201.535%201.535%200%200%200-1.125-.421z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E">
                </div>
            </td>
        </tr>
    </table>


	<?php
	if ( $showbuttons ) {
		?>
        <p class="digits-setup-action step">
            <a href="<?php echo admin_url( 'index.php?page=digits-setup&step=ready' ); ?>"
               class="button-primary button button-large button-next"><?php _e( "Continue", "digits" ); ?></a>
            <a href="<?php echo admin_url( 'index.php?page=digits-setup&step=apisettings' ); ?>"
               class="button"><?php _e( "Back", "digits" ); ?></a>
        </p>
		<?php
	}
}

function digit_shortcodes_translations() {

	?>


    <div class="dig_ad_head"><span><?php _e( 'Menu Items', 'digits' ); ?></span></div>
	<?php

	$diglogintrans     = get_option( "diglogintrans", __( "Login / Register", "digits" ) );
	$digregistertrans  = get_option( "digregistertrans", __( "Register", "digits" ) );
	$digforgottrans    = get_option( "digforgottrans", __( "Forgot your Password?", "digits" ) );
	$digmyaccounttrans = get_option( "digmyaccounttrans", __( "My Account", "digits" ) );
	$diglogouttrans    = get_option( "diglogouttrans", __( "Logout", "digits" ) );

	$digonlylogintrans = get_option( "digonlylogintrans", __( "Login", "digits" ) );
	?>
    <table class="form-table">
        <tr>
            <th scope="row"><label for="diglogintrans"><?php _e( "Login / Register", "digits" ); ?> </label></th>
            <td>
                <input type="text" id="diglogintrans" name="diglogintrans" class="regular-text"
                       value="<?php echo $diglogintrans; ?>" required/>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="digonlylogintrans"><?php _e( "Login", "digits" ); ?> </label></th>
            <td>
                <input type="text" id="digonlylogintrans" name="digonlylogintrans" class="regular-text"
                       value="<?php echo $digonlylogintrans; ?>" required/>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="digregistertrans"><?php _e( "Register", "digits" ); ?> </label></th>
            <td>
                <input type="text" id="digregistertrans" name="digregistertrans" class="regular-text"
                       value="<?php echo $digregistertrans; ?>" required/>
            </td>
        </tr>


        <tr>
            <th scope="row"><label for="digforgottrans"><?php _e( "Forgot", "digits" ); ?> </label></th>
            <td>
                <input type="text" id="digforgottrans" name="digforgottrans" class="regular-text"
                       value="<?php echo $digforgottrans; ?>" required/>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="digmyaccounttrans"><?php _e( "My Account", "digits" ); ?> </label></th>
            <td>
                <input type="text" id="digmyaccounttrans" name="digmyaccounttrans" class="regular-text"
                       value="<?php echo $digmyaccounttrans; ?>" required/>
            </td>
        </tr>

        <tr>
            <th scope="row"><label for="diglogouttrans"><?php _e( "Logout", "digits" ); ?> </label></th>
            <td>
                <input type="text" id="diglogouttrans" name="diglogouttrans" class="regular-text"
                       value="<?php echo $diglogouttrans; ?>" required/>
            </td>
        </tr>


    </table>

    <div class="dig_desc_sep_pc"></div>
    <p class="dig_ecr_desc dig_cntr_algn dig_ltr_trnsdc"><?php _e( 'Transation of whole plugin can be done through POT file present in the plugin languages folder. You\'ll need to upload .MO and .PO files to the languages folder of this plugin. The easiest way to translate is to use Loco Translate WordPress plugin.', 'digits' ); ?>
    </p>
	<?php
}