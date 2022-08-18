<?php

/**
 * Load child theme css and optional scripts
 */
function iv_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'hello-elementor-theme-style' ],
		MONICAS_VERSION
	);

	wp_enqueue_style( 'monicas', get_stylesheet_directory_uri() . '/style.css', array(), MONICAS_VERSION );
}

add_action( 'wp_enqueue_scripts', 'iv_enqueue_scripts', 20 );
