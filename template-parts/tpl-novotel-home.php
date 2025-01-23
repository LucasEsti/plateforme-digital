<?php

/**
 * Template Name: novotel home
 */

get_header(); 
get_header('novotel');
?>
    
    <?php get_template_part( 'parts/carroussel-novotel' ); ?>
    
    <div  class="container-fluid mt-5 mb-5" style="background: url(<?php echo get_field('background_hightlight')["url"]; ?>); background-position: center; background-repeat: no-repeat; background-size: cover; ">
        <?php if( have_rows('hightlight') ): 
            while( have_rows('hightlight') ): the_row(); 
            $galleries = get_sub_field('gallery');
            if($galleries): 
            ?>
<!--        <h2 class="n-titre-hightlight mb-5"><?php echo get_sub_field('titre'); ?></h2>-->
        
        
        <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
            <img class="img-fluid col-lg-5 col-md-7 col-12" data-aos="zoom-in" src="<?php echo get_sub_field('titre_image')["url"]; ?>">
        </div>
        <div class="carous-hightlight owl-carousel owl-theme mb-5">
            <?php
            foreach ($galleries as $gallery): ?>
                <img class="img-fluid w-100 item"  src="<?php echo $gallery['url']; ?>" alt="<?php echo $gallery['alt']; ?>"/>
            <?php
            endforeach; ?>
        </div>
        <?php 
        endif;
        endwhile;
            endif; ?>
        
        <?php if( have_rows('technique') ): 
            while( have_rows('technique') ): the_row();
            ?>
        <div id="about" class="row mt-5 mb-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-5 col-md-12 d-flex justify-content-center align-items-center">
                <img class="img-fluid col-8" data-aos="flip-up" src="<?php echo get_sub_field('image')["url"]; ?>">
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-12">
                <div class="col-12" data-aos="fade-up">
                    <?php echo get_sub_field('description'); ?>
                </div>
                <?php if(get_sub_field('sheet')): 
                    ?>
                <div class="col-12 text-center mt-5">
                    <div class="mb-3">FACT SHEET</div>
                    <a class="pt-2 pb-2 ps-4 pe-4 n-sheet rounded-pill" data-aos="flip-up" href="<?php echo get_sub_field('sheet')["url"]; ?>">EN <i class="fa-solid fa-download"></i></a>
                    <a class="pt-2 pb-2 ps-4 pe-4 n-sheet rounded-pill" data-aos="flip-up" href="<?php echo get_sub_field('fiche')["url"]; ?>">FR <i class="fa-solid fa-download"></i></a>
                </div>
                <?php 
                    endif; ?>
            </div>
            
            <div class="col-lg-1 col-md-0">
                
            </div>
            
        </div>
        <?php endwhile;
            endif; ?>
    </div>
    
    <?php if( have_rows('menu') ): 
            while( have_rows('menu') ): the_row();
            $liste_menus = get_sub_field('liste_menu');
            ?>
    <div id="" class="w-100">
        <?php
            foreach ($liste_menus as $liste_menu): ?>
        <div>
            <div class="d-flex justify-content-center mt-3 mb-3">
                <img class="img-fluid col-lg-3 col-md-6 col-9" data-aos="fade-up" src="<?php echo $liste_menu["titre"]['url']; ?>" />
            </div>
            
            <?php 
            $i = 0;
            foreach ($liste_menu['type'] as $type): ?>
            <div id="<?php echo $liste_menu["id"]; ?>" class="row n-menu-fond">
                <?php if ($i == 0): ?>
                <div class="col-lg-4 col-md-12 d-flex flex-column justify-content-center align-items-center ">
                    <div class="col-12 d-flex justify-content-center mb-5 n-menu-img">
                        <img class="img-fluid col-lg-4 col-md-4 col-4" data-aos="fade-up" src="<?php echo $type['titre']['url']; ?>" />
                    </div>
                    <div class="col-12 text-center mb-5">
                        <a href="<?php echo $type['lien']['url']; ?>" data-aos="fade-down" class="n-see-more pt-2 pb-2 ps-4 pe-4 bg-white">SEE MORE</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 n-menu-carou n-menu-carou-marg">
                    <div class="carous owl-carousel owl-theme">
                        <?php
                        foreach ($type['gallery'] as $gallery): ?>
                            <img class="img-fluid w-100 item" data-aos="fade-up" src="<?php echo $gallery['url']; ?>" alt="<?php echo $gallery['alt']; ?>"/>
                        <?php
                        endforeach; ?>
                    </div>
                </div>
                
                <?php 
                $i++;
                else: ?>
                <div class="col-lg-8 col-md-12  n-menu-carou">
                    <div class="carous owl-carousel owl-theme">
                        <?php
                        foreach ($type['gallery'] as $gallery): ?>
                            <img class="img-fluid w-100 item" data-aos="fade-up" src="<?php echo $gallery['url']; ?>" alt="<?php echo $gallery['alt']; ?>"/>
                        <?php
                        endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 d-flex flex-column justify-content-center align-items-center">
                    <div class="col-12 d-flex justify-content-center mb-5 n-menu-img">
                        <img class="img-fluid col-lg-4 col-md-4 col-4" data-aos="fade-up" src="<?php echo $type['titre']['url']; ?>" />
                    </div>
                    <div class="col-12 text-center mb-5">
                        <a href="<?php echo $type['lien']['url']; ?>" data-aos="fade-up" class="n-see-more pt-2 pb-2 ps-4 pe-4 bg-white">SEE MORE</a>
                    </div>
                </div>
                
                <?php 
                $i = 0;
                endif; ?>
            </div>
            <?php
                endforeach; ?>
            </div>
        <?php
            endforeach; ?>
        </div>
    </div>
    <?php endwhile;
        endif; ?>

    <?php if( have_rows('meetings') ): 
            while( have_rows('meetings') ): the_row();
            ?>
    <div id="events" class="container-fluid text-center mt-5 mb-5" style="background: url(<?php echo get_sub_field('background')["url"]; ?>); background-position: center; background-repeat: no-repeat; background-size: cover; ">
        <!--<h2 class="n-titre-hightlight mb-5"><?php echo get_sub_field('titre'); ?></h2>-->
        <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
            <img class="img-fluid col-lg-4 col-md-7 col-sm-7" data-aos="fade-up" src="<?php echo get_sub_field('titre_image')["url"]; ?>">
        </div>
        <div class="carous-event owl-carousel owl-theme mb-5">
            <?php
            foreach (get_sub_field('events') as $event): ?>
                <div class="item" data-aos="fade-up">
                    <img class="img-fluid w-100 " src="<?php echo $event['image']['url']; ?>"/>
                    <div class="event-lien">
                        <a class=" pt-2 pb-2 ps-4 pe-4 rounded" href="<?php echo $event['lien']; ?>">SEE MORE</a>
                    </div>
                </div>

            <?php
            endforeach; ?>
        </div>
    </div>
    
    
    <?php endwhile;
        endif; ?>
    
    <?php if( have_rows('gallery') ): 
            while( have_rows('gallery') ): the_row();
            $galerie = get_sub_field('galerie');
            ?>
    <div id="gallery" class="container-fluid text-center mt-5 mb-5">
