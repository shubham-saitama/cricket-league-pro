<i?php
/**
 * Template to show the use
 *
 * @package cricket_league_pro
 */
$section_hide = get_theme_mod('cricket_league_pro_about_enable');
if ('Disable' == $section_hide) {
  return;
}
if (get_theme_mod('cricket_league_pro_about_bgcolor', '')) {
  $per_back = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_about_bgcolor', '')) . ';';
} elseif (get_theme_mod('cricket_league_pro_about_bgimage', '')) {
  $per_back = 'background-image:url(\'' . esc_url(get_theme_mod('cricket_league_pro_about_bgimage')) . '\')';
} else {
  $per_back = '';
}
?>
<section id="about-us" class="section-space" style="<?php echo esc_attr($per_back); ?>">
  <div class="container">
    <div class="row align-item-center">
      <div class="col-lg-6 col-md-12 my-5 col-sm-12 about-left">
        <div class="primary-image">
          <div class="bat-image">
            <img src="<?php echo get_theme_mod('cricket_league_pro_aboutus_bat_image'); ?>" alt="The Bat">
          </div>
          <img src="<?php echo get_theme_mod('cricket_league_pro_aboutus_main_image'); ?>"
            alt="About Us Main Image">
          <div class="seconday-image">
            <img src="<?php echo get_theme_mod('cricket_league_pro_aboutus_sec_image'); ?>"
              alt="About us image" title="about us image">
          </div>
        </div>
        <div class="experience-wrap">
          <span class="number"><?php echo get_theme_mod('cricket_league_pro_years_experience'); ?></span>
          <div class="ex-text">
            <?php echo get_theme_mod('cricket_league_pro_experience_text'); ?>
          </div>
          <div class="ex-ball-wrap">
            <img src="<?php echo get_theme_mod('cricket_league_pro_aboutus_ball_image');?>" alt="Ball Image">
          </div>
        </div>
        <div class="helmet-wrap">
        <img src="<?php echo get_theme_mod('cricket_league_pro_aboutus_helmet'); ?>" alt="about us prop">
        </div>
      </div>
      <div class="col-lg-6 col-md-12 my-5 col-sm-12 about-right">
        <div class="heading-wrap">
          <div class="heading-tag">
            <?php echo get_theme_mod('cricket_league_pro_aboutus_headertag_text_heading'); ?>
          </div>
          <h2><?php echo get_theme_mod('cricket_league_pro_aboutus_heading_text_heading'); ?></h2>
        </div>
        <p><?php echo get_theme_mod('cricket_league_pro_aboutus_section_text_heading'); ?></p>
        <div class="about-us-inner mt-5">
          <a href="<?php echo get_permalink(get_page_by_title('About Us')) ?>" class="theme-btn"><?php echo get_theme_mod('cricket_league_pro_aboutus_button_heading'); ?><i class="<?php echo get_theme_mod('cricket_league_pro_about_button_icon'); ?>"></i></a>
          <div class="chairman-wrap">
            <div class="image-wrap">
              <img src="<?php echo get_theme_mod('cricket_league_pro_aboutus_chairman_dp_image'); ?>"
                alt="chair-person">
            </div>
            <div class="wrap-inner">
              <div class="chairman-name">
                <?php echo get_theme_mod('cricket_league_pro_aboutus_chariman_name_heading'); ?>
              </div>
              <span class="chairman-designation">
                <?php echo get_theme_mod('cricket_league_pro_designation_title_heading'); ?>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>