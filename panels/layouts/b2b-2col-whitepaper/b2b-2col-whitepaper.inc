<?php
// Plugin definition
$plugin = array(
  'title' => t('B2B 2 Column Whitepaper'),
  'icon' => 'b2b-2col.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-2col-whitepaper',
  'css' => 'b2b-2col-whitepaper.css',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'sidebar' => t('Sidebar'),
    'breadcrumbs-full' => t('Breadcrumbs'),
    'contentmain' => t('Content'),
    'related-content' => t('Related Content'),
    'comments' => t('Comments')
  ),
);
