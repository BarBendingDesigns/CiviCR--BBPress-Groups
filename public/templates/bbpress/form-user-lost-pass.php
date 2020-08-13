<?php

/**
 * User Lost Password Form
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<form method="post" action="<?php bbp_wp_login_action( array( 'action' => 'lostpassword', 'context' => 'login_post' ) ); ?>" class="bbp-login-form">
	<fieldset class="bbp-form">
		<legend><?php esc_html_e( 'Lost Password', 'bbpress' ); ?></legend>

		<div class="bbp-username">
			<div class="form-group">
				<label for="user_login" class="hide"><?php esc_html_e( 'Username or Email', 'bbpress' ); ?>: </label>
				<input class="form-control" type="text" name="user_login" value="" size="20" id="user_login" maxlength="100" autocomplete="off" />
			</div>
		</div>

		<?php do_action( 'login_form', 'resetpass' ); ?>

		<div class="bbp-submit-wrapper">

			<button type="submit" name="user-submit" class="button submit user-submit btn btn-primary"><?php esc_html_e( 'Reset My Password', 'bbpress' ); ?></button>

			<?php bbp_user_lost_pass_fields(); ?>

		</div>
	</fieldset>
</form>
