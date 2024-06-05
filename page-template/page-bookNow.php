<?php
/**
 * Template Name: Booking page
 */
get_header();
get_template_part('template-parts/banner');
?>
<section class="booking-from py-5">
    <div class="container">
        <div class="row">
            <div class="book-from-wrapper">
                <div class="book-headin-wrapper">
                    <h2>Cricket Ticket Pass</h2>
                </div>
                <div class="from-inner-wrap">
                    <?php echo do_shortcode('[contact-form-7 id="2cf6ec4" title="Booking Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>