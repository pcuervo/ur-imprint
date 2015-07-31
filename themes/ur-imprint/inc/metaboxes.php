<?php

/*------------------------------------*\
	CUSTOM METABOXES
\*------------------------------------*/

add_action('add_meta_boxes', function(){

	global $post;
	switch ( $post->post_name ) {
		case 'PAGENAME':
			//add_metaboxes_PAGENAE();
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

}// add_metaboxes_PAGE





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

	



/*------------------------------------*\
	SAVE METABOXES DATA
\*------------------------------------*/

	add_action('save_post', function( $post_id ){

		save_metabox_testimonials( $post_id );
		
	});

	/**
	* Save the metaboxes for post type "Productos"
	**/
	function save_metabox_testimonials( $post_id ){
		
		// Company
		if ( isset($_POST['_company_meta']) and check_admin_referer( __FILE__, '_company_meta_nonce') ){
			update_post_meta($post_id, '_company_meta', $_POST['_company_meta']);
		}

	}// save_metabox_testimonials
	