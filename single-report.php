<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>
    <article class="single-post">
        <section id="stage" class="row">
	    <div class="container">
	        <div class="twelve columns">
		    <header class="post-header">
		        <!-- <h2><a href="<?php //echo get_post_type_archive_link('report'); ?>"><?//php _e('Reports', 'jeo'); ?></a></h2> -->
			<h1 class="title"><?php the_title(); ?></h1>
		    </header>
		</div>
	    </div>
	</section>
	<section id="content">
	    <div class="container row">
	        <div class="post-content">
		    <div class="eight columns">
		        <div class="post-description">
			    <?php the_content(); ?>                            
                            <iframe height="500" width="620" src="//docs.google.com/spreadsheets/d/1W_Cfx9OJrq2uwbSe1hjY6QvE6NNVaLx9XOHgfLJqiS4/gviz/chartiframe?oid=530252522" seamless frameborder=0 scrolling=no></iframe>
			    <?php
			        $preview = get_field('preview_url');
				if($preview) :
				?>
				    <div class="preview-container">
				        <h3><?php _e('Preview data', 'jeo'); ?></h3>
					<iframe class="data-preview" src="<?php echo $preview; ?>" width="620" height="500"></iframe>
				    </div>
		  	    <?php
				endif;
			    ?>
			</div>
		    </div>
		</div>
	    </div>
	</section>
    </article>
<?php endif; ?>

<?php //get_template_part('section', 'main-widget'); ?>

<?php get_footer(); ?>
