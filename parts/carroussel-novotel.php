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
        
        <h1 class="text-accroche d-flex justify-content-center">
            <?php echo get_field('text_accroche'); ?>
        </h1>
        
        <div class="social-media">
            <div class="text-center row mb-3">
                <a href="<?php echo the_field('n_facebook', 'option'); ?>"  class="d-block"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="<?php echo the_field('n_instagram', 'option'); ?>" class="d-block"><i class="fa-brands fa-instagram"></i></a>
                <a href="<?php echo the_field('n_linkedin', 'option'); ?>" class="d-block"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="<?php echo the_field('n_map', 'option'); ?>" class="d-block"><i class="fa-solid fa-location-dot"></i></a>
            </div>
            <div class="row h-100">
                <div class="col-6"></div>
                <div class="col-6" style="border-left: 1px solid white;"></div>
            </div>
        </div>
        
        <div class="accroche ">
            <a href="<?php echo the_field('n_book', 'option'); ?>" class="n-book-now pt-2 pb-2 ps-5 pe-5 bg-white shadow ">BOOK NOW</a>
        </div>
    </div>
    <?php endwhile;
            endif; ?>
