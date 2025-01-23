<?php

/**
 * Template Name: ibis home
 */

get_header(); 

get_header('ibis');
?>

    <?php get_template_part( 'parts/carroussel-ibis' ); ?>

    <div id="about" class="container-fluid mt-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-1 col-md-3 col-6">
                <img class="img-fluid" data-aos="fade-down" src="<?php echo the_field('i_logo', 'option'); ?>">
            </div>
        </div>
        <?php if( have_rows('technique') ): 
            while( have_rows('technique') ): the_row();
            ?>
        <div class="row mt-5 mb-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="col-12" data-aos="fade-down">
                    <?php echo get_sub_field('description'); ?>
                </div>
                <?php if(get_sub_field('sheet')): 
                    ?>
                <div class="col-12 text-center mt-5">
                    <div class="mb-3">Fiche technique</div>
                    <a data-aos="fade-left" class="pt-2 pb-2 ps-4 pe-4 i-sheet border border-4 m-2" href="<?php echo get_sub_field('sheet')["url"]; ?>">En
                        <i class="fa-solid fa-download"></i>
                    </a>

                    <a data-aos="fade-left" class="pt-2 pb-2 ps-4 pe-4 i-sheet border border-4 m-2" href="<?php echo get_sub_field('sheet')["url"]; ?>">Fr
                        <i class="fa-solid fa-download"></i>
                    </a>
                </div>
                <?php 
                    endif; ?>
            </div>
        </div>
        <?php endwhile;
            endif; ?>
    </div>

    <?php if( have_rows('gallery') ): 
            while( have_rows('gallery') ): the_row();
            $galerie = get_sub_field('galerie');
            if($galerie): 
            ?>
    <div id="gallery" class="container-fluid  mb-5 mt-5">
        <div class="carous owl-carousel owl-theme mb-5">
            <?php
            foreach ($galerie as $gallery): ?>
                <img class="img-fluid w-100 item" src="<?php echo $gallery['url']; ?>" alt="<?php echo $gallery['alt']; ?>"/>
            <?php
            endforeach; ?>
        </div>
    </div>
    
    <?php 
    endif;
    endwhile;
        endif; ?>
        <?php if( have_rows('hightlight') ): 
            while( have_rows('hightlight') ): the_row(); 
            $galleries = get_sub_field('gallery');
            if($galleries): 
            ?>
    <div class="container-fluid mt-5 mb-5 " style="background: url(<?php echo get_field('background_hightlight')["url"]; ?>); background-position: center; background-repeat: no-repeat; background-size: cover; ">
        
        
        <!--<h2 class="i-titre-hightlight mb-3"><?php echo get_sub_field('titre'); ?></h2>-->
        
<!--        <div class="w-100 text-center mb-5">
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
        </div>-->
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-7 col-7">
                <img class="img-fluid " data-aos="fade-down" src="<?php echo get_sub_field('titre_image')["url"]; ?>">
            </div>
        </div>
        
        <div class="carous-hightlight owl-carousel owl-theme mb-5">
            <?php
            foreach ($galleries as $gallery): ?>
                <img class="img-fluid w-100 item" data-aos="flip-left" src="<?php echo $gallery['url']; ?>" alt="<?php echo $gallery['alt']; ?>"/>
            <?php
            endforeach; ?>
        </div>
        
    </div>
    <?php 
    endif;
    endwhile;
            endif; ?>
    <?php if( have_rows('menu') ): 
            while( have_rows('menu') ): the_row();
            $liste_menus = get_sub_field('liste_menu');
            ?>
    <div id="restaurant" class="w-100 mt-5 mb-5 pt-5 pb-5" style="background: url(<?php echo get_sub_field('background')["url"]; ?>); background-position: center; background-repeat: no-repeat; background-size: cover; ">
        <?php
            foreach ($liste_menus as $liste_menu): ?>
        <div class="container">
            <div class="row">
                <?php 
            foreach ($liste_menu['type'] as $type): ?>
            <div class="col-lg-3 col-md-6 i-menu mt-3 " data-aos="fade-down-right">
                <?php
                    foreach ($type['gallery'] as $gallery): ?>
                        <img class="img-fluid w-100" src="<?php echo $gallery['url']; ?>"/>
                    <?php
                    endforeach; ?>
                        
                <div class="i-see-menu">
                    <a href="<?php echo $type['lien']['url']; ?>" class=" pt-2 pb-2 ps-4 pe-4 bg-white  ">voir la carte</a>
                </div>
            </div>
            <?php
                endforeach; ?>
            </div>
            
        </div>
        <?php
            endforeach; ?>
    </div>
    <?php endwhile;
        endif; ?>

    
    
    <?php if( have_rows('meetings') ): 
            while( have_rows('meetings') ): the_row();
            ?>
    <div id="events" class="container-fluid text-center mt-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-7 col-7">
                <img class="img-fluid" data-aos="fade-down" src="<?php echo get_sub_field('titre_image')["url"]; ?>">
            </div>
        </div>
        
    </div>
    
    <div class="carous owl-carousel owl-theme mb-5">
        <?php
        foreach (get_sub_field('events') as $event): ?>
            <div class="item">
                <img class="img-fluid w-100 " src="<?php echo $event['image']['url']; ?>"/>
            </div>
        <?php
        endforeach; ?>
    </div>
    <div class="container mt-5 d-flex justify-content-center align-items-center">
        <a class="pt-2 pb-2 ps-4 pe-4 i-sheet border border-4" href="<?php echo get_sub_field('lien')['url']; ?>">Voir plus ...</a>
    </div>
    
    <?php endwhile;
        endif; ?>
    
    <?php if( have_rows('contact') ): 
            while( have_rows('contact') ): the_row();
            ?>
    <div id="contact" class="container mb-5 mt-5 " >
<!--        <h2 class="i-titre-hightlight mb-3">CONTACT</h2>
        <div class="w-100 text-center mb-5">
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
        </div>-->
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-7 col-7">
                <img class="img-fluid " data-aos="fade-down" src="<?php echo get_sub_field('titre_image')["url"]; ?>">
            </div>
        </div>
<!--        <div>
            <?php // echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]')?>
        </div>-->
        <div class="row" data-aos="zoom-in">
            <?php echo do_shortcode('[contact-form-7 id="'. 830 . '" title="Contact"]'); ?>  
        </div>
    </div>
    <?php endwhile;
        endif; ?>
    
    
<?php 
get_footer('ibis'); 
get_footer(); 
?>
