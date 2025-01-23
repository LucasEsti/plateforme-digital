<nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav w-100 me-auto mb-2 mb-lg-0 d-flex justify-content-around">
                    <?php 
                    $menu_name = 'menu-novotel';
                    
                    $menus = wp_get_nav_menu_items( $menu_name, array() );
                    
                    foreach($menus as $menu):
                        $cut = explode("//",$menu->{'url'});
                        $cutFinal = "#" . trim($cut[1]);
                        //rehefa tsy accueil
                        if (get_queried_object_id() != 792 ) {
                            $cutFinal = "/novotel-home/#" . trim($cut[1]);
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
