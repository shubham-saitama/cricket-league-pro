<?php
/**
 * Template Name:Contact us Template
 *
 *
 */

get_header();

if (get_theme_mod('home_automation_pro_contactus_page_bgcolor', '')) {
    $about_page_back = 'background-color:' . esc_attr(get_theme_mod('home_automation_pro_contactus_page_bgcolor', '')) . ';';
} elseif (get_theme_mod('home_automation_pro_contactus_page_bgimage', '')) {
    $about_page_back = 'background-image:url(\'' . esc_url(get_theme_mod('home_automation_pro_contactus_page_bgimage')) . '\')';
} else {
    $about_page_back = '';
}
$supportContactForm = get_theme_mod('home_automation_pro_contactus_form');
if (get_theme_mod('home_automation_pro_contactus_location_bg_image', '')) {
    $about_page_back_location = 'background-image:url(\'' . esc_url(get_theme_mod('home_automation_pro_contactus_location_bg_image')) . '\')';
} 
get_template_part('template-parts/banner'); 

?>



<section class="support-page py-5" style="<?php echo $about_page_back ?>">
    <div class="container">
        <div class="row">
            <div class="middle-content">
                <?php the_content(); ?>
            </div>
            <div class="contactus-section">
                <div class="row">
                    <div class="support-contact-info col-lg-6" style="<?php echo $about_page_back_location ?>">
                        <h3><?php echo get_theme_mod('home_automation_pro_contactus_contact_sectionheading'); ?></h3>
                        <p><?php echo get_theme_mod('home_automation_pro_contactus_contact_section_desc'); ?></p>
                        <div class="map">
                            <iframe
                                src="https://maps.google.com/maps?q=<?php echo get_theme_mod('home_automation_pro_contactus_latitude'); ?>,<?php echo get_theme_mod('home_automation_pro_contactus_longitude'); ?>&hl=en&z=20&amp;output=embed"
                                frameborder="0">
                            </iframe>
                        </div>
                    </div>
                    <div class="contact col-lg-6">
                        <div class="support-form-wrapper">
                            <?php echo do_shortcode($supportContactForm); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>