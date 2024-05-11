<?php

require get_template_directory() . '/theme-wizard/tgm/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function cricket_league_pro_register_recommended_plugins()
{
	$plugins = array(
		array(
			'name' => __('SportsPress – Sports Club & League Manager', 'cricket-league-pro'),
			'slug' => 'sportspress',
			'source' => '',
			'required' => true,
			'force_activation' => false,
		),
		array(
			'name' => __('SportsPress for Cricket', 'cricket-league-pro'),
			'slug' => 'sportspress-for-cricket',
			'source' => '',
			'required' => true,
			'force_activation' => false,
		),
		array(
			'name' => __('WooCommerce', 'cricket-league-pro'),
			'slug' => 'woocommerce',
			'source' => '',
			'required' => true,
			'force_activation' => false,
		),
		array(
			'name' => __('Contact Form 7', 'cricket-league-pro'),
			'slug' => 'contact-form-7',
			'required' => true,
			'force_activation' => false,
		),
		array(
			'name' => __('YITH WooCommerce Wishlist', 'cricket-league-pro'),
			'slug' => 'yith-woocommerce-wishlist',
			'required' => true,
			'force_activation' => false,
		),
		
		array(
			'name' => __('Classic Widgets', 'cricket-league-pro'),
			'slug' => 'classic-widgets',
			'source' => '',
			'required' => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'cricket-league-pro' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - Ecommerce Product Addons', 'cricket-league-pro' ),
			'slug'             => 'ibtana-ecommerce-product-addons',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name' => __('VW Gallery Images', 'cricket-league-pro'),
			'slug' => 'vw-gallery-images',
			'source' => get_template_directory_uri() . '/inc/plugins/vw-gallery-images.zip',
			'required' => true,
			'force_activation' => false,
		),
	);
	$cricket_league_pro_config = array();
	tgmpa($plugins, $cricket_league_pro_config);
}
add_action('tgmpa_register', 'cricket_league_pro_register_recommended_plugins');


