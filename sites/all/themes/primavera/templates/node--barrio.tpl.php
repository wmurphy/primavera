<?php


$field_fachada_bar_realpath = drupal_realpath($content['field_fachada_bar'][0]['#item']['uri']);
$field_fachada_bar_path = str_replace($_SERVER['DOCUMENT_ROOT'].'/','',$field_fachada_bar_realpath);
$field_fachada_barrio = file_create_url($content['field_destacada']['#object']->field_destacada['und'][0]['uri']);






?><div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <div class="content"<?php print $content_attributes; ?>>
<?php

//var_dump($content['field_fachada_bar']);
//print render($content['field_fachada_bar']);

//hide($content['field_fachada_bar'][0]);

//var_dump($content['field_fachada_bar'][0]);

//echo image_style_url('original', $content['field_fachada_bar'][0]['#item']['uri']);

//echo $path;
//echo drupal_realpath($content['field_fachada_bar'][0]['#item']['uri']);
//var_dump($content['field_fachada_bar'][0]['#item']['uri']);
//print render($content['field_fachada_bar'][0];
?>
<div class="row">
  <div class="col-sm-12"><h1 itemprop="name"><span><?php print $title; ?></span></h1></div>
  <div class="col-sm-12"><img src="<?php echo $field_fachada_barrio; ?>" class="img-responsive barrio"></div>
</div>
<div class="row">
<div class="col-sm-12"><?php print $body[0]['value']; ?></div>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content);
    ?>
  </div>
</div></div>

</div>
