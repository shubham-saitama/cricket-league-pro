<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if (!defined('ABSPATH')) {
	exit;
}
global $product;
if ($related_products): ?>

	<section class="related products" id="related">

		<?php
		$heading = apply_filters('woocommerce_product_related_products_heading', __('Our Related products', 'woocommerce'));

		if ($heading):
			?>
			<div class="heading-tag">
				Related products
			</div>
			<h2><?php echo esc_html($heading); ?></h2>
		<?php endif; ?>

		<?php woocommerce_product_loop_start(); ?>


		<div class="row" style="">
			<?php foreach ($related_products as $related_product): ?>

				<?php
				$post_object = get_post($related_product->get_id());

				setup_postdata($GLOBALS['post'] =& $post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
				// wc_get_template_part( 'content', 'product' );
		

				// Get product meta fields
				$product_price = get_post_meta(get_the_ID(), '_price', true);
				$sale_price = get_post_meta(get_the_ID(), '_sale_price', true);
				// Get product image URL
				$product_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
				$current_currency = get_woocommerce_currency_symbol();
				?>
				<div class="item-product col-lg-3 col-md-3 col-12">
					<div class="product-cricket">
						<?php if (class_exists('YITH_WCWL')): ?>
							<div class="yith-wcwl-add-to-wishlist">
								<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
							</div>
						<?php endif; ?>
						<div class="product-image">
							<img src="<?php echo $product_image_url; ?>" alt="<?php the_title(); ?>">
						</div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php
						echo get_star_rating();
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


			<?php endforeach; ?>
		</div>

		<?php woocommerce_product_loop_end(); ?>

	</section>
	<?php
endif;

wp_reset_postdata();
