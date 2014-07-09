<?php get_header(); ?>

<section id="content">
	<div id="map-archive" class="gray-page archive-page">
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
