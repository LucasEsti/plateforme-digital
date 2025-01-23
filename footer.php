
<!-- The Modal -->
<div id="myModal" class="modal">
  <span id="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>

<?php wp_footer(); ?> 

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S11DZRV7WS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S11DZRV7WS');
</script>
<script>
    $(window).on('load', function(){
         
            $('.grid-soanambo').isotope({
                itemSelector: '.grid-item',
                masonry: {
                  columnWidth: 100,
                  gutter: 15
                }
              });
              
        var $grid = $('.grid').isotope({
          itemSelector: '.element-item',
          layoutMode: 'masonry',
          getSortData: {
            name: '.name',
            symbol: '.symbol',
            number: '.number parseInt',
            category: '[data-category]',
            weight: function( itemElem ) {
                var weight = $( itemElem ).find('.weight').text();
                return parseFloat( weight.replace( /[\(\)]/g, '') );
            }
          }
        });
        
        
        
        // filter functions
        var filterFns = {
          // show if number is greater than 50
          numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt( number, 10 ) > 50;
          },
          // show if name ends with -ium
          ium: function() {
            var name = $(this).find('.name').text();
            return name.match( /ium$/ );
          }
        };

        // bind filter button click
        $('#filters').on( 'click', 'button', function() {
            
            let changeChecked = $('.is-checked').attr('src-mini');
            $('.is-checked').find('img').attr('src', changeChecked);
            $(this).find('img').attr('src', $(this).attr('src'));
            
            var filterValue = $(this).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $grid.isotope({ filter: filterValue });
        });


        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $grid.isotope({ filter: $buttonGroup.find('.is-checked').attr("data-filter") });
            $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
            });
        });
        
    });
    $(document).ready(function() {
        
        var $carousmenu = $('.loop');
        
        $carousmenu.children().each( function( index ) {
            $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
          });
        
        $(document).on('click', '.loop .owl-item>div', function() {
            var $speed = 600;  // in ms
            $carousmenu.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
          });
          
        
        $('.loop').owlCarousel({
            center: true,
            items:3,
            margin:0,
            loop: true,
            touchDrag  : false,
            mouseDrag  : false,
            dots: false,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        });
        $(".loop .owl-item:nth-child(2)").addClass("droite");
        
        $('.loop').on('changed.owl.carousel', function(event) {
            console.log('---------');
            $('.owl-carousel').off('drag.owl.carousel click.owl.carousel');
            var currentItem = event.item.index;
            var num = currentItem + 1;
            var next = currentItem + 2;
            var actif = $(".loop .owl-item:nth-child( " + num + ")");
            var idDiv = actif.children().attr("idDiv");
//            var img_inactif = $(".couv-menu:not(.d-none)").attr("id-couv");
            if (idDiv === "vip") {
                console.log('vip');
                $(".owl-item.gauche").removeClass("gauche");
                $(".owl-item.droite").removeClass("droite");
                
                $(".owl-item.vip-gauche").removeClass("vip-gauche");
                $(".owl-item.vip-droite").removeClass("vip-droite");

                $(".loop .owl-item:nth-child( " + currentItem + ")").addClass("vip-gauche");
                $(".loop .owl-item:nth-child( " + next + ")").addClass("vip-droite");
            } else {
                console.log('tsy vip');
                $(".owl-item.gauche").removeClass("gauche");
                $(".owl-item.droite").removeClass("droite");

                $(".owl-item.vip-gauche").removeClass("vip-gauche");
                $(".owl-item.vip-droite").removeClass("vip-droite");

                $(".loop .owl-item:nth-child( " + currentItem + ")").addClass("gauche");
                $(".loop .owl-item:nth-child( " + next + ")").addClass("droite");
            }
            
            

            $(".couv-menu:not(.d-none)").addClass("d-none");
            $("#cou-" + idDiv).removeClass("d-none");
            
//            $("#img-" + idDiv).attr("src", actif.children().attr("src_actif"));
            
            $(".n-produit-carrouss:not(.d-none)").addClass("d-none");
            $("#" + idDiv).removeClass("d-none");
            
        });
        
        
        $(document).scroll(function () {
            var $nav = $(".navbar");
            var $navLink = $(".nav-link");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            $navLink.toggleClass('scrolled', $(this).scrollTop() > $navLink.height());
        });
        AOS.init({
            duration: 900,
        });
        var modal = $("#myModal");

        var img = $(".image-modal");
        var modalImg = $("#img01");
        var captionText = $("#caption");

        img.click(function(){
          modal.css("display","block");
          modalImg.attr("src", $(this).attr("src"));
          captionText.innerHTML = this.alt;
        }); 


        $("#close").click(function(){
            console.log("e");
          modal.css("display","none");
        }); 
        
        
        
        $('.carous-cate').owlCarousel({
            loop:true,
            margin:10,
            dots: false,
            center:true,
            autoplay:false,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        });
        $('.carous-event').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout: 5000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:2
                }
            }
        });
        
        $('.carous').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            dots: true,
            autoplayTimeout: 5000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
        
        $('.carous-hightlight').owlCarousel({
            loop:true,
            margin:10,
            dots: true,
            autoplay:true,
            autoplayTimeout: 5000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        });
        
        $('.carous-menu').owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            center:true,
            autoplay:false,
            autoWidth:true,
            items: 3
        });
        
        
        $('.owl-carousel').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            autoplay:false,
            autoplayTimeout: 5000,
            navText: ["<i class='fa-solid fa-angle-left animate__animated animate__fadeInRight animate__delay-2s animate__fast animate__infinite'></i>", "<i class='fa-solid fa-angle-right animate__animated animate__fadeInLeft animate__delay-2s animate__fast animate__infinite'></i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:2
                }
            }
        });
        
        
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
            $("#" + idDiv).trigger('to.owl.carousel', 0);
            $(".navbar-collapse").collapse('hide');
            
            $("#return-cat").attr("href", "#" + actif.attr("iddiv"));
            $("#return-cat").attr("iddiv", actif.attr("iddiv"));
        });
        
        $(".nav-link2").on("click", function() {
            var navIdlink = $(this).attr("id");
            var idDiv = $(this).attr("idDiv");
            var actif = $(".nav-link.active");
            var idDivActif = actif.attr("idDiv");
            actif.removeClass("active");
            console.log(idDiv + " " + idDivActif);
            if (idDiv != idDivActif) {
                $("#" + idDiv).removeClass("d-none");
                $("#" + idDivActif).addClass("d-none");
            }
            $("#nav-" + idDiv).addClass("active");
            
        });
        AOS.refresh();
//        $( ".animate__animated" ).each(function( index ) {
//            $( this ).addClass("animate__fadeInRight");
//        });
        
            
    });
    
</script>

</body>
</html>