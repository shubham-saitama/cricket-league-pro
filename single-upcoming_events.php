<?php
/**
 * The Template for displaying all single upcoming event.
 * Template Name : Upcoming Event
 *
 * @package cricket-league-pro
 */
get_header();
$background_img = get_theme_mod('cricket_league_pro_inner_page_banner_bgimage');
global $post;
$img = get_theme_mod('cricket_league_pro_inner_page_banner_bgimage');
$display = '';
$display_title_bbanner = '';
$vw_title_banner_image_title_on_off = get_post_meta($post->ID, 'vw_title_banner_image_title_on_off', true);
if ($vw_title_banner_image_title_on_off == 'on')
    $display = 'style=display:none;';
$vw_title_banner_image_title_below_on_off = get_post_meta($post->ID, 'vw_title_banner_image_title_below_on_off', true);
if ($vw_title_banner_image_title_below_on_off != 'on')
    $display_title_bbanner = 'style=display:none;';
if ($img != '') { ?>

    <div class="title-box text-center banner-img" style="background-image:url(<?php echo esc_url($img); ?>)">
        <div class="banner-page-text container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                    <div class="above_title">
                        <h1>
                            Single Event Page
                        </h1>
                        <?php if (get_theme_mod('cricket_league_pro_site_breadcrumb_enable', true) != '') { ?>
                            <div class="bradcrumbs py-2 b1">
                                <?php cricket_league_pro_the_breadcrumb(); ?>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container main_title" <?php echo esc_attr($display_title_bbanner); ?>>
        <h1>
            <?php the_title(); ?>
        </h1>
        <?php if (get_theme_mod('cricket_league_pro_site_breadcrumb_enable', true) != '') { ?>
            <div class="container bradcrumbs py-3 b2">
                <?php cricket_league_pro_the_breadcrumb(); ?>
            </div>
        <?php } ?>

    </div>
<?php } else { ?>
    <div class="container main_title">
        <h1>
            <?php the_title(); ?>
        </h1>
        <?php if (get_theme_mod('cricket_league_pro_site_breadcrumb_enable', true) != '') { ?>
            <div class="container bradcrumbs py-3 b2">
                <?php cricket_league_pro_the_breadcrumb(); ?>
            </div>
        <?php } ?>

    </div>
<?php } ?>

<section class="single-evt py-5">
    <div class="container">
        <div class="row">
            <?php while (have_posts()):
                the_post();
                $date = date('d'); // Current date in YYYY-MM-DD format
                $day = date('l', strtotime($date)); // Full day name (e.g., "Monday")
                $event_date = get_post_meta(get_the_ID(), '_event_date', true);
                // Convert event date to 'day-mon-year' format
            
                $event_date_formatted = date('l-d-M-Y', strtotime($event_date));
                $month = date('M', strtotime($event_date));
                $event_date_formatted = str_replace($month, date('M', strtotime($event_date)), $event_date_formatted);

                $start_time = get_post_meta(get_the_ID(), '_start_time', true);
                // Convert start time to AM/PM format (assuming $start_time is in 'H:i' format)
                $start_time_am_pm = date('h:i A', strtotime($start_time));
                $end_time = get_post_meta(get_the_ID(), '_end_time', true);
                $end_time_am_pm = date('h:i A', strtotime($end_time));
                $location = get_post_meta(get_the_ID(), '_venue_name', true);
                $entry_fees = get_post_meta(get_the_ID(), '_entry_fees', true);
                // Get the x and y coordinates from meta fields
                $map_x_coordinates = get_post_meta($post->ID, '_map_x_coordinates', true);
                $map_y_coordinates = get_post_meta($post->ID, '_map_y_coordinates', true);
                ?>
                <?php if (has_post_thumbnail()) { ?>
                    <div class="col-md-6 col-12 ">
                        <div class="thumbnail">
                            <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <p class="clock-before"><?php echo $event_date_formatted; ?> -
                            <?php echo esc_html($start_time_am_pm); ?> To
                            <?php echo $event_date_formatted; ?> - <?php echo esc_html($end_time_am_pm); ?>
                        </p>
                        <div class="single-evt-content">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="venue">
                            <?php echo $location; ?>
                        </div>
                        <div class="evt-descreption">
                            <?php the_content(); ?>
                        </div>
                        <span class="price">$ <?php echo $entry_fees; ?></span>
                        <div class="button-wrapper">
                            <?php
                            // Construct Google Calendar link
                            $event_title = urlencode(get_the_title());
                            $start_datetime = urlencode($event_date . ' ' . $start_time);
                            $end_datetime = urlencode($event_date . ' ' . $end_time);
                            $location = urlencode($location);
                            $google_calendar_link = "https://www.google.com/calendar/render?action=TEMPLATE&text=$event_title&dates=$start_datetime/$end_datetime&location=$location";
                            $location_link = 'https://www.google.com/maps/search/?api=1&query=' . urlencode($location);
                            ?>
                            <a class="normal-btn black" href="<?php $location_link; ?>" target="_blank"><?php echo get_theme_mod('cricket_league_pro_single_evt_goto_location'); ?></a>

                            <a class="calender-button" href="<?php echo $google_calendar_link; ?>" target="_blank"><?php echo get_theme_mod('cricket_league_pro_single_evt_add_chalender'); ?></a>
                        </div>
                    </div>
                    <p class="my-4"><?php echo get_post_meta(get_the_ID(), '_custom_meta_field1', 'true'); ?></p>
                    <p class="my-3"><?php echo get_post_meta(get_the_ID(), '_custom_meta_field2', 'true'); ?></p>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <h5>Details</h5>
                            <div class="event-detail-wrap">
                                <span class="event-detail-title"><b>Start</b></span>
                                <span class="event-detail-value"><?php echo $start_time_am_pm; ?></span>
                            </div>
                            <div class="event-detail-wrap">
                                <span class="event-detail-title"><b>End</b></span>
                                <span class="event-detail-value"><?php echo $end_time_am_pm; ?></span>
                            </div>
                            <div class="event-detail-wrap">
                                <span class="event-detail-title"><b>Cost</b></span>
                                <span class="event-detail-value">$ <?php echo $entry_fees; ?></span>
                            </div>
                            <div class="event-detail-wrap">
                                <span class="event-detail-title">Event Category:</span>
                                <span class="event-detail-value"><?php echo $event_category; ?></span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <h5>Organizer</h5>
                            <div class="event-detail-wrap">
                                <span
                                    class="event-detail-value"><b><?php echo get_post_meta(get_the_ID(), '_organizer_name', true); ?></b></span>
                            </div>
                            <div class="event-detail-wrap">
                                <span class="event-detail-title"><b>Phone</b></span>
                                <span
                                    class="event-detail-value"><?php echo get_post_meta(get_the_ID(), '_phone_number', true); ?></span>
                            </div>
                            <div class="event-detail-wrap">
                                <span class="event-detail-title"><b>Mail</b></span>
                                <span
                                    class="event-detail-value"><?php echo get_post_meta(get_the_ID(), '_email', true); ?></span>
                            </div>
                            <div class="event-detail-wrap">
                                <span class="event-detail-title"><b>Website</b></span>
                                <span
                                    class="event-detail-value"><?php echo get_post_meta(get_the_ID(), '_organizer_website', true); ?></span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <h5>Venue</h5>
                            <div class="event-detail-wrap">
                                <span
                                    class="event-detail-value"><?php echo get_post_meta(get_the_ID(), '_venue_name', true); ?></span>
                            </div>
                            <div class="event-detail-wrap">
                                <span class="event-detail-title"><b>Address:</b></span>
                                <span
                                    class="event-detail-value"><?php echo get_post_meta(get_the_ID(), '_address', true); ?></span>
                            </div>
                            <div class="event-detail-wrap">
                                <span class="event-detail-title"><b>Phone No:</b></span>
                                <span
                                    class="event-detail-value"><?php echo get_post_meta(get_the_ID(), '_phone_number', true); ?></span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <?php
                            // Check if both coordinates are available
                            if ($map_x_coordinates && $map_y_coordinates) {

                                // Output the iframe HTML
                                ?>
                                <iframe
                                    src="https://maps.google.com/maps?q=<?php echo $map_x_coordinates ?>,<?php echo $map_y_coordinates; ?>&hl=en&z=20&amp;output=embed"
                                    frameborder="0">
                                </iframe>
                                <?php
                            } ?>
                        </div>
                    </div>
                <?php } ?>

                <div class="clearfix"></div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>