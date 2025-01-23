<div class="container mb-5 mt-5 border-top border-2 ">
        <div class="row d-flex justify-content-center mt-3">
            <img class="img-fluid col-lg-3 col-md-4 col-sm-3"  src="<?php echo the_field('n_logo', 'option'); ?>">
        </div>
        
        <div class="row mt-3" >
            <?php if( have_rows('footer') ): 
            while( have_rows('footer') ): the_row();
            ?>
            <?php echo get_sub_field('mail'); ?>
            
            <?php endwhile;
                else:
                    echo the_field('n_footer', 'option');
            endif; ?>
        </div>
    </div>