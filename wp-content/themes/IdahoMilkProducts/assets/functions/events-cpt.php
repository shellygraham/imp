<?php
/*  Custom Post Type for Events.
*/


// let's create the function for the custom type
function custom_post_events() { 
	// creating (registering) the custom type 
	register_post_type( 'events', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Events', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Event', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Events', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Event', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Event', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Event', 'jointswp'), /* New Display Title */
			'view_item' => __('View Event', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Events', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Event', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-format-gallery', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'events', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'news', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'revisions', 'sticky', 'editor' )
	 	) /* end of options */
	); /* end of register post type */
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_events');
