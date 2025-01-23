<?php

/**
 * Template Name: ibis accueil static
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<body style="height:100vh; background: url(<?php the_field('background'); ?>);  background-position: center; background-repeat: no-repeat; background-size: cover; animation: shrink 5s infinite alternate;">
       <div class="container mt-5">
            <div class="row mb-4 d-flex justify-content-center">
                <?php if( have_rows('cartes') ): 
                        while( have_rows('cartes') ): the_row(); 
                        $lien = get_sub_field('lien');
                        if (get_sub_field('lien') == "") {
                            if (get_sub_field('lien2') == "") {
                               $lien = get_sub_field('file')['url']; 
                            } else {
                                $lien = get_sub_field('lien2');
                            }
                        }
                ?>
                        <div class="col-lg-4 col-md-4 col-6 mt-4 mb-4 text-center menus" style="position: relative;">
                            <a href="<?php echo $lien; ?>" class=" d-flex justify-content-center" target="_blank">
                                <img class="img-fluid col-12 animate__animated <?php the_sub_field('animate'); ?> " src="<?php the_sub_field('image'); ?>">
                                
                            </a>
                            <div class="text-ibis">
                                <?php echo the_sub_field('nom'); ?>
                            </div>
                        </div>
                <?php 
                    endwhile;
                    endif; ?>
            </div>
        </div>
    <?php endwhile; ?>
  <?php endif; ?>



<?php get_footer(); ?>
