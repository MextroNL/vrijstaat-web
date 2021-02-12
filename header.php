<!DOCTYPE html>
<html lang="fr">

    <head>
        <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
<!--        <title>--><?php //wp_title(''); ?><!--</title>-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css"><!--        <link rel="stylesheet" type="text/css" href="--><?php //echo get_stylesheet_directory_uri(); ?><!--/resources/Lightbox/simpleLightbox.min.css">-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/46636d4f0f.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/resources/js/vanta/dist/three.r92.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/resources/js/vanta/dist/vanta.net.min.js"></script>
        <?php include 'language-strings.php'; ?>
        <?php wp_head(); ?>
<style>#login h1 a{background-image: url("<?php the_custom_logo(); ?>");}</style>
    </head>

    <body>
<!--    --><?php //echo $lang=get_bloginfo("language"); ?>
    <?php
    // Fix menu overlap
    //if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>';
    ?>
<div class="page-wrapper" id="animated_bg">
    <!--    Header Top Left Widget-->
    <?php
    if(is_active_sidebar('header-widget')){?>
        <?php dynamic_sidebar('header-widget');
    }
    ?>
    <!--Center Logo Start-->
    <div class="logo-wrapper">
        <!--Image-->
        <?php the_custom_logo(); ?>
    </div>
    <!--    Header Image-->
    <div class="container">
    <a href="<?php echo home_url(); ?>"><div class="header" id="headerimg">
        <?php
        if ( is_single() && has_post_thumbnail() ){
            // echo '<img id="headerimg" alt="headerimg" src="'; header_image(); echo '"/>';
        }
        elseif ( has_post_thumbnail() ) {the_post_thumbnail();}
        else { //echo '<img id="headerimg" alt="headerimg" src="'; header_image(); echo '"/>';
            }
        ?>
    </div></a>
    </div>
    <!--    Header Image End-->
    <!--Navigation Start-->
    <nav class="navbar fixed-top navbar-expand-sm">
        <!--Collapse Button-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false">
            <span class="hamburger-icon fas fa-bars"></span>
        </button>
            <!--Main Menu-->
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'main-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse main-nav',
                'container_id'      => 'collapsibleNavbar',
                'menu_class'        => 'navbar-nav nav-fill w-100',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>

            <!--Main Menu End-->
    </nav>
    <!--Navigation End-->




    <!--Pagetitle-->
    <?php


    if (is_single()){

    }
    else{
        ?>

        <?php
    }
    ?>

    <!--Pagetitle End-->
