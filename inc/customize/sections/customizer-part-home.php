<?php


/*-----------------Latest Results Section------------------------*/


$wp_customize->add_section(
	'cricket_league_pro_lastest_match_sec',
	array(
		'title' => __('Latest Results', 'cricket-league-pro'),
		'description' => __('Add Service setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_services_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_services_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_lastest_match_sec',
	array(
		'selector' => 'section#banner-below .container',
		'render_callback' => 'cricket_league_pro_lastest_match_sec',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_services_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_our_services_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_our_services_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_services_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_our_services_bgimage'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_heading_settings',
		array(
			'label' => __('Play Button Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_latest_heading_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_heading_heading',
	array(
		'label' => __('Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_heading_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_heading_font_family',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_latest_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_latest_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_latest_see_all_btn_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_see_all_btn_settings',
		array(
			'label' => __('Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_latest_see_all_btn_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_see_all_btn_heading',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_see_all_btn_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_see_all_btn_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_see_all_btn_font_weight',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_see_all_btn_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_see_all_btn_font_family',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_see_all_btn_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_see_all_btn_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_see_all_btn_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_see_all_btn_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_latest_see_all_btn_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_latest_see_all_btn_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_leauge_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_match_leauge_settings',
		array(
			'label' => __('League Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_leauge_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_leauge_font_weight',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_leauge_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_leauge_font_family',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_leauge_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_leauge_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_match_leauge_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_match_leauge_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_latest_match_leauge_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_latest_match_leauge_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_latest_match_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_match_text_settings',
		array(
			'label' => __('Latest Results card Text Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_text_font_weight',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_text_font_family',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_match_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_match_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_latest_match_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_latest_match_text_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_latest_match_team_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_match_team_title_settings',
		array(
			'label' => __('Team Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_latest_match_team_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_team_title_font_weight',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_team_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_team_title_font_family',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_team_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_team_title_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_match_team_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_match_team_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_latest_match_team_title_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_latest_match_team_title_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_latest_match_score_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_match_score_settings',
		array(
			'label' => __('Score Text Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_latest_match_score_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_score_font_weight',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_score_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_score_font_family',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_match_score_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_match_score_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_match_score_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_match_score_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_latest_match_score_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_latest_match_score_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_matchcardBG_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_matchcardBG_settings',
		array(
			'label' => __('Card BG Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_matchcardBG_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_latest_matchcardBG_color',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_latest_matchcardBG_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_next_match_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_next_match_title_settings',
		array(
			'label' => __('Next Match Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_next_match_title_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_next_match_title_heading',
	array(
		'label' => __('Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_next_match_title_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_next_match_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_next_match_title_font_weight',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_next_match_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_next_match_title_font_family',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_next_match_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_next_match_title_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_next_match_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_next_match_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_next_match_title_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_next_match_title_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_timer_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_timer_text_settings',
		array(
			'label' => __('Timer Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_timer_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_timer_text_font_weight',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_timer_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_timer_text_font_family',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_timer_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_timer_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_timer_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_timer_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_timer_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_timer_text_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_next_match_id_latest',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_next_match_id_latest',
	array(
		'label' => __('Next Match ID', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_next_match_id_latest',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_latest_location_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_location_text_settings',
		array(
			'label' => __('Location Text Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_latest_location_text_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_location_text_heading',
	array(
		'label' => __('Location Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_location_text_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_location_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_location_text_font_weight',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_location_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_location_text_font_family',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_location_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_location_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_location_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_location_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_latest_location_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_latest_location_text_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_latest_locationbtn_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_locationbtn_text_settings',
		array(
			'label' => __('Button Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_latest_locationbtn_text_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_locationbtn_text_heading',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_locationbtn_text_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_locationbtn_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_locationbtn_text_font_weight',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_locationbtn_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_locationbtn_text_font_family',
	array(
		'section' => 'cricket_league_pro_lastest_match_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_locationbtn_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_locationbtn_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_lastest_match_sec',
		'setting' => 'cricket_league_pro_latest_locationbtn_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_locationbtn_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_latest_locationbtn_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_lastest_match_sec',
			'settings' => 'cricket_league_pro_latest_locationbtn_text_color',
		)
	)
);




/*-----------------------Latest Results Settings--------------------------*/



/*-------------------------------About Section----------------------------------------*/

$wp_customize->add_section(
	'cricket_league_pro_aboutUs_sec',
	array(
		'title' => __('About Section', 'cricket-league-pro'),
		'description' => __('Add About setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_about_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_about_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_about_bgcolor',
	array(
		'selector' => '#about-us .container',
		'render_callback' => 'twentyfifteen_customize_partial_cricket_league_pro_about_bgcolor',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_about_section_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_section_settings',
		array(
			'label' => __('About Section Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_about_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_about_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_about_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_about_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_about_bgimage',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_about_bgimage'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_about_bgimage_setting',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_about_bgimage_setting',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'choices' => array(
			'fixed' => __('Fixed', 'cricket-league-pro'),
			'scroll' => __('Scroll', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_headertag_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_headertag_text_settings',
		array(
			'label' => __('Heading Tag Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_headertag_text_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_headertag_text_heading',
	array(
		'label' => __('Heading Tag', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_aboutus_headertag_text_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_headertag_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_headertag_text_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_headertag_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_headertag_text_font_family',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_headertag_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_headertag_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_aboutus_headertag_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_headertag_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_headertag_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_headertag_text_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_heading_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_heading_text_settings',
		array(
			'label' => __('Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_heading_text_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_heading_text_heading',
	array(
		'label' => __('Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_aboutus_heading_text_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_heading_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_heading_text_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_heading_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_heading_text_font_family',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_heading_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_heading_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_aboutus_heading_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_heading_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_heading_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_heading_text_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_section_text_settings',
		array(
			'label' => __('SEction Text Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_text_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_section_text_heading',
	array(
		'label' => __('Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_aboutus_section_text_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_section_text_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_section_text_font_family',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_section_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_aboutus_section_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_section_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_section_text_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_button_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_button_settings',
		array(
			'label' => __('Button Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_button_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_button_heading',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_aboutus_button_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_button_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_button_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_button_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_button_font_family',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_button_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_button_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_aboutus_button_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_button_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_button_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_button_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_chairman_dp_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_chairman_dp_image',
		array(
			'label' => __('Chairman Image', 'vw-saas-services-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_chairman_dp_image'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_chariman_name_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_chariman_name_settings',
		array(
			'label' => __('Chairman Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_chariman_name_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_chariman_name_heading',
	array(
		'label' => __('Chairman Name', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_aboutus_chariman_name_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_chariman_name_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_chariman_name_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_chariman_name_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_chariman_name_font_family',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_chariman_name_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_chariman_name_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_aboutus_chariman_name_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_chariman_name_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_chariman_name_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_chariman_name_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_designation_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_designation_title_settings',
		array(
			'label' => __('Designation Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_designation_title_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_designation_title_heading',
	array(
		'label' => __('Designation Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_designation_title_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_designation_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_designation_title_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_designation_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_designation_title_font_family',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_designation_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_designation_title_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_designation_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_designation_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_designation_title_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_designation_title_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_years_experience_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_years_experience_settings',
		array(
			'label' => __('Years Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_years_experience',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_years_experience',
	array(
		'label' => __('Number of Years', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_years_experience',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_years_experience_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_years_experience_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_years_experience_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_years_experience_font_family',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_years_experience_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_years_experience_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_years_experience_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_years_experience_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_years_experience_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_years_experience_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_left_images_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_left_images_text_settings',
		array(
			'label' => __('Experience Text Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_experience_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_experience_text',
	array(
		'label' => __('Expertience Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_experience_text',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_experience_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_experience_text_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_experience_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_experience_text_font_family',
	array(
		'section' => 'cricket_league_pro_aboutUs_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_experience_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_experience_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutUs_sec',
		'setting' => 'cricket_league_pro_experience_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_experience_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_experience_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_experience_text_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_left_images_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_left_images_text_settings',
		array(
			'label' => __('Aboutus Left Images Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec'
		)
	)
); 

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_main_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_main_image',
		array(
			'label' => __('Middle Image', 'vw-saas-services-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_main_image'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_sec_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_sec_image',
		array(
			'label' => __('Second Image', 'vw-saas-services-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_sec_image'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_bat_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_bat_image',
		array(
			'label' => __('Bat Image', 'vw-saas-services-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_bat_image'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_ball_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_ball_image',
		array(
			'label' => __('Ball Image', 'vw-saas-services-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_ball_image'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_helmet',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_helmet',
		array(
			'label' => __('Helmet Image', 'vw-saas-services-pro'),
			'section' => 'cricket_league_pro_aboutUs_sec',
			'settings' => 'cricket_league_pro_aboutus_helmet'
		)
	)
);

// client slider 




$wp_customize->add_section(
	'cricket_league_pro_client_slider_sec',
	array(
		'title' => __('Client slider Section', 'vw-saas-services-pro'),
		'description' => __('Add client slider settings here.', 'vw-saas-services-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_client_slider_image_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_client_slider_image_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'vw-saas-services-pro'),
		'section' => 'cricket_league_pro_client_slider_sec',
		'choices' => array(
			'Enable' => __('Enable', 'vw-saas-services-pro'),
			'Disable' => __('Disable', 'vw-saas-services-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial('cricket_league_pro_our_client_slider_image_enable', array(
	'selector' => 'section#partnerSlider .container',
	'render_callback' => 'cricket_league_pro_pro_customize_partial_cricket_league_pro_our_client_slider_image_enable',
));
$wp_customize->add_setting(
	'cricket_league_pro_our_client_slider_image_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_our_client_slider_image_bgcolor',
		array(
			'label' => __('Background Color', 'vw-saas-services-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-saas-services-pro'),
			'section' => 'cricket_league_pro_client_slider_sec',
			'settings' => 'cricket_league_pro_our_client_slider_image_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_client_slider_image_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_our_client_slider_image_bgimage',
		array(
			'label' => __('Background image ', 'vw-saas-services-pro'),
			'section' => 'cricket_league_pro_client_slider_sec',
			'settings' => 'cricket_league_pro_our_client_slider_image_bgimage'
		)
	)
);




// $wp_customize->add_setting(
// 	'cricket_league_pro_our_client_slider_image_bgimage_setting',
// 	array(
// 		'default' => '',
// 		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
// 	)
// );
// $wp_customize->add_control(
// 	'cricket_league_pro_our_client_slider_image_bgimage_setting',
// 	array(
// 		'type' => 'radio',
// 		'label' => __('Choose image option', 'vw-saas-services-pro'),
// 		'section' => 'cricket_league_pro_client_slider_sec',
// 		'choices' => array(
// 			'fixed' => __('Fixed', 'vw-saas-services-pro'),
// 			'scroll' => __('Scroll', 'vw-saas-services-pro'),
// 		)
// 	)
// );

$wp_customize->add_setting(
	'cricket_league_pro_client_images_count',
	array(
		'default' => '6',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_client_images_count',
	array(
		'label' => __('Partner Logos', 'vw-saas-services-pro'),
		'description' => __('Enter Number Of Partner Images You Wish To Upload', 'vw-saas-services-pro'),
		'section' => 'cricket_league_pro_client_slider_sec',
		'setting' => 'cricket_league_pro_client_images_count',
		'type' => 'number'
	)
);



// Define the number of image fields you want to create


$num_image_fields = get_theme_mod('cricket_league_pro_client_images_count'); // You can change this number as needed


for ($i = 1; $i <= $num_image_fields; $i++) {
	$setting_name = 'cricket_league_pro_client_slider_image_' . $i;

	// Add a setting for each image field
	$wp_customize->add_setting(
		$setting_name,
		array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	// Add a control for each image field
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			$setting_name,
			array(
				'label' => __('Partner Image ' . $i, 'vw-saas-services-pro'),
				'section' => 'cricket_league_pro_client_slider_sec',
				'settings' => $setting_name,
			)
		)
	);
}
// client slider end 

// tracking section 



$wp_customize->add_section(
	'cricket_league_pro_league_table_sec',
	array(
		'title' => __('League Table Section', 'cricket-league-pro'),
		'description' => __('Add league_table setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_league_table_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_table_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_league_table_bgcolor',
	array(
		'selector' => 'section#leagueTable .container',
		'render_callback' => 'twentyfifteen_customize_partial_cricket_league_pro_league_table_bgcolor',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_league_table_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_league_table_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec',
			'settings' => 'cricket_league_pro_league_table_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_league_table_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_league_table_bgimage',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec',
			'description' => __('Ideal image is 1920x520 px.', 'cricket-league-pro'),
			'settings' => 'cricket_league_pro_league_table_bgimage'
		)
	)
);

$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_league_table_section_heading_settings',
		array(
			'label' => __('Section Heading Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_league_table_section_headding',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_table_section_headding',
	array(
		'label' => __('Section Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_league_table_section_headding',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_left_images_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_left_images_text_settings',
		array(
			'label' => __('Leagur Table Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_league_table_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	' ',
	array(
		'label' => __('Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_league_table_heading',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_league_table_heading_right',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	' ',
	array(
		'label' => __('Upcoming Match Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_league_table_heading_right',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_league_table_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_table_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_league_table_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_table_heading_font_family',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_league_table_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_table_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_league_table_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_league_table_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_league_table_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec',
			'settings' => 'cricket_league_pro_league_table_heading_color',
		)
	)
);



// Steps to dilever 



$wp_customize->add_section(
	'cricket_league_pro_steps_sec',
	array(
		'title' => __('Steps Section', 'cricket-league-pro'),
		'description' => __('Add steps setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_steps_heading_tagline_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_steps_heading_tagline_settings',
		array(
			'label' => __('Steps to Dilever Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_steps_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_steps_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_steps_bgcolor',
	array(
		'selector' => '#steps-us .container',
		'render_callback' => 'twentyfifteen_customize_partial_cricket_league_pro_steps_bgcolor',
	)
);
// 	$wp_customize->selective_refresh->add_partial( 'cricket_league_pro_steps_enable', array(
// 		'selector' => '#steps-us .container',
// 		'render_callback' => 'cricket_league_pro_steps_sec',
// ));
$wp_customize->add_setting(
	'cricket_league_pro_steps_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_steps_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_steps_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_steps_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_steps_bgimage',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_steps_bgimage'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_steps_bgimage_setting',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_steps_bgimage_setting',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'choices' => array(
			'fixed' => __('Fixed', 'cricket-league-pro'),
			'scroll' => __('Scroll', 'cricket-league-pro'),
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_steps_heading_tagline_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_steps_heading_tagline_settings',
		array(
			'label' => __('Heading Tagline Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_steps_heading_tag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_steps_heading_tag',
	array(
		'label' => __('Section Heading Tagline', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_steps_heading_tag',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_steps_section_heading_tagline_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_steps_section_heading_tagline_font_weight',
	array(
		'section' => 'cricket_league_pro_steps_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_steps_section_heading_tagline_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_steps_section_heading_tagline_font_family',
	array(
		'section' => 'cricket_league_pro_steps_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_steps_section_heading_tagline_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_steps_section_heading_tagline_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_steps_section_heading_tagline_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_steps_section_heading_tagline_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_steps_section_heading_tagline_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_steps_section_heading_tagline_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_steps_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_steps_heading_settings',
		array(
			'label' => __('Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_steps_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_steps_heading',
	array(
		'label' => __('Section Heading ', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_steps_heading',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_steps_section_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_steps_section_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_steps_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_steps_section_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_steps_section_heading_font_family',
	array(
		'section' => 'cricket_league_pro_steps_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_steps_section_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_steps_section_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_steps_section_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_steps_section_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_steps_section_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_steps_section_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_steps_title',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_steps_title',
		array(
			'label' => __('Steps Input Fileds', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_step1_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_step1_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_step1_image',
		array(
			'label' => __('Step-1 Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_step1_image'
		)
	)
);

$wp_customize->add_control(
	'cricket_league_pro_step1_title',
	array(
		'label' => __('Step-1 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_step1_title',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_step1_desc',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step1_desc',
	array(
		'label' => __('Step-1 Desription', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_step1_desc',
		'type' => 'text'
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_step2_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_step2_image',
		array(
			'label' => __('Step-2 Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_step2_image'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_step2_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step2_title',
	array(
		'label' => __('Step-2 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_step2_title',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_step2_desc',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step2_desc',
	array(
		'label' => __('Step-2 Desription', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_step1_desc',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_step3_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_step3_image',
		array(
			'label' => __('Step-3 Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_step3_image'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_step3_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step3_title',
	array(
		'label' => __('Step-3 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_step3_title',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_step3_desc',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step3_desc',
	array(
		'label' => __('Step-3 Desription', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_step3_desc',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_step4_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_step4_image',
		array(
			'label' => __('Step-4 Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_step4_image'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_step4_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step4_title',
	array(
		'label' => __('Step-4 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_ste4_title',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_step4_desc',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step4_desc',
	array(
		'label' => __('Step-4  Desription', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_step4_desc',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_step_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_step_title_settings',
		array(
			'label' => __('Steps Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_step_title_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step_title_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_steps_sec',
		'label' => __('Title Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_step_title_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step_title_heading_font_family',
	array(
		'section' => 'cricket_league_pro_steps_sec',
		'label' => __('Title Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_step_title_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step_title_heading_font_size',
	array(
		'label' => __('Title Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_step_title_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_step_title_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_step_title_heading_color',
		array(
			'label' => __('Title Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_step_title_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_step_desc_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step_desc_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_steps_sec',
		'label' => __('Step Description Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_step_desc_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step_desc_heading_font_family',
	array(
		'section' => 'cricket_league_pro_steps_sec',
		'label' => __('Step Description Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_step_desc_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_step_desc_heading_font_size',
	array(
		'label' => __('Step Description Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_steps_sec',
		'setting' => 'cricket_league_pro_step_desc_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_step_desc_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_step_desc_heading_color',
		array(
			'label' => __('Step Description Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_step_desc_heading_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_steps_section_decoration',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_steps_section_decoration',
		array(
			'label' => __('Steps Decoration Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_steps_sec',
			'settings' => 'cricket_league_pro_steps_section_decoration'
		)
	)
);

// pricing section 

$wp_customize->add_section(
	'cricket_league_pro_pricing_sec',
	array(
		'title' => __('Pricing Section', 'cricket-league-pro'),
		'description' => __('Add pricing detials here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_enabledisable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_enabledisable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_degree_sec_bg_color',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_degree_sec_bg_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_degree_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_degree_settings',
		array(
			'label' => __('Heading & Content Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);


$wp_customize->add_section(
	'cricket_league_pro_pricing_sec',
	array(
		'title' => __('Pricing Section', 'cricket-league-pro'),
		'description' => __('Add pricing detials here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_enabledisable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_enabledisable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_bg_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_pricing_bg_color',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_bg_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_bg_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_pricing_bg_image',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_bg_image'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_bg_image_attachment',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_bg_image_attachment',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'choices' => array(
			'fixed' => __('Fixed', 'cricket-league-pro'),
			'scroll' => __('Scroll', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_degree_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_degree_settings',
		array(
			'label' => __('Heading & Content Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_pricing_heading_tag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_sub_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_pricing_heading_tag_settings',
		array(
			'label' => __('Section heading_tag Tag Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_heading_tag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_heading_tag',
	array(
		'label' => __('Section heading_tag Tag', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_heading_tag',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_heading_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_heading_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_heading_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_heading_tag_font_family',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_heading_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_heading_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_heading_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_heading_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_pricing_section_heading_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_section_heading_tag_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_heading',
	array(
		'label' => __('Section Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_heading',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_heading_font_family',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_pricing_section_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_section_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_paragraph_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_sub_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_pricing_section_paragraph_settings',
		array(
			'label' => __('Section Paragraph Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_paragraph',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_pricing_section_paragraph',
	array(
		'label' => __('Section Paragraph', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_paragraph',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_section_paragraph_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_section_paragraph_font_weight',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_section_paragraph_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_section_paragraph_font_family',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_section_paragraph_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_section_paragraph_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_section_paragraph_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_section_paragraph_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_pricing_section_section_paragraph_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_section_section_paragraph_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_points',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_pricing_section_points',
		array(
			'label' => __('Pricing Points', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_points_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'cricket_league_pro_pricing_section_points_icon',
		array(
			'settings' => 'cricket_league_pro_pricing_section_points_icon',
			'section' => 'cricket_league_pro_pricing_sec',
			'type' => 'icon',
			'label' => esc_html__('Choose Pricing Points Icon', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_points1',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_points1',
	array(
		'label' => __('Pricing point 1', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_points1',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_points2',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_points2',
	array(
		'label' => __('Pricing point 2', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_points2',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_package_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_package_settings',
		array(
			'label' => __('Package Card Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);





$wp_customize->add_setting(
	'cricket_league_pro_package_settings1',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_package_settings1',
		array(
			'label' => __('Package Card 1', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_pricing_pack_name1',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_pack_name1',
	array(
		'label' => __('Package Name', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_pack_name1',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_pack_price1',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_pack_price1',
	array(
		'label' => __('Package Price', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_pack_price1',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_pack_icon1',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_pricing_pack_icon1',
		array(
			'label' => __('Regular Pack Icon Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_pack_icon1'
		)
	)
);

// Regular package feature loop 

$wp_customize->add_setting(
	'cricket_league_pro_package_features1',
	array(
		'default' => '5',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cricket_league_pro_package_features1',
	array(
		'label' => __('Number of features to include', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'type' => 'number'
	)
);

$count = get_theme_mod('cricket_league_pro_package_features1');

for ($i = 1, $j = 1; $i <= $count; $i++, $j++) {
	$wp_customize->add_setting(
		'cricket_league_pro_feature' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'cricket_league_pro_feature' . $i,
		array(
			'label' => __('Feature ' . $i, 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'setting' => 'cricket_league_pro_feature' . $i,
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'cricket_league_pro_pricing_Feature1_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new cricket_league_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'cricket_league_pro_pricing_Feature1_' . $i,
			array(
				'settings' => 'cricket_league_pro_pricing_Feature1_' . $i,
				'section' => 'cricket_league_pro_pricing_sec',
				'type' => 'icon',
				'label' => esc_html__('Feature ' . $i . ' Icon', 'cricket-league-pro'),
			)
		)
	);

}

$wp_customize->add_setting(
	'cricket_league_pro_pricing_card_btn1_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_card_btn1_text',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_card_btn1_text',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_card_btn1_link',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_card_btn1_link',
	array(
		'label' => __('Button Link', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_card_btn1_link',
		'type' => 'text'
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_package_settings2',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_package_settings2',
		array(
			'label' => __('Package Card 2', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_pricing_pack_name2',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_pack_name2',
	array(
		'label' => __('Package Name', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_pack_name2',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_pack_price2',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_pack_price2',
	array(
		'label' => __('Package Price', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_pack_price2',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_pack_icon2',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_pricing_pack_icon2',
		array(
			'label' => __('Premium Pack Icon Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_pack_icon2'
		)
	)
);

// Premium package feature loop 

$wp_customize->add_setting(
	'cricket_league_pro_package_features2',
	array(
		'default' => '5',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cricket_league_pro_package_features2',
	array(
		'label' => __('Number of features to include', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'type' => 'number'
	)
);

$count2 = get_theme_mod('cricket_league_pro_package_features2');

for ($i = 1, $j = 1; $i <= $count2; $i++, $j++) {
	$wp_customize->add_setting(
		'cricket_league_pro_feature_premium' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'cricket_league_pro_feature_premium' . $i,
		array(
			'label' => __('Feature ' . $i, 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'setting' => 'cricket_league_pro_feature_premium' . $i,
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'cricket_league_pro_pricing_feature_icon' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new cricket_league_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'cricket_league_pro_pricing_feature_icon' . $i,
			array(
				'settings' => 'cricket_league_pro_pricing_feature_icon' . $i,
				'section' => 'cricket_league_pro_pricing_sec',
				'type' => 'icon',
				'label' => esc_html__('Feature ' . $i . ' Icon', 'cricket-league-pro'),
			)
		)
	);
}

$wp_customize->add_setting(
	'cricket_league_pro_pricing_card_btn2_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_card_btn2_text',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_card_btn2_text',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_card_btn2_link',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_card_btn2_link',
	array(
		'label' => __('Button Link', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_card_btn2_link',
		'type' => 'text'
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_pricing_card_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_sub_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_pricing_card_settings',
		array(
			'label' => __('Card Features Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_points_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_points_font_weight',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_points_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_points_font_family',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_points_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_points_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_points_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_points_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_pricing_section_points_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_section_points_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_pricing_card_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_sub_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_pricing_card_title_settings',
		array(
			'label' => __('Card Title Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);





$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_package_name_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_package_name_font_weight',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_package_name_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_package_name_font_family',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_package_name_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_package_name_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_package_name_font_size',
		'type' => 'number'
	)
);



$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_pricing_button_text_settings',
		array(
			'label' => __('Button Text Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_button_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_button_text_font_weight',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_button_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_button_text_font_family',
	array(
		'section' => 'cricket_league_pro_pricing_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_button_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_pricing_section_button_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_pricing_sec',
		'setting' => 'cricket_league_pro_pricing_section_button_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_button_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(

		$wp_customize,
		'cricket_league_pro_pricing_section_button_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_section_button_text_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_background_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_sub_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_pricing_background_settings',
		array(
			'label' => __('Pricing Card Background Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_pricing_pointtion_bgimage_regular',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_pricing_pointtion_bgimage_regular',
		array(
			'label' => __('Regular Pack BG Color', 'cricket-league-pro'),
			'description' => __('Add an image atleast 1920x768 px'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_pointtion_bgimage_regular',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_pointtion_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_pricing_pointtion_bgimage',
		array(
			'label' => __('Premium Pack BG Color', 'cricket-league-pro'),
			'description' => __('Add an image atleast 1920x768 px'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_pointtion_bgimage',
		)
	)
);





$wp_customize->add_setting(
	'cricket_league_pro_pricing_card_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_sub_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_pricing_card_text_settings',
		array(
			'label' => __('Card Text Color Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec'
		)
	)
);



$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_pricing_section_regular_package_name_color',
		array(
			'label' => __('Regular Pack Text Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_section_regular_package_name_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_pricing_button_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_sub_text_sanitization'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_package_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_pricing_section_package_text_color',
		array(
			'label' => __('Premium Pack Text Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_pricing_sec',
			'settings' => 'cricket_league_pro_pricing_section_package_text_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_pricing_section_regular_package_name_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
// pricing section ends 


// why Choose Us Section 

$wp_customize->add_section(
	'cricket_league_pro_whychooseus_sec',
	array(
		'title' => __('Why Choose Us Section', 'cricket-league-pro'),
		'description' => __('Add whychooseus detials here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_enabledisable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_whychooseus_enabledisable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_bg_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_whychooseus_bg_color',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec',
			'settings' => 'cricket_league_pro_whychooseus_bg_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_bg_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_whychooseus_bg_image',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec',
			'settings' => 'cricket_league_pro_whychooseus_bg_image'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_bg_image_attachment',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_whychooseus_bg_image_attachment',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'choices' => array(
			'fixed' => __('Fixed', 'cricket-league-pro'),
			'scroll' => __('Scroll', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_heading_tag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_whychooseus_heading_tag_settings',
		array(
			'label' => __('Why Choose Us Heading Tagline Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_about_whychooseus_heading_tag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_about_whychooseus_heading_tag',
	array(
		'label' => __('Heading Tagline', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_about_whychooseus_heading_tag',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_heading_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_whychooseus_heading_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_whychooseus_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_heading_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_whychooseus_heading_tag_font_family',
	array(
		'section' => 'cricket_league_pro_whychooseus_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_heading_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_whychooseus_heading_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_whychooseus_heading_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_heading_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_whychooseus_heading_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec',
			'settings' => 'cricket_league_pro_whychooseus_heading_tag_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_whychooseus_heading_settings',
		array(
			'label' => __('Why Choose Us Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_about_whychooseus_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_about_whychooseus_heading',
	array(
		'label' => __('Section Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_about_whychooseus_heading',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_whychooseus_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_whychooseus_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_whychooseus_heading_font_family',
	array(
		'section' => 'cricket_league_pro_whychooseus_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_whychooseus_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_whychooseus_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_whychooseus_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec',
			'settings' => 'cricket_league_pro_whychooseus_heading_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_whychooseus_main_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_whychooseus_main_image',
		array(
			'label' => __('Why Choose Us Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec',
			'settings' => 'cricket_league_pro_whychooseus_main_image'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_text_para_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_text_para_settings',
		array(
			'label' => __('Section Paragraph Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec'
		)
	)
);


$wp_customize->add_setting('cricket_league_pro_text_field1', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_text_field1', array(
	'label' => __('Paragraph Text', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_whychooseus_sec',
	'setting' => 'cricket_league_pro_text_field1',
	'type' => 'text'
)
);


$wp_customize->add_setting(
	'cricket_league_pro_text_field_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_text_field_settings',
		array(
			'label' => __('Section Paragraph Typography ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_text_field_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_text_field_font_weight',
	array(
		'section' => 'cricket_league_pro_whychooseus_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_text_field_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_text_field_font_family',
	array(
		'section' => 'cricket_league_pro_whychooseus_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_text_field_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_text_field_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_text_field_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_text_field_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_text_field_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec',
			'settings' => 'cricket_league_pro_text_field_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_text_counter_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_text_counter_settings',
		array(
			'label' => __('Counter Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec'
		)
	)
);



$wp_customize->add_setting('cricket_league_pro_counter1_title', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_counter1_title', array(
	'label' => __('Counter 1 Title', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_whychooseus_sec',
	'setting' => 'cricket_league_pro_counter1_title',
	'type' => 'text'
)
);

$wp_customize->add_setting('cricket_league_pro_counter1_count', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_counter1_count', array(
	'label' => __('Counter Number', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_whychooseus_sec',
	'setting' => 'cricket_league_pro_counter1_count',
	'type' => 'text'
)
);



$wp_customize->add_setting('cricket_league_pro_counter2_title', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_counter2_title', array(
	'label' => __('Counter 2 Title', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_whychooseus_sec',
	'setting' => 'cricket_league_pro_counter2_title',
	'type' => 'text'
)
);

$wp_customize->add_setting('cricket_league_pro_counter2_count', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_counter2_count', array(
	'label' => __('Counter Number', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_whychooseus_sec',
	'setting' => 'cricket_league_pro_counter2_count',
	'type' => 'text'
)
);


$wp_customize->add_setting('cricket_league_pro_counter3_title', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_counter3_title', array(
	'label' => __('Counter 3 Title', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_whychooseus_sec',
	'setting' => 'cricket_league_pro_counter3_title',
	'type' => 'text'
)
);

$wp_customize->add_setting('cricket_league_pro_counter3_count', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_counter3_count', array(
	'label' => __('Counter Number', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_whychooseus_sec',
	'setting' => 'cricket_league_pro_counter3_count',
	'type' => 'text'
)
);


$wp_customize->add_setting(
	'cricket_league_pro_text_counter_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_text_counter_text_settings',
		array(
			'label' => __('Counter Typography Settings ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_counter_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter_text_font_weight',
	array(
		'section' => 'cricket_league_pro_whychooseus_sec',
		'label' => __('Count Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_counter_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter_text_font_family',
	array(
		'section' => 'cricket_league_pro_whychooseus_sec',
		'label' => __('Count Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_counter_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter_text_font_size',
	array(
		'label' => __('Count Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_counter_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_counter_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_counter_text_color',
		array(
			'label' => __('Count Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec',
			'settings' => 'cricket_league_pro_counter_text_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_counter_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter_title_font_weight',
	array(
		'section' => 'cricket_league_pro_whychooseus_sec',
		'label' => __('Counter Title Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_counter_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter_title_font_family',
	array(
		'section' => 'cricket_league_pro_whychooseus_sec',
		'label' => __('Counter Title Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_counter_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter_title_font_size',
	array(
		'label' => __('Counter Title Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_counter_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_counter_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_counter_title_color',
		array(
			'label' => __('Counter Title Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec',
			'settings' => 'cricket_league_pro_counter_title_color',
		)
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_text_left_images_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_text_left_images_settings',
		array(
			'label' => __('Left Image Grid Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_whychooseus_sec'
		)
	)
);
for ($i = 1; $i <= 4; $i++) {
	$wp_customize->add_setting(
		'cricket_league_pro_whychooseus_left_image_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'cricket_league_pro_whychooseus_left_image_' . $i,
			array(
				'label' => __('Grid Image ' . $i, 'cricket-league-pro'),
				'section' => 'cricket_league_pro_whychooseus_sec',
				'settings' => 'cricket_league_pro_whychooseus_left_image_' . $i,
			)
		)
	);
}






// why Choose Us Section end	


// Testimonial Section 


$wp_customize->add_section(
	'cricket_league_pro_testimonial_sec',
	array(
		'title' => __('Testimonial Section', 'cricket-league-pro'),
		'description' => __('Add testimonial section setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_testimonial_enable',
	array(
		'selector' => '#blog-news .container',
		'render_callback' => 'cricket_league_pro_testimonial_sec',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_testimonial_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec',
			'settings' => 'cricket_league_pro_testimonial_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_testimonial_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_bgimage',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec',
			'settings' => 'cricket_league_pro_testimonial_bgimage'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_bgimage_setting',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_bgimage_setting',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'choices' => array(
			'fixed' => __('Fixed', 'cricket-league-pro'),
			'scroll' => __('Scroll', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_tag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_heading_tag_settings',
		array(
			'label' => __('Testimonial Heading Tagline Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_tag_font_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_heading_tag_font_text',
	array(
		'label' => __('Heading Tagline', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'setting' => 'cricket_league_pro_testimonial_heading_tag_font_text',
		'type' => 'text'
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_heading_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_heading_tag_font_family',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_heading_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'setting' => 'cricket_league_pro_testimonial_heading_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_heading_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec',
			'settings' => 'cricket_league_pro_testimonial_heading_tag_color',
		)
	)
);





$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_heading_settings',
		array(
			'label' => __('Testimonial Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_font_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_heading_font_text',
	array(
		'label' => __(' Testimonial Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'setting' => 'cricket_league_pro_testimonial_heading_font_text',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_heading_font_family',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'setting' => 'cricket_league_pro_testimonial_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_testimonial_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec',
			'settings' => 'cricket_league_pro_testimonial_heading_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_testimonial_text_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_text_heading_settings',
		array(
			'label' => __('Testimonial Text Typography', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_testimonial_text_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_text_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_text_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_text_heading_font_family',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_text_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_text_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'setting' => 'cricket_league_pro_testimonial_text_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_testimonial_text_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_text_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec',
			'settings' => 'cricket_league_pro_testimonial_text_heading_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_client_name_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_client_name_heading_settings',
		array(
			'label' => __('Client Name Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_client_name_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_client_name_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_client_name_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_client_name_heading_font_family',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_client_name_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_client_name_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'setting' => 'cricket_league_pro_client_name_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_client_name_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_client_name_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec',
			'settings' => 'cricket_league_pro_client_name_heading_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_service_used_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_service_used_heading_settings',
		array(
			'label' => __('Service Used Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_service_used_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_service_used_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_service_used_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_service_used_heading_font_family',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_service_used_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_service_used_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'setting' => 'cricket_league_pro_service_used_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_service_used_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_service_used_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec',
			'settings' => 'cricket_league_pro_service_used_heading_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_testimonial_floating_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_floating_image',
		array(
			'label' => __('Decoration image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec',
			'settings' => 'cricket_league_pro_testimonial_floating_image'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_testimonial_floating_image2',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_floating_image2',
		array(
			'label' => __('Decoration image 2', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec',
			'settings' => 'cricket_league_pro_testimonial_floating_image2'
		)
	)
);


// Testimonial End 


// Our team 


$wp_customize->add_section(
	'cricket_league_pro_our_team_sec',
	array(
		'title' => __('Our Team Section', 'cricket-league-pro'),
		'description' => __('Add Get In Touch setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_our_team_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_our_team_enable',
	array(
		'selector' => '#blog-news .container',
		'render_callback' => 'cricket_league_pro_our_team_sec',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_team_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_our_team_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec',
			'settings' => 'cricket_league_pro_our_team_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_team_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_our_team_bgimage',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec',
			'settings' => 'cricket_league_pro_our_team_bgimage'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_tagline_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_our_team_heading_tagline_settings',
		array(
			'label' => __('Our Team Heading Tagline Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_team_bgimage_setting',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_bgimage_setting',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_our_team_sec',
		'choices' => array(
			'fixed' => __('Fixed', 'cricket-league-pro'),
			'scroll' => __('Scroll', 'cricket-league-pro'),
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_tag_font_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_heading_tag_font_text',
	array(
		'label' => __('Heading Tagline ', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_our_team_sec',
		'setting' => 'cricket_league_pro_our_team_heading_tag_font_text',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_heading_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_our_team_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_heading_tag_font_family',
	array(
		'section' => 'cricket_league_pro_our_team_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_heading_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_our_team_sec',
		'setting' => 'cricket_league_pro_our_team_heading_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_our_team_heading_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec',
			'settings' => 'cricket_league_pro_our_team_heading_tag_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_our_team_heading_settings',
		array(
			'label' => __('Our Team Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_font_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_heading_font_text',
	array(
		'label' => __('Section Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_our_team_sec',
		'setting' => 'cricket_league_pro_our_team_heading_font_text',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_our_team_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_heading_font_family',
	array(
		'section' => 'cricket_league_pro_our_team_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_our_team_sec',
		'setting' => 'cricket_league_pro_our_team_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_team_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_our_team_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec',
			'settings' => 'cricket_league_pro_our_team_heading_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_card_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_our_team_card_settings',
		array(
			'label' => __('Team card Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_card_bg_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_our_team_card_bg_color',
		array(
			'label' => __('Card Bg Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec',
			'settings' => 'cricket_league_pro_our_team_card_bg_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_member_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_our_team_member_settings',
		array(
			'label' => __('Member Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_our_team_team_member_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_team_member_font_weight',
	array(
		'section' => 'cricket_league_pro_our_team_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_team_member_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_team_member_font_family',
	array(
		'section' => 'cricket_league_pro_our_team_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_team_member_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_team_member_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_our_team_sec',
		'setting' => 'cricket_league_pro_our_team_team_member_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_team_team_member_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_our_team_team_member_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec',
			'settings' => 'cricket_league_pro_our_team_team_member_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_our_team_designation_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_our_team_designation_settings',
		array(
			'label' => __('Member Designation Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_our_team_designation_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_designation_font_weight',
	array(
		'section' => 'cricket_league_pro_our_team_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_designation_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_designation_font_family',
	array(
		'section' => 'cricket_league_pro_our_team_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_our_team_designation_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_our_team_designation_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_our_team_sec',
		'setting' => 'cricket_league_pro_our_team_designation_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_our_team_designation_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_our_team_designation_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec',
			'settings' => 'cricket_league_pro_our_team_designation_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_our_team_team_social_icon_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_our_team_team_social_icon_settings',
		array(
			'label' => __('Social Icons Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec'
		)
	)
);

for ($i = 1; $i <= 4; $i++) {
	$wp_customize->add_setting(
		'cricket_league_pro_social_icon' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		new cricket_league_pro_Fontawesome_Icon_Chooser(
			$wp_customize,
			'cricket_league_pro_social_icon' . $i,
			array(
				'settings' => 'cricket_league_pro_social_icon' . $i,
				'section' => 'cricket_league_pro_our_team_sec',
				'type' => 'icon',
				'label' => esc_html__('Team Social Icon ' . $i, 'cricket-league-pro'),
			)
		)
	);
}

$wp_customize->add_setting(
	'cricket_league_pro_our_team_team_social_icon_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_our_team_team_social_icon_color',
		array(
			'label' => __('Icon Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec',
			'settings' => 'cricket_league_pro_our_team_team_social_icon_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_our_team_team_social_icon_hover_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_our_team_team_social_icon_hover_color',
		array(
			'label' => __('Icon Hover Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_our_team_sec',
			'settings' => 'cricket_league_pro_our_team_team_social_icon_hover_color',
		)
	)
);

// our team end 


// section GetInTouch 


$wp_customize->add_section(
	'cricket_league_pro_GetInTouch_sec',
	array(
		'title' => __('Get In Touch', 'cricket-league-pro'),
		'description' => __('Add Get In Touch setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_GetInTouch_enable',
	array(
		'selector' => '#blog-news .container',
		'render_callback' => 'cricket_league_pro_GetInTouch_sec',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_bgimage',
		array(
			'label' => __('Background image', 'cricket-league-pro'),
			'description' => __('Ideal image is 1920x529 px.', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_bgimage'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_bg_image_attachment',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_bg_image_attachment',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'choices' => array(
			'fixed' => __('Fixed', 'cricket-league-pro'),
			'scroll' => __('Scroll', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_settings',
		array(
			'label' => __('Get In Touch Content Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_column_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_column_bgcolor',
		array(
			'label' => __('Get in touch Column BG', 'cricket-league-pro'),
			'description' => __('Section column background color.', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_column_bgcolor',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_tagline_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_heading_tagline_settings',
		array(
			'label' => __('Get In Touch Tagline Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec'
		)
	)
);

$wp_customize->add_setting('cricket_league_pro_GetInTouch_heading_tagline', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_GetInTouch_heading_tagline', array(
	'label' => __('Heading Tagline', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_GetInTouch_sec',
	'setting' => 'cricket_league_pro_GetInTouch_heading_tagline',
	'type' => 'text'
)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_tagline_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_heading_tagline_font_weight',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_tagline_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_heading_tagline_font_family',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_tagline_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_heading_tagline_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'setting' => 'cricket_league_pro_GetInTouch_heading_tagline_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_tagline_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_heading_tagline_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_heading_tagline_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_heading_settings',
		array(
			'label' => __('Get In Touch Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_font_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_heading_font_text',
	array(
		'label' => __(' Section Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'setting' => 'cricket_league_pro_GetInTouch_heading_font_text',
		'type' => 'text'
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_heading_font_family',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'setting' => 'cricket_league_pro_GetInTouch_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_section_desc_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_section_desc_settings',
		array(
			'label' => __('Get In Touch Section Description', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec'
		)
	)
);






$wp_customize->add_setting('cricket_league_pro_GetInTouch_section_desc', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_GetInTouch_section_desc', array(
	'label' => __('Section description', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_GetInTouch_sec',
	'setting' => 'cricket_league_pro_GetInTouch_section_desc',
	'type' => 'text'
)
);



$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_section_desc_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_section_desc_font_weight',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_section_desc_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_section_desc_font_family',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_section_desc_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_section_desc_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'setting' => 'cricket_league_pro_GetInTouch_section_desc_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_section_desc_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_section_desc_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_section_desc_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_support_text_settings',
		array(
			'label' => __('Support Text Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec'
		)
	)
);



$wp_customize->add_setting('cricket_league_pro_GetInTouch_support_text', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_GetInTouch_support_text', array(
	'label' => __('Support text', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_GetInTouch_sec',
	'setting' => 'cricket_league_pro_GetInTouch_support_text',
	'type' => 'text'
)
);



$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_support_text_font_weight',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_support_text_font_family',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_support_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'setting' => 'cricket_league_pro_GetInTouch_support_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_support_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_support_text_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_contact_number_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_support_contact_number_settings',
		array(
			'label' => __('Phone Number Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec'
		)
	)
);



$wp_customize->add_setting('cricket_league_pro_GetInTouch_support_contact_number', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_GetInTouch_support_contact_number', array(
	'label' => __('Support contact number', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_GetInTouch_sec',
	'setting' => 'cricket_league_pro_GetInTouch_support_contact_number',
	'type' => 'text'
)
);




$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_contact_number_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_support_contact_number_font_weight',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_contact_number_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_support_contact_number_font_family',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_contact_number_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_support_contact_number_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'setting' => 'cricket_league_pro_GetInTouch_support_contact_number_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_contact_number_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_support_contact_number_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_support_contact_number_color',
		)
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_support_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_support_icon',
		array(
			'label' => __('Support Icon', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_support_icon'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_latest_GetInTouch_settings_heading',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_GetInTouch_settings_heading',
		array(
			'label' => __('Get In Touch Features', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_feature1_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_feature1_icon',
		array(
			'label' => __('Support Icon', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_feature1_icon'
		)
	)
);


$wp_customize->add_setting('cricket_league_pro_GetInTouch_feature1_title', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_GetInTouch_feature1_title', array(
	'label' => __('Feature 1 Title', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_GetInTouch_sec',
	'setting' => 'cricket_league_pro_GetInTouch_feature1_title',
	'type' => 'text'
)
);

$wp_customize->add_setting('cricket_league_pro_GetInTouch_feature1_desc', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_GetInTouch_feature1_desc', array(
	'label' => __('Feature 1 Description', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_GetInTouch_sec',
	'setting' => 'cricket_league_pro_GetInTouch_feature1_desc',
	'type' => 'text'
)
);


$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_feature2_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_feature2_icon',
		array(
			'label' => __('Support Icon', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_feature2_icon'
		)
	)
);


$wp_customize->add_setting('cricket_league_pro_GetInTouch_feature2_title', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_GetInTouch_feature2_title', array(
	'label' => __('Feature 2 Title', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_GetInTouch_sec',
	'setting' => 'cricket_league_pro_GetInTouch_feature2_title',
	'type' => 'text'
)
);

$wp_customize->add_setting('cricket_league_pro_GetInTouch_feature2_desc', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_GetInTouch_feature2_desc', array(
	'label' => __('Feature 2 Description', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_GetInTouch_sec',
	'setting' => 'cricket_league_pro_GetInTouch_feature2_desc',
	'type' => 'text'
)
);



$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_GetInTouch_feature_settings',
		array(
			'label' => __('Features Typography', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_title_font_weight',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Title Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_title_font_family',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Title Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_title_font_size',
	array(
		'label' => __('Title Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'setting' => 'cricket_league_pro_GetInTouch_GetInTouch_feature_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_GetInTouch_feature_title_color',
		array(
			'label' => __('Title Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_GetInTouch_feature_title_color',
		)
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_description_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_description_font_weight',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Description Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_description_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_description_font_family',
	array(
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'label' => __('Description Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_description_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_description_font_size',
	array(
		'label' => __('Description Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_GetInTouch_sec',
		'setting' => 'cricket_league_pro_GetInTouch_GetInTouch_feature_description_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_GetInTouch_GetInTouch_feature_description_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_GetInTouch_GetInTouch_feature_description_color',
		array(
			'label' => __('Description Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_GetInTouch_sec',
			'settings' => 'cricket_league_pro_GetInTouch_GetInTouch_feature_description_color',
		)
	)
);
// get in touch end 


// FAQ section 




$wp_customize->add_section(
	'cricket_league_pro_faq_sec',
	array(
		'title' => __('FAQ Section', 'cricket-league-pro'),
		'description' => __('Add faq setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_faq_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_faq_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_faq_bgcolor',
	array(
		'selector' => '#faq-us .container',
		'render_callback' => 'twentyfifteen_customize_partial_cricket_league_pro_faq_bgcolor',
	)
);
$wp_customize->selective_refresh->add_partial('cricket_league_pro_faq_enable', array(
	'selector' => 'section#faq',
	'render_callback' => 'cricket_league_pro_faq_sec',
)
);
$wp_customize->add_setting(
	'cricket_league_pro_faq_bgcolor',
	array(
		'default' => '#fff',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_faq_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_faq_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_faq_bgimage',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_bgimage'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_faq_bgimage_setting',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_bgimage_setting',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_faq_sec',
		'choices' => array(
			'fixed' => __('Fixed', 'cricket-league-pro'),
			'scroll' => __('Scroll', 'cricket-league-pro'),
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_faq_heading_tagline_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_faq_heading_tagline_settings',
		array(
			'label' => __('FAQ Heading Tagline Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec'
		)
	)
);
$wp_customize->add_setting('cricket_league_pro_faq_heading_tagline', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_faq_heading_tagline', array(
	'label' => __('Heading Tag', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_faq_sec',
	'setting' => 'cricket_league_pro_faq_heading_tagline',
	'type' => 'text'
)
);





$wp_customize->add_setting(
	'cricket_league_pro_faq_faq_feature_heading_tagline_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_faq_feature_heading_tagline_font_weight',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_faq_feature_heading_tagline_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_faq_feature_heading_tagline_font_family',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_faq_feature_heading_tagline_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_faq_feature_heading_tagline_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'heading_tagline' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_faq_sec',
		'setting' => 'cricket_league_pro_faq_faq_feature_heading_tagline_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_faq_faq_feature_heading_tagline_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_faq_faq_feature_heading_tagline_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_faq_feature_heading_tagline_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_faq_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_faq_heading_settings',
		array(
			'label' => __('FAQ Heading Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec'
		)
	)
);


$wp_customize->add_setting('cricket_league_pro_faq_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_faq_heading', array(
	'label' => __('Section Heading', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_faq_sec',
	'setting' => 'cricket_league_pro_faq_heading',
	'type' => 'text'
)
);



$wp_customize->add_setting(
	'cricket_league_pro_faq_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_heading_font_family',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_faq_sec',
		'setting' => 'cricket_league_pro_faq_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_faq_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_faq_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_heading_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_faq_image',
		array(
			'label' => __('FAQ Section Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_image'
		)
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_faq_attriute_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_faq_attriute_settings',
		array(
			'label' => __('Service Attributes', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec'
		)
	)
);


$wp_customize->add_setting('cricket_league_pro_faq_service_attribute1_title', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_faq_service_attribute1_title', array(
	'label' => __('Service Attribute 1', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_faq_sec',
	'setting' => 'cricket_league_pro_faq_service_attribute1_title',
	'type' => 'text'
)
);
$wp_customize->add_setting('cricket_league_pro_faq_service_attribute1_desc', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_faq_service_attribute1_desc', array(
	'label' => __('Service Attribute 1 Description', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_faq_sec',
	'setting' => 'cricket_league_pro_faq_service_attribute1_desc',
	'type' => 'text'
)
);


$wp_customize->add_setting(
	'cricket_league_pro_faq_service_attribute1_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_faq_service_attribute1_icon',
		array(
			'label' => __('Service Attribute 1 image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_service_attribute1_icon'
		)
	)
);



$wp_customize->add_setting('cricket_league_pro_faq_service_attribute2_title', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_faq_service_attribute2_title', array(
	'label' => __('Service Attribute 2', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_faq_sec',
	'setting' => 'cricket_league_pro_faq_service_attribute2_title',
	'type' => 'text'
)
);
$wp_customize->add_setting('cricket_league_pro_faq_service_attribute2_desc', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_faq_service_attribute2_desc', array(
	'label' => __('Service Attribute 2 Description', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_faq_sec',
	'setting' => 'cricket_league_pro_faq_service_attribute2_desc',
	'type' => 'text'
)
);


$wp_customize->add_setting(
	'cricket_league_pro_faq_service_attribute2_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_faq_service_attribute2_icon',
		array(
			'label' => __('Service Attribute 2 image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_service_attribute2_icon'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_faq_attriute_typography_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_faq_attriute_typography_settings',
		array(
			'label' => __('Service Attributes Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_service_attribute_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_service_attribute_title_font_weight',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Service Attribute Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_service_attribute_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_service_attribute_title_font_family',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Service Attribute Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_service_attribute_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_service_attribute_title_font_size',
	array(
		'label' => __('Service Attribute Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_faq_sec',
		'setting' => 'cricket_league_pro_faq_service_attribute_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_faq_service_attribute_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_faq_service_attribute_title_color',
		array(
			'label' => __('Service Attribute Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_service_attribute_title_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_service_attribute_description_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_service_attribute_description_font_weight',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Attribute Description Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_service_attribute_description_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_service_attribute_description_font_family',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Attribute Description Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_service_attribute_description_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_service_attribute_description_font_size',
	array(
		'label' => __('Attribute Description Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_faq_sec',
		'setting' => 'cricket_league_pro_faq_service_attribute_description_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_faq_service_attribute_description_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_faq_service_attribute_description_color',
		array(
			'label' => __('Attribute Description Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_service_attribute_description_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_faq_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_faq_settings',
		array(
			'label' => __('Questions And Answers Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_faq_count',
	array(
		'default' => '5',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cricket_league_pro_faq_count',
	array(
		'label' => __('Number Of Questions To Add', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_faq_sec',
		'type' => 'number'
	)
);



$count = get_theme_mod('cricket_league_pro_faq_count');

for ($i = 1, $j = 1; $i <= $count; $i++, $j++) {
	$wp_customize->add_setting(
		'cricket_league_pro_faq' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'cricket_league_pro_faq' . $i,
		array(
			'label' => __('Enter Question ' . $i, 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'setting' => 'cricket_league_pro_faq' . $i,
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'cricket_league_pro_faq_answer' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'cricket_league_pro_faq_answer' . $i,
		array(
			'label' => __('Enter Answer ' . $i, 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'setting' => 'cricket_league_pro_faq_answer' . $i,
			'type' => 'text'
		)
	);
}

$wp_customize->add_setting(
	'cricket_league_pro_faq_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_faq_settings',
		array(
			'label' => __('Questions And Answers Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec'
		)
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_faq_question_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_question_font_weight',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Question Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_question_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_question_font_family',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Question Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_question_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_question_font_size',
	array(
		'label' => __('Question Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_faq_sec',
		'setting' => 'cricket_league_pro_faq_question_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_faq_question_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_faq_question_color',
		array(
			'label' => __('Question Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_question_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_answer_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_answer_font_weight',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Answer Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_answer_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_answer_font_family',
	array(
		'section' => 'cricket_league_pro_faq_sec',
		'label' => __('Answer Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_answer_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_faq_answer_font_size',
	array(
		'label' => __('Answer Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_faq_sec',
		'setting' => 'cricket_league_pro_faq_answer_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_faq_answer_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_faq_answer_color',
		array(
			'label' => __('Answer Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_answer_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_dropdown_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_faq_dropdown_settings',
		array(
			'label' => __('Accordion Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_dropdown_icon_setting',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	new cricket_league_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'cricket_league_pro_dropdown_icon_setting',
		array(
			'settings' => 'cricket_league_pro_dropdown_icon_setting',
			'section' => 'cricket_league_pro_faq_sec',
			'type' => 'icon',
			'label' => esc_html__('Accordion Icon', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_faq_accordion_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_faq_accordion_bgcolor',
		array(
			'label' => __('Accordion Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_accordion_bgcolor',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_faq_accordion_ans_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_faq_accordion_ans_bgcolor',
		array(
			'label' => __('Accordion Answer Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_faq_sec',
			'settings' => 'cricket_league_pro_faq_accordion_ans_bgcolor',
		)
	)
);



// FAQ Section end


$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_bg_color',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec',
			'settings' => 'cricket_league_pro_video_sec_bg_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_bg_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_bg_image',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec',
			'settings' => 'cricket_league_pro_video_sec_bg_image'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_video_sec_bg_image_attachment',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_sec_bg_image_attachment',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_video_sec',
		'choices' => array(
			'fixed' => __('Fixed', 'cricket-league-pro'),
			'scroll' => __('Scroll', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_video_sec_content_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_content_settings',
		array(
			'label' => __('Video Content Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_sub_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_sec_sub_heading',
	array(
		'label' => __('Sub Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_video_sec',
		'setting' => 'cricket_league_pro_video_sec_sub_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_sec_heading',
	array(
		'label' => __('Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_video_sec',
		'setting' => 'cricket_league_pro_video_sec_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_paragraph',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_sec_paragraph',
	array(
		'label' => __('Paragraph', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_video_sec',
		'setting' => 'cricket_league_pro_video_sec_paragraph',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_play_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_play_text',
	array(
		'label' => __('Video', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_video_sec',
		'setting' => 'cricket_league_pro_video_play_text',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_video_url',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_video_url',
	array(
		'label' => __('Video Url', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_video_sec',
		'setting' => 'cricket_league_pro_video_video_url',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_content_typography_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_content_typography_settings',
		array(
			'label' => __('Heading & Paragraph Typoghraphy', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_video_sec_sub_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_sub_heading_color',
		array(
			'label' => __('Heading Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec',
			'settings' => 'cricket_league_pro_video_sec_sub_heading_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_sub_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_sec_sub_heading_font_family',
	array(
		'section' => 'cricket_league_pro_video_sec',
		'label' => __('Heading Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_sub_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_sec_sub_heading_font_size',
	array(
		'label' => __('Heading Font Size', 'cricket-league-pro'),
		'description' => __('Sub Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_video_sec',
		'setting' => 'cricket_league_pro_video_sec_sub_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_sub_heading_border_bottom_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_sub_heading_border_bottom_color',
		array(
			'label' => __('Heading Border Bottom Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec',
			'settings' => 'cricket_league_pro_video_sec_sub_heading_border_bottom_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_video_sec_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_heading_color',
		array(
			'label' => __('Heading Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec',
			'settings' => 'cricket_league_pro_video_sec_heading_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_sec_heading_font_family',
	array(
		'section' => 'cricket_league_pro_video_sec',
		'label' => __('Heading Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_sec_heading_font_size',
	array(
		'label' => __('Heading Font Size', 'cricket-league-pro'),
		'description' => __('Sub Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_video_sec',
		'setting' => 'cricket_league_pro_video_sec_heading_font_size',
		'type' => 'number'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_video_sec_paragraph_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_paragraph_color',
		array(
			'label' => __('Paragraph Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec',
			'settings' => 'cricket_league_pro_video_sec_paragraph_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_paragraph_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_sec_paragraph_font_family',
	array(
		'section' => 'cricket_league_pro_video_sec',
		'label' => __('Paragraph Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_paragraph_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_video_sec_paragraph_font_size',
	array(
		'label' => __('Paragraph Font Size', 'cricket-league-pro'),
		'description' => __('Sub Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_video_sec',
		'setting' => 'cricket_league_pro_video_sec_paragraph_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_play_btn_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_play_btn_text_color',
		array(
			'label' => __('Play Text Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec',
			'settings' => 'cricket_league_pro_video_sec_play_btn_text_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_play_btn_bg_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_play_btn_bg_color',
		array(
			'label' => __('Play Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec',
			'settings' => 'cricket_league_pro_video_sec_play_btn_bg_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_video_sec_play_btn_border_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_video_sec_play_btn_border_color',
		array(
			'label' => __('Play Border Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_video_sec',
			'settings' => 'cricket_league_pro_video_sec_play_btn_border_color',
		)
	)
);



/*-----------------------Blog Section Settings--------------------------*/
$wp_customize->add_section(
	'cricket_league_pro_blog_and_news_sec',
	array(
		'title' => __('Blog Section', 'cricket-league-pro'),
		'description' => __('Add Blog & News setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_blog_and_news_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_blog_and_news_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_latest_blog_and_news_enable',
	array(
		'selector' => '#blog-news .container',
		'render_callback' => 'cricket_league_pro_blog_and_news_sec',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_blog_and_news_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_latest_blog_and_news_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'settings' => 'cricket_league_pro_latest_blog_and_news_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_latest_blog_and_news_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_latest_blog_and_news_bgimage',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'settings' => 'cricket_league_pro_latest_blog_and_news_bgimage'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_blog_and_news_bg_image_attachment',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_latest_blog_and_news_bg_image_attachment',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'choices' => array(
			'fixed' => __('Fixed', 'cricket-league-pro'),
			'scroll' => __('Scroll', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_latest_blog_and_news_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_latest_blog_and_news_settings',
		array(
			'label' => __('Blog Content Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_blog_blog_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_blog_blog_settings',
		array(
			'label' => __('Blog Heading Tagline Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec'
		)
	)
);

$wp_customize->add_setting('cricket_league_pro_blog_heading_tagline', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_blog_heading_tagline', array(
	'label' => __('Heading Tagline', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_blog_and_news_sec',
	'setting' => 'cricket_league_pro_blog_heading_tagline',
	'type' => 'text'
)
);


$wp_customize->add_setting(
	'cricket_league_pro_blog_heading_tagline_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_heading_tagline_font_weight',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_heading_tagline_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_heading_tagline_font_family',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_heading_tagline_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_heading_tagline_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'setting' => 'cricket_league_pro_blog_heading_tagline_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_blog_heading_tagline_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_blog_heading_tagline_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'settings' => 'cricket_league_pro_blog_heading_tagline_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_blog_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_blog_heading_settings',
		array(
			'label' => __('Blog Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec'
		)
	)
);



$wp_customize->add_setting('cricket_league_pro_blog_heading', array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control('cricket_league_pro_blog_heading', array(
	'label' => __('Heading Tagline', 'cricket-league-pro'),
	'section' => 'cricket_league_pro_blog_and_news_sec',
	'setting' => 'cricket_league_pro_blog_heading',
	'type' => 'text'
)
);


$wp_customize->add_setting(
	'cricket_league_pro_blog_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_heading_font_family',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'setting' => 'cricket_league_pro_blog_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_blog_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_blog_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'settings' => 'cricket_league_pro_blog_heading_color',
		)
	)
);





$wp_customize->add_setting(
	'cricket_league_pro_blog_card_icons_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_blog_card_icons_settings',
		array(
			'label' => __('Blog Card Icons Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_author',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'cricket_league_pro_blog_author',
		array(
			'settings' => 'cricket_league_pro_blog_author',
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'type' => 'icon',
			'label' => esc_html__('Author Icon', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_comment_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'cricket_league_pro_blog_comment_icon',
		array(
			'settings' => 'cricket_league_pro_blog_comment_icon',
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'type' => 'icon',
			'label' => esc_html__('Comment Icon', 'cricket-league-pro'),
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_blog_fright_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'cricket_league_pro_blog_fright_icon',
		array(
			'settings' => 'cricket_league_pro_blog_fright_icon',
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'type' => 'icon',
			'label' => esc_html__('Fright Icon', 'cricket-league-pro'),
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_blog_blog_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_blog_blog_title_settings',
		array(
			'label' => __('Blog Title Typography', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_blog_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_blog_title_font_weight',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_blog_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_blog_title_font_family',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_blog_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_blog_title_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'setting' => 'cricket_league_pro_blog_blog_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_blog_blog_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_blog_blog_title_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'settings' => 'cricket_league_pro_blog_blog_title_color',
		)
	)
);







$wp_customize->add_section(
	'cricket_league_pro_post_product_general_settings',
	array(
		'title' => __('General Settings', 'cricket-league-pro'),
		'description' => __('See section settings below and do check documentation too.', 'cricket-league-pro'),
		'priority' => null,
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_products_spinner_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_products_spinner_settings',
		array(
			'label' => __('Spinner Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_product_general_settings'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_products_spinner_enable',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_pro_switch_sanitization'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Toggle_Switch_Custom_control(
		$wp_customize,
		'cricket_league_pro_products_spinner_enable',
		array(
			'label' => esc_html__('Spinner Enable/Disable', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_product_general_settings'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_products_spinner_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_products_spinner_bgcolor',
		array(
			'label' => __('Spinner Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_product_general_settings',
			'settings' => 'cricket_league_pro_products_spinner_bgcolor',
		)
	)
);




/* --------- Spinner Opacity  ----------- */

$wp_customize->add_setting(
	'cricket_league_pro_spinner_opacity_color',
	array(
		'default' => '1',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_spinner_opacity_color',
	array(
		'label' => esc_html__('Spinner Loader Opacity', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_post_product_general_settings',
		'type' => 'select',
		'settings' => 'cricket_league_pro_spinner_opacity_color',
		'choices' => array(
			'0' => esc_attr('0', 'cricket-league-pro'),
			'0.1' => esc_attr('0.1', 'cricket-league-pro'),
			'0.2' => esc_attr('0.2', 'cricket-league-pro'),
			'0.3' => esc_attr('0.3', 'cricket-league-pro'),
			'0.4' => esc_attr('0.4', 'cricket-league-pro'),
			'0.5' => esc_attr('0.5', 'cricket-league-pro'),
			'0.6' => esc_attr('0.6', 'cricket-league-pro'),
			'0.7' => esc_attr('0.7', 'cricket-league-pro'),
			'0.8' => esc_attr('0.8', 'cricket-league-pro'),
			'0.9' => esc_attr('0.9', 'cricket-league-pro'),
			'1' => esc_attr('1', 'cricket-league-pro')
		),
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_general_settings_scroll_top',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_general_settings_scroll_top',
		array(
			'label' => __('Scroll Top Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_product_general_settings'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_genral_section_show_scroll_top',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_pro_switch_sanitization'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Toggle_Switch_Custom_control(
		$wp_customize,
		'cricket_league_pro_genral_section_show_scroll_top',
		array(
			'label' => esc_html__('Show or Hide Scroll Top', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_product_general_settings'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_genral_section_show_scroll_top_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'cricket_league_pro_genral_section_show_scroll_top_icon',
		array(
			'settings' => 'cricket_league_pro_genral_section_show_scroll_top_icon',
			'section' => 'cricket_league_pro_post_product_general_settings',
			'type' => 'icon',
			'label' => esc_html__('Choose Scroll Top Icon', 'cricket-league-pro'),
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_general_scroll_top_icon_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_genral_corner_decoration_section',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_pro_switch_sanitization'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Toggle_Switch_Custom_control(
		$wp_customize,
		'cricket_league_pro_genral_corner_decoration_section',
		array(
			'label' => esc_html__('Card Corner Design Disable', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_product_general_settings'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_corner_png',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_corner_png',
		array(
			'label' => __('Corner Design PNG', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_product_general_settings',
			'settings' => 'cricket_league_pro_corner_png'
		)
	)
);



?>