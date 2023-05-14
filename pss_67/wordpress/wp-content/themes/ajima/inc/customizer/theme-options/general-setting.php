<?php
/*Header Options*/
$wp_customize->add_section(
    'general_settings' ,
    array(
        'title' => __( 'General Settings', 'ajima' ),
        'panel' => 'ajima_option_panel',
    )
);

/*Show Preloader*/
$wp_customize->add_setting(
    'ajima_options[show_lightbox_image]',
    array(
        'default'           => $default_options['show_lightbox_image'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[show_lightbox_image]',
    array(
        'label'    => __( 'Show LightBox Image', 'ajima' ),
        'section'  => 'general_settings',
        'type'     => 'checkbox',
    )
);


$wp_customize->add_setting(
    'ajima_options[enable_logo_transparent_bg]',
    array(
        'default'           => $default_options['enable_logo_transparent_bg'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_logo_transparent_bg]',
    array(
        'label'    => __( 'Remove Background from Site Identity', 'ajima' ),
        'section'  => 'title_tagline',
        'type'     => 'checkbox',
    )
);
/* Footer Background Color*/
$wp_customize->add_setting(
    'ajima_options[site_text_color]',
    array(
        'default' => $default_options['site_text_color'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'ajima_options[site_text_color]',
        array(
            'label' => __('Site Title Text Color', 'ajima'),
            'section' => 'title_tagline',
            'type' => 'color',
        )
    )
);