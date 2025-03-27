<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://lilacdaphne.nl
 * @since      1.0.0
 *
 * @package    Collectamols_Funko
 * @subpackage Collectamols_Funko/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Collectamols_Funko
 * @subpackage Collectamols_Funko/includes
 * @author     Daphne Mol <plugins@lilacdaphne.nl>
 */
class Collectamols_Funko_posttype {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function register_posttype_funko() {

        $labels = [
            'name'                  => _x( 'Funko', 'Post type general name', 'textdomain' ),
            'singular_name'         => _x( 'Funko', 'Post type singular name', 'textdomain' ),
            'menu_name'             => _x( 'Funkos', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar'        => _x( 'Funko', 'Add New on Toolbar', 'textdomain' ),
            'add_new'               => __( 'Add New', 'textdomain' ),
            'add_new_item'          => __( 'Add New Funko', 'textdomain' ),
            'new_item'              => __( 'New Funko', 'textdomain' ),
            'edit_item'             => __( 'Edit Funko', 'textdomain' ),
            'view_item'             => __( 'View Funko', 'textdomain' ),
            'all_items'             => __( 'All Funkos', 'textdomain' ),
            'search_items'          => __( 'Search Funkos', 'textdomain' ),
            'parent_item_colon'     => __( 'Parent Funkos:', 'textdomain' ),
            'not_found'             => __( 'No funkos found.', 'textdomain' ),
            'not_found_in_trash'    => __( 'No funkos found in Trash.', 'textdomain' ),
            'featured_image'        => _x( 'Funko Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'archives'              => _x( 'Funko archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
            'insert_into_item'      => _x( 'Insert into funko', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this funko', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
            'filter_items_list'     => _x( 'Filter funkos list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
            'items_list_navigation' => _x( 'Funkos list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
            'items_list'            => _x( 'Funkos list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' )
     
        ];

        $args = [
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'funko' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        ];
        register_post_type( 'funko', $args );
	}
}