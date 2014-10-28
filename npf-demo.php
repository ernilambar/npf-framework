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
	'parent_page' => 'tools.php',

	// tab start
	'tabs' => array(

		'general' => array(
			'id'    => 'general',
			'title' => 'General',
			'sub_heading' => 'General sub heading here',
			'fields' => array(
				'sample_text' => array(
					'id'          => 'sample_text',
					'title'       => 'Sample Text',
					'type'        => 'text',
					'default'     => '',
					'description' => 'Please Enter Sample Text ',
					),
				'sample_text_small' => array(
					'id'          => 'sample_text_small',
					'title'       => 'Sample Text Small',
					'type'        => 'text',
					'text_type'   => 'small',
					'description' => 'Please Enter Short Text ',
					),
				'sample_text_large' => array(
					'id'          => 'sample_text_large',
					'title'       => 'Sample Text Large',
					'type'        => 'text',
					'text_type'   => 'large',
					'description' => 'Please Enter Long Text ',
					),
				'sample_textarea' => array(
					'id'          => 'sample_textarea',
					'title'       => 'Sample Textarea',
					'type'        => 'textarea',
					'default'     => '',
					'description' => 'Please Enter Content ',
					),
				'sample_password' => array(
					'id'          => 'sample_password',
					'title'       => 'Sample Password',
					'type'        => 'password',
					'default'     => '',
					'description' => 'Please Enter Password',
					),
				'sample_email' => array(
					'id'          => 'sample_email',
					'title'       => 'Sample Email',
					'type'        => 'email',
					'description' => 'Please Enter Email Address',
					),
				'sample_url' => array(
					'id'          => 'sample_url',
					'title'       => 'Sample URL',
					'type'        => 'url',
					'description' => 'Please Enter URL Link',
					),
				'sample_number' => array(
					'id'          => 'sample_number',
					'title'       => 'Sample Number',
					'type'        => 'number',
					'description' => 'Please Enter Number',
					),
				'sample_numeric_slider' => array(
					'id'           => 'sample_numeric_slider',
					'title'        => 'Sample Numeric Slider',
					'type'         => 'numeric_slider',
					'default'      => '8',
					'min_max_step' => array( 0, 20, 2 ),
					),
				'sample_date' => array(
					'id'          => 'sample_date',
					'title'       => 'Sample Date Picker',
					'type'        => 'date',
					'description' => 'Please Select Date',
					),
				'sample_date_time' => array(
					'id'          => 'sample_date_time',
					'title'       => 'Sample Date Time Picker',
					'type'        => 'date_time',
					'description' => 'Please Select Date and Time',
					),
				'sample_time' => array(
					'id'          => 'sample_time',
					'title'       => 'Sample Time Picker',
					'type'        => 'time',
					'description' => 'Please Select Time',
					),
				'sample_cpt_checkbox' => array(
					'id'          => 'sample_cpt_checkbox',
					'title'       => 'Sample CPT checkbox',
					'type'        => 'cpt_checkbox',
					'description' => 'Please Choose Post Types',
					),
				'sample_color' => array(
					'id'          => 'sample_color',
					'title'       => 'Sample Color picker',
					'type'        => 'color',
					'description' => 'Please Pick a Color',
					),
				'sample_upload' => array(
					'id'          => 'sample_upload',
					'title'       => 'Sample Upload',
					'type'        => 'upload',
					'description' => 'Please Upload File',
					),
				'sample_onoff' => array(
					'id'          => 'sample_onoff',
					'title'       => 'Sample On Off',
					'type'        => 'on_off',
					'default'     => 'ON',
					'description' => 'Please Select Status',
					),
				'sample_switch' => array(
					'id'          => 'sample_switch',
					'title'       => 'Sample Switch',
					'type'        => 'switch',
					'choices_on'  => array('enable'=>'Enable'),
					'choices_off' => array('disable'=>'Disable'),
					'default'     => 'disable',
					'description' => 'Please Select Status',

					),
				'sample_radio' => array(
					'id'          => 'sample_radio',
					'title'       => 'Sample Radio',
					'type'        => 'radio',
					'default'     => 'f',
					'description' => 'Please Select Gender',
					'choices'  => array(
						'm' => 'Male',
						'f' => 'Female',
						),
					),
				'sample_radio_image' => array(
					'id'          => 'sample_radio_image',
					'title'       => 'Sample Radio Image',
					'type'        => 'radio_image',
					'default'     => 'layout-2',
					'description' => 'Please Select Layout',
					'choices'  => array(
						'layout-1' => plugins_url('assets/images/layout-1.png', __FILE__),
						'layout-2' => plugins_url('assets/images/layout-2.png', __FILE__),
						),
					),
				'sample_checkbox' => array(
					'id'          => 'sample_checkbox',
					'title'       => 'Sample Checkbox',
					'type'        => 'checkbox',
					'description' => 'Please Select Interests',
					'choices'  => array(
						'movies' => 'Movies',
						'tv'     => 'TV',
						'sports' => 'Sports',
						),
					),
				'sample_select' => array(
					'id'          => 'sample_select',
					'title'       => 'Sample Select',
					'type'        => 'select',
					'allow_null'  => true,
					'description' => 'Please Select Interest',
					'choices'  => array(
						'movies' => 'Movies',
						'tv'     => 'TV',
						'sports' => 'Sports',
						),
					),
				'sample_sidebar_select' => array(
					'id'          => 'sample_sidebar_select',
					'title'       => 'Sample Sidebar Select',
					'type'        => 'sidebar_select',
					'allow_null'  => true,
					'description' => 'Please Select Sidebar',
					),
				'sample_nav_menu_select' => array(
					'id'          => 'sample_nav_menu_select',
					'title'       => 'Sample Nav Menu Select',
					'type'        => 'nav_menu_select',
					'allow_null'  => true,
					'description' => 'Please Select Nav Menu',
					),
				'sample_user_role_select' => array(
					'id'          => 'sample_user_role_select',
					'title'       => 'Sample Role Select',
					'type'        => 'user_role_select',
					'description' => 'Please Select User Role',
					),
				'sample_user_role_checkbox' => array(
					'id'          => 'sample_user_role_checkbox',
					'title'       => 'Sample Role Checkbox',
					'type'        => 'user_role_checkbox',
					'description' => 'Please Choose User Role',
					),
				'sample_taxonomy_select' => array(
					'id'          => 'sample_taxonomy_select',
					'title'       => 'Sample Taxonomy Select',
					'type'        => 'custom_taxonomy_select',
					'taxonomy'    => 'category',
					'description' => 'Please Select Category',
					),
				'sample_taxonomy_checkbox' => array(
					'id'          => 'sample_taxonomy_checkbox',
					'title'       => 'Sample Taxonomy Checkbox',
					'type'        => 'custom_taxonomy_checkbox',
					'taxonomy'    => 'category',
					'description' => 'Please Choose Category',
					),
				'sample_post_type_select' => array(
					'id'          => 'sample_post_type_select',
					'title'       => 'Sample Post Type Select',
					'type'        => 'custom_post_type_select',
					'post_type'   => 'page',
					'description' => 'Please Select Page',
					),
				'sample_post_type_checkbox' => array(
					'id'          => 'sample_post_type_checkbox',
					'title'       => 'Sample Post Type Checkbox',
					'type'        => 'custom_post_type_checkbox',
					'post_type'   => 'page',
					'description' => 'Please Choose Page',
					),
				'sample_wysiwyg' => array(
					'id'          => 'sample_wysiwyg',
					'title'       => 'Sample Wysiwyg',
					'type'        => 'wysiwyg',
					'description' => 'Please Enter Content',
					),
				),

			),
		'header' => array(
			'id'    => 'header',
			'title' => 'Header',
			'sub_heading' => 'Header sub heading here',
			'fields' => array(
				'header_title' => array(
					'id'          => 'header_title',
					'title'       => 'Header Title',
					'type'        => 'text',
					'default'     => 'This is default title',
					'description' => 'Please Enter Header Title',
					),
				'header_intro' => array(
					'id'          => 'header_intro',
					'title'       => 'Header Intro',
					'type'        => 'textarea',
					'default'     => 'This is default intro',
					'description' => 'Please Enter Header Intro',
					),
				),
			),

		),
	// tab end

	);

