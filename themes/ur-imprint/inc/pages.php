<?php


/*------------------------------------*\
	CUSTOM PAGES
\*------------------------------------*/

add_action('init', function(){

	// CATALOGUE
	if( ! get_page_by_path('catalogue') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Catalogue',
			'post_name'   => 'catalogue',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// CONTACT
	if( ! get_page_by_path('contact') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Contact',
			'post_name'   => 'contact',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	
});
