<?php

/**
 * @file
 * template.php
 */

function primavera_preprocess_image_style(&$vars) {
        $vars['attributes']['class'][] = 'img-responsive'; // can be 'img-rounded', 'img-circle', or 'img-thumbnail'
}

function primavera_date_display_single($variables){
	//var_dump($variables['dates']['value']['db']['datetime']);
	$timestamp = strtotime($variables['dates']['value']['db']['datetime']);
	//echo $timestamp;
	return date ('j', $timestamp) . " de " . date ('F', $timestamp);

}

function primavera_field__field_fecha_concierto__bar($variables) {

	return $variables["items"][0]["#markup"];
}