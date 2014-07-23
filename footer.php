<footer id="colophon">
	<div class="container">
		<div class="six columns">
			<p><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_chico.gif" alt="" style="border-bottom: 1px solid #EFD7CB;"></p>
			<nav id="footer-nav">
				<?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
			</nav>
		</div>
		<div class="six columns partners">
			<p><span>Partners</span> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners1.png" alt=""> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners2.png" alt=""> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners3.png" alt=""></p>
			<p><span>Project by</span> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/project1.png" alt=""> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/project2.png" alt=""></p>
		</div>
	</div>
	<div class="social">
		<a href="https://www.facebook.com/cartochaco" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_fb2.gif" alt=""></a><a href="https://twitter.com/cartochaco" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_tw2.gif" alt=""></a><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_mail.gif" alt=""></a>
	</div>
	<div class="container">
		<div class="six columns">
			<div class="credits">
				<p><?php echo 'Copyright &reg;'; ?></p>
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
