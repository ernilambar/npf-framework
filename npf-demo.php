<?php
/**
 * Plugin Name:       NPF Demo
 * Plugin URI:        #
 * Description:       NPF Demo
 * Version:           1.0.0
 * Author:            Nilambar Sharma
 * Author URI:        #
 * Text Domain:       npf-demo
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once 'npf-framework/init.php';

/////////////////

$my_settings = array(
	'page_title'  => 'NPF Demo',
	'menu_title'  => 'NPF Demo',
	'capability'  => 'administrator',
	'menu_slug'   => 'npf-demo-page',
	'option_slug' => 'npf_demo_option',

	// tab start
	'tabs' => array(

		'general' => array(
			'id'    => 'general',
			'title' => 'General',
			'sub_heading' => 'General sub heading here',
			'fields' => array(
				'sample_text' => array(
					'id'      => 'sample_text',
					'title'   => 'Sample Text',
					'type'    => 'text',
					'default' => '',
					),
				'sample_textarea' => array(
					'id'      => 'sample_textarea',
					'title'   => 'Sample Textarea',
					'type'    => 'textarea',
					'default' => '',
					),
				'sample_date' => array(
					'id'    => 'sample_date',
					'title' => 'Sample Date Picker',
					'type'  => 'date',
					),
				'sample_date_time' => array(
					'id'    => 'sample_date_time',
					'title' => 'Sample Date Time Picker',
					'type'  => 'date_time',
					),
				'sample_time' => array(
					'id'    => 'sample_time',
					'title' => 'Sample Time Picker',
					'type'  => 'time',
					),
				'sample_cpt_checkbox' => array(
					'id'    => 'sample_cpt_checkbox',
					'title' => 'Sample CPT checkbox',
					'type'  => 'cpt_checkbox',
					),
				'sample_color' => array(
					'id'    => 'sample_color',
					'title' => 'Sample Color picker',
					'type'  => 'color',
					),
				'sample_upload' => array(
					'id'    => 'sample_upload',
					'title' => 'Sample Upload',
					'type'  => 'upload',
					),
				'sample_onoff' => array(
					'id'    => 'sample_onoff',
					'title' => 'Sample On Off',
					'type'  => 'on_off',
					),
				'sample_radio' => array(
					'id'    => 'sample_radio',
					'title' => 'Gender',
					'type'  => 'radio',
					'choices'  => array(
						'm' => 'Male',
						'f' => 'Female',
						),
					),
				'sample_checkbox' => array(
					'id'    => 'sample_checkbox',
					'title' => 'Sample Checkbox',
					'type'  => 'checkbox',
					'choices'  => array(
						'movies' => 'Movies',
						'tv'     => 'TV',
						'sports' => 'Sports',
						),
					),
				'sample_taxonomy_select' => array(
					'id'       => 'sample_taxonomy_select',
					'title'    => 'Sample Taxonomy Select',
					'type'     => 'custom_taxonomy_select',
					'taxonomy' => 'category',
					),
				'sample_taxonomy_checkbox' => array(
					'id'       => 'sample_taxonomy_checkbox',
					'title'    => 'Sample Taxonomy Checkbox',
					'type'     => 'custom_taxonomy_checkbox',
					'taxonomy' => 'category',
					),
				'sample_post_type_select' => array(
					'id'       => 'sample_post_type_select',
					'title'    => 'Sample Post Type Select',
					'type'     => 'custom_post_type_select',
					'post_type' => 'page',
					),
				'sample_post_type_checkbox' => array(
					'id'       => 'sample_post_type_checkbox',
					'title'    => 'Sample Post Type Checkbox',
					'type'     => 'custom_post_type_checkbox',
					'post_type' => 'page',
					),
				'sample_wysiwyg' => array(
					'id'    => 'sample_wysiwyg',
					'title' => 'Sample Wysiwyg',
					'type'  => 'wysiwyg',
					),
				),

			),
		'header' => array(
			'id'    => 'header',
			'title' => 'Header',
			'sub_heading' => 'Header sub heading here',
			'fields' => array(
				'header_title' => array(
					'id'      => 'header_title',
					'title'   => 'Header Title',
					'type'    => 'text',
					'default' => 'This is default title',
					),
				'header_intro' => array(
					'id'      => 'header_intro',
					'title'   => 'Header Intro',
					'type'    => 'textarea',
					'default' => 'This is default intro',
					),
				),
			),

		),
	// tab end

	);

$npf_demo_object = new NPF_Options($my_settings);