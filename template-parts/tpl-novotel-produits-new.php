<?php

/**
 * Template Name: novotel produits new
 */

get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php if( have_rows('menu-liste') ): 
                $j = 0;
                while( have_rows('menu-liste') ): the_row(); 
                    $j++;
                endwhile; 
             endif; ?>

    <div class="w-100 carrouss novo-menu" <?php if(get_field('color_new_design') != ""): ?> style="background-color: <?php the_field('color_new_design');?>;"<?php endif;?>>
        <div class="row d-flex justify-content-center">
            <?php if( have_rows('menu-liste') ):
                    $i = 0;
                    while( have_rows('menu-liste') ): the_row(); ?>
                    <img id="cou-<?php the_sub_field('id-carrousel'); ?>" id-couv="<?php the_sub_field('id-carrousel'); ?>" src="<?php echo get_sub_field('couv')["url"]; ?>" class="col-lg-4 col-md-6 couv-menu img-fluid <?php if($i != 0): echo 'd-none'; endif;?>" >
        <?php 
                $i++;
                endwhile;
                endif; ?>
        </div>
        
        <div class="row w-100 pt-3 pb-2">
            <div class="loop owl-carousel owl-theme">
                <?php if( have_rows('menu-liste') ):
                        $i = 0;
                        while( have_rows('menu-liste') ): the_row(); ?>
                            <div id="nav-<?php the_sub_field('id-carrousel'); ?>" class="item nav-item-menu <?php if($i == 0): echo 'active'; endif;?>" idDiv="<?php the_sub_field('id-carrousel'); ?>"  href="#<?php the_sub_field('id-carrousel'); ?>" src_actif="<?php echo get_sub_field('icon')["url"]; ?>" src_inactif="<?php echo get_sub_field('icon_inactif')["url"]; ?>">
                                
                                <img id="img-<?php the_sub_field('id-carrousel'); ?>" src="<?php if($i == 0): echo get_sub_field('icon')["url"]; else: echo get_sub_field('icon_inactif')["url"]; endif;  ?>"  class="img-fluid" >
                            
                            </div>
                <?php 
                    $i++;
                    endwhile;
                    endif; ?>
            </div>
        </div>
    </div>
    

    <!--test drive-->
    <div class="container novo-content">
        <div class="intro intro-carousel" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
        <?php if( have_rows('menu-liste') ):
            $i = 0; 
            while( have_rows('menu-liste') ): the_row(); 
            $images = get_sub_field('gallery');
            ?>
                <div id="<?php the_sub_field('id-carrousel'); ?>" class="<?php if($i != 0): echo 'd-none'; endif;?> <?php if (count($images) > 1): ?><?php endif;?> n-produit-carrouss d-flex justify-content-center flex-column">
                    <?php
                        
                        $lien_googles = get_sub_field('lien_google');
                        if( $images ):
                            foreach($images as $image): ?>
                    <div class="item" style="position: relative;">
                                    <img src="<?php echo $image["url"]; ?>" class="img-fluid" onContextMenu="return false;" alt="<?php echo $image["alt"]; ?>">
                                    <?php if( $image["alt"] == "accor_novotel" ): ?>
                                            <a href="<?php the_field('accor_lien');?>" class="<?php the_field('accor_class');?>">
                                                <img src="<?php echo get_field('accor_image')["url"]; ?>" class="img-fluid " onContextMenu="return false;" alt="">
                                            </a>
                                    <?php endif; ?>
                                </div>
                    <?php endforeach;
                         elseif ($lien_googles): 
                             foreach($lien_googles as $lien_google):
                             ?>
                            <div>
                                <img src="<?php echo $lien_google["lien"]; ?>" class="img-fluid" onContextMenu="return false;" alt="">
                            </div>
                    <?php 
                            endforeach;
                    endif; ?>
                </div>
            <?php 
                $i++;
                endwhile;
            endif; ?>
        </div>
    </div>
    <?php endwhile; 
    endif; ?>
<?php get_footer(); ?>
