<?php

$header_widgets_section = get_theme_mod('cricket_league_pro_header_widgets_enable');
if ('Disable' == $header_widgets_section) {
  return;
}
if (get_theme_mod('cricket_league_pro_header_widgets_bgcolor', '')) {
  $background_setting = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_header_widgets_bgcolor', '')) . ';';
} elseif (get_theme_mod('cricket_league_pro_header_bgimage', '')) {
  $background_setting = 'background-image:url(' . esc_attr(get_theme_mod('cricket_league_pro_header_bgimage', '')) . ');';
} else {
  $background_setting = '';
}

$cart_url = wc_get_cart_url();

// Get the number of items in the cart
$cart_count = WC()->cart->get_cart_contents_count();
$args = array(
  'post_type' => 'page',
  'post_status' => 'publish',
  'posts_per_page' => 1,
  'title' => 'Wishlist',
);

$wishlist_page = new WP_Query($args);

if ($wishlist_page->have_posts()) {
  $wishlist_page->the_post();
  $wishlist_page_url = get_permalink();
  wp_reset_postdata();

  // Now $wishlist_page_url contains the URL of the Wishlist page
} ?>
<div id="vw-sticky-menu">
  <div class="container" style="<?php echo $background_setting ?>">
    <div class="row align-items-center justify-content-between bat-background">
      <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="vw-logo" id="site-sticky-menu1">
          <?php
          $logo = get_theme_mod('custom_logo');
          if ($logo != '') {
            if (has_custom_logo()) {
              cricket_league_pro_the_custom_logo();
            }
          } else { ?>
            <?php if (get_theme_mod('cricket_league_pro_display_default_logo', true) != false) { ?>
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" target="_blank"><img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png"
                  alt="<?php bloginfo('name'); ?>" /></a>
            <?php } ?>
          <?php } ?>
          <div class="logo-text">
            <?php if (get_theme_mod('cricket_league_pro_display_title') != false) { ?>
              <h2><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                  <?php esc_attr(bloginfo('name')); ?>
                </a></h2>
            <?php }
            if (get_theme_mod('cricket_league_pro_display_tagline') != false) {
              $description = get_bloginfo('description', 'display');
              if ($description || is_customize_preview()): ?>
                <p>
                  <?php echo esc_html($description); ?>
                </p>
              <?php endif;
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-xl-8 col-lg-10 col-md-9 col-sm-6 col-6 white-back">
        <div class="row align-items-center justify-content-between">
          <div class="col-xl-8 col-lg-8 col-md-2 col-sm-2 col-1 text-center">
            <div class="innermenubox">
              <div class="main-header">
                <div id="mySidenav" class="sidenav">
                  <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'primary',
                        'container_class' => 'menu clearfix',
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s primary_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      )
                    );
                    ?>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 text-center">
            <div class="header-right">
              <a href="<?php echo $wishlist_page_url; ?>"><i class="<?php echo get_theme_mod('cricket_league_pro_header_right_icons_heart'); ?>"></i></a>
              <div class="search-button"><i class="<?php echo get_theme_mod('cricket_league_pro_header_right_icons_search'); ?>"></i></div>

              <?php
              echo '<a href="' . esc_url($cart_url) . '"><i class="'.esc_html(get_theme_mod('cricket_league_pro_header_right_icons_cart')).'"></i>' . esc_html__('', 'cricket-league-pro') . ' (' . esc_html($cart_count) . ')</a>';
              ?>
              <div class="toggle-nav mobile-menu">
                <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger" id="open_nav"><span
                    class="screen-reader-text">
                    <?php echo esc_html('Menu', 'cricket-league-pro'); ?>
                  </span>
                  <i
                    class="<?php echo esc_html(get_theme_mod('cricket_league_pro_res_open_menu_icon', 'fas fa-bars')); ?> menu-open"></i>
                  <i class="fa fa-times menu-close"></i>
                </div>

              </div>
              <form role="search" method="get" class="search-form desktop"
                action="<?php echo esc_url(home_url('/')); ?>">
                <label>
                  <span class="screen-reader-text"><?php echo _x('Search for:', 'label'); ?></span>
                  <input type="search" class="search-field"
                    placeholder="<?php echo esc_attr_x('Search …', 'placeholder'); ?>"
                    value="<?php echo get_search_query(); ?>" name="s" />
                </label>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <form role="search" method="get" class="search-form mobile" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
      <span class="screen-reader-text"><?php echo _x('Search for:', 'label'); ?></span>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search …', 'placeholder'); ?>"
        value="<?php echo get_search_query(); ?>" name="s" />
    </label>
  </form>
</div>

