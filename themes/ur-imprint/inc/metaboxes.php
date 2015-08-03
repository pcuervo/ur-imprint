<?php

/*------------------------------------*\
	CUSTOM METABOXES
\*------------------------------------*/

add_action('add_meta_boxes', function(){

	global $post;
	switch ( $post->post_name ) {
		case 'contact':
			add_metaboxes_contact();
			break;
		default:
			// POST TYPES
			add_metaboxes_testimonials();
	}

});


/*------------------------------------*\
	CUSTOM METABOXES FUNCTIONS
\*------------------------------------*/

/**
* Add metaboxes for post type testimonials
**/
function add_metaboxes_testimonials(){

	add_meta_box( 'company', 'Company', 'metabox_company', 'testimonials', 'advanced', 'high' );

}// add_metaboxes_testimonials

/**
* Add metaboxes for Contact page
**/
function add_metaboxes_contact(){

	add_meta_box( 'phone', 'Phone Number', 'metabox_phone', 'page', 'advanced', 'high' );
	add_meta_box( 'email', 'E-mail', 'metabox_email', 'page', 'advanced', 'high' );
	add_meta_box( 'facebook', 'Facebook', 'metabox_facebook', 'page', 'advanced', 'high' );

}// add_metaboxes_contact





/*-----------------------------------------*\
	CUSTOM METABOXES CALLBACK FUNCTIONS
\*-----------------------------------------*/
	
/**
* Display metabox company for testimonials post type
**/
function metabox_company($post){

	$company = get_post_meta($post->ID, '_company_meta', true);
	wp_nonce_field(__FILE__, '_company_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_company_meta' value='$company' />";

}// metabox_company

function metabox_phone($post){
	$phone = get_post_meta($post->ID, '_phone_meta', true);
	wp_nonce_field(__FILE__, '_phone_meta_nonce');

	echo "<input type='text' class='[ widefat ]' name='_phone_meta' value='$phone' />";
}// metabox_phone

function metabox_email($post){
	$email = get_post_meta($post->ID, '_email_meta', true);
	wp_nonce_field(__FILE__, '_email_meta_nonce');

 	echo "<input type='text' class='[ widefat ]' name='_email_meta' value='$email' />";
}// metabox_email

function metabox_facebook($post){
	$facebook = get_post_meta($post->ID, '_facebook_meta', true);
	wp_nonce_field(__FILE__, '_facebook_meta_nonce');

	echo "<label>Example: https://www.facebook.com/cuervoestudio</label>";
 	echo "<input type='text' class='[ widefat ]' name='_facebook_meta' value='$facebook' />";
}// metabox_facebook

	



/*------------------------------------*\
	SAVE METABOXES DATA
\*------------------------------------*/

	add_action('save_post', function( $post_id ){

		save_metabox_testimonials( $post_id );
		save_metabox_contact( $post_id );
		
	});

	/**
	* Save the metaboxes for post type "Testimonials"
	**/
	function save_metabox_testimonials( $post_id ){
		
		// Company
		if ( isset($_POST['_company_meta']) and check_admin_referer( __FILE__, '_company_meta_nonce') ){
			update_post_meta($post_id, '_company_meta', $_POST['_company_meta']);
		}

	}// save_metabox_testimonials

	/**
	* Save the metaboxes for Contact page
	**/
	function save_metabox_contact( $post_id ){
		
		// Phone
		if ( isset($_POST['_phone_meta']) and check_admin_referer( __FILE__, '_phone_meta_nonce') ){
			update_post_meta($post_id, '_phone_meta', $_POST['_phone_meta']);
		}
		// Email
		if ( isset($_POST['_email_meta']) and check_admin_referer( __FILE__, '_email_meta_nonce') ){
			update_post_meta($post_id, '_email_meta', $_POST['_email_meta']);
		}
		// Facebook
		if ( isset($_POST['_facebook_meta']) and check_admin_referer( __FILE__, '_facebook_meta_nonce') ){
			update_post_meta($post_id, '_facebook_meta', $_POST['_facebook_meta']);
		}

	}// save_metabox_contact
	