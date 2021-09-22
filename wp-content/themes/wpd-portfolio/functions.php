<?php 

define('TEXTDOMAIN','wpd-portfolio');
define('THEMEURI', get_template_directory_uri());

function wpd_after_setup_theme(){

    load_theme_textdomain(TEXTDOMAIN, get_template_directory().'/languages');

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('post-formats',array('aside','gallery','quote'));
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme','wpd_after_setup_theme');

// load css and js files

function wpd_wp_enqueue_scripts(){
    // css file load
    wp_enqueue_style( 'wpd_style', get_stylesheet_uri());
    wp_enqueue_style( 'all-min-css', THEMEURI.'/fonts/fa/css/all.min.css');
    wp_enqueue_style( 'owl-carousel-min', THEMEURI.'/lib/owl/dist/assets/owl.carousel.min.css');
    wp_enqueue_style( 'owl-theme-default', THEMEURI.'/lib/owl/dist/assets/owl.theme.default.min.css');
    wp_enqueue_style( 'animate-style', THEMEURI.'/css/animate.min.css');
    wp_enqueue_style( 'railway-font', '//fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800&display=swap');

    // js file load
    wp_enqueue_script( 'owl-carousel-min-js', THEMEURI.'/lib/owl/dist/owl.carousel.min.js',array('jquery'),false,true);
    wp_enqueue_script( 'jquery-appear-js', THEMEURI.'/js/jquery.appear.js',array('jquery'),false,true);
    wp_enqueue_script( 'count-to-js', THEMEURI.'/js/count-to.js',array('jquery'),false,true);
    wp_enqueue_script( 'mixitup-min-js', THEMEURI.'/js/mixitup.min.js',array('jquery'),false,true);
    wp_enqueue_script( 'custom-js', THEMEURI.'/js/custom.js',array('jquery'),time(),true);


}

add_action('wp_enqueue_scripts','wpd_wp_enqueue_scripts');

// includes all php file

require get_template_directory().'/inc/customizer.php';