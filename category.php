<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package cricket-league-pro
 */
get_header();
$background_img = get_theme_mod('cricket_league_pro_inner_page_banner_bgimage');

?>

<div class="title-box text-center banner-img" style="background-image:url(<?php echo esc_url($background_img); ?>)">
	<div class="banner-page-text container">
		<div class="row justify-content-center">
			<div class="col-lg-12 col-sm-12 col-12">
				<div class="above_title">
					<h1>
						<?php the_archive_title(); ?>
					</h1>
					<?php if (get_theme_mod('cricket_league_pro_site_breadcrumb_enable', true) != '') { ?>
						<div class=" bradcrumbs">
							<?php cricket_league_pro_the_breadcrumb(); ?>
						</div>
					<?php }
					?>
				</div>
			</div>
			<div class="col-lg-8">

			</div>
		</div>
	</div>
</div>
<div class="archive-container">
	<div class="container">
		<div class="middle-align">
			<div class="row">
				<div class="col-md-12">
					<div class="row justify-content-start my-5">
						<?php if (have_posts()): ?>
							<?php /* Start the Loop */ ?>
							<?php while (have_posts()):
								the_post(); ?>
								<div class="col-lg-4 col-md-6 col-12 mb-3">
									<div class="blog-card">
										<div class="blog-image">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="blog image">
										</div>
										<div class="blog-card-content">
											<div class="info-bar">
												<p>
													<i
														class="<?php echo get_theme_mod('cricket_league_pro_blog_fright_icon'); ?>"></i>
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
								</div>
							<?php endwhile; ?>
							<?php // Previous/next page navigation.
								// the_posts_pagination( array(
								// 	'prev_text'          => __( 'Previous page', 'cricket-league-pro' ),
								// 	'next_text'          => __( 'Next page', 'cricket-league-pro' ),
								// 	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'cricket-league-pro' ) . ' </span>',
								// )); ?>
						<?php endif; ?>
					</div>
				</div>
				<?php /*<div class="col-md-4">
								   <?php get_sidebar( 'page' ); ?>
							   </div> */ ?>

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>