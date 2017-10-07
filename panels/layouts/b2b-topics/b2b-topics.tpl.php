<?php
/**
 * @file
 * Template for b2b-topics.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */

?>

<?php  global $user; ?>
<?php  if (!user_is_logged_in()): ?>

<div class="not-yet-registered">
  <div class="row">
    <div class="large-12 columns question">
      <?php print t('Not a registered Free member yet?'); ?> <br>
      <?php print t('You can get access to most of this content, right now <a class="button" href="/user/register">Sign up for free</a>'); ?>
    </div>
  </div>
</div>

<?php endif; ?>

<div class="topline animated fadeOut">
  <span class="expand"></span>
</div>

<div class="b2b-topics panel-display clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="b2b-topics-row-top">
    <div class="row">
      <div class="b2b-topics-top panel-panel large-12 columns">
        <?php print $content['top']; ?>
      </div>
    </div>
  </div>
  
  <?php if ($content['sponsor-feature']): ?>		
    <div class="sponsor-feature">
      <div class="row">
        <div class="large-12 columns">
          <?php print $content['sponsor-feature'];?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="b2b-topics-row-1 row">
    <div class="b2b-topics-panel-1-1 panel-panel small-12 medium-6 large-6  columns">
      <?php print $content['panel-1-1']; ?>
    </div>
    <div class="b2b-topics-panel-1-2 panel-panel small-12 medium-6 large-6  columns">
      <?php print $content['panel-1-2']; ?>
    </div>
  </div>

  <div class="b2b-topics-row-2 row">
    <div class="b2b-topics-panel-2-1 panel-panel small-12 medium-6 large-6  columns">
      <?php print $content['panel-2-1']; ?>
    </div>
    <div class="b2b-topics-panel-2-2 panel-panel small-12 medium-6 large-6  columns">
      <?php print $content['panel-2-2']; ?>
    </div>
  </div>

  <?php if ($content['sponsor']): ?>		
    <div class="row sponsor">
      <div class="large-12 columns">
        <?php print $content['sponsor'];?>
      </div>
    </div>
  <?php endif; ?>

  <div class="b2b-topics-row-3 row">
    <div class="b2b-topics-panel-3-1 panel-panel">
      <?php print $content['panel-3-1']; ?>
    </div>
  </div>

  <div class="b2b-topics-row-4 row">
    <div class="b2b-topics-panel-4-1 panel-panel small-12 medium-6 large-6  columns">
      <?php print $content['panel-4-1']; ?>
    </div>
    <div class="b2b-topics-panel-4-2 panel-panel small-12 medium-6 large-6 columns">
      <?php print $content['panel-4-2']; ?>
    </div>
  </div>

  <div class="b2b-topics-row-5 row">
    <div class="b2b-topics-panel-5-1 panel-panel large-12 columns">
      <?php print $content['panel-5-1']; ?>
    </div>
  </div>

  <div class="b2b-topics-row-6 row">
    <div class="b2b-topics-panel-6-1 panel-panel small-12 medium-4 large-4 columns">
      <?php print $content['panel-6-1']; ?>
    </div>
    <div class="b2b-topics-panel-6-2 panel-panel small-12 medium-4 large-4 columns">
      <?php print $content['panel-6-2']; ?>
    </div>
    <div class="b2b-topics-panel-6-3 panel-panel small-12 medium-4 large-4 columns">
      <?php print $content['panel-6-3']; ?>
    </div>
  </div>

  <div class="b2b-topics-row-7 row">
    <div class="b2b-topics-panel-7-1 panel-panel small-12 medium-6 large-6 columns">
      <?php print $content['panel-7-1']; ?>
    </div>
    <div class="b2b-topics-panel-7-2 panel-panel small-12 medium-6 large-6  columns">
      <?php print $content['panel-7-2']; ?>
    </div>
  </div>

      <?php $content['bottom']; ?>

</div>

