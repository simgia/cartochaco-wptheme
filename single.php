<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>

	<?php jeo_map(); ?>

	<?php // Comente esta parte para que no salga el mapa que se repite (by josego)
              // jeo_featured(); 
        ?>

	<article id="content" class="single-post bblanco">
		<header class="single-post-header" class="clearfix">
			<div class="container">
				<div class="twelve columns">
                                     <?php //echo get_the_term_list($post->ID, 'publisher', '', ', ', ''); ?>
				     <h1><?php the_title(); ?></h1>
				</div>
			</div>
		</header>
		<blockquote class="content">
			<div class="container">
			<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
			</div>
		</blockquote>
		<section class="content">
			<div class="container">
				<div class="twelve columns">
					<div class="autor">
						<span><?php the_author(); ?> | <?php the_date(); ?></span>
					</div>
					<?php the_content(); ?>
					<?php
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'jeo' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					?>
					
					<?php 
					$v_url = get_post_meta($post->ID, 'url', true); 
					if($v_url != ''){
					?> 
					   <p><a class="button" href="<?php echo $v_url; ?>" target="_blank"><?php _e('Read more', 'jeo'); ?></a></p>
					<?php 
					}
					?> 

				</div>
				
				 

			</div>
		</section>

		<div class="share">
			<span>Share: <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_fb3.gif" alt=""></a> <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_tw3.gif" alt=""></a> <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_Gplus.gif" alt=""></a></span>
		</div>

		<section class="posts-section">
                <!--
		<div class="container">
			<h2>Related content</h2>
			<ul class="posts-list">
				<li id="post-<?php the_ID(); ?>" <?php post_class('four columns'); ?>>
					<article id="post-<?php the_ID(); ?>">
						<header class="post-header">
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						</header>
						<section class="post-content">
							<?php
					        // La funcion Post Thumbnail.
					         if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,200), array("class" => "post_thumbnail")); } 
					        //Post Thumbnail Fin
					        ?>
						</section>
					</article>
				</li>
			</ul>

			<div class="twelve columns">
				<div class="navigation">
					<?php posts_nav_link(); ?>
				</div>
			</div>
		</div>
                //-->
                
                <div class="container">    
                    <?php
	                $orig_post = $post;
	                global $post;
	                $tags = wp_get_post_tags($post->ID);

	                if($tags){
                    ?>
                            <h2><?php _e('Related posts', 'jeo'); ?></a></h2>
                            <ul class="posts-list">
                       <?php    
	                    $tag_ids = array();
	                    foreach($tags as $individual_tag) 
                                $tag_ids[] = $individual_tag->term_id;
	                        $args = array(
	                            'tag__in' => $tag_ids,
	                            'post__not_in' => array($post->ID),
	                            'posts_per_page' => 3, // Number of related posts to display.
	                            'caller_get_posts' => 1
	                        );
	
	                        $my_query = new wp_query($args);

	                        while($my_query->have_posts()) {
	                            $my_query->the_post();
	             ?>
	                            <li id="post-<?php the_ID(); ?>" <?php post_class('four columns'); ?>>
		                        <article id="post-<?php the_ID(); ?>">
			                    <header class="post-header">
			                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			                    </header>
			                    <section class="post-content">
			                    <?php
			                        // La funcion Post Thumbnail.
			                        if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,200), array("class" => "post_thumbnail")); } 
			     
                                                // Post Thumbnail Fin
			                    ?>
			                    </section>
			                </article>
		                   </li>
	                     <? } 
                             ?>
                             </ul>
                             <?
	                 } 
	                 $post = $orig_post;
	                 wp_reset_query();
	             ?>             
                     <div class="twelve columns">
		         <div class="navigation">
			     <?php posts_nav_link(); ?>
			 </div>
		     </div>
                 </div>
	</section>

	</article>

<?php endif; ?>

<?php get_footer(); ?>