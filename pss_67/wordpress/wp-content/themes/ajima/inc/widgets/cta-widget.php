<?php

if (!defined('ABSPATH')) {
    exit;
}

class Ajima_Call_To_Action extends Ajima_Widget_Base
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->widget_cssclass = 'widget_ajima_call_to_action';
        $this->widget_description = __("Adds Call to action section", 'ajima');
        $this->widget_id = 'ajima_call_to_action';
        $this->widget_name = __('Ajima: Call To Action', 'ajima');

        $this->settings = array(
            'title' => array(
                'type' => 'text',
                'label' => __('CTA Title', 'ajima'),
            ),
            'title_text' => array(
                'type' => 'text',
                'label' => __('CTA Subtitle', 'ajima'),
            ),
            'desc'  => array(
                'type'  => 'textarea',
                'label' => __( 'CTA Description', 'ajima' ),
                'rows' => 10,
            ),
            'bg_image'  => array(
                'type'  => 'image',
                'label' => __( 'Background Image', 'ajima' ),
            ),
            'btn_text'  => array(
                'type'  => 'text',
                'label' => __( 'Button Text', 'ajima' ),
            ),
            'btn_link'  => array(
                'type'  => 'url',
                'label' => __( 'Link to url', 'ajima' ),
                'desc' => __( 'Enter a proper url with http: OR https:', 'ajima' ),
            ),
            'link_target'  => array(
                'type'  => 'checkbox',
                'label' => __( 'Open Link in new Tab', 'ajima' ),
                'std' => true,
            ),
            'msg' => array(
                'type' => 'message',
                'label' => __('Additonal Settings', 'ajima'),
            ),
            'height'  => array(
                'type' => 'number',
                'step' => 20,
                'min' => 300,
                'max' => 700,
                'std' => 400,
                'label' => __('Height: Between 300px and 700px (Default 400px)', 'ajima'),
            ),
            'text_color_option' => array(
                'type' => 'color',
                'label' => __( 'Text Color', 'ajima' ),
                'std' => '#ffffff',
            ),
            'text_align' => array(
                'type' => 'select',
                'label' => __('Text Alignment', 'ajima'),
                'options' => array(
                    'left' => __('Left Align', 'ajima'),
                    'center' => __('Center Align', 'ajima'),
                    'right' => __('Right Align', 'ajima'),
                ),
                'std' => 'left',
            ),
            'enable_fixed_bg'  => array(
                'type'  => 'checkbox',
                'label' => __( 'Enable Fixed Background Image', 'ajima' ),
                'std' => true,
            ),
            'bg_overlay_color' => array(
                'type' => 'color',
                'label' => __( 'Overlay Background Color', 'ajima' ),
                'std' => '#000000',
            ),
            'overlay_opacity'  => array(
                'type' => 'number',
                'step' => 10,
                'min' => 0,
                'max' => 100,
                'std' => 50,
                'label' => __('Overlay Opacity (Default 50%)', 'ajima'),
            ),
        );

        parent::__construct();
    }

    /**
     * Output widget.
     *
     * @see WP_Widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        ob_start();
        echo $args['before_widget'];

        do_action( 'ajima_before_cta');

        ?>

        <?php if( $instance['bg_image'] && 0!= $instance['bg_image']) :?>

            <?php
            $style_text = 'color:'.$instance['text_color_option'].';';
            $style_text .= 'min-height:'.$instance['height'].'px;';

            $style_text .= 'text-align:'.$instance['text_align'].';';

            $style = 'background-color:'.$instance['bg_overlay_color'].';';
            $style .= 'opacity:'.($instance['overlay_opacity']/100).';';
            ?>

            <div class="ajima-cta-widget ajima-cover-block <?php echo ($instance['enable_fixed_bg']) ? 'ajima-bg-image ajima-bg-attachment-fixed' : '';?>" style="<?php echo esc_attr($style_text);?>">

                <span aria-hidden="true" class="ajima-block-overlay" style="<?php echo esc_attr($style);?>"></span>

                <?php echo wp_get_attachment_image($instance['bg_image'],'full');?>

                <div class="ajima-cta-inner-wrapper ajima-block-inner-wrapper">
                    <?php if ($instance['title']) : ?>
                        <h2 class="entry-title entry-title-large">
                            <?php echo esc_html($instance['title']); ?>
                        </h2>
                    <?php endif;?>

                    <?php if ($instance['title_text']) : ?>
                        <h3 class="entry-title entry-title-big">
                            <?php echo esc_html($instance['title_text']); ?>
                        </h3>
                    <?php endif;?>

                    <?php if ($instance['desc']) : ?>
                        <div class="entry-summary">
                            <?php echo wpautop(wp_kses_post($instance['desc'])); ?>
                        </div>
                    <?php endif;?>

                    <?php if ($instance['btn_text']) : ?>
                        <footer class="entry-footer">
                            <a href="<?php echo ($instance['btn_link']) ? esc_url($instance['btn_link']): '';?>" target="<?php echo ($instance['link_target']) ? "_blank": '_self';?>" class="theme-button">
                                <?php echo esc_html(($instance['btn_text']));?>
                            </a>
                        </footer>
                    <?php endif; ?>

                </div>

            </div>
            
        <?php endif;?>

        <?php

        do_action( 'ajima_after_cta');

        echo $args['after_widget'];

        echo ob_get_clean();
    }

}