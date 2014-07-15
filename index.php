<?php get_header(); ?>

<?php
if(is_front_page()) {
	$options = jeo_get_options();
	if(!$options || (isset($options['front_page']) && $options['front_page']['front_page_map'] == 'latest'))
		jeo_featured();
	else
		get_template_part('content', 'featured');
} else {
	jeo_featured();
}
?>

<div class="section-title">
	<div class="container">
		<div class="twelve columns">
                    <!-- 
                        Aparece solo una noticia principal (featured post), que se puede agregar por cada post.
                        Solo va a aparecer el ultimo featured post. La informacion qu se va a mostrar es un extract de la noticia.
                    -->
                    <?php query_posts(array('meta_key' => 'featured', 'posts_per_page' => 1, 'showposts' => 1)); if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
		            <h2><?php the_title(); ?></h2>
                            <div class="intro clearfix">
                                <?php
                                    $v_content = get_the_excerpt();
                                    $v_palabras = explode(" ", $v_content);
                                    $v_columna_izquierda = "";
                                    $v_columna_derecha = "";
                                    $v_cantidad_palabras = count($v_palabras);
				    $v_columna_palabra = (int)($v_cantidad_palabras / 2); // El 2 es el # de columnas que se va a mostrar.
                                    for($i = 0; $i < $v_cantidad_palabras; $i++){
   					if($i < $v_columna_palabra){
                                            $v_columna_izquierda = $v_columna_izquierda . $v_palabras[$i]." ";
                                        }else{
                                             $v_columna_derecha = $v_columna_derecha . $v_palabras[$i]." "; 
                                        }
                                    }
                                ?>
                                <div class="left">
                                    <?php echo $v_columna_izquierda; ?> 
                                </div>
                                <div class="right">
                                    <?php echo $v_columna_derecha; ?>
                                </div>
                        </div>
			<?php endwhile; ?>
                    <?php endif; wp_reset_query(); ?>
		</div>
	</div>
</div>

<div class="container">
    <div class="twelve columns">
        <?php get_template_part('section', 'subheader'); ?>
    </div>
</div>

<?php
    if(get_query_var('cartochaco_advanced_nav')){
        get_template_part('loop',' explore');
    }else{
         get_template_part('loop');
    }
?>

<?php get_footer(); ?>
