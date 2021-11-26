<?php
// Load child stylesheet

add_action( 'wp_enqueue_scripts', 'direo_child_theme_styles' );
function direo_child_theme_styles() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'direo-style' ), null );
	} else {
		wp_enqueue_style( 'parent-style', get_parent_theme_file_uri( '/style.css' ) );
	}
}
