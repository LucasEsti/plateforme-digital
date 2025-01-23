<?php

/**
 * Template Name: ibis-produits
 */

get_header(); ?>
<div class="container d-flex justify-content-center align-items-center mb-2 mt-2">
    <a href="<?php $previous = get_field('lien_accueil'); 
    if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
echo $previous;?>" class="col-2"><img src="<?php the_field('back'); ?>" class="img-fluid"></a>
</div>
<div class="container">
    <div class="">
        <?php if( have_rows('menu-liste') ):
            $i = 0; 
            while( have_rows('menu-liste') ): the_row(); ?>
                    <?php
                        $images = get_sub_field('gallery');
                        if( $images ): 
                            foreach($images as $image): ?>
                                <div class="item" style="position: relative;">
                                    <img src="<?php echo $image["url"]; ?>" class="img-fluid" onContextMenu="return false;" alt="<?php echo $image["alt"]; ?>">
                                    <?php if( $image["alt"] == "accor_ibis" ): ?>
                                        <a href="<?php the_field('accor_lien');?>" class="<?php the_field('accor_class');?>"><img src="<?php echo get_field('accor_image')["url"]; ?>" class="img-fluid " onContextMenu="return false;" alt=""></a>
                                    <?php endif; ?>
                                </div>
                    <?php endforeach;
                    endif; ?>
        <?php 
            $i++;
            endwhile;
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>
