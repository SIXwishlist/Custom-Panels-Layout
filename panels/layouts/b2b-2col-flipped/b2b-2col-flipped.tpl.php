<?php
/**
 * @file
 * Template for Panopoly B2B Two Column Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="container">
  <div class="row">
    <div class="small-12 medium-3 large-3 columns">
      <?php print $content['sidebar']; ?>
    </div>
    <div class="small-12 medium-8 large-9 pull-1 columns feature-article">
      <?php print $content['contentmain']; ?>
      <?php print $content['related-content']; ?>
      <?php print $content['comments']; ?>
      </div>
    </div>
</div><!-- /.b2b-2col-flipped -->
