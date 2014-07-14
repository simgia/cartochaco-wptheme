<?php

/*
 * CartoChaco
 * Reports
 */
class CartoChaco_Reports {
    function __construct() {
        add_action('init', array($this, 'register_post_type'));
        add_action('add_meta_boxes', array($this, 'add_report_metabox'));
        add_action('save_post', array($this, 'graficos_meta_save_postdata'));
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

    function add_report_metabox(){
        add_meta_box(
            'graficos-reportes-meta-box-id', 		 // Id.
             __('Graphics or Tables', 'jeo'),		 // Titulo.
            array($this, 'add_report_metabox_cb'),       // Función a la que llamamos.
            'Report', 					 // Customer Type.
            'normal', 					 // Contexto.
            'high' );					 // Prioridad.
    }	

    function add_report_metabox_cb($post){
        $v_grafico_1_url = get_post_meta($post->ID, 'grafico_1_url', true);
	$v_grafico_2_url = get_post_meta($post->ID, 'grafico_2_url', true);
	$v_grafico_3_url = get_post_meta($post->ID, 'grafico_3_url', true);
	$v_grafico_4_url = get_post_meta($post->ID, 'grafico_4_url', true);
	$v_grafico_5_url = get_post_meta($post->ID, 'grafico_5_url', true);
	$v_grafico_6_url = get_post_meta($post->ID, 'grafico_6_url', true);
	$v_grafico_7_url = get_post_meta($post->ID, 'grafico_7_url', true);
	$v_grafico_8_url = get_post_meta($post->ID, 'grafico_8_url', true);
	$v_grafico_9_url = get_post_meta($post->ID, 'grafico_9_url', true);
	$v_grafico_10_url = get_post_meta($post->ID, 'grafico_10_url', true);
	$v_grafico_11_url = get_post_meta($post->ID, 'grafico_11_url', true);
	$v_grafico_12_url = get_post_meta($post->ID, 'grafico_12_url', true);
	$v_grafico_13_url = get_post_meta($post->ID, 'grafico_13_url', true);
	$v_grafico_14_url = get_post_meta($post->ID, 'grafico_14_url', true);
        ?>
        <div>
	    <div>
	        <label for="graficos_descripcion-reports"><?php _e('URL for graphics.', 'jeo'); ?></label><br/>
	    </div>
	    <div>
	        <p>
	            <label for="grafico_1_url"><?php _e('Graphic 1 url', 'jeo'); ?></label><br/>
	            <input type="text" name="grafico_1_url" value="<?php echo $v_grafico_1_url; ?>" id="grafico_1_url" width="100%" size="100" /> 
	        </p>
                <p>
	    	    <label for="grafico_2_url"><?php _e('Graphic 2 url', 'jeo'); ?></label><br/>
	    	    <input type="text" name="grafico_2_url" value="<?php echo $v_grafico_2_url; ?>" id="grafico_2_url" width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_3_url"><?php _e('Graphic 3 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_3_url" value="<?php echo $v_grafico_3_url; ?>" id="grafico_3_url" width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_4_url"><?php _e('Graphic 4 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_4_url" value="<?php echo $v_grafico_4_url; ?>" id="grafico_4_url" width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_5_url"><?php _e('Graphic 5 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_5_url" value="<?php echo $v_grafico_5_url; ?>" id="grafico_5_url" width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_6_url"><?php _e('Graphic 6 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_6_url" value="<?php echo $v_grafico_6_url; ?>" id="grafico_6_url" width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_7_url"><?php _e('Graphic 7 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_7_url" value="<?php echo $v_grafico_7_url; ?>" id="grafico_7_url"width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_8_url"><?php _e('Graphic 8 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_8_url" value="<?php echo $v_grafico_8_url; ?>" id="grafico_8_url" width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_9_url"><?php _e('Graphic 9 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_9_url" value="<?php echo $v_grafico_9_url; ?>" id="grafico_9_url" width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_10_url"><?php _e('Graphic 10 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_10_url" value="<?php echo $v_grafico_10_url; ?>" id="grafico_10_url" width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_11_url"><?php _e('Graphic 11 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_11_url" value="<?php echo $v_grafico_11_url; ?>" id="grafico_11_url" width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_12_url"><?php _e('Graphic 12 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_12_url" value="<?php echo $v_grafico_12_url; ?>" id="grafico_12_url" width="100%" size="100" /> 
		</p>  
		<p>
		    <label for="grafico_13_url"><?php _e('Graphic 13 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_13_url" value="<?php echo $v_grafico_13_url; ?>" id="grafico_13_url" width="100%" size="100" /> 
		</p>
		<p>
		    <label for="grafico_14_url"><?php _e('Graphic 14 url', 'jeo'); ?></label><br/>
		    <input type="text" name="grafico_14_url" value="<?php echo $v_grafico_14_url; ?>" id="grafico_14_url" width="100%" size="100" /> 
		</p>
	    </div>	
        </div>
        <?php    
    }

    function graficos_meta_save_postdata($post_id) {
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
	    return;
        }
	if(defined('DOING_AJAX') && DOING_AJAX){
	    return;
        }
	if(false !== wp_is_post_revision($post_id)){
	    return;
        }

	if(isset($_POST['grafico_1_url'])){		
	    update_post_meta($post_id, 'grafico_1_url', $_POST['grafico_1_url']);
        }
	if(isset($_POST['grafico_2_url'])){		
	    update_post_meta($post_id, 'grafico_2_url', $_POST['grafico_2_url']);
        }
	if(isset($_POST['grafico_3_url'])){		
	    update_post_meta($post_id, 'grafico_3_url', $_POST['grafico_3_url']);
        }
	if(isset($_POST['grafico_4_url'])){		
	    update_post_meta($post_id, 'grafico_4_url', $_POST['grafico_4_url']);
        }
	if(isset($_POST['grafico_5_url'])){		
	    update_post_meta($post_id, 'grafico_5_url', $_POST['grafico_5_url']);
        }
	if(isset($_POST['grafico_6_url'])){		
	    update_post_meta($post_id, 'grafico_6_url', $_POST['grafico_6_url']);
        }
	if(isset($_POST['grafico_7_url'])){		
	    update_post_meta($post_id, 'grafico_7_url', $_POST['grafico_7_url']);
        }
	if(isset($_POST['grafico_8_url'])){		
	    update_post_meta($post_id, 'grafico_8_url', $_POST['grafico_8_url']);
        }
	if(isset($_POST['grafico_9_url'])){		
	    update_post_meta($post_id, 'grafico_9_url', $_POST['grafico_9_url']);
        }
	if(isset($_POST['grafico_10_url'])){		
	    update_post_meta($post_id, 'grafico_10_url', $_POST['grafico_10_url']);
        }
	if(isset($_POST['grafico_11_url'])){		
	    update_post_meta($post_id, 'grafico_11_url', $_POST['grafico_11_url']);
        }
	if(isset($_POST['grafico_12_url'])){		
	    update_post_meta($post_id, 'grafico_12_url', $_POST['grafico_12_url']);
        }
	if(isset($_POST['grafico_13_url'])){		
	    update_post_meta($post_id, 'grafico_13_url', $_POST['grafico_13_url']);
        }
	if(isset($_POST['grafico_14_url'])){		
	    update_post_meta($post_id, 'grafico_14_url', $_POST['grafico_14_url']);
        }
     }
}

$GLOBALS['cartochaco_reports'] = new CartoChaco_Reports();
