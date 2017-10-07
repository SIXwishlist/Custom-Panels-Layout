<?php
/**
 * @file
 * Template for b2b-basic page variant.
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

    <div class="b2b-front-row-1 row">
      <?php if ($sidebar): ?>
        <div class="b2b-front-panel-1-1 panel-panel medium-8 columns">

          <?php print $content['panel-1-1']; ?>
        </div>
        <div class="b2b-front-panel-1-2 panel-panel medium-4 columns">
          <div class="lightgrey">

            <div class="member_price">
              <span><?php print b2b_api_commerce_get_price('introcert2016',15); ?></span>
              for premium members          
              <div><a href="/join">Not a member ?</a></div>
            </div>

            <div class="non_member_price">
              <span><?php print b2b_api_commerce_get_price('introcert2016'); ?></span>
              for non-members
              <div class="vat">Please note prices are ex-VAT</div>
            </div>

          <?php print $content['panel-1-2']; ?>
          </div>
        </div>
      <?php else: ?>
        <div class="b2b-front-panel-1-1 panel-panel small-12 columns">
          <?php print $content['panel-1-1']; ?>
        </div>
      <?php endif; ?>
    </div>

</div>
