<?php
/* Custom Post Type for the Knowledge Center posts.
*/


// let's create the function for the custom type
function custom_post_knowledge() { 
	// creating (registering) the custom type 
	register_post_type( 'knowledge_center', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Resource Center', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Resource Item', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Resource Items', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Resource Center Item', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Post Types', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Post Type', 'jointswp'), /* New Display Title */
			'view_item' => __('View Post Type', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Post Type', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Resource Center post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 3, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'resource-center', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'custom_type', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'custom_type');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'custom_type');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_knowledge');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'custom_cat', 
    	array('knowledge_center'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Resource Center Categories', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Resource Center Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Resource Center Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Resource Center Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Resource Center Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Resource Center Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Resource Center Category', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Resource Center Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add A New Resource Center Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Resource Center Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'knowledge-center-slug' ),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'custom_tag', 
    	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Resource Center Tags', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Resource Center Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Resource Center Tags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Resource Center Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Resource Center Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Resource Center Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Resource Center Tag', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Resource Center Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add A New Resource Center Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Resource Center Tag Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */

