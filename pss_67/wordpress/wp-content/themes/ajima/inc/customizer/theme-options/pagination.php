<?php
$wp_customize->add_section(
    'pagination_options' ,
    array(
        'title' => __( 'Pagination Options', 'ajima' ),
        'panel' => 'ajima_option_panel',
    )
);

/* Pagination Type*/
$wp_customize->add_setting(
    'ajima_options[pagination_type]',
    array(
        'default'           => $default_options['pagination_type'],
        'sanitize_callback' => 'ajima_sanitize_select',
    )
);
$wp_customize->add_control(
    'ajima_options[pagination_type]',
    array(
        'label'       => __( 'Pagination Type', 'ajima' ),
        'section'     => 'pagination_options',
        'type'        => 'select',
        'choices'     => array(
            'default' => __( 'Default (Older / Newer Post)', 'ajima' ),
            'numeric' => __( 'Numeric', 'ajima' ),
            'ajax_load_on_click' => __( 'Load more post on click', 'ajima' ),
            'ajax_load_on_scroll' => __( 'Load more posts on scroll', 'ajima' ),
        ),
    )
);
