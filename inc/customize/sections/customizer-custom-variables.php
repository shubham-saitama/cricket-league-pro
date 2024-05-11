<?php
$wp_customize->add_section('cricket_league_pro_section_ordering_settings', array(
  'title' => __('Section Ordering', 'cricket-league-pro'),
  'description' => __('Section Ordering.', 'cricket-league-pro'),
  'panel' => 'cricket_league_pro_panel_id',
)
);
$wp_customize->add_setting(
  'cricket_league_pro_section_ordering_settings_repeater',
  array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  new cricket_league_pro_Repeater_Custom_Control(
    $wp_customize,
    'cricket_league_pro_section_ordering_settings_repeater',
    array(
      'label' => __('Section Reordering', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_section_ordering_settings',
      'button_labels' => array(
        'add' => __('Add Row', 'cricket-league-pro'),
      )
    )
  )
);
$wp_customize->add_setting(
  'cricket_league_pro_section_ordering_padding_settings',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_section_ordering_padding_settings',
    array(
      'label' => __('Section Padding Top Settings', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_section_ordering_settings'
    )
  )
);

$section_order = explode(',', get_theme_mod('cricket_league_pro_section_ordering_settings_repeater'));

foreach ($section_order as $key => $value) {

  if ($value != '') {
    $wp_customize->add_setting('cricket_league_pro_' . $value . '_padding_top', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    )
    );
    $wp_customize->add_control('cricket_league_pro_' . $value . '_padding_top', array(
      'label' => __($value, ' Padding Top', 'cricket-league-pro'),
      'description' => __('Add Padding Top in Pixels', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_section_ordering_settings',
      'setting' => 'cricket_league_pro_' . $value . '_padding_top',
      'type' => 'number'
    )
    );
  }
}




//General Color Pallete
$wp_customize->add_section('cricket_league_pro_color_pallette', array(
  'title' => __('Typography / General settings', 'cricket-league-pro'),
  'description' => __('Typography settings', 'cricket-league-pro'),
  'panel' => 'cricket_league_pro_panel_id',
)
);


$wp_customize->add_setting(
  'cricket_league_pro_theme_layout_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_theme_layout_section_ct_pallete',
    array(
      'label' => __('Theme Layout ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting(
  'cricket_league_pro_radio_boxed_full_layout',
  array(
    'default' => 'full-Width',
    'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
  )
);
$wp_customize->add_control(
  'cricket_league_pro_radio_boxed_full_layout',
  array(
    'type' => 'radio',
    'label' => __('Choose Boxed or Full Width Layout', 'cricket-league-pro'),
    'section' => 'cricket_league_pro_color_pallette',
    'choices' => array(
      'full-Width' => __('Full Width', 'cricket-league-pro'),
      'boxed' => __('Boxed', 'cricket-league-pro')
    ),
  )
);

$wp_customize->add_setting(
  'cricket_league_pro_radio_boxed_full_layout_value',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'cricket_league_pro_radio_boxed_full_layout_value',
  array(
    'label' => __('Add Boxed layout Width Here', 'cricket-league-pro'),
    'description' => __('Value should be less than 1140px', 'cricket-league-pro'),
    'section' => 'cricket_league_pro_color_pallette',
    'setting' => 'cricket_league_pro_radio_boxed_full_layout_value',
    'type' => 'number'
  )
);


$wp_customize->add_setting(
  'cricket_league_pro_genral_heading_decoration_section',
  array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_pro_switch_sanitization'
  )
);
$wp_customize->add_control(
  new cricket_league_pro_Toggle_Switch_Custom_control(
    $wp_customize,
    'cricket_league_pro_genral_heading_decoration_section',
    array(
      'label' => esc_html__('Heading Decoration Disable', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);
$wp_customize->add_setting(
  'cricket_league_pro_image_below_heading',
  array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  )
);
$wp_customize->add_control(
  new WP_Customize_Image_Control(
    $wp_customize,
    'cricket_league_pro_image_below_heading',
    array(
      'label' => __('Heading Decoration Image', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette',
      'settings' => 'cricket_league_pro_image_below_heading'
    )
  )
);




//This is Button Text FontFamily picker setting
$wp_customize->add_setting(
  'cricket_league_pro_body_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_body_section_ct_pallete',
    array(
      'label' => __('Body Typography ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting('cricket_league_pro_body_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control(
  'cricket_league_pro_body_font_family',
  array(
    'section' => 'cricket_league_pro_color_pallette',
    'label' => __('Body Font family', 'cricket-league-pro'),
    'type' => 'select',
    'choices' => $font_array,
  )
);
$wp_customize->add_setting(
  'cricket_league_pro_body_font_size',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'cricket_league_pro_body_font_size',
  array(
    'label' => __('font size in px', 'cricket-league-pro'),
    'section' => 'cricket_league_pro_color_pallette',
    'setting' => 'cricket_league_pro_body_font_size',
    'type' => 'number'
  )
);
$wp_customize->add_setting('cricket_league_pro_body_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_pro_body_color', array(
  'label' => __('Body color', 'cricket-league-pro'),
  'section' => 'cricket_league_pro_color_pallette',
  'settings' => 'cricket_league_pro_body_color',
)
));

$wp_customize->add_setting(
  'cricket_league_pro_h1_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_h1_section_ct_pallete',
    array(
      'label' => __('H1 Typography ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting('cricket_league_pro_h1_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control(
  'cricket_league_pro_h1_font_family',
  array(
    'section' => 'cricket_league_pro_color_pallette',
    'label' => __('H1', 'cricket-league-pro'),
    'type' => 'select',
    'choices' => $font_array,
  )
);
$wp_customize->add_setting(
  'cricket_league_pro_h1_font_size',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'cricket_league_pro_h1_font_size',
  array(
    'label' => __('H1 font size in px', 'cricket-league-pro'),
    'section' => 'cricket_league_pro_color_pallette',
    'setting' => 'cricket_league_pro_h1_font_size',
    'type' => 'number'
  )
);

$wp_customize->add_setting(
	'cricket_league_pro_h1_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_h1_font_weight',
	array(
		'section' => 'cricket_league_pro_color_pallette',
		'label' => __('H1 Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);
$wp_customize->add_setting('cricket_league_pro_h1_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_pro_h1_color', array(
  'label' => __('H1 color', 'cricket-league-pro'),
  'section' => 'cricket_league_pro_color_pallette',
  'settings' => 'cricket_league_pro_h1_color',
)
));

$wp_customize->add_setting(
  'cricket_league_pro_h2_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_h2_section_ct_pallete',
    array(
      'label' => __('H2 Typography ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting('cricket_league_pro_h2_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control(
  'cricket_league_pro_h2_font_family',
  array(
    'section' => 'cricket_league_pro_color_pallette',
    'label' => __('H2', 'cricket-league-pro'),
    'type' => 'select',
    'choices' => $font_array,
  )
);
$wp_customize->add_setting(
  'cricket_league_pro_h2_font_size',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'cricket_league_pro_h2_font_size',
  array(
    'label' => __('H2 font size in px', 'cricket-league-pro'),
    'section' => 'cricket_league_pro_color_pallette',
    'setting' => 'cricket_league_pro_h2_font_size',
    'type' => 'number'
  )
);
$wp_customize->add_setting(
	'cricket_league_pro_h2_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_h2_font_weight',
	array(
		'section' => 'cricket_league_pro_color_pallette',
		'label' => __('H2 Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);
$wp_customize->add_setting('cricket_league_pro_h2_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_pro_h2_color', array(
  'label' => __('H2 color', 'cricket-league-pro'),
  'section' => 'cricket_league_pro_color_pallette',
  'settings' => 'cricket_league_pro_h2_color',
)
));

$wp_customize->add_setting(
  'cricket_league_pro_h3_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_h3_section_ct_pallete',
    array(
      'label' => __('H3 Typography ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting('cricket_league_pro_h3_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control(
  'cricket_league_pro_h3_font_family',
  array(
    'section' => 'cricket_league_pro_color_pallette',
    'label' => __('H3', 'cricket-league-pro'),
    'type' => 'select',
    'choices' => $font_array,
  )
);
$wp_customize->add_setting(
  'cricket_league_pro_h3_font_size',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'cricket_league_pro_h3_font_size',
  array(
    'label' => __('H3 font size in px', 'cricket-league-pro'),
    'section' => 'cricket_league_pro_color_pallette',
    'setting' => 'cricket_league_pro_h3_font_size',
    'type' => 'number'
  )
);
$wp_customize->add_setting(
	'cricket_league_pro_h3_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_h3_font_weight',
	array(
		'section' => 'cricket_league_pro_color_pallette',
		'label' => __('H3 Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);
$wp_customize->add_setting('cricket_league_pro_h3_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_pro_h3_color', array(
  'label' => __('H3 color', 'cricket-league-pro'),
  'section' => 'cricket_league_pro_color_pallette',
  'settings' => 'cricket_league_pro_h3_color',
)
));

$wp_customize->add_setting(
  'cricket_league_pro_h4_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_h4_section_ct_pallete',
    array(
      'label' => __('H4 Typography ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting('cricket_league_pro_h4_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control(
  'cricket_league_pro_h4_font_family',
  array(
    'section' => 'cricket_league_pro_color_pallette',
    'label' => __('H4', 'cricket-league-pro'),
    'type' => 'select',
    'choices' => $font_array,
  )
);
$wp_customize->add_setting(
  'cricket_league_pro_h4_font_size',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'cricket_league_pro_h4_font_size',
  array(
    'label' => __('H4 font size in px', 'cricket-league-pro'),
    'section' => 'cricket_league_pro_color_pallette',
    'setting' => 'cricket_league_pro_h4_font_size',
    'type' => 'number'
  )
);
$wp_customize->add_setting(
	'cricket_league_pro_h4_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_h4_font_weight',
	array(
		'section' => 'cricket_league_pro_color_pallette',
		'label' => __('H4 Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);
$wp_customize->add_setting('cricket_league_pro_h4_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_pro_h4_color', array(
  'label' => __('H4 color', 'cricket-league-pro'),
  'section' => 'cricket_league_pro_color_pallette',
  'settings' => 'cricket_league_pro_h4_color',
)
));

$wp_customize->add_setting(
  'cricket_league_pro_h5_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_h5_section_ct_pallete',
    array(
      'label' => __('H5 Typography ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting('cricket_league_pro_h5_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control(
  'cricket_league_pro_h5_font_family',
  array(
    'section' => 'cricket_league_pro_color_pallette',
    'label' => __('H5', 'cricket-league-pro'),
    'type' => 'select',
    'choices' => $font_array,
  )
);
$wp_customize->add_setting(
  'cricket_league_pro_h5_font_size',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'cricket_league_pro_h5_font_size',
  array(
    'label' => __('H5 font size in px', 'cricket-league-pro'),
    'section' => 'cricket_league_pro_color_pallette',
    'setting' => 'cricket_league_pro_h5_font_size',
    'type' => 'number'
  )
);
$wp_customize->add_setting(
	'cricket_league_pro_h5_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_h5_font_weight',
	array(
		'section' => 'cricket_league_pro_color_pallette',
		'label' => __('H5 Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);
$wp_customize->add_setting('cricket_league_pro_h5_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_pro_h5_color', array(
  'label' => __('H5 color', 'cricket-league-pro'),
  'section' => 'cricket_league_pro_color_pallette',
  'settings' => 'cricket_league_pro_h5_color',
)
));

$wp_customize->add_setting(
  'cricket_league_pro_h6_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_h6_section_ct_pallete',
    array(
      'label' => __('H6 Typography ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting('cricket_league_pro_h6_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control(
  'cricket_league_pro_h6_font_family',
  array(
    'section' => 'cricket_league_pro_color_pallette',
    'label' => __('H6', 'cricket-league-pro'),
    'type' => 'select',
    'choices' => $font_array,
  )
);
$wp_customize->add_setting(
  'cricket_league_pro_h6_font_size',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'cricket_league_pro_h6_font_size',
  array(
    'label' => __('H6 font size in px', 'cricket-league-pro'),
    'section' => 'cricket_league_pro_color_pallette',
    'setting' => 'cricket_league_pro_h6_font_size',
    'type' => 'number'
  )
);
$wp_customize->add_setting(
	'cricket_league_pro_h6_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_h6_font_weight',
	array(
		'section' => 'cricket_league_pro_color_pallette',
		'label' => __('h6 Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);
$wp_customize->add_setting('cricket_league_pro_h6_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_pro_h6_color', array(
  'label' => __('H6 color', 'cricket-league-pro'),
  'section' => 'cricket_league_pro_color_pallette',
  'settings' => 'cricket_league_pro_h6_color',
)
));

$wp_customize->add_setting(
  'cricket_league_pro_para_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_para_section_ct_pallete',
    array(
      'label' => __('Paragraph Typography ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

//paragarph font family
$wp_customize->add_setting('cricket_league_pro_paragarpah_font_family', array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'sanitize_text_field'
)
);
$wp_customize->add_control(
  'cricket_league_pro_paragarpah_font_family',
  array(
    'section' => 'cricket_league_pro_color_pallette',
    'label' => __('Paragraph', 'cricket-league-pro'),
    'type' => 'select',
    'choices' => $font_array,
  )
);
$wp_customize->add_setting(
  'cricket_league_pro_para_font_size',
  array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);
$wp_customize->add_control(
  'cricket_league_pro_para_font_size',
  array(
    'label' => __('Paragraph font size in px', 'cricket-league-pro'),
    'section' => 'cricket_league_pro_color_pallette',
    'setting' => 'cricket_league_pro_para_font_size',
    'type' => 'number'
  )
);
$wp_customize->add_setting(
	'cricket_league_pro_para_font_weight',
	array(
		'default' => '',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'cricket_league_pro_sanitize_choices'
	)
);
$wp_customize->add_control(
	'cricket_league_pro_para_font_weight',
	array(
		'section' => 'cricket_league_pro_color_pallette',
		'label' => __('Paragraph Font Weight', 'cricket-league-pro'),
		'type' => 'select',
		'choices' => $font_weight_array,
	)
);
$wp_customize->add_setting('cricket_league_pro_para_color', array(
  'default' => '',
  'sanitize_callback' => 'sanitize_hex_color'
)
);
$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'cricket_league_pro_para_color',
    array(
      'label' => __('Para color', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette',
      'settings' => 'cricket_league_pro_para_color',
    )
  )
);

$wp_customize->add_setting(
  'cricket_league_pro_global_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_global_section_ct_pallete',
    array(
      'label' => __('Global Color ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting(
  'cricket_league_pro_primary_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_primary_section_ct_pallete',
    array(
      'label' => __('Primary ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting('cricket_league_pro_hi_first_color', array(
  'default' => '#121212',
  'sanitize_callback' => 'sanitize_hex_color'
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_pro_hi_first_color', array(
  'label' => __('Primary Color', 'cricket-league-pro'),
  'section' => 'cricket_league_pro_color_pallette',
  'settings' => 'cricket_league_pro_hi_first_color',
)
));

$wp_customize->add_setting(
  'cricket_league_pro_secondry_section_ct_pallete',
  array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'cricket_league_pro_text_sanitization'
  )
);
$wp_customize->add_control(
  new VW_Themes_Seperator_custom_Control(
    $wp_customize,
    'cricket_league_pro_secondry_section_ct_pallete',
    array(
      'label' => __('Secondry ', 'cricket-league-pro'),
      'section' => 'cricket_league_pro_color_pallette'
    )
  )
);

$wp_customize->add_setting('cricket_league_pro_hi_scnd_color', array(
  'default' => '#fff',
  'sanitize_callback' => 'sanitize_hex_color'
)
);
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_pro_hi_scnd_color', array(
  'label' => __('Secondry Color', 'cricket-league-pro'),
  'section' => 'cricket_league_pro_color_pallette',
  'settings' => 'cricket_league_pro_hi_scnd_color',
)
));
/*------------------------ Button ---------------------------*/
$wp_customize->add_section('cricket_league_pro_section_button_settings', array(
  'title' => __('Button Typography', 'cricket-league-pro'),
  'panel' => 'cricket_league_pro_panel_id',
)
);

$wp_customize->add_setting(
	'cricket_league_pro_inner_page_banner_bgimage_setting',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'cricket_league_pro_text_sanitization'
	)
);

$wp_customize->add_control(
	new VW_Themes_Seperator_custom_Control(
		$wp_customize,
		'cricket_league_pro_inner_page_banner_bgimage_setting',
		array(
			'label' => __('Inner Pgae Banner Settings', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_color_pallette'
		)
	)
);

$wp_customize->add_setting(
	'cricket_league_pro_inner_page_banner_bgimage',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'cricket_league_pro_inner_page_banner_bgimage',
		array(
			'label' => __('Inner page Banner image', 'cricket-league-pro'),
			'section' => 'cricket_league_pro_color_pallette',
			'settings' => 'cricket_league_pro_inner_page_banner_bgimage'
		)
	)
);
