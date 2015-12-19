<?php

defined('ABSPATH') or die("Cannot access pages directly.");

function widget_defaults() {

	$max = 9999;
	$borders = array('solid', 'dotted', 'dashed', 'double', 'groove', 'ridge', 'inset', 'outset');
	$alignment = array('justify', 'left', 'right', 'center');

	$defaults = array(
	    'widget_section' => array( 'desc' => 'Widget style', 'value' => '', 'type' => 'section' ),
	    'widget_title_show' => array( 'desc' => 'Show title', 'value' => true, 'type' => 'bool' ),
	    'widget_title_text' => array( 'desc' => 'Widget title', 'value' => 'Kodio Text Widget', 'type' => 'text' ),
	    'widget_background_color' => array( 'desc' => 'Widget background color', 'value' => '#cccc00', 'type' => 'color' ),
	    'widget_margin_top' => array( 'desc' => 'Widget margin top (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'widget_margin_right' => array( 'desc' => 'Widget margin right (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'widget_margin_bottom' => array( 'desc' => 'Widget margin bottom (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'widget_margin_left' => array( 'desc' => 'Widget margin left (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'widget_margin_auto' => array( 'desc' => 'Use auto instead of 0 for margin', 'value' => false, 'type' => 'bool' ),
	    'widget_padding_top' => array( 'desc' => 'Widget padding top (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'widget_padding_right' => array( 'desc' => 'Widget padding right (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'widget_padding_bottom' => array( 'desc' => 'Widget padding bottom (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'widget_padding_left' => array( 'desc' => 'Widget padding left (px)', 'value' => 0, 'type' => 'number', 'min' => '0', 'max' => $max, 'step' => '1', ),
	    'widget_padding_auto' => array( 'desc' => 'Use auto instead of 0 for padding', 'value' => false, 'type' => 'bool' ),
	    'widget_border_show' => array( 'desc' => 'Enable widget borders?', 'value' => false, 'type' => 'bool' ),
	    'widget_border_top_show' => array( 'desc' => 'Show widget border top', 'value' => false, 'type' => 'bool' ),
	    'widget_border_width_top' => array( 'desc' => 'Widget top border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'widget_border_style_top' => array( 'desc' => 'Widget top border border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
	    'widget_border_color_top' => array( 'desc' => 'Widget top border color', 'value' => '#444444', 'type' => 'color' ),
	    'widget_border_right_show' => array( 'desc' => 'Show widget border right', 'value' => false, 'type' => 'bool' ),
	    'widget_border_width_right' => array( 'desc' => 'Widget right border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'widget_border_style_right' => array('desc' => 'Widget right border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
	    'widget_border_color_right' => array( 'desc' => 'Widget right border color', 'value' => '#444444', 'type' => 'color' ),
	    'widget_border_bottom_show' => array( 'desc' => 'Show widget border bottom', 'value' => false, 'type' => 'bool' ),
	    'widget_border_width_bottom' => array( 'desc' => 'Widget bottom border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'widget_border_style_bottom' => array( 'desc' => 'Widget bottom border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
	    'widget_border_color_bottom' => array( 'desc' => 'Widget bottom border color', 'value' => '#444444', 'type' => 'color' ),
	    'widget_border_left_show' => array( 'desc' => 'Show widget border left', 'value' => false, 'type' => 'bool' ),
	    'widget_border_width_left' => array( 'desc' => 'Widget left border thickness (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	    'widget_border_style_left' => array( 'desc' => 'Widget left border style', 'value' => '', 'type' => 'select', 'options' => $borders, ),
	    'widget_border_color_left' => array( 'desc' => 'Widget left border color', 'value' => '#444444', 'type' => 'color' ),
	    'widget_border_radius_show' => array( 'desc' => 'Enable widget rounded corners?', 'value' => false, 'type' => 'bool' ),
	    'widget_border_radius' => array( 'desc' => 'Widget border radius (px)', 'value' => 1, 'type' => 'number', 'min' => '1', 'max' => $max, 'step' => '1', ),
	);
	return $defaults;
}

?>