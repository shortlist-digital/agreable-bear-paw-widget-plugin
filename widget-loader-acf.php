<?php

$key = 'widget_bear_paw';
$widgetplacement = self::$config['tab_placement'];

$widget_config = array (
  'key' => $key,
  'name' => 'bear_paw',
  'label' => 'Bear Paw',
  'display' => 'block',
  'sub_fields' => array (
    array (
      'key' => $key . '_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => $key . '_lists',
      'label' => 'Lists',
      'name' => 'lists',
      'type' => 'post_object',
      'post_type' => array (
        0 => 'list',
      ),
      'multiple' => 1,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
      'key' => $key . '_posts_manual',
      'label' => 'Manually insert content (Posts or Tiles)',
      'name' => 'posts',
      'type' => 'post_object',
      'post_type' => array (
        0 => 'post',
        1 => 'longform',
        2 => 'category',
        3 => 'sponsored_post',
        4 => 'sponsored_longform',
        5 => 'page',
        6 => 'sponsored_hub',
      ),
      'allow_null' => 1,
      'multiple' => 1,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
      'key' => $key . '_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
  ),
);
$widget_config["content-types"] = array('category', 'page'); // section, article
$widget_config["content-sizes"] = array('main'); // main, main-full-bleed, sidebar
