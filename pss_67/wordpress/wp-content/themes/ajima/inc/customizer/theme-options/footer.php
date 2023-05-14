<?php
$widgets_link = admin_url( 'widgets.php' );

/*Add footer theme option*/
$wp_customize->add_section(
    'footer_options' ,
    array(
        'title' => __( 'Footer Options', 'ajima' ),
        'panel' => 'ajima_option_panel',
    )
);

$wp_customize->add_setting(
    'ajima_options[upload_footer_bg_image]',
    array(
        'default'           => '',
        'sanitize_callback' => 'ajima_sanitize_image',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'ajima_options[upload_footer_bg_image]',
        array(
            'label'           => __( 'Upload Footer Background Image', 'ajima' ),
            'section'         => 'footer_options',
        )
    )
);


$wp_customize->add_setting(
    'ajima_options[enable_footer_image_overlay]',
    array(
        'default'           => $default_options['enable_footer_image_overlay'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_footer_image_overlay]',
    array(
        'label'    => __( 'Enable Fotter Overlay', 'ajima' ),
        'section'  => 'footer_options',
        'type'     => 'checkbox',
    )
);
/* Footer Background Color*/
$wp_customize->add_setting(
    'ajima_options[footer_bg_color]',
    array(
        'default' => $default_options['footer_bg_color'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'ajima_options[footer_bg_color]',
        array(
            'label' => __('Footer Background Color', 'ajima'),
            'section' => 'footer_options',
            'type' => 'color',
        )
    )
);

$wp_customize->add_setting(
    'ajima_options[enable_footer_social_menu]',
    array(
        'default'           => $default_options['enable_footer_social_menu'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_footer_social_menu]',
    array(
        'label'    => __( 'Enable Social Menu', 'ajima' ),
        'section'  => 'footer_options',
        'type'     => 'checkbox',
    )
);

/*Enable Sticky Menu*/
$wp_customize->add_setting(
    'ajima_options[enable_footer_sticky]',
    array(
        'default'           => $default_options['enable_footer_sticky'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_footer_sticky]',
    array(
        'label'    => __( 'Enable Sticky Footer', 'ajima' ),
        'section'  => 'footer_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'ajima_section_seperator_footer_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Ajima_Seperator_Control(
        $wp_customize,
        'ajima_section_seperator_footer_1',
        array(
            'settings' => 'ajima_section_seperator_footer_1',
            'section' => 'footer_options',
        )
    )
);

/*Option to choose footer column layout*/
$wp_customize->add_setting(
    'ajima_options[footer_column_layout]',
    array(
        'default'           => $default_options['footer_column_layout'],
        'sanitize_callback' => 'ajima_sanitize_radio',
    )
);

$wp_customize->add_control(
    new Ajima_Radio_Image_Control(
        $wp_customize,
        'ajima_options[footer_column_layout]',
        array(
            'label'       => __( 'Footer Column Layout', 'ajima' ),
            'description' => sprintf( __( 'Footer widgetareas used will vary based on the footer column layout chosen. Head over to  <a href="%s" target="_blank">widgets</a> to see which footer widgetareas are used if you change the layout.', 'ajima' ), $widgets_link ),
            'section'     => 'footer_options',
            'choices' => ajima_get_footer_layouts()
        )
    )
);

$wp_customize->add_setting(
    'ajima_section_seperator_footer_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Ajima_Seperator_Control(
        $wp_customize,
        'ajima_section_seperator_footer_2',
        array(
            'settings' => 'ajima_section_seperator_footer_2',
            'section' => 'footer_options',
        )
    )
);
/**/


/*Copyright Text.*/
$wp_customize->add_setting(
    'ajima_options[copyright_text]',
    array(
        'default'           => $default_options['copyright_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'ajima_options[copyright_text]',
    array(
        'label'    => __( 'Copyright Text', 'ajima' ),
        'section'  => 'footer_options',
        'type'     => 'text',
    )
);

/*Todays Date Format*/
$wp_customize->add_setting(
    'ajima_options[copyright_date_format]',
    array(
        'default'           => $default_options['copyright_date_format'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'ajima_options[copyright_date_format]',
    array(
        'label'    => __( 'Todays Date Format', 'ajima' ),
        'description' => sprintf( wp_kses( __( '<a href="%s" target="_blank">Date and Time Formatting Documentation</a>.', 'ajima' ), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( 'https://wordpress.org/support/article/formatting-date-and-time' ) ),
        'section'  => 'footer_options',
        'type'     => 'text',
    )
);

/*Enable footer credit*/
$wp_customize->add_setting(
    'ajima_options[enable_footer_credit]',
    array(
        'default'           => $default_options['enable_footer_credit'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_footer_credit]',
    array(
        'label'    => __( 'Enable Footer Credit', 'ajima' ),
        'section'  => 'footer_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'ajima_section_seperator_footer_3',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Ajima_Seperator_Control(
        $wp_customize,
        'ajima_section_seperator_footer_3',
        array(
            'settings' => 'ajima_section_seperator_footer_3',
            'section' => 'footer_options',
        )
    )
);
/*Enable Footer Nav*/
$wp_customize->add_setting(
    'ajima_options[enable_footer_nav]',
    array(
        'default'           => $default_options['enable_footer_nav'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_footer_nav]',
    array(
        'label'    => __( 'Show Footer Nav Menu', 'ajima' ),
        'description' => sprintf( __( 'You can add/edit footer nav menu from <a href="%s">here</a>.', 'ajima' ), "javascript:wp.customize.control( 'nav_menu_locations[footer-menu]' ).focus();" ),
        'section'  => 'footer_options',
        'type'     => 'checkbox',
    )
);

/*Enable Footer Social Nav*/
$wp_customize->add_setting(
    'ajima_options[enable_footer_social_nav]',
    array(
        'default'           => $default_options['enable_footer_social_nav'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_footer_social_nav]',
    array(
        'label'    => __( 'Show Social Nav Menu in Footer', 'ajima' ),
        'description' => sprintf( __( 'You can add/edit social nav menu from <a href="%s">here</a>.', 'ajima' ), "javascript:wp.customize.control( 'nav_menu_locations[social-menu]' ).focus();" ),
        'section'  => 'footer_options',
        'type'     => 'checkbox',
    )
);

/*Enable scroll to top*/
$wp_customize->add_setting(
    'ajima_options[enable_scroll_to_top]',
    array(
        'default'           => $default_options['enable_scroll_to_top'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_scroll_to_top]',
    array(
        'label'    => __( 'Show Scroll to top', 'ajima' ),
        'section'  => 'footer_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'ajima_section_seperator_footer_4',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Ajima_Seperator_Control(
        $wp_customize,
        'ajima_section_seperator_footer_4',
        array(
            'settings' => 'ajima_section_seperator_footer_4',
            'section' => 'footer_options',
        )
    )
);

$wp_customize->add_setting(
    'ajima_premium_notice',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new Ajima_Premium_Notice_Control( 
        $wp_customize,
        'ajima_premium_notice',
        array(
            'label'      => esc_html__( 'Footer Option', 'ajima' ),
            'settings' => 'ajima_premium_notice',
            'section'       => 'footer_options',
        )
    )
);