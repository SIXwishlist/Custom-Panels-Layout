<?php

// Plugin definition
$plugin = array(
  'title' => t('Slideshow'),
  'description' => t('Show panel panes as a slideshow.'),
  'render region' => 'ch12i5b_hero_slider_render_region',
  'settings form' => 'ch12i5b_hero_slider_settings_form',
);

function theme_ch12i5b_hero_slider_render_region($vars) {
  if (count($vars['panes']) > 1) {
    // Multiple panes.
    $output = '<div class="hero-slider">' . implode('', $vars['panes']) . '</div>';

    drupal_add_js(drupal_get_path('theme', 'ch12i5b') . '/js/jquery.cycle2.min.js');
    drupal_add_js(drupal_get_path('theme', 'ch12i5b') . '/panels/styles/hero-slider.js');
  }
  else {
    // One or zero panes.
    $output = implode('', $vars['panes']);
  }

  return $output;
}

function ch12i5b_hero_slider_settings_form($form, $form_state) {
  $form = array();
  return $form;
}
