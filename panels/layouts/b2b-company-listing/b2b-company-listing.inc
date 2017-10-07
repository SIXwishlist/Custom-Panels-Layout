<?php
// Plugin definition
$plugin = array(
  'title' => t('Company Listing'),
  'icon' => 'b2b-company-listing.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-company-listing',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
  	'top' => t('Top'),
    'contentmain' => t('Content'),
  ),
);
