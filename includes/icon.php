<?php
defined('ABSPATH') or die("Cannot access pages directly.");

/*----------------------------------------------------------------------------------------
*	Icon font styles
*----------------------------------------------------------------------------------------*/
function icon_defaults() {

	$max = 9999;
	$borders = array('solid', 'dotted', 'dashed', 'double', 'groove', 'ridge', 'inset', 'outset');
	$alignment = array('justify', 'left', 'right', 'center');

	$defaults = array(
	    'icon_section' => array( 'desc' => 'Icon style', 'value' => '', 'type' => 'section' ),
	    'icon' => array( 'desc' => 'Icon font (e.g. fa fa-cog for Fontawesome cog)', 'value' => 'fa fa-cog', 'type' => 'text' ),
	    'icon_foreground_color' => array( 'desc' => 'Font icon color', 'value' => '#ffffff', 'type' => 'color' ),
	    'icon_font_size' => array( 'desc' => 'Widget font icon size (em)', 'value' => 5, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '0.25', ),
	    'icon_text_align' => array( 'desc' => 'Widget font icon alignment', 'type' => 'select', 'options' => $alignment, ),
	    'icon_container_section' => array( 'desc' => 'Icon container styling', 'value' => '', 'type' => 'section' ),
	    'icon_background_color' => array( 'desc' => 'Icon container background color', 'value' => '#ff7722', 'type' => 'color' ),
	    'icon_margin_top' => array( 'desc' => 'Icon container top margin (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'icon_margin_right' => array( 'desc' => 'Icon container right margin (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'icon_margin_bottom' => array( 'desc' => 'Icon container bottom margin (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'icon_margin_left' => array( 'desc' => 'Icon container left margin (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'icon_margin_auto' => array( 'desc' => 'Use auto instead of 0 for margin', 'value' => false, 'type' => 'bool' ),
	    'icon_padding_top' => array( 'desc' => 'Icon container top padding (px)', 'value' => 15, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'icon_padding_right' => array( 'desc' => 'Icon container right padding (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'icon_padding_bottom' => array( 'desc' => 'Icon container bottom padding (px)', 'value' => 15, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'icon_padding_left' => array( 'desc' => 'Icon container left padding (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'icon_padding_auto' => array( 'desc' => 'Use auto instead of 0 for padding', 'value' => false, 'type' => 'bool' ),
	    'icon_border_show' => array( 'desc' => 'Show icon container borders?', 'value' => false, 'type' => 'bool' ),
	    'icon_border_top_show' => array( 'desc' => 'Show icon container top border?', 'value' => false, 'type' => 'bool' ),
	    'icon_border_width_top' => array( 'desc' => 'Icon container top border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'icon_border_style_top' => array( 'desc' => 'Icon container top border border style', 'value' => '',  'type' => 'select', 'options' => $borders, ),
	    'icon_border_color_top' => array( 'desc' => 'Icon container top border color', 'value' => '#444444', 'type' => 'color' ),
	    'icon_border_right_show' => array( 'desc' => 'Show icon container right border?', 'value' => false, 'type' => 'bool' ),
	    'icon_border_width_right' => array( 'desc' => 'Icon container right border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'icon_border_style_right' => array( 'desc' => 'Icon container right border style', 'value' => '',  'type' => 'select', 'options' => $borders, ),
	    'icon_border_color_right' => array( 'desc' => 'Icon container right border color', 'value' => '#444444', 'type' => 'color' ),
	    'icon_border_bottom_show' => array( 'desc' => 'Show icon container bottom border?', 'value' => false, 'type' => 'bool' ),
	    'icon_border_width_bottom' => array( 'desc' => 'Icon container bottom border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'icon_border_style_bottom' => array( 'desc' => 'Icon container bottom border style', 'value' => '',  'type' => 'select', 'options' => $borders, ),
	    'icon_border_color_bottom' => array( 'desc' => 'Icon container bottom border color', 'value' => '#444444', 'type' => 'color' ),
	    'icon_border_left_show' => array( 'desc' => 'Show icon container left border?', 'value' => false, 'type' => 'bool' ),
	    'icon_border_width_left' => array( 'desc' => 'Icon container left border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'icon_border_style_left' => array( 'desc' => 'Icon container left border style', 'value' => '',  'type' => 'select', 'options' => $borders, ),
	    'icon_border_color_left' => array( 'desc' => 'Icon container left border color', 'value' => '#444444', 'type' => 'color' ),
	    'icon_border_radius_show' => array( 'desc' => 'Enable rounded borders?', 'value' => false, 'type' => 'bool' ),
	    'icon_border_radius' => array( 'desc' => 'Icon container border radius (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	);
	return $defaults;
}

?>