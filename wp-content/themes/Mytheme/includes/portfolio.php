<?php
// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'edutheme' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'edutheme' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'edutheme' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'edutheme' ),
		'archives' => __( 'Portfolio Archives', 'edutheme' ),
		'attributes' => __( 'Portfolio Attributes', 'edutheme' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'edutheme' ),
		'all_items' => __( 'All Portfolios', 'edutheme' ),
		'add_new_item' => __( 'Add New Portfolio', 'edutheme' ),
		'add_new' => __( 'Add New', 'edutheme' ),
		'new_item' => __( 'New Portfolio', 'edutheme' ),
		'edit_item' => __( 'Edit Portfolio', 'edutheme' ),
		'update_item' => __( 'Update Portfolio', 'edutheme' ),
		'view_item' => __( 'View Portfolio', 'edutheme' ),
		'view_items' => __( 'View Portfolios', 'edutheme' ),
		'search_items' => __( 'Search Portfolio', 'edutheme' ),
		'not_found' => __( 'Not found', 'edutheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'edutheme' ),
		'featured_image' => __( 'Featured Image', 'edutheme' ),
		'set_featured_image' => __( 'Set featured image', 'edutheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'edutheme' ),
		'use_featured_image' => __( 'Use as featured image', 'edutheme' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'edutheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'edutheme' ),
		'items_list' => __( 'Portfolios list', 'edutheme' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'edutheme' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'edutheme' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'edutheme' ),
		'description' => __( '', 'edutheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-page',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'custom-fields'),
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
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );

