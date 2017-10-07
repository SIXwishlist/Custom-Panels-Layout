<?php
/**
 * @file
 * Template for Panopoly b2b-3col layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="b2b-3col panel-display clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

    <div class="b2b-3col-row-spotlight row">
      <div class="b2b-3col-topspotlight-left panel-panel medium-9 columns">
        <?php print $content['topspotlight-left']; ?>
      </div>
      <div class="b2b-3col-topspotlight-right panel-panel medium-3 columns">
        <?php print $content['topspotlight-right']; ?>
      </div>
    </div>

    <div class="b2b-3col-row-content row">
      <div class="b2b-3col-column1 panel-panel medium-2 columns">
        <?php print $content['column1']; ?>
      </div>
      <div class="b2b-3col-contentmain panel-panel medium-6 columns b2bblog">
        <?php print $content['contentmain']; ?>
        <?php print $content['related-content']; ?>
        <?php print $content['comments']; ?>
      </div>
      <div class="b2b-3col-column2 panel-panel medium-4 columns sd-side">
        <div class="lightgrey">
          <?php print $content['column2']; ?>
        </div>
      </div>
    </div>

</div>
