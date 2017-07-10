<?php


function theme_styles(){
	wp_enqueue_style('theme-css', get_template_directory_uri()."/assets/css/main.min.css");
}
add_action("wp_enqueue_scripts", "theme_styles");


function theme_js() {
	wp_enqueue_script('theme-js', get_template_directory_uri()."/assets/js/main.js", array("jquery"), "", true);
}
add_action("wp_enqueue_scripts", "theme_js");
