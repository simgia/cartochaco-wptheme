<?php

/*
 * CartoChaco
 * Reports
 */
class CartoChaco_Reports {
    function __construct() {
        add_action('init', array($this, 'register_post_type'));
    }

    function register_post_type() {
        $labels = array( 
	    'name' => __('Reports', 'jeo'),
	    'singular_name' => __('Report', 'jeo'),
	    'add_new' => __('Add report', 'jeo'),
	    'add_new_item' => __('Add new report', 'jeo'),
	    'edit_item' => __('Edit report', 'jeo'),
	    'new_item' => __('New report', 'jeo'),
	    'view_item' => __('View report', 'jeo'),
	    'search_items' => __('Search report', 'jeo'),
	    'not_found' => __('No report found', 'jeo'),
	    'not_found_in_trash' => __('No report found in the trash', 'jeo'),
	    'menu_name' => __('Reports', 'jeo')
	);

	$args = array( 
	    'labels' => $labels,
	    'hierarchical' => false,
	    'description' => __('CartoChaco Reports', 'jeo'),
	    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
	    'public' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => true,
	    'menu_position' => 4,
	    'rewrite' => array('slug' => 'reports', 'with_front' => false)
	);
	register_post_type('report', $args);
    }
}

$GLOBALS['cartochaco_reports'] = new CartoChaco_Reports();
