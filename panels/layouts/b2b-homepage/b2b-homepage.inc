<?php
// Plugin definition
$plugin = array(
  'title' => t('b2b-homepage'),
  'icon' => 'b2b-homepage.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-homepage',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'hero' => t('Banner'),
    'top' => t('Top'),
    'panel-1-1' => t('1-1'),
    'panel-1-2' => t('1-2'),
    'panel-2-1' => t('2-1'),
    'panel-3-1' => t('3-1'),
    'panel-4-1' => t('4-1'),
    'panel-5-1' => t('5-1'),
    'bottom' => t('Bottom'),
  ),
);
