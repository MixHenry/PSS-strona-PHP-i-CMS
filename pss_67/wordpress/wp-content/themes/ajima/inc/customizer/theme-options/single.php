<?php

$wp_customize->add_section(
    'single_options' ,
    array(
        'title' => __( 'Single Options', 'ajima' ),
        'panel' => 'ajima_option_panel',
    )
);

/* Global Layout*/
$wp_customize->add_setting(
    'ajima_options[single_sidebar_layout]',
    array(
        'default'           => $default_options['single_sidebar_layout'],
        'sanitize_callback' => 'ajima_sanitize_radio',
    )
);
$wp_customize->add_control(
    new Ajima_Radio_Image_Control(
        $wp_customize,
        'ajima_options[single_sidebar_layout]',
        array(
            'label' => __( 'Single Sidebar Layout', 'ajima' ),
            'section' => 'single_options',
            'choices' => ajima_get_general_layouts()
        )
    )
);

// Hide Side Bar on Mobile
$wp_customize->add_setting(
    'ajima_options[hide_single_sidebar_mobile]',
    array(
        'default'           => $default_options['hide_single_sidebar_mobile'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[hide_single_sidebar_mobile]',
    array(
        'label'       => __( 'Hide Single Sidebar on Mobile', 'ajima' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'ajima_section_seperator_single_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Ajima_Seperator_Control(
        $wp_customize,
        'ajima_section_seperator_single_1',
        array(
            'settings' => 'ajima_section_seperator_single_1',
            'section'       => 'single_options',
        )
    )
);

/* Post Meta */
$wp_customize->add_setting(
    'ajima_options[single_post_meta]',
    array(
        'default'           => $default_options['single_post_meta'],
        'sanitize_callback' => 'ajima_sanitize_checkbox_multiple',
    )
);
$wp_customize->add_control(
    new Ajima_Checkbox_Multiple(
        $wp_customize,
        'ajima_options[single_post_meta]',
        array(
            'label' => __( 'Single Post Meta', 'ajima' ),
            'description'   => __( 'Choose the post meta you want to be displayed on post detail page', 'ajima' ),
            'section' => 'single_options',
            'choices' => array(
                'author' => __( 'Author', 'ajima' ),
                'date' => __( 'Date', 'ajima' ),
                'comment' => __( 'Comment', 'ajima' ),
                'category' => __( 'Category', 'ajima' ),
                'tags' => __( 'Tags', 'ajima' ),
            )
        )
    )
);


$wp_customize->add_setting(
    'ajima_section_seperator_single_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Ajima_Seperator_Control( 
        $wp_customize,
        'ajima_section_seperator_single_2',
        array(
            'settings' => 'ajima_section_seperator_single_2',
            'section'       => 'single_options',
        )
    )
);

/*Show Author Info Box
*-------------------------------*/
$wp_customize->add_setting(
    'ajima_options[show_author_info]',
    array(
        'default'           => $default_options['show_author_info'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[show_author_info]',
    array(
        'label'    => __( 'Show Author Info Box', 'ajima' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'ajima_section_seperator_single_3',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Ajima_Seperator_Control(
        $wp_customize,
        'ajima_section_seperator_single_3',
        array(
            'settings' => 'ajima_section_seperator_single_3',
            'section'       => 'single_options',
        )
    )
);

/*Show Related Posts
*-------------------------------*/
$wp_customize->add_setting(
    'ajima_options[show_related_posts]',
    array(
        'default'           => $default_options['show_related_posts'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[show_related_posts]',
    array(
        'label'    => __( 'Show Related Posts', 'ajima' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);

/*Related Posts Text.*/
$wp_customize->add_setting(
    'ajima_options[related_posts_text]',
    array(
        'default'           => $default_options['related_posts_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'ajima_options[related_posts_text]',
    array(
        'label'    => __( 'Related Posts Text', 'ajima' ),
        'section'  => 'single_options',
        'type'     => 'text',
        'active_callback' => 'ajima_is_related_posts_enabled',
    )
);

/* Number of Related Posts */
$wp_customize->add_setting(
    'ajima_options[no_of_related_posts]',
    array(
        'default'           => $default_options['no_of_related_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'ajima_options[no_of_related_posts]',
    array(
        'label'       => __( 'Number of Related Posts', 'ajima' ),
        'section'     => 'single_options',
        'type'        => 'number',
        'active_callback' => 'ajima_is_related_posts_enabled',
    )
);

/*Related Posts Orderby*/
$wp_customize->add_setting(
    'ajima_options[related_posts_orderby]',
    array(
        'default'           => $default_options['related_posts_orderby'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[related_posts_orderby]',
    array(
        'label'       => __( 'Orderby', 'ajima' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices' => array(
            'date' => __('Date', 'ajima'),
            'id' => __('ID', 'ajima'),
            'title' => __('Title', 'ajima'),
            'rand' => __('Random', 'ajima'),
        ),
        'active_callback' => 'ajima_is_related_posts_enabled',
    )
);

/*Related Posts Order*/
$wp_customize->add_setting(
    'ajima_options[related_posts_order]',
    array(
        'default'           => $default_options['related_posts_order'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[related_posts_order]',
    array(
        'label'       => __( 'Order', 'ajima' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices' => array(
            'asc' => __('ASC', 'ajima'),
            'desc' => __('DESC', 'ajima'),
        ),
        'active_callback' => 'ajima_is_related_posts_enabled',
    )
);

$wp_customize->add_setting(
    'ajima_section_seperator_single_4',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new Ajima_Seperator_Control(
        $wp_customize,
        'ajima_section_seperator_single_4',
        array(
            'settings' => 'ajima_section_seperator_single_4',
            'section'       => 'single_options',
        )
    )
);
/*Show Author Posts
*-----------------------------------------*/
$wp_customize->add_setting(
    'ajima_options[show_author_posts]',
    array(
        'default'           => $default_options['show_author_posts'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[show_author_posts]',
    array(
        'label'    => __( 'Show Author Posts', 'ajima' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);

/*Author Posts Text.*/
$wp_customize->add_setting(
    'ajima_options[author_posts_text]',
    array(
        'default'           => $default_options['author_posts_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'ajima_options[author_posts_text]',
    array(
        'label'    => __( 'Author Posts Text', 'ajima' ),
        'section'  => 'single_options',
        'type'     => 'text',
        'active_callback' => 'ajima_is_author_posts_enabled',
    )
);

/* Number of Author Posts */
$wp_customize->add_setting(
    'ajima_options[no_of_author_posts]',
    array(
        'default'           => $default_options['no_of_author_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'ajima_options[no_of_author_posts]',
    array(
        'label'       => __( 'Number of Author Posts', 'ajima' ),
        'section'     => 'single_options',
        'type'        => 'number',
        'active_callback' => 'ajima_is_author_posts_enabled',
    )
);

/*Author Posts Orderby*/
$wp_customize->add_setting(
    'ajima_options[author_posts_orderby]',
    array(
        'default'           => $default_options['author_posts_orderby'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[author_posts_orderby]',
    array(
        'label'       => __( 'Orderby', 'ajima' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices' => array(
            'date' => __('Date', 'ajima'),
            'id' => __('ID', 'ajima'),
            'title' => __('Title', 'ajima'),
            'rand' => __('Random', 'ajima'),
        ),
        'active_callback' => 'ajima_is_author_posts_enabled',
    )
);

/*Author Posts Order*/
$wp_customize->add_setting(
    'ajima_options[author_posts_order]',
    array(
        'default'           => $default_options['author_posts_order'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[author_posts_order]',
    array(
        'label'       => __( 'Order', 'ajima' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices' => array(
            'asc' => __('ASC', 'ajima'),
            'desc' => __('DESC', 'ajima'),
        ),
        'active_callback' => 'ajima_is_author_posts_enabled',
    )
);