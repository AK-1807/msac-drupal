<?php

/**
 * @file
 * Maryland State Arts Council (msac), add custom theme settings options here.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 * @param \Drupal\Core\Form\FormStateInterface $form_state
 */
function msac_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {

  $form['msac'] = [
    '#type' => 'details',
    '#title' => t('MSAC General Settings'),
    '#collapsible' => TRUE,
  ];

  $form['msac_directory'] = [
    '#type' => 'details',
    '#title' => t('MSAC Directory'),
    '#collapsible' => TRUE,
  ];
  $form['msac_directory']['msac_directory_path'] = [
    '#type' => 'textfield',
    '#title' => t('Path to directory page'),
    '#description' => t('Relative path without the preceding /. Ex: about/directory'),
    '#default_value' => theme_get_setting('msac_directory_path'),
  ];

  $form['msac_explore_arts'] = [
    '#type' => 'details',
    '#title' => t('MSAC Explore Arts'),
    '#collapsible' => TRUE,
  ];
  $form['msac_explore_arts']['msac_explore_arts_hero_title'] = [
    '#type' => 'textfield',
    '#title' => t('Hero Title'),
    '#description' => t(''),
    '#default_value' => theme_get_setting('msac_explore_arts_hero_title'),
  ];
  $form['msac_explore_arts']['msac_explore_arts_hero_text'] = [
    '#type' => 'text_format',
    '#format' => 'full_html',
    '#title' => t('Hero Text'),
    '#description' => t('Used on the explore arts hero text'),
    '#default_value' => theme_get_setting('msac_explore_arts_hero_text')['value'],
  ];

}
