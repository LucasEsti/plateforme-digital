<?php

/**
 * Template Name: ibis meeting
 */

get_header(); 

get_header('ibis');
?>

    <?php get_template_part( 'parts/carroussel-ibis' ); ?>

    
    <?php if( have_rows('banquet') ): 
            while( have_rows('banquet') ): the_row();
            ?>
    <div class="container-fluid text-center mt-5">
<!--        <h2 class="i-titre-hightlight mb-3"><?php echo get_sub_field('titre'); ?></h2>
        <div class="w-100 text-center mb-5">
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
        </div>-->
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid col-lg-2 col-md-3 col-6" src="<?php echo get_sub_field('titre_image')["url"]; ?>">
        </div>
    </div>
    <div class="w-100 meeting-menu mb-5">
        <img class="img-fluid col-12" src="<?php echo get_sub_field('image')['url']; ?>" />
        <?php if(get_sub_field('menu')): 
                    ?>
        <div class="n-menu">
            <a href="<?php echo get_sub_field('menu')['url']; ?>" class="pt-2 pb-2 ps-5 pe-5 i-sheet">MENUS <i class="fa-solid fa-download"></i></a>
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
    <div class="container-fluid text-center mt-5">
<!--        <h2 class="i-titre-hightlight mb-3"><?php echo get_sub_field('titre'); ?></h2>
        <div class="w-100 text-center mb-5">
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
            <i class="fa-solid fa-square-full i-teboka m-2"></i>
        </div>-->
        <div class="row d-flex justify-content-center align-items-center">
            <img class="img-fluid col-lg-3 col-md-7 col-sm-7 " src="<?php echo get_sub_field('titre_image')["url"]; ?>">
        </div>
    </div>
    <div class="container mb-5">
        <?php
        $i =0;
            foreach (get_sub_field('types') as $type): 
                if ($i == 0):
                ?>
            
        <div class="row mt-5 mb-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-12" data-aos="fade-down-up">
                <?php echo $type["description"]; ?>
            </div>
            <div class="col-lg-4 offset-lg-1 col-md-12">
                <div class="carous owl-carousel owl-theme" data-aos="fade-down-right">
                    <?php
                        foreach ($type["gallery"] as $gallery): ?>
                    <img class="img-fluid w-100 item" src="<?php echo $gallery['url']; ?>"/>
                    <?php
                        endforeach; ?>
                </div>
            </div>
        </div>
        <?php
        $i++;
        else:
            $i = 0;
        ?>
        
        <div class="row mt-5 mb-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="carous owl-carousel owl-theme" data-aos="flip-left">
                    <?php
                        foreach ($type["gallery"] as $gallery): ?>
                    <img class="img-fluid w-100 item" src="<?php echo $gallery['url']; ?>"/>
                    <?php
                        endforeach; ?>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 col-md-12" data-aos="flip-right">
                <?php echo $type["description"]; ?>
            </div>
        </div>
        <?php
        
        endif;
            endforeach; ?>
    </div>
    <?php endwhile;
        endif; ?>

    
<?php 
get_footer('ibis'); 
get_footer(); 
?>
