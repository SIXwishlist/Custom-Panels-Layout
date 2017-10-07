<?php
/**
 * @file
 * Template for b2b-social layout.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="b2b-social clearfix">

  <div class="social-col-wrap">
    <?php print $content['column1']; ?>
  </div>
  
  <div class="social-col-wrap fivestar">
    <?php print $content['column2']; ?>
  </div>
  
</div>
