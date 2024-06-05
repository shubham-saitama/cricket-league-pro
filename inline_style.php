<?php
$custom_css = "";

// Top bar / Header
$cricket_league_pro_header_text_font_size = get_theme_mod('cricket_league_pro_header_text_font_size');
$cricket_league_pro_header_text_font_family = get_theme_mod('cricket_league_pro_header_text_font_family');
$cricket_league_pro_header_title_font_family = get_theme_mod('cricket_league_pro_header_title_font_family');
$cricket_league_pro_header_title_font_size = get_theme_mod('cricket_league_pro_header_title_font_size');
$cricket_league_pro_header_subtitle_color = get_theme_mod('cricket_league_pro_header_subtitle_color');
$cricket_league_pro_header_subtitle_font_family = get_theme_mod('cricket_league_pro_header_subtitle_font_family');
$cricket_league_pro_header_subtitle_font_size = get_theme_mod('cricket_league_pro_header_subtitle_font_size');
$cricket_league_pro_header_contact_details_color = get_theme_mod('cricket_league_pro_header_contact_details_color');
$cricket_league_pro_header_contact_details_font_family = get_theme_mod('cricket_league_pro_header_contact_details_font_family');
$cricket_league_pro_header_contact_detailsicon_color = get_theme_mod('cricket_league_pro_header_contact_detailsicon_color');
$cricket_league_pro_headerhomebg_color = get_theme_mod('cricket_league_pro_headerhomebg_color');
$cricket_league_pro_header_menuhovercolor = get_theme_mod('cricket_league_pro_header_menuhovercolor');
$cricket_league_pro_dropdownbg_color = get_theme_mod('cricket_league_pro_dropdownbg_color');
$cricket_league_pro_dropdownbg_itemcolor = get_theme_mod('cricket_league_pro_dropdownbg_itemcolor');
$cricket_league_pro_dropdownbg_item_hovercolor = get_theme_mod('cricket_league_pro_dropdownbg_item_hovercolor');
$cricket_league_pro_top_submenus_font_size = get_theme_mod('cricket_league_pro_top_submenus_font_size', '');
$cricket_league_pro_top_submenus_letter_spacing = get_theme_mod('cricket_league_pro_top_submenus_letter_spacing', '');
$cricket_league_pro_top_submenus_font_weight = get_theme_mod('cricket_league_pro_top_submenus_font_weight', '');
$cricket_league_pro_top_submenus_text_transform = get_theme_mod('cricket_league_pro_top_submenus_text_transform', '');
$cricket_league_pro_top_submenus_bg_opacity_color = get_theme_mod('cricket_league_pro_top_submenus_bg_opacity_color', '');
$cricket_league_pro_top_submenus_box_shadow = get_theme_mod('cricket_league_pro_top_submenus_box_shadow', '');
$cricket_league_pro_dropdownbg_responsivecolor = get_theme_mod('cricket_league_pro_dropdownbg_responsivecolor');
$cricket_league_pro_headermenu_responsive_item_color = get_theme_mod('cricket_league_pro_headermenu_responsive_item_color');




$cricket_league_pro_topbar_left_icon_size = get_theme_mod('cricket_league_pro_topbar_left_icon_size');

$cricket_league_pro_header_social_icon_border_color = get_theme_mod('cricket_league_pro_header_social_icon_border_color');
$cricket_league_pro_headermenu_active_color = get_theme_mod('cricket_league_pro_headermenu_active_color');
$cricket_league_pro_head_search_icon_color = get_theme_mod('cricket_league_pro_head_search_icon_color');


//Social icon setting
$cricket_league_pro_social_icon_font_size = get_theme_mod('cricket_league_pro_social_icon_font_size');
$cricket_league_pro_social_icon_border_radius = get_theme_mod('cricket_league_pro_social_icon_border_radius');
$cricket_league_pro_social_icon_width = get_theme_mod('cricket_league_pro_social_icon_width');
$cricket_league_pro_social_icon_height = get_theme_mod('cricket_league_pro_social_icon_height');
$cricket_league_pro_social_icon_padding = get_theme_mod('cricket_league_pro_social_icon_padding');
$cricket_league_pro_social_icon_color = get_theme_mod('cricket_league_pro_social_icon_color');
$cricket_league_pro_social_icon_bgcolor = get_theme_mod('cricket_league_pro_social_icon_bgcolor');




$cricket_league_pro_site_menu_width = get_theme_mod('cricket_league_pro_site_menu_width');
//Footer Copyright

// ----------- Spinner --------------

$cricket_league_pro_general_scroll_top_bgcolor = get_theme_mod('cricket_league_pro_general_scroll_top_bgcolor');
$cricket_league_pro_general_scroll_top_hover_bgcolor = get_theme_mod('cricket_league_pro_general_scroll_top_hover_bgcolor');
$cricket_league_pro_general_scroll_top_icon_color = get_theme_mod('cricket_league_pro_general_scroll_top_icon_color');

// Scroll to top settings
$cricket_league_pro_scroll_border_radius = get_theme_mod('cricket_league_pro_scroll_border_radius');
$cricket_league_pro_scroll_width = get_theme_mod('cricket_league_pro_scroll_width');
$cricket_league_pro_scroll_height = get_theme_mod('cricket_league_pro_scroll_height');




$cricket_league_pro_header_res_menu = get_theme_mod('cricket_league_pro_header_res_menu');

if ($cricket_league_pro_header_res_menu != false) {
	$custom_css .= '#open_nav i[class^="fa"]::before,span#dropDown::before{';
	if ($cricket_league_pro_header_res_menu != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_header_res_menu) . ' !important;';
	}
	$custom_css .= '}';
}



// Header Get A Quote end


if ($cricket_league_pro_header_menuhovercolor != false) {
	$custom_css .= 'div#header .main-navigation li:hover a{';
	$custom_css .= 'color: ' . esc_html($cricket_league_pro_header_menuhovercolor) . ' !important;';
	$custom_css .= '}';
}
if ($cricket_league_pro_dropdownbg_color != false) {
	$custom_css .= '.primary_nav>li>ul{';
	$custom_css .= 'background-color: ' . esc_html($cricket_league_pro_dropdownbg_color) . ';';
	$custom_css .= '}';
}


if ($cricket_league_pro_dropdownbg_color != false) {
	$custom_css .= '.primary_nav>li>ul{';
	$custom_css .= 'background-color: ' . esc_html($cricket_league_pro_dropdownbg_color) . ' !important;';
	$custom_css .= '}';
}
if ($cricket_league_pro_dropdownbg_item_hovercolor != false) {
	$custom_css .= '.primary_nav>li>ul>li a:hover{';
	$custom_css .= 'color: ' . esc_html($cricket_league_pro_dropdownbg_item_hovercolor) . ' !important;';
	$custom_css .= '}';
}


if ($cricket_league_pro_header_menuhovercolor != false) {
	$custom_css .= '.menubar .nav ul li a:hover{
				color: ' . esc_html($cricket_league_pro_header_menuhovercolor) . ' ;
			}';
}
if ($cricket_league_pro_dropdownbg_color != false) {
	$custom_css .= '.menubar .nav ul li:hover > ul{
				background: ' . esc_html($cricket_league_pro_dropdownbg_color) . ';
			}';
}

if ($cricket_league_pro_dropdownbg_itemcolor != false) {
	$custom_css .= '.menubar .nav ul li > ul > li a{
				color: ' . esc_html($cricket_league_pro_dropdownbg_itemcolor) . ';
			}';
}

$custom_css .= '}';

if ($cricket_league_pro_top_submenus_letter_spacing != false) {
	$custom_css .= '#header #site-navigation ul ul a{
                letter-spacing: ' . esc_html($cricket_league_pro_top_submenus_letter_spacing) . 'px;
        }';
}
if ($cricket_league_pro_top_submenus_font_size != false) {
	$custom_css .= '#header #site-navigation ul ul a{
                font-size: ' . esc_html($cricket_league_pro_top_submenus_font_size) . 'px;
        }';
}


$cricket_league_pro_header_res_background_bgcolor_one = get_theme_mod('cricket_league_pro_header_res_background_bgcolor_one');
$cricket_league_pro_header_res_background_bgcolor_two = get_theme_mod('cricket_league_pro_header_res_background_bgcolor_two');
$cricket_league_pro_header_res_menu_color = get_theme_mod('cricket_league_pro_header_res_menu_color');
$cricket_league_pro_header_res_menu_font_family = get_theme_mod('cricket_league_pro_header_res_menu_font_family');
$cricket_league_pro_header_res_menu_font_size = get_theme_mod('cricket_league_pro_header_res_menu_font_size');
$cricket_league_pro_header_res_itemcolor = get_theme_mod('cricket_league_pro_header_res_itemcolor');
$cricket_league_pro_header_res_item_font_family = get_theme_mod('cricket_league_pro_header_res_item_font_family');
$cricket_league_pro_header_res_item_font_size = get_theme_mod('cricket_league_pro_header_res_item_font_size');
$cricket_league_pro_res_open_menu_icon_color = get_theme_mod('cricket_league_pro_res_open_menu_icon_color');
$cricket_league_pro_res_open_menu_icon_font_size = get_theme_mod('cricket_league_pro_res_open_menu_icon_font_size');
$cricket_league_pro_header_close_iconcolor = get_theme_mod('cricket_league_pro_header_close_iconcolor');
$cricket_league_pro_header_close_icon_font_size = get_theme_mod('cricket_league_pro_header_close_icon_font_size');

/*-----------------------Slider Section-------------------------*/

$cricket_league_pro_slider_car_title_font_size = get_theme_mod('cricket_league_pro_slider_car_title_font_size');
$cricket_league_pro_slider_car_title_color = get_theme_mod('cricket_league_pro_slider_car_title_color');
$cricket_league_pro_slider_car_title_font_family = get_theme_mod('cricket_league_pro_slider_car_title_font_family');

if ($cricket_league_pro_slider_car_title_color != false || $cricket_league_pro_slider_car_title_font_family != false || $cricket_league_pro_slider_car_title_font_size != false) {
	$custom_css .= '#slider .slider-pro-title a{';
	if ($cricket_league_pro_slider_car_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_slider_car_title_color) . ';';
	}
	if ($cricket_league_pro_slider_car_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_slider_car_title_font_family) . ';';
	}
	if ($cricket_league_pro_slider_car_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_slider_car_title_font_size) . 'px;';
	}
}

$cricket_league_pro_slider_car_attr_font_size = get_theme_mod('cricket_league_pro_slider_car_attr_font_size');
$cricket_league_pro_slider_car_attr_color = get_theme_mod('cricket_league_pro_slider_car_attr_color');
$cricket_league_pro_slider_car_attr_font_family = get_theme_mod('cricket_league_pro_slider_car_attr_font_family');

if ($cricket_league_pro_slider_car_attr_color != false || $cricket_league_pro_slider_car_attr_font_family != false || $cricket_league_pro_slider_car_attr_font_size != false) {
	$custom_css .= '#slider .slider-content-inner p{';
	if ($cricket_league_pro_slider_car_attr_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_slider_car_attr_color) . ';';
	}
	if ($cricket_league_pro_slider_car_attr_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_slider_car_attr_font_family) . ';';
	}
	if ($cricket_league_pro_slider_car_attr_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_slider_car_attr_font_size) . 'px;';
	}
}

$cricket_league_pro_slider_car_attr_property_font_size = get_theme_mod('cricket_league_pro_slider_car_attr_property_font_size');
$cricket_league_pro_slider_car_attr_property_color = get_theme_mod('cricket_league_pro_slider_car_attr_property_color');
$cricket_league_pro_slider_car_attr_property_font_family = get_theme_mod('cricket_league_pro_slider_car_attr_property_font_family');

if ($cricket_league_pro_slider_car_attr_property_color != false || $cricket_league_pro_slider_car_attr_property_font_family != false || $cricket_league_pro_slider_car_attr_property_font_size != false) {
	$custom_css .= '#slider .slider-content-inner label{';
	if ($cricket_league_pro_slider_car_attr_property_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_slider_car_attr_property_color) . ';';
	}
	if ($cricket_league_pro_slider_car_attr_property_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_slider_car_attr_property_font_family) . ';';
	}
	if ($cricket_league_pro_slider_car_attr_property_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_slider_car_attr_property_font_size) . 'px;';
	}

}
$cricket_league_pro_slider_content_attr_bgcolor_one = get_theme_mod('cricket_league_pro_slider_content_attr_bgcolor_one');
$cricket_league_pro_slider_content_attr_bgcolor_two = get_theme_mod('cricket_league_pro_slider_content_attr_bgcolor_two');

if ($cricket_league_pro_slider_content_attr_bgcolor_one != false || $cricket_league_pro_slider_content_attr_bgcolor_two != false) {
	$custom_css .= '.parallelogram{';
	if ($cricket_league_pro_slider_content_attr_bgcolor_one != false || $cricket_league_pro_slider_content_attr_bgcolor_two != false)
		$custom_css .= 'background: linear-gradient(to right,' . esc_html($cricket_league_pro_slider_content_attr_bgcolor_one) . ',' . esc_html($cricket_league_pro_slider_content_attr_bgcolor_two) . ');';
	$custom_css .= '}';
}




/*------------------------------ ABout section start----------------------------------------*/


$cricket_league_pro_about_left_floating_icon1 = get_theme_mod('cricket_league_pro_about_left_floating_icon1');
$cricket_league_pro_about_left_floating_icon2 = get_theme_mod('cricket_league_pro_about_left_floating_icon2');

if ($cricket_league_pro_about_left_floating_icon1 != false) {
	$custom_css .= '.img-above-wrap::after{';
	if ($cricket_league_pro_about_left_floating_icon1 != false) {
		$custom_css .= 'background-image: url(' . esc_html($cricket_league_pro_about_left_floating_icon1) . ');';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_about_left_floating_icon2 != false) {
	$custom_css .= '.img-above-wrap::before{';
	if ($cricket_league_pro_about_left_floating_icon2 != false) {
		$custom_css .= 'background-image: url(' . esc_html($cricket_league_pro_about_left_floating_icon2) . ');';
	}
	$custom_css .= '}';
}


$cricket_league_pro_about_section_headding_tagline_color = get_theme_mod('cricket_league_pro_about_section_headding_tagline_color');
$cricket_league_pro_about_section_headding_tagline_font_size = get_theme_mod('cricket_league_pro_about_section_headding_tagline_font_size');
$cricket_league_pro_about_section_headding_tagline_font_family = get_theme_mod('cricket_league_pro_about_section_headding_tagline_font_family');
$cricket_league_pro_about_section_headding_tagline_font_weight = get_theme_mod('cricket_league_pro_about_section_headding_tagline_font_weight');


if ($cricket_league_pro_about_section_headding_tagline_color != false || $cricket_league_pro_about_section_headding_tagline_font_family != false || $cricket_league_pro_about_section_headding_tagline_font_size != false || $cricket_league_pro_about_section_headding_tagline_font_weight != false) {
	$custom_css .= 'section#About-us .heading-tagline{';
	if ($cricket_league_pro_about_section_headding_tagline_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_section_headding_tagline_color) . ' ;';
	}
	if ($cricket_league_pro_about_section_headding_tagline_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_section_headding_tagline_font_family) . ' ;';
	}
	if ($cricket_league_pro_about_section_headding_tagline_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_section_headding_tagline_font_size) . 'px ;';
	}
	if ($cricket_league_pro_about_section_headding_tagline_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_about_section_headding_tagline_font_weight) . ' ;';
	}
	$custom_css .= '}';
}



$cricket_league_pro_about_section_section_headding_color = get_theme_mod('cricket_league_pro_about_section_section_headding_color');
$cricket_league_pro_about_section_section_headding_font_size = get_theme_mod('cricket_league_pro_about_section_section_headding_font_size');
$cricket_league_pro_about_section_section_headding_font_family = get_theme_mod('cricket_league_pro_about_section_section_headding_font_family');
$cricket_league_pro_about_section_section_headding_font_weight = get_theme_mod('cricket_league_pro_about_section_section_headding_font_weight');


if ($cricket_league_pro_about_section_section_headding_color != false || $cricket_league_pro_about_section_section_headding_font_family != false || $cricket_league_pro_about_section_section_headding_font_size != false || $cricket_league_pro_about_section_section_headding_font_weight != false) {
	$custom_css .= 'section#About-us h2{';
	if ($cricket_league_pro_about_section_section_headding_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_section_section_headding_color) . ' ;';
	}
	if ($cricket_league_pro_about_section_section_headding_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_section_section_headding_font_family) . ' ;';
	}
	if ($cricket_league_pro_about_section_section_headding_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_section_section_headding_font_size) . 'px ;';
	}
	if ($cricket_league_pro_about_section_section_headding_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_about_section_section_headding_font_weight) . ' ;';
	}
	$custom_css .= '}';
}



$cricket_league_pro_about_section_section_text_color = get_theme_mod('cricket_league_pro_about_section_section_text_color');
$cricket_league_pro_about_section_section_text_font_size = get_theme_mod('cricket_league_pro_about_section_section_text_font_size');
$cricket_league_pro_about_section_section_text_font_family = get_theme_mod('cricket_league_pro_about_section_section_text_font_family');
$cricket_league_pro_about_section_section_text_font_weight = get_theme_mod('cricket_league_pro_about_section_section_text_font_weight');


if ($cricket_league_pro_about_section_section_text_color != false || $cricket_league_pro_about_section_section_text_font_family != false || $cricket_league_pro_about_section_section_text_font_size != false || $cricket_league_pro_about_section_section_text_font_weight != false) {
	$custom_css .= '.about-inner p{';
	if ($cricket_league_pro_about_section_section_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_section_section_text_color) . ' ;';
	}
	if ($cricket_league_pro_about_section_section_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_section_section_text_font_family) . ' ;';
	}
	if ($cricket_league_pro_about_section_section_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_section_section_text_font_size) . 'px ;';
	}
	if ($cricket_league_pro_about_section_section_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_about_section_section_text_font_weight) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_about_section_achivement_color = get_theme_mod('cricket_league_pro_about_section_achivement_color');
$cricket_league_pro_about_section_achivement_font_size = get_theme_mod('cricket_league_pro_about_section_achivement_font_size');
$cricket_league_pro_about_section_achivement_font_family = get_theme_mod('cricket_league_pro_about_section_achivement_font_family');
$cricket_league_pro_about_section_achivement_font_weight = get_theme_mod('cricket_league_pro_about_section_achivement_font_weight');


if ($cricket_league_pro_about_section_achivement_color != false || $cricket_league_pro_about_section_achivement_font_family != false || $cricket_league_pro_about_section_achivement_font_size != false || $cricket_league_pro_about_section_achivement_font_weight != false) {
	$custom_css .= '.about-inner .text{';
	if ($cricket_league_pro_about_section_achivement_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_section_achivement_color) . ' ;';
	}
	if ($cricket_league_pro_about_section_achivement_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_section_achivement_font_family) . ' ;';
	}
	if ($cricket_league_pro_about_section_achivement_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_section_achivement_font_size) . 'px ;';
	}
	if ($cricket_league_pro_about_section_achivement_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_about_section_achivement_font_weight) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_achivement_point_sub_text_color = get_theme_mod('cricket_league_pro_achivement_point_sub_text_color');
$cricket_league_pro_achivement_point_sub_text_font_size = get_theme_mod('cricket_league_pro_achivement_point_sub_text_font_size');
$cricket_league_pro_achivement_point_sub_text_font_family = get_theme_mod('cricket_league_pro_achivement_point_sub_text_font_family');
$cricket_league_pro_achivement_point_sub_text_font_weight = get_theme_mod('cricket_league_pro_achivement_point_sub_text_font_weight');


if ($cricket_league_pro_achivement_point_sub_text_color != false || $cricket_league_pro_achivement_point_sub_text_font_family != false || $cricket_league_pro_achivement_point_sub_text_font_size != false || $cricket_league_pro_achivement_point_sub_text_font_weight != false) {
	$custom_css .= 'p.AchivementCheck{';
	if ($cricket_league_pro_achivement_point_sub_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_achivement_point_sub_text_color) . ' !important;';
	}
	if ($cricket_league_pro_achivement_point_sub_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_achivement_point_sub_text_font_family) . ' !important;';
	}
	if ($cricket_league_pro_achivement_point_sub_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_achivement_point_sub_text_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_achivement_point_sub_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_achivement_point_sub_text_font_weight) . ' !important;';
	}
	$custom_css .= '}';
}




$cricket_league_pro_about_section_btn_text_color = get_theme_mod('cricket_league_pro_about_section_btn_text_color');
$cricket_league_pro_about_section_btn_text_font_size = get_theme_mod('cricket_league_pro_about_section_btn_text_font_size');
$cricket_league_pro_about_section_btn_text_font_family = get_theme_mod('cricket_league_pro_about_section_btn_text_font_family');
$cricket_league_pro_about_section_btn_text_font_weight = get_theme_mod('cricket_league_pro_about_section_btn_text_font_weight');
$cricket_league_pro_about_section_btn_text_bgcolor = get_theme_mod('cricket_league_pro_about_section_btn_text_bgcolor');

if ($cricket_league_pro_about_section_btn_text_color != false || $cricket_league_pro_about_section_btn_text_font_family != false || $cricket_league_pro_about_section_btn_text_font_size != false || $cricket_league_pro_about_section_btn_text_font_weight != false) {
	$custom_css .= 'section#About-us a.btn.black{';
	if ($cricket_league_pro_about_section_btn_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_section_btn_text_color) . ' ;';
	}
	if ($cricket_league_pro_about_section_btn_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_section_btn_text_font_family) . ' ;';
	}
	if ($cricket_league_pro_about_section_btn_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_section_btn_text_font_size) . 'px ;';
	}
	if ($cricket_league_pro_about_section_btn_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_about_section_btn_text_font_weight) . ' ;';
	}
	if ($cricket_league_pro_about_section_btn_text_bgcolor != false) {
		$custom_css .= 'background-color:' . esc_html($cricket_league_pro_about_section_btn_text_bgcolor) . ' ;';
	}
	$custom_css .= '}';
}




$cricket_league_pro_FAQ_heading_color = get_theme_mod('cricket_league_pro_FAQ_heading_color');
$cricket_league_pro_FAQ_heading_font_size = get_theme_mod('cricket_league_pro_FAQ_heading_font_size');
$cricket_league_pro_FAQ_heading_font_family = get_theme_mod('cricket_league_pro_FAQ_heading_font_family');
$cricket_league_pro_FAQ_heading_font_weight = get_theme_mod('cricket_league_pro_FAQ_heading_font_weight');


if ($cricket_league_pro_FAQ_heading_color != false || $cricket_league_pro_FAQ_heading_font_family != false || $cricket_league_pro_FAQ_heading_font_size != false || $cricket_league_pro_FAQ_heading_font_weight != false) {
	$custom_css .= 'section#faq h2{';
	if ($cricket_league_pro_FAQ_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_FAQ_heading_color) . ' ;';
	}
	if ($cricket_league_pro_FAQ_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_FAQ_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_FAQ_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_FAQ_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_FAQ_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_FAQ_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_faq_heading_color = get_theme_mod('cricket_league_pro_faq_heading_color');
$cricket_league_pro_faq_heading_font_size = get_theme_mod('cricket_league_pro_faq_heading_font_size');
$cricket_league_pro_faq_heading_font_family = get_theme_mod('cricket_league_pro_faq_heading_font_family');
$cricket_league_pro_faq_heading_font_weight = get_theme_mod('cricket_league_pro_faq_heading_font_weight');


if ($cricket_league_pro_faq_heading_color != false || $cricket_league_pro_faq_heading_font_family != false || $cricket_league_pro_faq_heading_font_size != false || $cricket_league_pro_faq_heading_font_weight != false) {
	$custom_css .= 'section#faq h2{';
	if ($cricket_league_pro_faq_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_faq_heading_color) . ' ;';
	}
	if ($cricket_league_pro_faq_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_faq_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_faq_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_faq_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_faq_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_faq_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}




// FAQ section 


$cricket_league_pro_faq_question_color = get_theme_mod('cricket_league_pro_faq_question_color');
$cricket_league_pro_faq_question_font_size = get_theme_mod('cricket_league_pro_faq_question_font_size');
$cricket_league_pro_faq_question_font_family = get_theme_mod('cricket_league_pro_faq_question_font_family');
$cricket_league_pro_faq_question_font_weight = get_theme_mod('cricket_league_pro_faq_question_font_weight');


if ($cricket_league_pro_faq_question_color != false || $cricket_league_pro_faq_question_font_family != false || $cricket_league_pro_faq_question_font_size != false || $cricket_league_pro_faq_question_font_weight != false) {
	$custom_css .= 'h3.accordion-click{';
	if ($cricket_league_pro_faq_question_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_faq_question_color) . ' !important;';
	}
	if ($cricket_league_pro_faq_question_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_faq_question_font_family) . ' !important;';
	}
	if ($cricket_league_pro_faq_question_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_faq_question_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_faq_question_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_faq_question_font_weight) . ' !important;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_faq_answer_color = get_theme_mod('cricket_league_pro_faq_answer_color');
$cricket_league_pro_faq_answer_font_size = get_theme_mod('cricket_league_pro_faq_answer_font_size');
$cricket_league_pro_faq_answer_font_family = get_theme_mod('cricket_league_pro_faq_answer_font_family');
$cricket_league_pro_faq_answer_font_weight = get_theme_mod('cricket_league_pro_faq_answer_font_weight');


if ($cricket_league_pro_faq_answer_color != false || $cricket_league_pro_faq_answer_font_family != false || $cricket_league_pro_faq_answer_font_size != false || $cricket_league_pro_faq_answer_font_weight != false) {
	$custom_css .= '.accordion-wrapper .answer{';
	if ($cricket_league_pro_faq_answer_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_faq_answer_color) . ' !important;';
	}
	if ($cricket_league_pro_faq_answer_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_faq_answer_font_family) . ' !important;';
	}
	if ($cricket_league_pro_faq_answer_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_faq_answer_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_faq_answer_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_faq_answer_font_weight) . ' !important;';
	}
	$custom_css .= '}';
}



// FAQ ends 



// get in touch section end 








// blog section 
$cricket_league_pro_blog_heading_color = get_theme_mod('cricket_league_pro_blog_heading_color');
$cricket_league_pro_blog_heading_font_size = get_theme_mod('cricket_league_pro_blog_heading_font_size');
$cricket_league_pro_blog_heading_font_family = get_theme_mod('cricket_league_pro_blog_heading_font_family');
$cricket_league_pro_blog_heading_font_weight = get_theme_mod('cricket_league_pro_blog_heading_font_weight');