$npf_demo_object = new NPF_Options($my_settings);

$my_settings_another = array(
	'page_title'  => 'Another NPF Demo',
	'menu_title'  => 'Another NPF Demo',
	'capability'  => 'administrator',
	'menu_slug'   => 'another-npf-demo-page',
	'option_slug' => 'another_npf_demo_option',

	// tab start
	'tabs' => array(

		'general' => array(
			'id'    => 'general',
			'title' => 'General',
			'sub_heading' => 'General sub heading here',
			'fields' => array(
				'sample_text' => array(
					'id'          => 'sample_text',
					'title'       => 'Another Sample Text',
					'type'        => 'text',
					'default'     => '',
					),

				'sample_wysiwyg' => array(
					'id'          => 'sample_wysiwyg',
					'title'       => 'Another Sample Wysiwyg',
					'type'        => 'wysiwyg',
					),
				),

			),
		'header' => array(
			'id'    => 'header',
			'title' => 'Header',
			'sub_heading' => 'Header sub heading here',
			'fields' => array(
				'header_title' => array(
					'id'          => 'header_title',
					'title'       => 'Header Title',
					'type'        => 'text',
					'description' => 'Please Enter Header Title',
					),
				'header_intro' => array(
					'id'          => 'header_intro',
					'title'       => 'Header Intro',
					'type'        => 'textarea',
					'description' => 'Please Enter Header Intro',
					),
				),
			),

		),
	// tab end

	);

$npf_demo_object_another = new NPF_Options($my_settings_another);
