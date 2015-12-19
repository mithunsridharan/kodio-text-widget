<?php

defined('ABSPATH') or die("Cannot access pages directly.");

function kodio_get_spacing_styles($instance, $item, $style){
	$positions = array('top', 'right', 'bottom', 'left');
	$space = ' ';
	$element = $style . ':';

	foreach ($positions as $position) {
		$variable = $item . '_' . $style . '_' . $position;
		$auto = $instance[ $item . '_' . $style . '_auto'];
		$value = $instance[$variable];

		if( ($auto == 'on') && ($value == 0) ) {
			$element .= 'auto' . $space;
		} else {
			$element .= $instance[$variable] . 'px' . $space;
		}
	}
	$element .= ';';
	return $element;
}

function kodio_get_border_styles($instance, $item){
	$positions = array('top', 'right', 'bottom', 'left');
	$border = 'border';
	$unit = 'px';
	$space = ' ';
	$colon = ';';
	$element = '';

	foreach ($positions as $position) {
		$show_var = $item . '_' . $border . '_' . $position . '_' . 'show';
		$show = $instance[$show_var];

		if( $show == 'on' ) {
			$width_var = $item . '_' . $border . '_width_' . $position;
			$color_var =  $item . '_' . $border . '_color_' . $position;
			$style_var =  $item . '_' . $border . '_style_' . $position;

			$width = $instance[$width_var];
			$color =  $instance[$color_var];
			$style =  $instance[$style_var];

			$element .= $border . '-';//border-
			$element .= $position . ':' . $width . $unit . $space . $style . $space . $color . $colon . $space;
		}
	}
	$radius_var =  $item . '_' . $border . '_radius'; //widget_border_radius
	$radius =  ( ($instance[$radius_var . '_show'] == 'on') && ($instance[$radius_var] != 0) ) ? $element .= 'border-radius:' . $instance[$radius_var] . $unit . $colon:'';

	return $element;
}

function kodio_get_text_styles($instance, $item){
	$separator = '; ';
	$unit = 'em';

	$foreground_var = $item . '_foreground_color';
	$background_var = $item . '_background_color';
	$fontsize_var = $item . '_font_size';
	$fontweight_var = $item . '_font_weight';
	$textalignment_var = $item . '_text_align';

	$foreground = $instance[$foreground_var];
	$background = $instance[$background_var];
	$fontsize = $instance[$fontsize_var];
	$fontweight = $instance[$fontweight_var];
	$textalignment = $instance[$textalignment_var];

	$style = '';

	$style .= ($foreground != '') ? 'color: ' . $foreground . $separator : '';
	$style .= 'background: ' . ( ($background != '') ? $background : 'transparent' ) . $separator;
	$style .= ($fontsize != '') ? 'font-size: ' . $fontsize . $unit . $separator : '';
	$style .= ($fontweight != '') ? 'font-weight: ' . $fontweight . $separator : '';
	$style .= ($textalignment != '') ? 'text-align: ' . $textalignment . $separator : '';

	return $style;
}
?>