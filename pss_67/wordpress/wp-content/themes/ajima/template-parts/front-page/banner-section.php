<?php
/**
 * Displays Banner Section
 *
 * @package Ajima
 */
$is_banner_section = ajima_get_option('enable_banner_section');
$banner_section_cat = ajima_get_option('banner_section_cat');
$banner_section_slider_layout = ajima_get_option('banner_section_slider_layout');
$number_of_slider_post = ajima_get_option('number_of_slider_post');
$enable_banner_cat_meta = ajima_get_option('enable_banner_cat_meta');
$enable_banner_author_meta = ajima_get_option('enable_banner_author_meta');
$enable_banner_date_meta = ajima_get_option('enable_banner_date_meta');
$enable_banner_post_description = ajima_get_option('enable_banner_post_description');
$slider_post_content_alignment = ajima_get_option('slider_post_content_alignment');
$container_banner_class = "";
$container_parallax = "";
$container_font_class = "";
$featured_image = "";
$content_wrapper_class = "";
if ($banner_section_slider_layout == 'site-banner-layout-1') {
    $container_banner_class = "wrapper-fluid";
    $container_parallax = 'data-swiper-parallax="45%"';
    $content_wrapper_class = "wrapper";
    $container_font_class = "entry-title-large";
} else {
    $container_banner_class = "wrapper";
    $container_font_class = "entry-title-small";
}
?>

<section class="site-section site-banner">
    <div class="<?php echo esc_attr($container_banner_class); ?>">
        <div class="<?php echo esc_attr($banner_section_slider_layout); ?>">
            <div class="theme-banner-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php $banner_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => absint($number_of_slider_post), 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($banner_section_cat)));
                    if ($banner_post_query->have_posts()) :
                        while ($banner_post_query->have_posts()) : $banner_post_query->the_post();
                            if (has_post_thumbnail()) {
                                if ($banner_section_slider_layout == 'site-banner-layout-1') {
                                    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                } else {
                                    $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium_large');
                                }
                                $featured_image = isset($featured_image[0]) ? $featured_image[0] : '';
                            }
                    ?>
                            <div class="swiper-slide">

                                <div class="slide-inner" <?php echo $container_parallax; ?>>
                                    <div class="data-bg-overlay"></div>
                                    <div class="data-bg slide-featured-background" data-background="<?php echo esc_url($featured_image); ?>"></div>
                                    <div class="slider-content <?php echo $slider_post_content_alignment; ?>">
                                        <div class="<?php echo esc_attr($content_wrapper_class); ?>">
                                            <?php if ($enable_banner_cat_meta) { ?>
                                                <div class="entry-categories">
                                                    <span class="screen-reader-text"><?php _e('Categories', 'ajima'); ?></span>
                                                    <div class="ajima-entry-categories">
                                                        <?php the_category(' '); ?>
                                                    </div>
                                                </div><!-- .entry-categories -->
                                            <?php } ?>
                                            <h2 class="entry-title <?php echo esc_attr($container_font_class); ?>">
                                                <?php the_title('<a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a>'); ?>
                                            </h2>

                                            <?php if ($enable_banner_post_description) { ?>
                                                <div class="entry-summary">
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            <?php } ?>

                                            <div class="">
                                                <?php
                                                ajima_posted_on();

                                                ajima_posted_by();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>

                <?php if ($banner_section_slider_layout == 'site-banner-layout-1') { ?>
                    <div class="swiper-nav-btn">
                        <div class="slider-button-prev banner-slider-button"><?php esc_html_e('Prev', 'ajima'); ?></div>
                        <div class="slider-button-next banner-slider-button"><?php esc_html_e('Next', 'ajima'); ?></div>
                    </div>

                    <div class="swiper-advance-pagination">
                        <div class="swiper-fraction-pagination">
                            <span></span>
                            <span></span>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                <?php } else { ?>

                    <div class="theme-swiper-control swiper-control">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination theme-swiper-pagination"></div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>