<?php

/* 
	REGISTER TAXONOMIES
*/
function register_taxonomy_publisher() {

    $labels = array( 
        'name' => __('Publishers', 'jeo'),
        'singular_name' => __('Publisher', 'jeo'),
        'search_items' => __('Search publishers', 'jeo'),
        'popular_items' => __('Popular publishers', 'jeo'),
        'all_items' => __('All publishers', 'jeo'),
        'parent_item' => __('Parent publisher', 'jeo'),
        'parent_item_colon' => __('Parent publisher:', 'jeo'),
        'edit_item' => __('Edit publisher', 'jeo'),
        'update_item' => __('Update publisher', 'jeo'),
        'add_new_item' => __('Add new publisher', 'jeo'),
        'new_item_name' => __('New publisher name', 'jeo'),
        'separate_items_with_commas' => __('Separate publishers with commas', 'jeo'),
        'add_or_remove_items' => __('Add or remove publishers', 'jeo'),
        'choose_from_most_used' => __('Choose from most used publishers', 'jeo'),
        'menu_name' => __('Publishers', 'jeo')
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'publisher', 'with_front' => false),
        'query_var' => 'publisher'
    );

    register_taxonomy('publisher', array('post'), $args);
}
add_action( 'jeo_init', 'register_taxonomy_publisher' );
