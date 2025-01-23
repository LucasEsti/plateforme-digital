<?php

/**
 * Template Name: accor home
 */

get_header(); ?>
<body style="background: url(<?php the_field('background'); ?>);  background-position: center; background-repeat: no-repeat; background-size: cover;">
    
<div class="container-fluid mt-5">
    <div class="row d-flex justify-content-center align-items-center mb-5">
        <img class="img-fluid col-lg-3 col-md-5 col-10" src="<?php echo the_field('accor_logo', 'option'); ?>">
    </div>
    <div class="row">
        <?php echo get_field('description_2'); ?>
    </div>
</div>    

<?php if( have_rows('carroussel') ): 
            while( have_rows('carroussel') ): the_row(); 
            $galleries = get_sub_field('gallery');
            ?>
    <div id="principal" class="w-100 carrouss">
        <div class="carous owl-carousel owl-theme">
            <?php
            foreach ($galleries as $gallery): ?>
                <img class="img-fluid w-100 item" src="<?php echo $gallery['url']; ?>"/>
            <?php
            endforeach; ?>
        </div>
    </div>
    <?php endwhile;
            endif; ?>
    
<div class="container-fluid mt-5">
    <div class="row">
        <h2><?php echo the_field('description_1'); ?></h2>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <img class="img-fluid col-lg-4 col-md-5" src="<?php echo get_field('choisir')['url']; ?>">
    </div>
</div>

<div class="container mb-5 ">
    <div class="row">
    <?php
        foreach (get_field('liste') as $liste): ?>
            <div class="col-lg-6 col-md-12 a-liste mt-5">
                <img class="img-fluid" src="<?php echo $liste["image"]['url']; ?>">
                <div class="row a-lien-hotel d-flex justify-content-center align-items-center">
                    
                    <a class="col-11 a_list" href="<?php echo $liste["lien"]['url']; ?>" >
                        <i class="fa-solid fa-caret-right animate__animated animate__fadeInLeft animate__delay-2s animate__slow animate__infinite mb-4 <?php echo $liste["class"]; ?>"></i>
                        <i class="fa-solid fa-caret-right animate__animated animate__fadeInLeft animate__delay-2s animate__slow animate__infinite mb-4 <?php echo $liste["class"]; ?>"></i>
                        <i class="fa-solid fa-caret-right animate__animated animate__fadeInLeft animate__delay-2s animate__slow animate__infinite mb-4 <?php echo $liste["class"]; ?>"></i>
                        <img class="img-fluid <?php echo $liste["class_image"]; ?>" src="<?php echo $liste["logo"]['url']; ?>">
                        <i class="fa-solid fa-caret-left animate__animated animate__fadeInRight animate__delay-2s animate__slow animate__infinite mb-4 <?php echo $liste["class"]; ?>"></i>
                        <i class="fa-solid fa-caret-left animate__animated animate__fadeInRight animate__delay-2s animate__slow animate__infinite mb-4 <?php echo $liste["class"]; ?>"></i>
                        <i class="fa-solid fa-caret-left animate__animated animate__fadeInRight animate__delay-2s animate__slow animate__infinite mb-4 <?php echo $liste["class"]; ?>"></i>
                    </a>
                </div>
            </div>
        <?php
        endforeach; ?>
    </div>
</div>

<div class="container-fluid mt-5 mb-5">
    
</div>
    
<?php get_footer(); ?>