if ($cricket_league_pro_blog_heading_color != false || $cricket_league_pro_blog_heading_font_family != false || $cricket_league_pro_blog_heading_font_size != false || $cricket_league_pro_blog_heading_font_weight != false) {
	$custom_css .= 'section#blog-news h2{';
	if ($cricket_league_pro_blog_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_blog_heading_color) . ' ;';
	}
	if ($cricket_league_pro_blog_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_blog_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_blog_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_blog_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_blog_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_blog_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_blog_heading_tagline_color = get_theme_mod('cricket_league_pro_blog_heading_tagline_color');
$cricket_league_pro_blog_heading_tagline_font_size = get_theme_mod('cricket_league_pro_blog_heading_tagline_font_size');
$cricket_league_pro_blog_heading_tagline_font_family = get_theme_mod('cricket_league_pro_blog_heading_tagline_font_family');
$cricket_league_pro_blog_heading_tagline_font_weight = get_theme_mod('cricket_league_pro_blog_heading_tagline_font_weight');


if ($cricket_league_pro_blog_heading_tagline_color != false || $cricket_league_pro_blog_heading_tagline_font_family != false || $cricket_league_pro_blog_heading_tagline_font_size != false || $cricket_league_pro_blog_heading_tagline_font_weight != false) {
	$custom_css .= 'section#blog-news .heading-tag{';
	if ($cricket_league_pro_blog_heading_tagline_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_blog_heading_tagline_color) . ' ;';
	}
	if ($cricket_league_pro_blog_heading_tagline_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_blog_heading_tagline_font_family) . ' ;';
	}
	if ($cricket_league_pro_blog_heading_tagline_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_blog_heading_tagline_font_size) . 'px ;';
	}
	if ($cricket_league_pro_blog_heading_tagline_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_blog_heading_tagline_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_blog_blog_title_color = get_theme_mod('cricket_league_pro_blog_blog_title_color');
$cricket_league_pro_blog_blog_title_font_size = get_theme_mod('cricket_league_pro_blog_blog_title_font_size');
$cricket_league_pro_blog_blog_title_font_family = get_theme_mod('cricket_league_pro_blog_blog_title_font_family');
$cricket_league_pro_blog_blog_title_font_weight = get_theme_mod('cricket_league_pro_blog_blog_title_font_weight');


if ($cricket_league_pro_blog_blog_title_color != false || $cricket_league_pro_blog_blog_title_font_family != false || $cricket_league_pro_blog_blog_title_font_size != false || $cricket_league_pro_blog_blog_title_font_weight != false) {
	$custom_css .= 'section#blog-news h5{';
	if ($cricket_league_pro_blog_blog_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_blog_blog_title_color) . ' ;';
	}
	if ($cricket_league_pro_blog_blog_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_blog_blog_title_font_family) . ' ;';
	}
	if ($cricket_league_pro_blog_blog_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_blog_blog_title_font_size) . 'px ;';
	}
	if ($cricket_league_pro_blog_blog_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_blog_blog_title_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_blog_author_tag_settings_color = get_theme_mod('cricket_league_pro_blog_author_tag_settings_color');
$cricket_league_pro_blog_author_tag_settings_font_size = get_theme_mod('cricket_league_pro_blog_author_tag_settings_font_size');
$cricket_league_pro_blog_author_tag_settings_font_family = get_theme_mod('cricket_league_pro_blog_author_tag_settings_font_family');
$cricket_league_pro_blog_author_tag_settings_font_weight = get_theme_mod('cricket_league_pro_blog_author_tag_settings_font_weight');

if ($cricket_league_pro_blog_author_tag_settings_color != false || $cricket_league_pro_blog_author_tag_settings_font_family != false || $cricket_league_pro_blog_author_tag_settings_font_size != false || $cricket_league_pro_blog_author_tag_settings_font_weight != false ) {
	$custom_css .= '.info-bar p, .info-bar a{';
	if ($cricket_league_pro_blog_author_tag_settings_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_blog_author_tag_settings_color) . ' ;';
	}
	if ($cricket_league_pro_blog_author_tag_settings_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_blog_author_tag_settings_font_family) . ';';
	}
	if ($cricket_league_pro_blog_author_tag_settings_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_blog_author_tag_settings_font_size) . 'px;';
	}
	if ($cricket_league_pro_blog_author_tag_settings_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_blog_author_tag_settings_font_weight) . ';';
	}
	$custom_css .= '}';
}
;

$cricket_league_pro_blog_date_comment_settings_color = get_theme_mod('cricket_league_pro_blog_date_comment_settings_color');
$cricket_league_pro_blog_date_comment_settings_font_size = get_theme_mod('cricket_league_pro_blog_date_comment_settings_font_size');
$cricket_league_pro_blog_date_comment_settings_font_family = get_theme_mod('cricket_league_pro_blog_date_comment_settings_font_family');
$cricket_league_pro_blog_date_comment_settings_font_weight = get_theme_mod('cricket_league_pro_blog_date_comment_settings_font_weight');

if ($cricket_league_pro_blog_date_comment_settings_color != false || $cricket_league_pro_blog_date_comment_settings_font_family != false || $cricket_league_pro_blog_date_comment_settings_font_size != false || $cricket_league_pro_blog_date_comment_settings_font_weight != false ) {
	$custom_css .= '.lower.bar p, .date-box{';
	if ($cricket_league_pro_blog_date_comment_settings_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_blog_date_comment_settings_color) . ' ;';
	}
	if ($cricket_league_pro_blog_date_comment_settings_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_blog_date_comment_settings_font_family) . ';';
	}
	if ($cricket_league_pro_blog_date_comment_settings_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_blog_date_comment_settings_font_size) . 'px;';
	}
	if ($cricket_league_pro_blog_date_comment_settings_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_blog_date_comment_settings_font_weight) . ';';
	}
	$custom_css .= '}';
}
;
$cricket_league_pro_blog_view_all_settings_color = get_theme_mod('cricket_league_pro_blog_view_all_settings_color');
$cricket_league_pro_blog_view_all_settings_font_size = get_theme_mod('cricket_league_pro_blog_view_all_settings_font_size');
$cricket_league_pro_blog_view_all_settings_font_family = get_theme_mod('cricket_league_pro_blog_view_all_settings_font_family');
$cricket_league_pro_blog_view_all_settings_font_weight = get_theme_mod('cricket_league_pro_blog_view_all_settings_font_weight');

if ($cricket_league_pro_blog_view_all_settings_color != false || $cricket_league_pro_blog_view_all_settings_font_family != false || $cricket_league_pro_blog_view_all_settings_font_size != false || $cricket_league_pro_blog_view_all_settings_font_weight != false ) {
	$custom_css .= 'section#blog-news a.theme-btn{';
	if ($cricket_league_pro_blog_view_all_settings_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_blog_view_all_settings_color) . ' ;';
	}
	if ($cricket_league_pro_blog_view_all_settings_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_blog_view_all_settings_font_family) . ';';
	}
	if ($cricket_league_pro_blog_view_all_settings_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_blog_view_all_settings_font_size) . 'px;';
	}
	if ($cricket_league_pro_blog_view_all_settings_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_blog_view_all_settings_font_weight) . ';';
	}
	$custom_css .= '}';
}
;

// blog section end 



// Order Tracking section 

$cricket_league_pro_order_tracking_image = get_theme_mod('cricket_league_pro_order_tracking_image');

if ($cricket_league_pro_order_tracking_image != false) {
	$custom_css .= '.tracking-your-order::after{';
	if ($cricket_league_pro_order_tracking_image != false) {
		$custom_css .= 'background-image:url(' . esc_html($cricket_league_pro_order_tracking_image) . ');';
	}
	$custom_css .= '}';
}


// Get A Quote page 





$cricket_league_pro_getaquote_from_bgImage = get_theme_mod('cricket_league_pro_getaquote_from_bgImage');

if ($cricket_league_pro_getaquote_from_bgImage != false) {
	$custom_css .= 'section.freequote .form-wrapper{';
	if ($cricket_league_pro_getaquote_from_bgImage != false) {
		$custom_css .= 'background-image:url(' . esc_html($cricket_league_pro_getaquote_from_bgImage) . ');';
	}
	$custom_css .= '}';
}



// Support page 




$cricket_league_pro_contactus_location_bg_image = get_theme_mod('cricket_league_pro_contactus_location_bg_image');

if ($cricket_league_pro_contactus_location_bg_image != false) {
	$custom_css .= '.support-contact-info{';
	if ($cricket_league_pro_contactus_location_bg_image != false) {
		$custom_css .= 'background-image:url(' . esc_html($cricket_league_pro_contactus_location_bg_image) . ');';
	}
	$custom_css .= '}';
}


$cricket_league_pro_about_sub_heading_font_size = get_theme_mod('cricket_league_pro_about_sub_heading_font_size');
$cricket_league_pro_about_sub_heading_color = get_theme_mod('cricket_league_pro_about_sub_heading_color');
$cricket_league_pro_about_sub_heading_font_family = get_theme_mod('cricket_league_pro_about_sub_heading_font_family');
if ($cricket_league_pro_about_sub_heading_color != false || $cricket_league_pro_about_sub_heading_font_family != false || $cricket_league_pro_about_sub_heading_font_size != false) {
	$custom_css .= '#about-us .sub-head-border{';
	if ($cricket_league_pro_about_sub_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_sub_heading_color) . ';';
	}
	if ($cricket_league_pro_about_sub_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_sub_heading_font_family) . ';';
	}
	if ($cricket_league_pro_about_sub_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_sub_heading_font_size) . 'px;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_about_sub_heading_border_bottom_color = get_theme_mod('cricket_league_pro_about_sub_heading_border_bottom_color');
if ($cricket_league_pro_about_sub_heading_border_bottom_color != false) {
	$custom_css .= '#about-us .sub-head-border::after{';
	if ($cricket_league_pro_about_sub_heading_border_bottom_color != false) {
		$custom_css .= 'border-color: ' . esc_html($cricket_league_pro_about_sub_heading_border_bottom_color) . ';';
	}
	$custom_css .= '}';
}

$cricket_league_pro_about_heading_font_size = get_theme_mod('cricket_league_pro_about_heading_font_size');
$cricket_league_pro_about_heading_color = get_theme_mod('cricket_league_pro_about_heading_color');
$cricket_league_pro_about_heading_font_family = get_theme_mod('cricket_league_pro_about_heading_font_family');
if ($cricket_league_pro_about_heading_color != false || $cricket_league_pro_about_heading_font_family != false || $cricket_league_pro_about_heading_font_size != false) {
	$custom_css .= '#about-us .about-heading{';
	if ($cricket_league_pro_about_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_heading_color) . ';';
	}
	if ($cricket_league_pro_about_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_heading_font_family) . ';';
	}
	if ($cricket_league_pro_about_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_heading_font_size) . 'px;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_about_paragraph_font_size = get_theme_mod('cricket_league_pro_about_paragraph_font_size');
$cricket_league_pro_about_paragraph_color = get_theme_mod('cricket_league_pro_about_paragraph_color');
$cricket_league_pro_about_paragraph_font_family = get_theme_mod('cricket_league_pro_about_paragraph_font_family');
if ($cricket_league_pro_about_paragraph_color != false || $cricket_league_pro_about_paragraph_font_family != false || $cricket_league_pro_about_paragraph_font_size != false) {
	$custom_css .= '#about-us .about-para-two{';
	if ($cricket_league_pro_about_paragraph_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_paragraph_color) . ';';
	}
	if ($cricket_league_pro_about_paragraph_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_paragraph_font_family) . ';';
	}
	if ($cricket_league_pro_about_paragraph_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_paragraph_font_size) . 'px;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_about_list_font_size = get_theme_mod('cricket_league_pro_about_list_font_size');
$cricket_league_pro_about_list_color = get_theme_mod('cricket_league_pro_about_list_color');
$cricket_league_pro_about_list_font_family = get_theme_mod('cricket_league_pro_about_list_font_family');
if ($cricket_league_pro_about_list_color != false || $cricket_league_pro_about_list_font_family != false || $cricket_league_pro_about_list_font_size != false) {
	$custom_css .= '#about-us .about-list  p{';
	if ($cricket_league_pro_about_list_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_list_color) . ';';
	}
	if ($cricket_league_pro_about_list_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_list_font_family) . ';';
	}
	if ($cricket_league_pro_about_list_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_list_font_size) . 'px;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_about_read_more_btn_font_size = get_theme_mod('cricket_league_pro_about_read_more_btn_font_size');
$cricket_league_pro_about_read_more_btn_color = get_theme_mod('cricket_league_pro_about_read_more_btn_color');
$cricket_league_pro_about_read_more_btn_bg_color = get_theme_mod('cricket_league_pro_about_read_more_btn_bg_color');
$cricket_league_pro_about_read_more_btn_border_color = get_theme_mod('cricket_league_pro_about_read_more_btn_border_color');
$cricket_league_pro_about_read_more_btn_font_family = get_theme_mod('cricket_league_pro_about_read_more_btn_font_family');

if ($cricket_league_pro_about_read_more_btn_color != false || $cricket_league_pro_about_read_more_btn_font_family != false || $cricket_league_pro_about_read_more_btn_bg_color != false || $cricket_league_pro_about_read_more_btn_border_color != false || $cricket_league_pro_about_read_more_btn_font_size != false) {
	$custom_css .= '#about-us .about-btn a.theme_green_button{';
	if ($cricket_league_pro_about_read_more_btn_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_read_more_btn_color) . ';';
	}
	if ($cricket_league_pro_about_read_more_btn_bg_color != false) {
		$custom_css .= 'background: ' . esc_html($cricket_league_pro_about_read_more_btn_bg_color) . ';';
	}
	if ($cricket_league_pro_about_read_more_btn_border_color != false) {
		$custom_css .= 'border-color: ' . esc_html($cricket_league_pro_about_read_more_btn_border_color) . ';';
	}
	if ($cricket_league_pro_about_read_more_btn_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_read_more_btn_font_family) . ';';
	}
	if ($cricket_league_pro_about_read_more_btn_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_read_more_btn_font_size) . 'px;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_about_counter_no_font_size = get_theme_mod('cricket_league_pro_about_counter_no_font_size');
$cricket_league_pro_about_counter_no_color = get_theme_mod('cricket_league_pro_about_counter_no_color');
$cricket_league_pro_about_counter_no_font_family = get_theme_mod('cricket_league_pro_about_counter_no_font_family');
if ($cricket_league_pro_about_counter_no_color != false || $cricket_league_pro_about_counter_no_font_family != false || $cricket_league_pro_about_counter_no_font_size != false) {
	$custom_css .= '#about-us .year-no{';
	if ($cricket_league_pro_about_counter_no_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_counter_no_color) . ';';
	}
	if ($cricket_league_pro_about_counter_no_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_counter_no_font_family) . ';';
	}
	if ($cricket_league_pro_about_counter_no_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_counter_no_font_size) . 'px;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_about_counter_no_bg_color = get_theme_mod('cricket_league_pro_about_counter_no_bg_color');
if ($cricket_league_pro_about_counter_no_bg_color != false) {
	$custom_css .= '#about-us .year-no{';
	if ($cricket_league_pro_about_counter_no_bg_color != false) {
		$custom_css .= 'background: ' . esc_html($cricket_league_pro_about_counter_no_bg_color) . ';';
	}
	$custom_css .= '}';
}


$cricket_league_pro_about_counter_headding_font_size = get_theme_mod('cricket_league_pro_about_counter_headding_font_size');
$cricket_league_pro_about_counter_headding_color = get_theme_mod('cricket_league_pro_about_counter_headding_color');
$cricket_league_pro_about_counter_headding_font_family = get_theme_mod('cricket_league_pro_about_counter_headding_font_family');
if ($cricket_league_pro_about_counter_headding_color != false || $cricket_league_pro_about_counter_headding_font_family != false || $cricket_league_pro_about_counter_headding_font_size != false) {
	$custom_css .= '#about-us .counter-heading{';
	if ($cricket_league_pro_about_counter_headding_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_counter_headding_color) . ';';
	}
	if ($cricket_league_pro_about_counter_headding_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_counter_headding_font_family) . ';';
	}
	if ($cricket_league_pro_about_counter_headding_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_counter_headding_font_size) . 'px;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_about_counter_bg_color = get_theme_mod('cricket_league_pro_about_counter_bg_color');
if ($cricket_league_pro_about_counter_bg_color != false) {
	$custom_css .= '#about-us .about-counter{';
	if ($cricket_league_pro_about_counter_bg_color != false) {
		$custom_css .= 'background: ' . esc_html($cricket_league_pro_about_counter_bg_color) . ';';
	}
	$custom_css .= '}';
}
$cricket_league_pro_support_page_para_title_color = get_theme_mod('cricket_league_pro_support_page_para_title_color');
$cricket_league_pro_support_page_para_title_font_size = get_theme_mod('cricket_league_pro_support_page_para_title_font_size');
$cricket_league_pro_support_page_para_title_font_family = get_theme_mod('cricket_league_pro_support_page_para_title_font_family');
$cricket_league_pro_support_page_para_title_font_weight = get_theme_mod('cricket_league_pro_support_page_para_title_font_weight');


if ($cricket_league_pro_support_page_para_title_color != false || $cricket_league_pro_support_page_para_title_font_family != false || $cricket_league_pro_support_page_para_title_font_size != false || $cricket_league_pro_support_page_para_title_font_weight != false) {
	$custom_css .= 'section.support-page p,section.support-page ul li{';
	if ($cricket_league_pro_support_page_para_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_support_page_para_title_color) . ' !important;';
	}
	if ($cricket_league_pro_support_page_para_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_support_page_para_title_font_family) . ' !important;';
	}
	if ($cricket_league_pro_support_page_para_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_support_page_para_title_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_support_page_para_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_support_page_para_title_font_weight) . ' !important;';
	}
	$custom_css .= '}';
}




$cricket_league_pro_aboutus_inner_headings_color = get_theme_mod('cricket_league_pro_aboutus_inner_headings_color');
$cricket_league_pro_aboutus_inner_headings_font_size = get_theme_mod('cricket_league_pro_aboutus_inner_headings_font_size');
$cricket_league_pro_aboutus_inner_headings_font_family = get_theme_mod('cricket_league_pro_aboutus_inner_headings_font_family');
$cricket_league_pro_aboutus_inner_headings_font_weight = get_theme_mod('cricket_league_pro_aboutus_inner_headings_font_weight');


if ($cricket_league_pro_aboutus_inner_headings_color != false || $cricket_league_pro_aboutus_inner_headings_font_family != false || $cricket_league_pro_aboutus_inner_headings_font_size != false || $cricket_league_pro_aboutus_inner_headings_font_weight != false) {
	$custom_css .= 'section.thebest h3.left,.mission-left h3,.page-template-about-us section#About-us .heading h2,.thebrand  .h3,.client-heading h3{';
	if ($cricket_league_pro_aboutus_inner_headings_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_inner_headings_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_inner_headings_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_inner_headings_font_family) . ' ;';
	}
	if ($cricket_league_pro_aboutus_inner_headings_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_inner_headings_font_size) . 'px ;';
	}
	if ($cricket_league_pro_aboutus_inner_headings_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_inner_headings_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_aboutus_inner_text_color = get_theme_mod('cricket_league_pro_aboutus_inner_text_color');
$cricket_league_pro_aboutus_inner_text_font_size = get_theme_mod('cricket_league_pro_aboutus_inner_text_font_size');
$cricket_league_pro_aboutus_inner_text_font_family = get_theme_mod('cricket_league_pro_aboutus_inner_text_font_family');
$cricket_league_pro_aboutus_inner_text_font_weight = get_theme_mod('cricket_league_pro_aboutus_inner_text_font_weight');


if ($cricket_league_pro_aboutus_inner_text_color != false || $cricket_league_pro_aboutus_inner_text_font_family != false || $cricket_league_pro_aboutus_inner_text_font_size != false || $cricket_league_pro_aboutus_inner_text_font_weight != false) {
	$custom_css .= '.para,li.list-item,p.best-text,p.text-normal,section#About-us p{';
	if ($cricket_league_pro_aboutus_inner_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_inner_text_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_inner_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_inner_text_font_family) . ' ;';
	}
	if ($cricket_league_pro_aboutus_inner_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_inner_text_font_size) . 'px ;';
	}
	if ($cricket_league_pro_aboutus_inner_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_inner_text_font_weight) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_aboutus_inner_dist_color = get_theme_mod('cricket_league_pro_aboutus_inner_dist_color');
$cricket_league_pro_aboutus_inner_dist_font_size = get_theme_mod('cricket_league_pro_aboutus_inner_dist_font_size');
$cricket_league_pro_aboutus_inner_dist_font_family = get_theme_mod('cricket_league_pro_aboutus_inner_dist_font_family');
$cricket_league_pro_aboutus_inner_dist_font_weight = get_theme_mod('cricket_league_pro_aboutus_inner_dist_font_weight');


if ($cricket_league_pro_aboutus_inner_dist_color != false || $cricket_league_pro_aboutus_inner_dist_font_family != false || $cricket_league_pro_aboutus_inner_dist_font_size != false || $cricket_league_pro_aboutus_inner_dist_font_weight != false) {
	$custom_css .= '.dist-card p{';
	if ($cricket_league_pro_aboutus_inner_dist_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_inner_dist_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_inner_dist_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_inner_dist_font_family) . ' ;';
	}
	if ($cricket_league_pro_aboutus_inner_dist_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_inner_dist_font_size) . 'px ;';
	}
	if ($cricket_league_pro_aboutus_inner_dist_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_inner_dist_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_aboutus_inner_overview_count_color = get_theme_mod('cricket_league_pro_aboutus_inner_overview_count_color');
$cricket_league_pro_aboutus_inner_overview_count_font_size = get_theme_mod('cricket_league_pro_aboutus_inner_overview_count_font_size');
$cricket_league_pro_aboutus_inner_overview_count_font_family = get_theme_mod('cricket_league_pro_aboutus_inner_overview_count_font_family');
$cricket_league_pro_aboutus_inner_overview_count_font_weight = get_theme_mod('cricket_league_pro_aboutus_inner_overview_count_font_weight');


if ($cricket_league_pro_aboutus_inner_overview_count_color != false || $cricket_league_pro_aboutus_inner_overview_count_font_family != false || $cricket_league_pro_aboutus_inner_overview_count_font_size != false || $cricket_league_pro_aboutus_inner_overview_count_font_weight != false) {
	$custom_css .= '.dist-card span{';
	if ($cricket_league_pro_aboutus_inner_overview_count_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_inner_overview_count_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_inner_overview_count_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_inner_overview_count_font_family) . ' ;';
	}
	if ($cricket_league_pro_aboutus_inner_overview_count_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_inner_overview_count_font_size) . 'px ;';
	}
	if ($cricket_league_pro_aboutus_inner_overview_count_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_inner_overview_count_font_weight) . ' ;';
	}
	$custom_css .= '}';
}
$cricket_league_pro_aboutus_inner_overview_count_bgcolor = get_theme_mod('cricket_league_pro_aboutus_inner_overview_count_bgcolor');

if ($cricket_league_pro_aboutus_inner_overview_count_bgcolor != false) {
	$custom_css .= 'section.distribution-overview{';
	if ($cricket_league_pro_aboutus_inner_overview_count_bgcolor != false) {
		$custom_css .= 'background-color: ' . esc_html($cricket_league_pro_aboutus_inner_overview_count_bgcolor) . ' ;';
	}
	$custom_css .= '}';
}

// Blog Page 

$cricket_league_pro_post_general_settings_post_author = get_theme_mod('cricket_league_pro_post_general_settings_post_author');

if ($cricket_league_pro_post_general_settings_post_author != false) {
	$custom_css .= 'li.entry-author.list-unstyled{';
	if ($cricket_league_pro_post_general_settings_post_author != false) {
		$custom_css .= 'display: ' . esc_html($cricket_league_pro_post_general_settings_post_author) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_post_general_settings = get_theme_mod('cricket_league_pro_post_general_settings');

if ($cricket_league_pro_post_general_settings != false) {
	$custom_css .= 'li.entry-author.list-unstyled{';
	if ($cricket_league_pro_post_general_settings != false) {
		$custom_css .= 'display: ' . esc_html($cricket_league_pro_post_general_settings) . ' ;';
	}
	$custom_css .= '}';
}





$cricket_league_pro_post_general_settings_post_date = get_theme_mod('cricket_league_pro_post_general_settings_post_date');

if ($cricket_league_pro_post_general_settings_post_date != false) {
	$custom_css .= 'li.entry-author.list-unstyled{';
	if ($cricket_league_pro_post_general_settings_post_date != false) {
		$custom_css .= 'display: ' . esc_html($cricket_league_pro_post_general_settings_post_date) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_post_general_settings_heading_color = get_theme_mod('cricket_league_pro_post_general_settings_heading_color');
$cricket_league_pro_post_general_settings_overview_count_font_size = get_theme_mod('cricket_league_pro_post_general_settings_overview_count_font_size');
$cricket_league_pro_post_general_settings_overview_count_font_family = get_theme_mod('cricket_league_pro_post_general_settings_overview_count_font_family');
$cricket_league_pro_post_general_settings_overview_count_font_weight = get_theme_mod('cricket_league_pro_post_general_settings_overview_count_font_weight');


if ($cricket_league_pro_post_general_settings_heading_color != false || $cricket_league_pro_post_general_settings_overview_count_font_family != false || $cricket_league_pro_post_general_settings_overview_count_font_size != false || $cricket_league_pro_post_general_settings_overview_count_font_weight != false) {
	$custom_css .= '.single-page-title h2{';
	if ($cricket_league_pro_post_general_settings_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_post_general_settings_heading_color) . ' ;';
	}
	if ($cricket_league_pro_post_general_settings_overview_count_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_post_general_settings_overview_count_font_family) . ' ;';
	}
	if ($cricket_league_pro_post_general_settings_overview_count_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_post_general_settings_overview_count_font_size) . 'px ;';
	}
	if ($cricket_league_pro_post_general_settings_overview_count_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_post_general_settings_overview_count_font_weight) . ' ;';
	}
	$custom_css .= '}';
}



$cricket_league_pro_post_general_settings_subheadings_color = get_theme_mod('cricket_league_pro_post_general_settings_subheadings_color');
$cricket_league_pro_post_general_settings_subheadings_font_size = get_theme_mod('cricket_league_pro_post_general_settings_subheadings_font_size');
$cricket_league_pro_post_general_settings_subheadings_font_family = get_theme_mod('cricket_league_pro_post_general_settings_subheadings_font_family');
$cricket_league_pro_post_general_settings_subheadings_font_weight = get_theme_mod('cricket_league_pro_post_general_settings_subheadings_font_weight');


