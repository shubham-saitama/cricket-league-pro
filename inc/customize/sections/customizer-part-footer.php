<?php

$wp_customize->add_section(
    'cricket_league_pro_footer_sec',
    array(
        'title' => __('Footer Settings', 'cricket-league-pro'),
        'description' => __('Add Get In Tech setting here.', 'cricket-league-pro'),
        'panel' => 'cricket_league_pro_panel_id',
    )
);

// $wp_customize->add_setting(
//     'cricket_league_pro_footer_enable',
//     array(
//         'default' => 'Enable',
//         'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
//     )
// );
// $wp_customize->add_control(
//     'cricket_league_pro_footer_enable',
//     array(
//         'type' => 'radio',
//         'label' => __('Do you want this section', 'cricket-league-pro'),
//         'section' => 'cricket_league_pro_footer_sec',
//         'choices' => array(
//             'Enable' => __('Enable', 'cricket-league-pro'),
//             'Disable' => __('Disable', 'cricket-league-pro')
//         ),
//     )
// );
$wp_customize->selective_refresh->add_partial(
    'cricket_league_pro_footer_enable',
    array(
        'selector' => '#footer .container',
        'render_callback' => 'cricket_league_pro_footer_sec',
    )
);
$wp_customize->add_setting(
    'cricket_league_pro_footer_bgcolor',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'cricket_league_pro_footer_bgcolor',
        array(
            'label' => __('Background Color', 'cricket-league-pro'),
            'section' => 'cricket_league_pro_footer_sec',
            'settings' => 'cricket_league_pro_footer_bgcolor',
        )
    )
);

$wp_customize->add_setting(
	'cricket_league_pro_footer_bg_image',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_footer_bg_image',
		array(
			'label' => __('Footer Background Image', 'cricket-league-pro'),
            'description' => __('Add an image atleast 1920x768 px'),
			'section' => 'cricket_league_pro_footer_sec',
			'settings' => 'cricket_league_pro_footer_bg_image'
		)
		
	)
);



$wp_customize->add_setting(
	'cricket_league_pro_footer_title_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_footer_title_settings',  
		array(
			'label' => __('Footer Text Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_footer_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_footer_title_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_footer_title_font_weight',
	array(
		'section' => 'cricket_league_pro_footer_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_footer_title_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_footer_title_font_family',
	array(
		'section' => 'cricket_league_pro_footer_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_footer_title_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_footer_title_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_footer_sec',
		'setting' => 'cricket_league_pro_footer_title_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_footer_title_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_footer_title_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_footer_sec',
			'settings' => 'cricket_league_pro_footer_title_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_footer_headings_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_footer_headings_settings',
		array(
			'label' => __('Footer Headings Setting', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_footer_sec'
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_footer_headings_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_footer_headings_font_weight',
	array(
		'section' => 'cricket_league_pro_footer_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_footer_headings_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_footer_headings_font_family',
	array(
		'section' => 'cricket_league_pro_footer_sec',
		'label' => __('Font Family', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_footer_headings_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_footer_headings_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' =>__('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_footer_sec',
		'setting' => 'cricket_league_pro_footer_headings_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_footer_headings_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_footer_headings_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_footer_sec',
			'settings' => 'cricket_league_pro_footer_headings_color',
		)
	)
);


$wp_customize->add_setting(
	'cricket_league_pro_footer_newsletter_button_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);
$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_footer_newsletter_button_settings',
		array(
			'label' => __('Footer Newsletter Button Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_footer_sec'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_footer_newsletter_button_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_footer_newsletter_button_font_weight',
	array(
		'section' => 'cricket_league_pro_footer_sec',
		'label' => __('Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_footer_newsletter_button_font_family',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_footer_newsletter_button_font_family',
	array(
		'section' => 'cricket_league_pro_footer_sec',
		'label' => __('Text Fonts', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_array,
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_footer_newsletter_button_font_size',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_footer_newsletter_button_font_size',
	array(
		'label' => __('Font Size', 'cricket-league-pro'),
		'description' => __('Add font size in px', 'cricket-league-pro'),
		'section' => 'cricket_league_pro_footer_sec',
		'setting' => 'cricket_league_pro_footer_newsletter_button_font_size',
		'type' => 'number'
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_footer_newsletter_button_color',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_footer_newsletter_button_color',
		array(
			'label' => __('Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_footer_sec',
			'settings' => 'cricket_league_pro_footer_newsletter_button_color',
		)
	)
);
$wp_customize->add_setting(
	'cricket_league_pro_footer_newsletter_button_bgcolor',
	array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'cricket_league_pro_footer_newsletter_button_bgcolor',
		array(
			'label' => __('Background Color', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_footer_sec',
			'settings' => 'cricket_league_pro_footer_newsletter_button_bgcolor',
		)
	)
);
$wp_customize->add_setting(
    'cricket_league_pro_footer_copyright_bg',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'cricket_league_pro_footer_copyright_bg',
        array(
            'label' => __('Copyright BG Color', 'cricket-league-pro'),
            'section' => 'cricket_league_pro_footer_sec',
            'settings' => 'cricket_league_pro_footer_copyright_bg',
        )
    )
);

$wp_customize->add_setting(
	'cricket_league_pro_footer_news_icon',
	array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_pro_switch_sanitization'
	)
);

$wp_customize->add_control(
	new cricket_league_pro_Toggle_Switch_Custom_control(
		$wp_customize,
		'cricket_league_pro_footer_news_icon',
		array(
			'label' => esc_html__('Newsletter Icon Enable/Disable', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_footer_sec'
		)
	)
);

