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
	<?php 
		$skip_attributes = array( 'pa_product-type', 'pa_style', 'pa_garment' );
		foreach ( $attributes as $attribute ) {

			if( in_array( $attribute['name'], $skip_attributes ) ) {
				continue;
			}

			if ( $attribute['is_taxonomy'] ) {

					echo '<h3>' . wc_attribute_label( $attribute['name'] ) . '</h3>';
					$values = wc_get_product_terms( $product->id, $attribute['name'], array( 'fields' => 'names' ) );

					foreach ( $values as $value ) {
						echo '<div>' . $value . '</div>';
					}
					// echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

			} else {

				// Convert pipes to commas and display values
				$values = array_map( 'trim', explode( WC_DELIMITER, $attribute['value'] ) );
				echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

			}

		}

	?>
<?php