<!--        <h2 class="n-titre-hightlight mb-5"><?php echo get_sub_field('titre'); ?></h2>-->
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid col-lg-4 col-md-7 col-sm-7" data-aos="fade-up" src="<?php echo get_sub_field('titre_image')["url"]; ?>">
        </div>
    </div>
    <div class="container-fluid mb-5 mt-5">
        <div class="carous owl-carousel owl-theme mb-5">
            <?php
            foreach ($galerie as $gallery): ?>
                <a class="item" data-aos="fade-up" href="https://espace-digital-hotels.com/novotel-gallery/"><img class="img-fluid w-100 " src="<?php echo $gallery['url']; ?>" alt="<?php echo $gallery['alt']; ?>"/></a>
            <?php
            endforeach; ?>
        </div>
    </div>
    
    <div class="container-fluid text-center mt-5">
        <a class="pt-2 pb-2 ps-4 pe-4 n-sheet" data-aos="fade-up" href="<?php echo get_sub_field('lien')["url"]; ?>">SEE MORE</a>
    </div>
    
    <?php endwhile;
        endif; ?>
    
    
    
    <?php if( have_rows('contact') ): 
            while( have_rows('contact') ): the_row();
            ?>
    <div id="contact" class="container mb-5 mt-5" data-aos="fade-up" style="background: url(<?php echo get_sub_field('background')["url"]; ?>); background-position: center; background-repeat: no-repeat; background-size: cover; ">
        <!--<h2 class="n-titre-hightlight mb-5">CONTACT</h2>-->
        <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
            <img class="img-fluid col-lg-6 col-md-7 col-sm-7" src="<?php echo get_sub_field('titre_image')["url"]; ?>">
        </div>
        <div >
            <?php echo do_shortcode('[contact-form-7 id="'. 830 . '" title="Contact"]'); ?>  
        </div>
        
    </div>
    <?php endwhile;
        endif; ?>
    
    
<?php 
get_footer('novotel'); 
get_footer(); ?>
