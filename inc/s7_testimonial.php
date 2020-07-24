<?php

// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 's7' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 's7' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 's7' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 's7' ),
		'archives' => __( 'Testimonial Archives', 's7' ),
		'attributes' => __( 'Testimonial Attributes', 's7' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 's7' ),
		'all_items' => __( 'All Testimonials', 's7' ),
		'add_new_item' => __( 'Add New Testimonial', 's7' ),
		'add_new' => __( 'Add New', 's7' ),
		'new_item' => __( 'New Testimonial', 's7' ),
		'edit_item' => __( 'Edit Testimonial', 's7' ),
		'update_item' => __( 'Update Testimonial', 's7' ),
		'view_item' => __( 'View Testimonial', 's7' ),
		'view_items' => __( 'View Testimonials', 's7' ),
		'search_items' => __( 'Search Testimonial', 's7' ),
		'not_found' => __( 'Not found', 's7' ),
		'not_found_in_trash' => __( 'Not found in Trash', 's7' ),
		'featured_image' => __( 'Featured Image', 's7' ),
		'set_featured_image' => __( 'Set featured image', 's7' ),
		'remove_featured_image' => __( 'Remove featured image', 's7' ),
		'use_featured_image' => __( 'Use as featured image', 's7' ),
		'insert_into_item' => __( 'Insert into Testimonial', 's7' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 's7' ),
		'items_list' => __( 'Testimonials list', 's7' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 's7' ),
		'filter_items_list' => __( 'Filter Testimonials list', 's7' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 's7' ),
		'description' => __( 'Testimonial Custom Post Type', 's7' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );