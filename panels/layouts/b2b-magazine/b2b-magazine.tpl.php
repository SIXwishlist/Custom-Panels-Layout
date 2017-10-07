<?php
/**
 * @file
 * Template for b2b-magazine.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>
<div class="b2b-magazine panel-display clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <!-- hero banner -->
  <div class="b2b-magazine-hero-banner hero-panel panel-panel">
    <?php print $content['hero-banner']; ?>
  </div>
  <!-- /hero banner -->

  <!-- magazine thumbs -->
  <div class="b2b-magazine-thumbs row row-mb">
    <div class="panel-panel large-12 columns">
      <?php print $content['magazine-thumbs']; ?>
    </div>
  </div>
  <!-- /magazine thumbs -->


    <!-- about/contribute -->
  <div class="b2b-magazine-about-contribute row row-mb">
    <div class="b2b-magazine-column1 panel-panel large-6 columns">
      <?php print $content['about']; ?>
    </div>
    <div class="b2b-magazine-column2 panel-panel large-6 columns">
      <?php print $content['contribute']; ?>
    </div>
  </div>
  <!-- /about/contribute -->


  <!-- subscribe/join -->
  <?php  /** Removed for now  
  if ($content['subscribe'] && $content['join']): ?>
  <div class="grey_wrap row-mb">
  <div class="b2b-magazine-subscribe-join row">
    <div class="b2b-magazine-column1 panel-panel large-5 columns">
      <?php print $content['subscribe']; ?>
    </div>
    <div class="large-2 columns or">
      - or -
    </div>
    <div class="b2b-magazine-column2 panel-panel large-5 columns">
      <?php print $content['join']; ?>
    </div>
  </div>
  </div>
  <?php endif; ?>
  
  <?php if ($content['testimonials']): ?>
  <div class="grey_wrap testimonials">
    <div class="row">
      <div class="large-12 medium-12 small-12 columns">
        <h2><?php print t('Testimonials'); ?></h2>
      </div>
    </div>
    <div class="row row-mb">
        <?php print $content['testimonials'] ?>
    </div>
  </div>
  <?php endif; ?>
  
  </div>

<?php 
 
 <div id="subscribe_modal" class="reveal-modal medium" data-reveal>
	<a class="close-reveal-modal">&#215;</a>
	<?php print $content['subscription']; ?>
 </div>
 
 <script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.subscribe_button').click(function() {
			jQuery("#subscribe_modal").foundation('reveal', 'open');
		});
	});
 </script>
 **/
?>
