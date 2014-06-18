<footer id="colophon">
	<div class="container">
		<div class="six columns">
			<p><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_chico.gif" alt="" style="border-bottom: 1px solid #EFD7CB;"></p>
			<nav id="footer-nav">
				<?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
			</nav>
		</div>
		<div class="six columns partners">
			<p>Partners <img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners.png" alt=""> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners.png" alt=""> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners.png" alt=""> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners.png" alt=""> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners.png" alt=""></p>
		</div>
	</div>
	<div class="social">
		<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_fb2.gif" alt=""></a><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_tw2.gif" alt=""></a><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_mail.gif" alt=""></a>
	</div>
	<div class="container">
		<div class="six columns">
			<div class="credits">
				<p><?php printf(__('This website is built on <a href="%s" target="_blank" rel="external">WordPress</a> using the <a href="%s" target="_blank" rel="external">JEO Beta</a> theme', 'jeo'), 'http://wordpress.org', 'http://jeo.cardume.art.br/'); ?></p>
			</div>
		</div>
		<div class="six columns desarrollo">
			Site desenvolvido por: 
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>