<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php bloginfo( 'name'); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>

<!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand Left -->
                <a class="navbar-brand pt-0 waves-effect" href="<?php bloginfo( 'url' ) ?>">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right -->
                    <ul class="navbar-nav ml-auto font-weight-bolder">
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

                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="https://www.facebook.com/" class="nav-link waves-effect" target="_blank">
                                <i class="fab fa-facebook-f fa-lg"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/" class="nav-link waves-effect" target="_blank">
                                <i class="fab fa-twitter fa-lg"></i>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->


