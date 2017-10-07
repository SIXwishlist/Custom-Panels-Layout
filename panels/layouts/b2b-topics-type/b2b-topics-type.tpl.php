<?php
/**
 * @file
 * Template for b2b-topics-type.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="b2b-topics-type panel-display clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="b2b-topics-type-row-top row">
    <div class="b2b-topics-type-top panel-panel large-12 columns">
      <?php print $content['top']; ?>
    </div>
  </div>

  <div class="b2b-topics-type-row-1 row">
    <div class="b2b-topics-type-panel-1-1 panel-panel large-8 columns">
      <?php print $content['panel-1-1']; ?>
    </div>
    <div class="b2b-topics-type-panel-1-2 panel-panel large-4 columns">
      <?php print $content['panel-1-2']; ?>
    </div>
  </div>

  <div class="b2b-topics-type-row-2 row">
    <div class="b2b-topics-type-panel-2-1 panel-panel large-6 columns">
      <?php print $content['panel-2-1']; ?>
    </div>
    <div class="b2b-topics-type-panel-2-2 panel-panel large-6 columns">
      <?php print $content['panel-2-2']; ?>
    </div>
  </div>

  <div class="b2b-topics-type-row-3 row">
    <div class="b2b-topics-type-panel-3-1 panel-panel large-6 columns">
      <?php print $content['panel-3-1']; ?>
    </div>
    <div class="b2b-topics-type-panel-3-2 panel-panel large-6 columns">
      <?php print $content['panel-3-2']; ?>
    </div>
  </div>

  <div class="b2b-topics-type-row-bottom row">
    <div class="b2b-topics-type-bottom panel-panel large-12 columns">
      <?php print $content['bottom']; ?>
    </div>
  </div>

</div>
