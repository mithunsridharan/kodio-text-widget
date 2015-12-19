<?php
defined('ABSPATH') or die("Cannot access pages directly.");
/*----------------------------------------------------------------------------------------
*	styles
*----------------------------------------------------------------------------------------*/
function button_defaults() {
	$max = 9999;
	$borders = array('solid', 'dotted', 'dashed', 'double', 'groove', 'ridge', 'inset', 'outset');
	$alignment = array('justify', 'left', 'right', 'center');

	$defaults = array(
    'button_section' => array( 'desc' => 'Button styling', 'value' => '', 'type' => 'section' ),
    'button_show' => array( 'desc' => 'Show button', 'value' => true, 'type' => 'bool' ),
    'button_text' => array( 'desc' => 'Button text', 'value' => 'Go', 'type' => 'text' ),
    'button_font_size' => array( 'desc' => 'Button font size (em)', 'value' => 1, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '0.25', ),
    'button_font_weight' => array( 'desc' => 'Button font weight', 'value' => 400, 'type' => 'number', 'min' => '100', 'max' => 900, 'step' => '100', ),
    'button_foreground_color' => array( 'desc' => 'Button text color', 'value' => '#ffffff', 'type' => 'color' ),
    'button_background_color' => array( 'desc' => 'Button background color', 'value' => '#ff7722', 'type' => 'color' ),
    'button_margin_top' => array( 'desc' => 'Button top margin (px)', 'value' => 15, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
    'button_margin_right' => array( 'desc' => 'Button right margin (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
    'button_margin_bottom' => array( 'desc' => 'Button bottom margin (px)', 'value' => 15, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
    'button_margin_left' => array( 'desc' => 'Button left margin (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
    'button_margin_auto' => array( 'desc' => 'Use auto instead of 0 for margin', 'value' => true, 'type' => 'bool' ),
    'button_padding_top' => array( 'desc' => 'Button top padding (px)', 'value' => 15, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
    'button_padding_right' => array( 'desc' => 'Button right padding (px)', 'value' => 35, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
    'button_padding_bottom' => array( 'desc' => 'Button bottom padding (px)', 'value' => 15, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
    'button_padding_left' => array( 'desc' => 'Button left padding (px)', 'value' => 35, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
    'button_padding_auto' => array( 'desc' => 'Use auto instead of 0 for padding', 'value' => false, 'type' => 'bool' ),
    'button_border_show' => array( 'desc' => 'Enable button borders?', 'value' => true, 'type' => 'bool' ),
    'button_border_top_show' => array( 'desc' => 'Show button top border', 'value' => true, 'type' => 'bool' ),
    'button_border_width_top' => array( 'desc' => 'Button top border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
    'button_border_style_top' => array( 'desc' => 'Button top border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
    'button_border_color_top' => array( 'desc' => 'Button top border color', 'value' => '#ffffff', 'type' => 'color' ),
    'button_border_right_show' => array( 'desc' => 'Show button right border', 'value' => true, 'type' => 'bool' ),
    'button_border_width_right' => array( 'desc' => 'Button right border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
    'button_border_style_right' => array( 'desc' => 'Button right border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
    'button_border_color_right' => array( 'desc' => 'Button right border color', 'value' => '#ffffff', 'type' => 'color' ),
    'button_border_bottom_show' => array( 'desc' => 'Show button bottom border', 'value' => true, 'type' => 'bool' ),
    'button_border_width_bottom' => array( 'desc' => 'Button bottom border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
    'button_border_style_bottom' => array( 'desc' => 'Button bottom border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
    'button_border_color_bottom' => array( 'desc' => 'Button bottom border color', 'value' => '#ffffff', 'type' => 'color' ),
    'button_border_left_show' => array( 'desc' => 'Show button left border', 'value' => true, 'type' => 'bool' ),
    'button_border_width_left' => array( 'desc' => 'Button left border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
    'button_border_style_left' => array( 'desc' => 'Button left border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
    'button_border_color_left' => array( 'desc' => 'Button left border color', 'value' => '#ffffff', 'type' => 'color' ),
    'button_border_radius_show' => array( 'desc' => 'Enable rounded borders?', 'value' => false, 'type' => 'bool' ),
    'button_border_radius' => array( 'desc' => 'Button corner radius (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
    'button_link' => array( 'desc' => 'Button link', 'value' => 'http://csrjournal.org', 'type' => 'text' ),
    'button_target' => array( 'desc' => 'Open link in a new window / tab', 'value' => true, 'type' => 'bool' ),
	);
	return $defaults;
}

?>