<?php
// Plugin definition
$plugin = array(
  'title' => t('b2b-magazine'),
  'icon' => 'b2b-magazine.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-magazine',
  'css' => 'b2b-magazine.css',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
    'hero-banner' => t('Hero Banner'),
    'magazine-thumbs' => t('Magazine Thumbs'),
    'subscribe' => t('Subscribe'),
    'about' => t('About'),
    'join' => t('Join'),
    'contribute' => t('Contribute'),
    'testimonials' => t('Testimonials'),
	'subscription' => t('Subscription')
    //'testimonials2' => t('Testimonials2'),
  ),
);
