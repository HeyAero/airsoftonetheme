<?php

function add_theme_scripts() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    wp_enqueue_style('font-awesome', 'cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script('slider_script', get_template_directory_uri() . '/js/slider.js');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');