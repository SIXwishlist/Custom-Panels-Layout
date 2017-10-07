<?php
/**
 * @file
 * Template for Panopoly Sutro Double.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display b2b-event clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row">
  <div class="small-12 medium-12 large-12 centered columns">
      <?php print $content['header']; ?>
  </div>
</div>
<div class="row">
  <div class="small-12 medium-6 large-6 columns">
        <?php print $content['column1']; ?>
  </div>
    <div class="small-12 medium-6 large-6 columns">
        <?php print $content['column2']; ?>
    </div>
</div>

<div class="row"> <!-- newsletter -->
<div class="small-12 medium-12 large-12 columns">
        <?php print $content['newsletter']; ?>
  </div>
</div>
  
  <div class="b2b-event-container b2b-event-middle clearfix panel-panel">
    <div class="b2b-event-container-inner b2b-event-middle-inner panel-panel-inner">
      <?php print $content['middle']; ?>
    </div>
  </div>
  
  <div class="b2b-event-container b2b-event-column-content b2b-event-second-column-content clearfix">
    <div class="b2b-event-column-content-region b2b-event-column1 b2b-event-column panel-panel">
      <div class="b2b-event-column-content-region-inner b2b-event-column1-inner b2b-event-column-inner panel-panel-inner">
        <?php print $content['secondcolumn1']; ?>
      </div>
    </div>
    <div class="b2b-event-column-content-region b2b-event-column2 b2b-event-column panel-panel">
      <div class="b2b-event-column-content-region-inner b2b-event-column2-inner b2b-event-column-inner panel-panel-inner">
        <?php print $content['secondcolumn2']; ?>
      </div>
    </div>
  </div>
  
  <div class="b2b-event-container b2b-event-footer clearfix panel-panel">
    <div class="b2b-event-container-inner b2b-event-footer-inner panel-panel-inner">
      <?php print $content['footer']; ?>
    </div>
  </div>
  
</div><!-- /.b2b-event -->
