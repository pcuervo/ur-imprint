<?php  
	get_header(); 

	$create_product = get_product_by_sku( 'plain-white-t-shirt' );
	var_dump( $create_product );
?>
	

<?php get_footer(); ?>