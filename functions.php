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

// Geocode box.
include(STYLESHEETPATH . '/inc/geocode-box.php');

// Submit story.
include(STYLESHEETPATH . '/inc/submit-story.php');



// Remove page from search result.
function cartochaco_remove_page_from_search($query) {
	if($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts', 'cartochaco_remove_page_from_search');


/*
 * Para mostrar una cantidad determinada de dataset por pagina.
 */
/*function dataset_posts_per_page($query) {
    if($query->query_vars['post_type'] == 'dataset'){
        $query->query_vars['posts_per_page'] = 1;
    }
    return $query;
}
if (!is_admin() ) add_filter('pre_get_posts', 'dataset_posts_per_page’);*/


?>
