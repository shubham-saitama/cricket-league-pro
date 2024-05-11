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
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
global $product;
?>
	<div class="banner-page-text container">
		<div class="above_title pt-4 pb-3">
			<h1>Product</h1>
			<div class=" bradcrumbs">Home / Product</div>
		</div>
	</div>

<?php
if ( get_theme_mod( 'cricket_league_pro_post_product_general_settings_shop_sidebar', true ) == '1' ) {
	$postcol1 = "col-lg-12 col-md-12";
	$postcol2 = "col-lg-12 col-md-4";
} else {
	$postcol1 = "col-lg-12 col-md-12";
	$postcol2 = "";
}
?>
<section class="position-relative filter-page-section ps-xl-3 ps-lg-3">

<div class="shop shop-product">
<?php /**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<div class="container1">
	<div class="row position-relative">
		<?php if(get_theme_mod('cricket_league_pro_products_shop_page_sidebar',true)=='1'){ ?>

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

		<?php } ?>
		<div class="<?php echo esc_html($postcol1); ?>" style="box-shadow: 0px -2px 1px 0px #d8d8d8;">
			<header class="woocommerce-products-header">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="woocommerce-products-header__title page-title">
						<?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>

				<?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				do_action( 'woocommerce_archive_description' );
				?>
			</header>
			<?php

			if ( have_posts() ) {

				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked wc_print_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );

				woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();
						global $product;

						/**
						 * Hook: woocommerce_shop_loop.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */

						do_action( 'woocommerce_shop_loop' );
						?>
						<div class="product-inner-content-box shop-product-col mt-4 pt-3">
							<div class="product-inner product-content">
								<div class="product-image" style="position:relative;">
									<div class="content-overlay"></div>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">

                    <div class="product-hover-cart-icons">
                      <div class="product-cart-icons" style="display:flex; justify-content:center;">
                      <?php if ( class_exists( 'YITH_WCWL' ) ) {  ?>
                      <div class="wishlist_text">
                        <?php echo do_shortcode(get_theme_mod('cricket_league_pro_recommended_add_to_wishlist', '[yith_wcwl_add_to_wishlist]')); ?>
                      </div>
                      <?php } else {
                      echo "Please install and activate YITH WooCommerce Wishlist to add product wishlist";
                      }?>

											<div class="cart-box">
												<a href="<?php the_permalink(); ?>"><i class="fa fa-eye"></i></a>
											</div>
                    </div>
                  </div>
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
									 <h6 class="product-name m-0">
										 <a href="<?php the_permalink(); ?>">
											 <?php echo get_the_title(); ?>
										 </a>
									 </h6>
									 <div class="products-meta d-flex flex-lg-wrap flex-xl-nowrap align-items-center justify-content-xl-between   justify-content-between">
										 <div class="product-regular-price d-flex align-items-center" >
											 <?php
										    $product = wc_get_product( get_the_ID() );

										    if ( $product->is_type( 'variable' ) ) {
													woocommerce_get_template( 'single-product/price.php' );
										    }
												else {
													 echo $product->get_price_html();
												} ?>


										 </div>
									 </div>
								 </div>
							</div>
						</div>

						<!-- wc_get_template_part( 'content', 'product' ); -->
				<?php
				}
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			} ?>
			</div>

	</div>
</div>
	<?php

	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );?>
</div>
</section>
<?php
get_footer( 'shop' );
