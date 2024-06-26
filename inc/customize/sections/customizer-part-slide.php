<?php
$wp_customize->add_section(
	'home_automation_pro_slider_sec',
	array(
		'title' => __('Banner Section', 'cricket-league-pro'),
		'description' => __('Add Slider setting here.', 'cricket-league-pro'),
		'panel' => 'home_automation_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'home_automation_pro_slider_enabledisable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_enabledisable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'home_automation_pro_slider_enabledisable',
	array(
		'selector' => '#slider .container',
		'render_callback' => 'home_automation_pro_slider_sec',
	)
);
$wp_customize->add_setting(
	'home_automation_pro_slider_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_slider_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec',
			'settings' => 'home_automation_pro_slider_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'home_automation_pro_slider_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'home_automation_pro_slider_bgimage',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec',
			'settings' => 'home_automation_pro_slider_bgimage'
		)
	)
);

$wp_customize->add_setting(
	'home_automation_pro_slider_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'home_automation_pro_text_sanitization'
	)
);

$wp_customize->add_setting(
	'home_automation_pro_slider_image_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'home_automation_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'home_automation_pro_slider_image_settings',
		array(
			'label' => __('Banner Image Setting', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec'
		)
	)
);

$wp_customize->add_setting(
	'home_automation_pro_slider_player_img',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'home_automation_pro_slider_player_img',
		array(
			'label' => __('Player Image', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec',
			'settings' => 'home_automation_pro_slider_player_img'
		)
	)
);


