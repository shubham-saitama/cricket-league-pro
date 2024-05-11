<?php
/**
 * Wishlist page template - Standard Layout
 *
 * @author YITH
 * @package YITH\Wishlist\Templates\Wishlist\View
 * @version 3.0.0
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

<!-- WISHLIST TABLE -->
<div
	class="shop_table cart wishlist_table wishlist_view traditional responsive <?php echo $no_interactions ? 'no-interactions' : ''; ?> <?php echo $enable_drag_n_drop ? 'sortable' : ''; ?> "
	data-pagination="<?php echo esc_attr( $pagination ); ?>" data-per-page="<?php echo esc_attr( $per_page ); ?>" data-page="<?php echo esc_attr( $current_page ); ?>"
	data-id="<?php echo esc_attr( $wishlist_id ); ?>" data-token="<?php echo esc_attr( $wishlist_token ); ?>" >

	<?php $column_count = 2; ?>

	<div>
	<tr>
		<?php if ( $show_cb ) : ?>
			<?php $column_count ++; ?>
			<th class="product-checkbox">
				<input type="checkbox" value="" name="" id="bulk_add_to_cart"/>
			</th>
		<?php endif; ?>

		<?php if ( $show_remove_product ) : ?>
			<?php $column_count ++; ?>
			<th class="product-remove ">
				<span class="nobr">
					<?php echo esc_html( apply_filters( 'yith_wcwl_wishlist_view_remove_heading', '', $wishlist ) ); ?>
				</span>
			</th>
		<?php endif; ?>

		<th class="product-thumbnail"></th>





		<?php if ( $show_quantity ) : ?>
			<?php $column_count ++; ?>
			<th class="product-quantity">
				<span class="nobr">
					<?php echo esc_html( apply_filters( 'yith_wcwl_wishlist_view_quantity_heading', __( 'Quantity', 'yith-woocommerce-wishlist' ), $wishlist ) ); ?>
				</span>
			</th>
		<?php endif; ?>


		<?php if ( $show_last_column ) : ?>
			<?php $column_count ++; ?>
			<th class="product-add-to-cart">
				<span class="nobr">
					<?php echo esc_html( apply_filters( 'yith_wcwl_wishlist_view_cart_heading', '', $wishlist ) ); ?>
				</span>
			</th>
		<?php endif; ?>

		<?php if ( $enable_drag_n_drop ) : ?>
			<?php $column_count ++; ?>
			<th class="product-arrange">
				<span class="nobr">
					<?php echo esc_html( apply_filters( 'yith_wcwl_wishlist_view_arrange_heading', __( 'Arrange', 'yith-woocommerce-wishlist' ), $wishlist ) ); ?>
				</span>
			</th>
		<?php endif; ?>
	</tr>
</div>

	<tbody class="wishlist-items-wrapper">
	<?php
	if ( $wishlist && $wishlist->has_items() ) :
		foreach ( $wishlist_items as $item ) :
			/**
			 * Each of the wishlist items
			 *
			 * @var $item \YITH_WCWL_Wishlist_Item
			 */
			global $product;

			$product = $item->get_product();

			if ( $product && $product->exists() ) :
				?>
				<div id="yith-wcwl-row-<?php echo esc_attr( $item->get_product_id() ); ?>" data-row-id="<?php echo esc_attr( $item->get_product_id() ); ?>" class="wishlist-page-image-box col-lg-2 me-lg-4 mt-4">



					<div class="product-thumbnail position-relative">
						<?php do_action( 'yith_wcwl_table_before_product_thumbnail', $item, $wishlist ); ?>

						<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item->get_product_id() ) ) ); ?>">
							<?php echo wp_kses_post( $product->get_image() ); ?>
						</a>

						<?php do_action( 'yith_wcwl_table_after_product_thumbnail', $item, $wishlist ); ?>

						<?php if ( $show_remove_product ) : ?>
							<div class="product-remove remove-whishlist">
								<div>
									<a href="<?php echo esc_url( $item->get_remove_url() ); ?>" class="fa fa-trash-o remove remove_from_wishlist" title="<?php echo esc_html( apply_filters( 'yith_wcwl_remove_product_wishlist_message_title', __( 'Remove this product', 'yith-woocommerce-wishlist' ) ) ); ?>"></a>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="product-details">
						<div class="product-rating-trade-content-box d-flex pt-2 pb-1">
							<div class="rating align-self-center pe-2">
								 <i class="fa fa-star" aria-hidden="true"></i>
								 <span>
									 <?php echo '4.0'; ?>
								 </span>
							 </div>
							 <div class="total_sale align-self-center">
									<i class="fa fa-chart-simple ps-2" style="border-left: 2px solid #5b5b5b;" aria-hidden="true"></i>
									<span>
										 <?php echo esc_html(get_post_meta($item->get_product_id(),'total_sales',true)); ?>
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
						<?php do_action( 'yith_wcwl_table_before_product_name', $item, $wishlist ); ?>

						<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item->get_product_id() ) ) ); ?>">
							<?php echo wp_kses_post( apply_filters( 'woocommerce_in_cartproduct_obj_title', $product->get_title(), $product ) ); ?>
						</a>

						<?php
						if ( $show_variation && $product->is_type( 'variation' ) ) {
							/**
							 * Product is a Variation
							 *
							 * @var $product \WC_Product_Variation
							 */
							echo wp_kses_post( wc_get_formatted_variation( $product ) );
						}
						?>

						<?php do_action( 'yith_wcwl_table_after_product_name', $item, $wishlist ); ?>
					</div>
					<div class="product-rating">
					<div class="product-rating">
					<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
					</div>
				</div>
					<?php if ( $show_price || $show_price_variations ) : ?>
						<div class="product-price">
							<?php do_action( 'yith_wcwl_table_before_product_price', $item, $wishlist ); ?>

							<?php
							if ( $show_price ) {
								echo wp_kses_post( $item->get_formatted_product_price() );
							}

							if ( $show_price_variations ) {
								echo wp_kses_post( $item->get_price_variation() );
							}
							?>

							<?php do_action( 'yith_wcwl_table_after_product_price', $item, $wishlist ); ?>
						</div>
					<?php endif ?>

					<?php if ( $show_quantity ) : ?>
						<div class="product-quantity">
							<?php do_action( 'yith_wcwl_table_before_product_quantity', $item, $wishlist ); ?>

							<?php if ( ! $no_interactions && $wishlist->current_user_can( 'update_quantity' ) ) : ?>
								<input type="number" min="1" step="1" name="items[<?php echo esc_attr( $item->get_product_id() ); ?>][quantity]" value="<?php echo esc_attr( $item->get_quantity() ); ?>"/>
							<?php else : ?>
								<?php echo esc_html( $item->get_quantity() ); ?>
							<?php endif; ?>

							<?php do_action( 'yith_wcwl_table_after_product_quantity', $item, $wishlist ); ?>
						</div>
					<?php endif; ?>
					<?php if ( $enable_drag_n_drop ) : ?>
						<div class="product-arrange ">
							<i class="fa fa-arrows"></i>
							<input type="hidden" name="items[<?php echo esc_attr( $item->get_product_id() ); ?>][position]" value="<?php echo esc_attr( $item->get_position() ); ?>"/>
						</div>
					<?php endif; ?>
				</div>

				<?php
			endif;
		endforeach;
	else :
		?>
		<tr>
			<div colspan="<?php echo esc_attr( $column_count ); ?>" class="wishlist-empty">
				<div class="empty-cart-page" id="empty-cart-page">
				  <i class="<?php echo esc_html(get_theme_mod('cricket_league_pro_empty_cart_page_icon')); ?>"></i>
				  <h2 id="empty-cart-heading"><?php echo esc_html(get_theme_mod('cricket_league_pro_empty_cart_page_heading')); ?></h2>
				  <p><?php echo esc_html(get_theme_mod('cricket_league_pro_empty_cart_page_description')); ?></p>
				  <a href="<?php echo esc_url(get_theme_mod('cricket_league_pro_empty_cart_page_btn_link')); ?>">
				    <?php echo esc_html(get_theme_mod('cricket_league_pro_empty_cart_page_btn_text')); ?>
				  </a>
				</div>
				<?php// echo esc_html( apply_filters( 'yith_wcwl_no_product_to_remove_message', __( ' afsf No products added to the wishlist', 'yith-woocommerce-wishlist' ), $wishlist ) ); ?>
			</div>
		</tr>
		<?php
	endif;

	if ( ! empty( $page_links ) ) :
		?>
		<tr class="pagination-row wishlist-pagination">
			<div colspan="<?php echo esc_attr( $column_count ); ?>">
				<?php echo wp_kses_post( $page_links ); ?>
			</div>
		</tr>
	<?php endif ?>
	</tbody>

</div>
