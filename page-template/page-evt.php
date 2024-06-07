<?php
/**
 * Template Name: Event Page Template
 */
get_header();
get_template_part('template-parts/banner'); ?>
<section class="event-page py-5">
    <div class="container">
        <div class="filter-events">
            <div>
                <label for="filter-select"><?php echo get_theme_mod('home_automation_pro_event_page_filter_by'); ?></label>
                <select id="filter-select">
                    <option value="year">Year</option>
                    <option value="month">Month</option>
                    <option value="today">Today</option>
                </select>
            </div>
            <div class="input-wrapper-search">
                <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                    <label for="s"
                        class="screen-reader-text"><?php _e('Search for:', 'your-theme-textdomain'); ?></label>
                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"
                        placeholder="<?php _e('Search upcoming events...', 'your-theme-textdomain'); ?>"
                        oninput="this.form.submit()" />
                    <input type="hidden" name="post_type" value="upcoming_events" />
                </form>
            </div>
        </div>
        <div id="events-container">
            <!-- Events will be dynamically loaded here -->
        </div>
    </div>
</section>

<?php get_footer(); ?>


