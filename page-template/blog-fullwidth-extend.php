<?php
/**
 * Template Name:Blog Full Width Extend
 */

get_header();

get_template_part('template-parts/banner'); ?>

<?php do_action('cricket_league_pro_before_blog'); ?>

<div id="full-width-blog">
	<div class="container">
		<div class="content_page row">
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 6,
				'order' => 'DESC',
				'orderby' => 'date'
			);
			$query = new WP_Query($args);

			if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post();
					?>
					<div class="col-lg-4 col-md-6 col-12 mb-5">
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
									<i class="fa-solid fa-calendar-days"></i><?php echo get_the_date('D,M,Y'); ?>
								</div>
							</div>
						</div>
					</div>
					<?php
				endwhile;
				// pagination query 
				custom_pagination($query);
				wp_reset_postdata();
			else:
				echo "No posts found.";
			endif;
			?>
			</section>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php do_action('cricket_league_pro_after_blog'); ?>

<?php get_footer(); ?>