<?php
    wp_enqueue_script('lockfixed', get_stylesheet_directory_uri() . '/js/jquery.lockfixed.min.js', array('jquery'), '0.1');
?>
<?php if(have_posts()) : ?>
	<section class="posts-section">
		<div class="container">
			<ul class="posts-list">
				<?php while(have_posts()) : the_post(); ?>   
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
				<?php endwhile; ?>
			</ul>
			<div class="twelve columns">
				<div class="navigation">
					<?php posts_nav_link(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
