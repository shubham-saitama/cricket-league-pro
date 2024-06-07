<?php
/**
 * Template Name: Faq page template
 */
get_header();

$faqCount = get_theme_mod('home_automation_pro_faq_count', 5); // Number of FAQ questions to display
get_template_part('template-parts/banner');
?>
<section class="faq-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="accordion-wrapper">
                    <?php
                    for ($i = 1; $i <= $faqCount; $i++) {
                        $faqQuestion = get_theme_mod('home_automation_pro_faq' . $i);
                        $faqAnswer = get_theme_mod('home_automation_pro_faq_answer' . $i);
                        ?>

                        <?php
                        if ($faqQuestion && $faqAnswer) {
                            ?>
                            <h3 class="accordion-click">
                                <?php echo esc_html($faqQuestion); ?> <i
                                    class="<?php echo get_theme_mod('home_automation_pro_dropdown_icon_setting') ?>"></i>
                            </h3>
                            <div class="answer">
                                <?php echo esc_html($faqAnswer); ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>