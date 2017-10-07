<?php
/**
 * @file
 * Template for Panopoly b2b-sponsor-feature layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="b2b-sponsor-feature">

  <div class="b2b-sponsor-feature-column1">
    <?php print $content['column1']; ?>
  </div>
  
  <div class="b2b-sponsor-feature-column2">
    <?php print $content['column2']; ?>
  </div>
  
</div>
