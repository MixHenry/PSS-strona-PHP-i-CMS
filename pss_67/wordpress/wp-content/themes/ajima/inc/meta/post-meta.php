<?php
/**
* Sidebar Metabox.
*
* @package Ajima
*/
if( !function_exists( 'ajima_sanitize_sidebar_option_meta' ) ) :

    // Sidebar Option Sanitize.
    function ajima_sanitize_sidebar_option_meta( $input ){

        $metabox_options = array( 'global-sidebar','left-sidebar','right-sidebar','no-sidebar' );
        if( in_array( $input,$metabox_options ) ){

            return $input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists('ajima_sanitize_meta_pagination') ):

    /** Sanitize Enable Disable Checkbox **/
    function ajima_sanitize_meta_pagination( $input ) {

        $valid_keys = array('global-layout','no-navigation','norma-navigation','ajax-next-post-load');
        if ( in_array( $input , $valid_keys ) ) {
            return $input;
        }
        return '';

    }

endif;

if( !function_exists( 'ajima_sanitize_post_layout_option_meta' ) ) :

    // Sidebar Option Sanitize.
    function ajima_sanitize_post_layout_option_meta( $input ){

        $metabox_options = array( 'global-layout','layout-1','layout-2' );
        if( in_array( $input,$metabox_options ) ){

            return $input;

        }else{

            return '';

        }

    }

endif;


if( !function_exists( 'ajima_sanitize_header_overlay_option_meta' ) ) :

    // Sidebar Option Sanitize.
    function ajima_sanitize_header_overlay_option_meta( $input ){

        $metabox_options = array( 'global-layout','enable-overlay' );
        if( in_array( $input,$metabox_options ) ){

            return $input;

        }else{

            return '';

        }

    }

endif;

add_action( 'add_meta_boxes', 'ajima_metabox' );

if( ! function_exists( 'ajima_metabox' ) ):


    function  ajima_metabox() {
        
        add_meta_box(
            'theme-custom-metabox',
            esc_html__( 'Layout Settings', 'ajima' ),
            'ajima_post_metafield_callback',
            'post', 
            'normal', 
            'high'
        );
        add_meta_box(
            'theme-custom-metabox',
            esc_html__( 'Layout Settings', 'ajima' ),
            'ajima_post_metafield_callback',
            'page',
            'normal', 
            'high'
        ); 
    }

endif;

$ajima_page_layout_options = array(
    'layout-1' => esc_html__( 'Simple Layout', 'ajima' ),
    'layout-2' => esc_html__( 'Banner Layout', 'ajima' ),
);

$ajima_post_sidebar_fields = array(
    'global-sidebar' => array(
                    'id'        => 'post-global-sidebar',
                    'value' => 'global-sidebar',
                    'label' => esc_html__( 'Global sidebar', 'ajima' ),
                ),
    'right-sidebar' => array(
                    'id'        => 'post-left-sidebar',
                    'value' => 'right-sidebar',
                    'label' => esc_html__( 'Right sidebar', 'ajima' ),
                ),
    'left-sidebar' => array(
                    'id'        => 'post-right-sidebar',
                    'value'     => 'left-sidebar',
                    'label'     => esc_html__( 'Left sidebar', 'ajima' ),
                ),
    'no-sidebar' => array(
                    'id'        => 'post-no-sidebar',
                    'value'     => 'no-sidebar',
                    'label'     => esc_html__( 'No sidebar', 'ajima' ),
                ),
);

$ajima_post_layout_options = array(
    'layout-1' => esc_html__( 'Simple Layout', 'ajima' ),
    'layout-2' => esc_html__( 'Banner Layout', 'ajima' ),
);

$ajima_header_overlay_options = array(
    'global-layout' => esc_html__( 'Global Layout', 'ajima' ),
    'enable-overlay' => esc_html__( 'Enable Header Overlay', 'ajima' ),
);


/**
 * Callback function for post option.
*/
if( ! function_exists( 'ajima_post_metafield_callback' ) ):
    
    function ajima_post_metafield_callback() {
        global $post, $ajima_post_sidebar_fields, $ajima_post_layout_options,  $ajima_page_layout_options, $ajima_header_overlay_options;
        $post_type = get_post_type($post->ID);
        wp_nonce_field( basename( __FILE__ ), 'ajima_post_meta_nonce' ); ?>
        
        <div class="metabox-main-block">

            <div class="metabox-navbar">
                <ul>

                    <li>
                        <a id="metabox-navbar-general" class="metabox-navbar-active" href="javascript:void(0)">

                            <?php esc_html_e('General Settings', 'ajima'); ?>

                        </a>
                    </li>

                    <li>
                        <a id="metabox-navbar-appearance" href="javascript:void(0)">

                            <?php esc_html_e('Appearance Settings', 'ajima'); ?>

                        </a>
                    </li>

                    <?php if( $post_type == 'post' && class_exists('Booster_Extension_Class') ): ?>
                        <li>
                            <a id="twp-tab-booster" href="javascript:void(0)">

                                <?php esc_html_e('Booster Extension Settings', 'ajima'); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>

            <div class="twp-tab-content">

                <div id="metabox-navbar-general-content" class="metabox-content-wrap metabox-content-wrap-active">

                    <div class="metabox-opt-panel">

                        <h3 class="meta-opt-title"><?php esc_html_e('Sidebar Layout','ajima'); ?></h3>

                        <div class="metabox-opt-wrap metabox-opt-wrap-alt">

                            <?php
                            $ajima_post_sidebar = esc_html( get_post_meta( $post->ID, 'ajima_post_sidebar_option', true ) ); 
                            if( $ajima_post_sidebar == '' ){ $ajima_post_sidebar = 'global-sidebar'; }

                            foreach ( $ajima_post_sidebar_fields as $ajima_post_sidebar_field) { ?>

                                <label class="description">

                                    <input type="radio" name="ajima_post_sidebar_option" value="<?php echo esc_attr( $ajima_post_sidebar_field['value'] ); ?>" <?php if( $ajima_post_sidebar_field['value'] == $ajima_post_sidebar ){ echo "checked='checked'";} if( empty( $ajima_post_sidebar ) && $ajima_post_sidebar_field['value']=='right-sidebar' ){ echo "checked='checked'"; } ?>/>&nbsp;<?php echo esc_html( $ajima_post_sidebar_field['label'] ); ?>

                                </label>

                            <?php } ?>

                        </div>

                    </div>

                </div>


                <div id="metabox-navbar-appearance-content" class="metabox-content-wrap">

                    <?php if( $post_type == 'page' ): ?>

                        <div class="metabox-opt-panel">

                            <h3 class="meta-opt-title"><?php esc_html_e('Banner Layout','ajima'); ?></h3>

                            <div class="metabox-opt-wrap metabox-opt-wrap-alt">

                                <?php
                                $ajima_page_layout = esc_html( get_post_meta( $post->ID, 'ajima_page_layout', true ) ); 
                                if( $ajima_page_layout == '' ){ $ajima_page_layout = 'layout-1'; }

                                foreach ( $ajima_page_layout_options as $key => $ajima_page_layout_option) { ?>

                                    <label class="description">
                                        <input type="radio" name="ajima_page_layout" value="<?php echo esc_attr( $key ); ?>" <?php if( $key == $ajima_page_layout ){ echo "checked='checked'";} ?>/>&nbsp;<?php echo esc_html( $ajima_page_layout_option ); ?>
                                    </label>

                                <?php } ?>

                            </div>

                        </div>

                        <div class="metabox-opt-panel">

                            <h3 class="meta-opt-title"><?php esc_html_e('Header Overlay','ajima'); ?></h3>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                <?php
                                $ajima_ed_header_overlay = esc_attr( get_post_meta( $post->ID, 'ajima_ed_header_overlay', true ) ); ?>

                                <input type="checkbox" id="ajima-header-overlay" name="ajima_ed_header_overlay" value="1" <?php if( $ajima_ed_header_overlay ){ echo "checked='checked'";} ?>/>

                                <label for="ajima-header-overlay"><?php esc_html_e( 'Enable Header Overlay','ajima' ); ?></label>

                            </div>

                        </div>

                    <?php endif; ?>

                    <?php if( $post_type == 'post' ): ?>

                        <div class="metabox-opt-panel">

                            <h3 class="meta-opt-title"><?php esc_html_e('Header Title Layout','ajima'); ?></h3>

                            <div class="metabox-opt-wrap metabox-opt-wrap-alt">

                                <?php
                                $ajima_post_layout = esc_html( get_post_meta( $post->ID, 'ajima_post_layout', true ) ); 

                                foreach ( $ajima_post_layout_options as $key => $ajima_post_layout_option) { ?>

                                    <label class="description">
                                        <input type="radio" name="ajima_post_layout" value="<?php echo esc_attr( $key ); ?>" <?php if( $key == $ajima_post_layout ){ echo "checked='checked'";} ?>/>&nbsp;<?php echo esc_html( $ajima_post_layout_option ); ?>
                                    </label>

                                <?php } ?>

                            </div>

                        </div>

                        <div class="metabox-opt-panel">

                            <h3 class="meta-opt-title"><?php esc_html_e('Header Overlay','ajima'); ?></h3>

                            <div class="metabox-opt-wrap metabox-opt-wrap-alt">

                                <?php
                                $ajima_header_overlay = esc_html( get_post_meta( $post->ID, 'ajima_header_overlay', true ) ); 
                                if( $ajima_header_overlay == '' ){ $ajima_header_overlay = 'global-layout'; }

                                foreach ( $ajima_header_overlay_options as $key => $ajima_header_overlay_option) { ?>

                                    <label class="description">
                                        <input type="radio" name="ajima_header_overlay" value="<?php echo esc_attr( $key ); ?>" <?php if( $key == $ajima_header_overlay ){ echo "checked='checked'";} ?>/>&nbsp;<?php echo esc_html( $ajima_header_overlay_option ); ?>
                                    </label>

                                <?php } ?>

                            </div>

                        </div>

                    <?php endif; ?>
<!-- 
                     <div class="metabox-opt-panel">

                        <h3 class="meta-opt-title"><?php //esc_html_e('Navigation Setting','ajima'); ?></h3>

                        <?php //$twp_disable_ajax_load_next_post = esc_attr( get_post_meta($post->ID, 'twp_disable_ajax_load_next_post', true) ); ?>
                        <div class="metabox-opt-wrap metabox-opt-wrap-alt">

                            <label><b><?php //esc_html_e( 'Navigation Type','ajima' ); ?></b></label>

                            <select name="twp_disable_ajax_load_next_post">

                                <option <?php //if( $twp_disable_ajax_load_next_post == '' || $twp_disable_ajax_load_next_post == 'global-layout' ){ echo 'selected'; } ?> value="global-layout"><?php //esc_html_e('Global Layout','ajima'); ?></option>
                                <option <?php //if( $twp_disable_ajax_load_next_post == 'no-navigation' ){ echo 'selected'; } ?> value="no-navigation"><?php //esc_html_e('Disable Navigation','ajima'); ?></option>
                                <option <?php //if( $twp_disable_ajax_load_next_post == 'norma-navigation' ){ echo 'selected'; } ?> value="norma-navigation"><?php //esc_html_e('Next Previous Navigation','ajima'); ?></option>
                                <option <?php //if( $twp_disable_ajax_load_next_post == 'ajax-next-post-load' ){ echo 'selected'; } ?> value="ajax-next-post-load"><?php //esc_html_e('Ajax Load Next 3 Posts Contents','ajima'); ?></option>

                            </select>

                        </div>
                    </div> -->

                </div>

                <?php if( $post_type == 'post' && class_exists('Booster_Extension_Class') ):

                    
                    $ajima_ed_post_views = esc_html( get_post_meta( $post->ID, 'ajima_ed_post_views', true ) );
                    $ajima_ed_post_read_time = esc_html( get_post_meta( $post->ID, 'ajima_ed_post_read_time', true ) );
                    $ajima_ed_post_like_dislike = esc_html( get_post_meta( $post->ID, 'ajima_ed_post_like_dislike', true ) );
                    $ajima_ed_post_author_box = esc_html( get_post_meta( $post->ID, 'ajima_ed_post_author_box', true ) );
                    $ajima_ed_post_social_share = esc_html( get_post_meta( $post->ID, 'ajima_ed_post_social_share', true ) );
                    $ajima_ed_post_reaction = esc_html( get_post_meta( $post->ID, 'ajima_ed_post_reaction', true ) );
                    $ajima_ed_post_rating = esc_html( get_post_meta( $post->ID, 'ajima_ed_post_rating', true ) );
                    ?>

                    <div id="twp-tab-booster-content" class="metabox-content-wrap">

                        <div class="metabox-opt-panel">

                            <h3 class="meta-opt-title"><?php esc_html_e('Booster Extension Plugin Content','ajima'); ?></h3>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="ajima-ed-post-views" name="ajima_ed_post_views" value="1" <?php if( $ajima_ed_post_views ){ echo "checked='checked'";} ?>/>
                                    <label for="ajima-ed-post-views"><?php esc_html_e( 'Disable Post Views','ajima' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="ajima-ed-post-read-time" name="ajima_ed_post_read_time" value="1" <?php if( $ajima_ed_post_read_time ){ echo "checked='checked'";} ?>/>
                                    <label for="ajima-ed-post-read-time"><?php esc_html_e( 'Disable Post Read Time','ajima' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="ajima-ed-post-like-dislike" name="ajima_ed_post_like_dislike" value="1" <?php if( $ajima_ed_post_like_dislike ){ echo "checked='checked'";} ?>/>
                                    <label for="ajima-ed-post-like-dislike"><?php esc_html_e( 'Disable Post Like Dislike','ajima' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="ajima-ed-post-author-box" name="ajima_ed_post_author_box" value="1" <?php if( $ajima_ed_post_author_box ){ echo "checked='checked'";} ?>/>
                                    <label for="ajima-ed-post-author-box"><?php esc_html_e( 'Disable Post Author Box','ajima' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="ajima-ed-post-social-share" name="ajima_ed_post_social_share" value="1" <?php if( $ajima_ed_post_social_share ){ echo "checked='checked'";} ?>/>
                                    <label for="ajima-ed-post-social-share"><?php esc_html_e( 'Disable Post Social Share','ajima' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="ajima-ed-post-reaction" name="ajima_ed_post_reaction" value="1" <?php if( $ajima_ed_post_reaction ){ echo "checked='checked'";} ?>/>
                                    <label for="ajima-ed-post-reaction"><?php esc_html_e( 'Disable Post Reaction','ajima' ); ?></label>

                            </div>

                            <div class="metabox-opt-wrap theme-checkbox-wrap">

                                    <input type="checkbox" id="ajima-ed-post-rating" name="ajima_ed_post_rating" value="1" <?php if( $ajima_ed_post_rating ){ echo "checked='checked'";} ?>/>
                                    <label for="ajima-ed-post-rating"><?php esc_html_e( 'Disable Post Rating','ajima' ); ?></label>

                            </div>

                        </div>

                    </div>

                <?php endif; ?>
                
            </div>

        </div>  
            
    <?php }
endif;

// Save metabox value.
add_action( 'save_post', 'ajima_save_post_meta' );

if( ! function_exists( 'ajima_save_post_meta' ) ):

    function ajima_save_post_meta( $post_id ) {

        global $post, $ajima_post_sidebar_fields, $ajima_post_layout_options, $ajima_header_overlay_options,  $ajima_page_layout_options;

        if ( !isset( $_POST[ 'ajima_post_meta_nonce' ] ) || !wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['ajima_post_meta_nonce'] ) ), basename( __FILE__ ) ) ){

            return;

        }

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){

            return;

        }
            
        if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {  

            if ( !current_user_can( 'edit_page', $post_id ) ){  

                return $post_id;

            }

        }elseif( !current_user_can( 'edit_post', $post_id ) ) {

            return $post_id;

        }


        foreach ( $ajima_post_sidebar_fields as $ajima_post_sidebar_field ) {  
            

                $old = esc_html( get_post_meta( $post_id, 'ajima_post_sidebar_option', true ) ); 
                $new = isset( $_POST['ajima_post_sidebar_option'] ) ? ajima_sanitize_sidebar_option_meta( wp_unslash( $_POST['ajima_post_sidebar_option'] ) ) : '';

                if ( $new && $new != $old ){

                    update_post_meta ( $post_id, 'ajima_post_sidebar_option', $new );

                }elseif( '' == $new && $old ) {

                    delete_post_meta( $post_id,'ajima_post_sidebar_option', $old );

                }

            
        }

        $twp_disable_ajax_load_next_post_old = esc_html( get_post_meta( $post_id, 'twp_disable_ajax_load_next_post', true ) ); 
        $twp_disable_ajax_load_next_post_new = isset( $_POST['twp_disable_ajax_load_next_post'] ) ? ajima_sanitize_meta_pagination( wp_unslash( $_POST['twp_disable_ajax_load_next_post'] ) ) : '';

        if( $twp_disable_ajax_load_next_post_new && $twp_disable_ajax_load_next_post_new != $twp_disable_ajax_load_next_post_old ){

            update_post_meta ( $post_id, 'twp_disable_ajax_load_next_post', $twp_disable_ajax_load_next_post_new );

        }elseif( '' == $twp_disable_ajax_load_next_post_new && $twp_disable_ajax_load_next_post_old ) {

            delete_post_meta( $post_id,'twp_disable_ajax_load_next_post', $twp_disable_ajax_load_next_post_old );

        }


        foreach ( $ajima_post_layout_options as $ajima_post_layout_option ) {  
            
            $ajima_post_layout_old = esc_html( get_post_meta( $post_id, 'ajima_post_layout', true ) ); 
            $ajima_post_layout_new = isset( $_POST['ajima_post_layout'] ) ? ajima_sanitize_post_layout_option_meta( wp_unslash( $_POST['ajima_post_layout'] ) ) : '';

            if ( $ajima_post_layout_new && $ajima_post_layout_new != $ajima_post_layout_old ){

                update_post_meta ( $post_id, 'ajima_post_layout', $ajima_post_layout_new );

            }elseif( '' == $ajima_post_layout_new && $ajima_post_layout_old ) {

                delete_post_meta( $post_id,'ajima_post_layout', $ajima_post_layout_old );

            }
            
        }



        foreach ( $ajima_header_overlay_options as $ajima_header_overlay_option ) {  
            
            $ajima_header_overlay_old = esc_html( get_post_meta( $post_id, 'ajima_header_overlay', true ) ); 
            $ajima_header_overlay_new = isset( $_POST['ajima_header_overlay'] ) ? ajima_sanitize_header_overlay_option_meta( wp_unslash( $_POST['ajima_header_overlay'] ) ) : '';

            if ( $ajima_header_overlay_new && $ajima_header_overlay_new != $ajima_header_overlay_old ){

                update_post_meta ( $post_id, 'ajima_header_overlay', $ajima_header_overlay_new );

            }elseif( '' == $ajima_header_overlay_new && $ajima_header_overlay_old ) {

                delete_post_meta( $post_id,'ajima_header_overlay', $ajima_header_overlay_old );

            }
            
        }


        $ajima_ed_post_views_old = esc_html( get_post_meta( $post_id, 'ajima_ed_post_views', true ) ); 
        $ajima_ed_post_views_new = isset( $_POST['ajima_ed_post_views'] ) ? absint( wp_unslash( $_POST['ajima_ed_post_views'] ) ) : '';

        if ( $ajima_ed_post_views_new && $ajima_ed_post_views_new != $ajima_ed_post_views_old ){

            update_post_meta ( $post_id, 'ajima_ed_post_views', $ajima_ed_post_views_new );

        }elseif( '' == $ajima_ed_post_views_new && $ajima_ed_post_views_old ) {

            delete_post_meta( $post_id,'ajima_ed_post_views', $ajima_ed_post_views_old );

        }



        $ajima_ed_post_read_time_old = esc_html( get_post_meta( $post_id, 'ajima_ed_post_read_time', true ) ); 
        $ajima_ed_post_read_time_new = isset( $_POST['ajima_ed_post_read_time'] ) ? absint( wp_unslash( $_POST['ajima_ed_post_read_time'] ) ) : '';

        if ( $ajima_ed_post_read_time_new && $ajima_ed_post_read_time_new != $ajima_ed_post_read_time_old ){

            update_post_meta ( $post_id, 'ajima_ed_post_read_time', $ajima_ed_post_read_time_new );

        }elseif( '' == $ajima_ed_post_read_time_new && $ajima_ed_post_read_time_old ) {

            delete_post_meta( $post_id,'ajima_ed_post_read_time', $ajima_ed_post_read_time_old );

        }



        $ajima_ed_post_like_dislike_old = esc_html( get_post_meta( $post_id, 'ajima_ed_post_like_dislike', true ) ); 
        $ajima_ed_post_like_dislike_new = isset( $_POST['ajima_ed_post_like_dislike'] ) ? absint( wp_unslash( $_POST['ajima_ed_post_like_dislike'] ) ) : '';

        if ( $ajima_ed_post_like_dislike_new && $ajima_ed_post_like_dislike_new != $ajima_ed_post_like_dislike_old ){

            update_post_meta ( $post_id, 'ajima_ed_post_like_dislike', $ajima_ed_post_like_dislike_new );

        }elseif( '' == $ajima_ed_post_like_dislike_new && $ajima_ed_post_like_dislike_old ) {

            delete_post_meta( $post_id,'ajima_ed_post_like_dislike', $ajima_ed_post_like_dislike_old );

        }



        $ajima_ed_post_author_box_old = esc_html( get_post_meta( $post_id, 'ajima_ed_post_author_box', true ) ); 
        $ajima_ed_post_author_box_new = isset( $_POST['ajima_ed_post_author_box'] ) ? absint( wp_unslash( $_POST['ajima_ed_post_author_box'] ) ) : '';

        if ( $ajima_ed_post_author_box_new && $ajima_ed_post_author_box_new != $ajima_ed_post_author_box_old ){

            update_post_meta ( $post_id, 'ajima_ed_post_author_box', $ajima_ed_post_author_box_new );

        }elseif( '' == $ajima_ed_post_author_box_new && $ajima_ed_post_author_box_old ) {

            delete_post_meta( $post_id,'ajima_ed_post_author_box', $ajima_ed_post_author_box_old );

        }



        $ajima_ed_post_social_share_old = esc_html( get_post_meta( $post_id, 'ajima_ed_post_social_share', true ) ); 
        $ajima_ed_post_social_share_new = isset( $_POST['ajima_ed_post_social_share'] ) ? absint( wp_unslash( $_POST['ajima_ed_post_social_share'] ) ) : '';

        if ( $ajima_ed_post_social_share_new && $ajima_ed_post_social_share_new != $ajima_ed_post_social_share_old ){

            update_post_meta ( $post_id, 'ajima_ed_post_social_share', $ajima_ed_post_social_share_new );

        }elseif( '' == $ajima_ed_post_social_share_new && $ajima_ed_post_social_share_old ) {

            delete_post_meta( $post_id,'ajima_ed_post_social_share', $ajima_ed_post_social_share_old );

        }



        $ajima_ed_post_reaction_old = esc_html( get_post_meta( $post_id, 'ajima_ed_post_reaction', true ) ); 
        $ajima_ed_post_reaction_new = isset( $_POST['ajima_ed_post_reaction'] ) ? absint( wp_unslash( $_POST['ajima_ed_post_reaction'] ) ) : '';

        if ( $ajima_ed_post_reaction_new && $ajima_ed_post_reaction_new != $ajima_ed_post_reaction_old ){

            update_post_meta ( $post_id, 'ajima_ed_post_reaction', $ajima_ed_post_reaction_new );

        }elseif( '' == $ajima_ed_post_reaction_new && $ajima_ed_post_reaction_old ) {

            delete_post_meta( $post_id,'ajima_ed_post_reaction', $ajima_ed_post_reaction_old );

        }



        $ajima_ed_post_rating_old = esc_html( get_post_meta( $post_id, 'ajima_ed_post_rating', true ) ); 
        $ajima_ed_post_rating_new = isset( $_POST['ajima_ed_post_rating'] ) ? absint( wp_unslash( $_POST['ajima_ed_post_rating'] ) ) : '';

        if ( $ajima_ed_post_rating_new && $ajima_ed_post_rating_new != $ajima_ed_post_rating_old ){

            update_post_meta ( $post_id, 'ajima_ed_post_rating', $ajima_ed_post_rating_new );

        }elseif( '' == $ajima_ed_post_rating_new && $ajima_ed_post_rating_old ) {

            delete_post_meta( $post_id,'ajima_ed_post_rating', $ajima_ed_post_rating_old );

        }

        foreach ( $ajima_page_layout_options as $ajima_post_layout_option ) {  
        
            $ajima_page_layout_old = sanitize_text_field( get_post_meta( $post_id, 'ajima_page_layout', true ) ); 
            $ajima_page_layout_new = isset( $_POST['ajima_page_layout'] ) ? ajima_sanitize_post_layout_option_meta( wp_unslash( $_POST['ajima_page_layout'] ) ) : '';

            if ( $ajima_page_layout_new && $ajima_page_layout_new != $ajima_page_layout_old ){

                update_post_meta ( $post_id, 'ajima_page_layout', $ajima_page_layout_new );

            }elseif( '' == $ajima_page_layout_new && $ajima_page_layout_old ) {

                delete_post_meta( $post_id,'ajima_page_layout', $ajima_page_layout_old );

            }
            
        }

        $ajima_ed_header_overlay_old = absint( get_post_meta( $post_id, 'ajima_ed_header_overlay', true ) ); 
        $ajima_ed_header_overlay_new = isset( $_POST['ajima_ed_header_overlay'] ) ? absint( wp_unslash( $_POST['ajima_ed_header_overlay'] ) ) : '';

        if ( $ajima_ed_header_overlay_new && $ajima_ed_header_overlay_new != $ajima_ed_header_overlay_old ){

            update_post_meta ( $post_id, 'ajima_ed_header_overlay', $ajima_ed_header_overlay_new );

        }elseif( '' == $ajima_ed_header_overlay_new && $ajima_ed_header_overlay_old ) {

            delete_post_meta( $post_id,'ajima_ed_header_overlay', $ajima_ed_header_overlay_old );

        }

    }

endif;   