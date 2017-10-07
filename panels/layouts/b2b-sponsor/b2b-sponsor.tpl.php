<?php
/**
 * @file
 * Template for Panopoly b2b-sponsor layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="b2b-sponsor">

  <div class="b2b-sponsor-column1">
    <?php print $content['column1']; ?>
  </div>
  
  <div class="b2b-sponsor-column2">
    <?php print $content['column2']; ?>
  </div>
  
  <div class="b2b-sponsor-column3">
    <?php print $content['column3']; ?>
  </div>

</div>
