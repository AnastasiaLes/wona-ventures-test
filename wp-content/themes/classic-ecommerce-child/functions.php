<?php 
/* Child theme generated with WPS Child Theme Generator */
            
if ( ! function_exists( 'b7ectg_theme_enqueue_styles' ) ) {            
    add_action( 'wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles' );
    
    function b7ectg_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
    }
}

function myTheme_setup() {
    add_theme_support('title-tag');
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
    ));
}
add_action('after_setup_theme', 'myTheme_setup');

add_filter('the_content', 'filter_content');

function filter_content($content) {

    return $content;
}

// add_filter('the_content', 'read_more_button');
// function read_more_button() {
//     global $post;
//     return '<div class="wp_read_more_btn"></div>';
// }