<?php
// Plugin definition
$plugin = array(
  'title' => t('b2b-awards-landing'),
  'icon' => 'b2b-awards-landing.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-awards-landing',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'sticky' => t('Sticky'),
    'hero' => t('Banner'),
    'hero-buttons' => t('Banner buttons'),
    'hero-strapline' => t('Banner strapline'),
    'logos' => t('Logos'),
    'speakers-intro' => t('Speakers intro'),
    'speakers' => t('Speakers'),
    'panel-1-1' => t('1-1'),
    'panel-1-1-ticketing' => t('1-1-ticketing'),
    'panel-1-2' => t('1-2'),
    'panel-1-3-video' => t('1-3-video'),
    'panel-1-3-dates' => t('1-3-dates'),
    'panel-1-3-misc' => t('1-3-misc'),
    'panel-2-1' => t('2-1'),
    'panel-3-1' => t('3-1'),
  ),
);
