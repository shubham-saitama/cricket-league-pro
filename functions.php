<?php
/**
 * vw-cricket-pro functions and definitions
 *
 * @package vw-cricket-pro
 */

if (!function_exists('cricket_league_pro_setup')):
	// echo "<pre>";
// echo print_r($terms_content);
// echo "</pre>";
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function cricket_league_pro_setup()
	{
		$GLOBALS['content_width'] = apply_filters('cricket_league_pro_content_width', 640);
		if (!isset($content_width))
			$content_width = 640;
		load_theme_textdomain('vw-cricket-pro', get_template_directory() . '/languages');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support('woocommerce');
		add_theme_support('custom-header');
		add_theme_support('title-tag');
		add_theme_support('wc-product-gallery-zoom');
		add_theme_support('wc-product-gallery-lightbox');
		add_theme_support('wc-product-gallery-slider');
		add_theme_support('wc-template-functions');

		add_theme_support(
			'custom-logo',
			array(
				'height' => 240,
				'width' => 240,
				'flex-height' => true,
			)
		);
		add_image_size('vw-cricket-pro-homepage-thumb', 240, 145, true);
		register_nav_menus(
			array(
				'primary' => __('Primary Menu', 'vw-cricket-pro'),
				'footer1' => __('Footer Menu1', 'vw-cricket-pro'),
				'footer2' => __('Footer Menu2', 'vw-cricket-pro'),
			)
		);
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'f1f1f1'
			)
		);
		add_editor_style(array('assets/css/editor-style.css'));
	}
endif;
add_action('after_setup_theme', 'cricket_league_pro_setup');

/* Theme Widgets Setup */
function cricket_league_pro_widgets_init()
{
	register_sidebar(
		array(
			'name' => __('Blog Sidebar', 'vw-cricket-pro'),
			'description' => __('Appears on blog page sidebar', 'vw-cricket-pro'),
			'id' => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name' => __('Page Sidebar', 'vw-cricket-pro'),
			'description' => __('Appears on page sidebar', 'vw-cricket-pro'),
			'id' => 'sidebar-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name' => __('Footer Column 1', 'vw-cricket-pro'),
			'description' => __('Appears on footer', 'vw-cricket-pro'),
			'id' => 'footer-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name' => __('Footer Column 2', 'vw-cricket-pro'),
			'description' => __('Appears on footer', 'vw-cricket-pro'),
			'id' => 'footer-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name' => __('Footer Column 3', 'vw-cricket-pro'),
			'description' => __('Appears on footer', 'vw-cricket-pro'),
			'id' => 'footer-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name' => __('Footer Column 4', 'vw-cricket-pro'),
			'description' => __('Appears on footer', 'vw-cricket-pro'),
			'id' => 'footer-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
}
add_action('widgets_init', 'cricket_league_pro_widgets_init');

/* Theme Font URL */
function cricket_league_pro_font_url()
{
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Poppins';
	$font_family[] = 'PT Serif';
	$font_family[] = 'Work Sans';
	$query_args = array(
		'family' => urlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	return $font_url;
}

// custom thumbnail size 
add_image_size('custom-thumbnail', 240, 240, true);



/* Theme enqueue scripts */
function cricket_league_pro_scripts()
{
	$custom_css = "";
	wp_enqueue_style('vw-cricket-pro-font', cricket_league_pro_font_url(), array());
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('vw-cricket-pro-basic-style', get_stylesheet_uri());
	wp_style_add_data('vw-cricket-pro-style', 'rtl', 'replace');


	if (is_rtl()) {
		wp_enqueue_style('rtl-style', get_template_directory_uri() . '/rtl-style.css', true, null, 'all');
		wp_add_inline_style('rtl-style', $custom_css);
		wp_enqueue_script('vw-cricket-pro-customscripts-rtl', get_template_directory_uri() . '/assets/js/custom-rtl.js', array('jquery'), '', true);
	} else {
		// ---------- CSS Enqueue -----------


		wp_enqueue_style('other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css', true, null, 'all');
		wp_add_inline_style('other-page-style', $custom_css);
		wp_enqueue_style('home-page-style', get_template_directory_uri() . '/assets/css/main-css/home-page.css', true, null, 'all');
		wp_enqueue_style('slick css', get_template_directory_uri() . '/assets/css/slick.css', true, null, 'all');
		wp_enqueue_style('slick theme', get_template_directory_uri() . '/assets/css/slick-theme.css', true, null, 'all');

		wp_add_inline_style('home-page-style', $custom_css);

		if ('post' == get_post_type() && is_home()) {
			wp_enqueue_style('other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css', true, null, 'all');
			wp_add_inline_style('other-page-style', $custom_css);
		}
		wp_enqueue_style('header-footer-style', get_template_directory_uri() . '/assets/css/main-css/header-footer.css', true, null, 'all');
		// wp_enqueue_style('vw-cricket-pro', get_template_directory_uri() . '/assets/css/vw-cricket-pro.css', true, null, 'all');

		/* Inline style sheet */
		require get_parent_theme_file_path('/inline_style.php');
		wp_add_inline_style('vw-cricket-pro-basic-style', $custom_css);
		wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/main-css/mobile-main.css', true, null, 'screen and (max-width: 3000px) and (min-width: 320px)');

		wp_add_inline_style('header-footer-style', $custom_css);
		wp_add_inline_style('responsive-media-style', $custom_css);
	}

	if (function_exists('is_amp_endpoint') && is_amp_endpoint()) {
		wp_enqueue_style('amp-style', get_template_directory_uri() . '/assets/css/main-css/amp-style.css', true, null, 'all');
	} else {
		wp_enqueue_style('animation-wow', get_template_directory_uri() . '/assets/css/animate.css');
		wp_enqueue_style('owl-carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.css');
	}
	wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
	wp_enqueue_style('effect', get_template_directory_uri() . '/assets/css/effect.css');
	wp_enqueue_style('jquery-ui.min.css', get_template_directory_uri() . '/assets/css/jquery-ui.min.css');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js', array('jquery'), '', true);
	wp_enqueue_script('counterJs', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap-notify-js', get_template_directory_uri() . '/assets/js/bootstrap-notify.min.js', array('bootstrap'));
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true);
	wp_enqueue_script('slick slider', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '', true);
	wp_enqueue_script('jquery ui touch punch', get_template_directory_uri() . '/assets/js/jquery.ui.touch-punch.min.js', array('jquery-ui-slider'), '0.2.3', true);
	wp_enqueue_script('jquery-ui-slider');
	wp_enqueue_script('lightboxLight', get_template_directory_uri() . '/assets/js/html5lightbox.js', array('jquery'), '', true);

	global $wpdb;
	$product_price_max_query = "SELECT MAX( CAST( $wpdb->postmeta.meta_value AS SIGNED ) ) AS product_max_price FROM $wpdb->postmeta WHERE meta_key='%s'";
	$product_meta_price_max = $wpdb->get_row($wpdb->prepare($product_price_max_query, '_price'));

	$listing_price_max_query = "SELECT MAX( CAST( $wpdb->postmeta.meta_value AS SIGNED ) ) AS listing_max_price FROM $wpdb->postmeta WHERE meta_key='%s'";
	$listing_meta_price_max = $wpdb->get_row($wpdb->prepare($listing_price_max_query, '_al_listing_price'));

	$auto_listings_options = get_option('auto_listings_options');
	$currency_symbol = '$';
	if ($auto_listings_options) {
		$currency_symbol = isset($auto_listings_options['currency_symbol']) ? $auto_listings_options['currency_symbol'] : '$';
	}




	// *************************custom taxonomy for blogs **************************************
	function custom_taxonomy_fright_type()
	{
		$labels = array(
			'name' => 'Fright Types',
			'singular_name' => 'Fright Type',
			'search_items' => array(
				'Search Fright Types',
				// You can add more search item strings here if needed.
			),
			'all_items' => 'All Fright Types',
			'parent_item' => 'Parent Fright Type',
			'parent_item_colon' => 'Parent Fright Type:',
			'edit_item' => 'Edit Fright Type',
			'update_item' => 'Update Fright Type',
			'add_new_item' => 'Add New Fright Type',
			'new_item_name' => 'New Fright Type Name',
			'menu_name' => 'Fright Types',
		);

		$args = array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'fright-type'),
			// Adjust the slug as needed.
		);

		register_taxonomy('fright-type', array('post'), $args);
	}
	add_action('init', 'custom_taxonomy_fright_type');

	// *************************custom taxonomy for blogs **************************************


	wp_register_script('vw-cricket-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'));

	$cricket_league_pro_customscripts_obj = array(
		'is_home' => (is_home() || is_front_page()),
		'home_url' => home_url(),
		'is_rtl' => is_rtl(),
		'product_max_price' => $product_meta_price_max->product_max_price,
		'listing_max_price' => $listing_meta_price_max->listing_max_price,
		'listing_currency_symbol' => $currency_symbol,	// $cricket_league_pro_customscripts_obj = array(
		'is_home' => (is_home() || is_front_page()),
		'home_url' => home_url(),
		'is_rtl' => is_rtl(),
		'product_max_price' => $product_meta_price_max->product_max_price,
		'listing_max_price' => $listing_meta_price_max->listing_max_price,
		'listing_currency_symbol' => $currency_symbol,
		'get_woocommerce_currency_symbol' => get_woocommerce_currency_symbol(),
		'ajaxurl' => admin_url('admin-ajax.php'),
		'root' => rest_url(),
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('wp_rest'),
		'the_rest_url' => get_rest_url(),
		'product_max_price' => $product_meta_price_max->product_max_price
	);
	if (class_exists('WooCommerce')) {
		$cricket_league_pro_customscripts_obj['get_woocommerce_currency_symbol'] = get_woocommerce_currency_symbol();
	}



	wp_localize_script('vw-cricket-pro-customscripts', 'cricket_league_pro_customscripts_obj', $cricket_league_pro_customscripts_obj);

	// wp_enqueue_script('vw-cricket-pro-customscripts');
	// // 	'get_woocommerce_currency_symbol' => get_woocommerce_currency_symbol(),
	// // 	'ajaxurl'				=>	admin_url('admin-ajax.php')
	// // );

	// // wp_localize_script('vw-cricket-pro-customscripts', 'cricket_league_pro_customscripts_obj' ,$cricket_league_pro_customscripts_obj);

	wp_enqueue_script('vw-cricket-pro-customscripts');

	wp_enqueue_script('vw-cricket-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true);
	wp_enqueue_script('animation-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'));

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	wp_enqueue_style('vw-cricket-pro-ie', get_template_directory_uri() . '/assets/css/ie.css', array('vw-cricket-pro-basic-style'));
	wp_style_add_data('vw-cricket-pro-ie', 'conditional', 'IE');
}
add_action('wp_enqueue_scripts', 'cricket_league_pro_scripts');

/* Implement the Custom Header feature. */
require get_parent_theme_file_path('/inc/custom-header.php');
/* Custom template tags for this theme. */
require get_parent_theme_file_path('/inc/template-tags.php');
/* Customizer additions. */
require get_parent_theme_file_path('/inc/customize/customizer.php');
/* wc-templatefunction */
// require get_parent_theme_file_path( 'inc/wc-template-functions.php' );
// require 'inc/wc-template-functions.php';
//about us
require get_template_directory() . '/inc/widget/about-us-widget.php';
// Contact-Widgets
require get_parent_theme_file_path('inc/widget/contact-widget.php');
// social-widgets
require get_parent_theme_file_path('inc/widget/socail-widget.php');



