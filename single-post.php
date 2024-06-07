<?php
/**
 * The Template for displaying all single posts.
 *
 * @package cricket-league-pro
 */
get_header();
get_template_part('template-parts/banner');

?>
<?php while (have_posts()):
	the_post(); ?>
	<div class=" blog-single">
		<div class="container single-post" id="single-post-page">
			<div class="row justify-content-center">
				<div class="content_page col-lg-8 col-md-8 col-sm-12 pt-5">
					<div class="single-post">
						<?php if (has_post_thumbnail()) { ?>
							<div class="single-post-img">
								<img src="<?php the_post_thumbnail_url('full'); ?>">
							</div>
						<?php } ?>
						<div class="single-page-title text-lg-start text-md-start mt-3">
							<h2>
								<?php echo get_the_title(); ?>
							</h2>
						</div>
						<div class="">
							<p class="mb-4">
								<?php echo esc_html(get_post_meta($post->ID, 'post_para_1', true)); ?>
							</p>
						</div>
						<ul class="d-flex justify-content-between align-items-center mb-4">
							<?php
							// Get the post categories
							$categories = get_the_terms($post_id, 'category'); // Replace $post_id with the ID of your post
							?>
							<?php if (get_theme_mod('cricket_league_pro_post_general_settings_post_author', true) == "1") { ?>
								<li class="entry-author list-unstyled">
									<img class="single-author-image"
										src="<?php echo esc_url(get_avatar_url($current_user->ID)); ?>">
									<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
										<?php the_author(); ?>
									</a>
								</li>
							<?php } ?>

							<?php if (get_theme_mod('cricket_league_pro_post_general_settings_post_date', true) == "1") { ?>
								<li class="entry-date before-dot self-align-center">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<?php echo esc_html(get_the_date('M d, Y')); ?>
								</li>
							<?php } ?>
							<?php if (get_theme_mod('cricket_league_pro_post_general_settings_post_comments', true) == "1") { ?>
								<li class="entry-comments">
									<i class="fa fa-comments" aria-hidden="true"></i>
									<a href="#comments">
										<?php comments_number(__('0 Comments', 'cricket-league-pro'), __('0 Comments', 'cricket-league-pro'), __('0 % Comments', 'cricket-league-pro')); ?>
									</a>
								</li>
							<?php } ?>
							<?php cricket_league_pro_social_share()?>
							<li class="categories">
								<i class="fa fa-tags" aria-hidden="true"></i>
								<a href=""><?php
								// Check if categories exist
								if ($categories && !is_wp_error($categories)) {
									// Loop through each category
									foreach ($categories as $category) {
										// Output category name
										echo $category->name;
									}
								}
								?></a>
							</li>
						</ul>
					</div>

					<h6>
						<?php
						$post_que = get_post_meta($post->ID, 'post_que', true);

						echo $post_que;
						?>
					</h6>
					<?php
					the_content();
					?>
				</div>
				<div class="page-sidebar pt-5 col-lg-4 col-md-4 col-12">
					<?php dynamic_sidebar('sidebar-2') ?>
				</div>
				<div class="single-post-comment col-lg-12 col-md-12 col-12 section-space">
					<?php
					if (comments_open() || '0' != get_comments_number()) {
						comments_template();
					}
					?>
				</div>
				<div class="recent-posts">
					<?php if (get_theme_mod('cricket_league_pro_single_blog_heading_tag') != false && get_theme_mod('cricket_league_pro_blog_heading') != false) { ?>
						<div class="heading text-center">
							<div class="heading-tagline">
								<?php echo get_theme_mod('cricket_league_pro_single_blog_heading_tag'); ?>
							</div>
							<h2>
								<?php echo get_theme_mod('cricket_league_pro_single_blog_heading'); ?>
							</h2>
						</div>
					<?php } ?>

					<div class="related-posts">
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
												<i class="fa-solid fa-calendar-days"></i><?php echo get_the_date('D,M,Y'); ?>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
	</div>
<?php endwhile; // end of the loop. ?>

<?php get_footer();