if ($cricket_league_pro_post_general_settings_subheadings_color != false || $cricket_league_pro_post_general_settings_subheadings_font_family != false || $cricket_league_pro_post_general_settings_subheadings_font_size != false || $cricket_league_pro_post_general_settings_subheadings_font_weight != false) {
	$custom_css .= 'div#single-post-page h3,div#single-post-page h4	,div#single-post-page .blog-que,div#single-post-page h5{';
	if ($cricket_league_pro_post_general_settings_subheadings_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_post_general_settings_subheadings_color) . ' ;';
	}
	if ($cricket_league_pro_post_general_settings_subheadings_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_post_general_settings_subheadings_font_family) . ' ;';
	}
	if ($cricket_league_pro_post_general_settings_subheadings_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_post_general_settings_subheadings_font_size) . 'px ;';
	}
	if ($cricket_league_pro_post_general_settings_subheadings_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_post_general_settings_subheadings_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_post_general_settings_page_text_color = get_theme_mod('cricket_league_pro_post_general_settings_page_text_color');
$cricket_league_pro_post_general_settings_page_text_font_size = get_theme_mod('cricket_league_pro_post_general_settings_page_text_font_size');
$cricket_league_pro_post_general_settings_page_text_font_family = get_theme_mod('cricket_league_pro_post_general_settings_page_text_font_family');
$cricket_league_pro_post_general_settings_page_text_font_weight = get_theme_mod('cricket_league_pro_post_general_settings_page_text_font_weight');


if ($cricket_league_pro_post_general_settings_page_text_color != false || $cricket_league_pro_post_general_settings_page_text_font_family != false || $cricket_league_pro_post_general_settings_page_text_font_size != false || $cricket_league_pro_post_general_settings_page_text_font_weight != false) {
	$custom_css .= '#single-post-page h6,.single-post h2,#comments h2#reply-title{';
	if ($cricket_league_pro_post_general_settings_page_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_post_general_settings_page_text_color) . ' ;';
	}
	if ($cricket_league_pro_post_general_settings_page_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_post_general_settings_page_text_font_family) . ' ;';
	}
	if ($cricket_league_pro_post_general_settings_page_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_post_general_settings_page_text_font_size) . 'px ;';
	}
	if ($cricket_league_pro_post_general_settings_page_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_post_general_settings_page_text_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

// Blog Page End 




$cricket_league_pro_policy_page_heading_color = get_theme_mod('cricket_league_pro_policy_page_heading_color');
$cricket_league_pro_policy_page_heading_font_size = get_theme_mod('cricket_league_pro_policy_page_heading_font_size');
$cricket_league_pro_policy_page_heading_font_family = get_theme_mod('cricket_league_pro_policy_page_heading_font_family');
$cricket_league_pro_policy_page_heading_font_weight = get_theme_mod('cricket_league_pro_policy_page_heading_font_weight');


if ($cricket_league_pro_policy_page_heading_color != false || $cricket_league_pro_policy_page_heading_font_family != false || $cricket_league_pro_policy_page_heading_font_size != false || $cricket_league_pro_policy_page_heading_font_weight != false) {
	$custom_css .= 'body.page-template-default h2{';
	if ($cricket_league_pro_policy_page_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_policy_page_heading_color) . ' ;';
	}
	if ($cricket_league_pro_policy_page_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_policy_page_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_policy_page_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_policy_page_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_policy_page_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_policy_page_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_policy_page_sub_headings_color = get_theme_mod('cricket_league_pro_policy_page_sub_headings_color');
$cricket_league_pro_policy_page_sub_headings_font_size = get_theme_mod('cricket_league_pro_policy_page_sub_headings_font_size');
$cricket_league_pro_policy_page_sub_headings_font_family = get_theme_mod('cricket_league_pro_policy_page_sub_headings_font_family');
$cricket_league_pro_policy_page_sub_headings_font_weight = get_theme_mod('cricket_league_pro_policy_page_sub_headings_font_weight');


if ($cricket_league_pro_policy_page_sub_headings_color != false || $cricket_league_pro_policy_page_sub_headings_font_family != false || $cricket_league_pro_policy_page_sub_headings_font_size != false || $cricket_league_pro_policy_page_sub_headings_font_weight != false) {
	$custom_css .= 'body.page-template-default h4{';
	if ($cricket_league_pro_policy_page_sub_headings_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_policy_page_sub_headings_color) . ' ;';
	}
	if ($cricket_league_pro_policy_page_sub_headings_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_policy_page_sub_headings_font_family) . ' ;';
	}
	if ($cricket_league_pro_policy_page_sub_headings_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_policy_page_sub_headings_font_size) . 'px ;';
	}
	if ($cricket_league_pro_policy_page_sub_headings_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_policy_page_sub_headings_font_weight) . ' ;';
	}
	$custom_css .= '}';
}



$cricket_league_pro_policy_page_page_texts_color = get_theme_mod('cricket_league_pro_policy_page_page_texts_color');
$cricket_league_pro_policy_page_page_texts_font_size = get_theme_mod('cricket_league_pro_policy_page_page_texts_font_size');
$cricket_league_pro_policy_page_page_texts_font_family = get_theme_mod('cricket_league_pro_policy_page_page_texts_font_family');
$cricket_league_pro_policy_page_page_texts_font_weight = get_theme_mod('cricket_league_pro_policy_page_page_texts_font_weight');


if ($cricket_league_pro_policy_page_page_texts_color != false || $cricket_league_pro_policy_page_page_texts_font_family != false || $cricket_league_pro_policy_page_page_texts_font_size != false || $cricket_league_pro_policy_page_page_texts_font_weight != false) {
	$custom_css .= '.outer_dpage .middle-content p, .middle-content ul li{';
	if ($cricket_league_pro_policy_page_page_texts_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_policy_page_page_texts_color) . ' ;';
	}
	if ($cricket_league_pro_policy_page_page_texts_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_policy_page_page_texts_font_family) . ' ;';
	}
	if ($cricket_league_pro_policy_page_page_texts_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_policy_page_page_texts_font_size) . 'px ;';
	}
	if ($cricket_league_pro_policy_page_page_texts_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_policy_page_page_texts_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

// Support page 


$cricket_league_pro_support_page_sub_heading_color = get_theme_mod('cricket_league_pro_support_page_sub_heading_color');
$cricket_league_pro_support_page_sub_heading_font_size = get_theme_mod('cricket_league_pro_support_page_sub_heading_font_size');
$cricket_league_pro_support_page_sub_heading_font_family = get_theme_mod('cricket_league_pro_support_page_sub_heading_font_family');
$cricket_league_pro_support_page_sub_heading_font_weight = get_theme_mod('cricket_league_pro_support_page_sub_heading_font_weight');


if ($cricket_league_pro_support_page_sub_heading_color != false || $cricket_league_pro_support_page_sub_heading_font_family != false || $cricket_league_pro_support_page_sub_heading_font_size != false || $cricket_league_pro_support_page_sub_heading_font_weight != false) {
	$custom_css .= 'section.support-page h4{';
	if ($cricket_league_pro_support_page_sub_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_support_page_sub_heading_color) . ' ;';
	}
	if ($cricket_league_pro_support_page_sub_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_support_page_sub_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_support_page_sub_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_support_page_sub_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_support_page_sub_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_support_page_sub_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}




$cricket_league_pro_support_page_heading_color = get_theme_mod('cricket_league_pro_support_page_heading_color');
$cricket_league_pro_support_page_heading_font_size = get_theme_mod('cricket_league_pro_support_page_heading_font_size');
$cricket_league_pro_support_page_heading_font_family = get_theme_mod('cricket_league_pro_support_page_heading_font_family');
$cricket_league_pro_support_page_heading_font_weight = get_theme_mod('cricket_league_pro_support_page_heading_font_weight');


if ($cricket_league_pro_support_page_heading_color != false || $cricket_league_pro_support_page_heading_font_family != false || $cricket_league_pro_support_page_heading_font_size != false || $cricket_league_pro_support_page_heading_font_weight != false) {
	$custom_css .= 'section.support-page h2{';
	if ($cricket_league_pro_support_page_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_support_page_heading_color) . ' !important;';
	}
	if ($cricket_league_pro_support_page_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_support_page_heading_font_family) . ' !important;';
	}
	if ($cricket_league_pro_support_page_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_support_page_heading_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_support_page_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_support_page_heading_font_weight) . ' !important;';
	}
	$custom_css .= '}';
}




// 404 Page settings 
$cricket_league_pro_404_page_title_color = get_theme_mod('cricket_league_pro_404_page_title_color');
$cricket_league_pro_404_page_title_font_family = get_theme_mod('cricket_league_pro_404_page_title_font_family');
$cricket_league_pro_404_page_title_font_size = get_theme_mod('cricket_league_pro_404_page_title_font_size');
$cricket_league_pro_404_page_sub_heading_font_weight = get_theme_mod('cricket_league_pro_404_page_sub_heading_font_weight');

if ($cricket_league_pro_404_page_title_color != false || $cricket_league_pro_404_page_title_font_family != false || $cricket_league_pro_404_page_title_font_size != false || $cricket_league_pro_404_page_sub_heading_font_weight != false) {
	$custom_css .= '.page-content h2.error-heading{';
	if ($cricket_league_pro_404_page_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_404_page_title_color) . ' ;';
	}
	if ($cricket_league_pro_404_page_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_404_page_title_font_family) . ' ;';
	}
	if ($cricket_league_pro_404_page_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_404_page_title_font_size) . 'px ;';
	}
	if ($cricket_league_pro_404_page_sub_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_404_page_sub_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_404_page_content_color = get_theme_mod('cricket_league_pro_404_page_content_color');
$cricket_league_pro_404_page_content_font_family = get_theme_mod('cricket_league_pro_404_page_content_font_family');
$cricket_league_pro_404_page_content_font_size = get_theme_mod('cricket_league_pro_404_page_content_font_size');
$cricket_league_pro_404_page_content_font_weight = get_theme_mod('cricket_league_pro_404_page_content_font_weight');


if ($cricket_league_pro_404_page_content_color != false || $cricket_league_pro_404_page_content_font_family != false || $cricket_league_pro_404_page_content_font_size != false || $cricket_league_pro_404_page_content_font_weight != false) {
	$custom_css .= 'p.error-para{';
	if ($cricket_league_pro_404_page_content_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_404_page_content_color) . ' ;';
	}
	if ($cricket_league_pro_404_page_content_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_404_page_content_font_family) . ' ;';
	}
	if ($cricket_league_pro_404_page_content_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_404_page_content_font_size) . 'px ;';
	}
	if ($cricket_league_pro_404_page_content_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_404_page_content_font_weight) . ' ;';
	}
	$custom_css .= '}';
}



$cricket_league_pro_404_page_button_color = get_theme_mod('cricket_league_pro_404_page_button_color');
$cricket_league_pro_404_page_button_font_family = get_theme_mod('cricket_league_pro_404_page_button_font_family');
$cricket_league_pro_404_page_button_font_size = get_theme_mod('cricket_league_pro_404_page_button_font_size');
$cricket_league_pro_404_page_sub_button_font_weight = get_theme_mod('cricket_league_pro_404_page_sub_button_font_weight');
$cricket_league_pro_404_page_button_bg_color = get_theme_mod('cricket_league_pro_404_page_button_bg_color');

if ($cricket_league_pro_404_page_button_color != false || $cricket_league_pro_404_page_button_font_family != false || $cricket_league_pro_404_page_button_font_size != false || $cricket_league_pro_404_page_sub_button_font_weight != false || $cricket_league_pro_404_page_button_bg_color != false) {
	$custom_css .= 'section.content_page.error-page a.theme-btn{';
	if ($cricket_league_pro_404_page_button_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_404_page_button_color) . ' ;';
	}
	if ($cricket_league_pro_404_page_button_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_404_page_button_font_family) . ' ;';
	}
	if ($cricket_league_pro_404_page_button_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_404_page_button_font_size) . 'px ;';
	}
	if ($cricket_league_pro_404_page_sub_button_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_404_page_sub_button_font_weight) . ' ;';
	}
	if ($cricket_league_pro_404_page_button_bg_color != false) {
		$custom_css .= 'background-color:' . esc_html($cricket_league_pro_404_page_button_bg_color) . ' ;';
	}
	$custom_css .= '}';
}

// 404 page end 

$cricket_league_pro_faq_bgimage_setting = get_theme_mod('cricket_league_pro_faq_bgimage_setting');


if ($cricket_league_pro_faq_bgimage_setting != false) {
	$custom_css .= 'section#faq{';
	if ($cricket_league_pro_faq_bgimage_setting != false) {
		$custom_css .= 'background-attachment:' . esc_html($cricket_league_pro_faq_bgimage_setting) . ' ;';
	}
	$custom_css .= '}';
}





$cricket_league_pro_testimonial_bgimage_setting = get_theme_mod('cricket_league_pro_testimonial_bgimage_setting');


if ($cricket_league_pro_testimonial_bgimage_setting != false) {
	$custom_css .= 'section#testimonials{';
	if ($cricket_league_pro_testimonial_bgimage_setting != false) {
		$custom_css .= 'background-attachment:' . esc_html($cricket_league_pro_testimonial_bgimage_setting) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_our_team_bgimage_setting = get_theme_mod('cricket_league_pro_our_team_bgimage_setting');


if ($cricket_league_pro_our_team_bgimage_setting != false) {
	$custom_css .= 'section#Our-team{';
	if ($cricket_league_pro_our_team_bgimage_setting != false) {
		$custom_css .= 'background-attachment:' . esc_html($cricket_league_pro_our_team_bgimage_setting) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_latest_blog_and_news_bg_image_attachment = get_theme_mod('cricket_league_pro_latest_blog_and_news_bg_image_attachment');


if ($cricket_league_pro_latest_blog_and_news_bg_image_attachment != false) {
	$custom_css .= 'section#blog-news{';
	if ($cricket_league_pro_latest_blog_and_news_bg_image_attachment != false) {
		$custom_css .= 'background-attachment:' . esc_html($cricket_league_pro_latest_blog_and_news_bg_image_attachment) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_genral_corner_decoration_section = get_theme_mod('cricket_league_pro_genral_corner_decoration_section');


if ($cricket_league_pro_genral_corner_decoration_section != false) {
	$custom_css .= '.pricing-card::after, .faq-img-wrapper::after, .GetInTouch::after, .customer-image::after{';
	if ($cricket_league_pro_genral_corner_decoration_section != 0) {
		$custom_css .= 'display:none ;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_genral_corner_decoration_section != 0) {
	$custom_css .= '.pricing-card,.customer-image,.GetInTouch_wrapper,.faq-img-wrapper{';
	$custom_css .= "clip-path: none;";
	$custom_css .= " }";
}


$cricket_league_pro_products_spinner_bgcolor = get_theme_mod('cricket_league_pro_products_spinner_bgcolor');


if ($cricket_league_pro_products_spinner_bgcolor != false) {
	$custom_css .= '.eco-box{';
	if ($cricket_league_pro_products_spinner_bgcolor != false) {
		$custom_css .= 'background-color:' . esc_html($cricket_league_pro_products_spinner_bgcolor) . ';';
	}
	$custom_css .= '}';
}




$cricket_league_pro_blog_page_para_para_color = get_theme_mod('cricket_league_pro_blog_page_para_para_color');
$cricket_league_pro_blog_page_para_para_font_size = get_theme_mod('cricket_league_pro_blog_page_para_para_font_size');
$cricket_league_pro_blog_page_para_para_font_family = get_theme_mod('cricket_league_pro_blog_page_para_para_font_family');
$cricket_league_pro_blog_page_para_para_font_weight = get_theme_mod('cricket_league_pro_blog_page_para_para_font_weight');


if ($cricket_league_pro_blog_page_para_para_color != false || $cricket_league_pro_blog_page_para_para_font_family != false || $cricket_league_pro_blog_page_para_para_font_size != false || $cricket_league_pro_blog_page_para_para_font_weight != false) {
	$custom_css .= '.blog-single .single-post p{';
	if ($cricket_league_pro_blog_page_para_para_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_blog_page_para_para_color) . ' !important;';
	}
	if ($cricket_league_pro_blog_page_para_para_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_blog_page_para_para_font_family) . ' !important;';
	}
	if ($cricket_league_pro_blog_page_para_para_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_blog_page_para_para_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_blog_page_para_para_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_blog_page_para_para_font_weight) . ' !important;';
	}
	$custom_css .= '}';
}




//  Padding Top
$cricket_league_pro_section_slider_padding_top = get_theme_mod('cricket_league_pro_section-slider_padding_top');
$cricket_league_pro_section_matches_padding_top = get_theme_mod('cricket_league_pro_section-matches_padding_top');
$cricket_league_pro_section_aboutUs_padding_top = get_theme_mod('cricket_league_pro_section-aboutUs_padding_top');
$cricket_league_pro_section_clientSlider_padding_top = get_theme_mod('cricket_league_pro_section-clientSlider_padding_top');
$cricket_league_pro_section_seciton_teamPosition_top = get_theme_mod('cricket_league_pro_seciton-teamPosition_padding_top');
$cricket_league_pro_section_section_playerTab_top = get_theme_mod('cricket_league_pro_section-playerTab_padding_top');
$cricket_league_pro_section_whyChooseUs_padding_top = get_theme_mod('cricket_league_pro_section-whyChooseUs_padding_top');
$cricket_league_pro_section_productSlider_padding_top = get_theme_mod('cricket_league_pro_section-productSlider_padding_top');
$cricket_league_pro_section_upcomingEvt_padding_top = get_theme_mod('cricket_league_pro_section-upcomingEvt_padding_top');
$cricket_league_pro_section_testimonials_padding_top = get_theme_mod('cricket_league_pro_section-testimonials_padding_top');
$cricket_league_pro_section_trophies_padding_top = get_theme_mod('cricket_league_pro_section-trophies_padding_top');
$cricket_league_pro_section_blog_and_news_padding_top = get_theme_mod('cricket_league_pro_section-blog-and-news_padding_top');

// padding top settings 

if ($cricket_league_pro_section_slider_padding_top != false) {
	$custom_css .= 'section#slider{';
	if ($cricket_league_pro_section_slider_padding_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_slider_padding_top) . 'px !important;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_section_matches_padding_top != false) {
	$custom_css .= '#banner-below{';
	if ($cricket_league_pro_section_matches_padding_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_matches_padding_top) . 'px ;';
	}
	$custom_css .= '}';
}

if ($cricket_league_pro_section_aboutUs_padding_top != false) {
	$custom_css .= 'section#about-us{';
	if ($cricket_league_pro_section_aboutUs_padding_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_aboutUs_padding_top) . 'px ;';
	}
	$custom_css .= '}';
}

if ($cricket_league_pro_section_clientSlider_padding_top != false) {
	$custom_css .= 'section#partnerSlider{';
	if ($cricket_league_pro_section_clientSlider_padding_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_clientSlider_padding_top) . 'px ;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_section_seciton_teamPosition_top != false) {
	$custom_css .= 'section#leagueTable{';
	if ($cricket_league_pro_section_seciton_teamPosition_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_seciton_teamPosition_top) . 'px !important;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_section_whyChooseUs_padding_top != false) {
	$custom_css .= 'section#whyChooseUs{';
	if ($cricket_league_pro_section_whyChooseUs_padding_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_whyChooseUs_padding_top) . 'px ;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_section_section_playerTab_top != false) {
	$custom_css .= 'section.playertab{';
	if ($cricket_league_pro_section_section_playerTab_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_section_playerTab_top) . 'px ;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_section_productSlider_padding_top != false) {
	$custom_css .= 'section.products.section-space{';
	if ($cricket_league_pro_section_productSlider_padding_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_productSlider_padding_top) . 'px ;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_section_upcomingEvt_padding_top != false) {
	$custom_css .= 'section#upcoming-evt{';
	if ($cricket_league_pro_section_upcomingEvt_padding_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_upcomingEvt_padding_top) . 'px ;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_section_testimonials_padding_top != false) {
	$custom_css .= 'section#testimonials{';
	if ($cricket_league_pro_section_testimonials_padding_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_testimonials_padding_top) . 'px ;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_section_trophies_padding_top != false) {
	$custom_css .= 'section#trophies{';
	if ($cricket_league_pro_section_trophies_padding_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_trophies_padding_top) . 'px ;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_section_blog_and_news_padding_top != false) {
	$custom_css .= 'section#blog-news{';
	if ($cricket_league_pro_section_blog_and_news_padding_top != false) {
		$custom_css .= 'padding-top: ' . esc_html($cricket_league_pro_section_blog_and_news_padding_top) . 'px ;';
	}
	$custom_css .= '}';
}
// padding top setting 

// Policy Pages 

/*-------------------Layout-----------------------*/
// Boxed or full width layout
$cricket_league_pro_radio_boxed_full_layout = get_theme_mod('cricket_league_pro_radio_boxed_full_layout');
$cricket_league_pro_radio_boxed_full_layout_value = get_theme_mod('cricket_league_pro_radio_boxed_full_layout_value');

$define_layout = get_theme_mod('cricket_league_pro_radio_boxed_full_layout');
if ('boxed' == $define_layout) {
	$custom_css .= 'body{';
	$custom_css .= 'max-width: ' . esc_html($cricket_league_pro_radio_boxed_full_layout_value) . 'px !important;';
	$custom_css .= 'margin: 0 auto  !important;';
	$custom_css .= 'width: 100% ;';
	$custom_css .= '}';
}


//General Button Color Pallete option

$cricket_league_pro_hi_first_color = get_theme_mod('cricket_league_pro_hi_first_color');
$cricket_league_pro_hi_scnd_color = get_theme_mod('cricket_league_pro_hi_scnd_color');
/*-------------------Primary Color --------------------*/
$custom_css .= ':root{
	--primary-color: ' . esc_html($cricket_league_pro_hi_first_color) . ' !important;
	--secondary-color: ' . esc_html($cricket_league_pro_hi_scnd_color) . ' !important;
}';


$cricket_league_pro_image_below_heading = get_theme_mod('cricket_league_pro_image_below_heading');
$cricket_league_pro_h4_font_weight = get_theme_mod('cricket_league_pro_h4_font_weight');
$cricket_league_pro_h5_font_weight = get_theme_mod('cricket_league_pro_h5_font_weight');
$cricket_league_pro_h6_font_weight = get_theme_mod('cricket_league_pro_h6_font_weight');



if ($cricket_league_pro_dropdownbg_item_hovercolor != false) {
	$custom_css .= '#header .primary_nav>.menu-item-has-children>ul>li a:hover{
		color: ' . esc_html($cricket_league_pro_dropdownbg_item_hovercolor) . ' !important;
}';
}

$cricket_league_pro_body_font_family = get_theme_mod('cricket_league_pro_body_font_family');
if ($cricket_league_pro_body_font_family) {
	$custom_css .= 'html body,h1#dynamic-color,h1,h2,h3,h4,h5,h6,a,div,label,button,p,span.banner-tag,.main-navigation a,.whyChooseUs-counter span,.info-bar p a,.info-bar p, span.topbar.data{';
	if ($cricket_league_pro_body_font_family != false) {
		$custom_css .= 'font-family: ' . esc_html($cricket_league_pro_body_font_family) . ' !important;';
	}
}

$cricket_league_pro_body_color = get_theme_mod('cricket_league_pro_body_color');
if ($cricket_league_pro_body_color) {
	if ($cricket_league_pro_body_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_body_color) . ' !important;';
	}
}
$cricket_league_pro_body_font_size = get_theme_mod('cricket_league_pro_body_font_size');
if ($cricket_league_pro_body_font_size) {
	if ($cricket_league_pro_body_font_size != false) {
		$custom_css .= 'font-size: ' . esc_html($cricket_league_pro_body_font_size) . 'px;';
	}
}
$custom_css .= '}';




$cricket_league_pro_h1_font_family = get_theme_mod('cricket_league_pro_h1_font_family');
$cricket_league_pro_h1_font_size = get_theme_mod('cricket_league_pro_h1_font_size');
$cricket_league_pro_h1_font_weight = get_theme_mod('cricket_league_pro_h1_font_weight');
$cricket_league_pro_h1_color = get_theme_mod('cricket_league_pro_h1_color');
$cricket_league_pro_h2_font_family = get_theme_mod('cricket_league_pro_h2_font_family');
$cricket_league_pro_h2_font_size = get_theme_mod('cricket_league_pro_h2_font_size');
$cricket_league_pro_h2_font_weight = get_theme_mod('cricket_league_pro_h2_font_weight');
$cricket_league_pro_h2_color = get_theme_mod('cricket_league_pro_h2_color');
$cricket_league_pro_h3_font_family = get_theme_mod('cricket_league_pro_h3_font_family');
$cricket_league_pro_h3_font_size = get_theme_mod('cricket_league_pro_h3_font_size');
$cricket_league_pro_h3_font_weight = get_theme_mod('cricket_league_pro_h3_font_weight');
$cricket_league_pro_h3_color = get_theme_mod('cricket_league_pro_h3_color');
$cricket_league_pro_h4_font_family = get_theme_mod('cricket_league_pro_h4_font_family');
$cricket_league_pro_h4_font_size = get_theme_mod('cricket_league_pro_h4_font_size');
$cricket_league_pro_h4_color = get_theme_mod('cricket_league_pro_h4_color');
$cricket_league_pro_h5_font_family = get_theme_mod('cricket_league_pro_h5_font_family');
$cricket_league_pro_h5_font_size = get_theme_mod('cricket_league_pro_h5_font_size');
$cricket_league_pro_h5_color = get_theme_mod('cricket_league_pro_h5_color');
$cricket_league_pro_h6_font_family = get_theme_mod('cricket_league_pro_h6_font_family');
$cricket_league_pro_h6_font_size = get_theme_mod('cricket_league_pro_h6_font_size');
$cricket_league_pro_h6_color = get_theme_mod('cricket_league_pro_h6_color');
$cricket_league_pro_paragarpah_font_family = get_theme_mod('cricket_league_pro_paragarpah_font_family');
$cricket_league_pro_para_font_size = get_theme_mod('cricket_league_pro_para_font_size');
$cricket_league_pro_para_font_weight = get_theme_mod('cricket_league_pro_para_font_weight');
$cricket_league_pro_para_color = get_theme_mod('cricket_league_pro_para_color');
/*-------------------h1-----------------------*/
if ($cricket_league_pro_h1_font_family != false || $cricket_league_pro_h1_color != false || $cricket_league_pro_h1_font_size != false || $cricket_league_pro_h1_font_weight != false) {
	$custom_css .= 'h1, #slider h1{';
	if ($cricket_league_pro_h1_font_family != false) {
		$custom_css .= 'font-family: ' . esc_html($cricket_league_pro_h1_font_family) . ' ;';
	}
	if ($cricket_league_pro_h1_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_h1_color) . ';';
	}
	if ($cricket_league_pro_h1_font_size != false) {
		$custom_css .= 'font-size: ' . esc_html($cricket_league_pro_h1_font_size) . 'px ;';
	}
	if ($cricket_league_pro_h1_font_weight != false) {
		$custom_css .= 'font-weight: ' . esc_html($cricket_league_pro_h1_font_weight) . ';';
	}
	$custom_css .= '}';
}

