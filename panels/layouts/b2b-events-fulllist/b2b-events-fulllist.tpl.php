<?php
/**
 * @file
 * Template for Panopoly Sutro Double.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display b2b-events-overview clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  
  <div class="hero-panel">
    <div class="hero-section">
      <div class="hero-overlay"></div>
      <div class="hero-brand">
        <?php print $content['header']; ?>
      </div>
    </div>
  </div>
  
  <div class="row keynote actual switchable">
    <div class="large-12 medium-12 small-12 columns">
    <h2><?php print t('Keynote Events'); ?></h2>
    <?php print $content['keynote_main']; ?>
    </div>
  </div>
  
  <div class="row keynote actual switchable">
    <div class="large-12 medium-12 small-12 columns b2b_seperator">
    
    </div>
  </div>
  
  <div class="row keynote actual switchable webinars_short">
    <div class="large-12 medium-12 small-12 columns">
    <h2><?php print t('Webinars'); ?></h2>
      <?php print $content['webinars_short']; ?>
    </div>
  </div>
  
  <div class="row keynote actual switchable" >
    <div class="large-12 medium-12 small-12 columns b2b_seperator">
    
    </div>
  </div>
  
  <!-- Dynamic bits -->
  
  <div class="row webinars actual switchable" style="display:none;">
    <div class="large-12 medium-12 small-12 columns">
  <?php
  print $content['webinar_full'];
  ?>
    </div>
  </div>
  
  <div class="b2b-event-container b2b-event-footer clearfix panel-panel">
    <div class="b2b-event-container-inner b2b-event-footer-inner panel-panel-inner">
      <?php print $content['footer']; ?>
    </div>
  </div>
  
  <div class="grey_wrap">
    <div class="row testimonials">
        <?php print $content['testimonials']; ?>
    </div>
  </div>
  
</div><!-- /.b2b-event -->
