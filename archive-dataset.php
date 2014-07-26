<?php get_header(); ?>

<section id="content">
	<div id="map-archive" class="gray-page archive-page">
		<?php 
                    // Muestra 8 dataset por pagina.
                    $wp_query = new WP_Query(); 
                    $wp_query->query('showposts=8&post_type=dataset'.'&paged='.$paged); 
                    if($wp_query->have_posts()) : 
                ?>

			<section id="datasets" class="dataset-loop-section archive-list">
				<div class="page-title row">
					<div class="container">
						<div class="twelve columns">
							<h1><?php _e('Datasets', 'jeo'); ?></h1>
						</div>
					</div>
				</div>

				<div class="container">
					<?php get_template_part('loop', 'dataset'); ?>
				</div>
			</section>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
