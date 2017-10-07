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

<div class="panel-display b2b-leaders-landing clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php print $content['header']; ?>

  <div class="large-header">
    <div class="row">
      <div class="large-12 columns dark">
        <div class="boxes">
          <div class="box"><?php print $content['column1']; ?></div>
          <div class="box">
            <?php print $content['column2']; ?>
            <?php print $content['column3']; ?>
            <?php print $content['column4']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">

    <div class="large-12 columns">
      <?php print $content['middle']; ?>
    </div>

  </div>

  <!-- Video -->
<?php if ($content['middle2']): ?>
<div class="b2b-leaders-landing-container b2b-leaders-landing-middle2 panel-panel">
  <div class="b2b-leaders-landing-container video-panel">
    <div class="row">
      <div class="large-12 columns">
        <div class="panel-panel-inner">
          <?php print $content['middle2']; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>



<div class="row">

  <div class="large-12 columns">

    <div class="b2b-leaders-landing-container b2b-leaders-landing-middle3 panel-panel">
      <div class="panel-panel-inner">
        <?php print $content['middle3']; ?>
      </div>
    </div>

    <div class="b2b-leaders-landing-container b2b-leaders-landing-middle4 panel-panel">
      <div class="panel-panel-inner">
        <?php print $content['middle4']; ?>
      </div>
    </div>

    <div class="b2b-leaders-landing-container b2b-leaders-landing-middle1 panel-panel">
      <div class="panel-panel-inner">
        <?php print $content['middle1']; ?>
      </div>
    </div>

  </div>
<?php if ($content['middle5']): ?>
  <div class="row logos">

    <div class="large-12 columns">

      <!-- logos -->
      <div class="b2b-leaders-landing-container b2b-leaders-landing-middle5 panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['middle5']; ?>
        </div>
      </div>

    </div>

  </div>
<?php endif; ?>
<?php if ($content['column4']): ?>
  <div class="row">

    <div class="large-12 columns">

      <div class="b2b-leaders-landing-container join-panel panel-panel">
        <div class="panel-panel-inner">
          <?php print $content['column4']; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php if ($content['footer']): ?>
  <div class="paragraphs-items paragraphs-items-field-content paragraphs-items-field-content-full paragraphs-items-full">
    <div class="row">
      <div class="large-12 columns">
        <?php print $content['footer']; ?>
      </div>
    </div>
  </div>
<?php endif; ?>

</div><!-- /.b2b-leaders-landing -->
<?php if ($content['logos']): ?>
  <div class="landing-logos panel-panel">
    <div class="row">
      <div class="large-12 columns">
        <?php print $content['logos']; ?>
      </div>
    </div>
  </div>
<?php endif; ?> <!-- additional region for Networking events sponsors -->
