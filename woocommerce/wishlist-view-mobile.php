<?php
/**
 * Wishlist page template - Standard Layout
 *
 * @author YITH
 * @package YITH\Wishlist\Templates\Wishlist\View
 * @version 3.0.11
 */

/**
 * Template variables:
 *
 * @var $wishlist                      \YITH_WCWL_Wishlist Current wishlist
 * @var $wishlist_items                array Array of items to show for current page
 * @var $wishlist_token                string Current wishlist token
 * @var $wishlist_id                   int Current wishlist id
 * @var $users_wishlists               array Array of current user wishlists
 * @var $pagination                    string yes/no
 * @var $per_page                      int Items per page
 * @var $current_page                  int Current page
 * @var $page_links                    array Array of page links
 * @var $is_user_owner                 bool Whether current user is wishlist owner
 * @var $show_price                    bool Whether to show price column
 * @var $show_dateadded                bool Whether to show item date of addition
 * @var $show_stock_status             bool Whether to show product stock status
 * @var $show_add_to_cart              bool Whether to show Add to Cart button
 * @var $show_remove_product           bool Whether to show Remove button
 * @var $show_price_variations         bool Whether to show price variation over time
 * @var $show_variation                bool Whether to show variation attributes when possible
 * @var $show_cb                       bool Whether to show checkbox column
 * @var $show_quantity                 bool Whether to show input quantity or not
 * @var $show_ask_estimate_button      bool Whether to show Ask an Estimate form
 * @var $show_last_column              bool Whether to show last column (calculated basing on previous flags)
 * @var $move_to_another_wishlist      bool Whether to show Move to another wishlist select
 * @var $move_to_another_wishlist_type string Whether to show a select or a popup for wishlist change
 * @var $additional_info               bool Whether to show Additional info textarea in Ask an estimate form
 * @var $price_excl_tax                bool Whether to show price excluding taxes
 * @var $enable_drag_n_drop            bool Whether to enable drag n drop feature
 * @var $repeat_remove_button          bool Whether to repeat remove button in last column
 * @var $available_multi_wishlist      bool Whether multi wishlist is enabled and available
 * @var $no_interactions               bool
 */

if ( ! defined( 'YITH_WCWL' ) ) {
	exit;
} // Exit if accessed directly
?>

<!-- WISHLIST MOBILE -->
<ul
	class="ps-0 shop_table cart wishlist_table wishlist_view responsive mobile <?php echo $show_cb ? 'with-checkbox' : ''; ?> <?php echo $no_interactions ? 'no-interactions' : ''; ?>"
	data-pagination="<?php echo esc_attr( $pagination ); ?>" data-per-page="<?php echo esc_attr( $per_page ); ?>" data-page="<?php echo esc_attr( $current_page ); ?>"
	data-id="<?php echo esc_attr( $wishlist_id ); ?>" data-token="<?php echo esc_attr( $wishlist_token ); ?>">

	<?php
	if ( $wishlist && $wishlist->has_items() ) :
		foreach ( $wishlist_items as $item ) :
			/**
			 * Each of wishlist items
			 *
			 * @var $item \YITH_WCWL_Wishlist_Item
			 */
			global $product;

			$product = $item->get_product();

			if ( $product && $product->exists() ) :
				?>
				<li id="yith-wcwl-row-<?php echo esc_attr( $item->get_product_id() ); ?>" data-row-id="<?php echo esc_attr( $item->get_product_id() ); ?>">
					<?php if ( $show_cb ) : ?>
						<div class="product-checkbox">
							<input type="checkbox" value="yes" name="items[<?php echo esc_attr( $item->get_product_id() ); ?>][cb]"/>
						</div>
					<?php endif ?>

					<div class="pt-4 wishlist-item-wrapper">
						<div class="product-thumbnail">
							<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item->get_product_id() ) ) ); ?>">
								<?php echo wp_kses_post( $product->get_image() ); ?>
							</a>
						</div>
						<div class="product-details">
							<div class="product-rating-trade-content-box d-flex pt-2 pb-1">
								<div class="rating align-self-center pe-2">
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <span>
										 <?php echo average_rating(); ?>
									 </span>
								 </div>
								 <div class="total_sale align-self-center">
										<i class="fa fa-chart-simple ps-2" style="border-left: 2px solid #5b5b5b;" aria-hidden="true"></i>
										<span>
											 <?php echo esc_html(get_post_meta($post->ID,'total_sales',true)); ?>
										</span>
									</div>
								 <div class="Discount-offer-text-box ps-lg-2 ps-md-3 ps-2 pt-0 align-self-center">
									 <?php if ($product->is_type('variable')) {
											$variations = $product->get_available_variations();
											foreach ($variations as $variation) {
													$variation_id = $variation['variation_id'];
													$variation_obj = wc_get_product($variation_id);
													if ($variation_obj->is_on_sale()) {
															$regular_price = $variation_obj->get_regular_price();
															$sale_price = $variation_obj->get_sale_price();
															$discount_percentage = round(((($regular_price - $sale_price) / $regular_price) * 100), 2);
															break;
													}
											}
									} ?>
									<p><?php echo number_format($discount_percentage,0, '', '').'%'; ?>Off</p>
								</div>
							 </div>


						</div>
						<div class="product-name">
							<h3>
								<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item->get_product_id() ) ) ); ?>">
									<?php echo wp_kses_post( apply_filters( 'woocommerce_in_cartproduct_obj_title', $product->get_title(), $product ) ); ?>
								</a>
							</h3>
							<?php do_action( 'yith_wcwl_table_after_product_name', $item ); ?>
						</div>
						<div class="price-details">
							<?php if ( $show_price || $show_price_variations ) : ?>
								<tr>
									<td class="value">
										<?php
										if ( $show_price_variations ) {
											echo wp_kses_post( $item->get_price_variation() );
										}
										if ( $show_price ) {
											echo wp_kses_post( $item->get_formatted_product_price() );
										}
										?>
									</td>
								</tr>
							<?php endif ?>
						</div>


					</div>

				</li>
				<?php
			endif;
		endforeach;
	else :
		?>
		<p class="wishlist-empty">
			<?php echo esc_html( apply_filters( 'yith_wcwl_no_product_to_remove_message', __( 'No products added to the wishlist', 'yith-woocommerce-wishlist' ) ) ); ?>
		</p>
	<?php endif; ?>

</ul>

<?php if ( ! empty( $page_links ) ) : ?>
	<nav class="wishlist-pagination">
		<?php echo wp_kses_post( $page_links ); ?>
	</nav>
<?php endif; ?>
