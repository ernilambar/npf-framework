<?php

class NPF_Options
{
	var $base_args;
	var $options;
	function __construct($args) {

		$this->base_args = $args;
		$this->options = get_option($this->base_args['option_slug']);

		add_action('admin_menu', array($this,'create_menu_page'));

		add_action('admin_init', array($this,'register_settings'));

		add_action('admin_enqueue_scripts', array($this,'plugin_scripts'));

	}




	function plugin_scripts(){

		$screen = get_current_screen();
		$required_screen = 'settings_page_'. $this->base_args['menu_slug'];
		if ($required_screen != $screen->id ) {
			return;
		}
		// On/Off
		wp_enqueue_style( 'npf-framework-onoff-style', plugin_dir_url( __FILE__ ) . '/assets/vendor/onoff/jquery.onoff.css' );
		wp_enqueue_script( 'npf-framework-onoff-script', plugin_dir_url( __FILE__ ) . 'assets/vendor/onoff/jquery.onoff.min.js', array('jquery') );

		// Upload requirement
		wp_enqueue_style('thickbox');
	  wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');

		// Color
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker');

		// jQuery UI Style
		wp_enqueue_style( 'jquery-ui-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css' );

		// Select2
		wp_enqueue_style( 'npf-framework-select2-style', plugin_dir_url( __FILE__ ) . '/assets/vendor/select2/select2.css' );
		wp_enqueue_script( 'npf-framework-select2-script', plugin_dir_url( __FILE__ ) . 'assets/vendor/select2/select2.min.js', array('jquery') );

		// Framework Style
		wp_enqueue_style( 'npf-framework-style', plugin_dir_url( __FILE__ ) . '/assets/css/npf.css' );

		wp_enqueue_script( 'npf-framework-tabs-script', plugin_dir_url( __FILE__ ) . '/assets/js/jquery.easytabs.min.js', array('jquery') );

		wp_enqueue_script( 'npf-framework-timepicker', plugin_dir_url( __FILE__ ) . 'assets/js/jquery-ui-timepicker-addon.js', array('jquery','jquery-ui-core','jquery-ui-slider','jquery-ui-datepicker') );
		wp_enqueue_script( 'npf-framework-script', plugin_dir_url( __FILE__ ) . 'assets/js/npf.js', array('jquery','jquery-ui-core','jquery-ui-slider','jquery-ui-datepicker','npf-framework-tabs-script','npf-framework-timepicker','npf-framework-select2-script','npf-framework-onoff-script') );

	}

	function register_settings(){

		register_setting($this->base_args['option_slug'].'-group', $this->base_args['option_slug']);

		foreach ($this->base_args['tabs'] as $tab_key => $tab) {

			add_settings_section( $tab['id'].'_settings', $tab['title'] , array($this,'section_text_callback'), $tab['id'].'-main');

			foreach ($tab['fields'] as $field_key => $field) {
				$args = array(
					'field'       => $field,
					'field_id'    => $field['id'],
					'field_name'  => $this->base_args['option_slug'].'['.$field['id'].']',
					'tab'         => $tab,
					'base_args'   => $this->base_args,
					'field_value' => (isset($this->options[$field['id']]))?$this->options[$field['id']]:'',
					'options'   => $this->options,
				);

				add_settings_field($field_key, $field['title'], array($this,'field_callback'), $tab['id'].'-main', $tab['id'].'_settings',  $args );
			}

		}


	}

	///
	function section_text_callback($arg){

		$id = $arg['id'];
		$current_section=str_replace('_settings', '', $id);
		$sub_heading = '';
		$callback_object = $arg['callback'][0];
		if (isset($callback_object->base_args['tabs'][$current_section]['sub_heading'])) {
			$sub_heading = $callback_object->base_args['tabs'][$current_section]['sub_heading'];
		}
		if (!empty($sub_heading)) {
			echo '<div class="npf-subheading">'.$sub_heading.'</div><!-- .npf-subheading -->';
		}

	}
	///
	///
	function field_callback($args){
		$field_type = $args['field']['type'];
		if ( ! class_exists('npf_field_'.$field_type) ) {
			$ov_file = $field_type.'.php';
			echo 'Class <strong>npf_field_'.$field_type.'</strong> does not exist.';
			return;
		}
		$class = 'npf_field_'.$field_type;
		$instance = $class::getInstance();
		$instance->render_field($args);
		$instance->show_description($args);

	}
	///
	function create_menu_page(){

    add_options_page(
        $this->base_args['page_title'],
        $this->base_args['menu_title'],
        $this->base_args['capability'],
        $this->base_args['menu_slug'],
        array($this,'menu_page_callback')
    );

	}

	function menu_page_callback(){

		require_once 'views/admin.php';

	}
}
