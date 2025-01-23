<?php

/**
 * Template Name: novotel gallery
 */

get_header(); 
get_header('novotel');
?>
    <?php get_template_part( 'parts/carroussel-novotel' ); ?>

    <div class="container-fluid mt-5" style="background: url(<?php echo get_field('background_hightlight')["url"]; ?>); background-position: center; background-repeat: no-repeat; background-size: cover; ">
        <?php if( have_rows('hightlight') ): 
            while( have_rows('hightlight') ): the_row(); 
            $galleries = get_sub_field('gallery');
            ?>
        <h2 class="n-titre-hightlight mb-5" data-aos="flip-up"><?php echo get_sub_field('titre'); ?></h2>
        <div class="carous-hightlight owl-carousel owl-theme mb-5" data-aos="zoom-in-right">
            <?php
            foreach ($galleries as $gallery): ?>
                <img class="img-fluid w-100 item" src="<?php echo $gallery['url']; ?>" alt="<?php echo $gallery['alt']; ?>"/>
            <?php
            endforeach; ?>
        </div>
        <?php endwhile;
            endif; ?>
        
        <?php if( have_rows('technique') ): 
            while( have_rows('technique') ): the_row();
            ?>
        <div class="row mt-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                <img class="img-fluid" data-aos="zoom-in-down" src="<?php echo get_sub_field('image')["url"]; ?>">
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="col-12" data-aos="zoom-in-up">
                    <?php echo get_sub_field('description'); ?>
                </div>
                <div class="col-12 text-center">
                    <a class="pt-2 pb-2 ps-4 pe-4 n-sheet rounded-pill" data-aos="zoom-in" href="<?php echo get_sub_field('sheet')["url"]; ?>">FACT SHEET <i class="fa-solid fa-download"></i></a>
                </div>
            </div>
        </div>
        <?php endwhile;
            endif; ?>
    </div>

    <?php if( have_rows('groupe_gallery') ): 
            while( have_rows('groupe_gallery') ): the_row();
            $categories = get_sub_field('categories');
            ?>
    <div class="container mt-5" style="background: url(<?php echo get_sub_field('background')["url"]; ?>); background-position: center; background-repeat: no-repeat; background-size: cover; ">
        <div class="row">
            <div id="filters" class="carous-cate owl-carousel owl-theme button-group d-flex justify-content-center align-items-center mb-3">  
                <?php
                $i = 0;
                    foreach ($categories as $categorie): ?>
                        <button class="button item <?php if ($i == 0): ?> is-checked <?php endif; ?>" data-aos="zoom-out-up" data-filter=".<?php echo $categorie['id']; ?>" src="<?php echo $categorie['titre']["url"]; ?>" src-mini="<?php echo $categorie['titre_mini']["url"]; ?>">
                            <img class="img-fluid" src="<?php if ($i == 0): echo $categorie['titre']["url"]; else: echo $categorie['titre_mini']["url"]; endif; ?>">
                        </button>
                    <?php
                    $i++;
                    endforeach; ?>
            </div>
            
        </div>
        <div class="grid">
            <?php
            foreach ($categories as $categorie):
                foreach ($categorie['gallery'] as $gallery): ?>
                
                <div class="element-item p-3 col-4 <?php echo $categorie['id']; ?>" data-category="<?php echo $categorie['id']; ?>">
                    <img class="img-fluid image-modal" src="<?php echo $gallery["url"]; ?>">
                </div>
            <?php
                endforeach;
            endforeach; ?>
            
        </div>
        
    </div>
    <?php endwhile;
            endif; ?>

<?php 
get_footer('novotel'); 
get_footer(); ?>