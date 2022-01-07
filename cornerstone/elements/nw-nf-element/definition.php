<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 1/1/2017
 * Time: 9:22 PM
 */
if(!class_exists('NW_Ninja_Form')){
	class NW_Ninja_Form{

		public $shortcode_name = 'nw_ninja_form';

		public function ui(){
			return [
				'title' => 'Ninja Form'
			];
		}

		public function update_build_shortcode_atts( $atts ){

			return $atts;
		}

	}
}
