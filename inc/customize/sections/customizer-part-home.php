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
)
);
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
	'cricket_league_pro_league_table_section_headding_tag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_table_section_headding_tag',
	array(
		'label' => __('Section Heading Tag', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_league_table_section_headding_tag',
		'type' => 'text'
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
			'label' => __('Points Table Header Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_league_pointsTable_header_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_pointsTable_header_font_weight',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_league_pointsTable_header_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_pointsTable_header_font_family',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_league_pointsTable_header_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_pointsTable_header_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_league_pointsTable_header_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_league_pointsTable_header_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_league_pointsTable_header_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec',
			'settings' => 'cricket_league_pro_league_pointsTable_header_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_league_table_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_league_table_text_settings',
		array(
			'label' => __('League Table Text Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_league_table_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	' ',
	array(
		'label' => __('Heading Tag', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_league_table_text',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_league_table_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_table_text_font_weight',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_league_table_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_table_text_font_family',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_league_table_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_table_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_league_table_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_league_table_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_league_table_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec',
			'settings' => 'cricket_league_pro_league_table_text_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_tag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_table_heading_tag_settings',
		array(
			'label' => __('Upcoming Matches Heading Tag Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_tag_one',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_table_heading_tag_one',
	array(
		'label' => __('Heading Tag', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_upcoming_table_heading_tag_one',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_table_heading_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_table_heading_tag_font_family',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_table_heading_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_upcoming_table_heading_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_table_heading_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec',
			'settings' => 'cricket_league_pro_upcoming_table_heading_tag_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_table_heading_settings',
		array(
			'label' => __('Upcoming Matches Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_one',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_table_heading_one',
	array(
		'label' => __('Heading ', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_upcoming_table_heading_one',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_table_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_table_heading_font_family',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_table_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_upcoming_table_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_table_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_table_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec',
			'settings' => 'cricket_league_pro_upcoming_table_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_view_all_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_view_all_settings',
		array(
			'label' => __('View ALl Button Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_view_all',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_view_all',
	array(
		'label' => __('Heading Tag', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_upcoming_view_all',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_view_all_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_view_all_font_weight',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_view_all_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_view_all_font_family',
	array(
		'section' => 'cricket_league_pro_league_table_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_view_all_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_view_all_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_upcoming_view_all_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_view_all_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_view_all_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_league_table_sec',
			'settings' => 'cricket_league_pro_upcoming_view_all_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_league_table_sec_id',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_league_table_sec_id',
	array(
		'label' => __('League Table ID', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_league_table_sec',
		'setting' => 'cricket_league_pro_league_table_sec_id',
		'type' => 'text'
	)
);


// Player Tab settings 


$wp_customize->add_section(
	'cricket_league_pro_player_tab',
	array(
		'title' => __('Player Tab Section', 'cricket-league-pro'),
		'description' => __('Add steps setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
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
		'section' => 'cricket_league_pro_player_tab',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_steps_bgcolor',
	array(
		'selector' => 'section.playertab .container',
		'render_callback' => 'twentyfifteen_customize_partial_cricket_league_pro_steps_bgcolor',
	)
);

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
			'section' => 'cricket_league_pro_player_tab',
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
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_steps_bgimage'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_playerTab_tag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_tag_settings',
		array(
			'label' => __('Player Tab Heading Tag Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_playerTab_tag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_tag',
	array(
		'label' => __('Heading Tag', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_tag',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_tag_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_tag_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_heading_settings',
		array(
			'label' => __('Player Tab Heading Tag Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_playerTab_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_heading',
	array(
		'label' => __('Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_heading_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_heading_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_teamName_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_list_teamName_settings',
		array(
			'label' => __('Player List Team Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_teamName_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_list_teamName_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_teamName_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_list_teamName_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_teamName_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_list_teamName_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_list_teamName_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_teamName_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_list_teamName_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_list_teamName_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_playerName_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_list_playerName_settings',
		array(
			'label' => __('Player List Player Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_playerName_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_list_playerName_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_playerName_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_list_playerName_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_playerName_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_list_playerName_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_list_playerName_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_playerName_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_list_playerName_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_list_playerName_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_position_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_list_position_settings',
		array(
			'label' => __('Player List Position Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_position_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_list_position_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_position_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_list_position_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_position_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_list_position_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_list_position_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_list_position_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_list_position_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_list_position_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_teamName_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_teamName_settings',
		array(
			'label' => __('Player Team Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_teamName_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_teamName_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_teamName_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_teamName_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_teamName_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_teamName_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_player_teamName_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_teamName_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_teamName_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_player_teamName_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_playerName_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_playerName_settings',
		array(
			'label' => __('Player Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_playerName_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_playerName_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_playerName_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_playerName_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_playerName_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_playerName_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_player_playerName_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_playerName_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_playerName_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_player_playerName_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_attr_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_attr_settings',
		array(
			'label' => __('Player Attribute Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_attr_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_attr_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_attr_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_attr_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_attr_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_attr_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_player_attr_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_attr_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_attr_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_player_attr_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_attr_value_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_attr_value_settings',
		array(
			'label' => __('Player Attribute Value Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_attr_value_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_attr_value_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_attr_value_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_attr_value_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_attr_value_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_attr_value_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_player_attr_value_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_attr_value_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_attr_value_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_player_attr_value_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_season_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_season_settings',
		array(
			'label' => __('Season Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_season_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_season_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_season_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_season_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_season_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_season_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_player_season_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_season_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_season_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_player_season_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_scoreNum_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_scoreNum_settings',
		array(
			'label' => __('PLayer Score Number Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_scoreNum_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_scoreNum_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_scoreNum_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_scoreNum_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_scoreNum_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_scoreNum_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_player_scoreNum_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_scoreNum_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_scoreNum_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_player_scoreNum_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_score_name_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_score_name_settings',
		array(
			'label' => __('PLayer Score Title Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_score_name_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_score_name_font_weight',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_score_name_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_score_name_font_family',
	array(
		'section' => 'cricket_league_pro_player_tab',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_score_name_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_playerTab_player_score_name_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_player_tab',
		'setting' => 'cricket_league_pro_playerTab_player_score_name_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_playerTab_player_score_name_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_playerTab_player_score_name_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_player_tab',
			'settings' => 'cricket_league_pro_playerTab_player_score_name_color',
		)
	)
);


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


$wp_customize->add_setting(
	'cricket_league_pro_text_field1',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_text_field1',
	array(
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



$wp_customize->add_setting(
	'cricket_league_pro_counter1_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter1_title',
	array(
		'label' => __('Counter 1 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_counter1_title',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_counter1_count',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter1_count',
	array(
		'label' => __('Counter Number', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_counter1_count',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_counter2_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter2_title',
	array(
		'label' => __('Counter 2 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_counter2_title',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_counter2_count',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter2_count',
	array(
		'label' => __('Counter Number', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_counter2_count',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_counter3_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter3_title',
	array(
		'label' => __('Counter 3 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_whychooseus_sec',
		'setting' => 'cricket_league_pro_counter3_title',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_counter3_count',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_counter3_count',
	array(
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

//product slider 

$wp_customize->add_section(
	'cricket_league_pro_productSlider_sec',
	array(
		'title' => __('Product Slider Section', 'cricket-league-pro'),
		'description' => __('Add productSlider detials here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_productSlider_enabledisable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_productSlider_enabledisable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_productSlider_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_productSlider_bg_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_productSlider_bg_color',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec',
			'settings' => 'cricket_league_pro_productSlider_bg_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_productSlider_bg_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_productSlider_bg_image',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec',
			'settings' => 'cricket_league_pro_productSlider_bg_image'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_tag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_heading_tag_settings',
		array(
			'label' => __('Section Heading Tag Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_tag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_heading_tag',
	array(
		'label' => __('Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_productSlider_sec',
		'setting' => 'cricket_league_pro_product_slider_heading_tag',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_heading_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_heading_tag_font_family',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_heading_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_productSlider_sec',
		'setting' => 'cricket_league_pro_product_slider_heading_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_heading_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec',
			'settings' => 'cricket_league_pro_product_slider_heading_tag_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_heading_settings',
		array(
			'label' => __('Section Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_heading',
	array(
		'label' => __('Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_productSlider_sec',
		'setting' => 'cricket_league_pro_product_slider_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_heading_font_family',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_productSlider_sec',
		'setting' => 'cricket_league_pro_product_slider_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_product_slider_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec',
			'settings' => 'cricket_league_pro_product_slider_heading_color',
		)
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_product_slider_product_name_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_product_name_settings',
		array(
			'label' => __('Product Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_product_slider_product_name_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_product_name_font_weight',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_product_name_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_product_name_font_family',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_product_name_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_product_name_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_productSlider_sec',
		'setting' => 'cricket_league_pro_product_slider_product_name_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_product_slider_product_name_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_product_name_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec',
			'settings' => 'cricket_league_pro_product_slider_product_name_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_product_slider_reg_price_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_reg_price_settings',
		array(
			'label' => __('Regular Price Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_reg_price_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_reg_price_font_weight',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_reg_price_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_reg_price_font_family',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_reg_price_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_reg_price_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_productSlider_sec',
		'setting' => 'cricket_league_pro_product_slider_reg_price_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_product_slider_reg_price_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_reg_price_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec',
			'settings' => 'cricket_league_pro_product_slider_reg_price_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_product_slider_sale_price_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_sale_price_settings',
		array(
			'label' => __('Sale Price Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_sale_price_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_sale_price_font_weight',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_sale_price_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_sale_price_font_family',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_sale_price_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_sale_price_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_productSlider_sec',
		'setting' => 'cricket_league_pro_product_slider_sale_price_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_product_slider_sale_price_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_sale_price_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec',
			'settings' => 'cricket_league_pro_product_slider_sale_price_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_cart_button_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_cart_button_settings',
		array(
			'label' => __('Cart Button Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_product_slider_cart_button',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_cart_button',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_productSlider_sec',
		'setting' => 'cricket_league_pro_product_slider_cart_button',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_product_slider_cart_button_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_cart_button_font_weight',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_cart_button_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_cart_button_font_family',
	array(
		'section' => 'cricket_league_pro_productSlider_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_product_slider_cart_button_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_product_slider_cart_button_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_productSlider_sec',
		'setting' => 'cricket_league_pro_product_slider_cart_button_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_product_slider_cart_button_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_product_slider_cart_button_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_productSlider_sec',
			'settings' => 'cricket_league_pro_product_slider_cart_button_color',
		)
	)
);

// Upcoming event

$wp_customize->add_section(
	'cricket_league_pro_upcoming_evt_sec',
	array(
		'title' => __('Upcoming Event Section', 'cricket-league-pro'),
		'description' => __('Add upcoming_evt detials here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_enabledisable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_enabledisable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_bg_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_bg_color',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image.', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec',
			'settings' => 'cricket_league_pro_upcoming_evt_bg_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_bg_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_bg_image',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec',
			'settings' => 'cricket_league_pro_upcoming_evt_bg_image'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_tag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_heading_tag_settings',
		array(
			'label' => __('Section Heading Tag Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_tag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_heading_tag',
	array(
		'label' => __('Heading Tag', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_heading_tag',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_heading_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_heading_tag_font_family',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_heading_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_heading_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_heading_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec',
			'settings' => 'cricket_league_pro_upcoming_evt_heading_tag_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_heading_settings',
		array(
			'label' => __('Section Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_heading',
	array(
		'label' => __('Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_heading_font_family',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec',
			'settings' => 'cricket_league_pro_upcoming_evt_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_schedle_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_schedle_settings',
		array(
			'label' => __('Card Date Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_schedle_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_schedle_font_weight',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_schedle_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_schedle_font_family',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_schedle_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_schedle_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_schedle_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_schedle_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_schedle_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec',
			'settings' => 'cricket_league_pro_upcoming_evt_schedle_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_title_settings',
		array(
			'label' => __('Event Title Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_title_font_weight',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_title_font_family',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_title_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_title_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec',
			'settings' => 'cricket_league_pro_upcoming_evt_title_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_venue_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_venue_settings',
		array(
			'label' => __('Section Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_venue_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_venue_font_weight',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_venue_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_venue_font_family',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_venue_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_venue_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_venue_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_venue_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_venue_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec',
			'settings' => 'cricket_league_pro_upcoming_evt_venue_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_text_settings',
		array(
			'label' => __('Event Description Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_text_font_weight',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_text_font_family',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec',
			'settings' => 'cricket_league_pro_upcoming_evt_text_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_entry_fee_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_entry_fee_settings',
		array(
			'label' => __('Entry Fee Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_entry_fee_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_entry_fee_font_weight',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_entry_fee_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_entry_fee_font_family',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_entry_fee_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_entry_fee_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_entry_fee_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_entry_fee_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_entry_fee_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec',
			'settings' => 'cricket_league_pro_upcoming_evt_entry_fee_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_view_all_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_view_all_settings',
		array(
			'label' => __('View ALl Button Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_view_all',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_view_all',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_view_all',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_view_all_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_view_all_font_weight',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_view_all_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_view_all_font_family',
	array(
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_view_all_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_upcoming_evt_view_all_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_upcoming_evt_sec',
		'setting' => 'cricket_league_pro_upcoming_evt_view_all_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_upcoming_evt_view_all_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_upcoming_evt_view_all_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_upcoming_evt_sec',
			'settings' => 'cricket_league_pro_upcoming_evt_view_all_color',
		)
	)
);

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
	'cricket_league_pro_testimonial_sec_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_sec_text_settings',
		array(
			'label' => __('Testimonial Text Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_testimonial_sec_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_sec_text',
	array(
		'label' => __('Testimonial Right Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'setting' => 'cricket_league_pro_testimonial_sec_text',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_testimonial_sec_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_sec_text_font_weight',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_sec_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_sec_text_font_family',
	array(
		'section' => 'cricket_league_pro_testimonial_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_testimonial_sec_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_testimonial_sec_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_testimonial_sec',
		'setting' => 'cricket_league_pro_testimonial_sec_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_testimonial_sec_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_testimonial_sec_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_testimonial_sec',
			'settings' => 'cricket_league_pro_testimonial_sec_text_color',
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

// Testimonial End 


// Trophies Section 


$wp_customize->add_section(
	'cricket_league_pro_trophies_sec',
	array(
		'title' => __('Trophies Section', 'cricket-league-pro'),
		'description' => __('Add Get In Touch setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_enable',
	array(
		'default' => 'Enable',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_enable',
	array(
		'type' => 'radio',
		'label' => __('Do you want this section', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_trophies_sec',
		'choices' => array(
			'Enable' => __('Enable', 'cricket-league-pro'),
			'Disable' => __('Disable', 'cricket-league-pro')
		),
	)
);
$wp_customize->selective_refresh->add_partial(
	'cricket_league_pro_trophies_enable',
	array(
		'selector' => '#blog-news .container',
		'render_callback' => 'cricket_league_pro_trophies_sec',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_trophies_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_trophies_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_trophies_sec',
			'settings' => 'cricket_league_pro_trophies_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_trophies_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_trophies_bgimage',
		array(
			'label' => __('Background image ', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_trophies_sec',
			'settings' => 'cricket_league_pro_trophies_bgimage'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_tag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_trophies_heading_tag_settings',
		array(
			'label' => __('Trophies heading Tag Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_trophies_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_tag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_heading_tag',
	array(
		'label' => __('Heading Tag', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_trophies_sec',
		'setting' => 'cricket_league_pro_trophies_heading_tag',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_heading_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_trophies_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_heading_tag_font_family',
	array(
		'section' => 'cricket_league_pro_trophies_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_heading_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_trophies_sec',
		'setting' => 'cricket_league_pro_trophies_heading_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_trophies_heading_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_trophies_sec',
			'settings' => 'cricket_league_pro_trophies_heading_tag_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_trophies_heading_settings',
		array(
			'label' => __('Trophies Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_trophies_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_heading',
	array(
		'label' => __('Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_trophies_sec',
		'setting' => 'cricket_league_pro_trophies_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_trophies_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_heading_font_family',
	array(
		'section' => 'cricket_league_pro_trophies_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_trophies_sec',
		'setting' => 'cricket_league_pro_trophies_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_trophies_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_trophies_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_trophies_sec',
			'settings' => 'cricket_league_pro_trophies_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_trophies_year_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_trophies_year_settings',
		array(
			'label' => __('Trophies Year Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_trophies_sec'
		)
	)
); 

$wp_customize->add_setting(
	'cricket_league_pro_trophies_year_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_year_font_weight',
	array(
		'section' => 'cricket_league_pro_trophies_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_year_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_year_font_family',
	array(
		'section' => 'cricket_league_pro_trophies_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_year_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_year_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_trophies_sec',
		'setting' => 'cricket_league_pro_trophies_year_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_trophies_year_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_trophies_year_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_trophies_sec',
			'settings' => 'cricket_league_pro_trophies_year_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_team_name_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_trophies_team_name_settings',
		array(
			'label' => __('Winner Team Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_trophies_sec'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_trophies_team_name_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_team_name_font_weight',
	array(
		'section' => 'cricket_league_pro_trophies_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_team_name_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_team_name_font_family',
	array(
		'section' => 'cricket_league_pro_trophies_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_trophies_team_name_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_trophies_team_name_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_trophies_sec',
		'setting' => 'cricket_league_pro_trophies_team_name_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_trophies_team_name_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_trophies_team_name_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_trophies_sec',
			'settings' => 'cricket_league_pro_trophies_team_name_color',
		)
	)
);

// Trophies end 


// FAQ section 




$wp_customize->add_section(
	'cricket_league_pro_faq_sec',
	array(
		'title' => __('FAQ Page', 'cricket-league-pro'),
		'description' => __('Add faq setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
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

$wp_customize->add_setting(
	'cricket_league_pro_blog_heading_tagline',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_heading_tagline',
	array(
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



$wp_customize->add_setting(
	'cricket_league_pro_blog_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_heading',
	array(
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



$wp_customize->add_setting(
	'cricket_league_pro_blog_author_tag_settings_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_blog_author_tag_settings_settings',
		array(
			'label' => __('Author Title And Tag Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_blog_author_tag_settings_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_author_tag_settings_font_weight',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_author_tag_settings_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_author_tag_settings_font_family',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_author_tag_settings_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_author_tag_settings_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'setting' => 'cricket_league_pro_blog_author_tag_settings_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_blog_author_tag_settings_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_blog_author_tag_settings_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'settings' => 'cricket_league_pro_blog_author_tag_settings_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_blog_date_comment_settings_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_blog_date_comment_settings_settings',
		array(
			'label' => __('Blog Comment And Date Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_date_comment_settings_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_date_comment_settings_font_weight',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_date_comment_settings_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_date_comment_settings_font_family',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_date_comment_settings_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_date_comment_settings_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'setting' => 'cricket_league_pro_blog_date_comment_settings_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_blog_date_comment_settings_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_blog_date_comment_settings_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'settings' => 'cricket_league_pro_blog_date_comment_settings_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_blog_view_all_settings_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_blog_view_all_settings_settings',
		array(
			'label' => __('Location Buton Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_blog_view_all_settings',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_view_all_settings',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'setting' => 'cricket_league_pro_blog_view_all_settings',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_blog_view_all_settings_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_view_all_settings_font_weight',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_view_all_settings_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_view_all_settings_font_family',
	array(
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_view_all_settings_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_view_all_settings_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_blog_and_news_sec',
		'setting' => 'cricket_league_pro_blog_view_all_settings_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_blog_view_all_settings_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_blog_view_all_settings_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_blog_and_news_sec',
			'settings' => 'cricket_league_pro_blog_view_all_settings_color',
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
