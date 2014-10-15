<?php

class npf_field_upload extends npf_field
{
	var $args;
	function __construct()
	{
		// vars
		$this->name = 'upload';

		// do not delete!
  	parent::__construct();
	}


	function render_field($args)
	{

		$field_value = $this->get_value($args);
		echo '<input type="text" name="'.$args['field_name'].'" id="'.$args['field_id'].'" value="'.$field_value.'" class="regular-text code img" />';
		echo '<input type="button" class="select-img button" value="Upload" />';
		if (!empty($field_value)) {
			echo '<img src="'.$field_value.'" alt="Preview" class="img-preview" />';
		}

	}

}
