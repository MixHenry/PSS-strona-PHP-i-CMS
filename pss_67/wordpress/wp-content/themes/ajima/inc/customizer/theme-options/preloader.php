<?php
/*Preloader Options*/
$wp_customize->add_section(
    'preloader_options' ,
    array(
        'title' => __( 'Preloader Options', 'ajima' ),
        'panel' => 'ajima_option_panel',
    )
);

/*Show Preloader*/
$wp_customize->add_setting(
    'ajima_options[show_preloader]',
    array(
        'default'           => $default_options['show_preloader'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[show_preloader]',
    array(
        'label'    => __( 'Show Preloader', 'ajima' ),
        'section'  => 'preloader_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'ajima_options[preloader_style]',
    array(
        'default'           => $default_options['preloader_style'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[preloader_style]',
    array(
        'label'       => __( 'Preloader Style', 'ajima' ),
        'section'     => 'preloader_options',
        'type'        => 'select',
        'choices'     => array(
            'theme-preloader-spinner-1' => __( 'Style 1', 'ajima' ),
            'theme-preloader-spinner-2' => __( 'Style 2', 'ajima' ),
        ),
        'active_callback' => 'ajima_is_show_preloader',

    )
);
