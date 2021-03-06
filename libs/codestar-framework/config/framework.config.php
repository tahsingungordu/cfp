<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cfp-options',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'CFP <small>CV for programmers</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'overwiew',
  'title'       => 'Overview',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    array(
      'id'        => 'skin',
      'type'      => 'image_select',
      'title'     => 'Select Skin',
      'options'   => array(
        'theme-dark'  => get_template_directory_uri() . '/assets/images/skins/theme-dark.jpg',
        'theme-blues' => get_template_directory_uri() . '/assets/images/skins/theme-blues.jpg',
        'theme-light' => get_template_directory_uri() . '/assets/images/skins/theme-light.jpg',
        'theme-pinks' => get_template_directory_uri() . '/assets/images/skins/theme-pinks.jpg',
      ),
    ),

  ), // end: fields
);

// ------------------------------
// a option personal information   -
// ------------------------------
$options[] = array(
	'name'        => 'personal_information',
	'title'       => 'Personal Information',
	'icon'        => 'fa fa-user',
	'fields'      => array(

		array(
			'id'        => 'personal',
			'type'      => 'fieldset',
			'title'     => 'Personal',
			'fields'    => array(

				array(
					'id'    => 'photo',
					'type'  => 'image',
					'title' => 'Upload Photo',
					'add_title' => 'Choose or upload photos',
				),

				array(
					'id'    => 'name',
					'type'  => 'text',
					'title' => 'Full Name',
				),

				array(
					'id'    => 'job_description',
					'type'  => 'text',
					'title' => 'Job Description',
				),

				array(
					'id'    => 'birth',
					'type'  => 'text',
					'title' => 'Birth',
				),

				array(
					'id'    => 'place_of_birth',
					'type'  => 'text',
					'title' => 'Place of Birth',
				),

				array(
					'id'    => 'military_service',
					'type'  => 'switcher',
					'title' => 'Military Service',
					'default' => false
				),

				array(
					'id'    => 'marriage',
					'type'  => 'switcher',
					'title' => 'Marriage',
					'default' => false
				),

				array(
					'id'    => 'driving_licence',
					'type'  => 'switcher',
					'title' => 'Driving Licence',
					'default' => false
				),

			),
		),

		array(
			'id'        => 'contact',
			'type'      => 'fieldset',
			'title'     => 'Contact',
			'fields'    => array(

				array(
					'id'    => 'address',
					'type'  => 'textarea',
					'title' => 'Address',
				),

				array(
					'id'    => 'fixed_phone',
					'type'  => 'text',
					'title' => 'Fixed Phone',
				),

				array(
					'id'    => 'mobile_phone',
					'type'  => 'text',
					'title' => 'Mobile Phone',
				),

				array(
					'id'    => 'email',
					'type'  => 'text',
					'title' => 'Email',
				),

				array(
					'id'    => 'web_site',
					'type'  => 'text',
					'title' => 'Web Site',
				),

			),
		),

	)
);

// ------------------------------
// license                      -
// ------------------------------
$options[]   = array(
  'name'     => 'license_section',
  'title'    => 'License',
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => '100% GPL License, Yes it is free!'
    ),
    array(
      'type'    => 'content',
      'content' => 'Codestar Framework is <strong>free</strong> to use both personal and commercial. If you used commercial, <strong>please credit</strong>. Read more about <a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU License</a>',
    ),

  )
);

CSFramework::instance( $settings, $options );
