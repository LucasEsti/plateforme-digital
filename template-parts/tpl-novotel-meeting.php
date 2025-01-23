<?php

/**
 * Template Name: novotel meeting
 */

get_header(); 
get_header('novotel');
?>

    <?php get_template_part( 'parts/carroussel-novotel' ); ?>
    
    <?php if( have_rows('banquet') ): 
            while( have_rows('banquet') ): the_row();
            ?>
    <div class="container-fluid text-center mt-5 mb-5">
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid col-lg-4 col-md-7 col-12" data-aos="fade-down" src="<?php echo get_sub_field('titre_image')["url"]; ?>">
        </div>
    </div>
    <div class="w-100 meeting-menu mb-5">
        <img class="img-fluid col-12" data-aos="fade-right" src="<?php echo get_sub_field('image')['url']; ?>" />
        <?php if(get_sub_field('menu')): 
                    ?>
        <div class="n-menu">
            <a href="<?php echo get_sub_field('menu')['url']; ?>" data-aos="fade-down-right" class="pt-2 pb-2 ps-5 pe-5 n-sheet rounded-pill">MENUS <i class="fa-solid fa-download"></i></a>
        </div>
        <?php 
        endif; ?>
    </div>
    <?php endwhile;
        endif; ?>

    <?php if( have_rows('halls') ): 
        while( have_rows('halls') ): the_row();
        $liste_menus = get_sub_field('liste_menu');
        ?>
    <div class="container-fluid text-center mt-5 mb-5">
        <!--<h2 class="n-titre-hightlight mb-5"><?php echo get_sub_field('titre'); ?></h2>-->
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid col-lg-2 col-md-3 col-6" data-aos="flip-right" src="<?php echo get_sub_field('titre_image')["url"]; ?>">
        </div>
    </div>
    <div class="container mb-5">
        <?php
            foreach (get_sub_field('types') as $type): ?>
            
        <div class="row mt-5 mb-5 n-convention">
            <div class="col-lg-5 col-md-12 n-con-desc" data-aos="flip-down">
               <?php echo $type["description"]; ?>
            </div>
            <div class="col-lg-8 offset-lg-4 offset-md-0 col-md-12">
                <div class="carous owl-carousel owl-theme" data-aos="flip-right">
                
                    <?php
                        foreach ($type["gallery"] as $gallery): ?>
                    <img class="img-fluid w-100 item" src="<?php echo $gallery['url']; ?>"/>
                    <?php
                        endforeach; ?>
                </div>
            </div>
        </div>
        <?php
            endforeach; ?>
    </div>
    <?php endwhile;
        endif; ?>

<?php 
get_footer('novotel'); 
get_footer(); ?>
