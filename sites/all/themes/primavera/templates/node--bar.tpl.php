<?php

  hide($content['field_fachada_bar']);
  hide($content['locations']);


  hide($content['field_descripcion_concierto']);
  hide($content['field_fecha_concierto']);
  hide($content['field_grupo']);

  hide($content['field_descripcion_bar']);
  hide($content['field_barrio']);
  hide($content['field_grupo']);
  hide($content['field_banda']);

?><div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <div class="content"<?php print $content_attributes; ?>>
<?php

//var_dump($content['field_fachada_bar']);
//print render($content['field_fachada_bar']);

//hide($content['field_fachada_bar'][0]);

//var_dump($content['field_fachada_bar'][0]);

//echo image_style_url('original', $content['field_fachada_bar'][0]['#item']['uri']);
$field_fachada_bar_realpath = drupal_realpath($content['field_fachada_bar'][0]['#item']['uri']);
$field_fachada_bar_path = str_replace($_SERVER['DOCUMENT_ROOT'].'/','',$field_fachada_bar_realpath);

$field_fachada_bar = file_create_url($content['field_fachada_bar'][0]['#item']['uri']);
//echo $path;
//echo drupal_realpath($content['field_fachada_bar'][0]['#item']['uri']);
//var_dump($content['field_fachada_bar'][0]['#item']['uri']);
//print render($content['field_fachada_bar'][0];
?>
<div class="row">
<div class="col-md-5"><img src="<?php echo $field_fachada_bar ?>" class="img-responsive fachada"></div>
<div class="col-md-7">
<?php




print "<h1>" . $title . "</h1>";
print render($content['locations']);

print render($content['field_descripcion_bar']);

?>
</div>
<div class="col-sm-12"></div>

<div class="col-md-6"></div>
<div class="col-md-6"><?php 

$field_banda = file_create_url($content['field_banda'][0]['#item']['uri']);

 ?>

<img src="<?php echo $field_banda ?>" class="img-responsive fachada">
</div>

<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>
</div></div>

</div>