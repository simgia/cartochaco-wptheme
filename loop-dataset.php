<?php if(have_posts()) : ?>
    <div class="container">
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
			<p>
                            <?php
			        $data = get_field('source_url');
			        if($data) :
			    ?>
                            <?php _e('Source', 'jeo'); ?>:
			    <a href="<?php echo $data; ?>">url</a>
			    <?php
			        endif;
			    ?>  
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