<?php

/**
 * Template part for displaying Top Bar Content
 *
 * @package home_automation_pro
 */

$about_section = get_theme_mod('home_automation_pro_topbar_enable_top');
if ('Disable' == $about_section) {
  return;
}


if (get_theme_mod('home_automation_pro_topbar_bgcolor', '')) {
  $background_setting = 'background-color:' . esc_attr(get_theme_mod('home_automation_pro_topbar_bgcolor', '')) . ';';
} elseif (get_theme_mod('home_automation_pro_topbar_bgimage', '')) {
  $background_setting = 'background-image:url(\'' . esc_url(get_theme_mod('home_automation_pro_topbar_bgimage')) . '\')';
} else {
  $background_setting = '';
}
$img_bg = get_theme_mod('home_automation_pro_topbar_image_bg');
?>
<section id="site_top" class="top_bar <?php echo esc_attr($img_bg); ?>"
  style="<?php echo esc_attr($background_setting); ?>">
  <div class="container container-full-width">
    <div class="row justify-content-between">
      <div class="col-xl-6 col-lg-7 col-md-6 align-self-center topbar-left">
        <div class="topbar-address">
          <i class="<?php echo get_theme_mod('home_automation_pro_topbar_left_icon_1'); ?>" aria-hidden="true"></i>
          <span class="topbar data"><?php echo get_theme_mod('home_automation_pro_topbar_left_1'); ?></span>
        </div>
      </div>
      <div class="col-xl-4 col-lg-5 col-md-6 align-self-center topbar-text topbar-text-contact">
        <div class="justify-content-end d-flex after-line position-relative">
          <div class="socialbox">
            <?php
            for ($i = 1; $i <= 4; $i++) {
              $icon_class = get_theme_mod('home_automation_pro_social_icons_' . $i);
              $social_link = get_theme_mod('home_automation_pro_social_icons_link_' . $i);
              if (!empty($icon_class)) {
                echo '<li><a target="_blank" href="' . esc_attr($social_link) . '"><i class="' . esc_attr($icon_class) . '"></i></a></li>';
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
</section>