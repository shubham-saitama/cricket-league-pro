<?php
/**
 * Template Name: Event Page Template
 */
get_header();
get_template_part('template-parts/banner'); ?>



<section class="event-page py-5">
    <div class="container">
        <div class="filter-events">
            <label for="filter-select">Filter by:</label>
            <select id="filter-select">
                <option value="year">Year</option>
                <option value="month">Month</option>
                <option value="today">Today</option>
            </select>
        </div>
        <div id="events-container">
            <!-- Events will be dynamically loaded here -->
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    // Function to fetch events based on selected filter
    function fetchEvents(filter) {
        var data = {
            action: 'fetch_events',
            filter: filter
        };

        // AJAX request to fetch events
        jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function (response) {
            jQuery('#events-container').html(response);
        });
    }

    // Event listener for dropdown change
    jQuery(document).ready(function ($) {
        $('#filter-select').change(function () {
            var selectedFilter = $(this).val();
            fetchEvents(selectedFilter);
        });
        // Fetch events for the default selected filter
        fetchEvents($('#filter-select').val());
    });
</script>