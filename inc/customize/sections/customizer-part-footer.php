<?php

$wp_customize->add_section(
    'home_automation_pro_footer_sec',
    array(
        'title' => __('Footer Settings', 'cricket-league-pro'),
        'description' => __('Add Get In Tech setting here.', 'cricket-league-pro'),
        'panel' => 'home_automation_pro_panel_id',
    )
);

$wp_customize->selective_refresh->add_partial(
    'home_automation_pro_footer_enable',
    array(
        'selector' => '#footer .container',
        'render_callback' => 'home_automation_pro_footer_sec',
    )
);
$wp_customize->add_setting(
    'home_automation_pro_footer_bgcolor',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'home_automation_pro_footer_bgcolor',
        array(
            'label' => __('Background Color', 'cricket-league-pro'),
            'section' => 'home_automation_pro_footer_sec',
            'settings' => 'home_automation_pro_footer_bgcolor',
        )
    )
);

$wp_customize->add_setting(
	'home_automation_pro_footer_bg_image_one',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'home_automation_pro_footer_bg_image_one',
		array(
			'label' => __('Footer Background Image', 'cricket-league-pro'),
            'description' => __('Add an image atleast 1920x768 px'),
			'section' => 'home_automation_pro_footer_sec',
			'settings' => 'home_automation_pro_footer_bg_image_one'
		)
		
	)
);
$wp_customize->add_setting(
	'home_automation_pro_position_fixed',
	array(
	  'default' => 'fixed',
	  'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
  );
  $wp_customize->add_control(
	'home_automation_pro_position_fixed',
	array(
	  'type' => 'radio',
	  'label' => __('Choose Footer Position', 'cricket-league-pro'),
	  'section' => 'home_automation_pro_footer_sec',
	  'choices' => array(
		'fixed' => __('Fixed', 'cricket-league-pro'),
		'scroll' => __('Scroll', 'cricket-league-pro')
	  ),
	)
  );


$wp_customize->add_setting(
	'home_automation_pro_footer_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'home_automation_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'home_automation_pro_footer_title_settings',  
		array(
			'label' => __('Footer Text Setting', 'cricket-league-pro'),
			'section' => 'home_automation_pro_footer_sec'
		)
	)
);


$wp_customize->add_setting(
	'home_automation_pro_footer_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_footer_title_font_weight',
	array(
		'section' => 'home_automation_pro_footer_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_footer_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_footer_title_font_family',
	array(
		'section' => 'home_automation_pro_footer_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_footer_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_footer_title_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'home_automation_pro_footer_sec',
		'setting' => 'home_automation_pro_footer_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'home_automation_pro_footer_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_footer_title_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'home_automation_pro_footer_sec',
			'settings' => 'home_automation_pro_footer_title_color',
		)
	)
);


$wp_customize->add_setting(
	'home_automation_pro_footer_headings_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'home_automation_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'home_automation_pro_footer_headings_settings',
		array(
			'label' => __('Footer Headings Setting', 'cricket-league-pro'),
			'section' => 'home_automation_pro_footer_sec'
		)
	)
);


$wp_customize->add_setting(
	'home_automation_pro_footer_headings_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_footer_headings_font_weight',
	array(
		'section' => 'home_automation_pro_footer_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_footer_headings_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_footer_headings_font_family',
	array(
		'section' => 'home_automation_pro_footer_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_footer_headings_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_footer_headings_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'home_automation_pro_footer_sec',
		'setting' => 'home_automation_pro_footer_headings_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'home_automation_pro_footer_headings_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_footer_headings_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'home_automation_pro_footer_sec',
			'settings' => 'home_automation_pro_footer_headings_color',
		)
	)
);


$wp_customize->add_setting(
	'home_automation_pro_footer_newsletter_button_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'home_automation_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'home_automation_pro_footer_newsletter_button_settings',
		array(
			'label' => __('Footer Newsletter Button Settings', 'cricket-league-pro'),
			'section' => 'home_automation_pro_footer_sec'
		)
	)
);

$wp_customize->add_setting(
	'home_automation_pro_footer_newsletter_button_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_footer_newsletter_button_font_weight',
	array(
		'section' => 'home_automation_pro_footer_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_footer_newsletter_button_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'home_automation_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'home_automation_pro_footer_newsletter_button_font_family',
	array(
		'section' => 'home_automation_pro_footer_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'home_automation_pro_footer_newsletter_button_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'home_automation_pro_footer_newsletter_button_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'home_automation_pro_footer_sec',
		'setting' => 'home_automation_pro_footer_newsletter_button_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'home_automation_pro_footer_newsletter_button_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_footer_newsletter_button_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'home_automation_pro_footer_sec',
			'settings' => 'home_automation_pro_footer_newsletter_button_color',
		)
	)
);
$wp_customize->add_setting(
	'home_automation_pro_footer_newsletter_button_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'home_automation_pro_footer_newsletter_button_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'section' => 'home_automation_pro_footer_sec',
			'settings' => 'home_automation_pro_footer_newsletter_button_bgcolor',
		)
	)
);
$wp_customize->add_setting(
    'home_automation_pro_footer_copyright_bg',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'home_automation_pro_footer_copyright_bg',
        array(
            'label' => __('Copyright BG Color', 'cricket-league-pro'),
            'section' => 'home_automation_pro_footer_sec',
            'settings' => 'home_automation_pro_footer_copyright_bg',
        )
    )
);

$wp_customize->add_setting(
	'home_automation_pro_footer_news_icon',
	array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'home_automation_pro_switch_sanitization'
	)
);

$wp_customize->add_control(
	new home_automation_pro_Toggle_Switch_Custom_control(
		$wp_customize,
		'home_automation_pro_footer_news_icon',
		array(
			'label' => esc_html__('Newsletter Icon Enable/Disable', 'cricket-league-pro'),
			'section' => 'home_automation_pro_footer_sec'
		)
	)
);

