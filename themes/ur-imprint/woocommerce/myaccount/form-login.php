<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>

<section class="[ form-login ]">

	<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

	<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

		<artcile id="customer_login" class="">

	<?php endif; ?>
			<div class="[ padding-top-bottom--large ][ text-center ]">
				<h2 class="[ no-margin ]"><?php _e( 'Login', 'woocommerce' ); ?></h2>
			</div>

			<div class="[ bg-primary ][ padding-top-bottom--large ]">
				<div class="[ wrapper ]">
					<form method="post" class="[ form ][ xmall-12 medium-8 large-6 ][ center ]">

						<?php do_action( 'woocommerce_login_form_start' ); ?>

						<fieldset class="[ margin-bottom ]">
							<label class="[ field ]">
								<input type="text" class="[ gui-input ][ required ][ input-text ]" name="username" id="username" placeholder="<?php _e( 'Username or email address', 'woocommerce' ); ?>*" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>"  />
							</label>
						</fieldset>

						<fieldset class="[ margin-bottom ]">
							<label class="[ field ]">
								<input type="password" class="[ gui-input ][ required ][ input-text ]" name="password" id="password" placeholder="<?php _e( 'Password', 'woocommerce' ); ?>*" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>"  />
							</label>
						</fieldset>

						<?php do_action( 'woocommerce_login_form' ); ?>

						<fieldset class="[ margin-bottom ][ text-center ]">
							<?php wp_nonce_field( 'woocommerce-login' ); ?>
							<input type="submit" class="[ button button--secondary ][ margin-bottom ]" name="login" value="<?php _e( 'Login', 'woocommerce' ); ?>" />

							<label class="[ option block ]">
								<input name="rememberme" type="checkbox" id="rememberme" value="forever" />
								<span class="checkbox"></span> <?php _e( 'Remember me', 'woocommerce' ); ?>
							</label>
						</fieldset>

						<p class="[ lost_password ][ text-center ]">
							<small><a class="[ color-light ]" href="<?php echo esc_url( wc_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></small></a>
						</p>

						<?php do_action( 'woocommerce_login_form_end' ); ?>

					</form>
				</div><!-- wrapper -->
			</div><!-- bg-primary -->

	<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

		</artcile>

		<artcile class="[]">
			<div class="[ padding-top-bottom--large ][ text-center ]">
				<h2 class="[ no-margin ]"><?php _e( 'Register', 'woocommerce' ); ?></h2>
			</div>

			<div class="[ bg-primary ][ padding-top-bottom--large ]">
				<div class="[ wrapper ]">

					<form method="post" class="[ form ][ xmall-12 medium-8 large-6 ][ center ]">

						<?php do_action( 'woocommerce_register_form_start' ); ?>

						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

							<fieldset class="[ margin-bottom ]">
								<label class="[ field ]">
									<input type="text" class="[ gui-input ][ required ][ input-text ]" name="username" id="reg_username" placeholder="<?php _e( 'Username', 'woocommerce' ); ?>*" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
								</label>
							</fieldset>

						<?php endif; ?>

						<fieldset class="[ margin-bottom ]">
							<label class="[ field ]">
								<input type="email" name="email" id="reg_email" class="[ gui-input ][ required ][ input-text ]" placeholder="<?php _e( 'Email address', 'woocommerce' ); ?>*" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>">
							</label>
						</fieldset>

						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

							<fieldset class="[ margin-bottom ]">
								<label class="[ field ]">
									<input type="password" name="password" id="reg_password" class="[ gui-input ][ required ][ input-text ]" placeholder="<?php _e( 'Password', 'woocommerce' ); ?>*" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>">
								</label>
							</fieldset>

						<?php endif; ?>

						<!-- Spam Trap -->
						<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

						<?php do_action( 'woocommerce_register_form' ); ?>
						<?php do_action( 'register_form' ); ?>

						<fieldset class="[ margin-bottom ][ text-center ]">
							<?php wp_nonce_field( 'woocommerce-register' ); ?>
							<input type="submit" class="[ button button--secondary ][ margin-bottom ]" name="register" value="<?php _e( 'Register', 'woocommerce' ); ?>" />
						</fieldset>

						<?php do_action( 'woocommerce_register_form_end' ); ?>

					</form>
				</div>
			</div>
		</artcile>

	</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
</section>