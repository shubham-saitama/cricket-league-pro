<?php
/**
 * Template to show the content of blog
 *
 * @package cricket_league_pro
 */
$about_section = get_theme_mod('cricket_league_pro_latest_blog_and_news_enable');
if ('Disable' == $about_section) {
  return;
}
if (get_theme_mod('cricket_league_pro_latest_blog_and_news_bgcolor', '')) {
  $about_backg = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_latest_blog_and_news_bgcolor', '')) . ';';
} elseif (get_theme_mod('cricket_league_pro_latest_blog_and_news_bgimage', '')) {
  $about_backg = 'background-image:url(\'' . esc_url(get_theme_mod('cricket_league_pro_latest_blog_and_news_bgimage')) . '\')';
} else {
  $about_backg = '';
}
$img_bg = get_theme_mod('cricket_league_pro_latest_blog_and_news_bgimage');

?>

<section id="blog-news" style="<?php echo esc_attr($about_backg); ?>"
  class="<?php echo esc_attr($img_bg); ?> section-space">
  <div class="container">
    <div class="row">
      <div class="button-holder">
        <div class="heading-wrap">
          <div class="heading-tag">
            <?php echo get_theme_mod('cricket_league_pro_blog_heading_tagline'); ?>
          </div>
          <h2><?php echo get_theme_mod('cricket_league_pro_blog_heading'); ?></h2>
        </div>
        <a href="<?php echo get_permalink(get_page_by_title('Blog')); ?>" class="theme-btn black">
          View All
        </a>
      </div>
      <div class="owl-carousel latest-bg">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 5,
          'order' => 'DESC',
          'orderby' => 'date'
        );
        $query = new WP_Query($args);

        if ($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
            ?>
            <div class="blog-card">
              <div class="blog-image">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="blog image">
              </div>
              <div class="blog-card-content">
                <div class="info-bar">
                  <p>
                    <i class="<?php echo get_theme_mod('cricket_league_pro_blog_fright_icon'); ?>"></i>
                    <?php
                    $post_categories = get_the_category();
                    if ($post_categories) {
                      foreach ($post_categories as $category) {
                        $category_link = get_category_link($category);
                        echo '<a href="' . esc_url($category_link) . '">' . $category->name . '</a>';
                        if ($category !== end($post_categories)) {
                          echo ', ';
                        }
                      }
                    }
                    ?>
                  </p>

                  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <p><i class="<?php echo get_theme_mod('cricket_league_pro_blog_author'); ?>"
                        aria-hidden="true"></i><?php the_author(); ?></p>
                  </a>
                </div>
                <a class="excrept-anchor" href="<?php the_permalink(); ?>">
                  <h5><?php the_title(); ?></h5>
                </a>
              </div>
              <div class="lower bar">
                <p><i
                    class="<?php echo get_theme_mod('cricket_league_pro_blog_comment_icon'); ?>"></i><?php comments_number(); ?>
                </p>
                <div class="date-box">
                  <i class="fa-solid fa-calendar-days"></i>
                  <?php
                  $date = get_the_date('d F Y'); // Format date as dd-month-yyyy (full month name)
                  echo $date;
                  ?>
                </div>
              </div>
            </div>
            <?php
          endwhile;
          wp_reset_postdata();
        else:
          echo "No posts found.";
        endif;
        ?>
      </div> <!-- end .owl-carousel -->
    </div> <!-- end .row -->
  </div> <!-- end .container -->
</section> <!-- end #blog-news -->
