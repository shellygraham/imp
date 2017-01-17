<?php
/*  Custom Post Type for the Homepage Slider contents.
*/


// let's create the function for the custom type
function custom_post_homeslider() { 
	// creating (registering) the custom type 
	register_post_type( 'homepage_slide', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Homepage Slides', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Homepage Slide', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Homepage Slides', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Homepage Slide', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Slide', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Slide', 'jointswp'), /* New Display Title */
			'view_item' => __('View Slide', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Slide', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Homepage Slide', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 2, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-format-gallery', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'homepage_slide', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'homepage_slide', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_homeslider');
