<footer id="colophon">
	<div class="container">
		<div class="six columns">
			<p><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_chico.gif" alt="" style="border-bottom: 1px solid #EFD7CB;"></p>
			<nav id="footer-nav">
				<?php wp_nav_menu(array('theme_location' => 'footer_menu')); ?>
			</nav>
		</div>
		<div class="six columns partners">
			<p><span><?php _e('Partners', 'jeo'); ?></span><a href="http://www.guyra.org.py/index.php?lang=es" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners1.png" alt="Guyra Paraguay" title="Guyra Paraguay"></a><a href="http://infoamazonia.org/es/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners2.png" alt="Infoamazonia" title="Infoamazonia"></a><a href="http://www.terra-i.org/terra-i.html" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/partners3.png" alt="terra-i" title="terra-i"></a></p>
			<p><span><?php _e('Project by', 'jeo'); ?></span><a href="http://earthjournalism.net/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/project1.png" alt="Earth Journalism Network" title="Earth Journalism Network"></a><a href="https://internews.org/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/project2.png" alt="Internews" title="Internews"></a>
                        <p>
                            <a href="http://ciat.cgiar.org/es/" class="cia" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/CIAT_EN-2D_white_p.png" alt="CIAT" title="CIAT"/></a>
                            <a href="http://foreststreesagroforestry.org/"class="cgiar" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/fta_p.png" alt="CIAT" title="CGIAR"/></a>
                        </p>
		</div>
	</div>
	<div class="social">
		<a href="https://www.facebook.com/cartochaco" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_fb2.gif" alt="Facebook" title="Facebook"></a><a href="https://twitter.com/cartochaco" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_tw2.gif" alt="Twitter" title="Twitter"></a><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ico_mail.gif" alt="E-Mail" title="E-Mail"></a>
	</div>
	<div class="container">
		<div class="six columns">
			<div class="credits">
				<p><?php echo 'Copyright &reg;'; ?></p>
			</div>
		</div>
		<div class="six columns desarrollo">
		    <span class="text_desarrollo"><?php _e('Site desenvolvido por:', 'jeo'); ?></span>
                    <a href="http://www.simgia.com/ESP/index.php" style="margin-left:10px;" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/simgia_C.png" alt="simgia" title="simgia"/>
                    </a>
                    <img src="http://cartochaco/wp-content/themes/cartochaco-wptheme/img/mas.png"/>
                    <a href="http://cardume.github.io/jeo/" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/jeo_banner_c.png" alt="JEO" title="JEO"/>
                    </a>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
