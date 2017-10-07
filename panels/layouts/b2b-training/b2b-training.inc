<?php
// Plugin definition
$plugin = array(
  'title' => t('B2B Training'),
  'icon' => 'b2b-2col.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-training',
  'css' => 'b2b-training.css',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'title' => t('Header title'),
    'strapline' => t('Header strapline'),
    'sharethis' => t('Header sharethis'),
    'sidebar' => t('Sidebar'),
    'contentmain' => t('Content'),
    'testimonials' => t('Testimonials'),
    'trainers' => t('Trainers'),
    'map' => t('Googlemap')
  ),
);
