<?php if(have_posts()) : ?>
    <div class="container">
        <ul class="">
	    <?php while(have_posts()) : the_post(); ?>  
	        <li id="post-<?php the_ID(); ?>" <?php post_class('three columns'); ?>>
                    <div class="archivo">
		        <h4><?php echo get_the_title(); ?></h4>
			<p>
                            <br>                          
			    Terms of use: Lorem Ipsum
                        </p>
			<p class="brdTop">
                            <a href="<?php the_permalink(); ?>"><?php _e('read me', 'jeo'); ?></a>
			</p>
                    </div>
		</li>
	    <?php endwhile; ?>
	</ul>
	<?php if(function_exists('wp_paginate')) wp_paginate(); ?>
<?php endif; ?>
