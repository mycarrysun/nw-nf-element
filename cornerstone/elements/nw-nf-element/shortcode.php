<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 1/1/2017
 * Time: 9:22 PM
 */
?>
<div <?= cs_atts( [
	'class' => isset( $class ) ? $class . ' nw-form' : '',
	'style' => isset( $style ) ? $style : '',
	'id'    => isset( $id ) ? $id : '',
] ); ?>>
	<?= do_shortcode( "[ninja_form id={$nf_id}]" ); ?>
</div>