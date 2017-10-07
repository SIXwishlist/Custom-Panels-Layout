<?php
// Plugin definition
$plugin = array(
  'title' => t('B2B Full width page'),
  'icon' => 'b2b-2col.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-full-width-page',
  'css' => 'b2b-full-width-page.css',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'hero-info' => t('Hero content'),
    'hero-download' => t('Hero download'),
    'resource-info' => t('Resource info'),
    'sidebar' => t('Sidebar'),
    'main' => t('Main content'),
    'cta' => t('Call to action'),
  ),
);
