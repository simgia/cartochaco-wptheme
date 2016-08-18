<?php
    wp_enqueue_script('lockfixed', get_stylesheet_directory_uri() . '/js/jquery.lockfixed.min.js', array('jquery'), '0.1');
    wp_enqueue_script('chosen_version_nueva', get_stylesheet_directory_uri() . '/lib/chosen.jquery.min_v1.0.0.js', array('jquery'), '1.0.0');
?>
<?php 
    if(have_posts()) : ?>
	<section class="posts-section">
		<div class="container">
			<ul class="posts-list">
				<?php while(have_posts()) : the_post(); ?>   
					<li id="post-<?php the_ID(); ?>" <?php post_class('four columns'); ?>>
						<article id="post-<?php the_ID(); ?>">
							
							<section class="post-content">
								<?php
						        // La funcion Post Thumbnail.
						         if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,200), array("class" => "post_thumbnail")); } 
						        //Post Thumbnail Fin
						        ?>
							</section>
							<header class="post-header">
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
							</header>
						</article>
					</li>
				<?php endwhile; ?>
			</ul>
			<div class="twelve columns">
				<div class="navigation">
					<?php //posts_nav_link(); ?>
				</div>
			</div>
		</div>
                <div class="nuestras_noticias">
		    <div class="query-actions">
		        <h3>
		            <?php _e('Use our stories', 'jeo-blank'); ?>
                        </h3>
		        <?php
		            global $wp_query;
			    $args = $wp_query->query;
			    $args = array_merge($args, $_GET);
			    $geojson = jeo_get_api_url($args);
			    $download = jeo_get_api_download_url($args);
			    $rss = add_query_arg(array('feed' => 'rss'));
		        ?>
		        <a class="rss" href="<?php echo $rss; ?>" target="_blank"><?php _e('RSS Feed', 'jeo'); ?></a>
		        <a class="download" href="<?php echo $download; ?>" target="_blank"><?php _e('Download', 'jeo'); ?></a>
		        <a class="geojson" href="<?php echo $geojson; ?>" target="_blank"><?php _e('Get GeoJSON', 'jeo'); ?></a>
		    </div>
               </div>
               <!--
               <div class="enviar_cont">
                   <a href="#" class="enviar">Enviar</a>
               </div>
               -->  

               <div class="submit-story" style="text-align: center; margin-bottom: 0;">
	           <p><?php _e('Send us your stories about the Chaco', 'jeo-blank'); ?></p>
	           <p>&nbsp;</p>
	           <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/submit_button.png" alt="SUBMIT"></a>
               </div>
	</section>
<?php endif; ?>
