<?php
/**
 * Theme setup and assets.
 *
 * @package SalvationAuto
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function salvation_auto_enqueue_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'salvation-auto-style',
		get_stylesheet_uri(),
		array(),
		$theme_version
	);

	wp_enqueue_script(
		'salvation-auto-app',
		get_template_directory_uri() . '/assets/js/app.js',
		array(),
		$theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'salvation_auto_enqueue_assets' );


function salvation_auto_setup() {

add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'salvation-auto'),
    ));

}

add_action('after_setup_theme', 'salvation_auto_setup');
