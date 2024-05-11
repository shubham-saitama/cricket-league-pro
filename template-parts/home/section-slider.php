<?php
/**
 * Template to show the content of Slider
 *
 * @package cricket-league-pro
 */

$section_hide = get_theme_mod('cricket_league_pro_slider_enabledisable');
if ('Disable' == $section_hide) { ?>
  <?php
  return;
}

if (get_theme_mod('cricket_league_pro_slider_bgcolor', '')) {
  $slider_back = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_slider_bgcolor', '')) . ';';
} elseif (get_theme_mod('cricket_league_pro_slider_bgimage', '')) {
  $slider_back = get_theme_mod('cricket_league_pro_slider_bgimage');
} else {
  $slider_back = '';
}
$img_bg = get_theme_mod('cricket_league_pro_slider_bgimage_setting');
?>
<section id="slider" class=" section-space">
  <div class="banner-background">
    <img src="<?php echo $slider_back ?>" alt="Banner Background">
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="banner-left col-lg-6 col-md-12 col-sm-12">
        <span class="banner-tag">
          <?php echo get_theme_mod('cricket_league_pro_banner_tag'); ?>
        </span>
        <h1 class="banner-heading" id="dynamic-color">
          <?php echo get_theme_mod('cricket_league_pro_slider_heading'); ?>
        </h1>
        <p class="slider-text">
          <?php echo get_theme_mod('cricket_league_pro_slider_text'); ?>
        </p>
        <div class="banner-button-wrap mt-3">
          <a href="<?php echo get_permalink(get_page_by_title('Service')); ?>" class="theme-btn orange">
            <?php echo get_theme_mod('cricket_league_pro_slider_btntext') ?>
          </a>
          <div class="banner-inner-wrap ">
            <a href="#" class="play-btn-tag"><i class="fa fa-play" aria-hidden="true"></i></a>
            <span class="inner-text">
              Last Highlight Match
            </span>
          </div>
        </div>
      </div>
      <div class="banner-right col-lg-6 col-md-12 col-sm-12">
        <div class="banner-image">
          <img src="<?php echo get_theme_mod('cricket_league_pro_slider_player_img'); ?>" alt="Player Imnage">
        </div>
        <div class="banner-right-ball">
          <img src="<?php echo get_theme_mod('cricket_league_pro_slider_banner_ball'); ?>" alt="Cricket Ball Image">
        </div>
      </div>
    </div>
  </div>

</section>