<?php if(have_posts()) : ?>
	<section class="posts-section">
		<div class="container">
			<ul class="posts-list">
				<?php while(have_posts()) : the_post(); ?>
					<li id="post-<?php the_ID(); ?>" <?php post_class('three columns'); ?>>
						<article id="post-<?php the_ID(); ?>">
							<header class="post-header">
    <?php if ( has_post_thumbnail( $_post->ID ) ) {
        echo '<div class="entryhead"><div class="imgwrap"> <a href="' . get_permalink( $_post->ID ) . '" title="' . esc_attr( $_post->post_title ) . '">';
        echo get_the_post_thumbnail( $_post->ID, 'thumbnail' );
        echo '</a></div></div>';
    } ?>
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
								<p class="meta">
									<span class="date"><?php echo get_the_date(); ?></span>
									<span class="author"><?php _e('by', 'jeo'); ?> <?php the_author(); ?></span>
								</p>
							</header>
							<section class="post-content">
								<div class="post-excerpt">
									<?php the_excerpt(); ?>
								</div>
							</section>
							<aside class="actions clearfix">
								<?php echo jeo_find_post_on_map_button(); ?>
								<a href="<?php the_permalink(); ?>"><?php _e('Leer más', 'jeo'); ?></a>
							</aside>
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
