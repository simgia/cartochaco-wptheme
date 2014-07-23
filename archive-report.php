<?php get_header(); ?>

<section id="content">  
	<div id="map-archive" class="gray-page archive-page container">
		<div style="padding: 20px 0;">
        <h1 class="title"><?php _e('Advanced filters', 'jeo'); ?></h1>
		<?php
		    cartochaco_adv_nav_reports_filters();
                ?>
		</div>
		<?php 


/*
		    query_posts(
                        array(
                            'post_type' => array('report'),
                            'date_query' => array(
		                 array(
			             'after'     => array(
				         'year'  => 2014,
				         'month' => 7,
				         'day'   => 15
			             ),
			             'before'    => array(
				         'year'  => 2014,
				         'month' => 7,
				         'day'   => 28
			             ),
			             'inclusive' => true
                                     
		                 ),
	                    ),
	                    //'posts_per_page' => -1,
                        )
                    );
*/
                ?>
		<?php if(have_posts()) : ?>
			<section id="reports" class="report-loop-section archive-list">
				<div class="page-title row">
					<div class="container">
						<div class="twelve columns">
							<h1><?php _e('Reports', 'jeo'); ?></h1>
						</div>
					</div>
				</div>

				<div class="container">
					<?php get_template_part('loop', 'report'); ?>
				</div>
			</section>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