/*-------------------h2-----------------------*/
if ($cricket_league_pro_h2_font_family != false || $cricket_league_pro_h2_color != false || $cricket_league_pro_h2_font_size != false || $cricket_league_pro_h2_font_weight != false) {
	$custom_css .= 'body h2,h2,section h2, h2.woocommerce-loop-product__title, h2.woocommerce-loop-category__title, .postbox h2, #comments h2.comments-title, #comments h2#reply-title{';
	if ($cricket_league_pro_h2_font_family != false) {
		$custom_css .= 'font-family: ' . esc_html($cricket_league_pro_h2_font_family) . ' !important;';
	}
	if ($cricket_league_pro_h2_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_h2_color) . '!important;';
	}
	if ($cricket_league_pro_h2_font_size != false) {
		$custom_css .= 'font-size: ' . esc_html($cricket_league_pro_h2_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_h2_font_weight != false) {
		$custom_css .= 'font-weight: ' . esc_html($cricket_league_pro_h2_font_weight) . '!important;';
	}
	$custom_css .= '}';
}
/*-------------------h3-----------------------*/
if ($cricket_league_pro_h3_font_family != false || $cricket_league_pro_h3_color != false || $cricket_league_pro_h3_font_size != false || $cricket_league_pro_h3_font_weight != false) {
	$custom_css .= 'h3, #new-product .product-name a, #feature-product .product-name a ,.footer-top-col h3,h3.product-name a ,.container #blog-right-sidebar h3, #footer h3, #category .section-title h3, .collectionbox-text h3 a, .collection-inner h3, #author .section-title h3, #testimonials .section-title h3, #testimonials h3 small, .collectionbox-text h3, .news_box_outer h3, .section-title h3, section h3, h3.contact-page, .contac_form h3, #full-width-blog .postbox h3, .postbox h3, #comments h3.comment-reply-title, #sidebar h3, .tesimonialtitle a{';
	if ($cricket_league_pro_h3_font_family != false) {
		$custom_css .= 'font-family: ' . esc_html($cricket_league_pro_h3_font_family) . ' !important;';
	}
	if ($cricket_league_pro_h3_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_h3_color) . '!important;';
	}
	if ($cricket_league_pro_h3_font_size != false) {
		$custom_css .= 'font-size: ' . esc_html($cricket_league_pro_h3_font_size) . '!importantpx;';
	}
	if ($cricket_league_pro_h3_font_weight != false) {
		$custom_css .= 'font-weight: ' . esc_html($cricket_league_pro_h3_font_weight) . '!important;';
	}
	$custom_css .= '}';

}
if ($cricket_league_pro_h4_font_family != false || $cricket_league_pro_h4_color != false || $cricket_league_pro_h4_font_size != false || $cricket_league_pro_h4_font_weight != false) {
	$custom_css .= 'h4, section h4, .news-title a{';
	if ($cricket_league_pro_h4_font_family != false) {
		$custom_css .= 'font-family: ' . esc_html($cricket_league_pro_h4_font_family) . '!important;';
	}
	if ($cricket_league_pro_h4_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_h4_color) . '!important;';
	}
	if ($cricket_league_pro_h4_font_size != false) {
		$custom_css .= 'font-size: ' . esc_html($cricket_league_pro_h4_font_size) . 'px!important;';
	}
	if ($cricket_league_pro_h4_font_weight != false) {
		$custom_css .= 'font-weight: ' . esc_html($cricket_league_pro_h4_font_weight) . '!important;';
	}
	$custom_css .= '}';
	$custom_css .= '}';
}
if ($cricket_league_pro_h5_font_family != false || $cricket_league_pro_h5_color != false || $cricket_league_pro_h5_font_size != false || $cricket_league_pro_h5_font_weight != false) {
	$custom_css .= 'h5, section h5, .inner_product h5,#feature-product h5.product-offer-price, #slider h5,#use-code .code-no{';
	if ($cricket_league_pro_h5_font_family != false) {
		$custom_css .= 'font-family: ' . esc_html($cricket_league_pro_h5_font_family) . ' !important;';
	}
	if ($cricket_league_pro_h5_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_h5_color) . '!important;';
	}
	if ($cricket_league_pro_h5_font_size != false) {
		$custom_css .= 'font-size: ' . esc_html($cricket_league_pro_h5_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_h5_font_weight != false) {
		$custom_css .= 'font-weight: ' . esc_html($cricket_league_pro_h5_font_weight) . '!important;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_h6_font_family != false || $cricket_league_pro_h6_color != false || $cricket_league_pro_h6_font_size != false || $cricket_league_pro_h6_font_weight != false) {
	$custom_css .= 'body h6,#new-product h6.product-brand, #feature-product h6.product-brand,h6,#latest_post .collectionbox-text h6, .postbox h6, #category .categorytitle a{';
	if ($cricket_league_pro_h6_font_family != false) {
		$custom_css .= 'font-family: ' . esc_html($cricket_league_pro_h6_font_family) . '!important;';
	}
	if ($cricket_league_pro_h6_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_h6_color) . '!important;';
	}
	if ($cricket_league_pro_h6_font_size != false) {
		$custom_css .= 'font-size: ' . esc_html($cricket_league_pro_h6_font_size) . 'px!important;';
	}
	if ($cricket_league_pro_h6_font_weight != false) {
		$custom_css .= 'font-weight: ' . esc_html($cricket_league_pro_h6_font_weight) . '!important;';
	}
	$custom_css .= '}';
}
if ($cricket_league_pro_paragarpah_font_family != false || $cricket_league_pro_para_color != false || $cricket_league_pro_para_font_size != false || $cricket_league_pro_para_font_weight != false) {
	$custom_css .= '.testimonial-content p,.whyChooseUs-right p,.step-text p,.about-inner p,.banner-content p,#single-post-page p,p.error-para,p.text-bold,p.text-normal,p.best-text,.para,li.list-item,p.sevices_para,ul.featured-list li,section#pricing_sec-us p,.GetInTouch.heading p.section-desc,.accordion-wrapper .answer,.outer_dpage .middle-content p, .middle-content ul li,p{';
	if ($cricket_league_pro_paragarpah_font_family != false) {
		$custom_css .= 'font-family: ' . esc_html($cricket_league_pro_paragarpah_font_family) . ' !important;';
	}
	if ($cricket_league_pro_para_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_para_color) . '!important;';
	}
	if ($cricket_league_pro_para_font_size != false) {
		$custom_css .= 'font-size: ' . esc_html($cricket_league_pro_para_font_size) . 'px!important;';
	}
	if ($cricket_league_pro_para_font_weight != false) {
		$custom_css .= 'font-weight: ' . esc_html($cricket_league_pro_para_font_weight) . '!important;';
	}
	$custom_css .= '}';
}

// Banner section 
$cricket_league_pro_banner_tag_color = get_theme_mod('cricket_league_pro_banner_tag_color');
$cricket_league_pro_banner_tag_font_size = get_theme_mod('cricket_league_pro_banner_tag_font_size');
$cricket_league_pro_banner_tag_font_family = get_theme_mod('cricket_league_pro_banner_tag_font_family');
$cricket_league_pro_banner_tag_font_weight = get_theme_mod('cricket_league_pro_banner_tag_font_weight');

if ($cricket_league_pro_banner_tag_color != false || $cricket_league_pro_banner_tag_font_family != false || $cricket_league_pro_banner_tag_font_size != false || $cricket_league_pro_banner_tag_font_weight != false) {
	$custom_css .= 'span.banner-tag{';
	if ($cricket_league_pro_banner_tag_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_banner_tag_color) . ' ;';
	}
	if ($cricket_league_pro_banner_tag_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_banner_tag_font_family) . ' ;';
	}
	if ($cricket_league_pro_banner_tag_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_banner_tag_font_size) . 'px ;';
	}
	if ($cricket_league_pro_banner_tag_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_banner_tag_font_weight) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_slider_heading_color = get_theme_mod('cricket_league_pro_slider_heading_color');
$cricket_league_pro_slider_heading_font_size = get_theme_mod('cricket_league_pro_slider_heading_font_size');
$cricket_league_pro_slider_heading_font_family = get_theme_mod('cricket_league_pro_slider_heading_font_family');
$cricket_league_pro_slider_heading_font_weight = get_theme_mod('cricket_league_pro_slider_heading_font_weight');


if ($cricket_league_pro_slider_heading_color != false || $cricket_league_pro_slider_heading_font_family != false || $cricket_league_pro_slider_heading_font_size != false || $cricket_league_pro_slider_heading_font_weight != false) {
	$custom_css .= '.banner-heading {';
	if ($cricket_league_pro_slider_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_slider_heading_color) . ' ;';
	}
	if ($cricket_league_pro_slider_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_slider_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_slider_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_slider_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_slider_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_slider_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_slider_text_color = get_theme_mod('cricket_league_pro_slider_text_color');
$cricket_league_pro_slider_text_font_size = get_theme_mod('cricket_league_pro_slider_text_font_size');
$cricket_league_pro_slider_text_font_family = get_theme_mod('cricket_league_pro_slider_text_font_family');
$cricket_league_pro_slider_text_font_weight = get_theme_mod('cricket_league_pro_slider_text_font_weight');


if ($cricket_league_pro_slider_text_color != false || $cricket_league_pro_slider_text_font_family != false || $cricket_league_pro_slider_text_font_size != false || $cricket_league_pro_slider_text_font_weight != false) {
	$custom_css .= 'section#slider p{';
	if ($cricket_league_pro_slider_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_slider_text_color) . ' ;';
	}
	if ($cricket_league_pro_slider_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_slider_text_font_family) . ';';
	}
	if ($cricket_league_pro_slider_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_slider_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_slider_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_slider_text_font_weight) . ';';
	}
	$custom_css .= '}';
}

$cricket_league_pro_slider_btntext_color = get_theme_mod('cricket_league_pro_slider_btntext_color');
$cricket_league_pro_slider_btntext_font_size = get_theme_mod('cricket_league_pro_slider_btntext_font_size');
$cricket_league_pro_slider_btntext_font_family = get_theme_mod('cricket_league_pro_slider_btntext_font_family');
$cricket_league_pro_slider_btntext_font_weight = get_theme_mod('cricket_league_pro_slider_btntext_font_weight');
$cricket_league_pro_slider_btn_bgcolor_one = get_theme_mod('cricket_league_pro_slider_btn_bgcolor_one');


if ($cricket_league_pro_slider_btntext_color != false || $cricket_league_pro_slider_btntext_font_family != false || $cricket_league_pro_slider_btntext_font_size != false || $cricket_league_pro_slider_btntext_font_weight != false) {
	$custom_css .= 'section#slider a.theme-btn.orange{';
	if ($cricket_league_pro_slider_btntext_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_slider_btntext_color) . ' ;';
	}
	if ($cricket_league_pro_slider_btntext_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_slider_btntext_font_family) . ';';
	}
	if ($cricket_league_pro_slider_btntext_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_slider_btntext_font_size) . 'px;';
	}
	if ($cricket_league_pro_slider_btntext_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_slider_btntext_font_weight) . ';';
	}
	if ($cricket_league_pro_slider_btn_bgcolor_one != false) {
		$custom_css .= 'background-color: ' . esc_html($cricket_league_pro_slider_btn_bgcolor_one) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_header_text_color = get_theme_mod('cricket_league_pro_header_text_color');

if ($cricket_league_pro_header_text_color != false || $cricket_league_pro_header_text_font_family != false || $cricket_league_pro_header_text_font_size != false) {
	$custom_css .= '#site_top .topbar-text p,span.topbar.data{';

	if ($cricket_league_pro_header_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_header_text_color) . ';';
	}
	if ($cricket_league_pro_header_text_font_family != false) {
		$custom_css .= 'font-family: ' . esc_html($cricket_league_pro_header_text_font_family) . ';';
	}
	if ($cricket_league_pro_header_text_font_size != false) {
		$custom_css .= 'font-size: ' . esc_html($cricket_league_pro_header_text_font_size) . 'px;';
	}
	$custom_css .= '}';
}
$vw_logistics_servics_topbar_background_color = get_theme_mod('vw_logistics_servics_topbar_background_color');

if ($vw_logistics_servics_topbar_background_color != false) {
	$custom_css .= '.top_bar{
			background-color:' . esc_html($vw_logistics_servics_topbar_background_color) . ' !important;';
	$custom_css .= '}';
}
$cricket_league_pro_header_social_icon_color = get_theme_mod('cricket_league_pro_header_social_icon_color');
$cricket_league_pro_topbar_icon_size = get_theme_mod('cricket_league_pro_topbar_icon_size');

if ($cricket_league_pro_topbar_icon_size != false || $cricket_league_pro_header_social_icon_color != false) {
	$custom_css .= '.socialbox a i::before,.socialbox a .fab::before{
			font-size:' . esc_html($cricket_league_pro_topbar_icon_size) . 'px ;
			color: ' . esc_html($cricket_league_pro_header_social_icon_color) . ';
        }';
}
$cricket_league_pro_playBtn_text_color = get_theme_mod('cricket_league_pro_playBtn_text_color');
$cricket_league_pro_playBtn_text_font_size = get_theme_mod('cricket_league_pro_playBtn_text_font_size');
$cricket_league_pro_playBtn_text_font_family = get_theme_mod('cricket_league_pro_playBtn_text_font_family');
$cricket_league_pro_playBtn_text_font_weight = get_theme_mod('cricket_league_pro_playBtn_text_font_weight');


if ($cricket_league_pro_playBtn_text_color != false || $cricket_league_pro_playBtn_text_font_family != false || $cricket_league_pro_playBtn_text_font_size != false || $cricket_league_pro_playBtn_text_font_weight != false) {
	$custom_css .= 'span.inner-text{';
	if ($cricket_league_pro_playBtn_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playBtn_text_color) . ' ;';
	}
	if ($cricket_league_pro_playBtn_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playBtn_text_font_family) . ';';
	}
	if ($cricket_league_pro_playBtn_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playBtn_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_playBtn_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playBtn_text_font_weight) . ';';
	}

}
$cricket_league_pro_latest_see_all_btn_color = get_theme_mod('cricket_league_pro_latest_see_all_btn_color');
$cricket_league_pro_latest_see_all_btn_font_size = get_theme_mod('cricket_league_pro_latest_see_all_btn_font_size');
$cricket_league_pro_latest_see_all_btn_font_family = get_theme_mod('cricket_league_pro_latest_see_all_btn_font_family');
$cricket_league_pro_latest_see_all_btn_font_weight = get_theme_mod('cricket_league_pro_latest_see_all_btn_font_weight');


if ($cricket_league_pro_latest_see_all_btn_color != false || $cricket_league_pro_latest_see_all_btn_font_family != false || $cricket_league_pro_latest_see_all_btn_font_size != false || $cricket_league_pro_latest_see_all_btn_font_weight != false) {
	$custom_css .= 'section#banner-below a.theme-btn{';
	if ($cricket_league_pro_latest_see_all_btn_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_latest_see_all_btn_color) . ' ;';
	}
	if ($cricket_league_pro_latest_see_all_btn_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_latest_see_all_btn_font_family) . ';';
	}
	if ($cricket_league_pro_latest_see_all_btn_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_latest_see_all_btn_font_size) . 'px;';
	}
	if ($cricket_league_pro_latest_see_all_btn_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_latest_see_all_btn_font_weight) . ';';
	}

	$custom_css .= '}';
}
$cricket_league_pro_latest_match_leauge_color = get_theme_mod('cricket_league_pro_latest_match_leauge_color');
$cricket_league_pro_latest_match_leauge_font_size = get_theme_mod('cricket_league_pro_latest_match_leauge_font_size');
$cricket_league_pro_latest_match_leauge_font_family = get_theme_mod('cricket_league_pro_latest_match_leauge_font_family');
$cricket_league_pro_latest_match_leauge_font_weight = get_theme_mod('cricket_league_pro_latest_match_leauge_font_weight');


if ($cricket_league_pro_latest_match_leauge_color != false || $cricket_league_pro_latest_match_leauge_font_family != false || $cricket_league_pro_latest_match_leauge_font_size != false || $cricket_league_pro_latest_match_leauge_font_weight != false) {
	$custom_css .= 'section.match h3{';
	if ($cricket_league_pro_latest_match_leauge_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_latest_match_leauge_color) . ' ;';
	}
	if ($cricket_league_pro_latest_match_leauge_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_latest_match_leauge_font_family) . ';';
	}
	if ($cricket_league_pro_latest_match_leauge_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_latest_match_leauge_font_size) . 'px;';
	}
	if ($cricket_league_pro_latest_match_leauge_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_latest_match_leauge_font_weight) . ';';
	}

	$custom_css .= '}';
}
$cricket_league_pro_latest_match_text_color = get_theme_mod('cricket_league_pro_latest_match_text_color');
$cricket_league_pro_latest_match_text_font_size = get_theme_mod('cricket_league_pro_latest_match_text_font_size');
$cricket_league_pro_latest_match_text_font_family = get_theme_mod('cricket_league_pro_latest_match_text_font_family');
$cricket_league_pro_latest_match_text_font_weight = get_theme_mod('cricket_league_pro_latest_match_text_font_weight');

if ($cricket_league_pro_latest_match_text_color != false || $cricket_league_pro_latest_match_text_font_family != false || $cricket_league_pro_latest_match_text_font_size != false || $cricket_league_pro_latest_match_text_font_weight != false) {
	$custom_css .= 'p.match-descreption,.result-wrap{';
	if ($cricket_league_pro_latest_match_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_latest_match_text_color) . ' ;';
	}
	if ($cricket_league_pro_latest_match_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_latest_match_text_font_family) . ';';
	}
	if ($cricket_league_pro_latest_match_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_latest_match_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_latest_match_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_latest_match_text_font_weight) . ';';
	}

	$custom_css .= '}';
}
$cricket_league_pro_latest_match_team_title_color = get_theme_mod('cricket_league_pro_latest_match_team_title_color');
$cricket_league_pro_latest_match_team_title_font_size = get_theme_mod('cricket_league_pro_latest_match_team_title_font_size');
$cricket_league_pro_latest_match_team_title_font_family = get_theme_mod('cricket_league_pro_latest_match_team_title_font_family');
$cricket_league_pro_latest_match_team_title_font_weight = get_theme_mod('cricket_league_pro_latest_match_team_title_font_weight');


if ($cricket_league_pro_latest_match_team_title_color != false || $cricket_league_pro_latest_match_team_title_font_family != false || $cricket_league_pro_latest_match_team_title_font_size != false || $cricket_league_pro_latest_match_team_title_font_weight != false) {
	$custom_css .= 'h6.the-name{';
	if ($cricket_league_pro_latest_match_team_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_latest_match_team_title_color) . ' ;';
	}
	if ($cricket_league_pro_latest_match_team_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_latest_match_team_title_font_family) . ';';
	}
	if ($cricket_league_pro_latest_match_team_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_latest_match_team_title_font_size) . 'px;';
	}
	if ($cricket_league_pro_latest_match_team_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_latest_match_team_title_font_weight) . ';';
	}

	$custom_css .= '}';
}

$cricket_league_pro_latest_match_score_color = get_theme_mod('cricket_league_pro_latest_match_score_color');
$cricket_league_pro_latest_match_score_font_size = get_theme_mod('cricket_league_pro_latest_match_score_font_size');
$cricket_league_pro_latest_match_score_font_family = get_theme_mod('cricket_league_pro_latest_match_score_font_family');
$cricket_league_pro_latest_match_score_font_weight = get_theme_mod('cricket_league_pro_latest_match_score_font_weight');


if ($cricket_league_pro_latest_match_score_color != false || $cricket_league_pro_latest_match_score_font_family != false || $cricket_league_pro_latest_match_score_font_size != false || $cricket_league_pro_latest_match_score_font_weight != false) {
	$custom_css .= '.slide-wrap p{';
	if ($cricket_league_pro_latest_match_score_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_latest_match_score_color) . ' ;';
	}
	if ($cricket_league_pro_latest_match_score_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_latest_match_score_font_family) . ';';
	}
	if ($cricket_league_pro_latest_match_score_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_latest_match_score_font_size) . 'px;';
	}
	if ($cricket_league_pro_latest_match_score_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_latest_match_score_font_weight) . ';';
	}

	$custom_css .= '}';
}

$cricket_league_pro_latest_heading_color = get_theme_mod('cricket_league_pro_latest_heading_color');
$cricket_league_pro_latest_heading_font_size = get_theme_mod('cricket_league_pro_latest_heading_font_size');
$cricket_league_pro_latest_heading_font_family = get_theme_mod('cricket_league_pro_latest_heading_font_family');
$cricket_league_pro_latest_heading_font_weight = get_theme_mod('cricket_league_pro_latest_heading_font_weight');


if ($cricket_league_pro_latest_heading_color != false || $cricket_league_pro_latest_heading_font_family != false || $cricket_league_pro_latest_heading_font_size != false || $cricket_league_pro_latest_heading_font_weight != false) {
	$custom_css .= 'section#banner-below .timer-wrapper h2{';
	if ($cricket_league_pro_latest_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_latest_heading_color) . ' ;';
	}
	if ($cricket_league_pro_latest_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_latest_heading_font_family) . ';';
	}
	if ($cricket_league_pro_latest_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_latest_heading_font_size) . 'px;';
	}
	if ($cricket_league_pro_latest_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_latest_heading_font_weight) . ';';
	}

	$custom_css .= '}';
}
$cricket_league_pro_latest_matchcardBG_color = get_theme_mod('cricket_league_pro_latest_matchcardBG_color');

if ($cricket_league_pro_latest_matchcardBG_color != false) {
	$custom_css .= '.slide-wrap{';
	if ($cricket_league_pro_latest_matchcardBG_color != false) {
		$custom_css .= 'background-color: ' . esc_html($cricket_league_pro_latest_matchcardBG_color) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_next_match_title_color = get_theme_mod('cricket_league_pro_next_match_title_color');
$cricket_league_pro_next_match_title_font_size = get_theme_mod('cricket_league_pro_next_match_title_font_size');
$cricket_league_pro_next_match_title_font_family = get_theme_mod('cricket_league_pro_next_match_title_font_family');
$cricket_league_pro_next_match_title_font_weight = get_theme_mod('cricket_league_pro_next_match_title_font_weight');


if ($cricket_league_pro_next_match_title_color != false || $cricket_league_pro_next_match_title_font_family != false || $cricket_league_pro_next_match_title_font_size != false || $cricket_league_pro_next_match_title_font_weight != false) {
	$custom_css .= 'section#banner-below .timer-wrapper h2{';
	if ($cricket_league_pro_next_match_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_next_match_title_color) . ' ;';
	}
	if ($cricket_league_pro_next_match_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_next_match_title_font_family) . ';';
	}
	if ($cricket_league_pro_next_match_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_next_match_title_font_size) . 'px;';
	}
	if ($cricket_league_pro_next_match_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_next_match_title_font_weight) . ';';
	}

	$custom_css .= '}';
}

$cricket_league_pro_timer_text_color = get_theme_mod('cricket_league_pro_timer_text_color');
$cricket_league_pro_timer_text_font_size = get_theme_mod('cricket_league_pro_timer_text_font_size');
$cricket_league_pro_timer_text_font_family = get_theme_mod('cricket_league_pro_timer_text_font_family');
$cricket_league_pro_timer_text_font_weight = get_theme_mod('cricket_league_pro_timer_text_font_weight');


if ($cricket_league_pro_timer_text_color != false || $cricket_league_pro_timer_text_font_family != false || $cricket_league_pro_timer_text_font_size != false || $cricket_league_pro_timer_text_font_weight != false) {
	$custom_css .= 'section#banner-below p.countdown.sp-countdown span {';
	if ($cricket_league_pro_timer_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_timer_text_color) . ' !important;';
	}
	if ($cricket_league_pro_timer_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_timer_text_font_family) . '!important;';
	}
	if ($cricket_league_pro_timer_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_timer_text_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_timer_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_timer_text_font_weight) . '; !important';
	}

	$custom_css .= '}';
}
$cricket_league_pro_latest_location_text_color = get_theme_mod('cricket_league_pro_latest_location_text_color');
$cricket_league_pro_latest_location_text_font_size = get_theme_mod('cricket_league_pro_latest_location_text_font_size');
$cricket_league_pro_latest_location_text_font_family = get_theme_mod('cricket_league_pro_latest_location_text_font_family');
$cricket_league_pro_latest_location_text_font_weight = get_theme_mod('cricket_league_pro_latest_location_text_font_weight');


if ($cricket_league_pro_latest_location_text_color != false || $cricket_league_pro_latest_location_text_font_family != false || $cricket_league_pro_latest_location_text_font_size != false || $cricket_league_pro_latest_location_text_font_weight != false) {
	$custom_css .= '.card-bottom .loaction-wrapper p{';
	if ($cricket_league_pro_latest_location_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_latest_location_text_color) . ' ;';
	}
	if ($cricket_league_pro_latest_location_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_latest_location_text_font_family) . ';';
	}
	if ($cricket_league_pro_latest_location_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_latest_location_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_latest_location_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_latest_location_text_font_weight) . ';';
	}

	$custom_css .= '}';
}
;


$cricket_league_pro_latest_location_text_color = get_theme_mod('cricket_league_pro_latest_location_text_color');
$cricket_league_pro_latest_location_text_font_size = get_theme_mod('cricket_league_pro_latest_location_text_font_size');
$cricket_league_pro_latest_location_text_font_family = get_theme_mod('cricket_league_pro_latest_location_text_font_family');
$cricket_league_pro_latest_location_text_font_weight = get_theme_mod('cricket_league_pro_latest_location_text_font_weight');


