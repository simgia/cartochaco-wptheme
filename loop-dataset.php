<?php if(have_posts()) : ?>
    <div class="container dataset-loop-section">
        <ul class="">
	    <?php while(have_posts()) : the_post(); ?>  
	        <li id="post-<?php the_ID(); ?>" <?php post_class('three columns'); ?>>
                    <div class="archivo">
		        <h4><?php echo get_the_title(); ?></h4>
                        <?php
			    $data = get_field('full_download');
			    if($data) :
			?>
			<a href="<?php echo $data; ?>" class="descargar"><?php _e('download data', 'jeo'); ?></a>
			<?php
			    endif;
			?>
			<p class="brdTop">
                            <a href="<?php the_permalink(); ?>"><?php _e('read me', 'jeo'); ?></a>
			</p>
                    </div>
		</li>
	    <?php endwhile; ?>
	</ul>
        <div class="twelve columns">
            <div class="enviar_cont">
	    	<div class="navigation enviar">
	            <?php posts_nav_link(); ?>
	   	</div>
	    </div>
	</div>
    </div>
<?php endif; ?>
