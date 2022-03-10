<?php
// echo get_stylesheet_uri());
// echo get_template_directory_uri();
// exit();
function edutheme_theme_setup() {

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('home-featured', 500, 550, array('center', 'center'));
    add_theme_support('automatic-feed-links');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'edutheme')
    ));
}
add_action('after_setup_theme', 'edutheme_theme_setup');

function edutheme_scripts_enqueue(){

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script('edutheme-script', get_template_directory_uri(). '/asscts/js/script.js');

}
add_action('wp_enqueue_scripts', 'edutheme_scripts_enqueue');

function edutheme_widgets_init(){

    register_sidebar(array(
        'name' => __('Main Sidebar', 'adutheme'),
        'id' => 'main-sidebar', 
        'description' => 'Primary Right Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s" >', 
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'

    ));

    register_sidebar(array(
        'name' => __('Footer Widget 1', 'adutheme'),
        'id' => 'footer-widget-1', 
        'description' => 'Footer Widget 1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s" >',
        'after_widget' => '</aside>',
        'before_title' => '<h3><p><h2 class="widget-title">',
        'after_title' => '</h2></p></h3>'

    ));

    register_sidebar(array(
        'name' => __('Footer Widget 2', 'adutheme'),
        'id' => 'footer-widget-2', 
        'description' => 'Footer Widget 2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s" >',
        'after_widget' => '</aside>',
        'before_title' => '<h3><p><h2 class="widget-title">',
        'after_title' => '</h2></p></h3>'

    ));

    register_sidebar(array(
        'name' => __('Footer Widget 3', 'adutheme'),
        'id' => 'footer-widget-3', 
        'description' => 'Footer Widget 3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s" >', 
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'

    ));

    register_sidebar(array(
        'name' => __('Footer Widget 4', 'adutheme'),
        'id' => 'footer-widget-4', 
        'description' => 'Footer Widget 4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s" >', 
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'

    ));

}
add_action('widgets_init', 'edutheme_widgets_init');

//Adding portfolio custom post type
require get_template_directory().'/includes/portfolio.php';