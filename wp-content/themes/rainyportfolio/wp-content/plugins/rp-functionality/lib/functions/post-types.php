<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

function rp_work_reg() {

	$labels = array(
		'name'                  => 'Works',
		'singular_name'         => 'Work',
		'menu_name'             => 'Work',
		'name_admin_bar'        => 'Work',
		'parent_item_colon'     => 'Parent Work',
		'all_items'             => 'All Works',
		'add_new_item'          => 'Add New Work',
		'add_new'               => 'Add Work',
		'new_item'              => 'New Work',
		'edit_item'             => 'Edit Work',
		'update_item'           => 'Update Work',
		'view_item'             => 'View Work',
		'search_items'          => 'Search Work',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'items_list'            => 'Works list',
		'items_list_navigation' => 'Works list navigation',
		'filter_items_list'     => 'Filter works list',
	);
	$args = array(
		'label'                 => 'Work',
		'description'           => 'Rainy\'s Past Work',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           	=> 'dashicons-welcome-learn-more	',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'work', $args );

}
add_action( 'init', 'rp_work_reg', 0 );