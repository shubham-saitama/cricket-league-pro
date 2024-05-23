<?php
if (!is_singular()) {
	return;
}
global $post;

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
							<?php the_title(); ?>
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