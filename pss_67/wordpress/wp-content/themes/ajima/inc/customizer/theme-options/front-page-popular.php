<?php
/**/
$wp_customize->add_section(
    'home_page_popular_option',
    array(
        'title'      => __( 'Front Page Popular Options', 'ajima' ),
        'panel'      => 'theme_home_option_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'ajima_options[enable_popular_section]',
    array(
        'default'           => $default_options['enable_popular_section'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_popular_section]',
    array(
        'label'   => __( 'Enable Popular Section', 'ajima' ),
        'section' => 'home_page_popular_option',
        'type'    => 'checkbox',
    )
);


$wp_customize->add_setting(
    'ajima_options[popular_section_post_title]',
    array(
        'default'           => $default_options['popular_section_post_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'ajima_options[popular_section_post_title]',
    array(
        'label'    => __( 'Popular section Title', 'ajima' ),
        'section'  => 'home_page_popular_option',
        'type'     => 'text',
    )
);


$wp_customize->add_setting(
    'ajima_options[number_of_popular_post]',
    array(
        'default'           => $default_options['number_of_popular_post'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[number_of_popular_post]',
    array(
        'label'       => __( 'Post In Popular section', 'ajima' ),
        'section'     => 'home_page_popular_option',
        'type'        => 'select',
        'choices'     => array(
            '4' => __( '4', 'ajima' ),
            '5' => __( '5', 'ajima' ),
            '6' => __( '6', 'ajima' ),
            '7' => __( '7', 'ajima' ),
        ),
    )
);


$wp_customize->add_setting(
    'ajima_options[popular_section_cat]',
    array(
        'default'           => $default_options['popular_section_cat'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[popular_section_cat]',
    array(
        'label'   => __( 'Choose Popular Category', 'ajima' ),
        'section' => 'home_page_popular_option',
            'type'        => 'select',
        'choices'     => ajima_post_category_list(),
    )
);

$wp_customize->add_setting(
    'ajima_options[enable_popular_cat_meta]',
    array(
        'default'           => $default_options['enable_popular_cat_meta'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_popular_cat_meta]',
    array(
        'label'   => __( 'Enable Category Meta', 'ajima' ),
        'section' => 'home_page_popular_option',
        'type'    => 'checkbox',
    )
);


$wp_customize->add_setting(
    'ajima_options[enable_popular_author_meta]',
    array(
        'default'           => $default_options['enable_popular_author_meta'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_popular_author_meta]',
    array(
        'label'   => __( 'Enable author Meta', 'ajima' ),
        'section' => 'home_page_popular_option',
        'type'    => 'checkbox',
    )
);


$wp_customize->add_setting(
    'ajima_options[enable_popular_date_meta]',
    array(
        'default'           => $default_options['enable_popular_date_meta'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_popular_date_meta]',
    array(
        'label'   => __( 'Enable Date On Popular', 'ajima' ),
        'section' => 'home_page_popular_option',
        'type'    => 'checkbox',
    )
);