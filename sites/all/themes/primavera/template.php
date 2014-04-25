<?php

/**
 * @file
 * template.php
 */

function primavera_preprocess_image_style(&$vars) {
        $vars['attributes']['class'][] = 'img-responsive'; // can be 'img-rounded', 'img-circle', or 'img-thumbnail'
}