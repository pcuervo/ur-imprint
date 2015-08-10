<?php
/**
 * Single Product tabs
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="[ bg-primary ][ padding-top-bottom--large ]">
		<div class="[ wrapper ]">
			<artcile class="[ row ]">
				<?php foreach ( $tabs as $key => $tab ) : ?>

					<div class="[ column xmall-12 large-6 ][ margin-bottom ]" id="tab-<?php echo esc_attr( $key ); ?>">
						<?php call_user_func( $tab['callback'], $key, $tab ); ?>
					</div>

				<?php endforeach; ?>
			</artcile>
		</div><!-- wrapper -->
	</div>


<?php endif; ?>
