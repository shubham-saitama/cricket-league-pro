<?php


$section_hide = get_theme_mod('cricket_league_pro_upcoming_evt_enabledisable');
if ('Disable' == $section_hide) { ?>
    <?php
    return;
}

if (get_theme_mod('cricket_league_pro_upcoming_evt_bg_color')) {
    $upcoming_evt_back = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_upcoming_evt_bg_color', '')) . ';';
} elseif (get_theme_mod('cricket_league_pro_upcoming_evt_bg_image')) {
    $upcoming_evt_back = 'background-image:url(\'' . esc_url(get_theme_mod('cricket_league_pro_upcoming_evt_bg_image')) . '\')';
} else {
    $upcoming_evt_back = '';
} ?>

<section id="upcoming-evt" style="<?php echo esc_attr($upcoming_evt_back); ?>">
    <div class="container">
        <div class="row">
            <div class="button-holder">
                <div class="heading-wrap">
                    <div class="heading-tag">
                        <?php echo get_theme_mod('cricket_league_pro_upcoming_evt_heading_tag'); ?>
                    </div>
                    <h2 class="left"><?php echo get_theme_mod('cricket_league_pro_upcoming_evt_heading'); ?></h2>
                </div>
                <a href="<?php echo get_permalink(get_page_by_title('Events'))?>" class="theme-btn black">
                   <?php echo get_theme_mod('cricket_league_pro_upcoming_evt_view_all'); ?>
                </a>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <?php
            $args = array(
                'post_type' => 'upcoming_events',
                'posts_per_page' => -1, // Retrieve all upcoming events
            
                'order' => 'ASC',
            );

            $events_query = new WP_Query($args);
            if ($events_query->have_posts()):
                while ($events_query->have_posts()):
                    $events_query->the_post();
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
                    
                    ?>
                    <div class="upcoming-item">
                        <div class="evt-left">
                            <span class="date">
                                <?php echo $date; ?>
                            </span>
                            <?php echo $day; ?>
                        </div>
                        <div class="evt-right">
                            <p class="schedule"><?php echo $event_date_formatted; ?> - <?php echo esc_html($start_time_am_pm); ?> To
                                <?php echo $event_date_formatted; ?> - <?php echo esc_html($end_time_am_pm); ?>
                            </pc>
                            <div class="heading-wrap-evt">
                                <h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </div>
                            <p class="address"><?php echo esc_html($location); ?></p>
                            <div class="event-content">
                                <?php the_content(); ?>
                            </div>
                            <p class="Price">$ <?php echo esc_html($entry_fees); ?></p>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo 'No upcoming events found.';
            endif;
            ?>
        </div>
    </div>
    </div>
</section>