require get_parent_theme_file_path('custom-filter.php');



/**
 * Functions which enhance the theme by hooking into WordPress
 */
require get_parent_theme_file_path('inc/custom-functions.php');

require get_template_directory() . '/inc/verify_theme_version.php';
/* Theme Wizard */
require get_template_directory() . '/theme-wizard/config.php';
require get_parent_theme_file_path('/theme-wizard/plugin-activation.php');
// /* URL DEFINES */
// require get_parent_theme_file_path('custom-filter.php');
define('cricket_league_pro_SITE_URL', 'https://www.vwthemes.com/');
/* Theme Credit link */
function cricket_league_pro_credit_link()
{
	echo esc_html_e(' Design & Developed by', 'vw-cricket-pro') . "<a href=" . esc_url(cricket_league_pro_SITE_URL) . " target='_blank'> VW Themes</a>";
}
/*Radio Button sanitization*/
function cricket_league_pro_sanitize_choices($input, $setting)
{
	global $wp_customize;
	$control = $wp_customize->get_control($setting->id);
	if (array_key_exists($input, $control->choices)) {
		return $input;
	} else {
		return $setting->default;
	}
}



/* Excerpt Read more overwrite */
function cricket_league_pro_excerpt_more($link)
{
	if (is_admin()) {
		return $link;
	}
	$link = sprintf(
		'<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url(get_permalink(get_the_ID())),
		/* translators: %s: Name of current post */
		sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'vw-cricket-pro'), get_the_title(get_the_ID()))
	);
	return ' &hellip; ' . $link;
}
add_filter('excerpt_more', 'cricket_league_pro_excerpt_more');

define('cricket_league_pro_THEME_DOC', 'https://www.vwthemesdemo.com/docs/vw-cricket-pro/');
define('cricket_league_pro_SUPPORT', 'https://www.vwthemes.com/support/vw-theme/');
define('cricket_league_pro_FAQ', 'https://www.vwthemes.com/faqs/');
define('cricket_league_pro_CONTACT', 'https://www.vwthemes.com/contact/');
define('cricket_league_pro_REVIEW', 'https://www.vwthemes.com/topic/reviews-and-testimonials/');

define('cricket_league_pro_banner_link', 'https://www.vwthemes.com/premium-plugin/vw-title-banner-plugin/');
define('cricket_league_pro_social_media_plugin', 'https://www.vwthemes.com/free-plugin/vw-social-media/');
define('cricket_league_pro_preloader_plugin', 'https://www.vwthemes.com/free-plugin/vw-preloader/');
define('cricket_league_pro_accordion_plugin', 'https://www.vwthemes.com/free-plugin/vw-accordion/');
define('cricket_league_pro_gallery_link', 'https://www.vwthemes.com/premium-plugin/vw-gallery-plugin/');
define('cricket_league_pro_footer_link', 'https://www.youtube.com/watch?v=7BvTpLh-RB8');

define('IBTANA_THEME_LICENCE_ENDPOINT', 'https://preview.vwthemesdemo.com/old_website/wp-json/ibtana-licence/v2/');
define('SHOPIFY_THEME_LICENCE_ENDPOINT', 'https://license.vwthemes.com/api/public/');
//-------- Bundle Notice ---------
add_action('admin_notices', 'vw_theme_bundle_admin_notice');
function vw_theme_bundle_admin_notice()
{
	?>
	<div class="notice bundle-notice is-dismissible">
		<div class="theme_box">
			<h3>
				<?php echo esc_html('Thank You For Purchasing VW Cricket Pro Theme', 'vw-cricket-pro'); ?>
			</h3>
			<p>
				<?php echo esc_html('Get our all', 'sirat-pro'); ?>
				<strong>
					<?php echo esc_html('120+ Premium Themes', 'vw-cricket-pro'); ?>
				</strong>
				<?php echo esc_html('worth $7021 With Our', 'vw-cricket-pro'); ?>
				<strong>
					<?php echo esc_html('WP Theme Bundle', 'vw-cricket-pro'); ?>
				</strong>
				<?php echo esc_html('in just $89.', 'vw-cricket-pro'); ?>
			</p>

		</div>
		<div class="bubdle_button">
			<a href="https://www.vwthemes.com/premium/all-themes/" class="button button-primary button-hero" target="_blank"
				rel="noopener">
				<?php echo esc_html('Get Bundle at $89', 'vw-cricket-pro'); ?>
			</a>
		</div>
	</div>
	<?php
}

add_action('switch_theme', 'cricket_league_pro_deactivate');
function cricket_league_pro_deactivate()
{
	ThemeWhizzie::remove_the_theme_key();
	ThemeWhizzie::set_the_validation_status('false');
}

define('CUSTOM_TEXT_DOMAIN', 'vw-cricket-pro');
add_filter('woocommerce_add_to_cart_fragments', 'cricket_league_pro_wc_refresh_mini_cart_count');
function cricket_league_pro_wc_refresh_mini_cart_count($fragments)
{
	ob_start();
	$items_count = WC()->cart->get_cart_contents_count();
	?>
	<span class="cart-value">
		<?php echo $items_count ? $items_count : '0'; ?>
	</span>
	<?php
	$fragments['.cart-value'] = ob_get_clean();
	return $fragments;
}

add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns()
	{
		return 3; // 3 products per row
	}
}
// Remove default WC image sizes
function remove_wc_image_sizes()
{
	remove_image_size('woocommerce_thumbnail');
	remove_image_size('woocommerce_single');
	remove_image_size('woocommerce_gallery_thumbnail');
	remove_image_size('shop_thumbnail');
}
add_action('init', 'remove_wc_image_sizes');

add_filter('woocommerce_gallery_thumbnail_size', function ($size) {
	return 'full';
});

add_action('wp_footer', 'single_added_to_cart_event');

function aw_include_script()
{

	if (!did_action('wp_enqueue_media')) {
		wp_enqueue_media();
	}

	wp_enqueue_script('awscript', get_stylesheet_directory_uri() . '/assets/js/admin_script.js', array('jquery'), null, false);
}
add_action('admin_enqueue_scripts', 'aw_include_script');


function single_added_to_cart_event()
{
	if (isset($_POST['add-to-cart']) && isset($_POST['quantity'])) {
		// Get added to cart product ID (or variation ID) and quantity (if needed)
		$quantity = $_POST['quantity'];
		$product_id = isset($_POST['variation_id']) ? $_POST['variation_id'] : $_POST['add-to-cart'];

		// JS code goes here below
		?>
		<script>
			jQuery(function ($) {
				alert('Product added to cart');
			});
		</script>
		<?php
	}
}
// buy now button
function buy_now_submit_form()
{
	?>
	<script>
		jQuery(document).ready(function () {
			// listen if someone clicks 'Buy Now' button
			jQuery('#buy_now_button').click(function () {
				// set value to 1
				jQuery('#is_buy_now').val('1');
				//submit the form
				jQuery('form.cart').submit();
			});
		});
	</script>
	<?php
}
add_action('woocommerce_after_add_to_cart_form', 'buy_now_submit_form');

add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($redirect_url)
{
	if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
		global $woocommerce;
		$redirect_url = wc_get_checkout_url();
	}
	return $redirect_url;
}


//additional info tab
add_filter('woocommerce_product_tabs', 'woo_rename_tabs', 98);
function woo_rename_tabs($tabs)
{

	$tabs['additional_information']['title'] = __('Additional Information');

	$tabs['description']['priority'] = 5; // Description first
	$tabs['reviews']['priority'] = 15; //  Reviews third
	$tabs['additional_information']['priority'] = 10;

	$tabs['additional_information']['title'] = __('Additional Information');
	$tabs['additional_information']['callback'] = 'woocommerce_additional_information_callback';

	$tabs['description']['title'] = __('Description');

	// Rename the additional information tab
	return $tabs;
}

function woocommerce_additional_information_callback()
{
	echo 'This is the content of the additional information';
}

if (is_admin()) {
	add_action('admin_menu', 'cricket_league_pro_bn_custom_meta_product');
}
function cricket_league_pro_bn_custom_meta_product()
{
	add_meta_box('bn_meta', __('Information Meta', 'vw-cricket-pro'), 'cricket_league_pro_bn_meta_callback_product', 'product', 'normal', 'high');
	// add_post_meta(69, 'age', 25);
}
function cricket_league_pro_bn_meta_callback_product($post)
{
	wp_nonce_field(basename(__FILE__), 'bn_nonce');
	$bn_stored_meta = get_post_meta($post->ID);
	$meta_year = get_post_meta($post->ID, 'meta-year', true);
	$meta_make = get_post_meta($post->ID, 'meta-make', true);
	$meta_body_style = get_post_meta($post->ID, 'meta-body-style', true);
	$meta_brands = get_post_meta($post->ID, 'meta-brands', true);
	?>
	<div id="property_stuff">
		<table id="list-table">
			<tbody id="the-list" data-wp-lists="list:meta">
				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('Year', 'vw-cricket-pro') ?>
					</td>
					<td class="left">
						<input type="text" name="meta-year" id="meta-year" value="<?php echo esc_html($meta_year); ?>" />
					</td>
				</tr>
				<tr>
					<td class="left">
						<?php esc_html_e('Make', 'vw-cricket-pro') ?>
					</td>
					<td class="left">
						<input name="meta-make" id="meta-make" value="<?php echo esc_html($meta_make); ?>" />
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('Body Style', 'vw-cricket-pro') ?>
					</td>
					<td class="left">
						<input name="meta-body-style" id="meta-body-style"
							value="<?php echo esc_html($meta_body_style); ?>" />
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('Brand', 'vw-cricket-pro') ?>
					</td>
					<td class="left">
						<input name="meta-brands" id="meta-brands" value="<?php echo esc_html($meta_brands); ?>" />
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php
}
function cricket_league_pro_bn_meta_save_product($post_id)
{
	if (!isset($_POST['bn_nonce']) || !wp_verify_nonce($_POST['bn_nonce'], basename(__FILE__))) {
		return;
	}
	if (!current_user_can('edit_post', $post_id)) {
		return;
	}
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	// Team Meta 1
	if (isset($_POST['meta-year'])) {
		update_post_meta($post_id, 'meta-year', sanitize_text_field($_POST['meta-year']));
	}
	if (isset($_POST['meta-make'])) {
		update_post_meta($post_id, 'meta-make', sanitize_text_field($_POST['meta-make']));
	}
	// Team Meta 2
	if (isset($_POST['meta-body-style'])) {
		update_post_meta($post_id, 'meta-body-style', sanitize_text_field($_POST['meta-body-style']));
	}
	if (isset($_POST['meta-brands'])) {
		update_post_meta($post_id, 'meta-brands', sanitize_text_field($_POST['meta-brands']));
	}
	if (isset($_POST['meta-url'])) {
		update_post_meta($post_id, 'meta-url', esc_url_raw($_POST['meta-url']));
	}
}
add_action('save_post', 'cricket_league_pro_bn_meta_save_product');

