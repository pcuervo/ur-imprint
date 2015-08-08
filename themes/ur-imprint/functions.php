<?php

/*------------------------------------*\
	#CONSTANTS
\*------------------------------------*/

	/**
	* Define paths to javascript, styles, theme and site.
	**/
	define( 'JSPATH', get_template_directory_uri() . '/js/' );
	define( 'CSSPATH', get_template_directory_uri() . '/css/' );
	define( 'THEMEPATH', get_template_directory_uri() . '/' );
	define( 'SITEURL', site_url('/') );





/*------------------------------------*\
	#INCLUDES
\*------------------------------------*/

	require_once('inc/post-types.php');
	require_once('inc/metaboxes.php');
	require_once('inc/taxonomies.php');
	require_once('inc/pages.php');
	require_once('inc/users.php');
	require_once('inc/functions-admin.php');
	require_once('inc/functions-js-footer.php');
	require_once('inc/ui-hooks.php');
	include 'inc/extra-metaboxes.php';





/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

	/**
	* Enqueue frontend scripts and styles
	**/
	add_action( 'wp_enqueue_scripts', function(){

		// scripts
		wp_enqueue_script( 'plugins', JSPATH.'plugins.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'functions', JSPATH.'functions.js', array('plugins'), '1.0', true );

		// localize scripts
		wp_localize_script( 'functions', 'ajax_url', admin_url('admin-ajax.php') );
		wp_localize_script( 'functions', 'site_url', site_url() );
		wp_localize_script( 'functions', 'theme_url', THEMEPATH );


		// styles
		wp_enqueue_style( 'styles', get_stylesheet_uri() );

	});

	/**
	* Add javascript to the footer of pages.
	**/
	add_action( 'wp_footer', 'footer_scripts', 21 );

	/**
	* Disable admin bar
	**/
	show_admin_bar(false);





/*------------------------------------*\
	#HELPER FUNCTIONS
\*------------------------------------*/

/**
 * Print the title tag based on what is being viewed.
 * @return string
 */
function print_title(){

	global $page, $paged;

	wp_title( '|', true, 'right' );
	bloginfo( 'name' );

	// Add a page number if necessary
	if ( $paged >= 2 || $page >= 2 ){
		echo ' | ' . sprintf( __( 'Página %s' ), max( $paged, $page ) );
	}

}// print_title




/*------------------------------------*\
	#FORMAT FUNCTIONS
\*------------------------------------*/





/*------------------------------------*\
	#SET/GET FUNCTIONS
\*------------------------------------*/

/**
 * Get theme, type and author filters for isotope.
 * @param integer $post_id
 * @return string $design_classes
 */
function get_design_filter_classes( $post_id ){

	$design_classes = '';

	$theme_filter_terms = wp_get_post_terms( $post_id, 'theme' );
	if( ! empty( $theme_filter_terms  ) ) : foreach ( $theme_filter_terms as $theme_term ) :
		$design_classes .= $theme_term->slug . ' ';
	endforeach; endif;

	$type_filter_terms = wp_get_post_terms( $post_id, 'type' );
	if( ! empty( $type_filter_terms  ) ) : foreach ( $type_filter_terms as $type_term ) :
		$design_classes .= $type_term->slug . ' ';
	endforeach; endif;

	$author_filter_terms = wp_get_post_terms( $post_id, 'design-author' );
	if( ! empty( $author_filter_terms  ) ) : foreach ( $author_filter_terms as $author_term ) :
		$design_classes .= $author_term->slug . ' ';
	endforeach; endif;

	return $design_classes;

}// get_design_filter_classes

/**
 * Get product type and style filters for isotope.
 * @param integer $product_id
 * @return string $product_classes
 */
function get_product_filter_classes( $product_id ){

	global $post;

	$product_classes = '';

	$product_cat_terms = get_the_terms( $post->ID, 'product_cat' );
	if( ! empty( $product_cat_terms  ) ) : foreach ( $product_cat_terms as $cat_term ) :
		$product_classes .= $cat_term->slug . ' ';
	endforeach; endif;

	$style_filter_terms = get_the_terms( $product_id, 'pa_style' );
	if( ! empty( $style_filter_terms  ) ) : foreach ( $style_filter_terms as $style_term ) :
		$product_classes .= $style_term->slug . ' ';
	endforeach; endif;

	$product_type_filter_terms = get_the_terms( $product_id, 'pa_product-type' );
	if( ! empty( $product_type_filter_terms  ) ) : foreach ( $product_type_filter_terms as $product_type_term ) :
		$product_classes .= $product_type_term->slug . ' ';
	endforeach; endif;

	return $product_classes;

}// get_product_filter_classes

/**
 * Get contact email from metabox in Contact page
 * @return string $contact_email
 */
function get_contact_email(){

	$contact_info_query = new WP_Query( 'pagename=contact' );
	$contact_info_query->the_post();
	$contact_email = get_post_meta( get_the_ID(), '_email_meta', TRUE );
	wp_reset_query();

	return $contact_email;

}// get_contact_email

/**
 * Get contact phone from metabox in Contact page
 * @return string $contact_phone
 */
function get_contact_phone(){

	$contact_info_query = new WP_Query( 'pagename=contact' );
	$contact_info_query->the_post();
	$contact_phone = get_post_meta( get_the_ID(), '_phone_meta', TRUE );
	wp_reset_query();

	return $contact_phone;

}// get_contact_phone

/**
 * Get Facebook URL from metabox in Contact page
 * @return string $facebook_url
 */
function get_facebook_url(){

	$facebook_info_query = new WP_Query( 'pagename=contact' );
	$facebook_info_query->the_post();
	$facebook_url = get_post_meta( get_the_ID(), '_facebook_meta', TRUE );
	wp_reset_query();

	return $facebook_url;

}// get_facebook_url

/**
 * Get FAQ category for given post
 * @param integer $post_id
 * @return string $faq_cat
 */
function get_faq_category( $post_id ){

	$design_classes = '';

	$faq_cat_terms = wp_get_post_terms( $post_id, 'faq-categories' );
	if( ! empty( $faq_cat_terms  ) ) :
		return $faq_cat_terms[0]->name;
	endif;

	return 'Other';

}// get_faq_category


/*------------------------------------*\
	#AJAX FUNCTIONS
\*------------------------------------*/

/**
 * Send contact email to UR Imprint.
 */
function send_contact_email(){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$to_email = get_contact_email();
	$msg = $_POST['message'];

	$to = $to_email;
	$subject = $name . ' sent you a message - UR Imprint ';
	$headers = 'From: My Name <' . $to_email . '>' . "\r\n";
	$message = '<html><body>';
	$message .= '<h3>Contact</h3>';
	$message .= '<p>Name: '.$name.'</p>';
	$message .= '<p>Email: '. $email . '</p>';
	if( $msg != '' ) $message .= '<p>Message: '. $msg . '</p>';
	$message .= '</body></html>';

	add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
	$mail = wp_mail($to, $subject, $message, $headers );

	if( ! $mail ) {
		$message = array(
		'error'		=> 1,
		'message'	=> 'An error has ocurred. Please try again later.',
		);
		echo json_encode($message , JSON_FORCE_OBJECT);
		exit;
	}

	$message = array(
		'error'		=> 0,
		'message'	=> 'Thanks for your message ' . $name . '! We will get back to you shortly.',
	);
	echo json_encode($message , JSON_FORCE_OBJECT);
	exit();

}// send_contact_email
add_action("wp_ajax_send_contact_email", "send_contact_email");
add_action("wp_ajax_nopriv_send_contact_email", "send_contact_email");



/*------------------------------------*\
	WOOCOMMERCE FUNCTIONS / ACTIONS
\*------------------------------------*/

/*
 * Add WooCommerce support to current theme.
 */
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );

/*
 * Replace WooCommerce default wrapper with ours
 */
function my_theme_wrapper_start() {
	echo '<section id="main">';
}
function my_theme_wrapper_end() {
	echo '</section>';
}
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/**
 * Get Product by SKU
 * @param string $sku
 * @return WC_Product 
 */
function get_product_by_sku( $sku ) {

	global $wpdb;

	$product_id = $wpdb->get_var( $wpdb->prepare( "SELECT post_id FROM $wpdb->postmeta WHERE meta_key='_sku' AND meta_value='%s' LIMIT 1", $sku ) );

	if ( $product_id ) return new WC_Product( $product_id );

	return null;

}// get_product_by_sku












