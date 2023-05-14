<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ajima_widgets_init() {
    $sidebar_args['sidebar'] = array(
        'name'          => __( 'Sidebar', 'ajima' ),
        'id'            => 'sidebar-1',
        'description' => __( 'The sidebar will display any widgets that are added to this region.', 'ajima' ),
    );

    $sidebar_args['offcanvas_sidebar'] = array(
        'name'          => __( 'Offcanvas Widget', 'ajima' ),
        'id'            => 'ajima-offcanvas-widget',
        'description' => __( 'Any widgets that are placed in this area will be displayed on the offcanvas sidebar.', 'ajima' ),
    );

    /*Get homepage sidebar option from the customizer*/
    $front_page_enable_sidebar = ajima_get_option('front_page_enable_sidebar');
    if($front_page_enable_sidebar){
        $sidebar_args['homepage_sidebar'] = array(
            'name'        => __( 'Homepage Sidebar', 'ajima' ),
            'id'          => 'home-page-sidebar',
            'description' => __( 'The widgets added to this region will only be visible on the sidebar of the homepage.', 'ajima' ),
        );
    }

    $sidebar_args['above_footer'] = array(
        'name'        => __( 'Footer Fullwidth', 'ajima' ),
        'id'          => 'fullwidth-footer-widgetarea',
        'description' => __( 'Widgets added to this region will appear above the footer.', 'ajima' ),
    );

    /*Get the footer column from the customizer*/
    $footer_column_layout = ajima_get_option('footer_column_layout');
    if($footer_column_layout){
        switch ($footer_column_layout) {
            case "footer_layout_1":
                $footer_column = 4;
                break;
            case "footer_layout_2":
            case "footer_layout_5":
                $footer_column = 3;
                break;
            case "footer_layout_3":
            case "footer_layout_4":
            case "footer_layout_6":
                $footer_column = 2;
                break;
            default:
                $footer_column = 4;
        }
    }else{
        $footer_column = 4;
    }

    $cols = intval( apply_filters( 'ajima_footer_widget_columns', $footer_column ) );

    for ( $j = 1; $j <= $cols; $j++ ) {
        $footer   = sprintf( 'footer_%d', $j );

        $footer_region_name = sprintf( __( 'Footer Column %1$d', 'ajima' ), $j );
        $footer_region_description = sprintf( __( 'Widgets added here will appear in column %1$d of the footer.', 'ajima' ), $j );

        $sidebar_args[ $footer ] = array(
            'name'        => $footer_region_name,
            'id'          => sprintf( 'footer-%d', $j ),
            'description' => $footer_region_description,
        );
    }


    $sidebar_args = apply_filters( 'ajima_sidebar_args', $sidebar_args );

    foreach ( $sidebar_args as $sidebar => $args ) {
        $widget_tags = array(
            'before_widget' => '<div id="%1$s" class="widget ajima-widget %2$s"><div class="widget-content">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        );

        /**
         * Dynamically generated filter hooks. Allow changing widget wrapper and title tags. See example below.
         */
        $filter_hook = sprintf( 'ajima_%s_widget_tags', $sidebar );
        $widget_tags = apply_filters( $filter_hook, $widget_tags );

        if ( is_array( $widget_tags ) ) {
            register_sidebar( $args + $widget_tags );
        }
    }
}
add_action( 'widgets_init', 'ajima_widgets_init' );