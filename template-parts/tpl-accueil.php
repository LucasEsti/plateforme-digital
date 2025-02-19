<?php

/**
 * Template Name: Accueil
 */

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name = "viewport" id = "viewport_device">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title><?php the_title(); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php bloginfo("template_url");  ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php bloginfo("template_url");  ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
    <!-- Google Fonts -->
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="<?php bloginfo("template_url");  ?>/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
    <link href="<?php bloginfo("template_url");  ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo("template_url");  ?>/assets/mobile-vertical-carousel/src/carousel-vertical.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <!-- Template Main CSS File -->
    <link href="<?php bloginfo("template_url");  ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url");  ?>/assets/css/responsive.css" rel="stylesheet">
    <style>
        .navbar-default.navbar-trans .nav-link::before {
            background-color: #<?php the_field('couleur-menu');?>; !important
        }
        
        #swipe {
            color: #ffffff !important; 
            font-size: 28px;
        }
        

        #titreMenu {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-size: 1.2rem;
            color: #<?php the_field('couleur-menu');?>;
        }
        
        .cv-item {
            height: 100% !important;
        }
        
        .back-to-top {
            background-color: #<?php the_field('couleur-menu');?>; !important
        }
        
        .intro .owl-theme .owl-dots .owl-dot.active span {
            background-color: #<?php the_field('couleur-menu');?>; !important
        }
        
        .navbar-toggler {
            margin-top: 0rem;
        }
        
       .item.carouselSky {
            margin-top: 5px;
        }
/*        #tns1 {
            margin-top: 50px !important;
        }*/

        .owl-stage {
            margin: 0 auto;
        }
        
