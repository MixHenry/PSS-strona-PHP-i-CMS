<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ajima
 */

?>

<?php
$enable_footer_recommended_post_section = ajima_get_option('enable_footer_recommended_post_section');
if ($enable_footer_recommended_post_section) {
    get_template_part('template-parts/footer/footer-recommended-post');
}

?>
<?php get_template_part('template-parts/footer/footer-widgets-full'); ?>

<?php do_action('ajima_before_footer'); ?>

</div>  <!-- site-content-area -->

<?php
$is_sticky_footer = ajima_get_option('enable_footer_sticky');
$enable_footer_sticky = ajima_get_option('enable_footer_sticky');
if($enable_footer_sticky){
    ?>
    <div class="sticky-footer-spacer"></div>
    <?php
}
?>

<?php
$footer_image_class = '';
$upload_footer_bg_image = ajima_get_option('upload_footer_bg_image');
$enable_footer_image_overlay = ajima_get_option('enable_footer_image_overlay');
if ($upload_footer_bg_image) {
    $footer_image_class .= 'data-bg';
}
if ($enable_footer_image_overlay) {
    $footer_image_class .= ' footer-has-overlay';
}
?>

<footer id="colophon" class="site-footer <?php echo $footer_image_class; ?>" <?php if ($upload_footer_bg_image) { ?> data-background="<?php echo esc_url($upload_footer_bg_image); ?>" <?php } ?>  <?php echo ($is_sticky_footer) ? 'data-sticky-footer="true"': '';?>>
    <div class="wrapper">
        <?php get_template_part('template-parts/footer/footer-widgets'); ?>
        <?php get_template_part('template-parts/footer/footer-info'); ?>
    </div>

    <?php
    $enable_scroll_to_top = ajima_get_option('enable_scroll_to_top');
    if ($enable_scroll_to_top) {
    ?>
        <a id="theme-scroll-to-start" href="javascript:void(0)">
            <span class="screen-reader-text"><?php _e('Scroll to top', 'ajima'); ?></span>
            <?php ajima_theme_svg('arrow-up'); ?>
        </a>
    <?php
    }
    ?>

    <!-- Custom cursor -->
    <div class="cursor-dot-outline"></div>
    <div class="cursor-dot"></div>
    <!-- .Custom cursor -->

</footer><!-- #colophon -->


<?php do_action('ajima_after_footer'); ?>

</div><!-- #page -->

<?php do_action('ajima_after_site'); ?>

<?php wp_footer(); ?>

</body>

</html>