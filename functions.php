<?php

//Header Image
$args = array(
    'flex-width'    => false,
    'width'         => 1920,
    'flex-height'    => false,
    'height'        => 617,
    'default-image' => ,
);
add_theme_support( 'custom-header', $args );

//Logo

add_theme_support( 'custom-logo' );

//Admin Bar (Development)
function adminBar(){
    if ( is_user_logged_in() ) {
        show_admin_bar(true);
    } else {
        show_admin_bar(false);
    }
}
add_action('init', 'adminBar');

//Custom Post Fields Loop
function awardsLoop($fieldName = ''){
    $fieldGet = $fieldName;
    $values = get_field($fieldGet);

    if($values) {
        echo '<ul>';

        foreach($values as $value)
        {
            echo '<li>' . $value . '</li>';
        }

        echo '</ul>';
    }

    return;
}


//Style Prepare
wp_enqueue_style('style', get_stylesheet_uri());

//Title
add_theme_support( 'title-tag' );

//Post Thumbnail
add_theme_support( 'post-thumbnails' );

//Register Navbar
function register_menus() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_menus' );

//Register Language
function register_lang() {
    register_nav_menu('lang-menu',__( 'Language Menu' ));
}
add_action( 'init', 'register_lang' );



// Register Custom Navigation Walker
require_once get_template_directory() . '/resources/class-wp-bootstrap-navwalker.php';

//      Top left Header widget
register_sidebar( array(
    'name' => 'Header Top Left',
    'id' => 'header-widget',
    'description' => 'Appears in the header area',
    'before_widget' => '<div class="header-widget-box">',
    'after_widget' => '</div>',
//    'before_title' => '<h3 class="footer-title">',
//    'after_title' => '</h3>',
) );


//      Top left Body widget
register_sidebar( array(
    'name' => 'Body Top Left',
    'id' => 'body-widget-left',
    'description' => 'Appears in the body area',
    'before_widget' => '<div class="body-widget-box">',
    'after_widget' => '</div>',
//    'before_title' => '<h3 class="footer-title">',
//    'after_title' => '</h3>',
) );

//      Top right Body widget
register_sidebar( array(
    'name' => 'Body Top right',
    'id' => 'body-widget-right',
    'description' => 'Appears in the body area',
    'before_widget' => '<div class="body-widget-box" id="b-w-r">',
    'after_widget' => '</div>',
//    'before_title' => '<h3 class="footer-title">',
//    'after_title' => '</h3>',
) );

//      Index Widgets
register_sidebar( array(
    'name' => 'Index Widget 1',
    'id' => 'index-widget-1',
    'description' => 'Appears in the second block of the home page',
    'before_widget' => '<div class="index-1 index-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="index-widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Index Widget 2',
    'id' => 'index-widget-2',
    'description' => 'Appears in the second block of the home page',
    'before_widget' => '<div class="index-2 index-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="index-widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Index Widget 3',
    'id' => 'index-widget-3',
    'description' => 'Appears in the second block of the home page',
    'before_widget' => '<div class="index-3 index-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="index-widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Index Widget 4',
    'id' => 'index-widget-4',
    'description' => 'Appears in the second block of the home page',
    'before_widget' => '<div class="index-4 index-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="index-widget-title">',
    'after_title' => '</h3>',
) );


//      Footer Widgets
register_sidebar( array(
    'name' => 'Footer Widget 1',
    'id' => 'footer-widget-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-4 footer-1 footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Widget 2',
    'id' => 'footer-widget-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-4 footer-2 footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Widget 3',
    'id' => 'footer-widget-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-4 footer-3 footer-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="footer-title">',
    'after_title' => '</h3>',
) );
?>