<?php

/**
 * Template Name: novotel produits test
 */

get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php if( have_rows('menu-liste') ): 
                $j = 0;
                while( have_rows('menu-liste') ): the_row(); 
                    $j++;
                endwhile; 
             endif; ?>
    <?php 
        if( $j > 1 ): 
            ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light  nav-product ">
        <div class="container-fluid">
            <a id="return-cat" class="navbar-brand nav-link2 col-1" idDiv="" href="<?php $previous = get_field('lien_accueil'); 
                    if(isset($_SERVER['HTTP_REFERER'])) {
                        $previous = $_SERVER['HTTP_REFERER'];
                    }
                    echo $previous;?>">
                <i class="fa-solid fa-circle-chevron-left"></i>
                <!--<img src="<?php the_field('back'); ?>" class="img-fluid">-->
            </a>
            <?php 
                if( $j > 1 ): 
                    ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <?php endif; ?>
            <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if( have_rows('menu-liste') ):
                        $i = 0;
                        while( have_rows('menu-liste') ): the_row(); ?>
                            <li class="nav-item <?php if($i == 0): echo 'd-none'; endif;?>">
                                <a id="nav-<?php the_sub_field('id-carrousel'); ?>" idDiv="<?php the_sub_field('id-carrousel'); ?>" class="nav-link <?php if($i == 0): echo 'active'; endif;?>" href="#<?php the_sub_field('id-carrousel'); ?>"> <?php the_sub_field('sous-categorie-name'); ?> </a>
                            </li>
                <?php 
                    $i++;
                    endwhile;
                    endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php endif; ?>

    <!--test drive-->
    <div class="container content-produit">
        <div class="intro intro-carousel" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
        <?php if( have_rows('menu-liste') ):
            $i = 0; 
            while( have_rows('menu-liste') ): the_row(); 
            $images = get_sub_field('gallery');
            ?>
                <div id="<?php the_sub_field('id-carrousel'); ?>" class="<?php if($i != 0): echo 'd-none'; endif;?> <?php if (count($images) > 1): ?><?php endif;?> n-produit-carrouss">
                    <?php
                        
                        $lien_googles = get_sub_field('lien_google');
                        if( $images ):
                            foreach($images as $image): ?>
                    <div class="item" style="position: relative;">
                                    <img src="<?php echo $image["url"]; ?>" class="img-fluid" onContextMenu="return false;" alt="<?php echo $image["alt"]; ?>">
                                    <?php if( $image["alt"] == "accor_novotel" ): ?>
                                            <a href="<?php the_field('accor_lien');?>" class="<?php the_field('accor_class');?>"><img src="<?php echo get_field('accor_image')["url"]; ?>" class="img-fluid " onContextMenu="return false;" alt=""></a>
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
