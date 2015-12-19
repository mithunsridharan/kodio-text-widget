<?php
/**
 * Plugin Name: Kodio Text Widget
 * Plugin URI: http://blueos.in/
 * Description: This plugin creates a cool, highly customisable text widget that also serves as a light weight call to action element. Also includes the ability to use <a href="https://fortawesome.github.io/Font-Awesome/">Fontawesome</a> icons as widget icon.
 * Version: 1.8.4
 * Author: Mithun Sridharan
 * Author URI: http://jixta.wordpress.com
 * Date : 18. Dec 2015
 * License: GPL2
 */

defined('ABSPATH') or die("Cannot access pages directly.");

	class Kodio_Text_Widget extends WP_Widget {
		//Some variables required by the widget
		var $folder = '';
		var $corevars;

		//The constructor
		function Kodio_Text_Widget() {
			$this->folder = dirname($plugin);
			parent::WP_Widget('Kodio_Text_Widget', 'Kodio Text Widget');
			add_action('init', array(&$this, 'add_styles'));
			$this->corevars = kodio_text_widget_defaults(); //Get the widget's defaults
		}

		//Styles required by the widget frontend
		function add_styles(){
			wp_register_style( 'kodio-text-widget-css', plugins_url( 'kodio-text-widget/css/style.css' ) );
			wp_register_style( 'kodio-text-widget-font-awesome', plugins_url( 'kodio-text-widget/fonts/font-awesome/css/font-awesome.min.css' ) );
			wp_enqueue_style( 'kodio-text-widget-css' );
			wp_enqueue_style( 'kodio-text-widget-font-awesome' );
		}

		//Build and display the widget
		function widget($args, $instance) {
			extract($args);

			$elements = array('widget', 'icon', 'image', 'textarea', 'button');
			$spaces = array('margin', 'padding');
			$style = 'style';
			$border = 'border';
			$text = 'text';
			$show = 'show';
			$usc = '_';
			$target = 'target="_blank"';

			foreach ($this->corevars as $var => $param) {
				${$var} =  $instance[$var];
			}

			echo $before_widget;
			echo ( $widget_title_show && $widget_title_text ) ? $before_title . $widget_title_text . $after_title : '';

			//Not for the faint of heart. Build the variables dynamically and populate them with values programatically
			foreach ($elements as $element) {
					foreach ($spaces as $space) {
						${$element . $usc . $space . $usc . $style } = kodio_get_spacing_styles($instance, $element, $space);
					}
					${$element . $usc . $border . $usc . $style } = ( ${$element . $usc . $border . $usc . $show}) ? kodio_get_border_styles($instance, $element) : '';
					${$element . $usc . $text . $usc . $style } = kodio_get_text_styles($instance, $element);
					${$element . $usc . $style } = ${$element . $usc . 'padding' . $usc . $style } . ${$element . $usc . 'margin' . $usc . $style } . ${$element . $usc . $border . $usc . $style } . ${$element . $usc . 'text' . $usc . $style };
			}

			//Now, display the widget
			echo "<div style ='$widget_style" . " ' class='kodio-text-widget'>";
				echo ( $icon ) ? '<div class="kodio-text-widget-icon" style="' . $icon_style . '"><span class="' . $icon . '"></span></span></div>': '';
				echo ($image_show && $image) ? "<img style ='$image_style' src='$image' >" : '';
				echo ($textarea_text) ? "<p style ='$textarea_style'>"  . $textarea_text . "</p>":'';
				echo ($button_show) ?'<a href="' . $button_link . '"' . ( ($button_target) ? $target : '' ) . '><button class="kodio-text-widget-button" style="' . $button_style . '">' . $button_text . '</button></a>' : '';
			echo '</div>';
			echo $after_widget;
		}

		//Iterate the list of widget variables and update them with changed values
		function update($new, $old) {
			$instance = $old;
			foreach ($this->corevars as $var => $param) {
				$instance[$var] =  $new[$var];
			}
			return $instance;
		}

		//The widget's backend form
		function form($instance) {
		$defaults = array();

		foreach ($this->corevars as $var => $param) {
			$defaults[$var] = $param['value'];
		}

		$instance = wp_parse_args( (array) $instance, $defaults );

		//Based on the type of the UI element, display the backend input element differently
		foreach ($this->corevars as $var => $param) {

			if($param['type'] === 'text') {?>
				<p>
					<label for="<?php echo $this->get_field_id($var); ?>"><?php echo $param['desc']; ?></label>
					<input class="widefat" id="<?php echo $this->get_field_id($var); ?>" name="<?php echo $this->get_field_name($var); ?>" type="text" value="<?php echo esc_attr( $instance[$var] ); ?>" />
				</p>
			<?php } else  if($param['type'] === 'number') { ?>
				<p>
			  		<label for="<?php echo $this->get_field_id($var); ?>"><?php echo $param['desc']; ?></label>
				  	<input class="widefat" id="<?php echo $this->get_field_id($var); ?>" min="<?php echo $param['min']; ?>" max="<?php echo $param['max']; ?>" step="<?php echo $param['step']; ?>" name="<?php echo $this->get_field_name($var); ?>" type="number" value="<?php echo $instance[$var]; ?>" />
			  	</p>
			<?php } else if($param['type'] === 'bool') { ?>
				<p>
					<label for="<?php echo $this->get_field_id($var); ?>"><?php echo $param['desc']; ?></label>
					<input class="checkbox" id="<?php echo $this->get_field_id($var); ?>" name="<?php echo $this->get_field_name($var); ?>" type="checkbox" <?php checked( (bool) $instance[$var], true ); ?> />
				</p>
			<?php } else if($param['type'] === 'textarea') { ?>
				<p>
				  	<label for="<?php echo $this->get_field_id($var); ?>"><?php echo $param['desc']; ?></label>
					<textarea class="widefat" id="<?php echo $this->get_field_id($var); ?>" name="<?php echo $this->get_field_name($var); ?>" rows="20" ><?php echo wp_strip_all_tags( $instance[$var] ); ?></textarea>
			  	</p>
			<?php } else if($param['type'] === 'color') { ?>
				<p>
				  	<label for="<?php echo $this->get_field_id($var); ?>"><?php echo $param['desc']; ?></label>
					<input class="button kodio-pick-color" id="<?php echo $this->get_field_id($var); ?>" name="<?php echo $this->get_field_name($var); ?>" type="text" value="<?php echo $instance[$var]; ?>" />
			  	</p>
			<?php } else if($param['type'] === 'section') { ?>
				<p>
				  	<h1><?php echo $param['desc']; ?></h1>
			  	</p>
			<?php } else  if($param['type'] === 'select') { ?>
				<p>
			  		<label for="<?php echo $this->get_field_id($var); ?>"><?php echo $param['desc']; ?></label>
				  	<select class="widefat" name="<?php echo $this->get_field_name($var); ?>" id="<?php echo $this->get_field_id($var); ?>">
				  		<?php
					  		foreach( $param['options'] as $param) {
					  			echo '<option value="' . $param . '" id="<?php echo $this->get_field_id($var); ?>"', $instance[$var] == $param ? ' selected="selected"' : '', '>', $param, '</option>';
				  			}
				  		?>
					</select>
			  	</p>
			<?php } else  if($param['type'] === 'image') { ?>
			  	<p>
					<?php echo ( ($instance[$var] ) ? "<img class=\"custom_media_image\" src=\"$instance[$var]\"/>" : ''); ?>
					<input class="widefat custom_media_url" id="<?php echo $this->get_field_id($var); ?>" name="<?php echo $this->get_field_name($var); ?>" type="text" value="<?php echo $instance[$var]; ?>">
			  	</p>
			  	<p>
					<input class="button kodio-image-upload-class" id="kodio-image-upload-id" type="button" value="<?php echo 'Upload Image'; ?>"/>
			  	</p>
			<?php }
		}
	}
}

add_action('widgets_init', create_function('', 'return register_widget("Kodio_Text_Widget");'));

//Styles and scripts required by the widget's backend form
function kodio_enqueue_admin_scripts($hook) {
   	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'wp-color-picker');
	wp_enqueue_media();
	wp_register_script('kodio-admin-scripts', plugins_url('/js/kodio-admin.js', __FILE__ ), array( 'wp-color-picker' ));
	wp_register_style('kodio-admin-styles', plugins_url('/css/kodio-admin.css', __FILE__ ));
	wp_enqueue_script( 'kodio-admin-scripts' );
	wp_enqueue_style( 'kodio-admin-styles' );
}

add_action( 'admin_enqueue_scripts', 'kodio_enqueue_admin_scripts' );

//Some includes required by the widget
include_once(dirname(__FILE__) . "/includes/variables.php");
include_once(dirname(__FILE__) . "/includes/functions.php");
?>