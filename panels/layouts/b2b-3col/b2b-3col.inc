<?php
// Plugin definition
$plugin = array(
  'title' => t('b2b-3col'),
  'icon' => 'b2b-3col.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-3col',
  'css' => 'b2b-3col.css',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'topspotlight-left' => t('Top Spotlight Left'),
    'topspotlight-right' => t('Top Spotlight Right'),
    'column1' => t('First Column'),
    'column2' => t('Second Column'),
    'contentmain' => t('Content'),
    'related-content' => t('Related Content'),
    'comments' => t('Comments'),
  ),
);