function enqueue_custom_admin_scripts()
{
	wp_enqueue_media(); // Enqueue the WordPress media uploader script
	wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/assets/js/admin-script.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'enqueue_custom_admin_scripts');

// *************************custom post-types and their meta fields **************************************
function create_trophies_post_type()
{
	$labels = array(
		'name' => _x('Trophies', 'post type general name', 'textdomain'),
		'singular_name' => _x('Trophy', 'post type singular name', 'textdomain'),
		'menu_name' => _x('Trophies', 'admin menu', 'textdomain'),
		'name_admin_bar' => _x('Trophy', 'add new on admin bar', 'textdomain'),
		'add_new' => _x('Add New', 'Trophy', 'textdomain'),
		'add_new_item' => __('Add New Trophy', 'textdomain'),
		'new_item' => __('New Trophy', 'textdomain'),
		'edit_item' => __('Edit Trophy', 'textdomain'),
		'view_item' => __('View Trophy', 'textdomain'),
		'all_items' => __('All Trophies', 'textdomain'),
		'search_items' => __('Search Trophies', 'textdomain'),
		'parent_item_colon' => __('Parent Trophies:', 'textdomain'),
		'not_found' => __('No trophies found.', 'textdomain'),
		'not_found_in_trash' => __('No trophies found in Trash.', 'textdomain')
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'trophies'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'thumbnail'),
	);

	register_post_type('trophies', $args);
}
add_action('init', 'create_trophies_post_type');
function add_trophies_custom_fields()
{
	add_meta_box(
		'trophies_meta_box',
		'Trophy Details',
		'display_trophies_meta_box',
		'trophies',
		'normal',
		'default'
	);
}
add_action('add_meta_boxes', 'add_trophies_custom_fields');

function display_trophies_meta_box($post)
{

	$team_name = get_post_meta($post->ID, 'team_name', true);
	$team_logo_image = get_post_meta($post->ID, 'team_logo_image', true);
	?>

	<p>
		<label for="team_name">Team Name:</label><br>
		<input type="text" name="team_name" id="team_name" value="<?php echo esc_attr($team_name); ?>">
	</p>
	<p>
		<label for="team_logo_image">Team Logo Image:</label><br>
		<input type="text" name="team_logo_image" id="team_logo_image" value="<?php echo esc_attr($team_logo_image); ?>">
		<button class="button team_logo_upload_button">Upload Image</button>
	</p>
	<script>
		// Add JavaScript for media uploader here
	</script>
	<?php
}

function save_trophies_custom_fields_data($post_id)
{

	if (array_key_exists('team_name', $_POST)) {
		update_post_meta(
			$post_id,
			'team_name',
			sanitize_text_field($_POST['team_name'])
		);
	}
	if (array_key_exists('team_logo_image', $_POST)) {
		update_post_meta(
			$post_id,
			'team_logo_image',
			sanitize_text_field($_POST['team_logo_image'])
		);
	}
}
add_action('save_post', 'save_trophies_custom_fields_data');


// **************************** Our Team ****************************


// ******************************* Testimonials section ************************
function custom_testimonials_post_type()
{
	$labels = array(
		'name' => 'Testimonials',
		'singular_name' => 'Testimonial',
		'menu_name' => 'Testimonials',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Testimonial',
		'edit_item' => 'Edit Testimonial',
		'new_item' => 'New Testimonial',
		'view_item' => 'View Testimonial',
		'search_items' => 'Search Testimonials',
		'not_found' => 'No Testimonials found',
		'not_found_in_trash' => 'No Testimonials found in Trash',
		'parent_item_colon' => 'Parent Testimonial:',
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'testimonials'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'editor', 'thumbnail'),
		// You can customize the supported features
	);

	register_post_type('testimonials', $args);
	function add_testimonial_meta_box()
	{
		add_meta_box(
			'testimonial_meta_box',
			'Testimonial Details',
			'display_testimonial_meta_box',
			'testimonials',
			'normal',
			'high'
		);
	}
	add_action('add_meta_boxes', 'add_testimonial_meta_box');

	function display_testimonial_meta_box($post)
	{
		$customer_name = get_post_meta($post->ID, '_customer_name', true);
		$service_used = get_post_meta($post->ID, '_service_used', true);
		?>

		<label for="customer_name">Customer Name:</label>
		<input type="text" id="customer_name" name="customer_name" value="<?php echo esc_attr($customer_name); ?>"><br>

		<label for="service_used">Client's Occupation:</label>
		<input type="text" id="service_used" name="service_used" value="<?php echo esc_attr($service_used); ?>"><br>

		<?php
	}

	function save_testimonial_meta_data($post_id)
	{
		if (isset($_POST['customer_name'])) {
			update_post_meta($post_id, '_customer_name', sanitize_text_field($_POST['customer_name']));
		}

		if (isset($_POST['service_used'])) {
			update_post_meta($post_id, '_service_used', sanitize_text_field($_POST['service_used']));
		}
	}
	add_action('save_post', 'save_testimonial_meta_data');

}
add_action('init', 'custom_testimonials_post_type');


// Add meta box for star ratings
function add_star_rating_meta_box()
{
	add_meta_box(
		'star_rating_meta_box',
		'Star Rating',
		'render_star_rating_meta_box',
		'testimonials', // Replace 'your_custom_post_type' with the slug of your custom post type
		'side',
		'default'
	);
}
add_action('add_meta_boxes', 'add_star_rating_meta_box');

// Callback function to render the star rating meta box
function render_star_rating_meta_box($post)
{
	// Retrieve existing value of star rating meta field
	$star_rating = get_post_meta($post->ID, '_star_rating', true);
	?>
	<label for="star_rating">Star Rating:</label>
	<select name="star_rating" id="star_rating">
		<option value="">Select Rating</option>
		<option value="1" <?php selected($star_rating, '1'); ?>>1 Star</option>
		<option value="2" <?php selected($star_rating, '2'); ?>>2 Stars</option>
		<option value="3" <?php selected($star_rating, '3'); ?>>3 Stars</option>
		<option value="4" <?php selected($star_rating, '4'); ?>>4 Stars</option>
		<option value="5" <?php selected($star_rating, '5'); ?>>5 Stars</option>
	</select>
	<?php // Add nonce field ?>
	<?php wp_nonce_field('save_star_rating_meta', 'star_rating_nonce'); ?>
<?php
}
// Save star rating meta field
function save_star_rating_meta_box($post_id)
{
	// Verify nonce
	// Verify nonce
	if (!isset($_POST['star_rating_nonce']) || !wp_verify_nonce($_POST['star_rating_nonce'], 'save_star_rating_meta')) {
		return;
	}
	// Check if this is an autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	// Check user's permissions
	if (!current_user_can('edit_post', $post_id)) {
		return;
	}
	// Save star rating meta field
	if (isset($_POST['star_rating'])) {
		// Sanitize the input value
		$star_rating = sanitize_text_field($_POST['star_rating']);
		// Make sure the value is within the range 1-5
		$star_rating = max(1, min(5, $star_rating));
		// Update post meta
		update_post_meta($post_id, '_star_rating', $star_rating);
		// error_log('I ran!!');
	}

}
add_action('save_post', 'save_star_rating_meta_box');

// Display star rating on the frontend
function get_testimonial_stars($post_id)
{
	$star_rating = get_post_meta($post_id, '_star_rating', true);
	if (!empty($star_rating)) {
		// Output star rating HTML based on the stored value
		$output = '<div class="star-rating">';
		$output .= str_repeat('<i class="fa fa-star"></i>', $star_rating);
		$output .= '</div>';
		return $output;
	}
	return '';
}


// post meta fields 
function custom_add_post_meta_field()
{
	add_meta_box(
		'custom_post_paras',
		'Custom Post Paragraphs',
		'custom_render_meta_field',
		'post',
		'normal',
		'high'
	);
}
add_action('add_meta_boxes', 'custom_add_post_meta_field');

function custom_render_meta_field($post)
{
	$post_para_1 = get_post_meta($post->ID, 'post_para_1', true);
	$post_para_2 = get_post_meta($post->ID, 'post_para_2', true);
	$post_para_3 = get_post_meta($post->ID, 'post_para_3', true);
	$post_que = get_post_meta($post->ID, 'post_que', true);
	$post_image_1 = get_post_meta($post->ID, 'post_image_1', true);
	$post_image_2 = get_post_meta($post->ID, 'post_image_2', true);
	?>
	<label for="post_para_1">Custom Paragraph 1:</label>
	<textarea style="width:100%" id="post_para_1" name="post_para_1"><?php echo esc_textarea($post_para_1); ?></textarea>

	<label for="post_para_2">Custom Paragraph 2:</label>
	<textarea style="width:100%" id="post_para_2" name="post_para_2"><?php echo esc_textarea($post_para_2); ?></textarea>

	<label for="post_para_3">Custom Paragraph 3:</label>
	<textarea style="width:100%" id="post_para_3" name="post_para_3"><?php echo esc_textarea($post_para_3); ?></textarea>

	<label for="post_que">Post Question:</label>
	<textarea style="width:100%" id="post_que" name="post_que"><?php echo esc_textarea($post_que); ?></textarea>

	<label for="post_image_1">Image 1:</label>
	<div class="custom-media-uploader" style="width:100%">
		<input type="text" id="post_image_1" name="post_image_1" value="<?php echo esc_attr($post_image_1); ?>" />
		<input type="button" class="button button-secondary custom-media-upload" value="Upload Image" />
	</div>

	<label for="post_image_2">Image 2:</label>
	<div class="custom-media-uploader" style="width:100%">
		<input type="text" id="post_image_2" name="post_image_2" value="<?php echo esc_attr($post_image_2); ?>" />
		<input type="button" class="button button-secondary custom-media-upload" value="Upload Image" />
	</div>

	<script>
		jQuery(document).ready(function ($) {
			$('.custom-media-upload').click(function (e) {
				e.preventDefault();
				var customUploader = wp.media({
					title: 'Choose Image',
					button: { text: 'Choose Image' },
					multiple: false
				});
				customUploader.on('select', function () {
					var attachment = customUploader.state().get('selection').first().toJSON();
					$(this).prev('input[type="text"]').val(attachment.url);
				});
				customUploader.open();
			});
		});
	</script>
	<?php
}

function custom_save_post_meta($post_id)
{
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;
	if (!current_user_can('edit_post', $post_id))
		return;

	$custom_fields = ['post_para_1', 'post_para_2', 'post_para_3', 'post_que'];

	foreach ($custom_fields as $field) {
		if (isset($_POST[$field])) {
			update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
		}
	}
}
add_action('save_post', 'custom_save_post_meta');


// ******************************* Testimonials section ************************



