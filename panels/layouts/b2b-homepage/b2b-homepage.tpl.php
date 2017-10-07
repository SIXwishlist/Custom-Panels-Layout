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

<div class="b2b-homepage panel-display clearfix<?php if (!empty($class)) print " $class"; ?>"<?php if (!empty($css_id)) { print " id=\"$css_id\""; } ?>>
  <?php if ($content['hero']): ?>
    <div class="b2b-front-hero hero-panel panel-panel">
      <?php print $content['hero']; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['top']): ?>
    <div class="b2b-front-top panel-panel">
      <?php print $content['top']; ?>
    </div>
  <?php endif; ?>

    <div class="b2b-homepage-row-1 row">
      <div class="b2b-front-panel-2-1 panel-panel small-12 medium-12 large-12 columns">
          <?php print $content['panel-1-1']; ?>
        </div>
    </div>

    <div class="homepage-panel-links">
    <div class="b2b-homepage-row-2 row">
      <div class="b2b-front-panel-2-1 panel-panel small-12 medium-12 large-12 columns">
        <h2><?php print t('Solutions to your marketing challenges'); ?></h2>

        <div class="dropdown-wrapper">
        <div class="dropdown-wrapper-inner">
          <div class="dropdown-label"><?php print t("I'm looking for"); ?></div>
          <div class="dropdown-content">
            <div class="inner">
              <div class="inside-label"><?php print t("What's on your mind?"); ?></div>
              <?php print $content['panel-2-1']; ?>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    </div>

    <div class="b2b-homepage-row-3 row testimonials">
      <div class="b2b-homepage-panel-3-1 panel-panel small-12 medium-12 large-12 columns">
        <?php print $content['panel-3-1']; ?>
      </div>
    </div>

    <div class="b2b-homepage-row-4 row logos">
      <div class="b2b-homepage-panel-4-1 panel-panel small-12 medium-12 large-12 columns">
        <?php print $content['panel-4-1']; ?>
      </div>
    </div>


  <div class="b2b-front-row-5 row">
    <div class="b2b-front-panel-5-1 panel-panel small-12 medium-12 large-12 columns">
      <?php print $content['panel-5-1']; ?>
    </div>
  </div>

  <?php if ($content['bottom']): ?>
    <div class="b2b-front-bottom panel-panel">
      <?php print $content['bottom']; ?>
    </div>
  <?php endif; ?>

  <div class="not-yet-registered">
    <div class="row">
      <div class="large-12 columns question">
        <a class="button" href="/user/register"><?php print t('Sign up for free'); ?></a>
      </div>
    </div>
  </div>

</div>
