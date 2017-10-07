<?php
/**
 * @file
 * Template for b2b-awards-landing.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="keynote-awards-landing panel-display clearfix<?php if (!empty($class)) print " $class"; ?>"<?php if (!empty($css_id)) { print " id=\"$css_id\""; } ?>>

    <div class="event-sticky-title">
      <div class="row">
        <div class="large-12 columns">
          <?php print $content['sticky']; ?>
        </div>
      </div>
    </div>

    <div class="landing-hero panel-panel">
      <?php print $content['hero']; ?>
      <div class="hero-wrap">
        <div class="row">
          <div class="large-12 columns hero-content">
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

    <a name="more"></a>

    <div class="b2b-awards-landing-row-1 row">
      <div class="b2b-awards-landing-panel-1-1 large-3 columns">
          <?php print $content['panel-1-1']; ?>
        <?php if ($content['panel-1-1-ticketing']): ?>
          <div class="ticketing-info"><?php print $content['panel-1-1-ticketing']; ?></div>
        <?php endif; ?>
        </div>


    <div class="b2b-awards-landing-panel-1-2 large-5 columns">
          <?php print $content['panel-1-2']; ?>
          <div class="gallery">
            <?php print $content['panel-2-1']; ?>
          </div>
        </div>

    <div class="b2b-awards-landing-panel-1-3 large-4 columns">
          <div class="video"><?php print $content['panel-1-3-video']; ?></div>
        <?php if ($content['panel-1-3-dates']): ?>
          <div class="dates"><?php print $content['panel-1-3-dates']; ?></div>
        <?php endif; ?>
          <div class="misc"><?php print $content['panel-1-3-misc']; ?></div>
        </div>
    </div>



  <div class="b2b-awards-landing-row-3 row testimonials">
    <div class="b2b-awards-landing-panel-3-1 panel-panel large-12 columns">
      <?php print $content['panel-3-1']; ?>
    </div>
  </div>

  <?php if ($content['speakers-intro']): ?>
    <div class="speakers-intro row panel-panel">
      <div class="large-12 columns">
        <h3><?php print $content['speakers-intro']; ?></h3>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['speakers']): ?>
    <div class="speakers row panel-panel">
      <div class="large-12 columns">
        <?php print $content['speakers']; ?>
      </div>
    </div>
  <?php endif; ?>

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
