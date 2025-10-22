<?php

/**
 * @file
 * Add custom theme settings to the idfive base theme.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter().
 */
function idfive_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $form['theme_ui'] = [
    '#type' => 'details',
    '#title' => t('UI Elements'),
  ];

  $form['breadcrumbs'] = [
    '#type' => 'details',
    '#title' => t('Breadcrumbs'),
  ];
  $form['breadcrumbs']['idfive_breadcrumbs_show_node_title'] = [
    '#type' => 'select',
    '#title' => t('Add node title to breadcrumb'),
    '#options' => [
      0 => t('No'),
      1 => t('Linked'),
      2 => t('Title Only'),
    ],
    '#default_value' => theme_get_setting('idfive_breadcrumbs_show_node_title'),
  ];
  /*
   * Offcanvas.
   */
  $form['search'] = [
    '#type' => 'details',
    '#title' => t('Search'),
    '#description' => t('Search settings.'),
  ];

  // Search settings.
  $form['search']['block'] = [
    '#type' => 'details',
    '#title' => t('Search Block'),
  ];

  $form['search']['block']['idfive_search_block_placeholder'] = [
    '#type' => 'checkbox',
    '#title' => t('Enable Search Menu'),
    '#description' => t('Displays the Search menu in the offcanvas.'),
    '#default_value' => theme_get_setting('idfive_search_block_placeholder'),
  ];

  $form['search']['block']['idfive_search_block_placeholder'] = [
    '#type' => 'textfield',
    '#title' => t('Placeholder text'),
    '#description' => t('Search box placeholder text.'),
    '#default_value' => theme_get_setting('idfive_search_block_placeholder'),
  ];

  $form['search']['block']['idfive_search_block_button_text'] = [
    '#type' => 'textfield',
    '#title' => t('Button text'),
    '#description' => t('Search box button text.'),
    '#default_value' => theme_get_setting('idfive_search_block_button_text'),
  ];

  /*
   * Hard-coded page elements.
   */
  $form['page_elements'] = [
    '#type' => 'details',
    '#title' => t('Page Elements'),
    '#description' => t('Contains settings to toggle hard-coded elements in the page template.'),
  ];

  $form['page_elements']['idfive_page_site_name'] = [
    '#type' => 'checkbox',
    '#title' => t('Show site name'),
    '#description' => t('Determines if the hard-coded site name should be displayed.'),
    '#default_value' => theme_get_setting('idfive_page_site_name'),
  ];

  $form['page_elements']['idfive_page_site_logo'] = [
    '#type' => 'checkbox',
    '#title' => t('Show site logo'),
    '#description' => t('Determines if the hard-coded site logo should be displayed.'),
    '#default_value' => theme_get_setting('idfive_page_site_logo'),
  ];

  /*
   * Styles and Scripts
   */
  $form['styles_scripts'] = [
    '#type' => 'details',
    '#title' => t('Styles and Scripts'),
    '#collapsible' => TRUE,
  ];

  $form['styles_scripts']['idfive_disable_base_css'] = [
    '#type' => 'checkbox',
    '#title' => t('Disable Base Theme CSS'),
    '#description' => t("Disabling the base theme CSS is useful for using SASS in a sub-theme.<br><strong>If you select this option, uncomment the relevant CSS includes in your sub-theme's .info.yml file.</strong>"),
    '#default_value' => theme_get_setting('idfive_disable_base_css'),
  ];

  $form['styles_scripts']['idfive_disable_base_js'] = [
    '#type' => 'checkbox',
    '#title' => t('Disable Base Theme JavaScript'),
    '#description' => t("Disabling the base theme JavaScript when using a sub-theme is also recommended for more flexibility over which components get included.<br><strong>If you select this option, uncomment the relevant JS includes in your sub-theme's .info.yml file.</strong>"),
    '#default_value' => theme_get_setting('idfive_disable_base_js'),
  ];

  /*
   * Other
   */
  $form['other'] = [
    '#type' => 'details',
    '#title' => t('Other'),
    '#collapsible' => TRUE,
  ];

  $form['other']['idfive_assets_path'] = [
    '#type' => 'textfield',
    '#title' => t('Assets path'),
    '#description' => t('Provides a site wide {{ assets_path }} variable for the builds assets path relative to the theme root. Usable in twig templates. Ex: /silc/build'),
    '#default_value' => theme_get_setting('idfive_assets_path'),
  ];
}
