<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 6.1.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$attribute_keys  = array_keys( $attributes );
$variations_json = wp_json_encode( $available_variations );
$variations_attr = function_exists( 'wc_esc_json' ) ? wc_esc_json( $variations_json ) : _wp_specialchars( $variations_json, ENT_QUOTES, 'UTF-8', true );
$review_count = $product->get_review_count();

do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_variations="<?php echo $variations_attr; // WPCS: XSS ok. ?>">
	<?php do_action( 'woocommerce_before_variations_form' ); ?>

	<?php if ( empty( $available_variations ) && false !== $available_variations ) : ?>
		<p class="stock out-of-stock"><?php echo esc_html( apply_filters( 'woocommerce_out_of_stock_message', __( 'This product is currently out of stock and unavailable.', 'woocommerce' ) ) ); ?></p>
	<?php else : ?>
		<table class="variations" cellspacing="0" role="presentation">
			<tbody class="row">
				<tr class="quantity-box">
					<th class="label"><label>Quantity :</label></th>
					<td class="value">
						<?php
						do_action( 'woocommerce_before_add_to_cart_quantity' );

						woocommerce_quantity_input(
							array(
								'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
								'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
								'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
							)
						);

						do_action( 'woocommerce_after_add_to_cart_quantity' );
						?>
					</td>
				</tr>
				<?php foreach ( $attributes as $attribute_name => $options ) : ?>

					<tr>
						<th class="label"><label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); // WPCS: XSS ok. ?></label></th>
						<td class="value">
							<?php
								wc_dropdown_variation_attribute_options(
									array(
										'options'   => $options,
										'attribute' => $attribute_name,
										'product'   => $product,
									)
								);



								echo end( $attribute_keys ) === $attribute_name ? wp_kses_post( apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . esc_html__( 'Clear', 'woocommerce' ) . '</a>' ) ) : '';
							?>
						</td>
					</tr>



				<?php endforeach; ?>
				<tr class="size-chart-box">
					<th class="label"><label>Size Chart</label></th>
					<td class="value">
						<img src=" <?php echo esc_url(get_post_meta(get_the_ID(),'product-meta-image',true)); ?>" alt="Size Chart Image">
					</td>
				</tr>
			</tbody>
		</table>
		<?php do_action( 'woocommerce_after_variations_table' ); ?>

		<div class="single_variation_wrap">
			<?php
				/**
				 * Hook: woocommerce_before_single_variation.
				 */
				do_action( 'woocommerce_before_single_variation' );

				/**
				 * Hook: woocommerce_single_variation. Used to output the cart button and placeholder for variation data.
				 *
				 * @since 2.4.0
				 * @hooked woocommerce_single_variation - 10 Empty div for variation data.
				 * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
				 */
				do_action( 'woocommerce_single_variation' );

				/**
				 * Hook: woocommerce_after_single_variation.
				 */
				do_action( 'woocommerce_after_single_variation' );
			?>
		</div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_variations_form' ); ?>


</form>



<div class="pos-main-box">
	<div class="delivery-code-box">
		<div class="Pincode-text pb-lg-2 align-self-center">
			<?php echo esc_html(get_post_meta(get_the_ID(),'pincode-text',true)); ?>
		</div>
		<?php for ($j=1; $j <= 4 ; $j++) { ?>
			<div class="col-lg-12 pb-lg-2">
				<div class="delivery-code-box-text align-self-center">
					<?php echo esc_html(get_post_meta(get_the_ID(),'terms-text'.$j,true)); ?>
				</div>
			</div>
		<?php } ?>
	</div>
	<div class="offer-pro-meta pt-lg-3 pt-3">
		<?php echo esc_html(get_post_meta(get_the_ID(),'terms-offer-text',true)); ?>
	</div>
	<div class="row pt-lg-3 pb-lg-4 pb-4 pt-4 offer-boxes d-flex" style="border-bottom: 2px solid #dedada;">
		<div class="col-xl-5 col-lg-6 col-md-5 col-sm-4 col-10">
			<div class="bank-content-box">
				<div class="bank-offer-pro-meta">
					<?php echo esc_html(get_post_meta(get_the_ID(),'terms-bank-offer-text',true)); ?>
				</div>
				<div class="bank-offer-title-meta">
					<?php echo esc_html(get_post_meta(get_the_ID(),'terms-bank-offer-title',true)); ?>
				</div>
				<div class="bank-offer-count-meta">
					<?php echo esc_html(get_post_meta(get_the_ID(),'terms-bank-offer-count',true)); ?>
				</div>
			</div>
		</div>
		<div class="col-xl-5 col-lg-6 col-md-5 col-sm-4 col-10 pt-sm-0 pt-3">
			<div class="partner-content-box">
				<div class="partner-offer-pro-meta">
					<?php echo esc_html(get_post_meta(get_the_ID(),'terms-partner-offer-text',true)); ?>
				</div>
				<div class="partner-offer-title-meta">
					<?php echo esc_html(get_post_meta(get_the_ID(),'terms-partner-offer-title',true)); ?>
				</div>
				<div class="partner-offer-count-meta">
					<?php echo esc_html(get_post_meta(get_the_ID(),'terms-partner-offer-count',true)); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="product-single mt-lg-3 mt-md-3">
		<?php
			$args = array(
				'post_type' => 'product',
				'taxonomy' => 'product_cat',
				'field' => 'slug',
					'posts_per_page' => 1,
					'order'  => 'asc',
				);
				$new = new WP_Query($args);
				$loop_index = 0; $j=1;
				while ( $new->have_posts() ){
				$new->the_post();
				$post_id = get_the_ID();  ?>
				<div class="row product-single-content-box">
					<div class="col-lg-3 col-md-3 text-md-start text-center">
						<?php if (has_post_thumbnail()){ ?>
							<?php the_post_thumbnail(); ?>
						<?php } ?>
					</div>
					<div class="col-lg-9 col-md-9 align-self-center pb-2 single-pro-cont pb-2">
						<?php echo esc_html(the_content()); ?>
						<div class="products-meta pt-md-0 pb-md-0 pt-2 pb-2 align-items-center">
						 <div class="d-flex align-items-center" >
							 <span class="d-flex product-regular-price">
			 				 	<?php echo $product->get_price_html(); ?>
							 </span>
						 </div>
					 </div>
					<div class="product-rating">
						 <?php if( $product->is_type( 'variable' ) ){ woocommerce_template_loop_rating( $new->post, $product ); } ?>

			 			<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf( _n( '%s customer review', '%s Review', $review_count, 'woocommerce' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?>)</a>

					</div>
				</div>
			</div>
			<?php $j++; }
			wp_reset_query(); ?>
		</div>

		<div class="single-pro-meta">
			<?php echo esc_html(get_post_meta(get_the_ID(),'product-single-text',true)); ?>
		</div>

</div>
<?php
do_action( 'woocommerce_after_add_to_cart_form' );
