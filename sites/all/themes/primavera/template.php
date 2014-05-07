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

$mes=date("F", $timestamp);
if ($mes=="January") $mes="Enero";
if ($mes=="February") $mes="Febrero";
if ($mes=="March") $mes="Marzo";
if ($mes=="April") $mes="Abril";
if ($mes=="May") $mes="Mayo";
if ($mes=="June") $mes="Junio";
if ($mes=="July") $mes="Julio";
if ($mes=="August") $mes="Agosto";
if ($mes=="September") $mes="Setiembre";
if ($mes=="October") $mes="Octubre";
if ($mes=="November") $mes="Noviembre";
if ($mes=="December") $mes="Diciembre";


	return date ('j', $timestamp) . " de " . $mes;

}

function primavera_field__field_fecha_concierto__bar($variables) {

	return $variables["items"][0]["#markup"];
}