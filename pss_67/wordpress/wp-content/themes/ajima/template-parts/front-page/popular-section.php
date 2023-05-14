<?php

/**
 * Displays Popular Section
 *
 * @package Ajima
 */
$popular_section_post_title = ajima_get_option('popular_section_post_title');
$popular_section_cat = ajima_get_option('popular_section_cat');
$number_of_popular_post = ajima_get_option('number_of_popular_post');
$enable_popular_cat_meta = ajima_get_option('enable_popular_cat_meta');
$enable_popular_author_meta = ajima_get_option('enable_popular_author_meta');
$enable_popular_date_meta = ajima_get_option('enable_popular_date_meta');
?>
<section class="site-section site-popular-area">
    <div class="wrapper">
        <?php if ($popular_section_post_title) { ?>

            <header class="section-header site-section-header">
                <h2 class="site-section-title">
                    <?php echo esc_html($popular_section_post_title); ?>
                </h2>
            </header>
        <?php } ?>
        <div class="swiper theme-popular-slider">
            <div class="swiper-wrapper">
                <?php $popular_post_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => absint($number_of_popular_post), 'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html($popular_section_cat)));
                if ($popular_post_query->have_posts()) :
                    while ($popular_post_query->have_posts()) : $popular_post_query->the_post();
                ?>
                        <div class="swiper-slide">
                            <article id="post-<?php the_ID(); ?>" <?php post_class('theme-popular-slide-post'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="entry-image">
                                        <figure class="featured-media featured-media-medium">
                                            <a href="<?php the_permalink() ?>">
                                                <?php
                                                the_post_thumbnail('medium_large', array(
                                                    'alt' => the_title_attribute(array(
                                                        'echo' => false,
                                                    )),
                                                ));
                                                ?>
                                            </a>
                                            <?php if (ajima_get_option('show_lightbox_image')) { ?>
                                                <a href="<?php echo get_the_post_thumbnail_url(); ?>" class="featured-media-fullscreen" data-glightbox="">
                                                    <?php ajima_theme_svg('fullscreen'); ?>
                                                </a>
                                            <?php } ?>
                                        </figure>
                                    </div>
                                <?php endif; ?>

                                <div class="popular-block-content mt-20">
                                    <div class="entry-categories">
                                        <?php if ($enable_popular_cat_meta) { ?>
                                            <div class="entry-categories">
                                                <span class="screen-reader-text"><?php _e('Categories', 'ajima'); ?></span>
                                                <div class="ajima-entry-categories">
                                                    <?php the_category(' '); ?>
                                                </div>
                                            </div><!-- .entry-categories -->
                                        <?php } ?>
                                    </div><!-- .entry-categories -->
                                    <?php if ($enable_popular_author_meta) {
                                        ajima_posted_on();
                                    }
                                    if ($enable_popular_author_meta) {
                                        ajima_posted_by();
                                    }
                                    ?>
                                    <h3 class="entry-title entry-title-medium mt-10 mb-60">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                </div>
                            </article>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif; ?>

            </div>
            <div class="theme-swiper-control swiper-control">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>