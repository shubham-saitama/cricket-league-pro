<?php
/**
 * Template to show the content of Slider
 *
 * @package cricket-league-pro
 */

$section_hide = get_theme_mod('home_automation_pro_slider_enabledisable');
if ('Disable' == $section_hide) { ?>
  <?php
  return;
}
if (get_theme_mod('home_automation_pro_slider_bgimage', '')) {
  $slider_back_imge = get_theme_mod('home_automation_pro_slider_bgimage');
}
if (get_theme_mod('home_automation_pro_slider_bgcolor', '')) {
  $slider_back = 'background-color:' . esc_attr(get_theme_mod('home_automation_pro_slider_bgcolor', '')) . ';';
} else {
  $slider_back = '';
}
$img_bg = get_theme_mod('home_automation_pro_slider_bgimage_setting');
?>
<div id="mydiv" style="display:none;">
</div>
<div class="lightboxright">
  
</div>
<div style="clear:both;"></div>
</div>
</div>
<section id="slider" class=" section-space" style="<?php echo $slider_back; ?>">
  <div class="banner-background">
    <img src="<?php echo $slider_back_imge ?>" alt="Banner Background">
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="banner-left col-lg-6 col-md-12 col-sm-12">
        <span class="banner-tag">
          <?php echo get_theme_mod('home_automation_pro_banner_tag'); ?>
        </span>
        <h1 class="banner-heading" id="dynamic-color" data-word="<?php echo get_theme_mod('home_automation_pro_slider_heading_color_text'); ?>">
          <?php echo get_theme_mod('home_automation_pro_slider_heading'); ?>
        </h1>
        <p class="slider-text">
          <?php echo get_theme_mod('home_automation_pro_slider_text'); ?>
        </p>
        <div class="banner-button-wrap mt-3">
          <a href="<?php echo get_permalink(get_page_by_title('Matches')); ?>" class="theme-btn orange">
            <?php echo get_theme_mod('home_automation_pro_slider_btntext') ?>
            <i class="<?php echo get_theme_mod('home_automation_pro_banner_button_icon'); ?>"></i>
          </a>
          <div class="banner-inner-wrap ">
            <a href="<?php echo get_theme_mod('home_automation_pro_cost_calcuator_shortcode_link'); ?>"
              class="play-btn-tag html5lightbox">
              <i class="<?php echo get_theme_mod('home_automation_pro_banner_playbtn_icon'); ?>" aria-hidden="true"></i>
            </a>
            <span class="inner-text">
              <?php echo get_theme_mod('home_automation_pro_cost_calcuator_shortcode'); ?>
            </span>
          </div>
        </div>
      </div>
      <div class="banner-right col-lg-6 col-md-12 col-sm-12">
        <div class="banner-image">
          <img src="<?php echo get_theme_mod('home_automation_pro_slider_player_img'); ?>" alt="Player Imnage">
        </div>
        <div class="banner-right-ball">
          <img src="<?php echo get_theme_mod('home_automation_pro_slider_banner_ball'); ?>" alt="Cricket Ball Image">
        </div>
      </div>
    </div>
  </div>

</section>