if ($cricket_league_pro_latest_location_text_color != false || $cricket_league_pro_latest_location_text_font_family != false || $cricket_league_pro_latest_location_text_font_size != false || $cricket_league_pro_latest_location_text_font_weight != false) {
	$custom_css .= '.loaction-wrapper {';
	if ($cricket_league_pro_latest_location_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_latest_location_text_color) . ' ;';
	}
	if ($cricket_league_pro_latest_location_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_latest_location_text_font_family) . ';';
	}
	if ($cricket_league_pro_latest_location_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_latest_location_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_latest_location_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_latest_location_text_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_latest_locationbtn_text_color = get_theme_mod('cricket_league_pro_latest_locationbtn_text_color');
$cricket_league_pro_latest_locationbtn_text_font_size = get_theme_mod('cricket_league_pro_latest_locationbtn_text_font_size');
$cricket_league_pro_latest_locationbtn_text_font_family = get_theme_mod('cricket_league_pro_latest_locationbtn_text_font_family');
$cricket_league_pro_latest_locationbtn_text_font_weight = get_theme_mod('cricket_league_pro_latest_locationbtn_text_font_weight');


if ($cricket_league_pro_latest_locationbtn_text_color != false || $cricket_league_pro_latest_locationbtn_text_font_family != false || $cricket_league_pro_latest_locationbtn_text_font_size != false || $cricket_league_pro_latest_locationbtn_text_font_weight != false) {
	$custom_css .= '.next-match-wrap a.theme-btn{';
	if ($cricket_league_pro_latest_locationbtn_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_latest_locationbtn_text_color) . ' ;';
	}
	if ($cricket_league_pro_latest_locationbtn_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_latest_locationbtn_text_font_family) . ';';
	}
	if ($cricket_league_pro_latest_locationbtn_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_latest_locationbtn_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_latest_locationbtn_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_latest_locationbtn_text_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_aboutus_headertag_text_color = get_theme_mod('cricket_league_pro_aboutus_headertag_text_color');
$cricket_league_pro_aboutus_headertag_text_font_size = get_theme_mod('cricket_league_pro_aboutus_headertag_text_font_size');
$cricket_league_pro_aboutus_headertag_text_font_family = get_theme_mod('cricket_league_pro_aboutus_headertag_text_font_family');
$cricket_league_pro_aboutus_headertag_text_font_weight = get_theme_mod('cricket_league_pro_aboutus_headertag_text_font_weight');


if ($cricket_league_pro_aboutus_headertag_text_color != false || $cricket_league_pro_aboutus_headertag_text_font_family != false || $cricket_league_pro_aboutus_headertag_text_font_size != false || $cricket_league_pro_aboutus_headertag_text_font_weight != false) {
	$custom_css .= 'section#about-us .heading-tag{';
	if ($cricket_league_pro_aboutus_headertag_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_headertag_text_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_headertag_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_headertag_text_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_headertag_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_headertag_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_headertag_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_headertag_text_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_aboutus_heading_text_color = get_theme_mod('cricket_league_pro_aboutus_heading_text_color');
$cricket_league_pro_aboutus_heading_text_font_size = get_theme_mod('cricket_league_pro_aboutus_heading_text_font_size');
$cricket_league_pro_aboutus_heading_text_font_family = get_theme_mod('cricket_league_pro_aboutus_heading_text_font_family');
$cricket_league_pro_aboutus_heading_text_font_weight = get_theme_mod('cricket_league_pro_aboutus_heading_text_font_weight');


if ($cricket_league_pro_aboutus_heading_text_color != false || $cricket_league_pro_aboutus_heading_text_font_family != false || $cricket_league_pro_aboutus_heading_text_font_size != false || $cricket_league_pro_aboutus_heading_text_font_weight != false) {
	$custom_css .= 'section#about-us .heading-wrap h2{';
	if ($cricket_league_pro_aboutus_heading_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_heading_text_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_heading_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_heading_text_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_heading_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_heading_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_heading_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_heading_text_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_aboutus_section_text_color = get_theme_mod('cricket_league_pro_aboutus_section_text_color');
$cricket_league_pro_aboutus_section_text_font_size = get_theme_mod('cricket_league_pro_aboutus_section_text_font_size');
$cricket_league_pro_aboutus_section_text_font_family = get_theme_mod('cricket_league_pro_aboutus_section_text_font_family');
$cricket_league_pro_aboutus_section_text_font_weight = get_theme_mod('cricket_league_pro_aboutus_section_text_font_weight');


if ($cricket_league_pro_aboutus_section_text_color != false || $cricket_league_pro_aboutus_section_text_font_family != false || $cricket_league_pro_aboutus_section_text_font_size != false || $cricket_league_pro_aboutus_section_text_font_weight != false) {
	$custom_css .= 'section#about-us p{';
	if ($cricket_league_pro_aboutus_section_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_section_text_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_section_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_section_text_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_section_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_section_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_section_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_section_text_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_aboutus_button_color = get_theme_mod('cricket_league_pro_aboutus_button_color');
$cricket_league_pro_aboutus_button_font_size = get_theme_mod('cricket_league_pro_aboutus_button_font_size');
$cricket_league_pro_aboutus_button_font_family = get_theme_mod('cricket_league_pro_aboutus_button_font_family');
$cricket_league_pro_aboutus_button_font_weight = get_theme_mod('cricket_league_pro_aboutus_button_font_weight');


if ($cricket_league_pro_aboutus_button_color != false || $cricket_league_pro_aboutus_button_font_family != false || $cricket_league_pro_aboutus_button_font_size != false || $cricket_league_pro_aboutus_button_font_weight != false) {
	$custom_css .= 'section#about-us a.theme-btn{';
	if ($cricket_league_pro_aboutus_button_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_button_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_button_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_button_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_button_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_button_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_button_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_button_font_weight) . ';';
	}

	$custom_css .= '}';
}
;


$cricket_league_pro_aboutus_chariman_name_color = get_theme_mod('cricket_league_pro_aboutus_chariman_name_color');
$cricket_league_pro_aboutus_chariman_name_font_size = get_theme_mod('cricket_league_pro_aboutus_chariman_name_font_size');
$cricket_league_pro_aboutus_chariman_name_font_family = get_theme_mod('cricket_league_pro_aboutus_chariman_name_font_family');
$cricket_league_pro_aboutus_chariman_name_font_weight = get_theme_mod('cricket_league_pro_aboutus_chariman_name_font_weight');


if ($cricket_league_pro_aboutus_chariman_name_color != false || $cricket_league_pro_aboutus_chariman_name_font_family != false || $cricket_league_pro_aboutus_chariman_name_font_size != false || $cricket_league_pro_aboutus_chariman_name_font_weight != false) {
	$custom_css .= 'section#about-us .chairman-name{';
	if ($cricket_league_pro_aboutus_chariman_name_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_chariman_name_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_chariman_name_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_chariman_name_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_chariman_name_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_chariman_name_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_chariman_name_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_chariman_name_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_designation_title_color = get_theme_mod('cricket_league_pro_designation_title_color');
$cricket_league_pro_designation_title_font_size = get_theme_mod('cricket_league_pro_designation_title_font_size');
$cricket_league_pro_designation_title_font_family = get_theme_mod('cricket_league_pro_designation_title_font_family');
$cricket_league_pro_designation_title_font_weight = get_theme_mod('cricket_league_pro_designation_title_font_weight');


if ($cricket_league_pro_designation_title_color != false || $cricket_league_pro_designation_title_font_family != false || $cricket_league_pro_designation_title_font_size != false || $cricket_league_pro_designation_title_font_weight != false) {
	$custom_css .= '.about-right .wrap-inner span{';
	if ($cricket_league_pro_designation_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_designation_title_color) . ' ;';
	}
	if ($cricket_league_pro_designation_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_designation_title_font_family) . ';';
	}
	if ($cricket_league_pro_designation_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_designation_title_font_size) . 'px;';
	}
	if ($cricket_league_pro_designation_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_designation_title_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_years_experience_color = get_theme_mod('cricket_league_pro_years_experience_color');
$cricket_league_pro_years_experience_font_size = get_theme_mod('cricket_league_pro_years_experience_font_size');
$cricket_league_pro_years_experience_font_family = get_theme_mod('cricket_league_pro_years_experience_font_family');
$cricket_league_pro_years_experience_font_weight = get_theme_mod('cricket_league_pro_years_experience_font_weight');


if ($cricket_league_pro_years_experience_color != false || $cricket_league_pro_years_experience_font_family != false || $cricket_league_pro_years_experience_font_size != false || $cricket_league_pro_years_experience_font_weight != false) {
	$custom_css .= 'section#about-us span.number{';
	if ($cricket_league_pro_years_experience_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_years_experience_color) . ' ;';
	}
	if ($cricket_league_pro_years_experience_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_years_experience_font_family) . ';';
	}
	if ($cricket_league_pro_years_experience_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_years_experience_font_size) . 'px;';
	}
	if ($cricket_league_pro_years_experience_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_years_experience_font_weight) . ';';
	}

	$custom_css .= '}';
}
;



$cricket_league_pro_experience_text_color = get_theme_mod('cricket_league_pro_experience_text_color');
$cricket_league_pro_experience_text_font_size = get_theme_mod('cricket_league_pro_experience_text_font_size');
$cricket_league_pro_experience_text_font_family = get_theme_mod('cricket_league_pro_experience_text_font_family');
$cricket_league_pro_experience_text_font_weight = get_theme_mod('cricket_league_pro_experience_text_font_weight');


if ($cricket_league_pro_experience_text_color != false || $cricket_league_pro_experience_text_font_family != false || $cricket_league_pro_experience_text_font_size != false || $cricket_league_pro_experience_text_font_weight != false) {
	$custom_css .= 'section#about-us .ex-text{';
	if ($cricket_league_pro_experience_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_experience_text_color) . ' ;';
	}
	if ($cricket_league_pro_experience_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_experience_text_font_family) . ';';
	}
	if ($cricket_league_pro_experience_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_experience_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_experience_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_experience_text_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_league_table_heading_color = get_theme_mod('cricket_league_pro_league_table_heading_color');
$cricket_league_pro_league_table_heading_font_size = get_theme_mod('cricket_league_pro_league_table_heading_font_size');
$cricket_league_pro_league_table_heading_font_family = get_theme_mod('cricket_league_pro_league_table_heading_font_family');
$cricket_league_pro_league_table_heading_font_weight = get_theme_mod('cricket_league_pro_league_table_heading_font_weight');


if ($cricket_league_pro_league_table_heading_color != false || $cricket_league_pro_league_table_heading_font_family != false || $cricket_league_pro_league_table_heading_font_size != false || $cricket_league_pro_league_table_heading_font_weight != false) {
	$custom_css .= 'section#leagueTable .heading-wrap h2, section#leagueTable .heading-tag{';
	if ($cricket_league_pro_league_table_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_league_table_heading_color) . ' ;';
	}
	if ($cricket_league_pro_league_table_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_league_table_heading_font_family) . ';';
	}
	if ($cricket_league_pro_league_table_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_league_table_heading_font_size) . 'px;';
	}
	if ($cricket_league_pro_league_table_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_league_table_heading_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_league_pointsTable_header_color = get_theme_mod('cricket_league_pro_league_pointsTable_header_color');
$cricket_league_pro_league_pointsTable_header_font_size = get_theme_mod('cricket_league_pro_league_pointsTable_header_font_size');
$cricket_league_pro_league_pointsTable_header_font_family = get_theme_mod('cricket_league_pro_league_pointsTable_header_font_family');
$cricket_league_pro_league_pointsTable_header_font_weight = get_theme_mod('cricket_league_pro_league_pointsTable_header_font_weight');


if ($cricket_league_pro_league_pointsTable_header_color != false || $cricket_league_pro_league_pointsTable_header_font_family != false || $cricket_league_pro_league_pointsTable_header_font_size != false || $cricket_league_pro_league_pointsTable_header_font_weight != false) {
	$custom_css .= 'section#leagueTable .sorting,.postion-right th{';
	if ($cricket_league_pro_league_pointsTable_header_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_league_pointsTable_header_color) . ' !important;';
	}
	if ($cricket_league_pro_league_pointsTable_header_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_league_pointsTable_header_font_family) . '!important;';
	}
	if ($cricket_league_pro_league_pointsTable_header_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_league_pointsTable_header_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_league_pointsTable_header_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_league_pointsTable_header_font_weight) . '!important;';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_league_table_text_color = get_theme_mod('cricket_league_pro_league_table_text_color');
$cricket_league_pro_league_table_text_font_size = get_theme_mod('cricket_league_pro_league_table_text_font_size');
$cricket_league_pro_league_table_text_font_family = get_theme_mod('cricket_league_pro_league_table_text_font_family');
$cricket_league_pro_league_table_text_font_weight = get_theme_mod('cricket_league_pro_league_table_text_font_weight');


if ($cricket_league_pro_league_table_text_color != false || $cricket_league_pro_league_table_text_font_family != false || $cricket_league_pro_league_table_text_font_size != false || $cricket_league_pro_league_table_text_font_weight != false) {
	$custom_css .= 'section#leagueTable td.data-name,.postion-right td,td.data-rank,section#leagueTable .sp-data-table td{';
	if ($cricket_league_pro_league_table_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_league_table_text_color) . ' !important;';
	}
	if ($cricket_league_pro_league_table_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_league_table_text_font_family) . '!important;;';
	}
	if ($cricket_league_pro_league_table_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_league_table_text_font_size) . 'px !important;;';
	}
	if ($cricket_league_pro_league_table_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_league_table_text_font_weight) . ' !important;;';
	}
	$custom_css .= '}';
}
;


$cricket_league_pro_upcoming_table_heading_tag_color = get_theme_mod('cricket_league_pro_upcoming_table_heading_tag_color');
$cricket_league_pro_upcoming_table_heading_tag_font_size = get_theme_mod('cricket_league_pro_upcoming_table_heading_tag_font_size');
$cricket_league_pro_upcoming_table_heading_tag_font_family = get_theme_mod('cricket_league_pro_upcoming_table_heading_tag_font_family');
$cricket_league_pro_upcoming_table_heading_tag_font_weight = get_theme_mod('cricket_league_pro_upcoming_table_heading_tag_font_weight');


if ($cricket_league_pro_upcoming_table_heading_tag_color != false || $cricket_league_pro_upcoming_table_heading_tag_font_family != false || $cricket_league_pro_upcoming_table_heading_tag_font_size != false || $cricket_league_pro_upcoming_table_heading_tag_font_weight != false) {
	$custom_css .= 'section#leagueTable .heading-tag{';
	if ($cricket_league_pro_upcoming_table_heading_tag_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_table_heading_tag_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_table_heading_tag_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_table_heading_tag_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_table_heading_tag_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_table_heading_tag_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_table_heading_tag_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_table_heading_tag_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_upcoming_table_heading_color = get_theme_mod('cricket_league_pro_upcoming_table_heading_color');
$cricket_league_pro_upcoming_table_heading_font_size = get_theme_mod('cricket_league_pro_upcoming_table_heading_font_size');
$cricket_league_pro_upcoming_table_heading_font_family = get_theme_mod('cricket_league_pro_upcoming_table_heading_font_family');
$cricket_league_pro_upcoming_table_heading_font_weight = get_theme_mod('cricket_league_pro_upcoming_table_heading_font_weight');


if ($cricket_league_pro_upcoming_table_heading_color != false || $cricket_league_pro_upcoming_table_heading_font_family != false || $cricket_league_pro_upcoming_table_heading_font_size != false || $cricket_league_pro_upcoming_table_heading_font_weight != false) {
	$custom_css .= 'section#leagueTable .heading-wrap h2{';
	if ($cricket_league_pro_upcoming_table_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_table_heading_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_table_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_table_heading_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_table_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_table_heading_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_table_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_table_heading_font_weight) . ';';
	}

	$custom_css .= '}';
}
;


$cricket_league_pro_playerTab_heading_color = get_theme_mod('cricket_league_pro_playerTab_heading_color');
$cricket_league_pro_playerTab_heading_font_size = get_theme_mod('cricket_league_pro_playerTab_heading_font_size');
$cricket_league_pro_playerTab_heading_font_family = get_theme_mod('cricket_league_pro_playerTab_heading_font_family');
$cricket_league_pro_playerTab_heading_font_weight = get_theme_mod('cricket_league_pro_playerTab_heading_font_weight');


if ($cricket_league_pro_playerTab_heading_color != false || $cricket_league_pro_playerTab_heading_font_family != false || $cricket_league_pro_playerTab_heading_font_size != false || $cricket_league_pro_playerTab_heading_font_weight != false) {
	$custom_css .= 'section.playertab .heading-wrap h2{';
	if ($cricket_league_pro_playerTab_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_heading_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_heading_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_heading_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_heading_font_weight) . ';';
	}

	$custom_css .= '}';
}
;


$cricket_league_pro_playerTab_tag_color = get_theme_mod('cricket_league_pro_playerTab_tag_color');
$cricket_league_pro_playerTab_tag_font_size = get_theme_mod('cricket_league_pro_playerTab_tag_font_size');
$cricket_league_pro_playerTab_tag_font_family = get_theme_mod('cricket_league_pro_playerTab_tag_font_family');
$cricket_league_pro_playerTab_tag_font_weight = get_theme_mod('cricket_league_pro_playerTab_tag_font_weight');


if ($cricket_league_pro_playerTab_tag_color != false || $cricket_league_pro_playerTab_tag_font_family != false || $cricket_league_pro_playerTab_tag_font_size != false || $cricket_league_pro_playerTab_tag_font_weight != false) {
	$custom_css .= 'section.playertab .heading-tag{';
	if ($cricket_league_pro_playerTab_tag_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_tag_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_tag_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_tag_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_tag_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_tag_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_tag_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_tag_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_playerTab_list_teamName_color = get_theme_mod('cricket_league_pro_playerTab_list_teamName_color');
$cricket_league_pro_playerTab_list_teamName_font_size = get_theme_mod('cricket_league_pro_playerTab_list_teamName_font_size');
$cricket_league_pro_playerTab_list_teamName_font_family = get_theme_mod('cricket_league_pro_playerTab_list_teamName_font_family');
$cricket_league_pro_playerTab_list_teamName_font_weight = get_theme_mod('cricket_league_pro_playerTab_list_teamName_font_weight');


if ($cricket_league_pro_playerTab_list_teamName_color != false || $cricket_league_pro_playerTab_list_teamName_font_family != false || $cricket_league_pro_playerTab_list_teamName_font_size != false || $cricket_league_pro_playerTab_list_teamName_font_weight != false) {
	$custom_css .= '.team-name{';
	if ($cricket_league_pro_playerTab_list_teamName_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_list_teamName_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_list_teamName_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_list_teamName_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_list_teamName_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_list_teamName_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_list_teamName_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_list_teamName_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_playerTab_list_playerName_color = get_theme_mod('cricket_league_pro_playerTab_list_playerName_color');
$cricket_league_pro_playerTab_list_playerName_font_size = get_theme_mod('cricket_league_pro_playerTab_list_playerName_font_size');
$cricket_league_pro_playerTab_list_playerName_font_family = get_theme_mod('cricket_league_pro_playerTab_list_playerName_font_family');
$cricket_league_pro_playerTab_list_playerName_font_weight = get_theme_mod('cricket_league_pro_playerTab_list_playerName_font_weight');


if ($cricket_league_pro_playerTab_list_playerName_color != false || $cricket_league_pro_playerTab_list_playerName_font_family != false || $cricket_league_pro_playerTab_list_playerName_font_size != false || $cricket_league_pro_playerTab_list_playerName_font_weight != false) {
	$custom_css .= '.player-name{';
	if ($cricket_league_pro_playerTab_list_playerName_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_list_playerName_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_list_playerName_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_list_playerName_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_list_playerName_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_list_playerName_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_list_playerName_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_list_playerName_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_playerTab_list_position_color = get_theme_mod('cricket_league_pro_playerTab_list_position_color');
$cricket_league_pro_playerTab_list_position_font_size = get_theme_mod('cricket_league_pro_playerTab_list_position_font_size');
$cricket_league_pro_playerTab_list_position_font_family = get_theme_mod('cricket_league_pro_playerTab_list_position_font_family');
$cricket_league_pro_playerTab_list_position_font_weight = get_theme_mod('cricket_league_pro_playerTab_list_position_font_weight');


if ($cricket_league_pro_playerTab_list_position_color != false || $cricket_league_pro_playerTab_list_position_font_family != false || $cricket_league_pro_playerTab_list_position_font_size != false || $cricket_league_pro_playerTab_list_position_font_weight != false) {
	$custom_css .= '.tab-inner small{';
	if ($cricket_league_pro_playerTab_list_position_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_list_position_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_list_position_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_list_position_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_list_position_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_list_position_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_list_position_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_list_position_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_playerTab_player_teamName_color = get_theme_mod('cricket_league_pro_playerTab_player_teamName_color');
$cricket_league_pro_playerTab_player_teamName_font_size = get_theme_mod('cricket_league_pro_playerTab_player_teamName_font_size');
$cricket_league_pro_playerTab_player_teamName_font_family = get_theme_mod('cricket_league_pro_playerTab_player_teamName_font_family');
$cricket_league_pro_playerTab_player_teamName_font_weight = get_theme_mod('cricket_league_pro_playerTab_player_teamName_font_weight');


if ($cricket_league_pro_playerTab_player_teamName_color != false || $cricket_league_pro_playerTab_player_teamName_font_family != false || $cricket_league_pro_playerTab_player_teamName_font_size != false || $cricket_league_pro_playerTab_player_teamName_font_weight != false) {
	$custom_css .= '.main-team-name{';
	if ($cricket_league_pro_playerTab_player_teamName_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_player_teamName_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_player_teamName_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_player_teamName_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_player_teamName_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_player_teamName_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_player_teamName_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_player_teamName_font_weight) . ';';
	}

	$custom_css .= '}';
}
;


$cricket_league_pro_playerTab_player_playerName_color = get_theme_mod('cricket_league_pro_playerTab_player_playerName_color');
$cricket_league_pro_playerTab_player_playerName_font_size = get_theme_mod('cricket_league_pro_playerTab_player_playerName_font_size');
$cricket_league_pro_playerTab_player_playerName_font_family = get_theme_mod('cricket_league_pro_playerTab_player_playerName_font_family');
$cricket_league_pro_playerTab_player_playerName_font_weight = get_theme_mod('cricket_league_pro_playerTab_player_playerName_font_weight');


if ($cricket_league_pro_playerTab_player_playerName_color != false || $cricket_league_pro_playerTab_player_playerName_font_family != false || $cricket_league_pro_playerTab_player_playerName_font_size != false || $cricket_league_pro_playerTab_player_playerName_font_weight != false) {
	$custom_css .= '.main-player-title{';
	if ($cricket_league_pro_playerTab_player_playerName_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_player_playerName_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_player_playerName_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_player_playerName_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_player_playerName_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_player_playerName_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_player_playerName_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_player_playerName_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_playerTab_player_attr_color = get_theme_mod('cricket_league_pro_playerTab_player_attr_color');
$cricket_league_pro_playerTab_player_attr_font_size = get_theme_mod('cricket_league_pro_playerTab_player_attr_font_size');
$cricket_league_pro_playerTab_player_attr_font_family = get_theme_mod('cricket_league_pro_playerTab_player_attr_font_family');
$cricket_league_pro_playerTab_player_attr_font_weight = get_theme_mod('cricket_league_pro_playerTab_player_attr_font_weight');


if ($cricket_league_pro_playerTab_player_attr_color != false || $cricket_league_pro_playerTab_player_attr_font_family != false || $cricket_league_pro_playerTab_player_attr_font_size != false || $cricket_league_pro_playerTab_player_attr_font_weight != false) {
	$custom_css .= '.deatil-name{';
	if ($cricket_league_pro_playerTab_player_attr_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_player_attr_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_player_attr_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_player_attr_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_player_attr_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_player_attr_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_player_attr_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_player_attr_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_playerTab_player_attr_value_color = get_theme_mod('cricket_league_pro_playerTab_player_attr_value_color');
$cricket_league_pro_playerTab_player_attr_value_font_size = get_theme_mod('cricket_league_pro_playerTab_player_attr_value_font_size');
$cricket_league_pro_playerTab_player_attr_value_font_family = get_theme_mod('cricket_league_pro_playerTab_player_attr_value_font_family');
$cricket_league_pro_playerTab_player_attr_value_font_weight = get_theme_mod('cricket_league_pro_playerTab_player_attr_value_font_weight');


if ($cricket_league_pro_playerTab_player_attr_value_color != false || $cricket_league_pro_playerTab_player_attr_value_font_family != false || $cricket_league_pro_playerTab_player_attr_value_font_size != false || $cricket_league_pro_playerTab_player_attr_value_font_weight != false) {
	$custom_css .= '.deatial-value{';
	if ($cricket_league_pro_playerTab_player_attr_value_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_player_attr_value_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_player_attr_value_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_player_attr_value_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_player_attr_value_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_player_attr_value_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_player_attr_value_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_player_attr_value_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_playerTab_player_season_color = get_theme_mod('cricket_league_pro_playerTab_player_season_color');
$cricket_league_pro_playerTab_player_season_font_size = get_theme_mod('cricket_league_pro_playerTab_player_season_font_size');
$cricket_league_pro_playerTab_player_season_font_family = get_theme_mod('cricket_league_pro_playerTab_player_season_font_family');
$cricket_league_pro_playerTab_player_season_font_weight = get_theme_mod('cricket_league_pro_playerTab_player_season_font_weight');


if ($cricket_league_pro_playerTab_player_season_color != false || $cricket_league_pro_playerTab_player_season_font_family != false || $cricket_league_pro_playerTab_player_season_font_size != false || $cricket_league_pro_playerTab_player_season_font_weight != false) {
	$custom_css .= '.season-name{';
	if ($cricket_league_pro_playerTab_player_season_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_player_season_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_player_season_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_player_season_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_player_season_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_player_season_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_player_season_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_player_season_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_playerTab_player_scoreNum_color = get_theme_mod('cricket_league_pro_playerTab_player_scoreNum_color');
$cricket_league_pro_playerTab_player_scoreNum_font_size = get_theme_mod('cricket_league_pro_playerTab_player_scoreNum_font_size');
$cricket_league_pro_playerTab_player_scoreNum_font_family = get_theme_mod('cricket_league_pro_playerTab_player_scoreNum_font_family');
$cricket_league_pro_playerTab_player_scoreNum_font_weight = get_theme_mod('cricket_league_pro_playerTab_player_scoreNum_font_weight');


if ($cricket_league_pro_playerTab_player_scoreNum_color != false || $cricket_league_pro_playerTab_player_scoreNum_font_family != false || $cricket_league_pro_playerTab_player_scoreNum_font_size != false || $cricket_league_pro_playerTab_player_scoreNum_font_weight != false) {
	$custom_css .= '.season-details .num{';
	if ($cricket_league_pro_playerTab_player_scoreNum_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_player_scoreNum_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_player_scoreNum_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_player_scoreNum_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_player_scoreNum_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_player_scoreNum_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_player_scoreNum_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_player_scoreNum_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_playerTab_player_score_name_color = get_theme_mod('cricket_league_pro_playerTab_player_score_name_color');
$cricket_league_pro_playerTab_player_score_name_font_size = get_theme_mod('cricket_league_pro_playerTab_player_score_name_font_size');
$cricket_league_pro_playerTab_player_score_name_font_family = get_theme_mod('cricket_league_pro_playerTab_player_score_name_font_family');
$cricket_league_pro_playerTab_player_score_name_font_weight = get_theme_mod('cricket_league_pro_playerTab_player_score_name_font_weight');


if ($cricket_league_pro_playerTab_player_score_name_color != false || $cricket_league_pro_playerTab_player_score_name_font_family != false || $cricket_league_pro_playerTab_player_score_name_font_size != false || $cricket_league_pro_playerTab_player_score_name_font_weight != false) {
	$custom_css .= 'small.stat-name{';
	if ($cricket_league_pro_playerTab_player_score_name_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_playerTab_player_score_name_color) . ' ;';
	}
	if ($cricket_league_pro_playerTab_player_score_name_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_playerTab_player_score_name_font_family) . ';';
	}
	if ($cricket_league_pro_playerTab_player_score_name_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_playerTab_player_score_name_font_size) . 'px;';
	}
	if ($cricket_league_pro_playerTab_player_score_name_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_playerTab_player_score_name_font_weight) . ';';
	}

	$custom_css .= '}';
}
;





// Why Choose Section 
$cricket_league_pro_faq_accordion_bgcolor = get_theme_mod('cricket_league_pro_faq_accordion_bgcolor');

if ($cricket_league_pro_faq_accordion_bgcolor != false) {
	$custom_css .= 'section#whyChooseUs{';
	if ($cricket_league_pro_faq_accordion_bgcolor != false) {
		$custom_css .= 'background-image:url(' . esc_html($cricket_league_pro_faq_accordion_bgcolor) . ');';
	}
	$custom_css .= '}';
}

$cricket_league_pro_whychooseus_heading_color = get_theme_mod('cricket_league_pro_whychooseus_heading_color');
$cricket_league_pro_whychooseus_heading_font_size = get_theme_mod('cricket_league_pro_whychooseus_heading_font_size');
$cricket_league_pro_whychooseus_heading_font_family = get_theme_mod('cricket_league_pro_whychooseus_heading_font_family');
$cricket_league_pro_whychooseus_heading_font_weight = get_theme_mod('cricket_league_pro_whychooseus_heading_font_weight');


if ($cricket_league_pro_whychooseus_heading_color != false || $cricket_league_pro_whychooseus_heading_font_family != false || $cricket_league_pro_whychooseus_heading_font_size != false || $cricket_league_pro_whychooseus_heading_font_weight != false) {
	$custom_css .= 'section#whyChooseUs h2{';
	if ($cricket_league_pro_whychooseus_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_whychooseus_heading_color) . ' ;';
	}
	if ($cricket_league_pro_whychooseus_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_whychooseus_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_whychooseus_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_whychooseus_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_whychooseus_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_whychooseus_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_whychooseus_heading_tag_color = get_theme_mod('cricket_league_pro_whychooseus_heading_tag_color');
$cricket_league_pro_whychooseus_heading_tag_font_size = get_theme_mod('cricket_league_pro_whychooseus_heading_tag_font_size');
$cricket_league_pro_whychooseus_heading_tag_font_family = get_theme_mod('cricket_league_pro_whychooseus_heading_tag_font_family');
$cricket_league_pro_whychooseus_heading_tag_font_weight = get_theme_mod('cricket_league_pro_whychooseus_heading_tag_font_weight');


if ($cricket_league_pro_whychooseus_heading_tag_color != false || $cricket_league_pro_whychooseus_heading_tag_font_family != false || $cricket_league_pro_whychooseus_heading_tag_font_size != false || $cricket_league_pro_whychooseus_heading_tag_font_weight != false) {
	$custom_css .= 'section#whyChooseUs .heading-tagline{';
	if ($cricket_league_pro_whychooseus_heading_tag_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_whychooseus_heading_tag_color) . ' ;';
	}
	if ($cricket_league_pro_whychooseus_heading_tag_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_whychooseus_heading_tag_font_family) . ' ;';
	}
	if ($cricket_league_pro_whychooseus_heading_tag_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_whychooseus_heading_tag_font_size) . 'px ;';
	}
	if ($cricket_league_pro_whychooseus_heading_tag_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_whychooseus_heading_tag_font_weight) . ' ;';
	}
	$custom_css .= '}';
}





$cricket_league_pro_text_field_color = get_theme_mod('cricket_league_pro_text_field_color');
$cricket_league_pro_text_field_font_size = get_theme_mod('cricket_league_pro_text_field_font_size');
$cricket_league_pro_text_field_font_family = get_theme_mod('cricket_league_pro_text_field_font_family');
$cricket_league_pro_text_field_font_weight = get_theme_mod('cricket_league_pro_text_field_font_weight');


if ($cricket_league_pro_text_field_color != false || $cricket_league_pro_text_field_font_family != false || $cricket_league_pro_text_field_font_size != false || $cricket_league_pro_text_field_font_weight != false) {
	$custom_css .= '.whyChooseUs-right p{';
	if ($cricket_league_pro_text_field_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_text_field_color) . ' ;';
	}
	if ($cricket_league_pro_text_field_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_text_field_font_family) . ' ;';
	}
	if ($cricket_league_pro_text_field_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_text_field_font_size) . 'px ;';
	}
	if ($cricket_league_pro_text_field_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_text_field_font_weight) . ' ;';
	}
	$custom_css .= '}';
}



$cricket_league_pro_counter_text_color = get_theme_mod('cricket_league_pro_counter_text_color');
$cricket_league_pro_counter_text_font_size = get_theme_mod('cricket_league_pro_counter_text_font_size');
$cricket_league_pro_counter_text_font_family = get_theme_mod('cricket_league_pro_counter_text_font_family');
$cricket_league_pro_counter_text_font_weight = get_theme_mod('cricket_league_pro_counter_text_font_weight');


if ($cricket_league_pro_counter_text_color != false || $cricket_league_pro_counter_text_font_family != false || $cricket_league_pro_counter_text_font_size != false || $cricket_league_pro_counter_text_font_weight != false) {
	$custom_css .= '.whyChooseUs-counter .choose-counter-num {';
	if ($cricket_league_pro_counter_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_counter_text_color) . ' ;';
	}
	if ($cricket_league_pro_counter_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_counter_text_font_family) . ' ;';
	}
	if ($cricket_league_pro_counter_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_counter_text_font_size) . 'px ;';
	}
	if ($cricket_league_pro_counter_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_counter_text_font_weight) . ' ;';
	}
	$custom_css .= '}';
}



$cricket_league_pro_counter_title_color = get_theme_mod('cricket_league_pro_counter_title_color');
$cricket_league_pro_counter_title_font_size = get_theme_mod('cricket_league_pro_counter_title_font_size');
$cricket_league_pro_counter_title_font_family = get_theme_mod('cricket_league_pro_counter_title_font_family');
$cricket_league_pro_counter_title_font_weight = get_theme_mod('cricket_league_pro_counter_title_font_weight');


if ($cricket_league_pro_counter_title_color != false || $cricket_league_pro_counter_title_font_family != false || $cricket_league_pro_counter_title_font_size != false || $cricket_league_pro_counter_title_font_weight != false) {
	$custom_css .= '.whyChooseUs-counter span{';
	if ($cricket_league_pro_counter_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_counter_title_color) . ' ;';
	}
	if ($cricket_league_pro_counter_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_counter_title_font_family) . ' ;';
	}
	if ($cricket_league_pro_counter_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_counter_title_font_size) . 'px ;';
	}
	if ($cricket_league_pro_counter_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_counter_title_font_weight) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_faq_accordion_bgcolor = get_theme_mod('cricket_league_pro_faq_accordion_bgcolor');

