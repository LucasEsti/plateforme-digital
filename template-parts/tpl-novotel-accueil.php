<?php

/**
 * Template Name: novotel accueil
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<body style="height:100vh; background: url(<?php the_field('background'); ?>);  background-position: center; background-repeat: no-repeat; background-size: cover; animation: shrink 5s infinite alternate;">
    <div class="h-100">
        <div class="col-12" style="height: 100%;">
            <div class="col-6 h-100 d-flex justify-content-center" style="background-color: rgb(255 255 255 / 50%);">
                <div class="h-100 w-100 row d-flex justify-content-center align-items-center" >
                        <?php if( have_rows('cartes') ): 
                        while( have_rows('cartes') ): the_row(); ?>
                        <div class="text-center menus d-flex justify-content-center align-items-center ">
                            <a href="<?php the_sub_field('lien'); ?>" class=" col-<?php the_sub_field('col'); ?> d-flex justify-content-center">
                                <div class="">
                                    <?php if (get_sub_field('here') == true) { ?>
                                        <i class='fa fa-caret-right col-1 animate__animated animate__fadeInLeft animate__delay-2s animate__infinite' style="color: #29398e;"></i>
                                    <?php } ?>

                                    <img class="img-fluid col-9 animate__animated <?php the_sub_field('animate'); ?> " src="<?php the_sub_field('image'); ?>">

                                    <?php if (get_sub_field('here') == true) { ?>
                                        <i class='fa fa-caret-left col-1 animate__animated animate__fadeInRight animate__delay-2s animate__infinite' style="color: #29398e;"></i>
                                    <?php } ?>
                                    <?php if (get_sub_field('here') == true) { ?>
                                    <span class="animate__animated animate__fadeInRight animate__flash animate__delay-2s animate__slow animate__infinite" style="color:#3e3e3e; font-weight: 500;">
                                         YOU ARE HERE
                                    </span>
                                    <?php } ?>
                                </div>

                            </a>
                        </div>
                    <?php 
                        endwhile;
                        endif; ?>
                </div>
            </div>
        </div>
        
<!--        <div class="d-flex justify-content-center">
            <div class="col-8">
                <a href="<?php the_field('accor_lien');?>" class=""><img src="<?php echo get_field('accor_image')["url"]; ?>" class="img-fluid " alt=""></a>
            </div>
        </div>-->
    </div>
    <?php endwhile; ?>
  <?php endif; ?>



<?php get_footer(); ?>
