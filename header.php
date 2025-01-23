<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?>
<!doctype html>
<!--[if !IE]>
<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(''); ?></title>
    <?php if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) header('X-UA-Compatible: IE=edge,chrome=1'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://use.typekit.net/mym6gdz.css">
    <?php wp_head(); ?>
    <!--<link rel="shortcut icon" href="<?php bloginfo("template_url");  ?>/images/logo.png" type="image/x-icon">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php bloginfo("template_url");  ?>/css/novotel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo("template_url");  ?>/css/plateforme.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url");  ?>/css/menu-design.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
/*        #map {
            width: 100%;
            height: 100%;
            min-height: 100%;
            background: red;
            display: block;
        }

        html, body {
            height: 100%;
        }

        .fill { 
            min-height: 100%;
            height: 100%;
        }*/
        
        <?php if( have_rows('menu-liste') ):
                    $i = 0;
                    while( have_rows('menu-liste') ): the_row(); ?>
                    .gauche.active #img-<?php the_sub_field('id-carrousel'); ?> , .droite.active #img-<?php the_sub_field('id-carrousel'); ?> {
                        content:url("<?php echo get_sub_field('icon_inactif')["url"]; ?>");
                    }
                    
                    .vip-gauche.active #img-<?php the_sub_field('id-carrousel'); ?> , .vip-droite.active #img-<?php the_sub_field('id-carrousel'); ?> {
                        content:url("<?php echo get_sub_field('icon')["url"]; ?>");
                    }
                    
                    .center.active #img-<?php the_sub_field('id-carrousel'); ?> {
                        content:url("<?php echo get_sub_field('icon')["url"]; ?>");
                    }
                    
                    .owl-item:not(.active) #img-<?php the_sub_field('id-carrousel'); ?> {
                        content:url("<?php echo get_sub_field('icon_inactif')["url"]; ?>");
                    }
                    
        <?php 
                $i++;
                endwhile;
                endif; ?>
                    
        

	.accor_2 {
            position: absolute;
            top: 75%;
            left: 25%;
            right: 25%;
	}
        
        .owl-prev {
            width: 100px;
            height: 100px;
            position: absolute;
            top: <?php the_field('top');?>%;
            margin-left: -20px;
            display: block !important;
            border:0px solid black;
        }

        .owl-next {
            width: 100px;
            height: 100px;
            position: absolute;
            top: <?php the_field('top');?>%;
            right: -25px;
            display: block !important;
            border:0px solid black;
        }
        
        .owl-nav .disabled{
            display: none !important;
        }
        
        .owl-prev i, .owl-next i {
            transform : scale(2,-2); 
            /*color: #2739f9; ff8c8c*/
            color: #<?php the_field('color');?>;
        }
        @keyframes shrink {
            0% {
              background-size: 110% 110%;
            }
            100% {
              background-size: 100% 100%;
            }
          }
          .grid-soanambo {
            max-width: 100%;
            gap: 15px;
          }

          /* clear fix */
          .grid-soanambo:after {
            content: '';
            display: block;
            clear: both;
          }

          /* ---- .grid-item ---- */

          .grid-item {
              padding: 2px;
            float: left;
            width: 100px;
            height: 100px;
          }

          .grid-item--width2 { height: 200px; }
          .grid-item--height2 { width: 200px; }
          

    </style>
</head>

<body <?php if(get_field('color_new_design') != ""): ?> style="background-color: <?php the_field('color_new_design');?>;"<?php endif;?> >
    
    