<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

global $product;

if (!wc_review_ratings_enabled()) {
	return;
}


$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average = $product->get_average_rating();
$price = $product->get_price();
// Get the currency symbol
$currency_symbol = get_woocommerce_currency_symbol();
if ($rating_count > 0): ?>

	<div class="woocommerce-product-rating d-flex">
		<div class="price">
			<?php echo $product->get_price_html(); ?>
		</div>
		<div class="rating align-self-center pe-2">
		<?php echo wc_get_rating_html( $product->get_average_rating() ); ?>
		</div>

	</div>
<?php endif; ?>