<?php
/**
 * Template Name:About Us Template
 *
 *
 */

get_header();
get_template_part('template-parts/banner');

$licount = get_theme_mod('home_automation_pro_brand_list_length');
$ClientCount = get_theme_mod('home_automation_pro_client_length');
$gallery_shortcode = get_theme_mod('home_automation_pro_gallery_section_shortcode');
?>
<div class="">
  <?php echo get_template_part('template-parts/home/section-aboutUs'); ?>
</div>


<section class="about-two-pts section-space">
  <div class="container">
    <div class="row justify-content-between">
      <?php if (!empty(get_theme_mod('home_automation_pro_about_us_listical_pts'))) { ?>
        <div class="pt-one col-lg-6 col-md-6 col-12">
          <p><?php echo get_theme_mod('home_automation_pro_about_us_listical_pts'); ?></p>
        </div>
      <?php } ?>
      <?php if (!empty(get_theme_mod('home_automation_pro_about_us_listical_pts_2'))) { ?>
        <div class="pt-one col-lg-6 col-md-6 col-12">
          <p><?php echo get_theme_mod('home_automation_pro_about_us_listical_pts_2'); ?></p>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="mission">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="tabs">
          <ul class="tab-links">
            <li class="active"><a
                href="#mission"><?php echo get_theme_mod('home_automation_pro_aboutus_tab_name_1'); ?></a></li>
            <li><a href="#vision"><?php echo get_theme_mod('home_automation_pro_aboutus_tab_name_2'); ?></a></a></li>
            <li><a href="#history"><?php echo get_theme_mod('home_automation_pro_aboutus_tab_name_3'); ?></a></a></li>
          </ul>

          <div class="tab-content">
            <div id="mission" class="tab active">
              <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                  <div class="tab-img-wrapper">
                    <img src="<?php echo get_theme_mod('home_automation_pro_aboutus_tab_ptsImage_1'); ?>"
                      alt="Tab Image">
                  </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                  <div class="text-wrapper">
                    <h3><?php echo get_theme_mod('home_automation_pro_aboutus_tab_Heading_1'); ?></h3>
                    <p><?php echo get_theme_mod('home_automation_pro_aboutus_tab_text_pts_1'); ?></p>
                  </div>
                </div>
              </div>
            </div>

            <div id="vision" class="tab">
              <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                  <div class="tab-img-wrapper">
                    <img src="<?php echo get_theme_mod('home_automation_pro_aboutus_tab_ptsImage_2'); ?>"
                      alt="Tab Image">
                  </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                  <div class="text-wrapper">
                    <h3><?php echo get_theme_mod('home_automation_pro_aboutus_tab_Heading_2'); ?></h3>
                    <p><?php echo get_theme_mod('home_automation_pro_aboutus_tab_text_pts_2'); ?></p>
                  </div>
                </div>
              </div>
            </div>

            <div id="history" class="tab">
              <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                  <div class="tab-img-wrapper">
                    <img src="<?php echo get_theme_mod('home_automation_pro_aboutus_tab_ptsImage_3'); ?>"
                      alt="Tab Image">
                  </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                  <div class="text-wrapper">
                    <h3><?php echo get_theme_mod('home_automation_pro_aboutus_tab_Heading_3'); ?></h3>
                    <p><?php echo get_theme_mod('home_automation_pro_aboutus_tab_text_pts_3'); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="our-staff section-space">
  <div class="container">
    <div class="row">
      <?php
      // Custom WP_Query to retrieve staff members
      $args = array(
        'post_type' => 'our_staff',
        'posts_per_page' => -1 // Retrieve all staff members
      );
      $staff_query = new WP_Query($args);
      ?>
      <div class="heading-wrap text-center">
        <div class="heading-tag text-center">
          Our Staff
        </div>
        <h2 class="text-center">Our Management Staff</h2>
      </div>
      <div class="staff-carousel my-4">
        <div class="owl-carousel">
          <?php
          if ($staff_query->have_posts()):
            while ($staff_query->have_posts()):
              $staff_query->the_post();
              $position = get_post_meta(get_the_ID(), 'staff_position', true);
              ?>
              <div class="staff-card">
                <div class="staff-img-wrap">
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php endif; ?>
                </div>
                <div class="staff-details">
                  <h5><?php the_title(); ?></h5>
                  <p><?php echo $position; ?></p>
                  <?php the_content(); ?>
                </div>
              </div>
              <?php
            endwhile;
            wp_reset_postdata();
          else:
            echo 'No staff members found.';
          endif;
          ?>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="aboutus-gallery">
  <div class="container">
    <div class="row justify-content-center">
      <div class="heading-tag text-center">
        <?php echo get_theme_mod('home_automation_pro_gallery_heading'); ?>
      </div>
      <h2 class="text-center"><?php echo get_theme_mod('home_automation_pro_gallery_heading_tag'); ?></h2>
      <?php echo do_shortcode($gallery_shortcode); ?>
    </div>
  </div>
</section>
<?php get_template_part('/template-parts/home/section-clientSlider') ?>
<?php get_footer(); ?>