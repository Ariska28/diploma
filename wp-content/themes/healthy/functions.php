<?php 
add_action( 'wp_enqueue_scripts', 'healthy_style');
add_action( 'wp_enqueue_scripts', 'healthy_script');

function healthy_style() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/builder/public/styles/style.min.css');
	wp_enqueue_style( 'style', get_stylesheet_uri());
}

function healthy_script() {
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/builder/public/js/scripts.js');
}