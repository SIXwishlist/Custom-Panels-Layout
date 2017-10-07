<?php
// Plugin definition
$plugin = array(
  'title' => t('B2B Event'),
  'icon' => 'b2b-event.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-event',
  'css' => 'b2b-event.css',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'header' => t('Header'),
    'column1' => t('First Column'),
    'column2' => t('Second Column'),
    'newsletter' => t('Newsletter'),
    'middle' => t('Middle'),
    'secondcolumn1' => t('Bottom First Column'),
    'secondcolumn2' => t('Bottom Second Column'),
    'footer' => t('Footer'),
  ),
);
