<?php
/*
 * Mousehover bubble content
 */
$publishers = get_the_terms($post->ID, 'publisher');
if($publishers) {
	$publisher = array_shift($publishers);
	$publisher = $publisher->name;
}
?>
<small>
    <?php 
        echo get_the_date(_x('m/d/Y', 'map bubble date format', 'jeo')); 
    ?> - 
    <?php 
        if(isset($publisher)){
            echo $publisher;
        }else{
             the_author(); 
        }
    ?>
</small>
<h6><?php the_title(); ?></h6>
