<?php
/*
Plugin Name: Ninja Form Cornerstone Element
Plugin URI: http://nextwebtoday.com
Description: Cornerstone element for Ninja Forms.
Version: 1.0
Author: Mike Harrison
Author URI: http://github.com/mycarrysun
License: GPLv2
*/

define('NW_NF_PATH', plugin_dir_path(__FILE__));
define('NW_NF_URL', plugin_dir_url(__FILE__));

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

//exit if cornerstone and ninja forms are not active
if ( !is_plugin_active( 'cornerstone/cornerstone.php' ) || !is_plugin_active( 'ninja-forms/ninja-forms.php' ) )
	return;

add_action( 'cornerstone_register_elements', 'load_cornerstone_element_nw_ninja_form' );
function load_cornerstone_element_nw_ninja_form(){
	cornerstone_register_element('NW_Ninja_Form', 'ninja-form', NW_NF_PATH . 'cornerstone/elements/nw-nf-element');
}

add_action( 'wp_enqueue_scripts', 'nw_nf_enqueue_scripts' );
function nw_nf_enqueue_scripts(){

	wp_enqueue_style(
		'nw-nf-el',
		NW_NF_URL . 'styles/css/styles.css'
	);

	wp_enqueue_script(
		'nw-nf-el',
		NW_NF_URL . 'js/nw-nf-element.js',
		['jquery']
	);

}