<?php

add_theme_support('menus');

function theme_styles(){
	wp_enqueue_style('theme-css', get_template_directory_uri()."/assets/css/main.min.css");
}
add_action("wp_enqueue_scripts", "theme_styles");


function theme_js() {
	wp_enqueue_script('theme-js', get_template_directory_uri()."/assets/js/main.js", array("jquery"), "", true);
}
add_action("wp_enqueue_scripts", "theme_js");

function theme_menus() {
	register_nav_menus(
		array(
			'main-menu' => 'Main Menu',
			'footer-left' => 'Footer Left',
			'footer-right' => 'Footer Right',
		)
	);
}
add_action('init', 'theme_menus');