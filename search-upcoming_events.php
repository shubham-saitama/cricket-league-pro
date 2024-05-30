<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package cricket-league-pro
 */
get_header();
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
                        <h1 class="entry-title">
                            <?php printf(__('Results For: %s', 'cricket-league-pro'), '<span>' . get_search_query() . '</span>'); ?>
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
<?php } ?>
<div class="searchbody ">
    <div class="container">
        <div class="middle-align py-5">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="row">
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()):
                                the_post();
                                $event_date = get_post_meta(get_the_ID(), '_event_date', true);
                                $start_time = get_post_meta(get_the_ID(), '_start_time', true);
                                $end_time = get_post_meta(get_the_ID(), '_end_time', true);
                                $location = get_post_meta(get_the_ID(), '_venue_name', true);
                                $entry_fees = get_post_meta(get_the_ID(), '_entry_fees', true);

                                // Format date and time
                                $event_date_formatted = date('d-M-Y', strtotime($event_date));
                                $start_time_am_pm = date('h:i A', strtotime($start_time));
                                $end_time_am_pm = date('h:i A', strtotime($end_time));
                                ?>
                                <div class="upcoming-item mb-5">
                                    <div class="upcoming-inner col-lg-8 col-md-8 col-12">
                                        <div class="evt-right">
                                            <p class="schedule-inner">
                                                <?php echo $start_time_am_pm ?> -
                                                <?php echo $end_time_am_pm?>
                                            </p>
                                            <div class="heading-wrap-evt">
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                            <p class="address"><?php echo $location ?>
                                            </p>
                                            <div class="event-content">
                                                <p><?php the_excerpt(); ?></p>
                                            </div>
                                            <p class="Price">$ <?php echo $entry_fees; ?></p>
                                        </div>
                                    </div>
                                    <div class="featured-image col-lg-3 col-md-4 col-12">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium', array('class' => 'img-fluid wp-post-image'));
                                            } ?>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <div class="navigation">
                                <?php
                                // Previous/next page navigation.
                                the_posts_pagination(
                                    array(
                                        'prev_text' => __('Previous page', 'cricket-league-pro'),
                                        'next_text' => __('Next page', 'cricket-league-pro'),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'cricket-league-pro') . ' </span>',
                                    )
                                );
                                ?>
                            </div>
                        <?php else: ?>
                            <?php get_template_part('no-results', 'search'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>