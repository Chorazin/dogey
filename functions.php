<?php

if ( ! defined( 'DOGEY_DIR_PATH' ) ) {
	define( 'DOGEY_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'DOGEY_DIR_URI' ) ) {
	define( 'DOGEY_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'DOGEY_BUILD_URI' ) ) {
	define( 'DOGEY_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'DOGEY_BUILD_PATH' ) ) {
	define( 'DOGEY_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'DOGEY_BUILD_JS_URI' ) ) {
	define( 'DOGEY_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'DOGEY_BUILD_JS_DIR_PATH' ) ) {
	define( 'DOGEY_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'DOGEY_BUILD_IMG_URI' ) ) {
	define( 'DOGEY_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'DOGEY_BUILD_CSS_URI' ) ) {
	define( 'DOGEY_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'DOGEY_BUILD_CSS_DIR_PATH' ) ) {
	define( 'DOGEY_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'DOGEY_BUILD_LIB_URI' ) ) {
	define( 'DOGEY_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

add_action( 'wp_enqueue_scripts', 'dogey_register_styles' );
function dogey_register_styles() {
	wp_register_style( 'main-css', DOGEY_BUILD_CSS_URI . '/editor.css', [], filemtime( DOGEY_BUILD_CSS_DIR_PATH . '/editor.css' ) , 'all' );
	wp_enqueue_style( 'main-css' );
}

function register_menus() {
	$locations = array(
			'primary_menu' => "main_nav_links",
			'footer_menu' => "footer_links"
	);

	register_nav_menus($locations);
};
add_action('init', 'register_menus');
