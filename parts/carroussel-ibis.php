<?php if( have_rows('carroussel') ): 
            while( have_rows('carroussel') ): the_row(); 
            $galleries = get_sub_field('gallery');
            ?>
    <div id="principal" class="w-100 carrouss mb-5">
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
        <div class="w-100 image_accroche ">
            <img class="img-fluid col-lg-6 col-md-7 col-sm-7" src="<?php echo get_field('image_accroche')["url"]; ?>">
        </div>
        
        <?php if (get_queried_object_id() == 799 ) { ?>
        <div class="w-100 i_form ">
            <a href="<?php echo the_field('i_form', 'option'); ?>" class="pt-2 pb-2 ps-5 pe-5 ">FORMULAIRE</a>
        </div>
        <?php }
        ?>
        
        
        <?php if( have_rows('groupe_gallery') ): 
            while( have_rows('groupe_gallery') ): the_row();
            $categories = get_sub_field('categories');
            ?>
        <div class="i-filtre">
            <div id="filters" class="button-group container d-flex justify-content-around align-items-center">  
                <?php
                $i = 0;
                    foreach ($categories as $categorie): ?>
                        <button class="button col-lg-2 col-md-2 col-sm-3 <?php if ($i == 0): ?> is-checked <?php endif; ?>" data-aos="flip-left" data-filter=".<?php echo $categorie['id']; ?>">
                            <img class="img-fluid" src="<?php echo $categorie['titre']["url"]; ?>">
                            <span><?php echo $categorie['titre_text']; ?></span>
                        </button>
                    <?php
                    $i++;
                    endforeach; ?>
            </div>
        </div>
    <?php endwhile;
            endif; ?>
    </div>
    <?php endwhile;
            endif; ?>
