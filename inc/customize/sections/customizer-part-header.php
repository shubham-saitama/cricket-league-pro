<?php

$wp_customize->add_section(
	'cricket_league_pro_topbar_header',
	array(
		'title' => __('Top Bar', 'cricket-league-pro'),
		'description' => __('Top Bar Settings', 'cricket-league-pro'),
		'priority' => null,
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_topbar_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_topbar_enable',
	array(
		'type' => 'radio',
		'label' => 'Do you want this section',
		'section' => 'cricket_league_pro_topbar_header',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);

$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_topbar_enable',
	array(
		'selector' => '#site_top .container',
		'render_callback' => 'optical_lens_shop_customize_partial_cricket_league_pro_topbar_enable',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_topbar_bg_section_ct_pallete',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);

$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_topbar_bg_section_ct_pallete',
		array(
			'label' => __('Section Background ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_topbar_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_topbar_bgimage',
		array(
			'label' => __('Background image', 'cricket-league-pro'),
			'description' => __('Dimension 1520px x 50px', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header',
			'settings' => 'cricket_league_pro_topbar_bgimage'
		)
	)
);
$wp_customize->add_setting(
	'vw_logistics_servics_topbar_background_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'vw_logistics_servics_topbar_background_color',
		array(
			'label' => __('Top Bar Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header',
			'settings' => 'vw_logistics_servics_topbar_background_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_header_section_ct_pallete',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_header_section_ct_pallete',
		array(
			'label' => __('Section Typography ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_header_text_ct_pallete',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_header_text_ct_pallete',
		array(
			'label' => __('Text Typography ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_header_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_header_text_color',
		array(
			'label' => __('Top Bar Text Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header',
			'settings' => 'cricket_league_pro_header_text_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_header_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_header_text_font_family',
	array(
		'section' => 'cricket_league_pro_topbar_header',
		'label' => __('Top Bar Text Font family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_header_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_header_text_font_size',
	array(
		'label' => __('Text Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_topbar_header',
		'setting' => 'cricket_league_pro_header_text_font_size',
		'type' => 'number'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_header_icon_pallete',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_header_icon_pallete',
		array(
			'label' => __('Icon Typography ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_topbar_icon_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_topbar_icon_color',
		array(
			'label' => __('Top Icon Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header',
			'settings' => 'cricket_league_pro_topbar_icon_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_topbar_left_icon_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_topbar_left_icon_size',
	array(
		'label' => __('Topbar Icons Size', 'cricket-league-pro'),
		'description' => __('Add icon size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_topbar_header',
		'setting' => 'Advanced Button
		icon_size',
		'type' => 'number'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_topbar_bg_section_ct_pallete',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);

$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_topbar_bg_section_ct_pallete',
		array(
			'label' => __('Top Bar Left', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header'
		)
	)
);

for ($i = 1; $i <= 3; $i++) {
	$wp_customize->add_setting(
		'cricket_league_pro_topbar_left_icon_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		new cricket_league_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'cricket_league_pro_topbar_left_icon_' . $i,
			array(
				'section' => 'cricket_league_pro_topbar_header',
				'type' => 'icon',
				'label' => esc_html__('Choose Field ' . $i . ' Icon', 'cricket-league-pro'),
			)
		)
	);

	$wp_customize->add_setting(
		'cricket_league_pro_topbar_left_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'cricket_league_pro_topbar_left_' . $i,
		array(
			'label' => __('Add Field ' . $i . ' Text', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'cricket_league_pro_topbar_left_link_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'cricket_league_pro_topbar_left_link_' . $i,
		array(
			'label' => __('Add Link ' . $i, 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header',
			'type' => 'text'
		)
	);
}



$wp_customize->add_setting(
	'cricket_league_pro_header_button_pallete',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_header_button_pallete',
		array(
			'label' => __('Top Bar Social Icons', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header'
		)
	)
);

for ($j = 1; $j <= 4; $j++) {
	$wp_customize->add_setting(
		'cricket_league_pro_social_icons_' . $j,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		new cricket_league_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'cricket_league_pro_social_icons_' . $j,
			array(
				'section' => 'cricket_league_pro_topbar_header',
				'type' => 'icon',
				'label' => __('Social Icon ' . $j, 'cricket-league-pro'),
			)
		)
	);

	$wp_customize->add_setting(
		'cricket_league_pro_social_icons_link_' . $j,
		// Change $i to $j
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
			// You can use a more specific callback for URL validation if needed
		)
	);

	// Add a control for the social icon link
	$wp_customize->add_control(
		'cricket_league_pro_social_icons_link_' . $j,
		// Change $i to $j
		array(
			'label' => __('Social Icon Link ' . $j, 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header',
			'type' => 'text',
		)
	);
}


$wp_customize->add_setting(
	'cricket_league_pro_topbar_icon_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_topbar_icon_size',
	array(
		'label' => __('Social icons Size', 'cricket-league-pro'),
		'description' => __('Add icon size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_topbar_header',
		'setting' => 'cricket_league_pro_topbar_icon_size',
		'type' => 'number'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_header_social_icon_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_header_social_icon_color',
		array(
			'label' => __('Social Icons Icon Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_topbar_header',
			'settings' => 'cricket_league_pro_header_social_icon_color',
		)
	)
);








// $wp_customize->add_setting(
// 	'cricket_league_pro_header_button_bg_color',
// 	array(
// 		'default' => '',
// 		'sanitize_callback' => 'sanitize_hex_color'
// 	)
// );


/*------------------------ Header Section----------------------- */

// middle header icon settings

$wp_customize->add_section(
	'cricket_league_pro_header_header',
	array(
		'title' => __('Header', 'cricket-league-pro'),
		'description' => __('Header Settings', 'cricket-league-pro'),
		'priority' => null,
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_header_enable',
	array(
		'selector' => '#site_top .container',
		'render_callback' => 'optical_lens_shop_customize_partial_cricket_league_pro_header_enable',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_header_bg_section_ct_pallete',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);

$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_header_bg_section_ct_pallete',
		array(
			'label' => __('Section Background ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_header_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_header_bgimage',
		array(
			'label' => __('Background image', 'cricket-league-pro'),
			'description' => __('Dimension 1520px x 50px', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header',
			'settings' => 'cricket_league_pro_header_bgimage'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_header_widgets_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_header_widgets_bgcolor',
		array(
			'label' => __('Header Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header',
			'settings' => 'cricket_league_pro_header_widgets_bgcolor',
		)
	)
);


// This is Header Menu Color picker setting
$wp_customize->add_setting(
	'cricket_league_pro_header_headermenu_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_header_headermenu_settings',
		array(
			'label' => __('Menu Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_headermenu_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_headermenu_color',
		array(
			'label' => __('Menu Item Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header',
			'settings' => 'cricket_league_pro_headermenu_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_headermenu_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_headermenu_font_family',
	array(
		'section' => 'cricket_league_pro_header_header',
		'label' => __('Menu Item Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_headermenu_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_headermenu_font_size',
	array(
		'label' => __('Menu Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_header_header',
		'setting' => 'cricket_league_pro_headermenu_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_headermenu_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_headermenu_font_weight',
	array(
		'section' => 'cricket_league_pro_header_header',
		'label' => __('Menu Items Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_header_menuhovercolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_header_menuhovercolor',
		array(
			'label' => __('Menu Item Hover Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header',
			'settings' => 'cricket_league_pro_header_menuhovercolor',
		)
	)
);

// This is Nav Dropdown Background Color picker setting
$wp_customize->add_setting(
	'cricket_league_pro_dropdownbg_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_dropdownbg_color',
		array(
			'label' => __('Menu DropDown Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header',
			'settings' => 'cricket_league_pro_dropdownbg_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_dropdownbg_itemcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_dropdownbg_itemcolor',
		array(
			'label' => __('Menu DropDown Item Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header',
			'settings' => 'cricket_league_pro_dropdownbg_itemcolor',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_dropdownbg_item_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_dropdownbg_item_font_family',
	array(
		'section' => 'cricket_league_pro_header_header',
		'label' => __('Menu DropDown Item Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_dropdownbg_item_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_dropdownbg_item_font_size',
	array(
		'label' => __('Menu DropDown Item Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_header_header',
		'setting' => 'cricket_league_pro_dropdownbg_item_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_dropdownbg_item_hovercolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_dropdownbg_item_hovercolor',
		array(
			'label' => __('Menu DropDown Item Hover Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header',
			'settings' => 'cricket_league_pro_dropdownbg_item_hovercolor',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_header_bat_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_header_bat_image',
		array(
			'label' => __('Handle Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header',
			'settings' => 'cricket_league_pro_header_bat_image'
		)
	)
);


//responavie
$wp_customize->add_setting(
	'cricket_league_pro_header_res_menu_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_header_res_menu_settings',
		array(
			'label' => __('Responsive Menu Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_header_res_menu',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_header_res_menu',
		array(
			'label' => __('Responsive Menu Icon Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_header_header',
			'settings' => 'cricket_league_pro_header_res_menu',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_res_open_menu_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'cricket_league_pro_res_open_menu_icon',
		array(
			'settings' => 'cricket_league_pro_res_open_menu_icon',
			'section' => 'cricket_league_pro_sec_header_section',
			'type' => 'icon',
			'label' => esc_html__('Choose  Icon', 'cricket-league-pro'),
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_res_open_menu_icon_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_res_open_menu_icon_color',
		array(
			'label' => __('Toggle Icon Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_sec_header_section',
			'settings' => 'cricket_league_pro_res_open_menu_icon_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_res_open_menu_icon_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_res_open_menu_icon_font_size',
	array(
		'label' => __('Toggle Icon Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_sec_header_section',
		'setting' => 'cricket_league_pro_res_open_menu_icon_font_size',
		'type' => 'number'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_header_close_iconcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_header_close_iconcolor',
		array(
			'label' => __('Close Icon Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_sec_header_section',
			'settings' => 'cricket_league_pro_header_close_iconcolor',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_header_close_icon_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_header_close_icon_font_size',
	array(
		'label' => __('Close Icon Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_sec_header_section',
		'setting' => 'cricket_league_pro_header_close_icon_font_size',
		'type' => 'number'
	)
);