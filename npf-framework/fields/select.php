<?php

class npf_field_select extends npf_field
{
	var $args;
	function __construct()
	{
		// vars
		$this->name = 'select';

		// do not delete!
  	parent::__construct();
	}


	function render_field($args)
	{

		echo '<select name="'.$args['field_name'].'" id="'.$args['field_id'].'">';
		if (!empty($args['field']['choices']) && is_array($args['field']['choices']) ) {
			foreach ($args['field']['choices'] as $key => $value) {
				echo '<option value="'.esc_attr($key).'"'.selected( $args['field_value'], $key, false).'>'.esc_attr($value).'</option>';
			}
		}
		echo '</select>';

	}

}