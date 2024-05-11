<?php


// single services page 
$wp_customize->add_section(
	'cricket_league_pro_single_service',
	array(
		'title' => __('Single Service Page', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_services_single_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_heading_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_services_single_heading_settings',
		array(
			'label' => __('Single Service Main heading Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_services_single_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_single_service',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_heading_font_family',
	array(
		'section' => 'cricket_league_pro_single_service',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_services_single_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_services_single_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_services_single_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service',
			'settings' => 'cricket_league_pro_services_single_heading_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_services_single_body_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_body_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_services_single_body_text_settings',
		array(
			'label' => __('Page Text Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service'
		)
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_services_single_body_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_body_text_font_weight',
	array(
		'section' => 'cricket_league_pro_single_service',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_body_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_body_text_font_family',
	array(
		'section' => 'cricket_league_pro_single_service',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_body_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_body_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_services_single_body_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_services_single_body_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_services_single_body_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service',
			'settings' => 'cricket_league_pro_services_single_body_text_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_body_subheadng',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_body_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_services_single_body_subheadng',
		array(
			'label' => __('Sub Headings Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service'
		)
	)
);





$wp_customize->add_setting(
	'cricket_league_pro_services_single_sub_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_sub_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_single_service',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_sub_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_sub_heading_font_family',
	array(
		'section' => 'cricket_league_pro_single_service',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_sub_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_sub_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_services_single_sub_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_services_single_sub_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_services_single_sub_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service',
			'settings' => 'cricket_league_pro_services_single_sub_heading_color',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_single_services_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_services_settings',
		array(
			'label' => __('Single services List', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_service_list_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_service_list_title',
	array(
		'label' => __('List title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_faq_heading_tagline',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_service_list_length',
	array(
		'default' => '5',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cricket_league_pro_single_service_list_length',
	array(
		'label' => __('Number Of List Points', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'type' => 'number'
	)
);

$ULcount = get_theme_mod('cricket_league_pro_single_service_list_length');

for ($i = 1; $i <= $ULcount; $i++) {
	$wp_customize->add_setting(
		'cricket_league_pro_single_services_list' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'cricket_league_pro_single_services_list' . $i,
		array(
			'label' => __('List Point' . $i, 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service',
			'setting' => 'cricket_league_pro_single_services_list' . $i,
			'type' => 'text'
		)
	);
}
$wp_customize->add_setting(
	'cricket_league_pro_single_service_btn_txt',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_service_btn_txt',
	array(
		'label' => __('Button Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_single_service_btn_txt',
		'type' => 'text'
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_single_service_img',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_single_service_img',
		array(
			'label' => __('List Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service',
			'settings' => 'cricket_league_pro_single_service_img'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_single_services_counter',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_services_counter',
		array(
			'label' => __('Single Services Counter', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_single_service_counter1_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_service_counter1_title',
	array(
		'label' => __('Counter 1 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_single_service_counter1_title',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_service_counter1',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cricket_league_pro_single_service_counter1',
	array(
		'label' => __('Counter 1 Number', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'type' => 'number'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_service_counter1_img',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_service_counter1_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_service_counter1_text',
	array(
		'label' => __('Counter 1 Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_single_service_counter1_text',
		'type' => 'text'
	)
);


$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_single_service_counter1_img',
		array(
			'label' => __('Counter 1 Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service',
			'settings' => 'cricket_league_pro_single_service_counter1_img'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_service_counter2_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_service_counter2_title',
	array(
		'label' => __('Counter 2 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_single_service_counter2_title',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_service_counter2',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cricket_league_pro_single_service_counter2',
	array(
		'label' => __('Counter 2 Number', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'type' => 'number'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_single_service_counter2_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_service_counter2_text',
	array(
		'label' => __('Counter 2 Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_single_service_counter2_text',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_service_counter2_img',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);


$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_single_service_counter2_img',
		array(
			'label' => __('Counter 2 Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service',
			'settings' => 'cricket_league_pro_single_service_counter2_img'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_services_single_counter_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_heading_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_services_single_counter_heading_settings',
		array(
			'label' => __('Services Counter Title Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_services_single_counter_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_counter_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_single_service',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_counter_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_counter_heading_font_family',
	array(
		'section' => 'cricket_league_pro_single_service',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_counter_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_counter_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_services_single_counter_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_services_single_counter_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_services_single_counter_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service',
			'settings' => 'cricket_league_pro_services_single_counter_heading_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_services_single_counter_count_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_count_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_services_single_counter_count_settings',
		array(
			'label' => __('Counter Count Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_services_single_counter_count_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_counter_count_font_weight',
	array(
		'section' => 'cricket_league_pro_single_service',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_counter_count_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_counter_count_font_family',
	array(
		'section' => 'cricket_league_pro_single_service',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_services_single_counter_count_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_services_single_counter_count_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_services_single_counter_count_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_services_single_counter_count_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_services_single_counter_count_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service',
			'settings' => 'cricket_league_pro_services_single_counter_count_color',
		)
	)
);


$wp_customize->add_setting('cricket_league_pro_single_services_heading_tag',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_pro_single_services_heading_tag',array(
	'label' => __('Related Services Heading Tag','cricket-league-pro'),
	'section' => 'cricket_league_pro_single_service',
	'setting' => 'cricket_league_pro_single_services_heading_tag',
	'type' => 'text'
));

$wp_customize->add_setting('services_title',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_pro_single_services_heading',array(
	'label' => __('Related Services Heading','cricket-league-pro'),
	'section' => 'cricket_league_pro_single_service',
	'setting' => 'cricket_league_pro_single_services_heading',
	'type' => 'text'
));



// single blog clling widget 





$wp_customize->add_setting(
	'cricket_league_pro_single_services_widget',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_single_services_widget',
		array(
			'label' => __('Phone Sidebar Widget', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service'
		)
	)
);	


$wp_customize->add_setting(
	'cricket_league_pro_single_service_widget_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);


$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_single_service_widget_image',
		array(
			'label' => __('Widget Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_single_service',
			'settings' => 'cricket_league_pro_single_service_widget_image'
		)
	)
);





$wp_customize->add_setting(
	'cricket_league_pro_single_service_widget_title',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_service_widget_title',
	array(
		'label' => __('Widget title text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_single_service_widget_title',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_single_service_widget_number',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cricket_league_pro_single_service_widget_number',
	array(
		'label' => __('Phone Number', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'type' => 'number'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_single_service_widget_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_single_service_widget_text',
	array(
		'label' => __('Widget Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_single_service',
		'setting' => 'cricket_league_pro_single_service_widget_text',
		'type' => 'text'
	)
);



// about us page 



$wp_customize->add_section(
	'cricket_league_pro_aboutus_inner',
	array(
		'title' => __('About Us Page', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_about_inner_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_inner_settings',
		array(
			'label' => __('Our Mission Section', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_mission_img',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',

	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_mission_img',
		array(
			'label' => __('About Us Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_inner_mission_img'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_mission_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_mission_heading',
	array(
		'label' => __('Add Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_mission_bold_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_mission_bold_text',
	array(
		'label' => __('Our Mission Bold Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_mission_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_mission_text',
	array(
		'label' => __('Our Mission Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);

// Distrubution overview 


$wp_customize->add_setting(
	'cricket_league_pro_about_inner_dist_section',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);

$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_inner_dist_section',
		array(
			'label' => __('Distrubution Overview', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);


// overview loop 


for ($i = 1; $i <= 4; $i++) {

	$wp_customize->add_setting(
		'cricket_league_pro_overview_image' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'cricket_league_pro_overview_image' . $i,
			array(
				'label' => __('Overview ' . $i . ' Image', 'cricket-league-pro'),
				'section' => 'cricket_league_pro_aboutus_inner',
				'settings' => 'cricket_league_pro_overview_image' . $i,
			)
		)
	);

	$wp_customize->add_setting(
		'cricket_league_pro_overview_count' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control(
		'cricket_league_pro_overview_count' . $i,
		array(
			'label' => __('Overview ' . $i . ' Count', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'setting' => 'cricket_league_pro_overview_count' . $i,
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'cricket_league_pro_overview_title' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'cricket_league_pro_overview_title' . $i,
		array(
			'label' => __('Overview ' . $i . ' Title', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'type' => 'text'
		)
	);
}

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_overview_count_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_overview_count_bgcolor',
		array(
			'label' => __('Distribution Section Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_inner_overview_count_bgcolor',
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_dist_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_dist_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_dist_settings',
		array(
			'label' => __('Distrubution Section Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_dist_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_dist_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Overview Title Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_dist_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_dist_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Overview Title Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_dist_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_dist_font_size',
	array(
		'label' => __('Overview Title Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_inner_dist_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_dist_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_dist_color',
		array(
			'label' => __('Overview Title Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_inner_dist_color',
		)
	)
);





$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_overview_count_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_overview_count_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_overview_count_settings',
		array(
			'label' => __('Overview Count Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_overview_count_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_overview_count_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Overview Count Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_overview_count_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_overview_count_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Overview CountFont Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_overview_count_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_overview_count_font_size',
	array(
		'label' => __('Overview Count Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_inner_overview_count_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_overview_count_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_overview_count_color',
		array(
			'label' => __('Overview Count Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_inner_overview_count_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_about_inner_best',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_inner_best',
		array(
			'label' => __('The Best Section', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_best_bgimg',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',

	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_best_bgimg',
		array(
			'label' => __('Best Section Background Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_inner_best_bgimg'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_best_img',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',

	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_best_img',
		array(
			'label' => __('Best Section Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_inner_best_img'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_best_heading_tagline',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_best_heading_tagline',
	array(
		'label' => __('Best Section Heading Tagline', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_best_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_best_heading',
	array(
		'label' => __('Best Section Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_best_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_best_text',
	array(
		'label' => __('Best Section Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);






// The brand section 


$wp_customize->add_setting(
	'cricket_league_pro_about_inner_brand',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_inner_brand',
		array(
			'label' => __('The Brand Section', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);





$wp_customize->add_setting(
	'cricket_league_pro_brand_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_brand_heading',
	array(
		'label' => __('Section Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_brand_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_brand_text',
	array(
		'label' => __('Section Text', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_about_inner_brand_list',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_brand_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_brand_image',
		array(
			'label' => __('Section Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_brand_image',
		)
	)
);


$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_inner_brand_list',
		array(
			'label' => __('List Loop', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_brand_list_length',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cricket_league_pro_brand_list_length',
	array(
		'label' => __('Number Of List Points', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'number'
	)
);

$licount = get_theme_mod('cricket_league_pro_brand_list_length');

for ($i = 1; $i <= $licount; $i++) {
	$wp_customize->add_setting(
		'cricket_league_pro_brand_list_' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'cricket_league_pro_brand_list_' . $i,
		array(
			'label' => __('List Point' . $i, 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'setting' => 'cricket_league_pro_brand_list_' . $i,
			'type' => 'text'
		)
	);
}



// security section 
$wp_customize->add_setting(
	'cricket_league_pro_about_inner_security_section',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);

$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_inner_security_section',
		array(
			'label' => __('Security Section', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_security_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_security_heading',
	array(
		'label' => __('Section Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_security_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_security_text',
	array(
		'label' => __('Section Text 1', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_security1_text',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_security1_text',
	array(
		'label' => __('Section Text 2', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_security_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_security_image',
		array(
			'label' => __('Section Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_security_image',
		)
	)
);

// Client and partners 
$wp_customize->add_setting(
	'cricket_league_pro_about_inner_client_section',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);

$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_inner_client_section',
		array(
			'label' => __('Client and Partners', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_client_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_client_heading',
	array(
		'label' => __('Section Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_client_length',
	array(
		'default' => '5',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'cricket_league_pro_client_length',
	array(
		'label' => __('Number Of List Points', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'type' => 'number'
	)
);

$ClientCount = get_theme_mod('cricket_league_pro_client_length');

for ($i = 1; $i <= $ClientCount; $i++) {

	$wp_customize->add_setting(
		'cricket_league_pro_client_image' . $i,
		array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'cricket_league_pro_client_image' . $i,
			array(
				'label' => __('Client Logo' . $i, 'cricket-league-pro'),
				'section' => 'cricket_league_pro_aboutus_inner',
				'settings' => 'cricket_league_pro_client_image' . $i,
			)
		)
	);

}



$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_headings_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_headings_settings',
		array(
			'label' => __('About US Page Headings Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_headings_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_headings_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Headings Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_headings_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_headings_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Headings Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_headings_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_headings_font_size',
	array(
		'label' => __('Headings Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_inner_headings_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_headings_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_headings_color',
		array(
			'label' => __('Headings Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_inner_headings_color',
		)
	)
);





$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_text_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_text_settings',
		array(
			'label' => __('About US Page Text Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_text_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_text_font_weight',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_text_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_text_font_family',
	array(
		'section' => 'cricket_league_pro_aboutus_inner',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_text_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_aboutus_inner_text_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_aboutus_inner',
		'setting' => 'cricket_league_pro_aboutus_inner_text_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_aboutus_inner_text_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_aboutus_inner_text_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_aboutus_inner',
			'settings' => 'cricket_league_pro_aboutus_inner_text_color',
		)
	)
);



// get a quote page 


$wp_customize->add_section(
	'cricket_league_pro_getaquote_page',
	array(
		'title' => __('Get A Quote Page Settings', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_heading_tagline_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_heading_tagline_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_heading_tagline_settings',
		array(
			'label' => __('Heading Tagline Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_page_heading_tag',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_page_heading_tag',
	array(
		'label' => __('Heading Tagline', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_heading_tagline_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_heading_tagline_font_weight',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_heading_tagline_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_heading_tagline_font_family',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_heading_tagline_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_heading_tagline_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'setting' => 'cricket_league_pro_getaquote_heading_tagline_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_getaquote_heading_tagline_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_heading_tagline_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquote_heading_tagline_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_heading_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_heading_settings',
		array(
			'label' => __('Heading Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_page_heading',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_page_heading',
	array(
		'label' => __('Page Heading', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_getaquote_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_heading_font_family',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'setting' => 'cricket_league_pro_getaquote_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_getaquote_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquote_heading_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_about_inner_get_in_touch',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);

$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_about_inner_get_in_touch',
		array(
			'label' => __('Get In Touch Options', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page'
		)
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_getaquote_icon1',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',

	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_icon1',
		array(
			'label' => __('Option 1 Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquote_icon1'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_telephone',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_telephone',
	array(
		'label' => __('Option 1 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_telephone_number',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_telephone_number',
	array(
		'label' => __('Option 1 Value 2', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_getaquote_telephone_number2',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_telephone_number2',
	array(
		'label' => __('Option 1 Value 1', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_icon2',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',

	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_icon2',
		array(
			'label' => __('Option 2 Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquote_icon2'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_email',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_email',
	array(
		'label' => __('Option 2 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_getaquote_email_id',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_email_id',
	array(
		'label' => __('Option 2 Value', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_getaquote_icon3',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',

	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_icon3',
		array(
			'label' => __('Option 3 Image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquote_icon3'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_address',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_address',
	array(
		'label' => __('Option 3 Title', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_getaquote_office_address',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control(
	'cricket_league_pro_getaquote_office_address',
	array(
		'label' => __('Option 3 Value', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'type' => 'text'
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_option_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_option_title_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_option_title_settings',
		array(
			'label' => __('Get In Touch OPtions Typography Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_getaquote_option_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_option_title_font_weight',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Title Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_option_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_option_title_font_family',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Title Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_option_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_option_title_font_size',
	array(
		'label' => __('Title Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'setting' => 'cricket_league_pro_getaquote_option_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_getaquote_option_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_option_title_color',
		array(
			'label' => __('Title Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquote_option_title_color',
		)
	)
);




$wp_customize->add_setting(
	'cricket_league_pro_getaquote_option_content_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_option_content_font_weight',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Option Content Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_option_content_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_option_content_font_family',
	array(
		'section' => 'cricket_league_pro_getaquote_page',
		'label' => __('Option Content Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquote_option_content_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_getaquote_option_content_font_size',
	array(
		'label' => __('Option Content Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_getaquote_page',
		'setting' => 'cricket_league_pro_getaquote_option_content_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_getaquote_option_content_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_getaquote_option_content_color',
		array(
			'label' => __('Option Content Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquote_option_content_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_getaquotetion_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_getaquotetion_bgcolor',
		array(
			'label' => __('Option BG Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_getaquote_page',
			'settings' => 'cricket_league_pro_getaquotetion_bgcolor',
		)
	)
);


// get a Quote form 

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



// Support page 


$wp_customize->add_section(
	'cricket_league_pro_contactus_page',
	array(
		'title' => __('Support Page Settings', 'cricket-league-pro'),
		'panel' => 'cricket_league_pro_panel_id',
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_contactus_page_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);

// $wp_customize->add_control(
// 	new WP_Customize_Color_Control(
// 		$wp_customize,
// 		'cricket_league_pro_contactus_page_bgcolor',
// 		array(
// 			'label' => __('Background Color', 'cricket-league-pro'),
// 			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'cricket-league-pro'),
// 			'section' => 'cricket_league_pro_contactus_page',
// 			'settings' => 'cricket_league_pro_contactus_page_bgcolor',
// 		)
// 	)
// );
// $wp_customize->add_setting(
// 	'cricket_league_pro_contactus_page_bgimage',
// 	array(
// 		'default' => '',
// 		'sanitize_callback' => 'esc_url_raw',

// 	)
// );
// $wp_customize->add_control(
// 	new WP_Customize_Image_Control(
// 		$wp_customize,
// 		'cricket_league_pro_contactus_page_bgimage',
// 		array(
// 			'label' => __('Background image', 'cricket-league-pro'),
// 			'section' => 'cricket_league_pro_contactus_page',
// 			'settings' => 'cricket_league_pro_contactus_page_bgimage'
// 		)
// 	)
// );
// $wp_customize->add_setting(
// 	'cricket_league_pro_contactus_page_bg_attachment',
// 	array(
// 		'default' => '',
// 		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
// 	)
// );
// $wp_customize->add_control(
// 	'cricket_league_pro_contactus_page_bg_attachment',
// 	array(
// 		'type' => 'radio',
// 		'label' => __('Choose image option', 'cricket-league-pro'),
// 		'section' => 'cricket_league_pro_contactus_page',
// 		'choices' => array(
// 			'vw-fixed' => __('Fixed', 'cricket-league-pro'),
// 			'vw-scroll' => __('Scroll', 'cricket-league-pro'),
// 		)
// 	)
// );



$wp_customize->add_setting(
	'cricket_league_pro_support_page_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_heading_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_support_page_heading_settings',
		array(
			'label' => __('Page Headings Typography Setting(h2)', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_contactus_page'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_support_page_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_support_page_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_contactus_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_support_page_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_support_page_heading_font_family',
	array(
		'section' => 'cricket_league_pro_contactus_page',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_support_page_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_support_page_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_contactus_page',
		'setting' => 'cricket_league_pro_support_page_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_support_page_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_support_page_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_contactus_page',
			'settings' => 'cricket_league_pro_support_page_heading_color',
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_support_page_sub_heading_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_form_counter_sub_heading_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_support_page_sub_heading_settings',
		array(
			'label' => __('Page Sub-headings Typography Setting(h4)', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_contactus_page'
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_support_page_sub_heading_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_support_page_sub_heading_font_weight',
	array(
		'section' => 'cricket_league_pro_contactus_page',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_support_page_sub_heading_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_support_page_sub_heading_font_family',
	array(
		'section' => 'cricket_league_pro_contactus_page',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_support_page_sub_heading_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_support_page_sub_heading_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_contactus_page',
		'setting' => 'cricket_league_pro_support_page_sub_heading_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_support_page_sub_heading_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_support_page_sub_heading_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_contactus_page',
			'settings' => 'cricket_league_pro_support_page_sub_heading_color',
		)
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
			'label' => __('Location And Form Section', 'cricket-league-pro'),
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
		'label' => __('Section Heading', 'cricket-league-pro'),
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
		'label' => __('Section Description', 'cricket-league-pro'),
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
			'label' => __('Background image ', 'cricket-league-pro'),
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
			'label' => __('Support Page Text/para Typography Setting', 'cricket-league-pro'),
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
		'label' => __('Font Weight', 'cricket-league-pro'),
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
		'label' => __('Font Family', 'cricket-league-pro'),
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
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
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
			'label' => __('Color', 'cricket-league-pro'),
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
			'label' => __('Location Settings', 'cricket-league-pro'),
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
		'label' => __('Enter Latitude', 'cricket-league-pro'),
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
		'label' => __('Enter Longitude', 'cricket-league-pro'),
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
			'label' => __('Form Shortcode', 'cricket-league-pro'),
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
		'label' => __('Contact Us Form Shortcode', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_contactus_page',
		'type' => 'text'
	)
);



// Support page end



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
	'cricket_league_pro_post_general_settings__font_size',
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
		'cricket_league_pro_post_general_settings_page_text_color',
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
	'cricket_league_pro_404_page_bg_attachment',
	array(
		'default' => '',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_404_page_bg_attachment',
	array(
		'type' => 'radio',
		'label' => __('Choose image option', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_404_page',
		'choices' => array(
			'vw-fixed' => __('Fixed', 'cricket-league-pro'),
			'vw-scroll' => __('Scroll', 'cricket-league-pro'),
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
