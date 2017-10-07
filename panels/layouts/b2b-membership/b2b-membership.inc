<?php
// Plugin definition
$plugin = array(
  'title' => t('B2B Membership'),
  'icon' => 'b2b-membership.png',
  'category' => t('B2B Marketing'),
  'theme' => 'b2b-membership',
  'admin css' => '../../../stylesheets/foundation-grid.css',
  'regions' => array(
	'summary' => t('Summary'),
  'prices' => t('Prices'),
  'logos' => t('Logos area'),
  'quote' => t('Quote area')
  )
);
