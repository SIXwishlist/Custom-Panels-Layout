<?php
// Plugin definition
$plugin = array(
  'title' => t('B2B Events Full List'),
  'icon' => 'b2b-events-fulllist.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-events-fulllist',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'header' => t('Header'),
    'keynote_main' => t('Keynote Full List'),
	  'webinars_short' => t('Webinar Short List'),
	  'footer' => t('Footer'),
	  'testimonials' => t('Testimonials'),
	  'webinar_full' => t('Webinars Full List'),
  ),
);
