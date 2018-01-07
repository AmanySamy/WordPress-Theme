<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <title><?php bloginfo('name'); ?></title>        
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>       
    </head>
    <body>
        <!-- Start Navbar -->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="#">Sagda</a>
                </div><!-- End of navbar-header -->  
             
                <!-- Navbar collapsed Menu -->
                <div class="collapse navbar-collapse" id="menu">
                    <?php bootstrap_menu(); ?>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        
