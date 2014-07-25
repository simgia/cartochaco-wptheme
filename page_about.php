<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>
	<section id="content" class="single-post bblanco">
		<header class="single-post-header">
			<div class="container">
				<div class="twelve columns">
					<h1 class="mayusculas"><?php the_title(); ?></h1>
				</div>
			</div>
		</header>
		<blockquote class="content">
			<div class="container">
			<p>Carto Chaco es una alianza entre organizaciones preocupadas en comunicar y priorizar la relevancia de esta bioregión. De esta manera, esta iniciativa combina el uso de diversas geotecnologias como la visualización amigable de mapas temáticos, reportes mensuales del monitoreo de la vegetación natural y técnicas de geoperiodismo.</p>
			</div>
		</blockquote>
		<div class="container">
			<div class="twelve columns">
				<?php the_content(); ?>
				<?php
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'jeo' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
				?>
			</div>
		</div>
		<div class="autores">
			<h2><span><?php _e('Authors', 'jeo'); ?></span></h2>
			<div class="container">
				<ul>
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/TMPautor.png" alt="">
						<h5>Author name</h5>
						<p><a href="http://website.com" class="urls">http://website.com</a><br>
						Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
					</li>
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/TMPautor.png" alt="">
						<h5>Author name</h5>
						<p><a href="http://website.com" class="urls">http://website.com</a><br>
						Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
					</li>
					<li>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/TMPautor.png" alt="">
						<h5>Author name</h5>
						<p><a href="http://website.com" class="urls">http://website.com</a><br>
						Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
					</li>
				</ul>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>
