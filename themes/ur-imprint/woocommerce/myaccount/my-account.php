<?php
/**
 * My Account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices(); ?>

<section class="[ my-account ]">
	<div class="[ wrapper ]">
		<div class="[ padding-top-bottom--large ][ text-center ]">
			<h2 class="[ no-margin ]">My Account</h2>
		</div>

		<p class="[ myaccount_user ][ text-center ]">
			<?php
			printf(
				__( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>). <br />', 'woocommerce' ) . ' ',
				$current_user->display_name,
				wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
			);

			printf( __( '<small>From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <a href="%s">edit your password and account details</a>.</small>', 'woocommerce' ),
				wc_customer_edit_account_url()
			);
			?>
		</p>

		<?php do_action( 'woocommerce_before_my_account' ); ?>

		<?php wc_get_template( 'myaccount/my-downloads.php' ); ?>

		<?php wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>

		<?php wc_get_template( 'myaccount/my-address.php' ); ?>

		<?php do_action( 'woocommerce_after_my_account' ); ?>
	</div>
</section>