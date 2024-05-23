<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package cricket-league-pro
 */
get_header();

if (get_theme_mod('cricket_league_pro_404_page_bgcolor', '')) {
	$error_page_back = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_404_page_bgcolor', '')) . ';';
} elseif (get_theme_mod('cricket_league_pro_404_page_bgimage', '')) {
	$error_page_back = 'background-image:url(\'' . esc_url(get_theme_mod('cricket_league_pro_404_page_bgimage')) . '\')';
} else {
	$error_page_back = '';
}
$img_bg = get_theme_mod('cricket_league_pro_404_page_bg_attachment');

$img = get_theme_mod('cricket_league_pro_inner_page_banner_bgimage');
$display = '';
$display_title_bbanner = '';
$vw_title_banner_image_title_on_off = get_post_meta($post->ID, 'vw_title_banner_image_title_on_off', true);
if ($vw_title_banner_image_title_on_off == 'on')
	$display = 'style=display:none;';
$vw_title_banner_image_title_below_on_off = get_post_meta($post->ID, 'vw_title_banner_image_title_below_on_off', true);
if ($vw_title_banner_image_title_below_on_off != 'on')
	$display_title_bbanner = 'style=display:none;';
if ($img != '') { ?>
	<div class="title-box text-center banner-img" style="background-image:url(<?php echo esc_url($img); ?>)">
		<div class="banner-page-text container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-12">
					<div class="above_title">
						<h1>
							Not Found
						</h1>
						<?php if (get_theme_mod('cricket_league_pro_site_breadcrumb_enable', true) != '') { ?>
							<div class="bradcrumbs py-2 b1">
								<?php cricket_league_pro_the_breadcrumb(); ?>
							</div>
						<?php }
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container main_title" <?php echo esc_attr($display_title_bbanner); ?>>
		<h1>
			<?php the_title(); ?>
		</h1>
		<?php if (get_theme_mod('cricket_league_pro_site_breadcrumb_enable', true) != '') { ?>
			<div class="container bradcrumbs py-3 b2">
				<?php cricket_league_pro_the_breadcrumb(); ?>
			</div>
		<?php } ?>

	</div>
<?php } else { ?>
	<div class="container main_title">
		<h1>
			<?php the_title(); ?>
		</h1>
		<?php if (get_theme_mod('cricket_league_pro_site_breadcrumb_enable', true) != '') { ?>
			<div class="container bradcrumbs py-3 b2">
				<?php cricket_league_pro_the_breadcrumb(); ?>
			</div>
		<?php } ?>

	</div>
<?php } ?>

<section class="content_page error-page <?php echo esc_attr($img_bg); ?>"
	style="<?php echo esc_attr($error_page_back); ?>">
	<div class="container">
		<div class="row text-center justify-content-center">
			<div class="col-md-8 tablet-error">
				<img class="errorimg"
					src="<?php echo esc_html(get_theme_mod('cricket_league_pro_error_temp_bg_images')); ?>">
				<div class="page-content error_bgs mt-4">
					<?php if (get_theme_mod('cricket_league_pro_404_page_heading') != ''): ?>
						<h2 class="error-heading mb-4">
							<?php echo esc_html(get_theme_mod('cricket_league_pro_404_page_heading')); ?>
						</h2>
					<?php endif; ?>
					<?php if (get_theme_mod('cricket_league_pro_404_page_content') != ''): ?>
						<p class="error-para mt-3">
							<?php echo esc_html(get_theme_mod('cricket_league_pro_404_page_content')); ?>
						</p>
					<?php endif; ?>
					<?php if (get_theme_mod('cricket_league_pro_404_page_button_text') != ''): ?>
						<a class="theme-btn black mt-4" href="<?php echo esc_url(home_url()); ?>">
							<?php echo esc_html(get_theme_mod('cricket_league_pro_404_page_button_text')); ?>
						</a>
					<?php endif; ?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>