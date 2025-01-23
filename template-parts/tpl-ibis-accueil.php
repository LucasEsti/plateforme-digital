<?php

/**
 * Template Name: ibis accueil
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--<body style="height:100vh; ">-->
    <div class="fixed-bottom d-flex align-items-end" style="height: 100%; background: url(<?php the_field('background'); ?>);  background-position: center; background-repeat: no-repeat; background-size: cover; ">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center mb-2">
                <?php if( have_rows('cartes') ): 
                        while( have_rows('cartes') ): the_row(); ?>
                    <?php if (get_sub_field('here') == true) { ?>
                        <div class="text-center menus col-6">
                            <a href="<?php the_sub_field('lien'); ?>" class=" <?php if (get_sub_field('here') == true) { ?> col-12  <?php } else { ?> col-8 <?php } ?>">
                                <span class=" col-12 animate__animated animate__fadeInUp animate__delay-2s" style="color:#e2061e; font-weight: bold; border-bottom: solid 2px red; letter-spacing: 4px;">
                                    VOUS ÊTES ICI 
                                </span>
                                <div class="col-12 d-flex justify-content-center align-items-center mt-2">
                                    <i class="fa-solid fa-caret-right col-1 animate__animated animate__fadeInLeft animate__delay-2s" style="color:#e2061e;"></i>
                                    <i class="fa-solid fa-caret-right col-1 animate__animated animate__fadeInLeft animate__delay-2s" style="color:#ff6273;"></i>
                                    <i class="fa-solid fa-caret-right col-1 animate__animated animate__fadeInLeft animate__delay-2s" style="color:#ffb0b8;"></i>
                                    
                                    <img class="img-fluid col-10 animate__animated <?php the_sub_field('animate'); ?> " src="<?php the_sub_field('image'); ?>">
                                    
                                    <i class="fa-solid fa-caret-left col-1 animate__animated animate__fadeInRight animate__delay-2s" style="color:#ffb0b8;"></i>
                                    <i class="fa-solid fa-caret-left col-1 animate__animated animate__fadeInRight animate__delay-2s" style="color:#ff6273;"></i>
                                    <i class="fa-solid fa-caret-left col-1 animate__animated animate__fadeInRight animate__delay-2s" style="color:#e2061e;"></i>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    <?php 
                        endwhile;
                        endif; ?>
                <div class="">
                    
                </div>
            </div>
            <div class="row mb-4 d-flex justify-content-center align-items-center">
                <?php if( have_rows('cartes') ): 
                        while( have_rows('cartes') ): the_row(); ?>
                    <?php if (get_sub_field('here') != true) { ?>
                        <div class="col-4 text-center menus mb-2">
                            <a href="<?php the_sub_field('lien'); ?>" class=" d-flex justify-content-center">
                                <img class="img-fluid col-9 animate__animated <?php the_sub_field('animate'); ?> " src="<?php the_sub_field('image'); ?>">
                            </a>
                        </div>
                        <?php } ?>
                <?php 
                    endwhile;
                    endif; ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>



<?php get_footer(); ?>