/*        .owl-prev {
            position: absolute;
            top: 7%;
            margin-left: 50px;
            display: block !important;
            border:0px solid black;
            font-size: 20px !important;
        }

        .owl-next {
            position: absolute;
            top: 7%;
            right: 50px;
            display: block !important;
            border:0px solid black;
            font-size: 20px !important;
        }*/
        .owl-prev i, .owl-next i {color: #<?php the_field('couleur-menu');?>;}
        
        .icono {
            color:#<?php the_field('couleur-menu');?>;
            font-size: 20px;
        }
/*        #blur {
            height:500px;
            width:100%;
            text-align:center;
            background:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvI6d71dKHi7Vp_KyxJThGs1D3p6m6VAWUng&usqp=CAU') center;
            background-size:cover;
            -webkit-filter: blur(13px);
            -moz-filter: blur(13px);
            -o-filter: blur(13px);
            -ms-filter: blur(13px);
            filter: blur(13px);
            position: absolute;
            left:0;
            top: 0;
        }*/
        
        .owl-item  div{
            background: #ddd;
            height: 100px;
            padding: 10px;
          }
          .accor {
		position: absolute;
		top: 68%;
    		left: 25%;
    		right: 25%;
	}

	.accor_2 {
		position: absolute;
		top: 75%;
    		left: 25%;
    		right: 25%;
	}
	
.owl-item div {
    background: none;
}
        
    </style>
</head>

<body>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    

    
    <div class="container fixed-bottom" style="height: 100px;">
        
            <div class="col"></div>
        <div id="swipeParent" class="col text-center"><a id="swipe" class=""><i class="fas fa-chevron-up"></i></a></div>
        <div class="col"></div>
         
    </div>
    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar d-none navbar-expand-lg ">
        <div id="blur"> 
        </div>
        <div class="container-fluid">
            
                 <?php if( have_rows('menu-liste') ): ?>
                     <?php $i = 0; ?>
                     <?php while( have_rows('menu-liste') ): the_row(); ?>
                        <?php if($i != 0): ?>
                            <div class="col text-center">
                                <a id="nav-<?php the_sub_field('id-carrousel'); ?>" idDiv="<?php the_sub_field('id-carrousel'); ?>" class="linkChap <?php if($i == 0): echo 'active'; endif;?>" href="#<?php the_sub_field('id-carrousel'); ?>"> <?php the_sub_field('icon');?> </a>
                            </div>
                        <?php endif;?>
                         
                     <?php 
                     $i++;
                     endwhile; ?>
                 <?php endif; ?>
        </div>
    </nav><!-- End Header/Navbar -->
    
    <!-- ======= Intro Section ======= -->
    <div class="cv-carousel intro intro-carousel" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
        <?php if( have_rows('menu-liste') ): ?>
            <?php $i = 0; ?>
            <?php while( have_rows('menu-liste') ): the_row(); ?>
                    <!-- ======= <?php if($i != 0): ?> <div class="container"><?php the_sub_field('sous-categorie-name'); ?></div> <?php endif;?> ======= -->
                    
                    <div id="<?php the_sub_field('id-carrousel'); ?>" class="item carouselSky owl-carousel owl-theme">
                        
                        <?php
                            $images = get_sub_field('gallery');
                            if( $images ): ?>
                                    <?php foreach($images as $image): ?>
                                            
                                        <div class="container w-100 h-100">
                                        <img src="<?php echo $image; ?>" class="img-fluid" data-animate="flipInY animated" onContextMenu="return false;">
                                        <?php if( get_sub_field('id-carrousel') == "accor" ): ?>
        						<a href="<?php the_field('accor_lien');?>" class="<?php the_field('accor_class');?>"><img src="<?php echo get_field('accor_image')["url"]; ?>" class="img-fluid " onContextMenu="return false;" alt=""></a>

        					<?php endif; ?>
                                        
                                </div>
                                    <?php endforeach; ?>
                            <?php endif; ?>
                            
                            
                    </div>
                    
            <?php 
                    $i++;
                endwhile; ?>
        <?php endif; ?>
        
    </div><!-- End Intro Sectionhttps://eden.mg/skybar/wp-content/uploads/2021/03/NOVOTEL_Teppanyaki-2021_768x1366pxl-menu-1-2-scaled.jpg  -->
    <?php endwhile; ?>
  <?php endif; ?>


  <!--<div id="preloader"></div>-->

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo("template_url");  ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php bloginfo("template_url");  ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="<?php bloginfo("template_url");  ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php bloginfo("template_url");  ?>/assets/vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.4.1/jquery.appear.min.js" integrity="sha512-vYYoQJKYzaJQaOaYxaJhhmxikOJ2SEgHwmCNa0EMP0aRr7opdt4HHrorAwnCyPm8bdW/JBApIomo85YaBX81zA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->

  
  <script src="<?php bloginfo("template_url");  ?>/assets/mobile-vertical-carousel/src/carousel-vertical.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php bloginfo("template_url");  ?>/assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
        setInterval(function(){
            var swipe = $('#swipeParent');
            if (swipe.length) {
                
                swipe.addClass('animated bounceInUp');
                setTimeout(function(){ swipe.removeClass('animated bounceInUp'); }, 500);
            }
        }, 800);
        
        //disable drag refresh
        
        
        $("html").css({
            "touch-action": "pan-down"
        });
        var animateTemp = 0;
        var customizedFunction = function (info, eventName) {
            // direct access to info object
            animateTemp = 0;
            var item = $(".owl-item.active");
            if (!$('#swipe').length) {
                //console.log('tsis');
                $('#swipeParent').append('<a id="swipe" class=""><i class="fas fa-chevron-up"></i></a>')
            }
            item.addClass(item.children().data('animate'));
            if ($('.tns-slide-active').attr('id') != "couverture") {
                //console.log('remove swipe');
                $('#swipe').remove();
            } 
            
            
            for (var i = 0; i < chapLenght - 1; i++) {
                if (chapitre[i] != $('.tns-slide-active').attr('id')) {
                    
                    chapArray[chapitre[i]].trigger('to.owl.carousel', [0, 1, false]);
                }
            }
            
            setTimeout(function(){ item.removeClass("flipInY animated"); }, 1000);
            
        }
          
        var slider = tns({
            container: '.cv-carousel',
            items: 1,
            loop: false,
            nav: false,
            slideBy: "page",
            axis: "vertical",
            controls: false,
            prevButton: false,
            nexButton: true,
            controlsPosition: 'bottom',
        });

        // bind function to event
        slider.events.on('transitionStart', customizedFunction);
        var chapitreString = "<?php if( have_rows('menu-liste') ): 
            $j = 0;
            while(have_rows('menu-liste')): the_row();
                    printf(the_sub_field('id-carrousel'));
                    printf(",");

                $j++;
            endwhile; 
         endif; ?>";
                 
        var chapitre = chapitreString.split(",");
        var itemTemp;
        var owlCaroussOption = {
            loop: false,
            items: 1,
            dots: false,
            smartSpeed: 850,
            navText: ["<i class='fa fa-arrow-circle-left'></i>","<i class='fa fa-arrow-circle-right'></i>"],
            onDrag: function(e) {
                animateTemp = e.item.index;
                itemTemp = $(".owl-item.active");
            },
//            onDragged: animateDraggSlide,
//            //onTranslated: animateSlide,
//            onTranslate: removeAnimation,
            responsive: {
                0: {
                    items: 1,
                    margin: 30
                },
                600: {
                    items: 1,
                    margin: 30,
                        }
                    }
        };
        
        
        var chapLenght = chapitre.length;
        var chapArray = [];
        for (var i = 0; i < chapLenght - 1; i++) {
            chapArray[chapitre[i]] = $('#' + chapitre[i]);
            chapArray[chapitre[i]].owlCarousel(owlCaroussOption);
            
        }
        var anime = false;
        function animateDraggSlide(e) {
            if (animateTemp == 0) {
                console.log("animateDraggSlide");
                anime = true;
                var item = $(".owl-item.active");
                item.addClass(item.children().data('animate'));
            }
        }
        
        function animateSlide(e) {
            if (anime == true) {
                anime = false;
                return false;
            }
            console.log("animateSlide");
            var item = itemTemp;
            item.addClass(item.children().data('animate'));
        }
        
        // Other Slides
        function removeAnimation() {
            var item = $(".owl-item");
            item.removeClass("flipInY animated");
        }
            
//        $(".owl-nav").each(function() {
//            console.log($(this).children()[0]);
//            //$(this).children().removeClass("owl-prev owl-next") ;
//            //$(this).children().addClass("btn");
//        });

        
        var currentCarrousselId = "";
        //$(".linkChap").on("click", function() {
//            
//            $(this).children().addClass('animated flip');
//            var child = $(this).children();
//            setTimeout(function(){ child.removeClass('animated flip'); }, 3000);
//            
//            var navIdlink = $(this).attr("id");
//            var idDiv = $(this).attr("idDiv");
//            currentCarrousselId = idDiv;
//            
//            //remove active
//            var actif = $(".linkChap.active");
//            var idDivActif = actif.attr("idDiv");
//            actif.removeClass("active");
//            if (idDivActif == undefined) {
//                idDivActif = "couverture";
//            }
//            if (idDiv != idDivActif) {
//                $("#" + idDiv).removeClass("d-none");
//                $("#" + idDivActif).addClass("d-none");
//                
//                chapArray[idDiv].trigger('play.owl.autoplay', [5000]);
//                chapArray[idDivActif].trigger('stop.owl.autoplay');
//                $("#nav-" + idDivActif).children().css("color", "black");
//                
//                setTimeout(function(){ 
//                     console.log($("#" + idDivActif + " .owl-nav").children());
//                    $("#" + idDivActif + " .owl-nav").children().addClass('animated heartBeat'); 
//                }, 5000);
//                
//            }
//            var textSpan = $(this).text();
//            
//            $("#titreMenu").text(textSpan);
//            $("#" + navIdlink).addClass("active");
//            $("#" + navIdlink).children().css("color", "red");
        //});
        $(".owl-prev").on("click", function() {
            var child = $(this).children();
            child.css("color", "red");
            child.addClass('animated fadeOutLeft');
            setTimeout(function(){ 
                child.css("color", "black");
                child.removeClass('animated fadeOutLeft'); }, 1000);
        });
        
        $(".owl-next").on("click", function() {
            var child = $(this).children();
            child.css("color", "red");
            child.addClass('animated fadeOutRight');
            setTimeout(function(){ 
                child.css("color", "black");
                child.removeClass('animated fadeOutRight'); }, 1000);
        });
        
        
      });
  </script>

</body>

</html>
