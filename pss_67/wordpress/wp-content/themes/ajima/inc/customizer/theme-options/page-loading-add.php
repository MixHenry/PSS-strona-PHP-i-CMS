<?php
/*Add header add option*/
$wp_customize->add_section(
    'site_add_options' ,
    array(
        'title' => __( 'Welcome Screen Advertisement', 'ajima' ),
        'panel' => 'ajima_option_panel',
    )
);


/*Enable advertisement*/
$wp_customize->add_setting(
    'ajima_options[ed_header_ad]',
    array(
        'default'           => $default_options['ed_header_ad'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[ed_header_ad]',
    array(
        'label'    => __( 'Enable Advertisement', 'ajima' ),
        'section'  => 'site_add_options',
        'type'     => 'checkbox',
    )
);


$wp_customize->add_setting(
    'ajima_options[ed_header_type]',
    array(
        'default'           => $default_options['ed_header_type'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[ed_header_type]',
    array(
        'label'       => __( 'Advertisement Design Layout', 'ajima' ),
        'section'     => 'site_add_options',
        'type'        => 'select',
        'choices'     => array(
            'welcome-banner-full-viewport'  => esc_html__( 'Full Viewport', 'ajima' ),
            'welcome-banner-default'  => esc_html__( 'Default', 'ajima' ),
            'welcome-banner-contained'  => esc_html__( 'Contained', 'ajima' ),
        ),
    )
);

$wp_customize->add_setting(
    'ajima_options[advertisement_section_title]',
    array(
        'default'           => $default_options['advertisement_section_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'ajima_options[advertisement_section_title]',
    array(
        'label'    => __( 'Welcome Advertisement Message', 'ajima' ),
        'section'  => 'site_add_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'ajima_options[upload_add_image]',
    array(
        'default'           => '',
        'sanitize_callback' => 'ajima_sanitize_image',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'ajima_options[upload_add_image]',
        array(
            'label'           => __( 'Upload Advertisement Image', 'ajima' ),
            'section'         => 'site_add_options',
        )
    )
);

$wp_customize->add_setting(
    'ajima_options[ad_banner_link]',
    array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'ajima_options[ad_banner_link]',
    array(
        'label'           => __( 'Advertisement Link', 'ajima' ),
        'section'         => 'site_add_options',
        'type'            => 'text',
        'description'     => __( 'Leave empty if you don\'t want the image to have a link', 'ajima' ),
    )
);
