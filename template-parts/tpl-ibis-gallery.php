<?php

/**
 * Template Name: ibis gallery
 */

get_header(); 

get_header('ibis');

?>

    <?php get_template_part( 'parts/carroussel-ibis' ); ?>
        
    <?php if( have_rows('groupe_gallery') ): 
            while( have_rows('groupe_gallery') ): the_row();
            $categories = get_sub_field('categories');
            ?>
    <div id="gall-ibis" class="container ">
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
get_footer('ibis'); 
get_footer(); 
?>
