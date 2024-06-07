<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package cricket-league-pro
 */
get_header();
$img = get_theme_mod('home_automation_pro_inner_page_banner_bgimage');
?>
<div class="title-box text-center banner-img" style="background-image:url(<?php echo esc_url($img); ?>)">
	<div class="banner-page-text container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-12">
				<div class="above_title">
					<h1>
						Search
					</h1>
					<?php if (get_theme_mod('home_automation_pro_site_breadcrumb_enable', true) != '') { ?>
						<div class="bradcrumbs py-2 b1">
							<?php home_automation_pro_the_breadcrumb(); ?>
						</div>
					<?php }
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="body-wrap">
	<div class="container">
		<h1 class="entry-title pt-5">
			<?php printf(__('Results For: %s', 'cricket-league-pro'), '<span>' . get_search_query() . '</span>'); ?>
		</h1>
	</div>
	<div class="container">
		<div class="middle-align">
			<div class="row">
				<div class="col-lg-9 col-sm-6 col-md-8">
					<div class="row">
						<?php if (have_posts()): ?>
							<?php while (have_posts()):
								the_post();
								get_template_part('template-parts/post/post-content');
							endwhile; ?>
							<div class="navigation">
								<?php // Previous/next page navigation.
									the_posts_pagination(
										array(
											'prev_text' => __('Previous page', 'cricket-league-pro'),
											'next_text' => __('Next page', 'cricket-league-pro'),
											'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'cricket-league-pro') . ' </span>',
										)
									); ?>
							</div>
						<?php else: ?>
							<?php get_template_part('no-results', 'search'); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<?php get_sidebar('page'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>