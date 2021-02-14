<?php

/*
 * Blocksy Child theme settings
 * */

function blocksy_child_setup() {
	$path = CURRENT_THEME_PATH . '/languages';
	load_child_theme_textdomain( 'blocksy-child', $path );
}
add_action( 'after_setup_theme', 'blocksy_child_setup' );