<?php
defined('ABSPATH') or die("Cannot access pages directly.");
/*----------------------------------------------------------------------------------------
*	styles
*----------------------------------------------------------------------------------------*/
function image_defaults() {
	$max = 9999;
	$borders = array('solid', 'dotted', 'dashed', 'double', 'groove', 'ridge', 'inset', 'outset');
	$alignment = array('justify', 'left', 'right', 'center');

	$defaults = array(
		'image_section' => array( 'desc' => 'Widget image', 'value' => '', 'type' => 'section' ),
		'image_show' => array( 'desc' => 'Show image?', 'value' => true, 'type' => 'bool' ),
		'image' => array( 'desc' => 'Image', 'value' => '', 'type' => 'image' ),
		'image_background_color' => array( 'desc' => 'Image background color', 'value' => '', 'type' => 'color' ),
		'image_margin_top' => array( 'desc' => 'Image margin top (px)', 'value' => 10, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
		'image_margin_right' => array( 'desc' => 'Image margin right (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
		'image_margin_bottom' => array( 'desc' => 'Image margin bottom (px)', 'value' => 10, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
		'image_margin_left' => array( 'desc' => 'Image margin left (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
		'image_margin_auto' => array( 'desc' => 'Use auto instead of 0 for margin', 'value' => true, 'type' => 'bool' ),
		'image_padding_top' => array( 'desc' => 'Image padding top (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
		'image_padding_right' => array( 'desc' => 'Image padding right (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
		'image_padding_bottom' => array( 'desc' => 'Image padding bottom (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
		'image_padding_left' => array( 'desc' => 'Image padding left (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
		'image_padding_auto' => array( 'desc' => 'Use auto instead of 0 for padding', 'value' => false, 'type' => 'bool' ),
		'image_border_show' => array( 'desc' => 'Enable Image borders?', 'value' => false, 'type' => 'bool' ),
		'image_border_top_show' => array( 'desc' => 'Show image border top', 'value' => false, 'type' => 'bool' ),
		'image_border_width_top' => array( 'desc' => 'Image top border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
		'image_border_style_top' => array( 'desc' => 'Image top border border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
		'image_border_color_top' => array( 'desc' => 'Image top border color', 'value' => '#444444', 'type' => 'color' ),
		'image_border_right_show' => array( 'desc' => 'Show image border right', 'value' => false, 'type' => 'bool' ),
		'image_border_width_right' => array( 'desc' => 'Image right border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
		'image_border_style_right' => array('desc' => 'Image right border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
		'image_border_color_right' => array( 'desc' => 'Image right border color', 'value' => '#444444', 'type' => 'color' ),
		'image_border_bottom_show' => array( 'desc' => 'Show image border bottom', 'value' => false, 'type' => 'bool' ),
		'image_border_width_bottom' => array( 'desc' => 'Image bottom border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
		'image_border_style_bottom' => array( 'desc' => 'Image bottom border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
		'image_border_color_bottom' => array( 'desc' => 'Image bottom border color', 'value' => '#444444', 'type' => 'color' ),
		'image_border_left_show' => array( 'desc' => 'Show image border left', 'value' => false, 'type' => 'bool' ),
		'image_border_width_left' => array( 'desc' => 'Image left border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
		'image_border_style_left' => array( 'desc' => 'Image left border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
		'image_border_color_left' => array( 'desc' => 'Image left border color', 'value' => '#444444', 'type' => 'color' ),
		'image_border_radius_show' => array( 'desc' => 'Enable Image rounded corners?', 'value' => false, 'type' => 'bool' ),
		'image_border_radius' => array( 'desc' => 'Image border radius (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	);
	return $defaults;
}
?>