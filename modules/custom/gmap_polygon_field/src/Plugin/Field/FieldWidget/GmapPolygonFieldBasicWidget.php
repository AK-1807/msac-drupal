<?php

namespace Drupal\gmap_polygon_field\Plugin\Field\FieldWidget;

use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Field\WidgetInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\gmap_polygon_field\Services\ConfigService;
use Drupal\Core\Utility\Token;

/**
 * Plugin implementation of the widget.
 *
 * @FieldWidget(
 *   id = "gmap_polygon_field_basic_widget",
 *   label = @Translation("GMap Polygon Field Basic Widget"),
 *   field_types = {
 *     "gmap_polygon_field"
 *   }
 * )
 */
class GmapPolygonFieldBasicWidget extends WidgetBase implements WidgetInterface, ContainerFactoryPluginInterface {
  /**
   * The config service.
   *
   * @var \Drupal\gmap_polygon_field\Services\ConfigService
   */
  protected $config;

  /**
   * The token service.
   *
   * @var \Drupal\Core\Utility\Token
   */
  protected $token;

  /**
   * {@inheritdoc}
   */
  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, array $third_party_settings, ConfigService $config, Token $token) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $third_party_settings);

    $this->config = $config;
    $this->token = $token;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['third_party_settings'],
      $container->get('gmap_polygon_field.config'),
      $container->get('token')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $value = isset($items[$delta]->polyline) ? $items[$delta]->polyline : '';
    $node = $form_state->getFormObject()->getEntity();

    $widget = [];
    $widget['#delta'] = $delta;
    $widget = [
      '#suffix' => '<div class="gmap_polygon_field_map gmap-editable"></div>',
      '#attributes' => ['class' => ['gmap_polygon_field']],
      '#attached' => [
        'library' => ['gmap_polygon_field/gmap-polygon-field'],
        'drupalSettings' => [
          'gmap_polygon_field' => [
            'strokeColor' => $this->token->replace($this->config->get('gmap_polygon_field_stroke_color'), ['node' => $node]),
            'strokeOpacity' => $this->token->replace($this->config->get('gmap_polygon_field_stroke_opacity'), ['node' => $node]),
            'strokeWeight' => $this->token->replace($this->config->get('gmap_polygon_field_stroke_weight'), ['node' => $node]),
            'fillColor' => $this->token->replace($this->config->get('gmap_polygon_field_fill_color'), ['node' => $node]),
          ],
        ],
      ],
    ];
    $widget += [
      '#type' => 'textfield',
      '#attributes' => ['class' => ['gmap_polygon_field_poly_text']],
      '#size' => 70,
      '#default_value' => $value,
    ];

    $element['polyline'] = $widget;
    return $element;
  }

}
