<?php
$wp_customize->add_section(
	'dark_mode_options',
	array(
		'title' => __( 'Dark Mode Options', 'ajima' ),
        'panel' => 'ajima_option_panel',
	)
);

/*Enable Dark Mode*/
$wp_customize->add_setting(
	'ajima_options[enable_dark_mode]',
	array(
		'default'           => $default_options['enable_dark_mode'],
		'sanitize_callback' => 'ajima_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	'ajima_options[enable_dark_mode]',
	array(
		'label'   => __( 'Enable Dark Mode', 'ajima' ),
		'section' => 'dark_mode_options',
		'type'    => 'checkbox',
	)
);

/*Enable Dark Mode Switcher*/
$wp_customize->add_setting(
	'ajima_options[enable_dark_mode_switcher]',
	array(
		'default'           => $default_options['enable_dark_mode_switcher'],
		'sanitize_callback' => 'ajima_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	'ajima_options[enable_dark_mode_switcher]',
	array(
		'label'           => __( 'Enable Light/Dark Mode Toggle button', 'ajima' ),
		'section'         => 'dark_mode_options',
		'type'            => 'checkbox',
		'active_callback' => 'ajima_is_dark_mode_enabled',
	)
);

/*Dark Mode Background Color*/
$wp_customize->add_setting(
	'ajima_options[dark_mode_bg_color]',
	array(
		'default'           => $default_options['dark_mode_bg_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'ajima_options[dark_mode_bg_color]',
		array(
			'label'           => __( 'Dark Mode Background Color', 'ajima' ),
			'description'     => __( 'Only choose color that have enough contrast to go with accent color.', 'ajima' ),
			'section'         => 'dark_mode_options',
			'type'            => 'color',
			'active_callback' => 'ajima_is_dark_mode_enabled',
		)
	)
);


/*Dark Mode Text Color*/
$wp_customize->add_setting(
	'ajima_options[dark_mode_text_color]',
	array(
		'default'           => $default_options['dark_mode_text_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'ajima_options[dark_mode_text_color]',
		array(
			'label'           => __( 'Dark Mode Text Color', 'ajima' ),
			'description'     => __( 'Only choose color that have enough contrast to go with Background color.', 'ajima' ),
			'section'         => 'dark_mode_options',
			'type'            => 'color',
			'active_callback' => 'ajima_is_dark_mode_enabled',
		)
	)
);


/*Dark Mode Accent Color*/
$wp_customize->add_setting(
	'ajima_options[dark_mode_accent_color]',
	array(
		'default'           => $default_options['dark_mode_accent_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'ajima_options[dark_mode_accent_color]',
		array(
			'label'           => __( 'Dark Mode Accent Color', 'ajima' ),
			'description'     => __( 'Only choose color that have enough contrast to go with the dark background.', 'ajima' ),
			'section'         => 'dark_mode_options',
			'type'            => 'color',
			'active_callback' => 'ajima_is_dark_mode_enabled',
		)
	)
);
