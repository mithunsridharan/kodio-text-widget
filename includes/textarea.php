<?php

defined('ABSPATH') or die("Cannot access pages directly.");

/*----------------------------------------------------------------------------------------
*	Text area styles
*----------------------------------------------------------------------------------------*/
function textarea_defaults() {

	$max = 9999;
	$borders = array('solid', 'dotted', 'dashed', 'double', 'groove', 'ridge', 'inset', 'outset');
	$alignment = array('justify', 'left', 'right', 'center');

	$lorem = file_get_contents(dirname(__FILE__) . '/lorem.txt');

	$defaults = array(
	    'textarea_section' => array( 'desc' => 'Text area style', 'value' => '', 'type' => 'section' ),
		'textarea_text' => array( 'desc' => 'Text area', 'value' => $lorem, 'type' => 'textarea' ),
	    'textarea_background_color' => array( 'desc' => 'Text area background color', 'value' => '#cccc00', 'type' => 'color' ),
	    'textarea_foreground_color' => array( 'desc' => 'Text area text color', 'value' => '#ffffff', 'type' => 'color' ),
	    'textarea_font_size' => array( 'desc' => 'Text area font size (em)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '0.25', ),
	    'textarea_font_weight' => array( 'desc' => 'Text area font weight', 'value' => 400, 'type' => 'number', 'min' => '100', 'max' => 900, 'step' => '100', ),
	    'textarea_text_align' => array( 'desc' => 'Widget text alignment', 'value' => '', 'type' => 'select', 'options' => $alignment, ),
	    'textarea_margin_top' => array( 'desc' => 'Text area margin top (px)', 'value' => 15, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'textarea_margin_right' => array( 'desc' => 'Text area margin right (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'textarea_margin_bottom' => array( 'desc' => 'Text area margin bottom (px)', 'value' => 15, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'textarea_margin_left' => array( 'desc' => 'Text area margin left (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'textarea_margin_auto' => array( 'desc' => 'Use auto instead of 0 for margin', 'value' => true, 'type' => 'bool' ),
	    'textarea_padding_top' => array( 'desc' => 'Text area padding top (px)', 'value' => 15, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'textarea_padding_right' => array( 'desc' => 'Text area padding right (px)', 'value' => 35, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'textarea_padding_bottom' => array( 'desc' => 'Text area padding bottom (px)', 'value' => 15, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'textarea_padding_left' => array( 'desc' => 'Text area padding left (px)', 'value' => 35, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'textarea_padding_auto' => array( 'desc' => 'Use auto instead of 0 for padding', 'value' => false, 'type' => 'bool' ),
	    'textarea_border_show' => array( 'desc' => 'Enable text area borders?', 'value' => false, 'type' => 'bool' ),
	    'textarea_border_top_show' => array( 'desc' => 'Show text area border top', 'value' => false, 'type' => 'bool' ),
	    'textarea_border_width_top' => array( 'desc' => 'Text area top border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'textarea_border_style_top' => array( 'desc' => 'Text area top border border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
	    'textarea_border_color_top' => array( 'desc' => 'Text area top border color', 'value' => '#444444', 'type' => 'color' ),
	    'textarea_border_right_show' => array( 'desc' => 'Show text area border right', 'value' => false, 'type' => 'bool' ),
	    'textarea_border_width_right' => array( 'desc' => 'Text area right border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'textarea_border_style_right' => array( 'desc' => 'Text area right border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
	    'textarea_border_color_right' => array( 'desc' => 'Text area right border color', 'value' => '#444444', 'type' => 'color' ),
	    'textarea_border_bottom_show' => array( 'desc' => 'Show text area border bottom', 'value' => false, 'type' => 'bool' ),
	    'textarea_border_width_bottom' => array( 'desc' => 'Text area bottom border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'textarea_border_style_bottom' => array( 'desc' => 'Text area bottom border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
	    'textarea_border_color_bottom' => array( 'desc' => 'Text area bottom border color', 'value' => '#444444', 'type' => 'color' ),
	    'textarea_border_left_show' => array( 'desc' => 'Show text area border left', 'value' => false, 'type' => 'bool' ),
	    'textarea_border_width_left' => array( 'desc' => 'Text area left border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'textarea_border_style_left' => array( 'desc' => 'Text area left border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
	    'textarea_border_color_left' => array( 'desc' => 'Text area left border color', 'value' => '#444444', 'type' => 'color' ),
	    'textarea_border_radius_show' => array( 'desc' => 'Enable text area rounded corners?', 'value' => false, 'type' => 'bool' ),
	    'textarea_border_radius' => array( 'desc' => 'Text area border radius (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	);
	return $defaults;
}

?>