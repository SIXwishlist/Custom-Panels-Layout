<?php
// Plugin definition
$plugin = array(
  'title' => t('Topics with type'),
  'icon' => 'b2b-topics-type.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-topics-type',
  'css' => 'b2b-topics-type.css',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'top' => t('Top'),
    'panel-1-1' => t('1-1'),
    'panel-1-2' => t('1-2'),
    'panel-2-1' => t('2-1'),
    'panel-2-2' => t('2-2'),
    'panel-3-1' => t('3-1'),
    'panel-3-2' => t('3-2'),
    'bottom' => t('Bottom'),
  ),
);
