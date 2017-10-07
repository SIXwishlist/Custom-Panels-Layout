<?php
// Plugin definition
$plugin = array(
  'title' => t('b2b-company'),
  'icon' => 'b2b-company.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-company',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'title' => t('Title'),
    'topspotlight-left' => t('Top Spotlight Left'),
    'topspotlight-center' => t('Top Spotlight Center'),
    'topspotlight-right' => t('Top Spotlight Right'),
    'contentmain' => t('Content'),
    'map' => t('Map'),
    'contentmap' => t('Content Map'),
    'address_part_1' => t('Address Part 1'),
    'address_part_2' => t('Address Part 2'),
  ),
);

