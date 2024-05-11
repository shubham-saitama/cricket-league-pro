<?php
/**
 * Template Name: Upcoming Events
 */

get_header();

get_template_part('template-parts/banner'); ?>


<section class="eventssearch py-5">
    <div class="container">
        <div class="row">
            <div class="button-holder">
                <div class="heading-wrap">
                    <div class="heading-tag">
                        Matchs
                    </div>
                    <h2>Match Schedule</h2>
                </div>
                <div class="input-wrapper-search">
                    <input type="text" id="seachEvents" placeholder="Search...">
                </div>
            </div>
            <?php
            $args = array(
                'post_type' => 'sp_event', // Specify the custom post type
                'posts_per_page' => -1, // Set to -1 to retrieve all posts
                'orderby' => 'date',
                'order' => 'ASC',
                'post_status' => array('publish', 'future') // Include future posts
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                echo '<table>'; // Start the table
                echo '<thead><tr><th>Sr No</th><th>Date</th><th>Match</th><th>Venue</th><th>Time</th><th>Booking</th></tr></thead>';
                echo '<tbody>';
                $i = 1;
                while ($query->have_posts()) {
                    $query->the_post();

                    // Retrieve team meta values
                    $teams = get_post_meta(get_the_ID(), 'sp_team');

                    // Ensure we have at least two teams to form a match
                    if (count($teams) >= 2) {
                        $team_names = array();

                        // Retrieve team names
                        foreach ($teams as $team_id) {
                            $team_name = get_the_title($team_id);
                            if ($team_name) {
                                $team_names[] = $team_name;
                            }
                        }

                        // Format and display the match
                        $match = implode(' vs ', $team_names);
                        $date = get_the_date('Y-m-d');
                        $time = get_the_date('h:i A', get_the_ID()); // Get time in AM/PM format
            
                        // Retrieve the venue (location) terms associated with the event
                        $venues = get_the_terms(get_the_ID(), 'sp_venue');
                        $venue = '';

                        if ($venues && !is_wp_error($venues)) {
                            foreach ($venues as $v) {
                                $venue = $v->name;
                                break;
                            }
                        }

                        // Display the event information in table row
                        echo '<tr>';
                        echo '<td>0' . $i . '</td>';
                        echo '<td>' . $date . '</td>';
                        echo '<td>' . $match . '</td>';
                        echo '<td>' . $venue . '</td>';
                        echo '<td>' . $time . '</td>';
                        echo '<td> <a href="#" class="theme-btn black">Book Now</a></td>';
                        echo '</tr>';
                    }
                    $i++;
                }

                echo '</tbody>';
                echo '</table>'; // End the table
            } else {
                // No posts found
                echo 'No events found.';
            }

            // Restore original post data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>