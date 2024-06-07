<?php
/**
 * Template part for displaying trophies
 *
 * @package cricket-league-pro
 */

$section_hide = get_theme_mod('home_automation_pro_trophies_enable');
if ('Disable' == $section_hide) {
    return;
}
if (get_theme_mod('home_automation_pro_trophies_bgcolor', '')) {
    $services_back = 'background-color:' . esc_attr(get_theme_mod('home_automation_pro_trophies_bgcolor', '')) . ';';
} elseif (get_theme_mod('home_automation_pro_trophies_bgimage', '')) {
    $services_back = 'background-image:url(\'' . esc_url(get_theme_mod('home_automation_pro_trophies_bgimage')) . '\')';
} else {
    $services_back = '';
}
?>
<section id="trophies" style="<?php echo esc_attr($services_back); ?>"
    class="section-space">
    <div class="container">
        <div class="row justify-content-between">
            <div class="heading-wrap">
                <div class="heading-tag">
                    <?php echo get_theme_mod('home_automation_pro_trophies_heading_tag'); ?>
                </div>
                <h2>
                    <?php echo get_theme_mod('home_automation_pro_trophies_heading'); ?>
                </h2>
            </div>
            <?php
            // Define arguments for the WP_Query
            $args = array(
                'post_type' => 'trophies',
                'post_status' => 'publish',
                'posts_per_page' => -1, // Retrieve all trophies
            );

            // Instantiate the WP_Query
            $trophies_query = new WP_Query($args);

            // Check if there are any trophies
            if ($trophies_query->have_posts()) {

                ?>
                <div class="owl-carousel">
                    <?php
                    // Start the loop
                    while ($trophies_query->have_posts()) {
                        $trophies_query->the_post();
                        $thumbnail_url = get_the_post_thumbnail_url();
                        // Get post meta data
                        $team_logo_image = get_post_meta(get_the_ID(), 'team_logo_image', true);
                        $team_name = get_post_meta(get_the_ID(), 'team_name', true);
                        ?>
                        <div class="trophy">
                            <div class="trophy-outer">
                                <div class="titl">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="trphoy-wrapper">
                                    <img src="<?php echo $thumbnail_url ?>" alt="Trophy Image" title="Trophy">
                                </div>
                            </div>
                            <div class="team-wrapper">
                                <div class="team-image">
                                    <img src="<?php echo $team_logo_image; ?>" alt="<?php echo $team_name; ?>">
                                </div>
                                <p><?php echo $team_name; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div> <!-- .owl-carousel -->
                <?php
                // Reset post data
                wp_reset_postdata();
            } else {
                // If no trophies found
                echo 'No trophies found.';
            }
            ?>
        </div>
    </div>
</section>
<script>

    jQuery(document).ready(function ($) {
        jQuery('#trophies .owl-carousel').owlCarousel({
            // Owl Carousel options
            autoplay: true,
            autoplayTimeout: 2000,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                991: {
                    items: 3
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 4
                }
                // Add more responsive options as needed
            }
        });
    });

</script>