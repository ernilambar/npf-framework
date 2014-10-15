<?php

class npf_field_cpt_checkbox extends npf_field
{
	var $args;
	function __construct()
	{
		// vars
		$this->name = 'cpt_checkbox';

		// do not delete!
  	parent::__construct();
	}


	function render_field($args)
	{
		$pargs = array(
			'public'   => true,
			);
		$all_post_types = get_post_types( $pargs, 'objects', 'and' );
		unset($all_post_types['attachment']);

		foreach ($all_post_types as $key => $choice) {
			$checked_text = '';
			if (is_array($args['field_value']) && in_array($key, $args['field_value'])) {
				$checked_text = ' checked="checked" ';
			}
			echo '<input type="checkbox" name="'.$args['field_name'].'[]" id="'.$args['field_id'].'" '.$checked_text.' value="'.esc_attr($key).'" />';
			echo $choice->labels->singular_name . ' ';
		}



	}

}