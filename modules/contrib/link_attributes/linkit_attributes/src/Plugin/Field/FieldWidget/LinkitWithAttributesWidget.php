<?php

namespace Drupal\linkit_attributes\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\linkit\Plugin\Field\FieldWidget\LinkitWidget;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Plugin implementation of the 'linkit' widget.
 *
 * @FieldWidget(
 *   id = "linkit_attributes",
 *   label = @Translation("Linkit (with attributes)"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class LinkitWithAttributesWidget extends LinkitWidget {

  /**
   * Link attributes plugin manager.
   *
   * @var \Drupal\link_attributes\LinkAttributesManager
   */
  protected $linkAttributesManager;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    $instance = parent::create($container, $configuration, $plugin_id, $plugin_definition);
    $instance->linkAttributesManager = $container->get('plugin.manager.link_attributes');
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
      'placeholder_url' => '',
      'placeholder_title' => '',
      'enabled_attributes' => [
        'id' => FALSE,
        'name' => FALSE,
        'target' => TRUE,
        'rel' => TRUE,
        'class' => TRUE,
        'accesskey' => FALSE,
      ],
      'open_tab_onfill' => TRUE,
    ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);
    // Add each of the enabled attributes.
    // @todo move this to plugins that nominate form and label.
    $item = $items[$delta];

    $options = $item->get('options')->getValue();
    $attributes = isset($options['attributes']) ? $options['attributes'] : [];
    $open_tab_onfill = (bool) $this->getSetting('open_tab_onfill');
    $element['options']['attributes'] = [
      '#type' => 'details',
      '#title' => $this->t('Attributes'),
      '#tree' => TRUE,
      '#open' => $open_tab_onfill ? count($attributes) : FALSE,
    ];
    $plugin_definitions = $this->linkAttributesManager->getDefinitions();
    foreach (array_keys(array_filter($this->getSetting('enabled_attributes'))) as $attribute) {
      if (isset($plugin_definitions[$attribute])) {
        foreach ($plugin_definitions[$attribute] as $property => $value) {
          $element['options']['attributes'][$attribute]['#' . $property] = $value;
        }
        $element['options']['attributes'][$attribute]['#default_value'] = isset($attributes[$attribute]) ? $attributes[$attribute] : '';
      }
    }
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $element = parent::settingsForm($form, $form_state);
    $options = array_map(function ($plugin_definition) {
      return $plugin_definition['title'];
    }, $this->linkAttributesManager->getDefinitions());
    $selected = array_keys(array_filter($this->getSetting('enabled_attributes')));
    $open_tab_onfill = (bool) $this->getSetting('open_tab_onfill');
    $element['enabled_attributes'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Enabled attributes'),
      '#options' => $options,
      '#default_value' => array_combine($selected, $selected),
      '#description' => $this->t('Select the attributes to allow the user to edit.'),
    ];
    $element['open_tab_onfill'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Open the attributes tab when at least one attribute is provided.'),
      '#default_value' => $open_tab_onfill,
      '#description' => $this->t('Uncheck this to keep the attributes tab closed.'),
    ];

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function massageFormValues(array $values, array $form, FormStateInterface $form_state) {
    $values = parent::massageFormValues($values, $form, $form_state);
    return array_map(function (array $value) {
      $value['options']['attributes'] = array_filter($value['options']['attributes'], function ($attribute) {
        return $attribute !== "";
      });
      return $value;
    }, $values);
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = parent::settingsSummary();
    $enabled_attributes = array_filter($this->getSetting('enabled_attributes'));
    $open_tab_onfill = (bool) $this->getSetting('open_tab_onfill');
    if ($enabled_attributes) {
      $summary[] = $this->t('With attributes: @attributes', ['@attributes' => implode(', ', array_keys($enabled_attributes))]);
    }
    $summary[] = $open_tab_onfill ? $this->t('Attribute tab: Open if attributes set') : $this->t('Attribute tab: Closed');

    return $summary;
  }

}
