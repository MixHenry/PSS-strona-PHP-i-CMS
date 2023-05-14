<?php

/* Theme Widget sidebars. */
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/widgets/widget-base/widgetbase.php';

require get_template_directory() . '/inc/widgets/recent-widget.php';
require get_template_directory() . '/inc/widgets/social-widget.php';
require get_template_directory() . '/inc/widgets/author-widget.php';
require get_template_directory() . '/inc/widgets/newsletter-widget.php';
require get_template_directory() . '/inc/widgets/tab-widget.php';
require get_template_directory() . '/inc/widgets/cta-widget.php';

/* Register site widgets */
if ( ! function_exists( 'ajima_widgets' ) ) :
    /**
     * Load widgets.
     *
     * @since 1.0.0
     */
    function ajima_widgets() {
        register_widget( 'Ajima_Recent_Posts' );
        register_widget( 'Ajima_Social_Menu' );
        register_widget( 'Ajima_Author_Info' );
        register_widget( 'Ajima_Mailchimp_Form' );
        register_widget( 'Ajima_Call_To_Action' );
        register_widget( 'Ajima_Tab_Posts' );
    }
endif;
add_action( 'widgets_init', 'ajima_widgets' );