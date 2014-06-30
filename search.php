<?php get_header(); ?>

<?php jeo_featured(); ?>

<div class="section-title">
	<div class="container">
		<div class="twelve columns">
			<h1><?php _e('Search results for: ', 'jeo'); ?> <?php echo $_GET['s']; ?></h1>
		</div>
	</div>
</div>

<?php echo "entro"; ?>

<?php if(have_posts()) : ?>
    <?php
        get_template_part('loop');
    ?>
<?php else : ?>
    <?php query_posts(); if(have_posts()) : ?>
        <section id="last-stories" class="loop-section">
	    <div class="section-title">
	        <div class="container">
		    <div class="twelve columns">
	                <h3><?php _e('Nothing found. Viewing all posts', 'jeo'); ?></h3>
		    </div>
		</div>
	    </div>
	    <?php
		get_template_part('loop');				
	    ?>
	</section>
    <?php endif; wp_reset_query(); ?>
<?php endif; ?>

<?php get_footer(); ?>
