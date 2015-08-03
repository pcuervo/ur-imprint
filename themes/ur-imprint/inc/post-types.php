<?php

/*------------------------------------*\
	CUSTOM POST TYPES
\*------------------------------------*/

add_action('init', function(){

	// TESTIMONIALS
	$labels = array(
		'name'          => 'Testimonials',
		'singular_name' => 'Testimonials',
		'add_new'       => 'New Testimonial',
		'add_new_item'  => 'New Testimonial',
		'edit_item'     => 'Edit Testimonial',
		'new_item'      => 'New Testimonial',
		'all_items'     => 'All',
		'view_item'     => 'View Testimonial',
		'search_items'  => 'Search Testimonials',
		'not_found'     => 'Not found',
		'menu_name'     => 'Testimonials'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonials' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'testimonials', $args );

	// DESIGNS
	$labels = array(
		'name'          => 'Designs',
		'singular_name' => 'Designs',
		'add_new'       => 'New Design',
		'add_new_item'  => 'New Design',
		'edit_item'     => 'Edit Design',
		'new_item'      => 'New Design',
		'all_items'     => 'All',
		'view_item'     => 'View Design',
		'search_items'  => 'Search Designs',
		'not_found'     => 'Not found',
		'menu_name'     => 'Designs'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'designs' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'designs', $args );

	// FAQ
	$labels = array(
		'name'          => 'FAQ',
		'singular_name' => 'FAQ',
		'add_new'       => 'New FAQ',
		'add_new_item'  => 'New FAQ',
		'edit_item'     => 'Edit FAQ',
		'new_item'      => 'New FAQ',
		'all_items'     => 'All',
		'view_item'     => 'View FAQ',
		'search_items'  => 'Search FAQ',
		'not_found'     => 'Not found',
		'menu_name'     => 'FAQ'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'faq' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'faq', $args );

});