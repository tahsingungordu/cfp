<?php

/**
 * Custom meta boxes for post type
 *
 * @since CFP 1.0
 */
add_action( 'cmb2_admin_init', 'cfp_custom_meta_boxes' );
function cfp_custom_meta_boxes() {
	$prefix = '_cfp_';
	/**
	 * Experience Meta Boxes
	 *
	 * @since CFP 1.0
	 */
	$experience_meta_boxes = new_cmb2_box( array (
		'id'           => $prefix . 'experience_meta_box',
		'title'        => 'Experience Detail',
		'object_types' => array ( 'experience' )
	) );
	$experience_meta_boxes->add_field( array (
		'name'    => 'Start Date',
		'desc'    => 'Month Year (July 2010)',
		'id'      => $prefix . 'experience_start_date',
		'type'    => 'text_medium'
	) );
	$experience_meta_boxes->add_field( array (
		'name'    => 'End Date',
		'desc'    => 'Month Year (March 2012)',
		'id'      => $prefix . 'experience_end_date',
		'type'    => 'text_medium'
	) );
	$experience_meta_boxes->add_field( array (
		'name'    => 'Company Position',
		'desc'    => 'Example: Php Developer, Front-end Developer',
		'id'      => $prefix . 'experience_company_position',
		'type'    => 'text'
	) );
	$experience_meta_boxes->add_field( array (
		'name'    => 'Row',
		'id'      => $prefix . 'experience_row',
		'type'    => 'text_small'
	) );
	/**
	 * Education Meta Boxes
	 *
	 * @since CFP 1.0
	 */
	$education_meta_boxes = new_cmb2_box( array (
		'id'           => $prefix . 'education_meta_box',
		'title'        => 'Education Detail',
		'object_types' => array ( 'education' )
	) );
	$education_meta_boxes->add_field( array (
		'name'    => 'Start Year',
		'desc'    => 'Year (2010)',
		'id'      => $prefix . 'education_start_date',
		'type'    => 'text_medium'
	) );
	$education_meta_boxes->add_field( array (
		'name'    => 'End Year',
		'desc'    => 'Year (2014)',
		'id'      => $prefix . 'education_end_date',
		'type'    => 'text_medium'
	) );
	$education_meta_boxes->add_field( array (
		'name'    => 'Department',
		'desc'    => 'Example: Masters of Science, Computer programming',
		'id'      => $prefix . 'education_department',
		'type'    => 'text'
	) );
	$education_meta_boxes->add_field( array (
		'name'    => 'Row',
		'desc'    => 'Sort DESC',
		'id'      => $prefix . 'education_row',
		'type'    => 'text_small'
	) );
	/**
	 * Portfolio Meta Boxes
	 *
	 * @since CFP 1.0
	 */
	$portfolio_meta_boxes = new_cmb2_box( array (
		'id'           => $prefix . 'portfolio_meta_box',
		'title'        => 'Portfolio Detail',
		'object_types' => array ( 'portfolio' )
	) );
	$portfolio_meta_boxes->add_field( array (
		'name'    => 'Portfolio Url',
		'id'      => $prefix . 'portfolio_url',
		'type'    => 'text_url',
		'protocols' => array( 'http', 'https' )
	) );
	$portfolio_meta_boxes->add_field( array(
		'name' => 'Portfolio Images',
		'id'   => $prefix . 'portfolio_images',
		'type' => 'file_list'
	) );
	/**
	 * Metabox to add fields to skills
	 *
	 * @since CFP 1.0
	 */
	$skill_term = new_cmb2_box( array(
		'id'               => $prefix . 'cat_skill',
		'title'            => 'Skill Metabox',
		'object_types'     => array( 'term' ),
		'taxonomies'       => array( 'cat_skill' ),
	) );

	$skill_term->add_field( array(
		'name'     => esc_html__( 'Additional Details', 'cmb2' ),
		'id'       => $prefix . 'cat_skill_additional_details',
		'type'     => 'title',
		'on_front' => false,
	) );
	$skill_term->add_field( array (
		'name'    => 'Percentage Value',
		'desc'    => 'Enter a number between 1 and 100.',
		'id'      => $prefix . 'cat_skill_percentage',
		'type'    => 'text_small'
	) );
	$skill_term->add_field( array (
		'name'    => 'Row',
		'id'      => $prefix . 'cat_skill_row',
		'type'    => 'text_small'
	) );
}