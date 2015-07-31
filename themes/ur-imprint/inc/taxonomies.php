<?php

/*------------------------------------*\
	TAXONOMIES
\*------------------------------------*/

add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){

	// THEME
	if( ! taxonomy_exists('theme')){

		$labels = array(
			'name'              => 'Theme',
			'singular_name'     => 'Theme',
			'search_items'      => 'Search',
			'all_items'         => 'All',
			'edit_item'         => 'Edit Theme',
			'update_item'       => 'Update Theme',
			'add_new_item'      => 'New Theme',
			'new_item_name'     => 'New Theme Name',
			'menu_name'         => 'Themes'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'theme' ),
		);
		register_taxonomy( 'theme', 'designs', $args );

	}

	// TYPE
	if( ! taxonomy_exists('type')){

		$labels = array(
			'name'              => 'Type',
			'singular_name'     => 'Type',
			'search_items'      => 'Search',
			'all_items'         => 'All',
			'edit_item'         => 'Edit Type',
			'update_item'       => 'Update Type',
			'add_new_item'      => 'New Type',
			'new_item_name'     => 'New Type Name',
			'menu_name'         => 'Types'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'type' ),
		);
		register_taxonomy( 'type', 'designs', $args );
		
	}

	// AUTHOR
	if( ! taxonomy_exists('design-author')){

		$labels = array(
			'name'              => 'Author',
			'singular_name'     => 'Author',
			'search_items'      => 'Search',
			'all_items'         => 'All',
			'edit_item'         => 'Edit Author',
			'update_item'       => 'Update Author',
			'add_new_item'      => 'New Author',
			'new_item_name'     => 'New Author Name',
			'menu_name'         => 'Authors'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'design-author' ),
		);
		register_taxonomy( 'design-author', 'designs', $args );
		
	}

	insert_design_taxonomy_terms();

}// custom_taxonomies_callback

/*
 * Insert default taxonomy terms for UR Imprint designs.
 */
function insert_design_taxonomy_terms(){

	$theme = array( 'other', 'inspirational', 'motivational', 'funny', 'cultural', 'art' );
	foreach ( $theme as $theme ) {
		insert_dynamic_taxonomy_term( $theme, 'theme' );
	}

	$types = array( 'photo', 'text' );
	foreach ( $types as $type ) {
		insert_dynamic_taxonomy_term( $type, 'type' );
	}

	$authors = array( 'UR Imprint', 'Maw' );
	foreach ( $authors as $author ) {
		insert_dynamic_taxonomy_term( $author, 'design-author' );
	}

}// insert_design_taxonomy_terms

/*
 * Insert  $new_term to $taxonomy based on the title of new post
 *
 * @param string $new_term
 * @param string $taxonomy
 */
function insert_dynamic_taxonomy_term( $new_term, $taxonomy ){

	$term = term_exists( $new_term, $taxonomy );
	if ( FALSE !== $term && NULL !== $term ) {
		return;
	}
	wp_insert_term( $new_term, $taxonomy );
}// insert_dynamic_taxonomy_term

/*
 * Insert  current stores' default categories
 */
function insert_product_categories( $taxonomy ){

	if ( 'product_cat' == $taxonomy ) {

		$product_cat = array( 'Kids', 'Women', 'Men');
		foreach ( $product_cat as $cat ) {
			insert_dynamic_taxonomy_term( $cat, $taxonomy );
		}
	}

}// insert_product_categories

/*
 * Insert  current stores' default categories
 */
function register_taxonomy_type_products( $taxonomy ){

	// TYPE
	if( ! taxonomy_exists('product-type')){

		$labels = array(
			'name'              => 'Theme',
			'singular_name'     => 'Theme',
			'search_items'      => 'Search',
			'all_items'         => 'All',
			'edit_item'         => 'Edit Theme',
			'update_item'       => 'Update Theme',
			'add_new_item'      => 'New Theme',
			'new_item_name'     => 'New Theme Name',
			'menu_name'         => 'Themes'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'product-type' ),
		);
		register_taxonomy( 'product-type', 'designs', $args );

	}

}// register_taxonomy_type_products
add_action( 'registered_taxonomy', 'insert_product_categories', 10, 1 );

