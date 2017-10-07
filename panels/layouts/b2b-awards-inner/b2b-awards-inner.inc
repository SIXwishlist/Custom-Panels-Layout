<?php
// Plugin definition
$plugin = array(
  'title' => t('b2b-awards-inner'),
  'icon' => 'b2b-awards-inner.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-awards-inner',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'sticky' => t('Sticky'),
    'hero' => t('Banner'),
    'hero-buttons' => t('Banner buttons'),
    'hero-strapline' => t('Banner strapline'),
    'sidebar' => t('Sidebar'),
    'contentmain' => t('Main content'),
    'logos' => t('Sponsor logos'),
  ),
);
