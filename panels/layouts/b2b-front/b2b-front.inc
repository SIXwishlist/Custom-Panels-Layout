<?php
// Plugin definition
$plugin = array(
  'title' => t('b2b-front'),
  'icon' => 'b2b-front.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-front',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'hero' => t('Banner'),
    'topad' => t('Top ad space'),
    'top' => t('Top'),
    'sponsor-feature' => t('Sponsor feature'),
    'panel-1-1' => t('1-1'),
    'sponsor' => t('Sponsor'),
    'panel-1-2' => t('1-2'),
    'panel-2-1' => t('2-1'),
    'panel-3-1' => t('3-1'),
    'panel-3-2' => t('3-2'),
    'panel-3-3' => t('3-3'),
    'panel-4-1' => t('4-1'),
    'panel-4-2' => t('4-2'),
    'panel-4-3' => t('4-3'),
    'panel-5-1' => t('5-1'),
    'bottom' => t('Bottom'),
  ),
);

function ch12i5b_row_has_content($content, $row) {
  for ($i = 1; TRUE; $i++) {
    if (!isset($content["panel-$row-$i"]))
      return FALSE;

    if (!empty($content["panel-$row-$i"]))
      return TRUE;
  }
}
