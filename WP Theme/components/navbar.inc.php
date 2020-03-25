<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

        <!-- Brand Left -->
        <a class="navbar-brand pt-0 waves-effect"
            href="<?php bloginfo( 'url' ) ?>" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Center -->
            <ul class="navbar-nav mr-auto ml-auto">
            <?php
            $args = array(
                'theme_location' => 'header-menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto',
                'walker' => new Bootstrap_Walker_Nav_Menu()
            );
            if (has_nav_menu('header-menu')) {
                wp_nav_menu($args);
            }
            ?>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li> 
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
                <input type="submit" class="search-submit" value="Search" />
                </form>
                </li>
                <li class="nav-item">
                    <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->