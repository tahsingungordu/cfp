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

    // begin: a field
    array(
      'id'      => 'text_1',
      'type'    => 'text',
      'title'   => 'Text',
    ),
    // end: a field

    array(
      'id'      => 'color_picker_1',
      'type'    => 'color_picker',
      'title'   => 'Color Picker',
      'default' => '#3498db',
    ),

    array(
      'id'        => 'image_select_1',
      'type'      => 'image_select',
      'title'     => 'Image Select',
      'options'   => array(
        'value-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'value-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'value-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'value-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'value-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'This is info notice field for your highlight sentence.',
    ),

    array(
      'id'      => 'background_1',
      'type'    => 'background',
      'title'   => 'Background',
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
// donate                       -
// ------------------------------
$options[]   = array(
  'name'     => 'donate_section',
  'title'    => 'Donate',
  'icon'     => 'fa fa-heart',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => 'You Guys!'
    ),

    array(
      'type'    => 'content',
      'content' => 'If you want to see more functions and features for this framework, you can buy me a coffee. I need a lot of it when I am creating new stuff for you. Thank you in advance.',
    ),

    array(
      'type'    => 'content',
      'content' => '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=56MAQNCNELP8J" target="_blank"><img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Donate" /></a>',
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