if ($cricket_league_pro_faq_accordion_bgcolor != false) {
	$custom_css .= 'h3.accordion-click{';
	if ($cricket_league_pro_faq_accordion_bgcolor != false) {
		$custom_css .= 'background-color:' . esc_html($cricket_league_pro_faq_accordion_bgcolor) . ';';
	}
	$custom_css .= '}';
}


$cricket_league_pro_whychooseus_video_title_color = get_theme_mod('cricket_league_pro_whychooseus_video_title_color');
$cricket_league_pro_whychooseus_video_title_font_size = get_theme_mod('cricket_league_pro_whychooseus_video_title_font_size');
$cricket_league_pro_whychooseus_video_title_font_family = get_theme_mod('cricket_league_pro_whychooseus_video_title_font_family');
$cricket_league_pro_whychooseus_video_title_font_weight = get_theme_mod('cricket_league_pro_whychooseus_video_title_font_weight');


if ($cricket_league_pro_whychooseus_video_title_color != false || $cricket_league_pro_whychooseus_video_title_font_family != false || $cricket_league_pro_whychooseus_video_title_font_size != false || $cricket_league_pro_whychooseus_video_title_font_weight != false) {
	$custom_css .= '.choose-sec-vid-link p{';
	if ($cricket_league_pro_whychooseus_video_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_whychooseus_video_title_color) . ' !important;';
	}
	if ($cricket_league_pro_whychooseus_video_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_whychooseus_video_title_font_family) . ' !important;';
	}
	if ($cricket_league_pro_whychooseus_video_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_whychooseus_video_title_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_whychooseus_video_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_whychooseus_video_title_font_weight) . ' !important;';
	}
	$custom_css .= '}';
}


// Why Choose Section 
$cricket_league_pro_faq_accordion_bgcolor = get_theme_mod('cricket_league_pro_faq_accordion_bgcolor');

if ($cricket_league_pro_faq_accordion_bgcolor != false) {
	$custom_css .= 'section#whyChooseUs{';
	if ($cricket_league_pro_faq_accordion_bgcolor != false) {
		$custom_css .= 'background-image:url(' . esc_html($cricket_league_pro_faq_accordion_bgcolor) . ');';
	}
	$custom_css .= '}';
}

$cricket_league_pro_whychooseus_heading_color = get_theme_mod('cricket_league_pro_whychooseus_heading_color');
$cricket_league_pro_whychooseus_heading_font_size = get_theme_mod('cricket_league_pro_whychooseus_heading_font_size');
$cricket_league_pro_whychooseus_heading_font_family = get_theme_mod('cricket_league_pro_whychooseus_heading_font_family');
$cricket_league_pro_whychooseus_heading_font_weight = get_theme_mod('cricket_league_pro_whychooseus_heading_font_weight');


if ($cricket_league_pro_whychooseus_heading_color != false || $cricket_league_pro_whychooseus_heading_font_family != false || $cricket_league_pro_whychooseus_heading_font_size != false || $cricket_league_pro_whychooseus_heading_font_weight != false) {
	$custom_css .= 'section#whyChooseUs .heading-wrap h2{';
	if ($cricket_league_pro_whychooseus_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_whychooseus_heading_color) . ' ;';
	}
	if ($cricket_league_pro_whychooseus_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_whychooseus_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_whychooseus_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_whychooseus_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_whychooseus_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_whychooseus_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_whychooseus_heading_tag_color = get_theme_mod('cricket_league_pro_whychooseus_heading_tag_color');
$cricket_league_pro_whychooseus_heading_tag_font_size = get_theme_mod('cricket_league_pro_whychooseus_heading_tag_font_size');
$cricket_league_pro_whychooseus_heading_tag_font_family = get_theme_mod('cricket_league_pro_whychooseus_heading_tag_font_family');
$cricket_league_pro_whychooseus_heading_tag_font_weight = get_theme_mod('cricket_league_pro_whychooseus_heading_tag_font_weight');


if ($cricket_league_pro_whychooseus_heading_tag_color != false || $cricket_league_pro_whychooseus_heading_tag_font_family != false || $cricket_league_pro_whychooseus_heading_tag_font_size != false || $cricket_league_pro_whychooseus_heading_tag_font_weight != false) {
	$custom_css .= 'section#whyChooseUs .heading-tag{';
	if ($cricket_league_pro_whychooseus_heading_tag_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_whychooseus_heading_tag_color) . ' ;';
	}
	if ($cricket_league_pro_whychooseus_heading_tag_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_whychooseus_heading_tag_font_family) . ' ;';
	}
	if ($cricket_league_pro_whychooseus_heading_tag_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_whychooseus_heading_tag_font_size) . 'px ;';
	}
	if ($cricket_league_pro_whychooseus_heading_tag_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_whychooseus_heading_tag_font_weight) . ' ;';
	}
	$custom_css .= '}';
}





$cricket_league_pro_text_field_color = get_theme_mod('cricket_league_pro_text_field_color');
$cricket_league_pro_text_field_font_size = get_theme_mod('cricket_league_pro_text_field_font_size');
$cricket_league_pro_text_field_font_family = get_theme_mod('cricket_league_pro_text_field_font_family');
$cricket_league_pro_text_field_font_weight = get_theme_mod('cricket_league_pro_text_field_font_weight');


if ($cricket_league_pro_text_field_color != false || $cricket_league_pro_text_field_font_family != false || $cricket_league_pro_text_field_font_size != false || $cricket_league_pro_text_field_font_weight != false) {
	$custom_css .= '.whyChooseUs-right p{';
	if ($cricket_league_pro_text_field_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_text_field_color) . ' ;';
	}
	if ($cricket_league_pro_text_field_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_text_field_font_family) . ' ;';
	}
	if ($cricket_league_pro_text_field_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_text_field_font_size) . 'px ;';
	}
	if ($cricket_league_pro_text_field_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_text_field_font_weight) . ' ;';
	}
	$custom_css .= '}';
}



$cricket_league_pro_counter_text_color = get_theme_mod('cricket_league_pro_counter_text_color');
$cricket_league_pro_counter_text_font_size = get_theme_mod('cricket_league_pro_counter_text_font_size');
$cricket_league_pro_counter_text_font_family = get_theme_mod('cricket_league_pro_counter_text_font_family');
$cricket_league_pro_counter_text_font_weight = get_theme_mod('cricket_league_pro_counter_text_font_weight');


if ($cricket_league_pro_counter_text_color != false || $cricket_league_pro_counter_text_font_family != false || $cricket_league_pro_counter_text_font_size != false || $cricket_league_pro_counter_text_font_weight != false) {
	$custom_css .= '.whyChooseUs-counter .choose-counter-num {';
	if ($cricket_league_pro_counter_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_counter_text_color) . ' ;';
	}
	if ($cricket_league_pro_counter_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_counter_text_font_family) . ' ;';
	}
	if ($cricket_league_pro_counter_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_counter_text_font_size) . 'px ;';
	}
	if ($cricket_league_pro_counter_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_counter_text_font_weight) . ' ;';
	}
	$custom_css .= '}';
}



$cricket_league_pro_counter_title_color = get_theme_mod('cricket_league_pro_counter_title_color');
$cricket_league_pro_counter_title_font_size = get_theme_mod('cricket_league_pro_counter_title_font_size');
$cricket_league_pro_counter_title_font_family = get_theme_mod('cricket_league_pro_counter_title_font_family');
$cricket_league_pro_counter_title_font_weight = get_theme_mod('cricket_league_pro_counter_title_font_weight');


if ($cricket_league_pro_counter_title_color != false || $cricket_league_pro_counter_title_font_family != false || $cricket_league_pro_counter_title_font_size != false || $cricket_league_pro_counter_title_font_weight != false) {
	$custom_css .= '.whyChooseUs-counter span{';
	if ($cricket_league_pro_counter_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_counter_title_color) . ' ;';
	}
	if ($cricket_league_pro_counter_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_counter_title_font_family) . ' ;';
	}
	if ($cricket_league_pro_counter_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_counter_title_font_size) . 'px ;';
	}
	if ($cricket_league_pro_counter_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_counter_title_font_weight) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_faq_accordion_bgcolor = get_theme_mod('cricket_league_pro_faq_accordion_bgcolor');

if ($cricket_league_pro_faq_accordion_bgcolor != false) {
	$custom_css .= 'h3.accordion-click{';
	if ($cricket_league_pro_faq_accordion_bgcolor != false) {
		$custom_css .= 'background-color:' . esc_html($cricket_league_pro_faq_accordion_bgcolor) . ';';
	}
	$custom_css .= '}';
}



$cricket_league_pro_faq_accordion_ans_bgcolor = get_theme_mod('cricket_league_pro_faq_accordion_ans_bgcolor');

if ($cricket_league_pro_faq_accordion_ans_bgcolor != false) {
	$custom_css .= 'section#faq 	.accordion-wrapper .answer{';
	if ($cricket_league_pro_faq_accordion_ans_bgcolor != false) {
		$custom_css .= 'background-color:' . esc_html($cricket_league_pro_faq_accordion_ans_bgcolor) . ' !important;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_whychooseus_video_title_color = get_theme_mod('cricket_league_pro_whychooseus_video_title_color');
$cricket_league_pro_whychooseus_video_title_font_size = get_theme_mod('cricket_league_pro_whychooseus_video_title_font_size');
$cricket_league_pro_whychooseus_video_title_font_family = get_theme_mod('cricket_league_pro_whychooseus_video_title_font_family');
$cricket_league_pro_whychooseus_video_title_font_weight = get_theme_mod('cricket_league_pro_whychooseus_video_title_font_weight');


if ($cricket_league_pro_whychooseus_video_title_color != false || $cricket_league_pro_whychooseus_video_title_font_family != false || $cricket_league_pro_whychooseus_video_title_font_size != false || $cricket_league_pro_whychooseus_video_title_font_weight != false) {
	$custom_css .= '.choose-sec-vid-link p{';
	if ($cricket_league_pro_whychooseus_video_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_whychooseus_video_title_color) . ' !important;';
	}
	if ($cricket_league_pro_whychooseus_video_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_whychooseus_video_title_font_family) . ' !important;';
	}
	if ($cricket_league_pro_whychooseus_video_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_whychooseus_video_title_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_whychooseus_video_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_whychooseus_video_title_font_weight) . ' !important;';
	}
	$custom_css .= '}';
}

// product slider 



$cricket_league_pro_product_slider_heading_tag_color = get_theme_mod('cricket_league_pro_product_slider_heading_tag_color');
$cricket_league_pro_product_slider_heading_tag_font_size = get_theme_mod('cricket_league_pro_product_slider_heading_tag_font_size');
$cricket_league_pro_product_slider_heading_tag_font_family = get_theme_mod('cricket_league_pro_product_slider_heading_tag_font_family');
$cricket_league_pro_product_slider_heading_tag_font_weight = get_theme_mod('cricket_league_pro_product_slider_heading_tag_font_weight');


if ($cricket_league_pro_product_slider_heading_tag_color != false || $cricket_league_pro_product_slider_heading_tag_font_family != false || $cricket_league_pro_product_slider_heading_tag_font_size != false || $cricket_league_pro_product_slider_heading_tag_font_weight != false) {
	$custom_css .= 'section.products .heading-tag{';
	if ($cricket_league_pro_product_slider_heading_tag_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_product_slider_heading_tag_color) . ' ;';
	}
	if ($cricket_league_pro_product_slider_heading_tag_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_product_slider_heading_tag_font_family) . ';';
	}
	if ($cricket_league_pro_product_slider_heading_tag_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_product_slider_heading_tag_font_size) . 'px;';
	}
	if ($cricket_league_pro_product_slider_heading_tag_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_product_slider_heading_tag_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_product_slider_heading_color = get_theme_mod('cricket_league_pro_product_slider_heading_color');
$cricket_league_pro_product_slider_heading_font_size = get_theme_mod('cricket_league_pro_product_slider_heading_font_size');
$cricket_league_pro_product_slider_heading_font_family = get_theme_mod('cricket_league_pro_product_slider_heading_font_family');
$cricket_league_pro_product_slider_heading_font_weight = get_theme_mod('cricket_league_pro_product_slider_heading_font_weight');


if ($cricket_league_pro_product_slider_heading_color != false || $cricket_league_pro_product_slider_heading_font_family != false || $cricket_league_pro_product_slider_heading_font_size != false || $cricket_league_pro_product_slider_heading_font_weight != false) {
	$custom_css .= 'section.products .heading-wrap h2{';
	if ($cricket_league_pro_product_slider_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_product_slider_heading_color) . ' ;';
	}
	if ($cricket_league_pro_product_slider_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_product_slider_heading_font_family) . ';';
	}
	if ($cricket_league_pro_product_slider_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_product_slider_heading_font_size) . 'px;';
	}
	if ($cricket_league_pro_product_slider_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_product_slider_heading_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_product_slider_product_name_color = get_theme_mod('cricket_league_pro_product_slider_product_name_color');
$cricket_league_pro_product_slider_product_name_font_size = get_theme_mod('cricket_league_pro_product_slider_product_name_font_size');
$cricket_league_pro_product_slider_product_name_font_family = get_theme_mod('cricket_league_pro_product_slider_product_name_font_family');
$cricket_league_pro_product_slider_product_name_font_weight = get_theme_mod('cricket_league_pro_product_slider_product_name_font_weight');


if ($cricket_league_pro_product_slider_product_name_color != false || $cricket_league_pro_product_slider_product_name_font_family != false || $cricket_league_pro_product_slider_product_name_font_size != false || $cricket_league_pro_product_slider_product_name_font_weight != false) {
	$custom_css .= 'body .item-product h3 a{';
	if ($cricket_league_pro_product_slider_product_name_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_product_slider_product_name_color) . ' ;';
	}
	if ($cricket_league_pro_product_slider_product_name_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_product_slider_product_name_font_family) . ';';
	}
	if ($cricket_league_pro_product_slider_product_name_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_product_slider_product_name_font_size) . 'px;';
	}
	if ($cricket_league_pro_product_slider_product_name_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_product_slider_product_name_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_product_slider_reg_price_color = get_theme_mod('cricket_league_pro_product_slider_reg_price_color');
$cricket_league_pro_product_slider_reg_price_font_size = get_theme_mod('cricket_league_pro_product_slider_reg_price_font_size');
$cricket_league_pro_product_slider_reg_price_font_family = get_theme_mod('cricket_league_pro_product_slider_reg_price_font_family');
$cricket_league_pro_product_slider_reg_price_font_weight = get_theme_mod('cricket_league_pro_product_slider_reg_price_font_weight');


if ($cricket_league_pro_product_slider_reg_price_color != false || $cricket_league_pro_product_slider_reg_price_font_family != false || $cricket_league_pro_product_slider_reg_price_font_size != false || $cricket_league_pro_product_slider_reg_price_font_weight != false) {
	$custom_css .= 'p.regular-price{';
	if ($cricket_league_pro_product_slider_reg_price_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_product_slider_reg_price_color) . ' ;';
	}
	if ($cricket_league_pro_product_slider_reg_price_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_product_slider_reg_price_font_family) . ';';
	}
	if ($cricket_league_pro_product_slider_reg_price_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_product_slider_reg_price_font_size) . 'px;';
	}
	if ($cricket_league_pro_product_slider_reg_price_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_product_slider_reg_price_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_product_slider_sale_price_color = get_theme_mod('cricket_league_pro_product_slider_sale_price_color');
$cricket_league_pro_product_slider_sale_price_font_size = get_theme_mod('cricket_league_pro_product_slider_sale_price_font_size');
$cricket_league_pro_product_slider_sale_price_font_family = get_theme_mod('cricket_league_pro_product_slider_sale_price_font_family');
$cricket_league_pro_product_slider_sale_price_font_weight = get_theme_mod('cricket_league_pro_product_slider_sale_price_font_weight');


if ($cricket_league_pro_product_slider_sale_price_color != false || $cricket_league_pro_product_slider_sale_price_font_family != false || $cricket_league_pro_product_slider_sale_price_font_size != false || $cricket_league_pro_product_slider_sale_price_font_weight != false) {
	$custom_css .= 'p.sale-price {';
	if ($cricket_league_pro_product_slider_sale_price_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_product_slider_sale_price_color) . ' ;';
	}
	if ($cricket_league_pro_product_slider_sale_price_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_product_slider_sale_price_font_family) . ';';
	}
	if ($cricket_league_pro_product_slider_sale_price_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_product_slider_sale_price_font_size) . 'px;';
	}
	if ($cricket_league_pro_product_slider_sale_price_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_product_slider_sale_price_font_weight) . ';';
	}

	$custom_css .= '}';
}
;


$cricket_league_pro_product_slider_cart_button_color = get_theme_mod('cricket_league_pro_product_slider_cart_button_color');
$cricket_league_pro_product_slider_cart_button_font_size = get_theme_mod('cricket_league_pro_product_slider_cart_button_font_size');
$cricket_league_pro_product_slider_cart_button_font_family = get_theme_mod('cricket_league_pro_product_slider_cart_button_font_family');
$cricket_league_pro_product_slider_cart_button_font_weight = get_theme_mod('cricket_league_pro_product_slider_cart_button_font_weight');


if ($cricket_league_pro_product_slider_cart_button_color != false || $cricket_league_pro_product_slider_cart_button_font_family != false || $cricket_league_pro_product_slider_cart_button_font_size != false || $cricket_league_pro_product_slider_cart_button_font_weight != false) {
	$custom_css .= '.product-cricket a.button{';
	if ($cricket_league_pro_product_slider_cart_button_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_product_slider_cart_button_color) . ' ;';
	}
	if ($cricket_league_pro_product_slider_cart_button_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_product_slider_cart_button_font_family) . ';';
	}
	if ($cricket_league_pro_product_slider_cart_button_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_product_slider_cart_button_font_size) . 'px;';
	}
	if ($cricket_league_pro_product_slider_cart_button_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_product_slider_cart_button_font_weight) . ';';
	}

	$custom_css .= '}';
}
;



// upcoming event section 


$cricket_league_pro_upcoming_evt_heading_tag_color = get_theme_mod('cricket_league_pro_upcoming_evt_heading_tag_color');
$cricket_league_pro_upcoming_evt_heading_tag_font_size = get_theme_mod('cricket_league_pro_upcoming_evt_heading_tag_font_size');
$cricket_league_pro_upcoming_evt_heading_tag_font_family = get_theme_mod('cricket_league_pro_upcoming_evt_heading_tag_font_family');
$cricket_league_pro_upcoming_evt_heading_tag_font_weight = get_theme_mod('cricket_league_pro_upcoming_evt_heading_tag_font_weight');


