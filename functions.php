<?php

require_once(STYLESHEETPATH . '/inc/advanced-navigation.php');

/*
 * Clears JEO default front-end styles and scripts
 */
function jeo_blank_scripts() {

	// deregister jeo styles
	wp_deregister_style('jeo-main');

  // deregister jeo site frontend scripts
  wp_deregister_script('jeo-site');

}
add_action('wp_enqueue_scripts', 'jeo_blank_scripts', 10);

/*
 * JEO Hooks examples
 * Most common hooks
 */



// Action right after JEO functionality inits
function jeo_blank_init() {
  // Action goes here
}
add_action('jeo_init', 'jeo_blank_init');

// Hook scripts after JEO scripts has been initialized
function jeo_blank_jeo_scripts() {

  // Register and enqueue scripts here

  // Enqueue child theme JEO related scripts
  wp_enqueue_script('jeo-blank-jeo-scripts', get_stylesheet_directory_uri() . '/js/jeo-scripts.js', array('jquery') , '0.0.1');

  // Enqueue child theme main CSS
  wp_enqueue_style('jeo-blank-styles', get_stylesheet_directory_uri() . '/css/main.css');

}
add_action('jeo_enqueue_scripts', 'jeo_blank_jeo_scripts', 20);

// Hook scripts after JEO Marker scripts has been initialized
function jeo_blank_markers_scripts() {

  // Register and enqueue scripts here
  wp_enqueue_script('jeo-blank-jeo-markers-scripts', get_stylesheet_directory_uri() . '/js/jeo-markers-scripts.js', array('jquery') , '0.0.1');

}
add_action('jeo_markers_enqueue_scripts', 'jeo_blank_markers_scripts', 20);

// Filter to change posts GeoJSON data (also changes the GeoJSON API output)
function jeo_blank_marker_data($data, $post) {

  // Change $data here

  return $data;
}
add_filter('jeo_marker_data', 'jeo_blank_marker_data', 10, 2);

// Filter to change GeoJSON response
function jeo_blank_markers_data($data, $query) {

  // Change $data here

  return $data;
}
add_filter('jeo_markers_data', 'jeo_blank_markers_data', 10, 2);

// Filter to programatically change map data
function jeo_blank_map_data($data, $map) {

  // Change $data here

  return $data;
}
add_filter('jeo_map_data', 'jeo_blank_map_data', 10, 2);

function jeo_themeblank_scripts() {
	// styles
        // Submit CSS.
 //       wp_register_style('submit_story_css', get_template_directory_uri() . '/css/submit_story.css', array('jeo-skeleton', 'jeo-lsf', 'font-opensans'), '0.0.3')
        // Parche para el boton de enviar del dataset.
        wp_register_style('parche_jose_css', get_template_directory_uri() . '/css/parche_jose.css');
        // Submit JS.
        wp_register_script('submit-story', get_stylesheet_directory_uri() . '/js/submit-story.js', array('jquery'), '0.1.1');

}
add_action('wp_enqueue_scripts', 'jeo_themeblank_scripts', 5);

function jeo_enqueue_themeblank_scripts() {

//        if(wp_style_is('submit_story_css', 'registered'))
//		wp_enqueue_style('submit_story_css');
        
        // Parche para el boton de enviar del dataset.  
        if(wp_style_is('parche_jose_css', 'registered'))
		wp_enqueue_style('parche_jose_css');

        if(wp_script_is('submit-story', 'registered'))
		wp_enqueue_script('submit-story');

}
add_action('wp_enqueue_scripts', 'jeo_enqueue_themeblank_scripts', 12);


// adding google material-desing icons set
function md_icons_link() {
    echo '<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">' . "\n";
    //echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";

	// text domain
	load_child_theme_textdomain('jeo-blank', get_stylesheet_directory() . '/languages');

}
add_action( 'wp_head', 'md_icons_link' );




/*
 * Datasets.
 */
include(STYLESHEETPATH . '/inc/datasets.php');

/*
 * Reports.
 */
include(STYLESHEETPATH . '/inc/reports.php');

// Submit story.
include(STYLESHEETPATH . '/inc/submit-story.php');




/*
* Creating a function to create our CPT
*/
 
/*function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Reportes', 'Post Type General Name', 'jeo-blank' ),
        'singular_name'       => _x( 'Reporte', 'Post Type Singular Name', 'jeo-blank' ),
        'menu_name'           => __( 'Reportes', 'jeo-blank' ),
        'parent_item_colon'   => __( 'Parent Movie', 'jeo-blank' ),
        'all_items'           => __( 'Reportes', 'jeo-blank' ),
        'view_item'           => __( 'View Report', 'jeo-blank' ),
        'add_new_item'        => __( 'Add New Report', 'jeo-blank' ),
        'add_new'             => __( 'Add Report', 'jeo-blank' ),
        'edit_item'           => __( 'Edit Report', 'jeo-blank' ),
        'update_item'         => __( 'Update Report', 'jeo-blank' ),
        'search_items'        => __( 'Search Report', 'jeo-blank' ),
        'not_found'           => __( 'Not Found', 'jeo-blank' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'jeo-blank' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'reportes', 'jeo-blank' ),
        'description'         => __( 'Movie news and reviews', 'jeo-blank' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        / 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'reportes', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
/
 
add_action( 'init', 'custom_post_type', 0 );*/


/*
 * Para mostrar una cantidad determinada de dataset por pagina.
 */
function dataset_posts_per_page($query) {
    if($query->query_vars['post_type'] == 'dataset'){
        $query->query_vars['posts_per_page'] = 1;
    }
    return $query;
}
if (!is_admin() ) add_filter('pre_get_posts', 'dataset_posts_per_page');


?>
