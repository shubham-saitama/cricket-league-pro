<?php


// single services page 
$wp_customize->add_section(
	'cricket_league_pro_single_evt',
	array(
		'title' => __('Single Event Page', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_evt_date_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_date_settings',
		array(
			'label' => __('Single Event Date Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_date_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_date_font_weight',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_date_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_date_font_family',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_date_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_date_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_evt_date_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_date_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_date_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt',
			'settings' => 'cricket_league_pro_single_evt_date_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_evt_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_title_settings',
		array(
			'label' => __('Single Event Title Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_title_font_weight',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_title_font_family',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_title_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_evt_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_title_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt',
			'settings' => 'cricket_league_pro_single_evt_title_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_venue_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_venue_settings',
		array(
			'label' => __('About us Tab Heading Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_venue_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_venue_font_weight',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_venue_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_venue_font_family',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_venue_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_venue_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_evt_venue_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_venue_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_venue_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt',
			'settings' => 'cricket_league_pro_single_evt_venue_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_evt_content_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_content_settings',
		array(
			'label' => __('Single Event Text Content Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_content_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_content_font_weight',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_content_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_content_font_family',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_content_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_content_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_evt_content_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_content_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_content_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt',
			'settings' => 'cricket_league_pro_single_evt_content_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_goto_location_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_goto_location_settings',
		array(
			'label' => __('Location Buton Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_evt_goto_location',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_goto_location',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_evt_goto_location',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_goto_location_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_goto_location_font_weight',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_goto_location_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_goto_location_font_family',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_goto_location_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_goto_location_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_evt_goto_location_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_goto_location_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_goto_location_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt',
			'settings' => 'cricket_league_pro_single_evt_goto_location_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_evt_add_chalender_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_add_chalender_settings',
		array(
			'label' => __('Add to Chalender Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_evt_add_chalender',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_add_chalender',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_evt_add_chalender',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_evt_add_calender_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'cricket_league_pro_evt_add_calender_icon',
		array(
			'settings' => 'cricket_league_pro_evt_add_calender_icon',
			'section' => 'cricket_league_pro_single_evt',
			'type' => 'icon',
			'label' => esc_html__('Calender Icon', 'cricket-league-pro'),
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_add_chalender_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_add_chalender_font_weight',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_add_chalender_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_add_chalender_font_family',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_add_chalender_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_add_chalender_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_evt_add_chalender_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_add_chalender_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_add_chalender_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt',
			'settings' => 'cricket_league_pro_single_evt_add_chalender_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_evt_details_mainhead_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_details_mainhead_settings',
		array(
			'label' => __('Details Main Headings Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_details_mainhead_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_details_mainhead_font_weight',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_details_mainhead_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_details_mainhead_font_family',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_details_mainhead_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_details_mainhead_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_evt_details_mainhead_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_details_mainhead_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_details_mainhead_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt',
			'settings' => 'cricket_league_pro_single_evt_details_mainhead_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_detail_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_detail_heading_settings',
		array(
			'label' => __('Event Detail Column Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_lable_heading_col1',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_heading_col1',
	array(
		'label' => __('Column 1 Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_heading_col1',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_lable_heading_col2',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_heading_col2',
	array(
		'label' => __('Column 2 Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_heading_col2',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_lable_heading_col3',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_heading_col3',
	array(
		'label' => __('Column 3 Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_heading_col3',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_detail_lable_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_detail_lable_settings',
		array(
			'label' => __('Event Detail Lable Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_lable_start_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_start_heading',
	array(
		'label' => __('Start Date', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_start_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_lable_end_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_end_heading',
	array(
		'label' => __('End Lable', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_end_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_lable_cost_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_cost_heading',
	array(
		'label' => __('Cost Lable', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_cost_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_lable_ccategory_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_ccategory_heading',
	array(
		'label' => __('Event Category Lable', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_ccategory_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_lable_phone_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_phone_heading',
	array(
		'label' => __('Phone Number Lable', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_phone_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_lable_mail_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_mail_heading',
	array(
		'label' => __('Mail Lable', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_mail_heading',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_lable_website_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_website_heading',
	array(
		'label' => __('Website Lable', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_website_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_lable_address_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_address_heading',
	array(
		'label' => __('Address Lable', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_address_heading',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_lable_phone_venue_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_lable_phone_venue_heading',
	array(
		'label' => __('Venue Phone Lable', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_event_lable_phone_venue_heading',
		'type' => 'text'
	)
);








$wp_customize->add_setting(
	'cricket_league_pro_single_detail_headings_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_detail_headings_settings',
		array(
			'label' => __('Event Detail Sub-Headings Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_detail_headings_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_detail_headings_font_weight',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_detail_headings_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_detail_headings_font_family',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_detail_headings_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_detail_headings_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_detail_headings_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_detail_headings_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_single_detail_headings_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt',
			'settings' => 'cricket_league_pro_single_detail_headings_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_detail_value_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_detail_value_settings',
		array(
			'label' => __('Event Detail Values Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_detail_value_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_detail_value_font_weight',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_detail_value_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_detail_value_font_family',
	array(
		'section' => 'cricket_league_pro_single_evt',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_evt_detail_value_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_evt_detail_value_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_evt',
		'setting' => 'cricket_league_pro_single_evt_detail_value_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_evt_detail_value_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_single_evt_detail_value_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_evt',
			'settings' => 'cricket_league_pro_single_evt_detail_value_color',
		)
	)
);




// single blog clling widget 

// event page 

$wp_customize->add_section(
	'cricket_league_pro_event_page',
	array(
		'title' => __('Events Page', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_date_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_event_date_settings',
		array(
			'label' => __('Event Date Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_event_page'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_date_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_date_font_weight',
	array(
		'section' => 'cricket_league_pro_event_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_date_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_date_font_family',
	array(
		'section' => 'cricket_league_pro_event_page',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_date_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_date_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_event_page',
		'setting' => 'cricket_league_pro_event_date_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_date_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_event_date_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_event_page',
			'settings' => 'cricket_league_pro_event_date_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_title_inner_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_event_title_inner_settings',
		array(
			'label' => __('Event Title Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_event_page'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_event_title_inner_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_title_inner_font_weight',
	array(
		'section' => 'cricket_league_pro_event_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_title_inner_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_title_inner_font_family',
	array(
		'section' => 'cricket_league_pro_event_page',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_title_inner_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_title_inner_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_event_page',
		'setting' => 'cricket_league_pro_event_title_inner_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_title_inner_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_event_title_inner_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_event_page',
			'settings' => 'cricket_league_pro_event_title_inner_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_page_venue_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_event_page_venue_settings',
		array(
			'label' => __('Event Venue Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_event_page'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_page_venue_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_page_venue_font_weight',
	array(
		'section' => 'cricket_league_pro_event_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_page_venue_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_page_venue_font_family',
	array(
		'section' => 'cricket_league_pro_event_page',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_page_venue_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_page_venue_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_event_page',
		'setting' => 'cricket_league_pro_event_page_venue_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_page_venue_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_event_page_venue_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_event_page',
			'settings' => 'cricket_league_pro_event_page_venue_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_event_page_descreption_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_event_page_descreption_settings',
		array(
			'label' => __('Event Descreption Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_event_page'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_page_descreption_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_page_descreption_font_weight',
	array(
		'section' => 'cricket_league_pro_event_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_page_descreption_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_page_descreption_font_family',
	array(
		'section' => 'cricket_league_pro_event_page',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_page_descreption_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_page_descreption_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_event_page',
		'setting' => 'cricket_league_pro_event_page_descreption_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_page_descreption_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_event_page_descreption_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_event_page',
			'settings' => 'cricket_league_pro_event_page_descreption_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_page_price_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_event_page_price_settings',
		array(
			'label' => __('Event Price Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_event_page'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_page_price_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_page_price_font_weight',
	array(
		'section' => 'cricket_league_pro_event_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_page_price_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_page_price_font_family',
	array(
		'section' => 'cricket_league_pro_event_page',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_event_page_price_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_event_page_price_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_event_page',
		'setting' => 'cricket_league_pro_event_page_price_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_event_page_price_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_event_page_price_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_event_page',
			'settings' => 'cricket_league_pro_event_page_price_color',
		)
	)
);

// event page end 
// about us page 



$wp_customize->add_section(
	'cricket_league_pro_aboutus_inner',
	array(
		'title' => __('About Us Page', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_about_us_listical_pts_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_us_listical_pts_settings',
		array(
			'label' => __('About us Listical Points Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
); 


$wp_customize->add_setting(
	'cricket_league_pro_about_us_listical_pts',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_about_us_listical_pts',
	array(
		'label' => __('Point one', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_about_us_listical_pts',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_about_us_listical_pts_2',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_about_us_listical_pts_2',
	array(
		'label' => __('Point two', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_about_us_listical_pts_2',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_about_us_listical_pts_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_about_us_listical_pts_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_about_us_listical_pts_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_about_us_listical_pts_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_about_us_listical_pts_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_about_us_listical_pts_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_about_us_listical_pts_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_about_us_listical_pts_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_about_us_listical_pts_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_about_us_listical_pts_color',
		)
	)
);


for ($i = 1; $i <= 3; $i++) {
    $wp_customize->add_setting(
        'cricket_league_pro_aboutus_tab_pts_settings_' . $i,
        array(
            'default' => '',
            'transport' => 'postMessage',
            'sanitize_callback' => 'cricket_league_pro_text_sanitization'
        )
    );
    $wp_customize->add_control(
        new VW_Themes_Seperator_custom_Control(
            $wp_customize,
            'cricket_league_pro_aboutus_tab_pts_settings_' . $i,
            array(
                'label' => __('About Us Tab '.$i.' Settings', 'cricket-league-pro'),
                'section' => 'cricket_league_pro_aboutus_inner'
            )
        )
    );

    $wp_customize->add_setting(
        'cricket_league_pro_aboutus_tab_name_' . $i,
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'cricket_league_pro_aboutus_tab_name_' . $i,
        array(
            'label' => __('Tab Name', 'cricket-league-pro'),
            'section' => 'cricket_league_pro_aboutus_inner',
            'settings' => 'cricket_league_pro_aboutus_tab_name_' . $i,  // Corrected 'setting' to 'settings'
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'cricket_league_pro_aboutus_tab_ptsImage_' . $i,
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'cricket_league_pro_aboutus_tab_ptsImage_' . $i,
            array(
                'label' => __('Tab Image', 'cricket-league-pro'),
                'section' => 'cricket_league_pro_aboutus_inner',
                'settings' => 'cricket_league_pro_aboutus_tab_ptsImage_' . $i
            )
        )
    );

    $wp_customize->add_setting(
        'cricket_league_pro_aboutus_tab_Heading_' . $i,
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'cricket_league_pro_aboutus_tab_Heading_' . $i,
        array(
            'label' => __('Tab Heading Text', 'cricket-league-pro'),
            'section' => 'cricket_league_pro_aboutus_inner',
            'settings' => 'cricket_league_pro_aboutus_tab_Heading_' . $i,  // Corrected 'setting' to 'settings'
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'cricket_league_pro_aboutus_tab_text_pts_' . $i,
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'cricket_league_pro_aboutus_tab_text_pts_' . $i,
        array(
            'label' => __('Tab text', 'cricket-league-pro'),
            'section' => 'cricket_league_pro_aboutus_inner',
            'settings' => 'cricket_league_pro_aboutus_tab_text_pts_' . $i,  // Corrected 'setting' to 'settings'
            'type' => 'text'
        )
    );
}


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_tab_heading_settings',
		array(
			'label' => __('About us Tab Heading Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_tab_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_tab_heading_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_tab_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_tab_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_tab_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_tab_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_cont_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_tab_cont_heading_settings',
		array(
			'label' => __('About us Tab content Heading Typography', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_cont_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_tab_cont_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_cont_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_tab_cont_heading_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_cont_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_tab_cont_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_tab_cont_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_cont_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_tab_cont_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_tab_cont_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_tab_text_settings',
		array(
			'label' => __('About us Tab Content Heading Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_tab_text_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_tab_text_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_tab_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_tab_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_tab_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_tab_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_tab_text_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_heading_tag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_section_heading_tag_settings',
		array(
			'label' => __('About Page Heading Tag Typography Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_heading_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_section_heading_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_heading_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_section_heading_tag_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_heading_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_section_heading_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_section_heading_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_heading_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_section_heading_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_section_heading_tag_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_section_heading_settings',
		array(
			'label' => __('About us Section Heading Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_section_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_section_heading_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_section_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_section_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_section_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_section_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_section_heading_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_staff_name_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_staff_name_settings',
		array(
			'label' => __('Staff Name Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_staff_name_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_staff_name_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_staff_name_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_staff_name_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_staff_name_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_staff_name_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_staff_name_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_staff_name_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_staff_name_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_staff_name_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_aboutus_staff_position_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_staff_position_settings',
		array(
			'label' => __('Staff Position Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_staff_position_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_staff_position_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_staff_position_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_staff_position_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_staff_position_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_staff_position_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_staff_position_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_staff_position_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_staff_position_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_staff_position_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_about_inner_get_in_touch_contact_from',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);

$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_inner_get_in_touch_contact_from',
		array(
			'label' => __('Form Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_form_heading_tag_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_heading_tag_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_form_heading_tag_settings',
		array(
			'label' => __('Form Heading Tag Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_from_heading_tagline',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_from_heading_tagline',
	array(
		'label' => __('Form Hedaing Tagline', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_form_heading_tag_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_form_heading_tag_font_weight',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_form_heading_tag_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_form_heading_tag_font_family',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_form_heading_tag_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_form_heading_tag_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'setting' => 'cricket_league_pro_getaquote_form_heading_tag_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_getaquote_form_heading_tag_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_form_heading_tag_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquote_form_heading_tag_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_form_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_heading_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_form_heading_settings',
		array(
			'label' => __('Form Heading Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_from_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_from_heading',
	array(
		'label' => __('Form Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_getaquote_form_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_form_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_form_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_form_heading_font_family',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_form_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_form_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'setting' => 'cricket_league_pro_getaquote_form_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_getaquote_form_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_form_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquote_form_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_from_shortcode',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_from_shortcode',
	array(
		'label' => __('Get A Quote Form Shortcode', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_from_bgImage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',

	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_from_bgImage',
		array(
			'label' => __('Form Background Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquote_from_bgImage'
		)
	)
);

/*-----------------------Blog Page Settings--------------------------*/


// --------------- Post General Settings ---------------
$wp_customize->add_section(
	'cricket_league_pro_post_general_settings',
	array(
		'title' => __('Single Blog Page Settings', 'cricket-league-pro'),
		'description' => __('See section settings below and do check documentation too.', 'cricket-league-pro'),
		'priority' => null,
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_post_date',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_pro_switch_sanitization'
	)
);

$wp_customize->add_control(
	new cricket_league_pro_Toggle_Switch_Custom_control(
		$wp_customize,
		'cricket_league_pro_post_general_settings_post_date',
		array(
			'label' => esc_html__('Show or Hide Post Date', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_post_comments',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_pro_switch_sanitization'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Toggle_Switch_Custom_control(
		$wp_customize,
		'cricket_league_pro_post_general_settings_post_comments',
		array(
			'label' => esc_html__('Show or Hide Comments', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_post_author',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_pro_switch_sanitization'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Toggle_Switch_Custom_control(
		$wp_customize,
		'cricket_league_pro_post_general_settings_post_author',
		array(
			'label' => esc_html__('Show or Hide Author', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_overview_count_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_overview_count_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_post_general_settings_overview_count_settings',
		array(
			'label' => __('Main Heading Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_overview_count_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_post_general_settings_overview_count_font_weight',
	array(
		'section' => 'cricket_league_pro_post_general_settings',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_overview_count_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_post_general_settings_overview_count_font_family',
	array(
		'section' => 'cricket_league_pro_post_general_settings',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_overview_count_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_post_general_settings_overview_count_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_post_general_settings',
		'setting' => 'cricket_league_pro_post_general_settings_overview_count_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_post_general_settings_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings',
			'settings' => 'cricket_league_pro_post_general_settings_heading_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_subheadings_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_subheadings_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_post_general_settings_subheadings_settings',
		array(
			'label' => __('Page Text Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_page_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_post_general_settings_page_text_font_weight',
	array(
		'section' => 'cricket_league_pro_post_general_settings',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_page_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_post_general_settings_page_text_font_family',
	array(
		'section' => 'cricket_league_pro_post_general_settings',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_page_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_post_general_settings_page_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_post_general_settings',
		'setting' => 'cricket_league_pro_post_general_settings_page_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings__color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_post_general_settings__color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings',
			'settings' => 'cricket_league_pro_post_general_settings__color',
		)
	)
);


$wp_customize->add_setting('cricket_league_pro_single_blog_heading_tag',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_pro_single_blog_heading_tag',array(
	'label' => __('Recent Post Heading Tag','cricket-league-pro'),
	'section' => 'cricket_league_pro_post_general_settings',
	'setting' => 'cricket_league_pro_single_blog_heading_tag',
	'type' => 'text'
));

$wp_customize->add_setting('cricket_league_pro_single_blog_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_pro_single_blog_heading',array(
	'label' => __('Recent Post Heading','cricket-league-pro'),
	'section' => 'cricket_league_pro_post_general_settings',
	'setting' => 'cricket_league_pro_single_blog_heading',
	'type' => 'text'
));



$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_subheadings_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_subheadings_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_post_general_settings_subheadings_settings',
		array(
			'label' => __('Page Sub-Heading Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_subheadings_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_post_general_settings_subheadings_font_weight',
	array(
		'section' => 'cricket_league_pro_post_general_settings',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_subheadings_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_post_general_settings_subheadings_font_family',
	array(
		'section' => 'cricket_league_pro_post_general_settings',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_subheadings_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_post_general_settings_subheadings_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_post_general_settings',
		'setting' => 'cricket_league_pro_post_general_settings_subheadings_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_post_general_settings_subheadings_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_post_general_settings_subheadings_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings',
			'settings' => 'cricket_league_pro_post_general_settings_subheadings_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_page_para_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_sub_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_blog_page_para_settings',
		array(
			'label' => __('Page Paragraph/Text Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_blog_page_para_para_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_page_para_para_font_weight',
	array(
		'section' => 'cricket_league_pro_post_general_settings',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_page_para_para_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_page_para_para_font_family',
	array(
		'section' => 'cricket_league_pro_post_general_settings',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_blog_page_para_para_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_blog_page_para_para_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_post_general_settings',
		'setting' => 'cricket_league_pro_blog_page_para_para_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_blog_page_para_para_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(

		$wp_customize,
		'cricket_league_pro_blog_page_para_para_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_post_general_settings',
			'settings' => 'cricket_league_pro_blog_page_para_para_color',
		)
	)
);



// Policy Pages 

$wp_customize->add_section(
	'cricket_league_pro_policy_page',
	array(
		'title' => __('Policy Pages Settings', 'cricket-league-pro'),
		'description' => __('Add Policy Page setting here.', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_policy_page_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_heading_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_policy_page_heading_settings',
		array(
			'label' => __('Policy Page Headings Typography Setting(h2)', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_policy_page'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_policy_page_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_policy_page_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_policy_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_policy_page_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_policy_page_heading_font_family',
	array(
		'section' => 'cricket_league_pro_policy_page',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_policy_page_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_policy_page_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_policy_page',
		'setting' => 'cricket_league_pro_policy_page_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_policy_page_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_policy_page_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_policy_page',
			'settings' => 'cricket_league_pro_policy_page_heading_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_policy_page_sub_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_heading_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_policy_page_sub_heading_settings',
		array(
			'label' => __('Policy Page Sub-Headings Typography Setting(h4)', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_policy_page'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_policy_page_sub_headings_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_policy_page_sub_headings_font_weight',
	array(
		'section' => 'cricket_league_pro_policy_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_policy_page_sub_headings_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_policy_page_sub_headings_font_family',
	array(
		'section' => 'cricket_league_pro_policy_page',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_policy_page_sub_headings_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_policy_page_sub_headings_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_policy_page',
		'setting' => 'cricket_league_pro_policy_page_sub_headings_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_policy_page_sub_headings_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_policy_page_sub_headings_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_policy_page',
			'settings' => 'cricket_league_pro_policy_page_sub_headings_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_policy_page_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_heading_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_policy_page_text_settings',
		array(
			'label' => __('Policy Page Text Typography', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_policy_page'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_policy_page_page_texts_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_policy_page_page_texts_font_weight',
	array(
		'section' => 'cricket_league_pro_policy_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_policy_page_page_texts_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_policy_page_page_texts_font_family',
	array(
		'section' => 'cricket_league_pro_policy_page',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_policy_page_page_texts_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_policy_page_page_texts_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_policy_page',
		'setting' => 'cricket_league_pro_policy_page_page_texts_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_policy_page_page_texts_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_policy_page_page_texts_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_policy_page',
			'settings' => 'cricket_league_pro_policy_page_page_texts_color',
		)
	)
);



// Policy Pages End 

// ---------------------404 Page---------------------------
//404 Page Setting



$wp_customize->add_section(
	'cricket_league_pro_404_page',
	array(
		'title' => __('404 Page Settings', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_404_page_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_404_page',
			'settings' => 'cricket_league_pro_404_page_bgcolor',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',

	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_404_page_bgimage',
		array(
			'label' => __('Background image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_404_page',
			'settings' => 'cricket_league_pro_404_page_bgimage'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_404_page_heading',
	array(
		'label' => __('Add Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_404_page',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_content',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_404_page_content',
	array(
		'label' => __('Add Paragraph', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_404_page',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_button_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_button_text',
	array(
		'label' => __('Add Button Text', 'cricket-league-pro'),
		'input_attrs' => array(
			'placeholder' => __('Back to Home Page', 'cricket-league-pro'),
		),
		'section' => 'cricket_league_pro_404_page',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_error_temp_bg_images',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_error_temp_bg_images',
		array(
			'label' => __('404 Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_404_page',
			'settings' => 'cricket_league_pro_error_temp_bg_images'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_color_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_404_page_color_settings',
		array(
			'label' => __('Heading Typography', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_404_page'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_404_page_title_color',
		array(
			'label' => __('Heading Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_404_page',
			'settings' => 'cricket_league_pro_404_page_title_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_title_font_family',
	array(
		'section' => 'cricket_league_pro_404_page',
		'label' => __('Heading Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_title_font_size',
	array(
		'label' => __('Heading Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_404_page',
		'setting' => 'cricket_league_pro_404_page_title_font_size',
		'type' => 'number'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_404_page_sub_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_sub_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_404_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_404_page_content_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_404_page_content_color',
		array(
			'label' => __('Content Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_404_page',
			'settings' => 'cricket_league_pro_404_page_content_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_404_page_content_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_content_font_family',
	array(
		'section' => 'cricket_league_pro_404_page',
		'label' => __('Content Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_404_page_content_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_content_font_size',
	array(
		'label' => __('Content Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_404_page',
		'setting' => 'cricket_league_pro_404_page_content_font_size',
		'type' => 'number'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_404_page_content_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_content_font_weight',
	array(
		'section' => 'cricket_league_pro_404_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_404_page_button_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_404_page_button_settings',
		array(
			'label' => __('Button Typography', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_404_page'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_button_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_404_page_button_color',
		array(
			'label' => __('Button Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_404_page',
			'settings' => 'cricket_league_pro_404_page_button_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_button_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_button_font_family',
	array(
		'section' => 'cricket_league_pro_404_page',
		'label' => __('Button Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_button_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_button_font_size',
	array(
		'label' => __('Button Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_404_page',
		'setting' => 'cricket_league_pro_404_page_button_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_button_bg_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_404_page_button_bg_color',
		array(
			'label' => __('Button Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_404_page',
			'settings' => 'cricket_league_pro_404_page_button_bg_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_404_page_sub_button_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_sub_button_font_weight',
	array(
		'section' => 'cricket_league_pro_404_page',
		'label' => __('Button Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);
$wp_customize->add_section(
	'cricket_league_pro_sngle_product',
	array(
		'title' => __('Single Product Page', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'product_helpline_fields',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'product_helpline_fields',
	array(
		'label' => __('Helpline Text line one', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_sngle_product',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'product_helpline_timing',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'product_helpline_timing',
	array(
		'label' => __('Helpline Timeing Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_sngle_product',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_shop_helpline_icon',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	new cricket_league_pro_Fontawesome_Icon_Chooser(
		$wp_customize,
		'cricket_league_pro_single_shop_helpline_icon',
		array(
			'settings' => 'cricket_league_pro_single_shop_helpline_icon',
			'section' => 'cricket_league_pro_sngle_product',
			'type' => 'icon',
			'label' => esc_html__('Helpline Icon', 'cricket-league-pro'),
		)
	)
);

// Support page 


$wp_customize->add_section(
	'cricket_league_pro_contactus_page',
	array(
		'title' => __('Contact Page Settings', 'vw-logistics-shipping-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_contactus_section',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_contactus_section',
		array(
			'label' => __('Location And Form Section', 'vw-logistics-shipping-pro'),
			'section' => 'cricket_league_pro_contactus_page'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_contactus_contact_sectionheading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_contactus_contact_sectionheading',
	array(
		'label' => __('Section Heading', 'vw-logistics-shipping-pro'),
		'section' => 'cricket_league_pro_contactus_page',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_contactus_contact_section_desc',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_contactus_contact_section_desc',
	array(
		'label' => __('Section Description', 'vw-logistics-shipping-pro'),
		'section' => 'cricket_league_pro_contactus_page',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_contactus_location_bg_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',

	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_contactus_location_bg_image',
		array(
			'label' => __('Background image ', 'vw-logistics-shipping-pro'),
			'section' => 'cricket_league_pro_contactus_page',
			'settings' => 'cricket_league_pro_contactus_location_bg_image'
		)
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_support_page_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_support_page_settings',
		array(
			'label' => __('Support Page Text/para Typography Setting', 'vw-logistics-shipping-pro'),
			'section' => 'cricket_league_pro_contactus_page'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_support_page_para_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_support_page_para_title_font_weight',
	array(
		'section' => 'cricket_league_pro_contactus_page',
		'label' => __('Font Weight', 'vw-logistics-shipping-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_support_page_para_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_support_page_para_title_font_family',
	array(
		'section' => 'cricket_league_pro_contactus_page',
		'label' => __('Font Family', 'vw-logistics-shipping-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_support_page_para_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_support_page_para_title_font_size',
	array(
		'label' => __('Font Size', 'vw-logistics-shipping-pro'),
		'description' =>__('Add font size in px', 'vw-logistics-shipping-pro'),
		'section' => 'cricket_league_pro_contactus_page',
		'setting' => 'cricket_league_pro_support_page_para_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_support_page_para_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(

		$wp_customize,
		'cricket_league_pro_support_page_para_title_color',
		array(
			'label' => __('Color', 'vw-logistics-shipping-pro'),
			'section' => 'cricket_league_pro_contactus_page',
			'settings' => 'cricket_league_pro_support_page_para_title_color',
		)
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_contactus_section_map',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_contactus_section_map',
		array(
			'label' => __('Location Settings', 'vw-logistics-shipping-pro'),
			'section' => 'cricket_league_pro_contactus_page'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_contactus_latitude',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_contactus_latitude',
	array(
		'label' => __('Enter Latitude', 'vw-logistics-shipping-pro'),
		'section' => 'cricket_league_pro_contactus_page',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_contactus_longitude',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_contactus_longitude',
	array(
		'label' => __('Enter Longitude', 'vw-logistics-shipping-pro'),
		'section' => 'cricket_league_pro_contactus_page',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_contactus_from_setting',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_contactus_from_setting',
		array(
			'label' => __('Form Shortcode', 'vw-logistics-shipping-pro'),
			'section' => 'cricket_league_pro_contactus_page'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_contactus_form',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_contactus_form',
	array(
		'label' => __('Contact Us Form Shortcode', 'vw-logistics-shipping-pro'),
		'section' => 'cricket_league_pro_contactus_page',
		'type' => 'text'
	)
);



// Support page end