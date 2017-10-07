<?php
/**
 * @file
 * Template for b2b-directory. Used for SUppliers & Agencies and Member Profiles
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display b2b-company clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row-fluid">
    <div class="b2b-full-container b2b-full-content b2b-full-content-region panel-panel span12">
      
      <div class="row row-company-info">
        <div class="large-3 medium-4 columns company-info-col1">
              <?php print $content['topspotlight-left']; ?>
        </div>

        <div class="large-9 medium-8 columns company-info-col1">
              
            <?php print $content['title']; ?>

            <div class="row">
              <div class="large-6 medium-12 columns company-info-col2">
                <?php print $content['topspotlight-center']; ?>
              </div>

              <div class="large-6 medium-12 columns company-info-col3">
                <?php print $content['topspotlight-right']; ?>
              </div>
            </div>

        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
              <?php print $content['contentmain']; ?>
        </div>
      </div>

    <div class="map">
      <?php print $content['map']; ?>

      <?php print $content['contentmap']; ?>

        <div class="map-info">
        <div class="info large-9 large-centered medium-centered medium-10 small-10 small-centered columns">
          <div class="row heading">
            <h3><?php print t('Contact'); ?></h3>
          </div>
          <div class="row" data-equalizer >
            <div class="address_1 large-12 large-push-1 columns" data-equalizer-watch >          
              
              <?php print $content['address_part_1']; ?>
            </div>
          
            <div class="address_2 large-12 large-push-1 columns" data-equalizer-watch >
              
              <?php print $content['address_part_2']; ?>
              
            </div>
          </div>
          <div class="row actions">
            <div class="large-12 medium-12 small-12 columns">
              <a href="javascript:void(0);" class="button view_map"><?php print t('View map'); ?></a>
            </div>
          </div>
        </div>
        </div>

    </div>
    </div>
  </div>
</div>
