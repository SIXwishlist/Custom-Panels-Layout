<?php
// Plugin definition
$plugin = array(
  'title' => t('B2B 2 Column Sponsor'),
  'icon' => 'b2b-2col-sponsor.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-2col-sponsor',
  'css' => 'b2b-2col-sponsor.css',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'sidebar' => t('Sidebar'),
    'breadcrumbs-full' => t('Breadcrumbs'),
    'sponsor' => t('Sponsor'),
    'contentmain' => t('Content'),
    'related-content' => t('Related Content'),
    'sponsor-fat' => t('Sponsor Fat'),
    'comments' => t('Comments')
  ),
);
