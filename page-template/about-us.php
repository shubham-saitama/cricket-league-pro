<?php
/**
 * Template Name:About Us Template
 *
 *
 */

get_header();
get_template_part('template-parts/banner');

$licount = get_theme_mod('cricket_league_pro_brand_list_length');
$ClientCount = get_theme_mod('cricket_league_pro_client_length');
?>
<div class="">
  <?php echo get_template_part('template-parts/home/section-aboutUs'); ?>
</div>


<section class="about-two-pts section-space">
  <div class="container">
    <div class="row justify-content-between">
      <div class="pt-one col-lg-6 col-md-6 col-12">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. when an unknown printer took a galley of type and scrambled it to
          dummy text make a type specimen book. when an unknown printer took a galley of type and scrambled it to make a
          type specimen book. when an unknown printer took a galley of type and scrambled it to make a type specimen
          book.</p>
      </div>
      <div class="pt-one col-lg-6 col-md-6 col-12">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. when an unknown printer took a galley of type and scrambled it to
          dummy text make a type specimen book. when an unknown printer took a galley of type and scrambled it to make a
          type specimen book. when an unknown printer took a galley of type and scrambled it to make a type specimen
          book.</p>
      </div>
    </div>
  </div>
</section>

<section class="mission">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="tabs">
          <ul class="tab-links">
            <li class="active"><a href="#mission">Mission</a></li>
            <li><a href="#vision">Vision</a></li>
            <li><a href="#history">History</a></li>
          </ul>

          <div class="tab-content">
            <div id="mission" class="tab active">
              <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                  <div class="tab-img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/history.png' ?>"
                      alt="Tab Image">
                  </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                  <div class="text-wrapper">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                      the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                      type and scrambled it to make a type specimen book. when an unknown printer took a galley of type
                      and scrambled it dummy text make a type specimen book. when an unknown printer took a galley of
                      type and scrambled it to make a type specimen book. when an unknown printer took a galley of type
                      and scrambled it to make a type specimen book.printer took galley of type and scrambled it to
                      dummy text make a type specimen book. when an unknown printer took galley of type and scrambled it
                      to make a type specimen book. when an unknown printer took a galley of type and scrambled it to
                      make a type specimen book.</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="vision" class="tab">
              <h2>Vision</h2>
              <p>Vision content goes here...</p>
            </div>

            <div id="history" class="tab">
              <h2>History</h2>
              <p>History content goes here...</p>
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
        Our Gallery
      </div>
      <h2 class="text-center">Our Gallery</h2>
      <?php echo do_shortcode('[vw-galleryshow vw_gallery="123" numberofitems="7"]') ?>
    </div>
  </div>
</section>
<?php get_template_part('/template-parts/home/section-clientSlider') ?>
<?php get_footer(); ?>