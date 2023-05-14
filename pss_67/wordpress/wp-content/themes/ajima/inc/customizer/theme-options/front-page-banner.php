<?php
/*Add Home Page Options Panel.*/
$wp_customize->add_panel(
    'theme_home_option_panel',
    array(
        'title' => __( 'Front Page Options', 'ajima' ),
        'description' => __( 'Contains all front page settings', 'ajima'),
        'priority' => 50
    )
);
/**/
$wp_customize->add_section(
    'home_page_banner_option',
    array(
        'title'      => __( 'Front Page Banner Options', 'ajima' ),
        'panel'      => 'theme_home_option_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'ajima_options[enable_banner_section]',
    array(
        'default'           => $default_options['enable_banner_section'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_banner_section]',
    array(
        'label'   => __( 'Enable Banner Section', 'ajima' ),
        'section' => 'home_page_banner_option',
        'type'    => 'checkbox',
    )
);


$wp_customize->add_setting(
    'ajima_options[banner_section_slider_layout]',
    array(
        'default'           => $default_options['banner_section_slider_layout'],
        'sanitize_callback' => 'ajima_sanitize_radio',
    )
);
$wp_customize->add_control(
    new Ajima_Radio_Image_Control(
        $wp_customize,
        'ajima_options[banner_section_slider_layout]',
        array(
            'label' => __( 'Banner Slider Layout', 'ajima' ),
            'section' => 'home_page_banner_option',
            'choices' => ajima_get_slider_layouts()
        )
    )
);


$wp_customize->add_setting(
    'ajima_options[number_of_slider_post]',
    array(
        'default'           => $default_options['number_of_slider_post'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[number_of_slider_post]',
    array(
        'label'       => __( 'Post In Slider', 'ajima' ),
        'section'     => 'home_page_banner_option',
        'type'        => 'select',
        'choices'     => array(
            '3' => __( '3', 'ajima' ),
            '4' => __( '4', 'ajima' ),
            '5' => __( '5', 'ajima' ),
            '6' => __( '6', 'ajima' ),
        ),
    )
);


$wp_customize->add_setting(
    'ajima_options[slider_post_content_alignment]',
    array(
        'default'           => $default_options['slider_post_content_alignment'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[slider_post_content_alignment]',
    array(
        'label'       => __( 'Slider Content Alignment', 'ajima' ),
        'section'     => 'home_page_banner_option',
        'type'        => 'select',
        'choices'     => array(
            'text-right' => __( 'Align Right', 'ajima' ),
            'text-center' => __( 'Align Center', 'ajima' ),
            'text-left' => __( 'Align Left', 'ajima' ),
        ),
    )
);

$wp_customize->add_setting(
    'ajima_options[banner_section_cat]',
    array(
        'default'           => $default_options['banner_section_cat'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[banner_section_cat]',
    array(
        'label'   => __( 'Choose Banner Category', 'ajima' ),
        'section' => 'home_page_banner_option',
            'type'        => 'select',
        'choices'     => ajima_post_category_list(),
    )
);

$wp_customize->add_setting(
    'ajima_options[enable_banner_post_description]',
    array(
        'default'           => $default_options['enable_banner_post_description'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_banner_post_description]',
    array(
        'label'   => __( 'Enable Post Description', 'ajima' ),
        'section' => 'home_page_banner_option',
        'type'    => 'checkbox',
    )
);

$wp_customize->add_setting(
    'ajima_options[enable_banner_cat_meta]',
    array(
        'default'           => $default_options['enable_banner_cat_meta'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_banner_cat_meta]',
    array(
        'label'   => __( 'Enable Category Meta', 'ajima' ),
        'section' => 'home_page_banner_option',
        'type'    => 'checkbox',
    )
);


$wp_customize->add_setting(
    'ajima_options[enable_banner_author_meta]',
    array(
        'default'           => $default_options['enable_banner_author_meta'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_banner_author_meta]',
    array(
        'label'   => __( 'Enable author Meta', 'ajima' ),
        'section' => 'home_page_banner_option',
        'type'    => 'checkbox',
    )
);


$wp_customize->add_setting(
    'ajima_options[enable_banner_date_meta]',
    array(
        'default'           => $default_options['enable_banner_date_meta'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_banner_date_meta]',
    array(
        'label'   => __( 'Enable Date On Banner', 'ajima' ),
        'section' => 'home_page_banner_option',
        'type'    => 'checkbox',
    )
);