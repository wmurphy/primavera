<?php

/**
 * @file
 * template.php
 */
function primavera_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
var_dump($variables);
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}