if ($cricket_league_pro_upcoming_evt_heading_tag_color != false || $cricket_league_pro_upcoming_evt_heading_tag_font_family != false || $cricket_league_pro_upcoming_evt_heading_tag_font_size != false || $cricket_league_pro_upcoming_evt_heading_tag_font_weight != false) {
	$custom_css .= 'section#upcoming-evt .heading-tag{';
	if ($cricket_league_pro_upcoming_evt_heading_tag_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_evt_heading_tag_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_evt_heading_tag_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_evt_heading_tag_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_evt_heading_tag_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_evt_heading_tag_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_evt_heading_tag_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_evt_heading_tag_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_upcoming_evt_heading_color = get_theme_mod('cricket_league_pro_upcoming_evt_heading_color');
$cricket_league_pro_upcoming_evt_heading_font_size = get_theme_mod('cricket_league_pro_upcoming_evt_heading_font_size');
$cricket_league_pro_upcoming_evt_heading_font_family = get_theme_mod('cricket_league_pro_upcoming_evt_heading_font_family');
$cricket_league_pro_upcoming_evt_heading_font_weight = get_theme_mod('cricket_league_pro_upcoming_evt_heading_font_weight');


if ($cricket_league_pro_upcoming_evt_heading_color != false || $cricket_league_pro_upcoming_evt_heading_font_family != false || $cricket_league_pro_upcoming_evt_heading_font_size != false || $cricket_league_pro_upcoming_evt_heading_font_weight != false) {
	$custom_css .= 'section#upcoming-evt h2{';
	if ($cricket_league_pro_upcoming_evt_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_evt_heading_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_evt_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_evt_heading_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_evt_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_evt_heading_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_evt_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_evt_heading_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_upcoming_evt_schedle_color = get_theme_mod('cricket_league_pro_upcoming_evt_schedle_color');
$cricket_league_pro_upcoming_evt_schedle_font_size = get_theme_mod('cricket_league_pro_upcoming_evt_schedle_font_size');
$cricket_league_pro_upcoming_evt_schedle_font_family = get_theme_mod('cricket_league_pro_upcoming_evt_schedle_font_family');
$cricket_league_pro_upcoming_evt_schedle_font_weight = get_theme_mod('cricket_league_pro_upcoming_evt_schedle_font_weight');


if ($cricket_league_pro_upcoming_evt_schedle_color != false || $cricket_league_pro_upcoming_evt_schedle_font_family != false || $cricket_league_pro_upcoming_evt_schedle_font_size != false || $cricket_league_pro_upcoming_evt_schedle_font_weight != false) {
	$custom_css .= 'p.regular-price{';
	if ($cricket_league_pro_upcoming_evt_schedle_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_evt_schedle_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_evt_schedle_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_evt_schedle_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_evt_schedle_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_evt_schedle_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_evt_schedle_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_evt_schedle_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_upcoming_evt_schedle_color = get_theme_mod('cricket_league_pro_upcoming_evt_schedle_color');
$cricket_league_pro_upcoming_evt_schedle_font_size = get_theme_mod('cricket_league_pro_upcoming_evt_schedle_font_size');
$cricket_league_pro_upcoming_evt_schedle_font_family = get_theme_mod('cricket_league_pro_upcoming_evt_schedle_font_family');
$cricket_league_pro_upcoming_evt_schedle_font_weight = get_theme_mod('cricket_league_pro_upcoming_evt_schedle_font_weight');


if ($cricket_league_pro_upcoming_evt_schedle_color != false || $cricket_league_pro_upcoming_evt_schedle_font_family != false || $cricket_league_pro_upcoming_evt_schedle_font_size != false || $cricket_league_pro_upcoming_evt_schedle_font_weight != false) {
	$custom_css .= 'section#upcoming-evt p.schedule{';
	if ($cricket_league_pro_upcoming_evt_schedle_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_evt_schedle_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_evt_schedle_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_evt_schedle_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_evt_schedle_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_evt_schedle_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_evt_schedle_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_evt_schedle_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_upcoming_evt_title_color = get_theme_mod('cricket_league_pro_upcoming_evt_title_color');
$cricket_league_pro_upcoming_evt_title_font_size = get_theme_mod('cricket_league_pro_upcoming_evt_title_font_size');
$cricket_league_pro_upcoming_evt_title_font_family = get_theme_mod('cricket_league_pro_upcoming_evt_title_font_family');
$cricket_league_pro_upcoming_evt_title_font_weight = get_theme_mod('cricket_league_pro_upcoming_evt_title_font_weight');


if ($cricket_league_pro_upcoming_evt_title_color != false || $cricket_league_pro_upcoming_evt_title_font_family != false || $cricket_league_pro_upcoming_evt_title_font_size != false || $cricket_league_pro_upcoming_evt_title_font_weight != false) {
	$custom_css .= 'section#upcoming-evt .evt-right h3 a{';
	if ($cricket_league_pro_upcoming_evt_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_evt_title_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_evt_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_evt_title_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_evt_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_evt_title_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_evt_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_evt_title_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_upcoming_evt_venue_color = get_theme_mod('cricket_league_pro_upcoming_evt_venue_color');
$cricket_league_pro_upcoming_evt_venue_font_size = get_theme_mod('cricket_league_pro_upcoming_evt_venue_font_size');
$cricket_league_pro_upcoming_evt_venue_font_family = get_theme_mod('cricket_league_pro_upcoming_evt_venue_font_family');
$cricket_league_pro_upcoming_evt_venue_font_weight = get_theme_mod('cricket_league_pro_upcoming_evt_venue_font_weight');


if ($cricket_league_pro_upcoming_evt_venue_color != false || $cricket_league_pro_upcoming_evt_venue_font_family != false || $cricket_league_pro_upcoming_evt_venue_font_size != false || $cricket_league_pro_upcoming_evt_venue_font_weight != false) {
	$custom_css .= 'section#upcoming-evt p.address{';
	if ($cricket_league_pro_upcoming_evt_venue_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_evt_venue_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_evt_venue_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_evt_venue_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_evt_venue_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_evt_venue_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_evt_venue_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_evt_venue_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_upcoming_evt_text_color = get_theme_mod('cricket_league_pro_upcoming_evt_text_color');
$cricket_league_pro_upcoming_evt_text_font_size = get_theme_mod('cricket_league_pro_upcoming_evt_text_font_size');
$cricket_league_pro_upcoming_evt_text_font_family = get_theme_mod('cricket_league_pro_upcoming_evt_text_font_family');
$cricket_league_pro_upcoming_evt_text_font_weight = get_theme_mod('cricket_league_pro_upcoming_evt_text_font_weight');


if ($cricket_league_pro_upcoming_evt_text_color != false || $cricket_league_pro_upcoming_evt_text_font_family != false || $cricket_league_pro_upcoming_evt_text_font_size != false || $cricket_league_pro_upcoming_evt_text_font_weight != false) {
	$custom_css .= '.event-content p{';
	if ($cricket_league_pro_upcoming_evt_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_evt_text_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_evt_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_evt_text_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_evt_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_evt_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_evt_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_evt_text_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_upcoming_evt_entry_fee_color = get_theme_mod('cricket_league_pro_upcoming_evt_entry_fee_color');
$cricket_league_pro_upcoming_evt_entry_fee_font_size = get_theme_mod('cricket_league_pro_upcoming_evt_entry_fee_font_size');
$cricket_league_pro_upcoming_evt_entry_fee_font_family = get_theme_mod('cricket_league_pro_upcoming_evt_entry_fee_font_family');
$cricket_league_pro_upcoming_evt_entry_fee_font_weight = get_theme_mod('cricket_league_pro_upcoming_evt_entry_fee_font_weight');


if ($cricket_league_pro_upcoming_evt_entry_fee_color != false || $cricket_league_pro_upcoming_evt_entry_fee_font_family != false || $cricket_league_pro_upcoming_evt_entry_fee_font_size != false || $cricket_league_pro_upcoming_evt_entry_fee_font_weight != false) {
	$custom_css .= 'p.Price{';
	if ($cricket_league_pro_upcoming_evt_entry_fee_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_evt_entry_fee_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_evt_entry_fee_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_evt_entry_fee_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_evt_entry_fee_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_evt_entry_fee_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_evt_entry_fee_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_evt_entry_fee_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_upcoming_evt_view_all_color = get_theme_mod('cricket_league_pro_upcoming_evt_view_all_color');
$cricket_league_pro_upcoming_evt_view_all_font_size = get_theme_mod('cricket_league_pro_upcoming_evt_view_all_font_size');
$cricket_league_pro_upcoming_evt_view_all_font_family = get_theme_mod('cricket_league_pro_upcoming_evt_view_all_font_family');
$cricket_league_pro_upcoming_evt_view_all_font_weight = get_theme_mod('cricket_league_pro_upcoming_evt_view_all_font_weight');

if ($cricket_league_pro_upcoming_evt_view_all_color != false || $cricket_league_pro_upcoming_evt_view_all_font_family != false || $cricket_league_pro_upcoming_evt_view_all_font_size != false || $cricket_league_pro_upcoming_evt_view_all_font_weight != false) {
	$custom_css .= 'section#upcoming-evt a.theme-btn.black{';
	if ($cricket_league_pro_upcoming_evt_view_all_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_evt_view_all_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_evt_view_all_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_evt_view_all_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_evt_view_all_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_evt_view_all_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_evt_view_all_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_evt_view_all_font_weight) . ';';
	}
	$custom_css .= '}';
}
;

// Testimonial Section

$cricket_league_pro_testimonial_heading_tag_color = get_theme_mod('cricket_league_pro_testimonial_heading_tag_color');
$cricket_league_pro_testimonial_heading_tag_font_size = get_theme_mod('cricket_league_pro_testimonial_heading_tag_font_size');
$cricket_league_pro_testimonial_heading_tag_font_family = get_theme_mod('cricket_league_pro_testimonial_heading_tag_font_family');
$cricket_league_pro_testimonial_heading_tag_font_weight = get_theme_mod('cricket_league_pro_testimonial_heading_tag_font_weight');


if ($cricket_league_pro_testimonial_heading_tag_color != false || $cricket_league_pro_testimonial_heading_tag_font_family != false || $cricket_league_pro_testimonial_heading_tag_font_size != false || $cricket_league_pro_testimonial_heading_tag_font_weight != false) {
	$custom_css .= 'section#testimonials .heading-tag{';
	if ($cricket_league_pro_testimonial_heading_tag_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_testimonial_heading_tag_color) . ' ;';
	}
	if ($cricket_league_pro_testimonial_heading_tag_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_testimonial_heading_tag_font_family) . ' ;';
	}
	if ($cricket_league_pro_testimonial_heading_tag_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_testimonial_heading_tag_font_size) . 'px ;';
	}
	if ($cricket_league_pro_testimonial_heading_tag_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_testimonial_heading_tag_font_weight) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_testimonial_heading_color = get_theme_mod('cricket_league_pro_testimonial_heading_color');
$cricket_league_pro_testimonial_heading_font_size = get_theme_mod('cricket_league_pro_testimonial_heading_font_size');
$cricket_league_pro_testimonial_heading_font_family = get_theme_mod('cricket_league_pro_testimonial_heading_font_family');
$cricket_league_pro_testimonial_heading_font_weight = get_theme_mod('cricket_league_pro_testimonial_heading_font_weight');


if ($cricket_league_pro_testimonial_heading_color != false || $cricket_league_pro_testimonial_heading_font_family != false || $cricket_league_pro_testimonial_heading_font_size != false || $cricket_league_pro_testimonial_heading_font_weight != false) {
	$custom_css .= 'section#testimonials .testimonial-right h2{';
	if ($cricket_league_pro_testimonial_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_testimonial_heading_color) . ' ;';
	}
	if ($cricket_league_pro_testimonial_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_testimonial_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_testimonial_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_testimonial_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_testimonial_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_testimonial_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_testimonial_text_heading_color = get_theme_mod('cricket_league_pro_testimonial_text_heading_color');
$cricket_league_pro_testimonial_text_heading_font_size = get_theme_mod('cricket_league_pro_testimonial_text_heading_font_size');
$cricket_league_pro_testimonial_text_heading_font_family = get_theme_mod('cricket_league_pro_testimonial_text_heading_font_family');
$cricket_league_pro_testimonial_text_heading_font_weight = get_theme_mod('cricket_league_pro_testimonial_text_heading_font_weight');
if ($cricket_league_pro_testimonial_text_heading_color != false || $cricket_league_pro_testimonial_text_heading_font_family != false || $cricket_league_pro_testimonial_text_heading_font_size != false || $cricket_league_pro_testimonial_text_heading_font_weight != false) {
	$custom_css .= 'section#testimonials .testimonial-content p{';
	if ($cricket_league_pro_testimonial_text_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_testimonial_text_heading_color) . ' ;';
	}
	if ($cricket_league_pro_testimonial_text_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_testimonial_text_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_testimonial_text_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_testimonial_text_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_testimonial_text_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_testimonial_text_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_client_name_heading_color = get_theme_mod('cricket_league_pro_client_name_heading_color');
$cricket_league_pro_client_name_heading_font_size = get_theme_mod('cricket_league_pro_client_name_heading_font_size');
$cricket_league_pro_client_name_heading_font_family = get_theme_mod('cricket_league_pro_client_name_heading_font_family');
$cricket_league_pro_client_name_heading_font_weight = get_theme_mod('cricket_league_pro_client_name_heading_font_weight');


if ($cricket_league_pro_client_name_heading_color != false || $cricket_league_pro_client_name_heading_font_family != false || $cricket_league_pro_client_name_heading_font_size != false || $cricket_league_pro_client_name_heading_font_weight != false) {
	$custom_css .= 'section#testimonials h3.customer-name{';
	if ($cricket_league_pro_client_name_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_client_name_heading_color) . ' ;';
	}
	if ($cricket_league_pro_client_name_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_client_name_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_client_name_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_client_name_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_client_name_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_client_name_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_service_used_heading_color = get_theme_mod('cricket_league_pro_service_used_heading_color');
$cricket_league_pro_service_used_heading_font_size = get_theme_mod('cricket_league_pro_service_used_heading_font_size');
$cricket_league_pro_service_used_heading_font_family = get_theme_mod('cricket_league_pro_service_used_heading_font_family');
$cricket_league_pro_service_used_heading_font_weight = get_theme_mod('cricket_league_pro_service_used_heading_font_weight');


if ($cricket_league_pro_service_used_heading_color != false || $cricket_league_pro_service_used_heading_font_family != false || $cricket_league_pro_service_used_heading_font_size != false || $cricket_league_pro_service_used_heading_font_weight != false) {
	$custom_css .= 'p.service-used{';
	if ($cricket_league_pro_service_used_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_service_used_heading_color) . ' ;';
	}
	if ($cricket_league_pro_service_used_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_service_used_heading_font_family) . ' ;';
	}
	if ($cricket_league_pro_service_used_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_service_used_heading_font_size) . 'px ;';
	}
	if ($cricket_league_pro_service_used_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_service_used_heading_font_weight) . ' ;';
	}
	$custom_css .= '}';
}




// Testimonial Section end 

// Trophies Section 

$cricket_league_pro_trophies_heading_tag_color = get_theme_mod('cricket_league_pro_trophies_heading_tag_color');
$cricket_league_pro_trophies_heading_tag_font_size = get_theme_mod('cricket_league_pro_trophies_heading_tag_font_size');
$cricket_league_pro_trophies_heading_tag_font_family = get_theme_mod('cricket_league_pro_trophies_heading_tag_font_family');
$cricket_league_pro_trophies_heading_tag_font_weight = get_theme_mod('cricket_league_pro_trophies_heading_tag_font_weight');


if ($cricket_league_pro_trophies_heading_tag_color != false || $cricket_league_pro_trophies_heading_tag_font_family != false || $cricket_league_pro_trophies_heading_tag_font_size != false || $cricket_league_pro_trophies_heading_tag_font_weight != false) {
	$custom_css .= 'section#trophies .heading-tag{';
	if ($cricket_league_pro_trophies_heading_tag_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_trophies_heading_tag_color) . ' ;';
	}
	if ($cricket_league_pro_trophies_heading_tag_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_trophies_heading_tag_font_family) . ';';
	}
	if ($cricket_league_pro_trophies_heading_tag_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_trophies_heading_tag_font_size) . 'px;';
	}
	if ($cricket_league_pro_trophies_heading_tag_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_trophies_heading_tag_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_trophies_heading_color = get_theme_mod('cricket_league_pro_trophies_heading_color');
$cricket_league_pro_trophies_heading_font_size = get_theme_mod('cricket_league_pro_trophies_heading_font_size');
$cricket_league_pro_trophies_heading_font_family = get_theme_mod('cricket_league_pro_trophies_heading_font_family');
$cricket_league_pro_trophies_heading_font_weight = get_theme_mod('cricket_league_pro_trophies_heading_font_weight');


if ($cricket_league_pro_trophies_heading_color != false || $cricket_league_pro_trophies_heading_font_family != false || $cricket_league_pro_trophies_heading_font_size != false || $cricket_league_pro_trophies_heading_font_weight != false) {
	$custom_css .= 'section#trophies h2{';
	if ($cricket_league_pro_trophies_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_trophies_heading_color) . ' ;';
	}
	if ($cricket_league_pro_trophies_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_trophies_heading_font_family) . ';';
	}
	if ($cricket_league_pro_trophies_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_trophies_heading_font_size) . 'px;';
	}
	if ($cricket_league_pro_trophies_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_trophies_heading_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_trophies_year_color = get_theme_mod('cricket_league_pro_trophies_year_color');
$cricket_league_pro_trophies_year_font_size = get_theme_mod('cricket_league_pro_trophies_year_font_size');
$cricket_league_pro_trophies_year_font_family = get_theme_mod('cricket_league_pro_trophies_year_font_family');
$cricket_league_pro_trophies_year_font_weight = get_theme_mod('cricket_league_pro_trophies_year_font_weight');


if ($cricket_league_pro_trophies_year_color != false || $cricket_league_pro_trophies_year_font_family != false || $cricket_league_pro_trophies_year_font_size != false || $cricket_league_pro_trophies_year_font_weight != false) {
	$custom_css .= '.titl h3{';
	if ($cricket_league_pro_trophies_year_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_trophies_year_color) . ' ;';
	}
	if ($cricket_league_pro_trophies_year_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_trophies_year_font_family) . ';';
	}
	if ($cricket_league_pro_trophies_year_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_trophies_year_font_size) . 'px;';
	}
	if ($cricket_league_pro_trophies_year_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_trophies_year_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_trophies_team_name_color = get_theme_mod('cricket_league_pro_trophies_team_name_color');
$cricket_league_pro_trophies_team_name_font_size = get_theme_mod('cricket_league_pro_trophies_team_name_font_size');
$cricket_league_pro_trophies_team_name_font_family = get_theme_mod('cricket_league_pro_trophies_team_name_font_family');
$cricket_league_pro_trophies_team_name_font_weight = get_theme_mod('cricket_league_pro_trophies_team_name_font_weight');


if ($cricket_league_pro_trophies_team_name_color != false || $cricket_league_pro_trophies_team_name_font_family != false || $cricket_league_pro_trophies_team_name_font_size != false || $cricket_league_pro_trophies_team_name_font_weight != false) {
	$custom_css .= '.team-wrapper p{';
	if ($cricket_league_pro_trophies_team_name_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_trophies_team_name_color) . ' ;';
	}
	if ($cricket_league_pro_trophies_team_name_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_trophies_team_name_font_family) . ';';
	}
	if ($cricket_league_pro_trophies_team_name_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_trophies_team_name_font_size) . 'px;';
	}
	if ($cricket_league_pro_trophies_team_name_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_trophies_team_name_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

// footer section 
$cricket_league_pro_footer_title_color = get_theme_mod('cricket_league_pro_footer_title_color');
$cricket_league_pro_footer_title_font_size = get_theme_mod('cricket_league_pro_footer_title_font_size');
$cricket_league_pro_footer_title_font_family = get_theme_mod('cricket_league_pro_footer_title_font_family');
$cricket_league_pro_footer_title_font_weight = get_theme_mod('cricket_league_pro_footer_title_font_weight');


if ($cricket_league_pro_footer_title_color != false || $cricket_league_pro_footer_title_font_family != false || $cricket_league_pro_footer_title_font_size != false || $cricket_league_pro_footer_title_font_weight != false) {
	$custom_css .= 'div#footer .textwidget p,div#footer ul li a,p.location a,p.email a,p.time a,.about_me aside p,#footer a,.copyright-outer a{';
	if ($cricket_league_pro_footer_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_footer_title_color) . ' ;';
	}
	if ($cricket_league_pro_footer_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_footer_title_font_family) . ' ;';
	}
	if ($cricket_league_pro_footer_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_footer_title_font_size) . 'px ;';
	}
	if ($cricket_league_pro_footer_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_footer_title_font_weight) . ' ;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_footer_headings_color = get_theme_mod('cricket_league_pro_footer_headings_color');
$cricket_league_pro_footer_headings_font_size = get_theme_mod('cricket_league_pro_footer_headings_font_size');
$cricket_league_pro_footer_headings_font_family = get_theme_mod('cricket_league_pro_footer_headings_font_family');
$cricket_league_pro_footer_headings_font_weight = get_theme_mod('cricket_league_pro_footer_headings_font_weight');


if ($cricket_league_pro_footer_headings_color != false || $cricket_league_pro_footer_headings_font_family != false || $cricket_league_pro_footer_headings_font_size != false || $cricket_league_pro_footer_headings_font_weight != false) {
	$custom_css .= '#footer h3.widget-title, div#footer h3{';
	if ($cricket_league_pro_footer_headings_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_footer_headings_color) . ' !important;';
	}
	if ($cricket_league_pro_footer_headings_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_footer_headings_font_family) . ' !important;';
	}
	if ($cricket_league_pro_footer_headings_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_footer_headings_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_footer_headings_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_footer_headings_font_weight) . ' !important;';
	}
	$custom_css .= '}';
}




// about us 

$cricket_league_pro_about_us_listical_pts_color = get_theme_mod('cricket_league_pro_about_us_listical_pts_color');
$cricket_league_pro_about_us_listical_pts_font_size = get_theme_mod('cricket_league_pro_about_us_listical_pts_font_size');
$cricket_league_pro_about_us_listical_pts_font_family = get_theme_mod('cricket_league_pro_about_us_listical_pts_font_family');
$cricket_league_pro_about_us_listical_pts_font_weight = get_theme_mod('cricket_league_pro_about_us_listical_pts_font_weight');


if ($cricket_league_pro_about_us_listical_pts_color != false || $cricket_league_pro_about_us_listical_pts_font_family != false || $cricket_league_pro_about_us_listical_pts_font_size != false || $cricket_league_pro_about_us_listical_pts_font_weight != false) {
	$custom_css .= '.pt-one p{';
	if ($cricket_league_pro_about_us_listical_pts_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_about_us_listical_pts_color) . ' ;';
	}
	if ($cricket_league_pro_about_us_listical_pts_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_about_us_listical_pts_font_family) . ';';
	}
	if ($cricket_league_pro_about_us_listical_pts_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_about_us_listical_pts_font_size) . 'px;';
	}
	if ($cricket_league_pro_about_us_listical_pts_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_about_us_listical_pts_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_aboutus_tab_cont_heading_color = get_theme_mod('cricket_league_pro_aboutus_tab_cont_heading_color');
$cricket_league_pro_aboutus_tab_cont_heading_font_size = get_theme_mod('cricket_league_pro_aboutus_tab_cont_heading_font_size');
$cricket_league_pro_aboutus_tab_cont_heading_font_family = get_theme_mod('cricket_league_pro_aboutus_tab_cont_heading_font_family');
$cricket_league_pro_aboutus_tab_cont_heading_font_weight = get_theme_mod('cricket_league_pro_aboutus_tab_cont_heading_font_weight');


if ($cricket_league_pro_aboutus_tab_cont_heading_color != false || $cricket_league_pro_aboutus_tab_cont_heading_font_family != false || $cricket_league_pro_aboutus_tab_cont_heading_font_size != false || $cricket_league_pro_aboutus_tab_cont_heading_font_weight != false) {
	$custom_css .= '.tab-content h3{';
	if ($cricket_league_pro_aboutus_tab_cont_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_tab_cont_heading_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_tab_cont_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_tab_cont_heading_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_tab_cont_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_tab_cont_heading_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_tab_cont_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_tab_cont_heading_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_aboutus_tab_text_color = get_theme_mod('cricket_league_pro_aboutus_tab_text_color');
$cricket_league_pro_aboutus_tab_text_font_size = get_theme_mod('cricket_league_pro_aboutus_tab_text_font_size');
$cricket_league_pro_aboutus_tab_text_font_family = get_theme_mod('cricket_league_pro_aboutus_tab_text_font_family');
$cricket_league_pro_aboutus_tab_text_font_weight = get_theme_mod('cricket_league_pro_aboutus_tab_text_font_weight');


if ($cricket_league_pro_aboutus_tab_text_color != false || $cricket_league_pro_aboutus_tab_text_font_family != false || $cricket_league_pro_aboutus_tab_text_font_size != false || $cricket_league_pro_aboutus_tab_text_font_weight != false) {
	$custom_css .= 'section.mission .text-wrapper p{';
	if ($cricket_league_pro_aboutus_tab_text_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_tab_text_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_tab_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_tab_text_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_tab_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_tab_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_tab_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_tab_text_font_weight) . ';';
	}
	$custom_css .= '}';
}
;

$cricket_league_pro_aboutus_section_heading_tag_color = get_theme_mod('cricket_league_pro_aboutus_section_heading_tag_color');
$cricket_league_pro_aboutus_section_heading_tag_font_size = get_theme_mod('cricket_league_pro_aboutus_section_heading_tag_font_size');
$cricket_league_pro_aboutus_section_heading_tag_font_family = get_theme_mod('cricket_league_pro_aboutus_section_heading_tag_font_family');
$cricket_league_pro_aboutus_section_heading_tag_font_weight = get_theme_mod('cricket_league_pro_aboutus_section_heading_tag_font_weight');

if ($cricket_league_pro_aboutus_section_heading_tag_color != false || $cricket_league_pro_aboutus_section_heading_tag_font_family != false || $cricket_league_pro_aboutus_section_heading_tag_font_size != false || $cricket_league_pro_aboutus_section_heading_tag_font_weight != false) {
	$custom_css .= 'section.our-staff .heading-tag,section.aboutus-gallery .heading-tag{';
	if ($cricket_league_pro_aboutus_section_heading_tag_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_section_heading_tag_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_section_heading_tag_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_section_heading_tag_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_section_heading_tag_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_section_heading_tag_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_section_heading_tag_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_section_heading_tag_font_weight) . ';';
	}
	$custom_css .= '}';
}
;


$cricket_league_pro_aboutus_section_heading_color = get_theme_mod('cricket_league_pro_aboutus_section_heading_color');
$cricket_league_pro_aboutus_section_heading_font_size = get_theme_mod('cricket_league_pro_aboutus_section_heading_font_size');
$cricket_league_pro_aboutus_section_heading_font_family = get_theme_mod('cricket_league_pro_aboutus_section_heading_font_family');
$cricket_league_pro_aboutus_section_heading_font_weight = get_theme_mod('cricket_league_pro_aboutus_section_heading_font_weight');


if ($cricket_league_pro_aboutus_section_heading_color != false || $cricket_league_pro_aboutus_section_heading_font_family != false || $cricket_league_pro_aboutus_section_heading_font_size != false || $cricket_league_pro_aboutus_section_heading_font_weight != false) {
	$custom_css .= 'section.aboutus-gallery h2,section.our-staff h2.text-center{';
	if ($cricket_league_pro_aboutus_section_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_section_heading_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_section_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_section_heading_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_section_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_section_heading_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_section_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_section_heading_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_aboutus_staff_name_color = get_theme_mod('cricket_league_pro_aboutus_staff_name_color');
$cricket_league_pro_aboutus_staff_name_font_size = get_theme_mod('cricket_league_pro_aboutus_staff_name_font_size');
$cricket_league_pro_aboutus_staff_name_font_family = get_theme_mod('cricket_league_pro_aboutus_staff_name_font_family');
$cricket_league_pro_aboutus_staff_name_font_weight = get_theme_mod('cricket_league_pro_aboutus_staff_name_font_weight');


if ($cricket_league_pro_aboutus_staff_name_color != false || $cricket_league_pro_aboutus_staff_name_font_family != false || $cricket_league_pro_aboutus_staff_name_font_size != false || $cricket_league_pro_aboutus_staff_name_font_weight != false) {
	$custom_css .= '.staff-details h5{';
	if ($cricket_league_pro_aboutus_staff_name_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_staff_name_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_staff_name_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_staff_name_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_staff_name_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_staff_name_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_staff_name_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_staff_name_font_weight) . ';';
	}
	$custom_css .= '}';
}
;


$cricket_league_pro_aboutus_staff_position_color = get_theme_mod('cricket_league_pro_aboutus_staff_position_color');
$cricket_league_pro_aboutus_staff_position_font_size = get_theme_mod('cricket_league_pro_aboutus_staff_position_font_size');
$cricket_league_pro_aboutus_staff_position_font_family = get_theme_mod('cricket_league_pro_aboutus_staff_position_font_family');
$cricket_league_pro_aboutus_staff_position_font_weight = get_theme_mod('cricket_league_pro_aboutus_staff_position_font_weight');

if ($cricket_league_pro_aboutus_staff_position_color != false || $cricket_league_pro_aboutus_staff_position_font_family != false || $cricket_league_pro_aboutus_staff_position_font_size != false || $cricket_league_pro_aboutus_staff_position_font_weight != false) {
	$custom_css .= '.staff-details p{';
	if ($cricket_league_pro_aboutus_staff_position_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_staff_position_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_staff_position_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_staff_position_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_staff_position_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_staff_position_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_staff_position_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_staff_position_font_weight) . ';';
	}
	$custom_css .= '}';
}
;

// $cricket_league_pro_event_date_color = get_theme_mod('cricket_league_pro_event_date_color');
// $cricket_league_pro_event_date_font_size = get_theme_mod('cricket_league_pro_event_date_font_size');
// $cricket_league_pro_event_date_font_family = get_theme_mod('cricket_league_pro_event_date_font_family');
// $cricket_league_pro_event_date_font_weight = get_theme_mod('cricket_league_pro_event_date_font_weight');


// if ($cricket_league_pro_event_date_color != false || $cricket_league_pro_event_date_font_family != false || $cricket_league_pro_event_date_font_size != false || $cricket_league_pro_event_date_font_weight != false) {
// 	$custom_css .= '.staff-details p{';
// 	if ($cricket_league_pro_event_date_color != false) {
// 		$custom_css .= 'color: ' . esc_html($cricket_league_pro_event_date_color) . ' ;';
// 	}
// 	if ($cricket_league_pro_event_date_font_family != false) {
// 		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_event_date_font_family) . ';';
// 	}
// 	if ($cricket_league_pro_event_date_font_size != false) {
// 		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_event_date_font_size) . 'px;';
// 	}
// 	if ($cricket_league_pro_event_date_font_weight != false) {
// 		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_event_date_font_weight) . ';';
// 	}

// 	$custom_css .= '}';
// }
// ;
$cricket_league_pro_event_date_color = get_theme_mod('cricket_league_pro_event_date_color');
$cricket_league_pro_event_date_font_size = get_theme_mod('cricket_league_pro_event_date_font_size');
$cricket_league_pro_event_date_font_family = get_theme_mod('cricket_league_pro_event_date_font_family');
$cricket_league_pro_event_date_font_weight = get_theme_mod('cricket_league_pro_event_date_font_weight');


if ($cricket_league_pro_event_date_color != false || $cricket_league_pro_event_date_font_family != false || $cricket_league_pro_event_date_font_size != false || $cricket_league_pro_event_date_font_weight != false) {
	$custom_css .= '.evt-right p.schedule-inner{';
	if ($cricket_league_pro_event_date_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_event_date_color) . ' ;';
	}
	if ($cricket_league_pro_event_date_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_event_date_font_family) . ';';
	}
	if ($cricket_league_pro_event_date_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_event_date_font_size) . 'px;';
	}
	if ($cricket_league_pro_event_date_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_event_date_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_event_title_inner_color = get_theme_mod('cricket_league_pro_event_title_inner_color');
$cricket_league_pro_event_title_inner_font_size = get_theme_mod('cricket_league_pro_event_title_inner_font_size');
$cricket_league_pro_event_title_inner_font_family = get_theme_mod('cricket_league_pro_event_title_inner_font_family');
$cricket_league_pro_event_title_inner_font_weight = get_theme_mod('cricket_league_pro_event_title_inner_font_weight');


if ($cricket_league_pro_event_title_inner_color != false || $cricket_league_pro_event_title_inner_font_family != false || $cricket_league_pro_event_title_inner_font_size != false || $cricket_league_pro_event_title_inner_font_weight != false) {
	$custom_css .= 'section.event-page .evt-right h3, section.event-page .heading-wrap-evt a{';
	if ($cricket_league_pro_event_title_inner_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_event_title_inner_color) . ' ;';
	}
	if ($cricket_league_pro_event_title_inner_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_event_title_inner_font_family) . ';';
	}
	if ($cricket_league_pro_event_title_inner_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_event_title_inner_font_size) . 'px;';
	}
	if ($cricket_league_pro_event_title_inner_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_event_title_inner_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_event_page_venue_color = get_theme_mod('cricket_league_pro_event_page_venue_color');
$cricket_league_pro_event_page_venue_font_size = get_theme_mod('cricket_league_pro_event_page_venue_font_size');
$cricket_league_pro_event_page_venue_font_family = get_theme_mod('cricket_league_pro_event_page_venue_font_family');
$cricket_league_pro_event_page_venue_font_weight = get_theme_mod('cricket_league_pro_event_page_venue_font_weight');


if ($cricket_league_pro_event_page_venue_color != false || $cricket_league_pro_event_page_venue_font_family != false || $cricket_league_pro_event_page_venue_font_size != false || $cricket_league_pro_event_page_venue_font_weight != false) {
	$custom_css .= 'section.event-page p.address{';
	if ($cricket_league_pro_event_page_venue_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_event_page_venue_color) . ' ;';
	}
	if ($cricket_league_pro_event_page_venue_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_event_page_venue_font_family) . ';';
	}
	if ($cricket_league_pro_event_page_venue_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_event_page_venue_font_size) . 'px;';
	}
	if ($cricket_league_pro_event_page_venue_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_event_page_venue_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_event_page_descreption_color = get_theme_mod('cricket_league_pro_event_page_descreption_color');
$cricket_league_pro_event_page_descreption_font_size = get_theme_mod('cricket_league_pro_event_page_descreption_font_size');
$cricket_league_pro_event_page_descreption_font_family = get_theme_mod('cricket_league_pro_event_page_descreption_font_family');
$cricket_league_pro_event_page_descreption_font_weight = get_theme_mod('cricket_league_pro_event_page_descreption_font_weight');


if ($cricket_league_pro_event_page_descreption_color != false || $cricket_league_pro_event_page_descreption_font_family != false || $cricket_league_pro_event_page_descreption_font_size != false || $cricket_league_pro_event_page_descreption_font_weight != false) {
	$custom_css .= 'section.event-page .event-content p{';
	if ($cricket_league_pro_event_page_descreption_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_event_page_descreption_color) . ' ;';
	}
	if ($cricket_league_pro_event_page_descreption_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_event_page_descreption_font_family) . ';';
	}
	if ($cricket_league_pro_event_page_descreption_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_event_page_descreption_font_size) . 'px;';
	}
	if ($cricket_league_pro_event_page_descreption_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_event_page_descreption_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_event_page_price_color = get_theme_mod('cricket_league_pro_event_page_price_color');
$cricket_league_pro_event_page_price_font_size = get_theme_mod('cricket_league_pro_event_page_price_font_size');
$cricket_league_pro_event_page_price_font_family = get_theme_mod('cricket_league_pro_event_page_price_font_family');
$cricket_league_pro_event_page_price_font_weight = get_theme_mod('cricket_league_pro_event_page_price_font_weight');


if ($cricket_league_pro_event_page_price_color != false || $cricket_league_pro_event_page_price_font_family != false || $cricket_league_pro_event_page_price_font_size != false || $cricket_league_pro_event_page_price_font_weight != false) {
	$custom_css .= 'section.event-page p.Price{';
	if ($cricket_league_pro_event_page_price_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_event_page_price_color) . ' ;';
	}
	if ($cricket_league_pro_event_page_price_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_event_page_price_font_family) . ';';
	}
	if ($cricket_league_pro_event_page_price_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_event_page_price_font_size) . 'px;';
	}
	if ($cricket_league_pro_event_page_price_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_event_page_price_font_weight) . ';';
	}

	$custom_css .= '}';
}
;


