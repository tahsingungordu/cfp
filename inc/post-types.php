<?php

/**
 * Create experience post type
 */
function cfp_experience_custom_init() {
	register_post_type( 'experience',
		array(
			'labels' => array(
				'name' => __( 'Experiences', 'cfp' ),
				'singular_name' => __( 'Experience', 'cfp' ),
				'add_new_item' => __( 'Add New Experience', 'cfp' )
			),
			'public' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),
			'menu_icon' => 'dashicons-nametag',
			'rewrite'         => array(
				'slug'      => 'experience',
				'with_front'  => false
			),
			'has_archive' => false,
		)
	);
}
add_action('init', 'cfp_experience_custom_init', 10);

/**
 * Create education post type
 */
function cfp_education_custom_init() {
	register_post_type( 'education',
		array(
			'labels' => array(
				'name' => __( 'Educations', 'cfp' ),
				'singular_name' => __( 'Education', 'cfp' ),
				'add_new_item' => __( 'Add New Education', 'cfp' )
			),
			'public' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),
			'menu_icon' => 'dashicons-book',
			'rewrite'         => array(
				'slug'      => 'education',
				'with_front'  => false
			),
			'has_archive' => false,
		)
	);
}
add_action('init', 'cfp_education_custom_init', 11);

/**
 * Create portfolio post type
 */
function cfp_portfolio_custom_init() {
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolios', 'cfp' ),
				'singular_name' => __( 'Portfolio', 'cfp' ),
				'add_new_item' => __( 'Add New Portfolio', 'cfp' )
			),
			'public' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),
			'menu_icon' => 'dashicons-index-card',
			'rewrite'         => array(
				'slug'      => 'portfolio',
				'with_front'  => false
			),
			'has_archive' => false,
		)
	);
}
add_action('init', 'cfp_portfolio_custom_init', 12);