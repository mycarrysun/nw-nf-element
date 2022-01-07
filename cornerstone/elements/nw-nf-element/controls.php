<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 1/1/2017
 * Time: 9:22 PM
 */
$form_choices = [];
$forms = Ninja_Forms()->form()->get_forms();
$form_choices[] = ['value' => '', 'label' => 'Select a Form'];
if( isset($forms) && count($forms) > 0 ) {

	foreach($forms as $form){
		$form_choices[] = [
			'value' => $form->get_id(),
			'label' => $form->get_setting('title')
		];
	}
}

return [
	'nf_id' => [
		'type' => 'select',
	    'ui' => [
	    	'title' => 'Form'
	    ],
	    'options' => [
	    	'choices' => $form_choices
	    ]
	],
];