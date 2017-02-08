<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since CFP 1.0.0
 */
if ( ! function_exists( 'cfp_setup' ) ) :
function cfp_setup() {

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'cfp' ),
		'social'  => __( 'Social Links Menu', 'cfp' ),
	) );

}
add_action( 'after_setup_theme', 'cfp_setup' );
endif;

/**
 * Theme styles and scripts load
 *
 * @since CFP 1.0.0
 */
function cfp_theme_scripts() {

	wp_enqueue_style( 'cfp-vendor-css', get_template_directory_uri() . '/assets/css/vendor.css' );
	wp_enqueue_style( 'cfp-style-css', get_template_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_script( 'cfp-vendor-js', get_template_directory_uri() . '/assets/js/vendor.js', array(), false, true );
	wp_enqueue_script( 'cfp-scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array(), false, true );

	wp_localize_script( 'jquery', 'cfp_ajax', array(
			'url' => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'cfp-nonce' ),
		)
	);

}
add_action( 'wp_enqueue_scripts', 'cfp_theme_scripts' );