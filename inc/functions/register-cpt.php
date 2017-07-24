<?php

/**
 * Custom post type for portfolio.
 *
 */
function presley_register_cpt() {
  register_post_type( 'presley_portfolio',
    array(
      'labels' => array(
        'name' => __( 'All Portfolio' ),
        'singular_name' => __( 'portfolio' ),
		'add_new' => ('Add New portfolio'),
      ),
      'public' => true,
	  'supports' => array( 'title', 'editor', 'thumbnail', ),
      'has_archive' => true,
    )
  );

    register_post_type( 'presley_testimonials',
		array(
		  'labels' => array(
			'name' => __( 'All Testimonials' ),
			'singular_name' => __( 'Testimonial' ),
			'add_new' => ('Add New Testimonial'),
		  ),
		  'public' => true,
		  'supports' => array( 'editor' ),
		  'has_archive' => true,
		)
  );


  	// Add Categorys for artist
	$labels = array(
		'name'              => _x( 'Category', 'taxonomy general name', 'presley' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'presley' ),
		'search_items'      => __( 'Search Categorys', 'presley' ),
		'all_items'         => __( 'All Categorys', 'presley' ),
		'parent_item'       => __( 'Parent Category', 'presley' ),
		'parent_item_colon' => __( 'Parent Category:', 'presley' ),
		'edit_item'         => __( 'Edit Category', 'presley' ),
		'update_item'       => __( 'Update Category', 'presley' ),
		'add_new_item'      => __( 'Add New Category', 'presley' ),
		'new_item_name'     => __( 'New Category Name', 'presley' ),
		'menu_name'         => __( 'Category', 'presley' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio-cat' ),
	);

	register_taxonomy( 'presley_portfolio_cat', array( 'presley_portfolio' ), $args );
}
add_action( 'init', 'presley_register_cpt' );


































