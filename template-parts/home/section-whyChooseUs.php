<?php
/**
 * Template part for displaying Why Choose Us
 *
 * @package cricket-league-pro
 */

$section_hide = get_theme_mod('cricket_league_pro_whychooseus_enabledisable');
if ('Disable' == $section_hide) {
    return;
}
if (get_theme_mod('cricket_league_pro_whychooseus_bg_color', '')) {
    $services_back = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_whychooseus_bg_color', '')) . ';';
} elseif (get_theme_mod('cricket_league_pro_whychooseus_bg_image', '')) {
    $services_back = 'background-image:url(\'' . esc_url(get_theme_mod('cricket_league_pro_whychooseus_bg_image')) . '\')';
} else {
    $services_back = '';
}
$img_bg = get_theme_mod('cricket_league_pro_whychooseus_bg_image');

?>
<section id="whyChooseUs" style="<?php echo esc_attr($services_back); ?>"
    class="<?php echo esc_attr($img_bg); ?> section-space">
    <div class="container">
        <div class="row justify-content-between">
            <div class="whyChooseUs-left col-lg-7 col-md-12 col-12">
                <div class="custom-grid">
                    <div class="c-grid-col-1">
                        <img src="<?php echo get_theme_mod('cricket_league_pro_whychooseus_left_image_1'); ?>"
                            alt="WCU Image">
                    </div>
                    <div class="parent-grid">
                        <div class="c-grid-col-3">
                            <img src="<?php echo get_theme_mod('cricket_league_pro_whychooseus_left_image_3'); ?>"
                                alt="WCU Image">
                        </div>
                        <div class="c-grid-col-2">
                            <div class="grid-col-3">
                                <img src="<?php echo get_theme_mod('cricket_league_pro_whychooseus_left_image_2'); ?>"
                                    alt="WCU Image">
                            </div>
                            <div class="image-inner">
                                <img src="<?php echo get_theme_mod('cricket_league_pro_whychooseus_left_image_4'); ?>"
                                    alt="WCU Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="whyChooseUs-right col-lg-5 mol-md-6 col-12">
                <div class="services heading text-left">
                    <div class="heading-wrap">
                        <div class="heading-tag">
                            <?php echo get_theme_mod('cricket_league_pro_about_whychooseus_heading_tag'); ?>
                        </div>
                        <h2 class="left">
                            <?php echo get_theme_mod('cricket_league_pro_about_whychooseus_heading'); ?>
                        </h2>
                    </div>
                    <p>
                        <?php echo get_theme_mod('cricket_league_pro_text_field1'); ?>
                    </p>
                    <div class="counter-wrapper">
                        <div class="whyChooseUs-counter">
                            <p class="choose-counter-num counter"
                                akhi="<?php echo get_theme_mod('cricket_league_pro_counter1_count'); ?>">
                                <?php echo get_theme_mod('cricket_league_pro_counter1_count'); ?>
                            </p>
                            <span>
                                <?php echo get_theme_mod('cricket_league_pro_counter1_title'); ?>
                            </span>
                        </div>
                        <div class="whyChooseUs-counter ">
                            <p class="choose-counter-num counter"
                                akhi="<?php echo get_theme_mod('cricket_league_pro_counter2_count'); ?>">
                                <?php echo get_theme_mod('cricket_league_pro_counter2_count'); ?>
                            </p>
                            <span>
                                <?php echo get_theme_mod('cricket_league_pro_counter2_title'); ?>
                            </span>

                        </div>
                        <div class="whyChooseUs-counter">
                            <p class="choose-counter-num counter"
                                akhi="<?php echo get_theme_mod('cricket_league_pro_counter3_count'); ?>">
                                <?php echo get_theme_mod('cricket_league_pro_counter3_count'); ?>
                            </p>
                            <span>
                                <?php echo get_theme_mod('cricket_league_pro_counter3_title'); ?>
                            </span>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>