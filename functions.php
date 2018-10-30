<?php

function enqueue_styles() {
	wp_enqueue_style( 'theme1-style', get_stylesheet_uri());
	wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic');
	wp_enqueue_style( 'font-style');
	
}
add_action('wp_enqueue_scripts', 'enqueue_styles');



if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}


