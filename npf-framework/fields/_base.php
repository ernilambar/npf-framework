<?php
class npf_field
{

	var $name;

	public static function getInstance()
	    {
	        static $instance = null;
	        if (null === $instance) {
	            $instance = new static();
	        }

	        return $instance;
	    }

	protected function __construct()
	{

	}

	function get_value($args){

		$output = '';
		if ( isset( $args['options'][$args['field']['id']] ) ) {
			$output = $args['options'][$args['field']['id']] ;
		}
		else{
			if ( isset( $args['field']['default'] ) ) {
				$output = $args['field']['default'];
			}
		}
		return $output;

	}

}