// single event 


$cricket_league_pro_single_evt_date_color = get_theme_mod('cricket_league_pro_single_evt_date_color');
$cricket_league_pro_single_evt_date_font_size = get_theme_mod('cricket_league_pro_single_evt_date_font_size');
$cricket_league_pro_single_evt_date_font_family = get_theme_mod('cricket_league_pro_single_evt_date_font_family');
$cricket_league_pro_single_evt_date_font_weight = get_theme_mod('cricket_league_pro_single_evt_date_font_weight');


if ($cricket_league_pro_single_evt_date_color != false || $cricket_league_pro_single_evt_date_font_family != false || $cricket_league_pro_single_evt_date_font_size != false || $cricket_league_pro_single_evt_date_font_weight != false) {
	$custom_css .= 'section.single-evt p.clock-before{';
	if ($cricket_league_pro_single_evt_date_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_single_evt_date_color) . ' ;';
	}
	if ($cricket_league_pro_single_evt_date_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_single_evt_date_font_family) . ';';
	}
	if ($cricket_league_pro_single_evt_date_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_single_evt_date_font_size) . 'px;';
	}
	if ($cricket_league_pro_single_evt_date_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_single_evt_date_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_single_evt_title_color = get_theme_mod('cricket_league_pro_single_evt_title_color');
$cricket_league_pro_single_evt_title_font_size = get_theme_mod('cricket_league_pro_single_evt_title_font_size');
$cricket_league_pro_single_evt_title_font_family = get_theme_mod('cricket_league_pro_single_evt_title_font_family');
$cricket_league_pro_single_evt_title_font_weight = get_theme_mod('cricket_league_pro_single_evt_title_font_weight');


if ($cricket_league_pro_single_evt_title_color != false || $cricket_league_pro_single_evt_title_font_family != false || $cricket_league_pro_single_evt_title_font_size != false || $cricket_league_pro_single_evt_title_font_weight != false) {
	$custom_css .= '.single-evt-content h2{';
	if ($cricket_league_pro_single_evt_title_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_single_evt_title_color) . ' ;';
	}
	if ($cricket_league_pro_single_evt_title_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_single_evt_title_font_family) . ';';
	}
	if ($cricket_league_pro_single_evt_title_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_single_evt_title_font_size) . 'px;';
	}
	if ($cricket_league_pro_single_evt_title_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_single_evt_title_font_weight) . ';';
	}

	$custom_css .= '}';
}
;


$cricket_league_pro_single_evt_venue_color = get_theme_mod('cricket_league_pro_single_evt_venue_color');
$cricket_league_pro_single_evt_venue_font_size = get_theme_mod('cricket_league_pro_single_evt_venue_font_size');
$cricket_league_pro_single_evt_venue_font_family = get_theme_mod('cricket_league_pro_single_evt_venue_font_family');
$cricket_league_pro_single_evt_venue_font_weight = get_theme_mod('cricket_league_pro_single_evt_venue_font_weight');


if ($cricket_league_pro_single_evt_venue_color != false || $cricket_league_pro_single_evt_venue_font_family != false || $cricket_league_pro_single_evt_venue_font_size != false || $cricket_league_pro_single_evt_venue_font_weight != false) {
	$custom_css .= '.single-evt-content .venue{';
	if ($cricket_league_pro_single_evt_venue_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_single_evt_venue_color) . ' ;';
	}
	if ($cricket_league_pro_single_evt_venue_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_single_evt_venue_font_family) . ';';
	}
	if ($cricket_league_pro_single_evt_venue_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_single_evt_venue_font_size) . 'px;';
	}
	if ($cricket_league_pro_single_evt_venue_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_single_evt_venue_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_single_evt_content_color = get_theme_mod('cricket_league_pro_single_evt_content_color');
$cricket_league_pro_single_evt_content_font_size = get_theme_mod('cricket_league_pro_single_evt_content_font_size');
$cricket_league_pro_single_evt_content_font_family = get_theme_mod('cricket_league_pro_single_evt_content_font_family');
$cricket_league_pro_single_evt_content_font_weight = get_theme_mod('cricket_league_pro_single_evt_content_font_weight');


if ($cricket_league_pro_single_evt_content_color != false || $cricket_league_pro_single_evt_content_font_family != false || $cricket_league_pro_single_evt_content_font_size != false || $cricket_league_pro_single_evt_content_font_weight != false) {
	$custom_css .= '.evt-descreption p,section.single-evt p.my-4,.single-evt .my-3{';
	if ($cricket_league_pro_single_evt_content_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_single_evt_content_color) . ' ;';
	}
	if ($cricket_league_pro_single_evt_content_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_single_evt_content_font_family) . ';';
	}
	if ($cricket_league_pro_single_evt_content_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_single_evt_content_font_size) . 'px;';
	}
	if ($cricket_league_pro_single_evt_content_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_single_evt_content_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_single_detail_headings_color = get_theme_mod('cricket_league_pro_single_detail_headings_color');
$cricket_league_pro_single_detail_headings_font_size = get_theme_mod('cricket_league_pro_single_detail_headings_font_size');
$cricket_league_pro_single_detail_headings_font_family = get_theme_mod('cricket_league_pro_single_detail_headings_font_family');
$cricket_league_pro_single_detail_headings_font_weight = get_theme_mod('cricket_league_pro_single_detail_headings_font_weight');


if ($cricket_league_pro_single_detail_headings_color != false || $cricket_league_pro_single_detail_headings_font_family != false || $cricket_league_pro_single_detail_headings_font_size != false || $cricket_league_pro_single_detail_headings_font_weight != false) {
	$custom_css .= 'span.event-detail-title b{';
	if ($cricket_league_pro_single_detail_headings_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_single_detail_headings_color) . ' ;';
	}
	if ($cricket_league_pro_single_detail_headings_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_single_detail_headings_font_family) . ';';
	}
	if ($cricket_league_pro_single_detail_headings_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_single_detail_headings_font_size) . 'px;';
	}
	if ($cricket_league_pro_single_detail_headings_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_single_detail_headings_font_weight) . ';';
	}

	$custom_css .= '}';
}
;

$cricket_league_pro_single_evt_detail_value_color = get_theme_mod('cricket_league_pro_single_evt_detail_value_color');
$cricket_league_pro_single_evt_detail_value_font_size = get_theme_mod('cricket_league_pro_single_evt_detail_value_font_size');
$cricket_league_pro_single_evt_detail_value_font_family = get_theme_mod('cricket_league_pro_single_evt_detail_value_font_family');
$cricket_league_pro_single_evt_detail_value_font_weight = get_theme_mod('cricket_league_pro_single_evt_detail_value_font_weight');


if ($cricket_league_pro_single_evt_detail_value_color != false || $cricket_league_pro_single_evt_detail_value_font_family != false || $cricket_league_pro_single_evt_detail_value_font_size != false || $cricket_league_pro_single_evt_detail_value_font_weight != false) {
	$custom_css .= 'span.event-detail-value{';
	if ($cricket_league_pro_single_evt_detail_value_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_single_evt_detail_value_color) . ' ;';
	}
	if ($cricket_league_pro_single_evt_detail_value_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_single_evt_detail_value_font_family) . ';';
	}
	if ($cricket_league_pro_single_evt_detail_value_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_single_evt_detail_value_font_size) . 'px;';
	}
	if ($cricket_league_pro_single_evt_detail_value_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_single_evt_detail_value_font_weight) . ';';
	}

	$custom_css .= '}';
}
;


$cricket_league_pro_single_evt_date_color = get_theme_mod('cricket_league_pro_single_evt_date_color');
$cricket_league_pro_single_evt_date_font_size = get_theme_mod('cricket_league_pro_single_evt_date_font_size');
$cricket_league_pro_single_evt_date_font_family = get_theme_mod('cricket_league_pro_single_evt_date_font_family');
$cricket_league_pro_single_evt_date_font_weight = get_theme_mod('cricket_league_pro_single_evt_date_font_weight');

if ($cricket_league_pro_single_evt_date_color != false || $cricket_league_pro_single_evt_date_font_family != false || $cricket_league_pro_single_evt_date_font_size != false || $cricket_league_pro_single_evt_date_font_weight != false) {
	$custom_css .= 'section.single-evt p.clock-before{';
	if ($cricket_league_pro_single_evt_date_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_single_evt_date_color) . ' ;';
	}
	if ($cricket_league_pro_single_evt_date_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_single_evt_date_font_family) . ';';
	}
	if ($cricket_league_pro_single_evt_date_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_single_evt_date_font_size) . 'px;';
	}
	if ($cricket_league_pro_single_evt_date_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_single_evt_date_font_weight) . ';';
	}
	$custom_css .= '}';
}
;

$cricket_league_pro_single_evt_details_mainhead_color = get_theme_mod('cricket_league_pro_single_evt_details_mainhead_color');
$cricket_league_pro_single_evt_details_mainhead_font_size = get_theme_mod('cricket_league_pro_single_evt_details_mainhead_font_size');
$cricket_league_pro_single_evt_details_mainhead_font_family = get_theme_mod('cricket_league_pro_single_evt_details_mainhead_font_family');
$cricket_league_pro_single_evt_details_mainhead_font_weight = get_theme_mod('cricket_league_pro_single_evt_details_mainhead_font_weight');


if ($cricket_league_pro_single_evt_details_mainhead_color != false || $cricket_league_pro_single_evt_details_mainhead_font_family != false || $cricket_league_pro_single_evt_details_mainhead_font_size != false || $cricket_league_pro_single_evt_details_mainhead_font_weight != false) {
	$custom_css .= '.single-evt h5{';
	if ($cricket_league_pro_single_evt_details_mainhead_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_single_evt_details_mainhead_color) . ' ;';
	}
	if ($cricket_league_pro_single_evt_details_mainhead_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_single_evt_details_mainhead_font_family) . ';';
	}
	if ($cricket_league_pro_single_evt_details_mainhead_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_single_evt_details_mainhead_font_size) . 'px;';
	}
	if ($cricket_league_pro_single_evt_details_mainhead_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_single_evt_details_mainhead_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_single_evt_goto_location_color = get_theme_mod('cricket_league_pro_single_evt_goto_location_color');
$cricket_league_pro_single_evt_goto_location_font_size = get_theme_mod('cricket_league_pro_single_evt_goto_location_font_size');
$cricket_league_pro_single_evt_goto_location_font_family = get_theme_mod('cricket_league_pro_single_evt_goto_location_font_family');
$cricket_league_pro_single_evt_goto_location_font_weight = get_theme_mod('cricket_league_pro_single_evt_goto_location_font_weight');


if ($cricket_league_pro_single_evt_goto_location_color != false || $cricket_league_pro_single_evt_goto_location_font_family != false || $cricket_league_pro_single_evt_goto_location_font_size != false || $cricket_league_pro_single_evt_goto_location_font_weight != false) {
	$custom_css .= '.single-evt a.normal-btn.black{';
	if ($cricket_league_pro_single_evt_goto_location_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_single_evt_goto_location_color) . ' ;';
	}
	if ($cricket_league_pro_single_evt_goto_location_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_single_evt_goto_location_font_family) . ';';
	}
	if ($cricket_league_pro_single_evt_goto_location_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_single_evt_goto_location_font_size) . 'px;';
	}
	if ($cricket_league_pro_single_evt_goto_location_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_single_evt_goto_location_font_weight) . ';';
	}

	$custom_css .= '}';
}
;


$cricket_league_pro_single_evt_add_chalender_color = get_theme_mod('cricket_league_pro_single_evt_add_chalender_color');
$cricket_league_pro_single_evt_add_chalender_font_size = get_theme_mod('cricket_league_pro_single_evt_add_chalender_font_size');
$cricket_league_pro_single_evt_add_chalender_font_family = get_theme_mod('cricket_league_pro_single_evt_add_chalender_font_family');
$cricket_league_pro_single_evt_add_chalender_font_weight = get_theme_mod('cricket_league_pro_single_evt_add_chalender_font_weight');

if ($cricket_league_pro_single_evt_add_chalender_color != false || $cricket_league_pro_single_evt_add_chalender_font_family != false || $cricket_league_pro_single_evt_add_chalender_font_size != false || $cricket_league_pro_single_evt_add_chalender_font_weight != false) {
	$custom_css .= '.single-evt a.calender-button{';
	if ($cricket_league_pro_single_evt_add_chalender_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_single_evt_add_chalender_color) . ' ;';
	}
	if ($cricket_league_pro_single_evt_add_chalender_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_single_evt_add_chalender_font_family) . ';';
	}
	if ($cricket_league_pro_single_evt_add_chalender_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_single_evt_add_chalender_font_size) . 'px;';
	}
	if ($cricket_league_pro_single_evt_add_chalender_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_single_evt_add_chalender_font_weight) . ';';
	}
	$custom_css .= '}';
};


$cricket_league_pro_headermenu_font_size = get_theme_mod('cricket_league_pro_headermenu_font_size');
$cricket_league_pro_headermenu_font_weight = get_theme_mod('cricket_league_pro_headermenu_font_weight');
$cricket_league_pro_headermenu_color = get_theme_mod('cricket_league_pro_headermenu_color');
$cricket_league_pro_headermenu_font_family_header = get_theme_mod('cricket_league_pro_headermenu_font_family_header');

if ($cricket_league_pro_headermenu_color != false || $cricket_league_pro_headermenu_font_family_header != false || $cricket_league_pro_headermenu_font_size != false || $cricket_league_pro_headermenu_font_weight != false) {
	$custom_css .= '.main-navigation a,.primary_nav>li>ul>li a{';
	if ($cricket_league_pro_headermenu_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_headermenu_color) . ' !important;';
	}
	if ($cricket_league_pro_headermenu_font_family_header != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_headermenu_font_family_header) . ' !important;';
	}
	if ($cricket_league_pro_headermenu_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_headermenu_font_size) . 'px !important;';
	}
	if ($cricket_league_pro_headermenu_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_headermenu_font_weight) . ' !important;';
	}
	$custom_css .= '}';

}
$cricket_league_pro_dropdownbg_item_font_size = get_theme_mod('cricket_league_pro_dropdownbg_item_font_size');
$cricket_league_pro_dropdownbg_itemcolor = get_theme_mod('cricket_league_pro_dropdownbg_itemcolor');
$cricket_league_pro_dropdownbg_item_font_family = get_theme_mod('cricket_league_pro_dropdownbg_item_font_family');
if ($cricket_league_pro_dropdownbg_itemcolor != false || $cricket_league_pro_dropdownbg_item_font_family != false || $cricket_league_pro_dropdownbg_item_font_size != false) {
	$custom_css .= '#header .primary_nav>.menu-item-has-children>ul>li a{';
	if ($cricket_league_pro_dropdownbg_itemcolor != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_dropdownbg_itemcolor) . ' !important;';
	}
	if ($cricket_league_pro_dropdownbg_item_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_dropdownbg_item_font_family) . ' !important;';
	}
	if ($cricket_league_pro_dropdownbg_item_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_dropdownbg_item_font_size) . 'px !important;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_header_right_like_icon_color = get_theme_mod('cricket_league_pro_header_right_like_icon_color');
$cricket_league_pro_header_right_like_icon_font_size = get_theme_mod('cricket_league_pro_header_right_like_icon_font_size');

if ($cricket_league_pro_header_right_like_icon_color != false || $cricket_league_pro_header_right_like_icon_font_size != false) {
	$custom_css .= '.header-right i::before{';
	if ($cricket_league_pro_header_right_like_icon_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_header_right_like_icon_color) . ' !important;';
	}
	if ($cricket_league_pro_header_right_like_icon_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_header_right_like_icon_font_size) . 'px !important;';
	}
	$custom_css .= '}';
}
;
$cricket_league_pro_upcoming_view_all_color = get_theme_mod('cricket_league_pro_upcoming_view_all_color');
$cricket_league_pro_upcoming_view_all_font_size = get_theme_mod('cricket_league_pro_upcoming_view_all_font_size');
$cricket_league_pro_upcoming_view_all_font_family = get_theme_mod('cricket_league_pro_upcoming_view_all_font_family');
$cricket_league_pro_upcoming_view_all_font_weight = get_theme_mod('cricket_league_pro_upcoming_view_all_font_weight');


if ($cricket_league_pro_upcoming_view_all_color != false || $cricket_league_pro_upcoming_view_all_font_family != false || $cricket_league_pro_upcoming_view_all_font_size != false || $cricket_league_pro_upcoming_view_all_font_weight != false) {
	$custom_css .= 'section#leagueTable a.theme-btn{';
	if ($cricket_league_pro_upcoming_view_all_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_upcoming_view_all_color) . ' ;';
	}
	if ($cricket_league_pro_upcoming_view_all_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_upcoming_view_all_font_family) . ';';
	}
	if ($cricket_league_pro_upcoming_view_all_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_upcoming_view_all_font_size) . 'px;';
	}
	if ($cricket_league_pro_upcoming_view_all_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_upcoming_view_all_font_weight) . ';';
	}

	$custom_css .= '}';
}
;
$cricket_league_pro_spinner_opacity_color = get_theme_mod('cricket_league_pro_spinner_opacity_color');
if ($cricket_league_pro_spinner_opacity_color != false) {
	$custom_css .= '.eco-box{';
	if ($cricket_league_pro_spinner_opacity_color != 0) {
		$custom_css .= 'opacity:' . esc_html($cricket_league_pro_spinner_opacity_color) . ';';
	}
	$custom_css .= '}';
}
;

$cricket_league_pro_footer_copyright_bg = get_theme_mod('cricket_league_pro_footer_copyright_bg');
if ($cricket_league_pro_footer_copyright_bg != false) {
	$custom_css .= 'section#copyright{';
	if ($cricket_league_pro_footer_copyright_bg != 0) {
		$custom_css .= 'background-color:' . esc_html($cricket_league_pro_footer_copyright_bg) . ';';
	}
	$custom_css .= '}';
}
;



$cricket_league_pro_footer_newsletter_button_color = get_theme_mod('cricket_league_pro_footer_newsletter_button_color');
$cricket_league_pro_footer_newsletter_button_font_size = get_theme_mod('cricket_league_pro_footer_newsletter_button_font_size');
$cricket_league_pro_footer_newsletter_button_font_family = get_theme_mod('cricket_league_pro_footer_newsletter_button_font_family');
$cricket_league_pro_footer_newsletter_button_font_weight = get_theme_mod('cricket_league_pro_footer_newsletter_button_font_weight');
$cricket_league_pro_footer_newsletter_button_bgcolor = get_theme_mod('cricket_league_pro_footer_newsletter_button_bgcolor');

if ($cricket_league_pro_footer_newsletter_button_color != false || $cricket_league_pro_footer_newsletter_button_font_family != false || $cricket_league_pro_footer_newsletter_button_font_size != false || $cricket_league_pro_footer_newsletter_button_font_weight != false  || $cricket_league_pro_footer_newsletter_button_bgcolor) {
	$custom_css .= '#footer input.wpcf7-form-control.wpcf7-submit{';
	if ($cricket_league_pro_footer_newsletter_button_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_footer_newsletter_button_color) . ' ;';
	}
	if ($cricket_league_pro_footer_newsletter_button_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_footer_newsletter_button_font_family) . ';';
	}
	if ($cricket_league_pro_footer_newsletter_button_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_footer_newsletter_button_font_size) . 'px;';
	}
	if ($cricket_league_pro_footer_newsletter_button_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_footer_newsletter_button_font_weight) . ';';
	}
	if ($cricket_league_pro_footer_newsletter_button_bgcolor != false) {
		$custom_css .= 'background-color:' . esc_html($cricket_league_pro_footer_newsletter_button_bgcolor) . ';';
	}
	$custom_css .= '}';
}
;

$cricket_league_pro_footer_news_icon = get_theme_mod('cricket_league_pro_footer_news_icon');
if (!empty($cricket_league_pro_footer_news_icon)) {
	$custom_css .= '#footer .footer-last::after{';
	if ($cricket_league_pro_footer_newsletter_button_color != 0) {
		$custom_css .= 'display: none ;';
	} else {
		$custom_css .= 'display: block ;';
	}
	$custom_css .= '}';
}


$cricket_league_pro_aboutus_tab_heading_color = get_theme_mod('cricket_league_pro_aboutus_tab_heading_color');
$cricket_league_pro_aboutus_tab_heading_font_size = get_theme_mod('cricket_league_pro_aboutus_tab_heading_font_size');
$cricket_league_pro_aboutus_tab_heading_font_family = get_theme_mod('cricket_league_pro_aboutus_tab_heading_font_family');
$cricket_league_pro_aboutus_tab_heading_font_weight = get_theme_mod('cricket_league_pro_aboutus_tab_heading_font_weight');

if ($cricket_league_pro_aboutus_tab_heading_color != false || $cricket_league_pro_aboutus_tab_heading_font_family != false || $cricket_league_pro_aboutus_tab_heading_font_size != false || $cricket_league_pro_aboutus_tab_heading_font_weight != false ) {
	$custom_css .= 'ul.tab-links a,ul.tab-links .active a{';
	if ($cricket_league_pro_aboutus_tab_heading_color != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_aboutus_tab_heading_color) . ' ;';
	}
	if ($cricket_league_pro_aboutus_tab_heading_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_aboutus_tab_heading_font_family) . ';';
	}
	if ($cricket_league_pro_aboutus_tab_heading_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_aboutus_tab_heading_font_size) . 'px;';
	}
	if ($cricket_league_pro_aboutus_tab_heading_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_aboutus_tab_heading_font_weight) . ';';
	}
	$custom_css .= '}';
}
;

$cricket_league_pro_header_bat_image = get_theme_mod('cricket_league_pro_header_bat_image');
if ($cricket_league_pro_header_bat_image != false) {
	$custom_css .= '.white-back::before{';
	if ($cricket_league_pro_header_bat_image != false) {
		$custom_css .= 'background-image:url( ' . esc_html($cricket_league_pro_header_bat_image) . ') !important;';
	}
	$custom_css .= '}';
}

$cricket_league_pro_testimonial_sec_text_color = get_theme_mod('cricket_league_pro_testimonial_sec_text_color');
$cricket_league_pro_testimonial_sec_text_font_size = get_theme_mod('cricket_league_pro_testimonial_sec_text_font_size');
$cricket_league_pro_testimonial_sec_text_font_family = get_theme_mod('cricket_league_pro_testimonial_sec_text_font_family');
$cricket_league_pro_testimonial_sec_text_font_weight = get_theme_mod('cricket_league_pro_testimonial_sec_text_font_weight');
if ($cricket_league_pro_testimonial_sec_text_color_one != false || $cricket_league_pro_testimonial_sec_text_font_family != false || $cricket_league_pro_testimonial_sec_text_font_size != false || $cricket_league_pro_testimonial_sec_text_font_weight != false) {
	$custom_css .= '.testimonial-right p{';
	if ($cricket_league_pro_testimonial_sec_text_color_one != false) {
		$custom_css .= 'color: ' . esc_html($cricket_league_pro_testimonial_sec_text_color_one) . ' ;';
	}
	if ($cricket_league_pro_testimonial_sec_text_font_family != false) {
		$custom_css .= 'font-family:' . esc_html($cricket_league_pro_testimonial_sec_text_font_family) . ';';
	}
	if ($cricket_league_pro_testimonial_sec_text_font_size != false) {
		$custom_css .= 'font-size:' . esc_html($cricket_league_pro_testimonial_sec_text_font_size) . 'px;';
	}
	if ($cricket_league_pro_testimonial_sec_text_font_weight != false) {
		$custom_css .= 'font-weight:' . esc_html($cricket_league_pro_testimonial_sec_text_font_weight) . ';';
	}
	$custom_css .= '}';
}
;