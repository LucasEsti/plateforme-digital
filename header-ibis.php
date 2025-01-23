
<nav class="i-navbar navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse row" id="navbarTogglerDemo01">
                <ul class="i-nav navbar-nav w-100 me-auto mb-2 mb-lg-0 d-flex justify-content-between bg-white">
                    <li class="nav-item d-flex align-items-center ms-2">
                        <div class="pt-2 pb-2 ps-lg-5 pe-5">
                            <a href="<?php echo the_field('i_facebook', 'option'); ?>" target="_blank" class="d-inline m-2"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="<?php echo the_field('i_instagram', 'option'); ?>" target="_blank" class="d-inline m-2"><i class="fa-brands fa-instagram"></i></a>
                            <a href="<?php echo the_field('i_map', 'option'); ?>" target="_blank" class="d-inline m-2"><i class="fa-solid fa-location-dot"></i></a>
                        </div>
                    </li>
                    <li class="nav-item i-accroche">
                        <a href="<?php echo the_field('i_book', 'option'); ?>" class="nav-link n-book-now pt-2 pb-2 ps-5 pe-5 m-2 bg-white shadow border border-4">BOOK NOW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pt-2 pb-2 ps-lg-5 pe-5 m-2 i-contact" href="#contact">CONTACT</a>
                    </li>
                </ul>
                <ul class="navbar-nav w-100 me-auto mb-2 mb-lg-0 ms-md-2 d-flex justify-content-around">
                    <?php 
                    $menu_name = 'menu-ibis';
                    
                    $menus = wp_get_nav_menu_items( $menu_name, array() );
                    
                    foreach($menus as $menu):
                        $cut = explode("//",$menu->{'url'});
                        $cutFinal = "#" . trim($cut[1]);
                        //rehefa tsy accueil
                        if (get_queried_object_id() != 715 ) {
                            $cutFinal = "/ibis-home/#" . trim($cut[1]);
                        }
                        
                        ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($menu->{'object_id'} == get_queried_object_id()): ?>active<?php endif; ?>" href="<?php if ($menu->{'type_label'} == "Page"): echo $menu->{'url'}; else: echo $cutFinal; endif; ?>"><?php echo $menu->{'title'}; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>

