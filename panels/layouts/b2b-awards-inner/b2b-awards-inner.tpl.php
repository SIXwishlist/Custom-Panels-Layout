<?php
/**
 * @file
 * Template for b2b-awards-inner.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="keynote-awards-inner panel-display clearfix<?php if (!empty($class)) print " $class"; ?>"<?php if (!empty($css_id)) { print " id=\"$css_id\""; } ?>>

    <div class="event-sticky-title">
      <div class="row">
        <div class="large-12 columns">
          <?php print $content['sticky']; ?>
        </div>
      </div>
    </div>

    <div class="inner-hero panel-panel">
      <?php print $content['hero']; ?>
      <div class="hero-wrap">
        <div class="row">
          <div class="large-12 columns">
            <div class="hero-strapline">
              <?php print $content['hero-strapline']; ?>
            </div>
            <div class="hero-buttons">
              <?php print $content['hero-buttons']; ?>
            </div> 
          </div>
        </div>
      </div>
    </div>

  <div class="row">
    <div class="large-3 columns">
      <?php print $content['sidebar']; ?>
    </div>
    <div class="large-9 columns">
      <?php print $content['contentmain']; ?>
    </div>
  </div>

  <?php if ($content['logos']): ?>
    <div class="landing-logos panel-panel">
      <div class="row">
        <div class="large-12 columns">
          <?php print $content['logos']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

</div>

