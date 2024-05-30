<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.3
 */
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
get_header();

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
							SHOP
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
<main id="maincontent" role="main">
	<div class="fsp-shop-page py-5">
		<?php
		/**
		 * Hook: woocommerce_before_main_content.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		do_action('woocommerce_before_main_content');
		?>
		<div class="">
			<div class="">
				<header class="woocommerce-products-header">
					<?php if (apply_filters('woocommerce_show_page_title', true)): ?>
						<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
					<?php endif; ?>

					<?php
					/**
					 * Hook: woocommerce_archive_description.
					 *
					 * @hooked woocommerce_taxonomy_archive_description - 10
					 * @hooked woocommerce_product_archive_description - 10
					 */
					do_action('woocommerce_archive_description');
					?>
				</header>
				<div class="container">
					<div class="fsp-shop-wrapper row">

						<div class="fsp-filters-wrapper elemento-widget-sidebar col-lg-3" id="sidebar">
							<?php
							/**
							 * Hook: woocommerce_sidebar.
							 *
							 * @hooked woocommerce_get_sidebar - 10
							 */
							?>
							<?php

							get_template_part('template-parts/filters/filters');
							?>
						</div>
						<div class="col-lg-9">
							<div class="fsp-products-wrapper row">
								<div class="row">
									<?php
									// Define arguments for the WP_Query
									$args = array(
										'post_type' => 'product',
										'posts_per_page' => 9, // Retrieve all products
									);

									// Instantiate the WP_Query
									$loop = new WP_Query($args);

									// Check if there are any products
									if ($loop->have_posts()) {
										// Start the loop
										while ($loop->have_posts()) {
											$loop->the_post();
											// Get product meta fields
											$product_price = get_post_meta(get_the_ID(), '_price', true);
											$sale_price = get_post_meta(get_the_ID(), '_sale_price', true);
											// Get product image URL
											$product_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
											$current_currency = get_woocommerce_currency_symbol();
											?>
											<div class="item-product col-lg-4 col-md-6 col-12 mb-3">
												<div class="product">
													<?php if (class_exists('YITH_WCWL')): ?>
														<div class="yith-wcwl-add-to-wishlist">
															<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
														</div>
													<?php endif; ?>
													<div class="product-image">
														<img src="<?php echo $product_image_url; ?>"
															alt="<?php the_title(); ?>">
													</div>
													<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
													<?php
													echo get_star_rating_custom();
													?>
													<div class="price-wrapper">
														<p class="regular-price"><?php echo $current_currency;
														echo $product_price; ?></p>
														<?php if ($sale_price): ?>
															<p class="sale-price"><?php echo $current_currency;
															echo $sale_price; ?></p>
														<?php endif; ?>
													</div>
													<?php  // Get the product ID
															$product_id = get_the_ID();
															// Get the add to cart URL
															$add_to_cart_url = esc_url(wc_get_product($product_id)->add_to_cart_url());
															?>
													<a href="<?php echo $add_to_cart_url; ?>" class="button">Add to Cart</a>
												</div>
											</div>
											<?php
										}
										wp_reset_postdata();

									} else {
										// If no products found
										echo 'No products found.';
									}
									?>
								</div>
							</div>
							<?php
							$total_pages = $loop->max_num_pages;
							if ($total_pages > 1) {
								$current_page = max(1, get_query_var('paged'));
								echo '<div class="pagination">';
								echo paginate_links(array(
									'base' => get_pagenum_link(1) . '%_%',
									'format' => 'page/%#%',
									'current' => $current_page,
									'total' => $total_pages,
									'prev_text' => __('<'),
									'next_text' => __('>'),
								));
								echo '</div>';
							}
							?>
						</div>

					</div>

				</div>
			</div>
			<!-- <div class="col-lg-3 col-md-4 elemento-widget-sidebar" id="sidebar"> -->
			<?php /**
			  * Hook: woocommerce_sidebar.
			  *
			  * @hooked woocommerce_get_sidebar - 10
			  */
			// do_action( 'woocommerce_sidebar' );   ?>

		</div>
		<?php	/**
			 * Hook: woocommerce_after_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
		do_action('woocommerce_after_main_content');
		?>
	</div>
	</div>
</main>

<?php get_footer();
?>