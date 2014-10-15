<?php

class npf_field_custom_taxonomy_select extends npf_field
{
	var $args;
	function __construct()
	{
		// vars
		$this->name = 'custom_taxonomy_select';

		// do not delete!
  	parent::__construct();
	}


	function render_field($args)
	{

		$pargs = array(
			'selected'   => $args['field_value'],
			'name'       => $args['field_name'],
			'id'         => $args['field_id'],
			'taxonomy'   => $args['field']['taxonomy'],
			'hide_empty' => 1,
			'orderby'    => 'name',
			'order'      => 'asc',

			);
		if (isset($args['field']['extra_args']) && !empty($args['field']['extra_args']) && is_array($args['field']['extra_args']) ) {
			$pargs = array_merge($pargs,$args['field']['extra_args']);
		}
		wp_dropdown_categories( $pargs );

	}

}
