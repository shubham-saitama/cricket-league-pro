<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined('ABSPATH') || exit;

$formatted_destination = isset($formatted_destination) ? $formatted_destination : WC()->countries->get_formatted_address($package['destination'], ', ');
$has_calculated_shipping = !empty($has_calculated_shipping);
$show_shipping_calculator = !empty($show_shipping_calculator);
$calculator_text = '';

do_action('woocommerce_before_cart');

?>

<form class="woocommerce-cart-form pt-5 pb-5 d-flex" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
	<?php do_action('woocommerce_before_cart_table'); ?>

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">

		<tbody>
			<?php do_action('woocommerce_before_cart_contents'); ?>

			<?php
			foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
				$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
				$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
				/**
				 * Filter the product name.
				 *
				 * @since 2.1.0
				 * @param string $product_name Name of the product in the cart.
				 * @param array $cart_item The product in the cart.
				 * @param string $cart_item_key Key for the product in the cart.
				 */
				$product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);

				if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
					$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
					?>
					<tr
						class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">



						<td class="product-thumbnail">

							<?php
							$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

							if (!$product_permalink) {
								echo $thumbnail; // PHPCS: XSS ok.
							} else {
								printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
							}
							?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
							<div class="product-rating-trade-content-box d-flex pt-2 pb-1">
								<div class="rating align-self-center pe-2">
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>
										<?php echo get_star_rating(); ?>
									</span>
								</div>
								<div class="total_sale align-self-center">
									<i class="fa fa-chart-simple ps-2" style="border-left: 2px solid #5b5b5b;"
										aria-hidden="true"></i>
									<span>
										<?php echo esc_html(get_post_meta($product_id, 'total_sales', true)); ?>
									</span>

								</div>
								<div class="Discount-offer-text-box ps-lg-2 ps-md-3 ps-2 pt-0 align-self-center">
									<?php

									$regular_price = $_product->regular_price;
									$sale_price = $_product->sale_price;
									$discount_percentage = round(((($regular_price - $sale_price) / $regular_price) * 100), 2);

									?>
									<p><?php echo number_format($discount_percentage, 0, '', '') . '%'; ?>Off</p>
								</div>

							</div>
							<?php
							if (!$product_permalink) {
								echo wp_kses_post($product_name . '&nbsp;');
							} else {
								/**
								 * This filter is documented above.
								 *
								 * @since 2.1.0
								 */
								echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
							}

							do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

							// Meta data.
							echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.
					
							// Backorder notification.
							if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
								echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
							}
							?>

							<div class="product-regular-price align-items-center">
								<?php
								echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
								?>
							</div>

							<div class="product-quantity-remove-box d-flex pt-4">
								<div class="product-quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
									<?php
									if ($_product->is_sold_individually()) {
										$min_quantity = 1;
										$max_quantity = 1;
									} else {
										$min_quantity = 0;
										$max_quantity = $_product->get_max_purchase_quantity();
									}

									$product_quantity = woocommerce_quantity_input(
										array(
											'input_name' => "cart[{$cart_item_key}][qty]",
											'input_value' => $cart_item['quantity'],
											'max_value' => $max_quantity,
											'min_value' => $min_quantity,
											'product_name' => $product_name,
										),
										$_product,
										false
									);

									echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
									?>
								</div>


							</div>
						</td>

						<td class="cart-product-remove align-self-center">
							<?php
							echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								'woocommerce_cart_item_remove_link',
								sprintf(
									'<a href="%s" class="cart-item-remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">Remove</a>',
									esc_url(wc_get_cart_remove_url($cart_item_key)),
									/* translators: %s is the product name */
									esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), wp_strip_all_tags($product_name))),
									esc_attr($product_id),
									esc_attr($_product->get_sku())
								),
								$cart_item_key
							);
							?>
						</td>


					</tr>
					<?php
				}
			}
			?>

			<?php do_action('woocommerce_cart_contents'); ?>



			<?php do_action('woocommerce_after_cart_contents'); ?>
		</tbody>
	</table>
	<tr>

		<td colspan="6" class="actions">
			<?php do_action('woocommerce_before_cart_collaterals'); ?>

			<div class="cart-price-details-box position-relative" style="height:max-content;">
				<div class="cart-collaterals">
					<h2>Price Details</h2>

					<?php
					/**
					 * Cart collaterals hook.
					 *
					 * @hooked woocommerce_cross_sell_display
					 * @hooked woocommerce_cart_totals - 10
					 */
					do_action('woocommerce_cart_collaterals');

					?>
	<tr>
		<td colspan="6" class="actions">

			<?php if (wc_coupons_enabled()) { ?>
				<div class="coupon">
					<label for="coupon_code"
						class="screen-reader-text"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label> <input
						type="text" name="coupon_code" class="input-text" id="coupon_code" value=""
						placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" /> <button type="submit"
						class="button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
						name="apply_coupon"
						value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_html_e('Apply coupon', 'woocommerce'); ?></button>
					<?php do_action('woocommerce_cart_coupon'); ?>
				</div>
			<?php } ?>

			<button type="submit"
				class="button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
				name="update_cart"
				value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

			<?php do_action('woocommerce_cart_actions'); ?>

			<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
		</td>
	</tr>
	<?php do_action('woocommerce_cart_actions'); ?>

	<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>


	</div>
	</div>
	</td>
	</tr>
	<?php do_action('woocommerce_after_cart_table'); ?>
</form>



<?php do_action('woocommerce_after_cart'); ?>