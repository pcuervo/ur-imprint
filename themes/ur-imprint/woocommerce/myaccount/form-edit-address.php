<?php
/**
 * Edit address form
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $current_user;

$page_title = ( $load_address === 'billing' ) ? __( 'Billing Address', 'woocommerce' ) : __( 'Shipping Address', 'woocommerce' );

get_currentuserinfo();

?>

<?php wc_print_notices(); ?>

<section class="[ my-account ]">

	<?php if ( ! $load_address ) : ?>

		<?php wc_get_template( 'myaccount/my-address.php' ); ?>

	<?php else : ?>

		<div class="[ padding-top-bottom--large ][ text-center ]">
			<h2 class="[ no-margin ]"><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title ); ?></h2>
		</div>

		<div class="[ bg-primary ][ padding-top-bottom--large ]">
			<div class="[ wrapper ]">
				<form class="[ form ]" method="post">

					<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

					<?php foreach ( $address as $key => $field ) : ?>

						<?php woocommerce_form_field( $key, $field, ! empty( $_POST[ $key ] ) ? wc_clean( $_POST[ $key ] ) : $field['value'] ); ?>

					<?php endforeach; ?>

					<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

					<fieldset class="[ margin-bottom ][ text-center ]">
						<input type="submit" class="[ button button--secondary ][ margin-bottom ]" name="save_address" value="<?php _e( 'Save Address', 'woocommerce' ); ?>" />
						<?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
						<input type="hidden" name="action" value="edit_address" />
					</fieldset>

				</form>
			</div>
		</div>
	<?php endif; ?>
</section>