<?php
/**
 * @file
 * Template for b2b-full. Used for Events and other non-sidebar based layouts
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="b2b-full panel-display top clearfix">
  <div class="row">
    <div class="large-12 columns">
    	<?php print $content['top']; ?>
    </div>
  </div>
</div>


<div class="b2b-full panel-display clearfix">
  <div class="row">
    <div class="large-12 columns">
		  <?php print $content['contentmain']; ?>
		</div>
	</div>
</div>
