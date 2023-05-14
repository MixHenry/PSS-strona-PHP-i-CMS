<?php
$widgets_link = admin_url( 'widgets.php' );

/*Add footer theme option*/
$wp_customize->add_section(
    'read_time_options' ,
    array(
        'title' => __( 'Read Time Options', 'ajima' ),
        'panel' => 'ajima_option_panel',
    )
);
$wp_customize->add_setting(
    'ajima_options[enable_read_time_option]',
    array(
        'default'           => $default_options['enable_read_time_option'],
        'sanitize_callback' => 'ajima_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ajima_options[enable_read_time_option]',
    array(
        'label'       => __( 'Enable Read Time Option', 'ajima' ),
        'section'     => 'read_time_options',
        'type'        => 'checkbox',
    )
);

/*Display read time in*/
$wp_customize->add_setting(
    'ajima_options[display_read_time_in]',
    array(
        'default'           => $default_options['display_read_time_in'],
        'sanitize_callback' => 'ajima_sanitize_checkbox_multiple',
    )
);
$wp_customize->add_control(
    new Ajima_Checkbox_Multiple(
        $wp_customize,
        'ajima_options[display_read_time_in]',
        array(
            'label' => __( 'Display Read Time', 'ajima' ),
            'section' => 'read_time_options',
            'choices' => array(
                'home-page' => __('Homepage', 'ajima'),
                'single-page' => __('Single Page', 'ajima'),
                'archive-page' => __('Archive Page', 'ajima'),
            )
        )
    )
);


$wp_customize->add_setting(
    'ajima_options[words_per_minute]',
    array(
        'default' => $default_options['words_per_minute'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'ajima_options[words_per_minute]',
    array(
        'label' => __('Words Per Minute', 'ajima'),
        'description' => __('Number of Words per minut', 'ajima'),
        'section' => 'read_time_options',
        'type' => 'number',
        'input_attrs' => array('min' => 1, 'max' => 300, 'style' => 'width: 150px;'),
    )
);
