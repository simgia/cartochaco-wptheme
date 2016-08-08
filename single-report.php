<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>
    <article class="single-post">
        <section id="stage" class="row">
	    <div class="container">
	        <div class="twelve columns">
		    <header class="post-header">
			<h1 class="title"><?php the_title(); ?></h1>
		    </header>
		</div>
	    </div>
	</section>
	<section id="content">
	    <div class="container row">
	        <div class="post-content">
		    <div class="twelve columns">
		        <div class="post-description">
			    <?php the_content(); 
                            ?>
                            <?php 
                                $v_grafico_1_url = get_post_meta($post->ID, 'grafico_1_url', true);
                                $v_grafico_2_url = get_post_meta($post->ID, 'grafico_2_url', true);
                                $v_grafico_3_url = get_post_meta($post->ID, 'grafico_3_url', true);  
                                $v_grafico_4_url = get_post_meta($post->ID, 'grafico_4_url', true);
                                $v_grafico_5_url = get_post_meta($post->ID, 'grafico_5_url', true);
                                $v_grafico_6_url = get_post_meta($post->ID, 'grafico_6_url', true); 
 				$v_grafico_7_url = get_post_meta($post->ID, 'grafico_7_url', true);
                                $v_grafico_8_url = get_post_meta($post->ID, 'grafico_8_url', true);  
                                $v_grafico_9_url = get_post_meta($post->ID, 'grafico_9_url', true);
                                $v_grafico_10_url = get_post_meta($post->ID, 'grafico_10_url', true);
                                $v_grafico_11_url = get_post_meta($post->ID, 'grafico_11_url', true); 
 				$v_grafico_12_url = get_post_meta($post->ID, 'grafico_12_url', true);
                                $v_grafico_13_url = get_post_meta($post->ID, 'grafico_13_url', true);
                                $v_grafico_14_url = get_post_meta($post->ID, 'grafico_14_url', true);
				if(isset($v_grafico_1_url) && $v_grafico_1_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_1_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_2_url) && $v_grafico_2_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_2_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_3_url) && $v_grafico_3_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_3_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_4_url) && $v_grafico_4_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_4_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_5_url) && $v_grafico_5_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_5_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_6_url) && $v_grafico_6_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_6_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_7_url) && $v_grafico_7_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_7_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_8_url) && $v_grafico_8_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_8_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_9_url) && $v_grafico_9_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_9_url; ?>" seamless frameborder=0 scrolling=no></iframe>	
				<?php
				}
				if(isset($v_grafico_10_url) && $v_grafico_10_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_10_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_11_url) && $v_grafico_11_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_11_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_12_url) && $v_grafico_12_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_12_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
				if(isset($v_grafico_13_url) && $v_grafico_13_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_13_url; ?>" seamless frameborder=0 scrolling=no></iframe>	
				<?php
				}
				if(isset($v_grafico_14_url) && $v_grafico_14_url != ""){
				    ?>
	                            <iframe src="<?php echo $v_grafico_14_url; ?>" seamless frameborder=0 scrolling=no></iframe>
				<?php
				}
                            ?>                                
			</div>
		    </div>
		</div>
	    </div>
	</section>
    </article>
<?php endif; ?>

<?php get_footer(); ?>
