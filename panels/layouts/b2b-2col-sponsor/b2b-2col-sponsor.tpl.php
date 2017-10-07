<?php
/**
 * @file
 * Template for Panopoly B2B 2 Columns
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="teal-box">
  <div class="row">
    <?php print $content['breadcrumbs-full']; ?>
  </div>
</div>

<?php if ($content['sponsor']): ?>
  <div class="sponsor-feature">
    <div class="row">
      <div class="large-12 columns">
        <?php print $content['sponsor'];?>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="panel-display b2b-2col clearfix row <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="small-12 medium-8 large-8 columns b2bblog">
        <?php print $content['contentmain']; ?>
        <?php print $content['related-content']; ?>

        <?php if ($content['sponsor-fat']): ?>
          <div class="sponsor">
            <?php print $content['sponsor-fat'];?>
          </div>
        <?php endif; ?>

        <?php print $content['comments']; ?>

      </div>
  <div class="small-12 medium-4 large-4 columns sd-side">
    <div class="lightgrey clearfix">
      <?php print $content['sidebar']; ?>
    </div>
  </div>
</div>
