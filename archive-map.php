<?php get_header(); ?>

<section id="content">
	<div id="map-archive" class="">
		<div class="container">
				<?php if(have_posts()) : ?>

					<section id="maps" class="">
						<div class="twelve columns">
							<h1><?php _e('Maps', 'jeo'); ?></h1>
						</div>
						<?php get_template_part('loop', 'maps'); ?>
					</section>

				<?php endif; ?>
		</div>
	</div>
</section>

<?php get_template_part('section', 'main-widget'); ?>

<?php get_footer(); ?>