<?php
/*
 * Blocksy Child theme enqueue styles and scripts
 * */

function blocksy_child_enqueue_assets(){
	wp_enqueue_style( 'blocksy-parent', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'blocksy-child', get_stylesheet_uri() );

	// jquery theme script
	wp_enqueue_script(
		'blocksy-child-jq',
		CURRENT_THEME_PATH . '/dist/assets/js/child-jq.min.js',
		['jquery'],
		false,
		true
	);

	// vanilla js theme script
	wp_enqueue_script(
		'blocksy-child-js',
		CURRENT_THEME_PATH . '/dist/assets/js/child-scripts.min.js',
		false,
		false,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'blocksy_child_enqueue_assets' );