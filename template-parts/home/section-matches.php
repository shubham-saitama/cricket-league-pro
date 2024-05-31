<?php
$section_hide = get_theme_mod('cricket_league_pro_our_services_enable');
if ('Disable' == $section_hide) {
    return;
}
if (get_theme_mod('cricket_league_pro_our_services_bgcolor', '')) {
    $per_back = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_our_services_bgcolor', '')) . ';';
} elseif (get_theme_mod('cricket_league_pro_our_services_bgimage', '')) {
    $per_back = 'background-image:url(\'' . esc_url(get_theme_mod('cricket_league_pro_our_services_bgimage')) . '\')';
} else {
    $per_back = '';
}
$img_bg = get_theme_mod('cricket_league_pro_our_team_image');

// Define the post ID you want to fetch
$next_match_id = get_theme_mod('cricket_league_pro_next_match_id'); // Replace 123 with the actual post ID you want to fetch
?>
<section id="banner-below"  class="match section-space" style="<?php echo esc_attr($per_back); ?>"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12">
                <div class="timer-wrapper d-flex justify-content-between align-items-center">
                    <h2><?php echo get_theme_mod('cricket_league_pro_latest_heading_heading'); ?></h2>
                    <a href="<?php echo get_permalink(get_page_by_title('Matches')) ?>"
                        class="theme-btn"><?php echo get_theme_mod('cricket_league_pro_latest_see_all_btn_heading'); ?></a>
                </div>
                <?php
                // Custom WP Query to retrieve all events (matches) in SportPress plugin
                $args = array(
                    'post_type' => 'sp_event', // The custom post type for events in SportPress
                    'posts_per_page' => 3, // Retrieve all events, you can adjust this number as needed
                    'orderby' => 'date', // Order by date
                    'order' => 'DESC', // Descending order
                );

                // Perform the query
                $events_query = new WP_Query($args); ?>
                <div class="matches-slider-wrapper">
                    <div class="owl-carousel">
                        <?php
                        // Check if there are any events
                        if ($events_query->have_posts()) {
                            // Start the loop
                            while ($events_query->have_posts()) {
                                $events_query->the_post();

                                // Output event details
                                echo '<div class="slide-wrap">';

                                // Get the league associated with the event
                                $terms = wp_get_object_terms(get_the_ID(), 'sp_league');
                                $league_name = !empty($terms) ? $terms[0]->name : '';

                                // Output league name if available
                                if (!empty($league_name)) {
                                    echo '<h3>' . $league_name . '</h3>';
                                }

                                // Output event content
                                echo '<p class="match-descreption">' . get_the_content() . '</p>';
                                echo '<div class="mach-flex">';

                                // Get team IDs associated with the event
                                $team_ids = get_post_meta(get_the_ID(), 'sp_team', false);
                                $results = get_post_meta(get_the_ID(), 'sp_results', true);

                                // Output team logos and names
                                if (!empty($team_ids)) {
                                    $i = 0;
                                    foreach ($team_ids as $team_id) {
                                        $team_name = get_the_title($team_id);
                                        $team_logo = get_the_post_thumbnail_url($team_id, 'thumbnail');

                                        if (!empty($team_name)) {
                                            echo '<div class="team">';
                                            if (!empty($team_logo)) {
                                                echo '<img src="' . $team_logo . '" alt="' . $team_name . ' Logo">';
                                            }
                                            echo '<div class="team-name-score">';
                                            echo '<h6 class="the-name">' . $team_name . '</h6>';

                                            // Check if results are available
                                            if (!empty($results) && isset($results[$team_id])) {
                                                echo '<p class="the-result">' . $results[$team_id]['runs'] . '/' . $results[$team_id]['wicketslost'] . '(' . $results[$team_id]['overs'] . ')</p>';
                                            }

                                            echo '</div>';
                                            echo '</div>';

                                            // Output 'VS' between teams
                                            if ($i === 0) {
                                                echo "<div class='vs'> Vs </div>";
                                            }

                                            // Output match outcome if available
                                            if (!empty($results) && isset($results[$team_id]['outcome'][0]) && $results[$team_id]['outcome'][0] == 'win') {
                                                $wickets_left = 10 - intval($results[$team_id]['wicketslost']);
                                                echo '<div class="result-wrap">' . $team_name . ' won by ' . $wickets_left . ' wickets.</div>';
                                            }
                                        }
                                        $i++;
                                    }
                                }
                                echo '</div>'; // Close mach-flex
                                echo '</div>'; // Close slide-wrap
                            }

                            // Reset Post Data
                            wp_reset_postdata();
                        } else {
                            // If no events found
                            echo 'No events found.';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12 next-match-wrapper">
                <div class="timer-wrapper d-flex justify-content-between">
                    <h2><?php echo get_theme_mod('cricket_league_pro_next_match_title_heading'); ?></h2>
                    <?php echo do_shortcode('[countdown id="' . $next_match_id . '"]'); ?>
                </div>
                <div class="next-match-wrap">
                    <div class="card-top">
                        <?php
                        // Arguments for WP_Query
                        $args = array(
                            'post_type' => 'sp_event', // Replace 'your_post_type' with the name of your post type
                            'p' => $next_match_id, // Fetch by post ID
                            'posts_per_page' => '1'
                        );

                        // Create a new WP_Query instance
                        $specific_post_query = new WP_Query($args);

                        // Check if there are any events
                        if ($specific_post_query->have_posts()) {
                            // Start the loop
                            while ($specific_post_query->have_posts()) {
                                $specific_post_query->the_post();

                                // Output event details
                                echo '<div class="slide-wrap-latest">';
                                // Get the league associated with the event
                        
                                // Output league name if available
                                echo '<div class="mach-flex">';

                                // Get team IDs associated with the event
                                $team_ids = get_post_meta(get_the_ID(), 'sp_team', false);
                                $results = get_post_meta(get_the_ID(), 'sp_results', true);

                                // Output team logos and names
                                if (!empty($team_ids)) {
                                    $i = 0;
                                    foreach ($team_ids as $team_id) {
                                        $team_name = get_the_title($team_id);
                                        $team_logo = get_the_post_thumbnail_url($team_id, 'thumbnail');

                                        if (!empty($team_name)) {
                                            echo '<div class="team">';

                                            echo '<div class="team-name-score-latest">';
                                            echo '<h6 class="the-name">' . $team_name . '</h6>';
                                            if (!empty($team_logo)) {
                                                echo '<img src="' . $team_logo . '" alt="' . $team_name . ' Logo">';
                                            }
                                            echo '</div>';
                                            echo '</div>';

                                            // Output 'VS' between teams
                                            if ($i === 0) {
                                                echo "<div class='vs'><div class='live'>Live</div> <div>Vs</div></div>";
                                            }
                                        }
                                        $i++;
                                    }
                                }
                                echo '</div>'; // Close mach-flex
                                echo '</div>'; // Close slide-wrap
                            }

                            // Reset Post Data
                            wp_reset_postdata();
                        } else {
                            // If no events found
                            echo 'No events found.';
                        }
                        ?>
                        <div class="card-bottom">
                            <div class="loaction-wrapper">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p><?php echo get_theme_mod('cricket_league_pro_latest_location_text_heading'); ?></p>
                            </div>
                            <a href="<?php echo get_permalink(get_page_by_title('Match Schedule')); ?>" class="theme-btn">
                                <?php echo get_theme_mod('cricket_league_pro_latest_locationbtn_text_heading'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>