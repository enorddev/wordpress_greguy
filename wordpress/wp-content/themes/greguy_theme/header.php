<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta <?php bloginfo('charset') ?> />
    <meta name="viewport" content="<?php bloginfo('description') ?>" />
    <title>
        <?php bloginfo('name') ?>
        <?php is_front_page() ? bloginfo('description') : wp_title() ?>
    </title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?> /css/mdb.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?> /style.css ">
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script defer src="<?php bloginfo('template_url'); ?> /js/app.js"></script>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <div class="container-fluid">

        <header>

            <nav class="navbar navbar-expand-xxl navbar-light bg-light">
                <div class="container-fluid nav-container">
                    <a class="navbar-brand" href="<?php echo site_url() ?>">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?> /img/logo-black.png" alt="kw_logo">
                    </a>

                    <button onclick="openNav()" class="navbar-toggler" type="button" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarExample01">

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <?php
                            $args = array(
                                'theme_location' => 'primary'
                            );

                            ?>

                            <?php wp_nav_menu($args); ?>
                        </ul>

                    </div>


                    <div id="mySidenav" class="sidenav">



                        <div class="menu active">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        </div>


                        <div class="menu-links active">


                            <div class="nav-links">
                                <?php
                                $args = array(
                                    'theme_location' => 'primary'
                                );

                                ?>

                                <?php wp_nav_menu($args); ?>
                            </div>
                        </div>



                    </div>

                </div>

            </nav>
            

            
            