$wp_customize->add_setting(
	'home_automation_pro_slider_banner_ball',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'home_automation_pro_slider_banner_ball',
		array(
			'label' => __('Ball Image', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec',
			'settings' => 'home_automation_pro_slider_banner_ball'
		)
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'home_automation_pro_slider_heading_settings',
		array(
			'label' => __('Heading Typoghraphy', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec'
		)
	)
);

$wp_customize->add_setting(
	'home_automation_pro_banner_tag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_banner_tag',
	array(
		'label' => __('Banner Tag', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_banner_tag',
		'type' => 'text'
	)
);




$wp_customize->add_setting(
	'home_automation_pro_banner_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_banner_tag_font_weight',
	array(
		'section' => 'home_automation_pro_slider_sec',
		'label' => __('Banner Tag Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_banner_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_banner_tag_font_family',
	array(
		'section' => 'home_automation_pro_slider_sec',
		'label' => __('Banner Tag Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_banner_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_banner_tag_font_size',
	array(
		'label' => __('Banner Tag Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_banner_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'home_automation_pro_banner_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_banner_tag_color',
		array(
			'label' => __('Banner Tag Color', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec',
			'settings' => 'home_automation_pro_banner_tag_color',
		)
	)
);


$wp_customize->add_setting(
	'home_automation_pro_slider_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_heading',
	array(
		'label' => __('Slider Heading', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_slider_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'home_automation_pro_slider_heading_color_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_heading_color_text',
	array(
		'label' => __('Colored Word Number', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_slider_heading_color_text',
		'type' => 'number'
	)
);


$wp_customize->add_setting(
	'home_automation_pro_slider_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_heading_font_weight',
	array(
		'section' => 'home_automation_pro_slider_sec',
		'label' => __('Banner Heading Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_slider_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_heading_font_family',
	array(
		'section' => 'home_automation_pro_slider_sec',
		'label' => __('Slider Heading Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_slider_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_heading_font_size',
	array(
		'label' => __('Slider Heading Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_slider_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'home_automation_pro_slider_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_slider_heading_color',
		array(
			'label' => __('Slider Heading Color', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec',
			'settings' => 'home_automation_pro_slider_heading_color',
		)
	)
);



$wp_customize->add_setting(
	'home_automation_pro_slider_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_text',
	array(
		'label' => __('Slider Text', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_slider_text',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'home_automation_pro_slider_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_text_font_weight',
	array(
		'section' => 'home_automation_pro_slider_sec',
		'label' => __('Slider Text Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_slider_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_text_font_family',
	array(
		'section' => 'home_automation_pro_slider_sec',
		'label' => __('Slider Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_slider_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_text_font_size',
	array(
		'label' => __('Slider Text Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_slider_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'home_automation_pro_slider_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_slider_text_color',
		array(
			'label' => __('Slider Text Color', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec',
			'settings' => 'home_automation_pro_slider_text_color',
		)
	)
);

// $wp_customize->add_setting(
// 	'home_automation_pro_slider_btntext',
// 	array(
// 		'default' => '',
// 		'sanitize_callback' => 'sanitize_text_field'
// 	)
// );
// $wp_customize->add_control(
// 	'home_automation_pro_slider_btntext',
// 	array(
// 		'label' => __('Button text', 'cricket-league-pro'),
// 		'section' => 'home_automation_pro_slider_sec',
// 		'setting' => 'home_automation_pro_slider_btntext',
// 		'type' => 'text'
// 	)
// );

$wp_customize->add_setting(
	'home_automation_pro_slider_btntext_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_btntext_font_weight',
	array(
		'section' => 'home_automation_pro_slider_sec',
		'label' => __('Banner Button Text Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_slider_btntext_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_btntext_font_family',
	array(
		'section' => 'home_automation_pro_slider_sec',
		'label' => __('slider Button Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_slider_btntext_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_slider_btntext_font_size',
	array(
		'label' => __('Banner Button Text Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_slider_btntext_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'home_automation_pro_slider_btntext_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_slider_btntext_color',
		array(
			'label' => __('Banner Button Text Color', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec',
			'settings' => 'home_automation_pro_slider_btntext_color',
		)
	)
);

$wp_customize->add_setting(
	'home_automation_pro_slider_btn_bgcolor_one',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_slider_btn_bgcolor_one',
		array(
			'label' => __('Button Backgroudn Color', 'cricket-league-pro'),
			'description' => __('', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec',
			'settings' => 'home_automation_pro_slider_btn_bgcolor_one',
		)
	)
);

$wp_customize->add_setting(
	'home_automation_pro_banner_button_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new home_automation_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'home_automation_pro_banner_button_icon',
		array(
			'settings' => 'home_automation_pro_banner_button_icon',
			'section' => 'home_automation_pro_slider_sec',
			'type' => 'icon',
			'label' => esc_html__('Banner Button Icon', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'home_automation_pro_cost_calcuator_shortcode',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_cost_calcuator_shortcode',
	array(
		'label' => __('Banner Play Button Text', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_cost_calcuator_shortcode',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'home_automation_pro_cost_calcuator_shortcode_link',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_cost_calcuator_shortcode_link',
	array(
		'label' => __('Banner Play Button Link', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_cost_calcuator_shortcode_link',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'home_automation_pro_playBtn_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_playBtn_text_font_weight',
	array(
		'section' => 'home_automation_pro_slider_sec',
		'label' => __('Banner Button Text Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_playBtn_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_playBtn_text_font_family',
	array(
		'section' => 'home_automation_pro_slider_sec',
		'label' => __('slider Button Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_playBtn_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_playBtn_text_font_size',
	array(
		'label' => __('Banner Button Text Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'home_automation_pro_slider_sec',
		'setting' => 'home_automation_pro_playBtn_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'home_automation_pro_playBtn_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_playBtn_text_color',
		array(
			'label' => __('Banner Button Text Color', 'cricket-league-pro'),
			'section' => 'home_automation_pro_slider_sec',
			'settings' => 'home_automation_pro_playBtn_text_color',
		)
	)
);

$wp_customize->add_setting(
	'home_automation_pro_banner_playbtn_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new home_automation_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'home_automation_pro_banner_playbtn_icon',
		array(
			'settings' => 'home_automation_pro_banner_playbtn_icon',
			'section' => 'home_automation_pro_slider_sec',
			'type' => 'icon',
			'label' => esc_html__('Banner Play Button', 'cricket-league-pro'),
		)
	)
);
