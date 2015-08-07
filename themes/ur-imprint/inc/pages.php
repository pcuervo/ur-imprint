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

	// Create
	if( ! get_page_by_path('create') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Create',
			'post_name'   => 'create',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// Create
	if( ! get_page_by_path('about-us') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'About Us',
			'post_name'   => 'about-us',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// Create
	if( ! get_page_by_path('checkout') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Checkout',
			'post_name'   => 'checkout',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}


});
