<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>
<div class="single-brand-name">
	<?php
	$events_category_var = array();
	foreach ( $terms as $term ) {
	$events_category_var[] = $term->name;
	}
	$events_category_name = join( ", ", $events_category_var );
	echo $events_category_name; ?></a>
</div>
<?php the_title( '<h2 class="product_title entry-title">', '</h2>' );