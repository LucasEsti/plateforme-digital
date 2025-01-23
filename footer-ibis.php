<?php if( have_rows('footer') ): 
        while( have_rows('footer') ): the_row();
            if (get_sub_field('mail') != ''): 
                $contacts = get_sub_field('i_contact');
            endif;
        endwhile;
        else:
            $contacts = get_field('i_contact', 'option');
            
        endif; ?>
<?php // $contacts = get_field('i_contact', 'option'); ?>
        
    <div id="contact" class="container-fluid bg-dark pt-5 pb-5 mb-5 mt-5 border-top border-2 ">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <?php
                $i = 0;
                foreach ($contacts as $contact): ?>
                    <div class="col-lg-4 col-md-12 row <?php if ($i == 1): ?> border-start border-end border-white <?php endif; ?>">
                        <a href="<?php echo $contact['lien']; ?>" class="text-center text-white m-2 fs-5"><?php echo $contact['icon']; ?></a>
                        <a href="<?php echo $contact['lien']; ?>" class="text-center text-white m-2 fs-5" ><?php echo $contact['content']; ?></a>
                    </div>
                <?php
                $i++;
                endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid row mt-3 d-flex justify-content-center align-items-center">
        <?php echo the_field('i_footer', 'option'); ?>
    </div>