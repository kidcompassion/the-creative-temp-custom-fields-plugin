<?php
/**
 * Plugin Name: The Creative Temp Custom Fields.
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Custom Fields for The Creative Temp theme. Built on Automattic's Custom Metadata Manager
 * Version: The plugin's version number. Example: 1.0.0
 * Author: Sally Poulsen
 * Author URI: http://URI_Of_The_Plugin_Author
 * Text Domain: Optional. Plugin's text domain for localization. Example: mytextdomain
 * Domain Path: Optional. Plugin's relative directory path to .mo files. Example: /locale/
 * Network: Optional. Whether the plugin can only be activated network wide. Example: true
 * License: A short license name. Example: GPL2
 */

defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );

add_action( 'custom_metadata_manager_init_metadata', 'the_creative_temp_init_custom_fields' );

function the_creative_temp_init_custom_fields($post) {

	// adds a new group to the home page
	x_add_metadata_group( 'x_home_page_fields', 'page', array(
		'label' => 'Custom Home Page Fields'
	) );
	// adds a fields to this meta box
	x_add_metadata_field('x_Headline1', 'page', array(
		'group' => 'x_home_page_fields', // the group name
		'description' => 'Enter text for the top headline in the subheader.', // description for the field
		'label' => 'Header #1', // field label
		'display_column' => true // show this field in the column listings
	));

	x_add_metadata_field('x_Headline2', 'page', array(
		'group' => 'x_home_page_fields', // the group name
		'description' => 'Enter text for the secondary headline in the subheader.', // description for the field
		'label' => 'Header #2', // field label
		'display_column' => true // show this field in the column listings
	));

// adds a link group to the home page
	x_add_metadata_group( 'x_home_page_link', 'page', array(
		'label' => 'Custom Home Page CTA Button'
	) );
	// adds a fields to this meta box
	x_add_metadata_field('x_subhead_link_cta', 'page', array(
		'group' => 'x_home_page_link', // the group name
		'description' => 'Enter text for main button.', // description for the field
		'label' => 'Button CTA', // field label
		'display_column' => true // show this field in the column listings
	));

	x_add_metadata_field('x_subhead_link_url', 'page', array(
		'group' => 'x_home_page_link', // the group name
		'description' => 'Enter URL for main button.', // description for the field
		'label' => 'Button URL', // field label
		'display_column' => true // show this field in the column listings
	));

// adds a link group to the home page
	x_add_metadata_group( 'x_home_page_secondary_content', 'page', array(
		'label' => 'Custom Home Page CTA Button'
	) );
	// adds a fields to this meta box
	x_add_metadata_field('x_secondary_content_headline', 'page', array(
		'group' => 'x_home_page_secondary_content', // the group name
		'description' => 'Enter text for secondary content headline.', // description for the field
		'label' => 'Secondary Content Headline', // field label
		'display_column' => true // show this field in the column listings
	));

	// adds a wysiwyg (full editor) field to the 2nd group
	x_add_metadata_field('x_secondary_content_body', array('page', 'user'), array(
		'group' => 'x_home_page_secondary_content',
		'field_type' => 'wysiwyg',
		'label' => 'Enter secondary page content',
	));

}


function the_creative_temp_print_home_page_info(){
	$custom_meta = get_post_meta(get_the_ID());
		//echo '<pre>';
		//print_r($custom_meta);
		//echo '</pre>';
		return $custom_meta;
}
