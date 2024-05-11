<?php
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
      <div class="col-lg-6 col-md-12 mb-5 col-sm-12 about-left">
        <div class="primary-image">
          <div class="bat-image">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/about/bat.png' ?>" alt="The Bat">
          </div>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/about/aboutPrimary.png' ?>"
            alt="About Us Main Image">
          <div class="seconday-image">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/about/aboutSecondary.png' ?>"
              alt="About us image" title="about us image">
          </div>
        </div>
        <div class="experience-wrap">
          <span class="number">22</span>
          <div class="ex-text">
            Year's Experience In It.
          </div>
          <div class="ex-ball-wrap">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/about/BALL.png' ?>" alt="Ball Image">
          </div>
        </div>
        <div class="helmet-wrap">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/about/helmet.png' ?>" alt="about us prop">
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-5 col-sm-12 about-right">
        <div class="heading-wrap">
          <div class="heading-tag">
            About us
          </div>
          <h2>Life Is An Elaborate Metaphor For VW Cricket</h2>
        </div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. when an unknown printer took a galley of type and scrambled it to
          make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
          an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <div class="about-us-inner mt-5">
          <a href="#" class="theme-btn">Explore More</a>
          <div class="chairman-wrap">
            <div class="image-wrap">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/about/john.png' ?>"
                alt="chair-person">
            </div>
            <div class="wrap-inner">
              <div class="chairman-name">
                john cena
              </div>
              <span class="chairman-designation">
                Chairman
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>