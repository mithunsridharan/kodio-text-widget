<?php

defined('ABSPATH') or die("Cannot access pages directly.");

function kodio_text_widget_defaults() {
	include_once(dirname(__FILE__) . "/widget.php");
	include_once(dirname(__FILE__) . "/icon.php");
	include_once(dirname(__FILE__) . "/image.php");
	include_once(dirname(__FILE__) . "/textarea.php");
	include_once(dirname(__FILE__) . "/button.php");

	$defaults = array();
	$defaults = array_merge( $defaults, widget_defaults() );
	$defaults = array_merge( $defaults, icon_defaults() );
	$defaults = array_merge( $defaults, image_defaults() );
	$defaults = array_merge( $defaults, textarea_defaults() );
	$defaults = array_merge( $defaults, button_defaults() );

	return $defaults;
}

?>