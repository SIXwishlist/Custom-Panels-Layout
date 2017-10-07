<?php
// Plugin definition
$plugin = array(
  'title' => t('b2b-directory'),
  'icon' => 'b2b-directory.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-directory',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'topspotlight-left' => t('Top Spotlight Left'),
    'topspotlight-center' => t('Top Spotlight Center'),
    'topspotlight-right' => t('Top Spotlight Right'),
    'contentmain' => t('Content'),
    'contentmap' => t('Content Map'),
    'address_part_1' => t('Address Part 1'),
    'address_part_2' => t('Address Part 2'),
  ),
);

