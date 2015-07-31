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
	foreach ( $theme_filter_terms as $theme_term ) {
		$design_classes .= $theme_term->slug . ' ';
	}

	$type_filter_terms = wp_get_post_terms( $post_id, 'type' );
	foreach ( $type_filter_terms as $type_term ) {
		$design_classes .= $type_term->slug . ' ';
	}

	$author_filter_terms = wp_get_post_terms( $post_id, 'design-author' );
	foreach ( $author_filter_terms as $author_term ) {
		$design_classes .= $author_term->slug . ' ';
	}

	return $design_classes;

}// get_design_filter_classes



/*------------------------------------*\
	#AJAX FUNCTIONS
\*------------------------------------*/

/**
 * Send contact email to PMI.
 */
function send_email_contacto(){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$to_email = get_contact_email();
	$msg = $_POST['message'];

	$to = $to_email;
	$subject = $name . ' te ha contactado a través de www.pmi.com.mx: ';
	$headers = 'From: My Name <' . $to_email . '>' . "\r\n";
	$message = '<html><body>';
	$message .= '<h3>Datos de contacto</h3>';
	$message .= '<p>Nombre: '.$name.'</p>';
	$message .= '<p>Email: '. $email . '</p>';
	if( $msg != '' ) $message .= '<p>Mensaje: '. $msg . '</p>';
	$message .= '</body></html>';

	add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
	$mail = wp_mail($to, $subject, $message, $headers );

	if( ! $mail ) {
		$message = array(
		'error'		=> 1,
		'message'	=> 'No se pudo enviar el correo.',
		);
		echo json_encode($message , JSON_FORCE_OBJECT);
		exit;
	}

		$message = array(
			'error'		=> 0,
			'message'	=> 'Gracias por tu mensaje ' . $name . '. En breve nos pondremos en contacto contigo.',
		);
		echo json_encode($message , JSON_FORCE_OBJECT);
		exit();

}// send_email_contacto
add_action("wp_ajax_send_email_contacto", "send_email_contacto");
add_action("wp_ajax_nopriv_send_email_contacto", "send_email_contacto");





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