// Register upcoming post type 
// Register custom post type
function create_custom_post_type()
{
	$args = array(
		'labels' => array(
			'name' => 'Upcoming Events',
			'singular_name' => 'Upcoming Event',
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'upcoming-events'),
		'supports' => array('title', 'editor', 'thumbnail'),
	);
	register_post_type('upcoming_events', $args);
}
add_action('init', 'create_custom_post_type');
// Add meta box for event details
function add_event_meta_box()
{
	add_meta_box('event_details_meta_box', 'Event Details', 'render_event_meta_box', 'upcoming_events', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_event_meta_box');

// Render meta box content for event details
function render_event_meta_box($post)
{
	wp_nonce_field('save_event_meta_data', 'event_meta_box_nonce');

	$event_date = get_post_meta($post->ID, '_event_date', true);
	$start_time = get_post_meta($post->ID, '_start_time', true);
	$end_time = get_post_meta($post->ID, '_end_time', true);
	$address = get_post_meta($post->ID, '_address', true);
	$entry_fees = get_post_meta($post->ID, '_entry_fees', true);
	$event_category = get_post_meta($post->ID, '_event_category', true);
	$event_date_end = get_post_meta($post->ID, '_event_date_end', true);
	// Output fields
	?>
	<p>
		<label for="event_date">Event start Date:</label>
		<input type="date" id="event_date" name="event_date" value="<?php echo esc_attr($event_date); ?>">
	</p>
	<p>
		<label for="event_date">Event End Date:</label>
		<input type="date" id="event_date_end" name="event_date_end" value="<?php echo esc_attr($event_date_end); ?>">
	</p>
	<p>
		<label for="start_time">Start Time:</label>
		<input type="time" id="start_time" name="start_time" value="<?php echo esc_attr($start_time); ?>">
	</p>
	<p>
		<label for="end_time">End Time:</label>
		<input type="time" id="end_time" name="end_time" value="<?php echo esc_attr($end_time); ?>">
	</p>
	<p>
		<label for="address">Address:</label>
		<input type="text" id="address" name="address" value="<?php echo esc_attr($address); ?>">
	</p>
	<p>
		<label for="entry_fees">Entry Fees:</label>
		<input type="text" id="entry_fees" name="entry_fees" value="<?php echo esc_attr($entry_fees); ?>">
	</p>
	<p>
		<label for="event_category">Event Category:</label>
		<input type="text" id="event_category" name="event_category" value="<?php echo esc_attr($event_category); ?>">
	</p>
	<?php
}

function save_event_meta_data($post_id)
{
	if (!isset($_POST['event_meta_box_nonce']) || !wp_verify_nonce($_POST['event_meta_box_nonce'], 'save_event_meta_data')) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (array_key_exists('event_date', $_POST)) {
		update_post_meta($post_id, '_event_date', sanitize_text_field($_POST['event_date']));
	}
	if (array_key_exists('event_date_end', $_POST)) {
		update_post_meta($post_id, '_event_date_end', sanitize_text_field($_POST['event_date_end']));
	}
	if (array_key_exists('start_time', $_POST)) {
		update_post_meta($post_id, '_start_time', sanitize_text_field($_POST['start_time']));
	}
	if (array_key_exists('end_time', $_POST)) {
		update_post_meta($post_id, '_end_time', sanitize_text_field($_POST['end_time']));
	}
	if (array_key_exists('address', $_POST)) {
		update_post_meta($post_id, '_address', sanitize_text_field($_POST['address']));
	}
	if (array_key_exists('entry_fees', $_POST)) {
		update_post_meta($post_id, '_entry_fees', sanitize_text_field($_POST['entry_fees']));
	}
	if (array_key_exists('event_category', $_POST)) {
		update_post_meta($post_id, '_event_category', sanitize_text_field($_POST['event_category']));
	}
}
add_action('save_post', 'save_event_meta_data');

// Add meta box for organizer details
function add_organizer_meta_box()
{
	add_meta_box('organizer_details_meta_box', 'Organizer Details', 'render_organizer_meta_box', 'upcoming_events', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_organizer_meta_box');

// Render meta box content for organizer details
function render_organizer_meta_box($post)
{
	wp_nonce_field('save_organizer_meta_data', 'organizer_meta_box_nonce');

	$organizer_name = get_post_meta($post->ID, '_organizer_name', true);
	$phone_number = get_post_meta($post->ID, '_phone_number', true);
	$email = get_post_meta($post->ID, '_email', true);
	$organizer_website = get_post_meta($post->ID, '_organizer_website', true);

	// Output fields
	?>
	<p>
		<label for="organizer_name">Organizer Name:</label>
		<input type="text" id="organizer_name" name="organizer_name" value="<?php echo esc_attr($organizer_name); ?>">
	</p>
	<p>
		<label for="phone_number">Phone Number:</label>
		<input type="tel" id="phone_number" name="phone_number" value="<?php echo esc_attr($phone_number); ?>">
	</p>
	<p>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="<?php echo esc_attr($email); ?>">
	</p>
	<p>
		<label for="organizer_website">Organizer Website:</label>
		<input type="url" id="organizer_website" name="organizer_website"
			value="<?php echo esc_attr($organizer_website); ?>">
	</p>
	<?php
}

function save_organizer_meta_data($post_id)
{
	if (!isset($_POST['organizer_meta_box_nonce']) || !wp_verify_nonce($_POST['organizer_meta_box_nonce'], 'save_organizer_meta_data')) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (array_key_exists('organizer_name', $_POST)) {
		update_post_meta($post_id, '_organizer_name', sanitize_text_field($_POST['organizer_name']));
	}
	if (array_key_exists('phone_number', $_POST)) {
		update_post_meta($post_id, '_phone_number', sanitize_text_field($_POST['phone_number']));
	}
	if (array_key_exists('email', $_POST)) {
		update_post_meta($post_id, '_email', sanitize_email($_POST['email']));
	}
	if (array_key_exists('organizer_website', $_POST)) {
		update_post_meta($post_id, '_organizer_website', esc_url($_POST['organizer_website']));
	}
}
add_action('save_post', 'save_organizer_meta_data');

// Add meta box for venue details
function add_venue_meta_box()
{
	add_meta_box('venue_details_meta_box', 'Venue Details', 'render_venue_meta_box', 'upcoming_events', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_venue_meta_box');

// Render meta box content for venue details
function render_venue_meta_box($post)
{
	wp_nonce_field('save_venue_meta_data', 'venue_meta_box_nonce');

	$venue_name = get_post_meta($post->ID, '_venue_name', true);
	$phone_number = get_post_meta($post->ID, '_venue_phone_number', true);
	$map_x_coordinates = get_post_meta($post->ID, '_map_x_coordinates', true);
	$map_y_coordinates = get_post_meta($post->ID, '_map_y_coordinates', true);

	// Output fields
	?>
	<p>
		<label for="venue_name">Venue Name:</label>
		<input type="text" id="venue_name" name="venue_name" value="<?php echo esc_attr($venue_name); ?>">
	</p>
	<p>
		<label for="phone_number">Phone Number:</label>
		<input type="tel" id="phone_number" name="phone_number" value="<?php echo esc_attr($phone_number); ?>">
	</p>
	<p>
		<label for="map_x_coordinates">Map X Coordinates:</label>
		<input type="text" id="map_x_coordinates" name="map_x_coordinates"
			value="<?php echo esc_attr($map_x_coordinates); ?>">
	</p>
	<p>
		<label for="map_y_coordinates">Map Y Coordinates:</label>
		<input type="text" id="map_y_coordinates" name="map_y_coordinates"
			value="<?php echo esc_attr($map_y_coordinates); ?>">
	</p>
	<?php
}

function save_venue_meta_data($post_id)
{
	if (!isset($_POST['venue_meta_box_nonce']) || !wp_verify_nonce($_POST['venue_meta_box_nonce'], 'save_venue_meta_data')) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (array_key_exists('venue_name', $_POST)) {
		update_post_meta($post_id, '_venue_name', sanitize_text_field($_POST['venue_name']));
	}
	if (array_key_exists('phone_number', $_POST)) {
		update_post_meta($post_id, '_venue_phone_number', sanitize_text_field($_POST['phone_number']));
	}
	if (array_key_exists('map_x_coordinates', $_POST)) {
		update_post_meta($post_id, '_map_x_coordinates', sanitize_text_field($_POST['map_x_coordinates']));
	}
	if (array_key_exists('map_y_coordinates', $_POST)) {
		update_post_meta($post_id, '_map_y_coordinates', sanitize_text_field($_POST['map_y_coordinates']));
	}
}
add_action('save_post', 'save_venue_meta_data');


// Register Custom Post Type
function custom_post_type_our_staff()
{

	$labels = array(
		'name' => _x('Our Staff', 'Post Type General Name', 'text_domain'),
		'singular_name' => _x('Staff', 'Post Type Singular Name', 'text_domain'),
		'menu_name' => __('Our Staff', 'text_domain'),
		'name_admin_bar' => __('Staff', 'text_domain'),
		'archives' => __('Staff Archives', 'text_domain'),
		'attributes' => __('Staff Attributes', 'text_domain'),
		'parent_item_colon' => __('Parent Staff:', 'text_domain'),
		'all_items' => __('All Staff', 'text_domain'),
		'add_new_item' => __('Add New Staff', 'text_domain'),
		'add_new' => __('Add New', 'text_domain'),
		'new_item' => __('New Staff', 'text_domain'),
		'edit_item' => __('Edit Staff', 'text_domain'),
		'update_item' => __('Update Staff', 'text_domain'),
		'view_item' => __('View Staff', 'text_domain'),
		'view_items' => __('View Staff', 'text_domain'),
		'search_items' => __('Search Staff', 'text_domain'),
		'not_found' => __('Not found', 'text_domain'),
		'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
		'featured_image' => __('Featured Image', 'text_domain'),
		'set_featured_image' => __('Set featured image', 'text_domain'),
		'remove_featured_image' => __('Remove featured image', 'text_domain'),
		'use_featured_image' => __('Use as featured image', 'text_domain'),
		'insert_into_item' => __('Insert into item', 'text_domain'),
		'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
		'items_list' => __('Items list', 'text_domain'),
		'items_list_navigation' => __('Items list navigation', 'text_domain'),
		'filter_items_list' => __('Filter items list', 'text_domain'),
	);
	$args = array(
		'label' => __('Staff', 'text_domain'),
		'description' => __('Our Staff', 'text_domain'),
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-groups',
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type('our_staff', $args);

}
add_action('init', 'custom_post_type_our_staff', 0);

// Add Meta Box for Position
function add_staff_position_meta_box()
{
	add_meta_box(
		'staff_position_meta_box',
		__('Position', 'text_domain'),
		'render_staff_position_meta_box',
		'our_staff',
		'side',
		'default'
	);
}
add_action('add_meta_boxes', 'add_staff_position_meta_box');

// Render Meta Box for Position
function render_staff_position_meta_box($post)
{
	$position = get_post_meta($post->ID, 'staff_position', true);
	?>
	<label for="staff_position"><?php _e('Position', 'text_domain'); ?>:</label>
	<input type="text" id="staff_position" name="staff_position" value="<?php echo esc_attr($position); ?>" />
	<?php
}

// Save Position Meta Box Data
function save_staff_position_meta_data($post_id)
{
	if (array_key_exists('staff_position', $_POST)) {
		update_post_meta(
			$post_id,
			'staff_position',
			sanitize_text_field($_POST['staff_position'])
		);
	}
}
add_action('save_post', 'save_staff_position_meta_data');

// *************************custom post-types and their meta fields **************************************

function get_variation_data()
{
	$variation_id = $_POST['variation_id'];

	$variation = wc_get_product($variation_id);

	$variation_data = array(
		'price_html' => $variation->get_price_html(),
		'image_html' => $variation->get_image()
	);

	wp_send_json($variation_data);
}
add_action('wp_ajax_get_variation_data', 'get_variation_data');
add_action('wp_ajax_nopriv_get_variation_data', 'get_variation_data');



// -*-*--*-*-*-*-*-*-*-*-* listing Start-*-*-*-*-*-*-*-*-*-*-*
if (is_admin()) {
	add_action('admin_menu', 'cricket_league_pro_posttype_bn_custom_meta_listing');
}
function cricket_league_pro_posttype_bn_custom_meta_listing()
{
	add_meta_box('bn_meta', __('Single Page Details', 'vw-cricket-pro-posttype'), 'cricket_league_pro_posttype_bn_meta_callback_listing', 'auto-listing', 'normal', 'high');
}
function cricket_league_pro_posttype_bn_meta_callback_listing($post)
{
	wp_nonce_field(basename(__FILE__), 'bn_nonce');
	$bn_stored_meta = get_post_meta($post->ID);
	$meta_list_para = get_post_meta($post->ID, 'meta-list-para', true);
	$meta_list_para1 = get_post_meta($post->ID, 'meta-list-para1', true);
	$meta_list_para2 = get_post_meta($post->ID, 'meta-list-para2', true);
	$meta_list_para3 = get_post_meta($post->ID, 'meta-list-para3', true);
	$meta_list_para4 = get_post_meta($post->ID, 'meta-list-para4', true);
	$meta_list_para5 = get_post_meta($post->ID, 'meta-list-para5', true);
	$meta_list_para6 = get_post_meta($post->ID, 'meta-list-para6', true);

	?>
	<div>
		<label>
			<?php esc_html_e('Single List 1', 'vw-cricket-pro-posttype') ?>
		</label>
		<div><input class="mb-2" name="meta-list-para" id="meta-list-para"
				value="<?php echo esc_html($meta_list_para); ?>" />
		</div>
	</div>
	<div>
		<label>
			<?php esc_html_e('Single List 2', 'vw-cricket-pro-posttype') ?>
		</label>
		<div><input name="meta-list-para1" id="meta-list-para1" value="<?php echo esc_html($meta_list_para1); ?>" />
		</div>
	</div>
	<div>
		<label>
			<?php esc_html_e('Single List 2', 'vw-cricket-pro-posttype') ?>
		</label>
		<div><input name="meta-list-para2" id="meta-list-para2" value="<?php echo esc_html($meta_list_para2); ?>" />
		</div>
	</div>
	<div>
		<label>
			<?php esc_html_e('Single List 3', 'vw-cricket-pro-posttype') ?>
		</label>
		<div><input name="meta-list-para3" id="meta-list-para3" value="<?php echo esc_html($meta_list_para3); ?>" />
		</div>
	</div>
	<div>
		<label>
			<?php esc_html_e('Single List 4', 'vw-cricket-pro-posttype') ?>
		</label>
		<div><input name="meta-list-para4" id="meta-list-para4" value="<?php echo esc_html($meta_list_para4); ?>" />
		</div>
	</div>
	<div>
		<label>
			<?php esc_html_e('Single List 5', 'vw-cricket-pro-posttype') ?>
		</label>
		<div><input name="meta-list-para5" id="meta-list-para5" value="<?php echo esc_html($meta_list_para5); ?>" />
		</div>
	</div>
	<div>
		<label>
			<?php esc_html_e('Single List 6', 'vw-cricket-pro-posttype') ?>
		</label>
		<div><input name="meta-list-para6" id="meta-list-para6" value="<?php echo esc_html($meta_list_para6); ?>" />
		</div>
	</div>
	<?php
}
function cricket_league_pro_posttype_bn_meta_save_news($post_id)
{
	if (!isset($_POST['bn_nonce']) || !wp_verify_nonce($_POST['bn_nonce'], basename(__FILE__))) {
		return;
	}
	if (!current_user_can('edit_post', $post_id)) {
		return;
	}
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	// Team Meta 1
	if (isset($_POST['meta-list-para'])) {
		update_post_meta($post_id, 'meta-list-para', sanitize_text_field($_POST['meta-list-para']));
	}

	if (isset($_POST['meta-list-para1'])) {
		update_post_meta($post_id, 'meta-list-para1', sanitize_text_field($_POST['meta-list-para1']));
	}

	if (isset($_POST['meta-list-para2'])) {
		update_post_meta($post_id, 'meta-list-para2', sanitize_text_field($_POST['meta-list-para2']));
	}

	if (isset($_POST['meta-list-para3'])) {
		update_post_meta($post_id, 'meta_list_para3', sanitize_text_field($_POST['meta_list_para3']));
	}

	if (isset($_POST['meta-list-para4'])) {
		update_post_meta($post_id, 'meta-list-para4', sanitize_text_field($_POST['meta-list-para4']));
	}

	if (isset($_POST['meta-list-para4'])) {
		update_post_meta($post_id, 'meta_list_para4', sanitize_text_field($_POST['meta_list_para4']));
	}

	if (isset($_POST['meta-list-para5'])) {
		update_post_meta($post_id, 'meta_list_para5', sanitize_text_field($_POST['meta_list_para5']));
	}

	if (isset($_POST['meta-list-para6'])) {
		update_post_meta($post_id, 'meta_list_para6', sanitize_text_field($_POST['meta_list_para6']));
	}
}
add_action('save_post', 'cricket_league_pro_posttype_bn_meta_save_news');
// -*-*--*-*-*-*-*-*-*-*-* listing End -*-*-*-*-*-*-*-*-*-*-*



ini_set('upload_max_filesize', '50M');
ini_set('post_max_size', '55M');


// services widget area 
function custom_services_sidebar()
{
	register_sidebar(
		array(
			'name' => 'Services Sidebar',
			'id' => 'services-sidebar',
			'description' => 'Widget area for displaying services.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		)
	);
}
add_action('widgets_init', 'custom_services_sidebar');

class Custom_Services_Widget extends WP_Widget
{
	public function __construct()
	{
		parent::__construct(
			'custom_services_widget',
			'Custom Services Widget',
			array('description' => 'A widget to display a list of custom post type "services."')
		);
	}

	public function widget($args, $instance)
	{
		echo $args['before_widget'];
		$title = apply_filters('widget_title', $instance['title']);
		$current_service_id = 0; // Initialize the current service ID variable

		// Check if the current page is a single service post
		if (is_singular('services')) {
			global $post;
			$current_service_id = $post->ID;
		}

		if (!empty($title)) {
			echo $args['before_title'] . $title . $args['after_title'];
		} else {
			echo $args['before_title'] . 'Services' . $args['after_title'];
		}

		$query_args = array(
			'post_type' => 'services',
			'posts_per_page' => -1,
		);

		$services = new WP_Query($query_args);

		if ($services->have_posts()):
			echo '<ul class="services-list">';
			while ($services->have_posts()):
				$services->the_post();
				$service_id = get_the_ID();
				$active_class = ($service_id === $current_service_id) ? 'active' : ''; // Add 'active' class if it's the current service
				echo '<li class="service-title ' . $active_class . '"><i class="fa-solid fa-chevron-down"></i><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
			endwhile;
			echo '</ul>';
			wp_reset_postdata();
		else:
			echo '<p>No services found.</p>';
		endif;

		echo $args['after_widget'];
	}

	public function form($instance)
	{
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<?php
	}

	public function update($new_instance, $old_instance)
	{
		// This method handles updating the widget's settings when saved in the WordPress admin, but you have it set to do nothing.
		// You may want to add update logic if you want to allow widget customization in the admin.
		// Update the widget's settings when saved in the WordPress admin
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field($new_instance['title']);
		return $instance;
	}
}

// Register the custom widget
function register_custom_services_widget()
{
	register_widget('Custom_Services_Widget');
}
add_action('widgets_init', 'register_custom_services_widget');

function add_custom_widget_to_sidebar()
{
	$sidebar_id = 'services-sidebar'; // Replace with the actual sidebar ID
	$widget_id = 'custom_services_widget'; // Replace with your widget's ID

	if (is_active_sidebar($sidebar_id)) {
		$widgets = wp_get_sidebars_widgets();
		if (!isset($widgets[$sidebar_id])) {
			$widgets[$sidebar_id] = array();
		}

		// Add your custom widget to the sidebar by default
		if (!in_array($widget_id, $widgets[$sidebar_id])) {
			array_push($widgets[$sidebar_id], $widget_id);
			wp_set_sidebars_widgets($widgets);
		}
	}
}
add_action('after_switch_theme', 'add_custom_widget_to_sidebar');



// phone number wdget 
class Custom_Image_Phone_Widget extends WP_Widget
{
	public function __construct()
	{
		parent::__construct(
			'custom_image_phone_widget',
			'Image and Phone Widget',
			array(
				'description' => 'A custom widget for adding an image and a phone number.',
			)
		);
	}

	public function widget($args, $instance)
	{
		extract($args);

		$title = apply_filters('widget_title', $instance['title']);
		$phone = esc_html($instance['phone']);
		$image_id = intval($instance['image_id']);
		$image_url = wp_get_attachment_url($image_id);

		echo $before_widget;

		if (!empty($title)) {
			echo $before_title . $title . $after_title;
		}

		if (!empty($image_url)) {
			echo '<img src="' . $image_url . '" alt="Image" />';
		}

		if (!empty($phone)) {
			echo '<p>Phone Number: ' . $phone . '</p>';
		}

		echo $after_widget;
	}

	public function form($instance)
	{
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$phone = isset($instance['phone']) ? esc_attr($instance['phone']) : '';
		$image_id = intval($instance['image_id']);

		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Widget Title:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('image_id'); ?>">Image Upload:</label>
			<input class="widefat custom_media_id" id="<?php echo $this->get_field_id('image_id'); ?>"
				name="<?php echo $this->get_field_name('image_id'); ?>" type="hidden" value="<?php echo $image_id; ?>" />
		<div class="custom_media_preview">
			<?php
			if (!empty($image_id)) {
				echo wp_get_attachment_image($image_id, 'thumbnail');
			}
			?>
		</div>
		<input type="button" class="button custom_media_button" value="Upload Image" onclick="customMediaUploader(this);" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('phone'); ?>">Phone Number:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>"
				name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo $phone; ?>" />
		</p>

		<?php
	}

	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		$instance['phone'] = (!empty($new_instance['phone'])) ? strip_tags($new_instance['phone']) : '';
		$instance['image_id'] = intval($new_instance['image_id']);
		return $instance;
	}
}

function register_custom_image_phone_widget()
{
	register_widget('Custom_Image_Phone_Widget');
}

add_action('widgets_init', 'register_custom_image_phone_widget');




add_filter('sportspress_default_sport', 'custom_default_sport');
function custom_default_sport($default)
{
	// Change the default sport to your desired value
	$default = 'cricket';
	return $default;
}
add_filter('sportspress_general_options', 'custom_season_options');
function custom_season_options($settings)
{
	// Retrieve seasons from your custom data source or modify them as needed
	$custom_seasons = array(
		'season_id_1' => 'Season 1',
		'season_id_2' => 'Season 2',
		// Add more seasons as needed
	);

	// Replace the existing season options with your custom seasons
	foreach ($settings as &$setting) {
		if (isset($setting['id']) && $setting['id'] === 'sportspress_season') {
			$setting['options'] = $custom_seasons;
			break;
		}
	}

	return $settings;
}

// Hook the function to run on the 'after_setup_theme' action
add_filter('sportspress_general_options', 'set_default_season_value');
function set_default_season_value($settings)
{
	$terms = get_terms(
		array(
			'taxonomy' => 'sp_season',
			'hide_empty' => false,
		)
	);

	$default_season_id = ''; // Initialize the variable to store the ID

	if (!empty($terms)) {
		$first_term = reset($terms); // Get the first term
		$default_season_id = $first_term->term_id; // Get the ID of the first term
	}
	// Define the ID of the default season


	// Find the 'Current Season' dropdown in the settings array
	foreach ($settings as &$setting) {
		if (isset($setting['id']) && $setting['id'] === 'sportspress_season') {
			// Set the default value for the 'Current Season' dropdown
			$setting['default'] = $default_season_id;
			break;
		}
	}

	return $settings;
}
// Set the value of the "Main League" option to "Ipsum Premier League"


// widget area end 

/**
 * Exclude products from a particular category on the shop page
 */
function custom_pre_get_posts_query($q)
{

	$tax_query = (array) $q->get('tax_query');

	$tax_query[] = array(
		'taxonomy' => 'product_cat',
		'field' => 'slug',
		'terms' => array('Galore'),
		// Don't display products in the clothing category on the shop page.
		'operator' => 'NOT IN'
	);


	$q->set('tax_query', $tax_query);

}
add_action('woocommerce_product_query', 'custom_pre_get_posts_query');



// playe rage meta field 
function add_player_age_meta_box()
{
	add_meta_box(
		'player_age_meta_box',
		'Player Age',
		'render_player_age_meta_box',
		'sp_player',
		'normal',
		'high'
	);
}
add_action('add_meta_boxes', 'add_player_age_meta_box');
function render_player_age_meta_box($post)
{
	$player_age = get_post_meta($post->ID, 'player_age', true);
	?>
	<label for="player_age">Age:</label>
	<input type="text" id="player_age" name="player_age" value="<?php echo esc_attr($player_age); ?>">
	<?php
}
function save_player_age_meta($post_id)
{
	if (array_key_exists('player_age', $_POST)) {
		update_post_meta(
			$post_id,
			'player_age',
			sanitize_text_field($_POST['player_age'])
		);
	}
}
add_action('save_post', 'save_player_age_meta');



if (is_admin()) {
	add_action('admin_menu', 'cricket_league_pro_product_custom_meta');
}

function cricket_league_pro_product_custom_meta()
{

	add_meta_box('bn_meta', __('Products Meta', 'clothing-store-pro'), 'cricket_league_pro_posttype_bn_meta_callback_product', 'product', 'normal', 'high');
}

function cricket_league_pro_posttype_bn_meta_callback_product($post)
{
	wp_nonce_field(basename(__FILE__), 'bn_nonce');
	$bn_stored_meta = get_post_meta($post->ID);

	$shipping_text1 = get_post_meta($post->ID, 'shipping-text1', true);
	$shipping_text2 = get_post_meta($post->ID, 'shipping-text2', true);
	$shipping_text3 = get_post_meta($post->ID, 'shipping-text3', true);
	$shipping_text4 = get_post_meta($post->ID, 'shipping-text4', true);



	$shipping_img1 = get_post_meta($post->ID, 'shipping-img1', true);
	$shipping_img2 = get_post_meta($post->ID, 'shipping-img2', true);
	$shipping_img3 = get_post_meta($post->ID, 'shipping-img3', true);
	$shipping_img4 = get_post_meta($post->ID, 'shipping-img4', true);

	$product_single_text = get_post_meta($post->ID, 'product-single-text', true);

	$product_meta_image = get_post_meta($post->ID, 'product-meta-image', true);

	$total_sales = get_post_meta($post->ID, 'total_sales', true);
	?>
	<div id="property_stuff">
		<table id="list-table">
			<tbody id="the-list" data-wp-lists="list:meta">

				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('Shipping Text 1', 'vw-cricket_pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-text1" id="shipping-text1"
							value="<?php echo esc_html($shipping_text1); ?>" />
					</td>
				</tr>

				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('Shipping Text 2', 'vw-cricket_pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-text2" id="shipping-text2"
							value="<?php echo esc_html($shipping_text2); ?>" />
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('Shipping Text 3', 'vw-cricket_pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-text3" id="shipping-text3"
							value="<?php echo esc_html($shipping_text3); ?>" />
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php esc_html_e('Shipping Text 4', 'vw-cricket_pro') ?>
					</td>
					<td class="left">
						<input type="text" name="shipping-text4" id="shipping-text4"
							value="<?php echo esc_html($shipping_text4); ?>" />
					</td>
				</tr>



				<tr id="meta-1">
					<td class="left">
						<?php _e('Shipping Image 1', 'vw-cricket_pro') ?>
					</td>
					<td class="left">
						<input type="img" name="shipping-img1" id="shipping-img1"
							value="<?php echo esc_attr($shipping_img1); ?>" />
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php _e('Shipping Image 2', 'vw-cricket_pro') ?>
					</td>
					<td class="left">
						<input type="img" name="shipping-img2" id="shipping-img2"
							value="<?php echo esc_attr($shipping_img2); ?>" />
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php _e('Shipping Image 3', 'vw-cricket_pro') ?>
					</td>
					<td class="left">
						<input type="img" name="shipping-img3" id="shipping-img3"
							value="<?php echo esc_attr($shipping_img3); ?>" />
					</td>
				</tr>
				<tr id="meta-1">
					<td class="left">
						<?php _e('Shipping Image 4', 'vw-cricket_pro') ?>
					</td>
					<td class="left">
						<input type="img" name="shipping-img4" id="shipping-img4"
							value="<?php echo esc_attr($shipping_img4); ?>" />
					</td>
				</tr>

			</tbody>
		</table>
	</div>
	<?php
}

function cricket_league_pro_meta_save_product($post_id)
{

	if (!isset($_POST['bn_nonce']) || !wp_verify_nonce($_POST['bn_nonce'], basename(__FILE__))) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Team Meta 1


	if (isset($_POST['graph-icon'])) {
		update_post_meta($post_id, 'graph-icon', sanitize_text_field($_POST['graph-icon']));
	}


	if (isset($_POST['shipping-text1'])) {
		update_post_meta($post_id, 'shipping-text1', sanitize_text_field($_POST['shipping-text1']));
	}
	if (isset($_POST['shipping-text2'])) {
		update_post_meta($post_id, 'shipping-text2', sanitize_text_field($_POST['shipping-text2']));
	}
	if (isset($_POST['shipping-text3'])) {
		update_post_meta($post_id, 'shipping-text3', sanitize_text_field($_POST['shipping-text3']));
	}
	if (isset($_POST['shipping-text4'])) {
		update_post_meta($post_id, 'shipping-text4', sanitize_text_field($_POST['shipping-text4']));
	}

	if (isset($_POST['shipping-img1'])) {
		update_post_meta($post_id, 'shipping-img1', sanitize_text_field($_POST['shipping-img1']));
	}
	if (isset($_POST['shipping-img2'])) {
		update_post_meta($post_id, 'shipping-img2', sanitize_text_field($_POST['shipping-img2']));
	}
	if (isset($_POST['shipping-img3'])) {
		update_post_meta($post_id, 'shipping-img3', sanitize_text_field($_POST['shipping-img3']));
	}
	if (isset($_POST['shipping-img4'])) {
		update_post_meta($post_id, 'shipping-img4', sanitize_text_field($_POST['shipping-img4']));
	}

}
add_action('save_post', 'cricket_league_pro_meta_save_product');

/* product meta field end*/

function custom_pagination($query, $range = 4)
{
	global $wp_query;

	// If no custom query is provided, use the global $wp_query
	if ($query === null) {
		$query = $wp_query;
	}

	// Don't display pagination if there's only one page
	if ($query->max_num_pages <= 1) {
		return;
	}

	// Get the current page
	$current_page = max(1, get_query_var('paged'));

	// Get the total number of pages
	$total_pages = $query->max_num_pages;

	// Output the pagination
	echo '<div class="pagination">';


	// Previous page link
	if ($current_page > 1) {
		echo '<a href="' . esc_url(get_pagenum_link($current_page - 1)) . '" class="pagination-link next-prev"><i class="fas fa-chevron-left"></i></a>';
	}

	// Loop through pages
	for ($i = max(1, $current_page - $range); $i <= min($current_page + $range, $total_pages); $i++) {
		// Output active page link
		if ($i == $current_page) {
			echo '<span class="pagination-link current">' . $i . '</span>';
		} else {
			// Output other page links
			echo '<a href="' . esc_url(get_pagenum_link($i)) . '" class="pagination-link">' . $i . '</a>';
		}
	}

	// Next page link
	if ($current_page < $total_pages) {
		echo '<a href="' . esc_url(get_pagenum_link($current_page + 1)) . '" class="pagination-link next-prev"><i class="fas fa-chevron-right"></i></a>';
	}


	echo '</div>';
}





class Custom_Categories_Widget extends WP_Widget
{
	function __construct()
	{
		parent::__construct(
			'custom_categories_widget',
			__('Custom Categories Widget', 'your-theme-textdomain'),
			array(
				'description' => __('Display categories and the number of posts in each category.', 'your-theme-textdomain')
			)
		);
	}

	public function widget($args, $instance)
	{
		$title = apply_filters('widget_title', $instance['title']);

		echo $args['before_widget'];
		if (!empty($title)) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		$categories = get_categories();
		if ($categories) {
			echo '<ul>';
			foreach ($categories as $category) {
				$active_class = is_category($category->term_id) ? 'active' : ''; // Check if the current page is a category archive for this category.
				echo '<li class="category-list ' . $active_class . '"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> <span class="count">0' . $category->count . '</span></li>';
			}
			echo '</ul>';
		}

		echo $args['after_widget'];
	}

	public function form($instance)
	{
		$title = !empty($instance['title']) ? $instance['title'] : '';
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
		</p>
		<?php
	}

	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
		return $instance;
	}
}

function register_custom_categories_widget()
{
	register_widget('Custom_Categories_Widget');
}
add_action('widgets_init', 'register_custom_categories_widget');

// AJAX handler to fetch events based on selected filter
add_action('wp_ajax_fetch_events', 'fetch_events_callback');
add_action('wp_ajax_nopriv_fetch_events', 'fetch_events_callback');

function fetch_events_callback()
{
	$filter = $_POST['filter'];
	$paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

	// Check the selected filter and fetch events accordingly
	if ($filter === 'year') {
		// Fetch events grouped by year with pagination
		get_events_grouped_by_year($paged);
	} elseif ($filter === 'month') {
		get_events_grouped_by_month($paged);
	} elseif ($filter === 'today') {
		// Fetch events for today
		get_events_grouped_today($paged);
	}

	// Always exit to avoid further execution
	wp_die();
}

function get_events_grouped_by_year($paged)
{
	$events_by_year = array();

	$args = array(
		'post_type' => 'upcoming_events',
		'posts_per_page' => 6, // Number of events per page
		'paged' => $paged,
		'order' => 'ASC',
	);

	$events_query = new WP_Query($args);

	if ($events_query->have_posts()) {
		while ($events_query->have_posts()) {
			$events_query->the_post();
			$event_date = get_post_meta(get_the_ID(), '_event_date', true);
			$year = date('Y', strtotime($event_date));

			if (!isset($events_by_year[$year])) {
				$events_by_year[$year] = array();
			}
			$events_by_year[$year][] = get_post();
		}
		wp_reset_postdata();
	}

	$html = '';
	foreach ($events_by_year as $year => $events) {
		$html .= '<h2>' . esc_html($year) . '</h2>';
		foreach ($events as $event) {
			$date = date('d'); // Current date in YYYY-MM-DD format
			$day = date('l', strtotime($date)); // Full day name (e.g., "Monday")
			$event_date = get_post_meta(get_the_ID(), '_event_date', true);
			$event_date_end = get_post_meta(get_the_ID(), '_event_date_end', true);
			// Convert event date to 'day-mon-year' format

			$event_date_formatted = date('d M Y', strtotime($event_date));
			$event_date_end_formatted = date('d M Y', strtotime($event_date_end));
			$month = date('M', strtotime($event_date));
			$end_date_month = date('M', strtotime($event_date_end));
			$event_date_formatted = str_replace($month, date('M', strtotime($event_date)), $event_date_formatted);
			$event_date_formatted_end = str_replace($end_date_month, date('M', strtotime($event_date_end)), $event_date_end_formatted);
			$start_time = get_post_meta(get_the_ID(), '_start_time', true);
			// Convert start time to AM/PM format (assuming $start_time is in 'H:i' format)
			$start_time_am_pm = date('h:i A', strtotime($start_time));
			$end_time = get_post_meta(get_the_ID(), '_end_time', true);
			$end_time_am_pm = date('h:i A', strtotime($end_time));
			$location = get_post_meta(get_the_ID(), '_venue_name', true);
			$entry_fees = get_post_meta(get_the_ID(), '_entry_fees', true);
			// Format date and time
			$event_date_formatted = date('d M Y', strtotime($event_date));
			$event_date_formatted_end = date('d M Y', strtotime($event_date_end));
			$start_time_am_pm = date('h:i A', strtotime($start_time));
			$end_time_am_pm = date('h:i A', strtotime($end_time));

			$html .= '<div class="upcoming-item mb-5">';
			$html .= '<div class="upcoming-inner col-lg-8 col-md-8 col-12">';
			$html .= '<div class="evt-left">';
			$html .= '<span class="date">' . date('d', strtotime($event_date)) . '</span>' . date('l', strtotime($event_date));
			$html .= '</div>';
			$html .= '<div class="evt-right">';
			$html .= '<p class="schedule-inner clock-before">' . $event_date_formatted . ' - ' . esc_html($start_time_am_pm) . ' To '.$event_date_formatted_end .' - '. esc_html($end_time_am_pm) . '</p>';
			$html .= '<div class="heading-wrap-evt">';
			$html .= '<h3><a href="' . esc_html(get_the_permalink()) . '">' . esc_html($event->post_title) . '</a></h3>';
			$html .= '</div>';
			$html .= '<p class="address">' . esc_html($location) . '</p>';
			$html .= '<div class="event-content">' . wpautop($event->post_content) . '</div>';
			$html .= '<p class="Price">' . esc_html($entry_fees) . '</p>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '<div class="featured-image col-lg-4 col-md-4 col-12">';
			if (has_post_thumbnail($event->ID)) {
				$html .= '<a href="' . esc_url(get_permalink($event->ID)) . '">';
				$html .= get_the_post_thumbnail($event->ID, 'product-slider', array('class' => 'img-fluid'));
				$html .= '</a>';
			}
			$html .= '</div>';
			$html .= '</div>';
		}
	}

	$html .= '<div class="pagination">';
	$html .= paginate_links(
		array(
			'total' => $events_query->max_num_pages,
			'current' => $paged,
			'format' => '?paged=%#%',
			'type' => 'list',
			'prev_text' => __('<'),
			'next_text' => __('>'),
		)
	);
	$html .= '</div>';

	echo $html;
}


function get_events_grouped_by_month($paged)
{
	// Initialize an array to store events grouped by month
	$events_by_month = array();

	// Query upcoming events
	$args = array(
		'post_type' => 'upcoming_events',
		'posts_per_page' => 6, // Retrieve all upcoming events
		'paged' => $paged,
		'order' => 'ASC',
	);

	$events_query = new WP_Query($args);

	// Group events by month
	if ($events_query->have_posts()) {
		while ($events_query->have_posts()) {
			$events_query->the_post();
			$event_date = get_post_meta(get_the_ID(), '_event_date', true);
			if ($event_date) {
				$month_key = date('F Y', strtotime($event_date)); // Get month and year

				// Add event to the corresponding month array
				if (!isset($events_by_month[$month_key])) {
					$events_by_month[$month_key] = array();
				}
				$events_by_month[$month_key][] = get_post();
			}
		}
		wp_reset_postdata();
	}

	$html = '';

	// Build the HTML for events grouped by month
	foreach ($events_by_month as $month => $events) {
		$html .= '<h2>' . esc_html($month) . '</h2>';

		// Loop through events for the current month
		foreach ($events as $event) {
			setup_postdata($event);
			$date = date('d'); // Current date in YYYY-MM-DD format
			$day = date('l', strtotime($date)); // Full day name (e.g., "Monday")
			$event_date = get_post_meta(get_the_ID(), '_event_date', true);
			$event_date_end = get_post_meta(get_the_ID(), '_event_date_end', true);
			// Convert event date to 'day-mon-year' format

			$event_date_formatted = date('d M Y', strtotime($event_date));
			$event_date_end_formatted = date('d M Y', strtotime($event_date_end));
			$month = date('M', strtotime($event_date));
			$end_date_month = date('M', strtotime($event_date_end));
			$event_date_formatted = str_replace($month, date('M', strtotime($event_date)), $event_date_formatted);
			$event_date_formatted_end = str_replace($end_date_month, date('M', strtotime($event_date_end)), $event_date_end_formatted);
			$start_time = get_post_meta(get_the_ID(), '_start_time', true);
			// Convert start time to AM/PM format (assuming $start_time is in 'H:i' format)
			$start_time_am_pm = date('h:i A', strtotime($start_time));
			$end_time = get_post_meta(get_the_ID(), '_end_time', true);
			$end_time_am_pm = date('h:i A', strtotime($end_time));
			$location = get_post_meta(get_the_ID(), '_venue_name', true);
			$entry_fees = get_post_meta(get_the_ID(), '_entry_fees', true);
			// Format date and time
			$event_date_formatted = date('d M Y', strtotime($event_date));
			$event_date_formatted_end = date('d M Y', strtotime($event_date_end));
			$start_time_am_pm = date('h:i A', strtotime($start_time));
			$end_time_am_pm = date('h:i A', strtotime($end_time));

			// Build HTML for each event
			$html .= '<div class="upcoming-item mb-5">';
			$html .= '<div class="upcoming-inner col-lg-8 col-md-12 col-12">';
			$html .= '<div class="evt-left">';
			$html .= '<span class="date">' . date('d', strtotime($event_date)) . '</span>';
			$html .= date('l', strtotime($event_date));
			$html .= '</div>';
			$html .= '<div class="evt-right">';
			$html .= '<p class="schedule-inner clock-before">' . $event_date_formatted . ' - ' . esc_html($start_time_am_pm) . ' To ' . $event_date_formatted_end . ' - ' . esc_html($end_time_am_pm) . '</p>';
			$html .= '<div class="heading-wrap-evt">';
			$html .= '<h3><a href="' . esc_html(get_the_permalink($event->ID)) . '">' . esc_html(get_the_title($event->ID)) . '</a></h3>';
			$html .= '</div>';
			$html .= '<p class="address">' . esc_html($location) . '</p>';
			$html .= '<div class="event-content">' . wpautop(get_the_content(null, false, $event->ID)) . '</div>';
			$html .= '<p class="Price">' . esc_html($entry_fees) . '</p>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '<div class="featured-image col-lg-4 col-md-12 col-12">';
			if (has_post_thumbnail($event->ID)) {
				$html .= '<a href="' . esc_url(get_permalink($event->ID)) . '">' . get_the_post_thumbnail($event->ID, 'product-slider', array('class' => 'img-fluid')) . '</a>';
			}
			$html .= '</div>';
			$html .= '</div>';
		}
	}
	$html .= '<div class="pagination">';
	$html .= paginate_links(
		array(
			'total' => $events_query->max_num_pages,
			'current' => $paged,
			'format' => '?paged=%#%',
			'type' => 'list',
			'prev_text' => __('<'),
			'next_text' => __('>'),
		)
	);
	$html .= '</div>';
	// Reset the global post object
	wp_reset_postdata();

	echo $html;
}


function get_events_grouped_today($paged)
{
	// Initialize a variable to store today's date
	$today_date = date('Y-m-d');

	// Query upcoming events for today
	$args = array(
		'post_type' => 'upcoming_events',
		'posts_per_page' => 6, // Retrieve all upcoming events
		'paged' => $paged,
		'meta_query' => array(
			array(
				'key' => '_event_date',
				'value' => $today_date,
				'compare' => '=',
				'type' => 'DATE',
			),
		),
		'order' => 'ASC',
	);

	$events_query = new WP_Query($args);

	// Initialize an HTML variable to store the output
	$html = '';

	// Check if there are any events for today
	if ($events_query->have_posts()) {
		// Start output HTML
		$html .= '<h2>Events Today</h2>';

		// Loop through events
		while ($events_query->have_posts()) {
			$events_query->the_post();
			$date = date('d'); // Current date in YYYY-MM-DD format
			$day = date('l', strtotime($date)); // Full day name (e.g., "Monday")
			$event_date = get_post_meta(get_the_ID(), '_event_date', true);
			$event_date_end = get_post_meta(get_the_ID(), '_event_date_end', true);
			// Convert event date to 'day-mon-year' format

			$event_date_formatted = date('d M Y', strtotime($event_date));
			$event_date_end_formatted = date('d M Y', strtotime($event_date_end));
			$month = date('M', strtotime($event_date));
			$end_date_month = date('M', strtotime($event_date_end));
			$event_date_formatted = str_replace($month, date('M', strtotime($event_date)), $event_date_formatted);
			$event_date_formatted_end = str_replace($end_date_month, date('M', strtotime($event_date_end)), $event_date_end_formatted);
			$start_time = get_post_meta(get_the_ID(), '_start_time', true);
			// Convert start time to AM/PM format (assuming $start_time is in 'H:i' format)
			$start_time_am_pm = date('h:i A', strtotime($start_time));
			$end_time = get_post_meta(get_the_ID(), '_end_time', true);
			$end_time_am_pm = date('h:i A', strtotime($end_time));
			$location = get_post_meta(get_the_ID(), '_venue_name', true);
			$entry_fees = get_post_meta(get_the_ID(), '_entry_fees', true);
			// Format date and time
			$event_date_formatted = date('d M Y', strtotime($event_date));
			$event_date_formatted_end = date('d M Y', strtotime($event_date_end));
			$start_time_am_pm = date('h:i A', strtotime($start_time));
			$end_time_am_pm = date('h:i A', strtotime($end_time));

			// Build HTML for each event
			$html .= '<div class="upcoming-item mb-5">';
			$html .= '<div class="upcoming-inner col-lg-8 col-md-12 col-12">';
			$html .= '<div class="evt-left">';
			$html .= '<span class="date">' . date('d', strtotime($event_date)) . '</span>';
			$html .= date('l', strtotime($event_date));
			$html .= '</div>';
			$html .= '<div class="evt-right">';
			$html .= '<p class="schedule-inner clock-before">' . $event_date_formatted . ' - ' . esc_html($start_time_am_pm) . ' To ' . $event_date_formatted_end . ' - ' . esc_html($end_time_am_pm) . '</p>';
			$html .= '<div class="heading-wrap-evt">';
			$html .= '<h3><a href="' . esc_html(get_the_permalink()) . '">' . esc_html(get_the_title()) . '</a></h3>';
			$html .= '</div>';
			$html .= '<p class="address">' . esc_html($location) . '</p>';
			$html .= '<div class="event-content">' . wpautop(get_the_content()) . '</div>';
			$html .= '<p class="Price">' . esc_html($entry_fees) . '</p>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '<div class="featured-image col-lg-4 col-md-12 col-12">';
			if (has_post_thumbnail(get_the_ID())) {
				$html .= '<a href="' . esc_url(get_permalink()) . '">' . get_the_post_thumbnail(get_the_ID(), 'product-slider', array('class' => 'img-fluid')) . '</a>';
			}
			$html .= '</div>';
			$html .= '</div>';
		}
	} else {
		// If no events found for today
		$html .= '<p>No events are happening today.</p>';
	}
	$html .= '<div class="pagination">';
	$html .= paginate_links(
		array(
			'total' => $events_query->max_num_pages,
			'current' => $paged,
			'format' => '?paged=%#%',
			'type' => 'list',
			'prev_text' => __('<'),
			'next_text' => __('>'),
		)
	);
	$html .= '</div>';
	// Reset post data
	wp_reset_postdata();

	// Output HTML
	echo $html;
}

// Add meta boxes to your custom post type
function custom_post_meta_boxes()
{
	add_meta_box(
		'custom_meta_box1',
		'Custom Meta Box 1',
		'custom_meta_box1_callback',
		'upcoming_events',
		'normal',
		'default'
	);

	add_meta_box(
		'custom_meta_box2',
		'Custom Meta Box 2',
		'custom_meta_box2_callback',
		'upcoming_events',
		'normal',
		'default'
	);
}
add_action('add_meta_boxes', 'custom_post_meta_boxes');

// Callback function for the first custom meta box
function custom_meta_box1_callback($post)
{
	// Add nonce field for security
	wp_nonce_field('custom_meta_box_nonce', 'custom_meta_box_nonce');

	// Retrieve the current value of the meta field
	$value = get_post_meta($post->ID, '_custom_meta_field1', true);

	// Output an input field
	echo '<label for="custom_meta_field1">Custom Field 1:</label>';
	echo '<input type="text" id="custom_meta_field1" name="custom_meta_field1" value="' . esc_attr($value) . '" />';
}

// Callback function for the second custom meta box
function custom_meta_box2_callback($post)
{
	// Add nonce field for security
	wp_nonce_field('custom_meta_box_nonce', 'custom_meta_box_nonce');

	// Retrieve the current value of the meta field
	$value = get_post_meta($post->ID, '_custom_meta_field2', true);

	// Output an input field
	echo '<label for="custom_meta_field2">Custom Field 2:</label>';
	echo '<input type="text" id="custom_meta_field2" name="custom_meta_field2" value="' . esc_attr($value) . '" />';
}

// Save meta box data
function save_custom_meta_boxes_data($post_id)
{
	// Check if our nonce is set.
	if (!isset($_POST['custom_meta_box_nonce'])) {
		return;
	}

	// Verify that the nonce is valid.
	if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], 'custom_meta_box_nonce')) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	// Check the user's permissions.
	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	// Update or save the meta fields
	if (isset($_POST['custom_meta_field1'])) {
		update_post_meta($post_id, '_custom_meta_field1', sanitize_text_field($_POST['custom_meta_field1']));
	}
	if (isset($_POST['custom_meta_field2'])) {
		update_post_meta($post_id, '_custom_meta_field2', sanitize_text_field($_POST['custom_meta_field2']));
	}
}
add_action('save_post', 'save_custom_meta_boxes_data');

function custom_comment_form_defaults($defaults)
{
	$defaults['title_reply'] = 'Leave a Comment';
	$defaults['label_submit'] = 'Leave a comment';
	return $defaults;
}
add_filter('comment_form_defaults', 'custom_comment_form_defaults');
function average_rating()
{
	global $wpdb;
	$post_id = get_the_ID();
	$ratings = $wpdb->get_results("
	
		SELECT $wpdb->commentmeta.meta_value
		FROM $wpdb->commentmeta
		INNER JOIN $wpdb->comments on $wpdb->comments.comment_id=$wpdb->commentmeta.comment_id
		WHERE $wpdb->commentmeta.meta_key='rating'
		AND $wpdb->comments.comment_post_id=$post_id
		AND $wpdb->comments.comment_approved =1
	
		");
	$counter = 0;
	$average_rating = 0;
	if ($ratings) {
		foreach ($ratings as $rating) {
			$average_rating = $average_rating + $rating->meta_value;
			$counter++;
		}
		//round the average to the nearast 1/2 point
		return (round(($average_rating / $counter) * 2, 0) / 2);
	} else {
		//no ratings
		return '0';
	}
}

// woo commerce function 

function get_star_rating_custom()
{
	global $product;

	$average = $product->get_average_rating();
	$stars_html = '<div class="star-rating">';
	$full_stars = ceil($average);

	// Full stars
	for ($i = 1; $i <= $full_stars; $i++) {
		$stars_html .= '<span class="fa fa-star"></span>';
	}

	// Empty stars
	for ($i = $full_stars + 1; $i <= 5; $i++) {
		$stars_html .= '<span class="fa fa-star-o"></span>';
	}

	$stars_html .= '</div>';

	return $stars_html;
}
function modify_search_query($query)
{
	if ($query->is_search() && !is_admin()) {
		// Check if it's the search page for 'upcoming_events'
		if (isset($_GET['post_type']) && $_GET['post_type'] == 'upcoming_events') {
			$query->set('post_type', 'upcoming_events');
		}
	}
	return $query;
}
add_action('pre_get_posts', 'modify_search_query');
function load_custom_search_template($template)
{
	global $wp_query;
	$post_type = get_query_var('post_type');

	if ($wp_query->is_search && $post_type == 'upcoming_events') {
		$new_template = locate_template('search-upcoming_events.php');
		if ($new_template) {
			return $new_template;
		}
	}
	return $template;
}
add_filter('template_include', 'load_custom_search_template');

function set_yith_wishlist_button_position()
{
	// The desired position value, e.g., 'before_add_to_cart_form'
	$new_position = 'none'; // Change this to the desired position

	// Update the YITH wishlist option
	update_option('yith_wcwl_add_to_wishlist_position', $new_position);
}

// Hook into 'init' to ensure WordPress is fully loaded
add_action('init', 'set_yith_wishlist_button_position');
function customize_yith_wishlist_position($positions)
{
	// Set the desired position
	$positions['product_page'] = 'none';
	return $positions;
}

// Assume the plugin has a filter like this
add_filter('yith_wcwl_positions', 'customize_yith_wishlist_position');


function criket_leauge_pro_section_match_shortcode()
{
	ob_start();
	get_template_part('template-parts/home/section-matches');
	$output = ob_get_clean();
	return $output;
}
add_shortcode('space-latest-matach', 'criket_leauge_pro_section_match_shortcode');
// json shortcode end
function criket_leauge_pro_section_table_shortcode()
{
	ob_start();
	get_template_part('template-parts/home/seciton-teamPosition');
	$output = ob_get_clean();
	return $output;
}
add_shortcode('space-league-table', 'criket_leauge_pro_section_table_shortcode');
// json shortcode end
function criket_leauge_pro_sectio_playerTab_shortcode()
{
	ob_start();
	get_template_part('template-parts/home/section-playerTab');
	$output = ob_get_clean();
	return $output;
}
add_shortcode('space-playerTab', 'criket_leauge_pro_sectio_playerTab_shortcode');


function criket_leauge_pro_sectio_testimonial_shortcode()
{
	ob_start();
	get_template_part('template-parts/home/section-testimonials');
	$output = ob_get_clean();
	return $output;
}
add_shortcode('space-testimonial', 'criket_leauge_pro_sectio_testimonial_shortcode');
// json shortcode end





add_action('wp_ajax_search_events', 'search_events');
add_action('wp_ajax_nopriv_search_events', 'search_events');

function search_events()
{

	$keyword = $_POST['keyword'];

	// Custom query to search for events based on venue taxonomy
	$args = array(
		'post_type' => 'sp_event',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'ASC',
		'post_status' => array('publish', 'future'),
		//'s' => $keyword, // Include search keyword
		'tax_query' => array(
			array(
				'taxonomy' => 'sp_venue',
				'field' => 'name',
				'terms' => $keyword,
				'operator' => 'IN'
			)
		)
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		echo '<table id="events-table">'; // Add ID to the table
		// echo '<thead><tr><th>Sr No</th><th>Date</th><th>Match</th><th>Venue</th><th>Time</th><th>Booking</th></tr></thead>';
		echo '<tbody>';
		$i = 1;
		while ($query->have_posts()) {
			$query->the_post();

			// Retrieve team meta values
			$teams = get_post_meta(get_the_ID(), 'sp_team');

			// Ensure we have at least two teams to form a match
			if (count($teams) >= 2) {
				$team_names = array();

				// Retrieve team names
				foreach ($teams as $team_id) {
					$team_name = get_the_title($team_id);
					if ($team_name) {
						$team_names[] = $team_name;
					}
				}

				// Format and display the match
				$match = implode(' vs ', $team_names);
				$date = get_the_date('Y-m-d');
				$time = get_the_date('h:i A', get_the_ID()); // Get time in AM/PM format

				// Retrieve the venue (location) terms associated with the event
				$venues = get_the_terms(get_the_ID(), 'sp_venue');
				$venue = '';

				if ($venues && !is_wp_error($venues)) {
					foreach ($venues as $v) {
						$venue = $v->name;
						break;
					}
				}

				// Display the event information in table row
				echo '<tr>';
				echo '<td>0' . $i . '</td>';
				echo '<td>' . $date . '</td>';
				echo '<td>' . $match . '</td>';
				echo '<td>' . $venue . '</td>';
				echo '<td>' . $time . '</td>';
				echo '<td> <a href="' . esc_url(get_permalink(get_page_by_title('Booking Form'))) . '" class="theme-btn black">Book Now <i class="fa fa-hand-pointer-o"></i></a></td>';
				echo '</tr>';
			}
			$i++;
		}

		echo '</tbody>';
		echo '</table>'; // End the table
	} else {
		// No posts found
		echo 'No events found.';
	}


	wp_reset_postdata();

	die(); // Always end with die() to prevent extra output



}


// custom size for product image 
// Add theme support for post thumbnails
add_theme_support('post-thumbnails');

// Define custom image sizes
add_image_size('product-slider', 600, 400, true); // 600 pixels wide by 400 pixels tall, hard crop mode
