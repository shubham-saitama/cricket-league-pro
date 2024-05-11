<?php
/**
 * Template part for displaying Testimonials
 *
 * @package cricket_league_pro
 */
$section_hide = get_theme_mod('cricket_league_pro_testimonial_enable');
if ('Disable' == $section_hide) {
    return;
}
if (get_theme_mod('cricket_league_pro_testimonial_bgcolor', '')) {
    $per_back = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_testimonial_bgcolor', '')) . ';';
} elseif (get_theme_mod('cricket_league_pro_testimonial_bgimage', '')) {
    $per_back = 'background-image:url(\'' . esc_url(get_theme_mod('cricket_league_pro_testimonial_bgimage')) . '\')';
} else {
    $per_back = '';
}

?>

<section id="testimonials" class=" section-space" style="<?php echo esc_attr($per_back); ?>">
    <div class="container">
        <div class="services heading text-center">
            <div class="row">
                <div class="testimonial-left col-lg-6 col-md-12 col-12">
                    <?php
                    // Custom WP_Query to retrieve testimonials
                    $args = array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => -1, // Show all testimonials
                    );

                    $testimonials_query = new WP_Query($args);
                    if ($testimonials_query->have_posts()):

                        ?>
                        <div class="slick-slider">
                            <?php
                            while ($testimonials_query->have_posts()):
                                $testimonials_query->the_post();
                                $post_id = get_the_ID();
                                $customer_name = get_post_meta(get_the_ID(), '_customer_name', true);
                                $service_used = get_post_meta(get_the_ID(), '_service_used', true);
                                ?>
                                <div class="slide-wrapper">
                                    <?php if (has_post_thumbnail()): ?>
                                        <div class="customer-image">
                                            <?php the_post_thumbnail('custom-thumbnail'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="testimonial-right-inner">
                                        <div class="client-info">
                                            <div class="client-info-inner">
                                                <h3 class="customer-name">
                                                    <?php echo esc_html($customer_name); ?>
                                                </h3>
                                                <p class="service-used">
                                                    <?php echo esc_html($service_used); ?>
                                                </p>
                                                <?php echo get_testimonial_stars($post_id); ?>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div> <!-- .slick-slider -->
                        <?php
                        wp_reset_postdata(); // Reset the post data
                    else:
                        echo 'No testimonials found.';
                    endif;
                    ?>
                </div>
                <div class="testimonial-right col-lg-6 col-md-12 col-12">
                    <div class="heading-wrap">
                        <div class="heading-tag">
                            <?php echo get_theme_mod('cricket_league_pro_testimonial_heading_tag_font_text'); ?>
                        </div>
                        <h2 class="left"><?php echo get_theme_mod('cricket_league_pro_testimonial_heading_font_text'); ?>
                        </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="outer-thumbnai-wrapper">
                            <div class="thumbnail-slider">
                                <?php if ($testimonials_query->have_posts()):
                                    while ($testimonials_query->have_posts()):
                                        $testimonials_query->the_post(); ?>
                                        <div class="img-wrapper">
                                            <?php the_post_thumbnail('custom-thumbnail'); ?>

                                        </div>
                                    <?php endwhile; ?>

                                <?php endif; ?>

                            </div>
                            <div class="prev"><i class="fa-solid fa-arrow-left"></i></div>
                            <div class="next"><i class="fa-solid fa-arrow-right"></i></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>