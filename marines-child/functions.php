<?php

/**
 * Marines 
 * @package WordPress
 * @since Marne 1.0
 * @uses add_theme_support()
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}




