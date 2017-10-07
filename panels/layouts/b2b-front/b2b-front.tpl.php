<?php
/**
 * @file
 * Template for b2b-front.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */

$sidebar = (bool)$content['panel-1-2'];

if (empty($class)) {
  $class = '';
}
$class .= $sidebar ? 'b2b-front-sidebar' : 'b2b-front-no-sidebar';
?>

<?php if ($content['topad']): ?>
  <div class="not-yet-registered">
    <div class="row">
      <div class="large-12 columns question">
        <?php print $content['topad']; ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="b2b-front panel-display clearfix<?php if (!empty($class)) print " $class"; ?>"<?php if (!empty($css_id)) { print " id=\"$css_id\""; } ?>>

  <?php if ($content['hero']): ?>
    <div class="b2b-front-hero hero-panel panel-panel">
      <?php print $content['hero']; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['top']): ?>
    <div class="b2b-front-top panel-panel">
      <div class="row">
        <?php print $content['top']; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['sponsor-feature']): ?>
    <div class="sponsor-feature">
      <div class="row">
        <div class="large-12 columns">
          <?php print $content['sponsor-feature'];?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (ch12i5b_row_has_content($content, '1')): ?>
    <div class="b2b-front-row-1 row">
      <?php if ($sidebar): ?>
        <div class="b2b-front-panel-1-1 panel-panel medium-8 columns">
          <?php print $content['panel-1-1']; ?>
          <?php if ($content['sponsor']): ?>
            <div class="sponsor">
              <?php print $content['sponsor'];?>
            </div>
          <?php endif; ?>
        </div>
        <div class="b2b-front-panel-1-2 panel-panel medium-4 columns">
          <div class="lightgrey">
          <?php print $content['panel-1-2']; ?>
          </div>
        </div>
      <?php else: ?>
        <div class="b2b-front-panel-1-1 panel-panel small-12 columns">
          <?php print $content['panel-1-1']; ?>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if (ch12i5b_row_has_content($content, '2')): ?>
    <?php /* The classes .training-holder and .upcoming_sessions used as as a
             quick fix to get training block styled. Really _training.scss needs
             to be reworked. */ ?>
    <div class="b2b-front-row-2 row training-holder">
      <div class="b2b-front-panel-2-1 panel-panel small-12 medium-12 large-12 columns upcoming_sessions">
        <?php print $content['panel-2-1']; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (ch12i5b_row_has_content($content, '3')): ?>
    <div class="b2b-front-row-3 row">
      <div class="b2b-front-panel-3-1 panel-panel medium-4 large-4 columns">
        <?php print $content['panel-3-1']; ?>
      </div>
      <div class="b2b-front-panel-3-2 panel-panel medium-4 large-4 columns">
        <?php print $content['panel-3-2']; ?>
      </div>
      <div class="b2b-front-panel-3-3 panel-panel medium-4 large-4 columns">
        <?php print $content['panel-3-3']; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (ch12i5b_row_has_content($content, '4')): ?>
  <div class="b2b-front-row-4 row">
    <div class="b2b-front-panel-4-1 panel-panel medium-4 large-4 columns">
      <?php print $content['panel-4-1']; ?>
    </div>
    <div class="b2b-front-panel-4-2 panel-panel medium-4 large-4 columns">
      <?php print $content['panel-4-2']; ?>
    </div>
    <div class="b2b-front-panel-4-3 panel-panel medium-4 large-4 columns">
      <?php print $content['panel-4-3']; ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if (ch12i5b_row_has_content($content, '5')): ?>
  <div class="b2b-front-row-5 row">
    <div class="b2b-front-panel-5-1 panel-panel small-12 medium-12 large-12 columns">
      <?php print $content['panel-5-1']; ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($content['bottom']): ?>
    <div class="b2b-front-bottom panel-panel">
      <?php print $content['bottom']; ?>
    </div>
  <?php endif; ?>

</div>
