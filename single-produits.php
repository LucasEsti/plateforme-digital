<?php



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



    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">



    <!-- Vendor CSS Files -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="<?php bloginfo("template_url");  ?>/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">

    <link href="<?php bloginfo("template_url");  ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">

    <link href="<?php bloginfo("template_url");  ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?php bloginfo("template_url");  ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">



    <!-- Template Main CSS File -->

    <link href="<?php bloginfo("template_url");  ?>/assets/css/style.css" rel="stylesheet">

    <link href="<?php bloginfo("template_url");  ?>/assets/css/responsive.css" rel="stylesheet">

    <style>

        .navbar-default.navbar-trans .nav-link::before {

            background-color: #<?php the_field('couleur-menu');?>; !important

        }

        
	#titreMenu {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
	    font-size: 1.2rem;
            color: #<?php the_field('couleur-menu');?>;
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

    </style>

</head>



<body>

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

    <nav class="navbar navbar-default navbar-trans navbar-expand-lg ">
        <div class="container">
            
            <?php 
            if( $j > 1 ): 
                ?>
                <button class="border border-dark rounded navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button> 
            <?php endif; ?>
            <h6 id="titreMenu" class="align-center"></h6>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                 <ul class="navbar-nav">
                 <?php if( have_rows('menu-liste') ): ?>
                     <?php $i = 0; ?>
                     <?php while( have_rows('menu-liste') ): the_row(); ?>
                         <li class="nav-item <?php if($i == 0): echo 'd-none'; endif;?>">
                             <a id="nav-<?php the_sub_field('id-carrousel'); ?>" idDiv="<?php the_sub_field('id-carrousel'); ?>" class="nav-link <?php if($i == 0): echo 'active'; endif;?>" href="#<?php the_sub_field('id-carrousel'); ?>"> <?php the_sub_field('sous-categorie-name'); ?> </a>
                         </li>
                     <?php 
                     $i++;
                     endwhile; ?>
                 <?php endif; ?>
                 </ul>
             </div> 
        </div>
    </nav><!-- End Header/Navbar -->
	<?php endif; ?>

    <!-- ======= Intro e Section ======= -->

    <div class="intro intro-carousel" data-spy="scroll" data-target="#myScrollspy" data-offset="1">

        <?php if( have_rows('menu-liste') ): ?>

            <?php $i = 0; ?>

            <?php while( have_rows('menu-liste') ): the_row(); ?>

            

                    <div id="<?php the_sub_field('id-carrousel'); ?>" class="<?php if($i != 0): echo 'd-none'; endif;?> carouselSky owl-carousel owl-theme">

                        <?php

                            $images = get_sub_field('gallery');

                            if( $images ): ?>

                                <?php foreach($images as $image): ?>
					<div>
                                        <img src="<?php echo $image["url"]; ?>" class="img-fluid" onContextMenu="return false;" alt="<?php echo $image["alt"]; ?>">
					<?php if( $image["alt"] == "accor" ): ?>
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

        

    </div><!-- End Intro Section -->



    <?php endwhile; ?>

  <?php endif; ?>





  <a href="#" class="back-to-top d-none"><i class="fa fa-chevron-up"></i></a>

   <!--<div id="preloader"></div>-->


  <!-- Vendor JS Files -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="<?php bloginfo("template_url");  ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="<?php bloginfo("template_url");  ?>/assets/vendor/php-email-form/validate.js"></script>


  <script src="<?php bloginfo("template_url");  ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <script src="<?php bloginfo("template_url");  ?>/assets/vendor/scrollreveal/scrollreveal.min.js"></script>



  <!-- Template Main JS File -->

  <script src="<?php bloginfo("template_url");  ?>/assets/js/main.js"></script>

  <script>

      $(document).ready(function() {

          $(".nav-link").on("click", function() {

                var navIdlink = $(this).attr("id");

                var idDiv = $(this).attr("idDiv");

                //remove active

                var actif = $(".nav-link.active");

                var idDivActif = actif.attr("idDiv");

                actif.removeClass("active");

                if (idDiv != idDivActif) {

                    $("#" + idDiv).removeClass("d-none");

                    $("#" + idDivActif).addClass("d-none");

                }

                var textSpan = $(this).text();

                $("#titreMenu").text(textSpan);

                $("#" + navIdlink).addClass("active");

          });

      });

  </script>



</body>



</html>



