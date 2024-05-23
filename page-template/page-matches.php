<?php
/**
 * Template Name: Matches Page
 */

get_header();

get_template_part('template-parts/banner'); ?>

<?php do_action('cricket_league_pro_before_blog'); ?>

<div id="full-width-blog">
    <div class="container">
        <div class="content_page row">
            <?php
            // Custom WP Query to retrieve all events (matches) in SportPress plugin
            $args = array(
                'post_type' => 'sp_event', // The custom post type for events in SportPress
                'posts_per_page' => 9, // Retrieve all events, you can adjust this number as needed
                'orderby' => 'date', // Order by date
                'order' => 'DESC', // Descending order
            );

            // Perform the query
            $events_query = new WP_Query($args); ?>
            <div class="matches-slider-wrapper row">
                <?php
                // Check if there are any events
                if ($events_query->have_posts()) {
                    // Start the loop
                    while ($events_query->have_posts()) {
                        $events_query->the_post();

                        echo "<div class='col-lg-6 col-md-6 col-12 mb-5'>";
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
                        echo "</div>";
                    }
                    // pagination query 
                    custom_pagination($events_query);
                    wp_reset_postdata();
                } else {
                    // If no events found
                    echo 'No events found.';
                }
                ?>
                <div class="clearfix"></div>
            </div>
        </div>

        <?php do_action('cricket_league_pro_after_blog'); ?>
    </div>
</div>

<?php get_footer(); ?>