<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$attributes = $product->get_attributes();

?>

<div class="[ product-attributes ]">
	<div class="[ row ]">
		<?php
		$skip_attributes = array( 'pa_size', 'pa_product-type', 'pa_style', 'pa_garment' );
		foreach ( $attributes as $attribute ) { ?>
			<?php
			if( in_array( $attribute['name'], $skip_attributes ) ) {
				continue;
			}

			if ( $attribute['is_taxonomy'] ) { ?>

				<div class="[ column xmall-12 ]">
					<h3 class="[ column xmall-4 ][ text-center ]">Size</h3>
					<h3 class="[ column xmall-4 ][ text-center ]">Width</h3>
					<h3 class="[ column xmall-4 ][ text-center ]">Length</h3>
					<?php
					$values = wc_get_product_terms( $product->id, $attribute['name'], array( 'fields' => 'names', 'orderby' => 'slug' ) );

					foreach ( $values as $value ) {
						$size_width_length_arr = explode( ',', $value );

						echo '<div class="[ column xmall-4 ]">';
						echo '<p class="[ text-center ]">' . $size_width_length_arr[0] . '</p>';
						echo '</div>';
						echo '<div class="[ column xmall-4 ]">';
						echo '<p class="[ text-center ]">' . $size_width_length_arr[1] . '</p>';
						echo '</div>';
						echo '<div class="[ column xmall-4 ]">';
						echo '<p class="[ text-center ]">' . $size_width_length_arr[2] . '</p>';
						echo '</div>';
						
					}
					// echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );
					?>
				</div>
			<?php } else {

				// Convert pipes to commas and display values
				$values = array_map( 'trim', explode( WC_DELIMITER, $attribute['value'] ) );
				echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

			}
		} ?>
	</div><!-- row -->
</div>