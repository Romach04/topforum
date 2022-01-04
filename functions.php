<?php
/*
Template Name: topforum
*/





add_action('wp_enqueue_scripts', 'topforum_styles');
add_action('wp_enqueue_scripts', 'topforum_scripts');

function topforum_styles () {
    wp_enqueue_style( 'topforum-style', get_stylesheet_uri() );
    wp_register_style('sponsors-style', get_template_directory_uri() .'/assets/css/sponsors.css' );
    wp_enqueue_style( 'sponsors-style');
    wp_register_style('slick-css', get_template_directory_uri() .'/assets/slick/slick.css' );
    wp_enqueue_style( 'slick-css');
    wp_register_style('slick-css-theme', get_template_directory_uri() .'/assets/slick/slick-theme.css' );
    wp_enqueue_style( 'slick-css-theme');
    wp_register_style('animate-css', get_template_directory_uri() .'/vendor/css/animate.min.css' );
    wp_enqueue_style( 'animate-css');
    

}

function topforum_scripts () {
    wp_enqueue_script('jquery');
    wp_register_script( 'slick', get_template_directory_uri() .'/assets/slick/slick.min.js', array(), null, true);
    wp_enqueue_script( 'slick');
    wp_register_script( 'topforum-scripts', get_template_directory_uri() .'/assets/js/scripts.js', array(), null, true);
    wp_enqueue_script( 'topforum-scripts');

    
}

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails');
add_theme_support( 'menus');




?>