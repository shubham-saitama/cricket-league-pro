<?php
set_theme_mod('player_info_heading_tag', 'Explore Players');
set_theme_mod('player_info_heading', 'Popular Player Details');


$section_hide = get_theme_mod('cricket_league_pro_player_tabenabledisable');
if ('Disable' == $section_hide) { ?>
    <?php
    return;
}

if (get_theme_mod('cricket_league_pro_player_tabbgcolor')) {
    $player_tabback = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_player_tabbgcolor', '')) . ';';
} elseif (get_theme_mod('cricket_league_pro_player_tabbgimage')) {
    $player_tabback = 'background-image:url(\'' . esc_url(get_theme_mod('cricket_league_pro_player_tabbgimage')) . '\')';
} else {
    $player_tabback = '';
} ?>

<section class="playertab section-space" style="<?php echo esc_attr($player_tabback); ?>">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="heading-wrap">
                <div class="heading-tag text-center">
                    <?php echo get_theme_mod('player_info_heading_tag'); ?>
                </div>
                <h2 class="text-center"><?php echo get_theme_mod('player_info_heading'); ?></h2>
            </div>
            <div class="col-lg-3 col-md-3 col-12 player-tab-left-wrapper">
                <div class="width-helper">
                    <?php
                    $args = array(
                        'post_type' => 'sp_player',
                        'posts_per_page' => -1,
                    );

                    $players_query = new WP_Query($args);

                    if ($players_query->have_posts()):
                        while ($players_query->have_posts()):
                            $players_query->the_post();
                            // Get the URL of the featured image
                            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // 'full' is the size parameter, change it if you need a different size
                    
                            // Retrieve player's information
                            $team_id = get_post_meta(get_the_ID(), 'sp_current_team', true);
                            $team_title = $team_id ? get_post($team_id)->post_title : '';
                            $player_name = get_the_title();
                            $positions = wp_list_pluck(get_the_terms(get_the_ID(), 'sp_position'), 'name');
                            $position = implode(', ', $positions);
                            ?>
                            <div class="team-tab-left" data-player="<?php echo get_the_ID(); ?>">
                                <div class="player-img">
                                    <img src="<?php echo $featured_image_url; ?>" alt="Player Image">
                                </div>
                                <div class="tab-inner">
                                    <div class="team-name">
                                        <?php echo $team_title; ?>
                                    </div>
                                    <div class="player-name">
                                        <?php echo $player_name; ?>
                                    </div>
                                    <small><?php echo $position; ?></small>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); // Reset post data
                    else:
                        // No players found
                    endif; ?>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 team-main-tab">
                <?php
                $args = array(
                    'post_type' => 'sp_player',
                    'posts_per_page' => -1,
                );
                $players_query = new WP_Query($args);

                if ($players_query->have_posts()):
                    while ($players_query->have_posts()):
                        $players_query->the_post();
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // 'full' is the size parameter, change it if you need a different size
                        // Retrieve player's information
                        $team_id = get_post_meta(get_the_ID(), 'sp_current_team', true);
                        $team_title = $team_id ? get_post($team_id)->post_title : '';
                        $player_name = get_the_title();
                        $positions = wp_list_pluck(get_the_terms(get_the_ID(), 'sp_position'), 'name');
                        $position = implode(', ', $positions);
                        $height = '';
                        $metrics = get_post_meta(get_the_ID(), 'sp_metrics', true);
                        if (is_array($metrics) && isset($metrics['height'])) {
                            $height = $metrics['height'];
                        }
                        $age = get_post_meta(get_the_ID(), 'player_age', true);
                        $stats = get_post_meta(get_the_ID(), 'sp_statistics', true);


                        // Check if statistics are available
                        if (!empty($stats)) {
                            // Get the latest league ID
                            $latest_league_id = max(array_keys($stats));

                            $seasons = (array) get_terms('sp_season');


                            $latest_league_name = get_term($latest_league_id)->name;
                            foreach ($seasons as $season) {
                                $season_id = $season->term_id;

                                //   var_dump('latest season='.print_r($season_id,true));
                                $latest_season_id = 0;
                                if ($season_id > $latest_season_id) {
                                    $latest_season_id = $season_id;
                                }
                            }
                            $latest_season_name = get_term($latest_season_id)->name;

                            // Check if statistics are available for the latest season
                            if (isset($stats[$latest_league_id][$latest_season_id])) {

                                $latest_league_stats = $stats[$latest_league_id][$latest_season_id];

                                ?>
                                <div class="main-tab" id="player-<?php echo get_the_ID(); ?>">
                                    <div class="main-tab-inner">
                                        <div class="general-details">
                                            <div class="main-team-name">
                                                <?php echo $team_title; ?>
                                            </div>
                                            <div class="main-player-title">
                                                <?php echo $player_name; ?>
                                            </div>
                                        </div>
                                        <div class="physical-details">
                                            <div class="deatils">
                                                <div class="deatil-name">
                                                    Role
                                                </div>
                                                <div class="deatial-value">
                                                <?php echo !empty($position) ? $position : 'N/A'; ?>
                                                </div>
                                            </div>
                                            <div class="deatils">
                                                <div class="deatil-name">
                                                    Height
                                                </div>
                                                <div class="deatial-value">
                                                    <?php echo !empty($height) ? $height : 'N/A'; ?>
                                                </div>
                                            </div>
                                            <div class="deatils">
                                                <div class="deatil-name">
                                                    Age
                                                </div>
                                                <div class="deatial-value">
                                                    <?php echo $age; ?>
                                                    <?php echo !empty($height) ? $height : 'N/A'; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="season-details">
                                            <div class="season-name">
                                                <?php echo $latest_season_name; ?>
                                            </div>
                                            <div class="stats">
                                                <div class="stats-inner">
                                                    <div class="num">
                                                        <?php echo $latest_league_stats['mat']; ?>
                                                    </div>
                                                    <small class="stat-name">
                                                        Matches
                                                    </small>
                                                </div>
                                                <div class="stats-inner">
                                                    <div class="num">
                                                        <?php echo $latest_league_stats['r']; ?>
                                                    </div>
                                                    <small class="stat-name">
                                                        Runs
                                                    </small>
                                                </div>
                                                <div class="stats-inner">
                                                    <div class="num">
                                                        <?php echo $latest_league_stats['w']; ?>
                                                    </div>
                                                    <small class="stat-name">
                                                        Wickets
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-tab-playimage">
                                        <img src="<?php echo $featured_image_url; ?>" alt="Player Imgae" title="Player Image Main">
                                    </div>
                                </div>
                                <?php
                            } else {
                                echo "No statistics available for the latest league <br>";
                            }
                        } else {
                            ?>
                            <div class="main-tab" id="player-<?php echo get_the_ID(); ?>">
                                <div class="main-tab-inner">
                                    <div class="general-details">
                                        <div class="main-team-name">
                                            <?php echo $team_title; ?>
                                        </div>
                                        <div class="main-player-title">
                                            <?php echo $player_name; ?>
                                        </div>
                                    </div>
                                    <div class="physical-details">
                                        <div class="deatils">
                                            <div class="deatil-name">
                                                Role
                                            </div>
                                            <div class="deatial-value">
                                            <?php echo !empty($position) ? $position : 'N/A'; ?>
                                            </div>
                                        </div>
                                        <div class="deatils">
                                            <div class="deatil-name">
                                                Height
                                            </div>
                                            <div class="deatial-value">
                                                <?php echo !empty($height) ? $height : 'N/A'; ?>
                                            </div>
                                        </div>
                                        <div class="deatils">
                                            <div class="deatil-name">
                                                Age
                                            </div>
                                            <div class="deatial-value">
                                                <?php echo !empty($age) ? $age : 'N/A'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="season-details">
                                        <div class="season-name">
                                            <?php echo $latest_season_name; ?>
                                            <?php echo '<br> Data Unavailable' ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-tab-playimage">
                                    <img src="<?php echo $featured_image_url; ?>" alt="Player Imgae" title="Player Image Main">
                                </div>
                            </div>
                            <?php
                        }
                    endwhile;
                    wp_reset_postdata(); // Reset post data
                else:
                    // No players found
                endif; ?>
            </div>

        </div>
    </div>
</section>