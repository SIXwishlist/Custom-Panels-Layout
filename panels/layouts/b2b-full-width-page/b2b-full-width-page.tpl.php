<?php
/**
 * @file
 * Template for B2B Premium content
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="node node-full-width-page node-full clearfix">

<div class="hero-panel">
  <div class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-brand row">
      <div class="large-12 columns">
        <?php print $content['hero-info']; ?>
        <div class="download">
          <?php print $content['hero-download']; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="featured-info">
  <div class="row">
    <div class="medium-10 medium-centered large-8 large-uncentered columns">
      <?php print $content['resource-info']; ?>
    </div>
    <div class="medium-12 medium-centered large-4 large-uncentered columns">
      <?php print $content['sidebar']; ?>
    </div>
  </div>
</section>

<?php print $content['main']; ?>

<?php if ($content['cta']): ?>
  <div class="premium-content-cta">
    <div class="row">
      <div class="small-12 columns">
        <?php print $content['cta']; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
