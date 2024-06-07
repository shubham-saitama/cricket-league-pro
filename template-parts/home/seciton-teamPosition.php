<?php

$section_hide = get_theme_mod('home_automation_pro_league_table_enable');
if ('Disable' == $section_hide) { ?>
    <?php
    return;
}
if (get_theme_mod('home_automation_pro_league_table_bgcolor')) {
    $table_back = 'background-color:' . esc_attr(get_theme_mod('home_automation_pro_league_table_bgcolor', '')) . ';';
} elseif (get_theme_mod('home_automation_pro_league_table_bgimage')) {
    $table_back = 'background-image:url(\'' . esc_url(get_theme_mod('home_automation_pro_league_table_bgimage')) . '\')';
} else {
    $table_back = '';
}
$table_id = get_theme_mod('home_automation_pro_league_table_sec_id');
?>
<section id="leagueTable" style="<?php echo esc_attr($table_back); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12">
                <div class="heading-wrap">
                    <div class="heading-tag">
                        <?php echo get_theme_mod('home_automation_pro_league_table_section_headding_tag'); ?>
                    </div>
                    <h2><?php echo get_theme_mod('home_automation_pro_league_table_section_headding'); ?></h2>
                </div>
                <?php echo do_shortcode('[team_standings ' . $table_id . ']'); ?>
            </div>
            <div class="col-lg-5 col-md-12 col-12 postion-right">
                <div class="button-holder">
                    <div class="heading-wrap">
                        <div class="heading-tag">
                            <?php echo get_theme_mod('home_automation_pro_upcoming_table_heading_tag_one'); ?>
                        </div>
                        <h2><?php echo get_theme_mod('home_automation_pro_upcoming_table_heading_one'); ?></h2>
                    </div>
                    <a href="<?php echo get_permalink(get_page_by_title('Match Schedule')) ?>" class="theme-btn white">
                    <?php echo get_theme_mod('home_automation_pro_upcoming_view_all'); ?><i class="<?php echo get_theme_mod('home_automation_pro_league_table_icon') ?>"></i>
                    </a>
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
                    echo '<thead><tr><th>Date</th><th>Match</th><th>Venue</th><th>Time</th></tr></thead>';
                    echo '<tbody>';

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
                            echo '<td>' . $date . '</td>';
                            echo '<td>' . $match . '</td>';
                            echo '<td>' . $venue . '</td>';
                            echo '<td>' . $time . '</td>';
                            echo '</tr>';
                        }
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
    </div>
</section>