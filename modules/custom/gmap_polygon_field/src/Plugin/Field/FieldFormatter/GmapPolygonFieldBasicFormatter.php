<?php

namespace Drupal\gmap_polygon_field\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\gmap_polygon_field\Services\ConfigService;
use Drupal\Core\Utility\Token;

/**
 * Plugin implementation of the formatter.
 *
 * @FieldFormatter(
 *   id = "gmap_polygon_field_basic_formatter",
 *   label = @Translation("GMap Polygon Field Basic Formatter"),
 *   field_types = {
 *     "gmap_polygon_field"
 *   }
 * )
 */
class GmapPolygonFieldBasicFormatter extends FormatterBase implements ContainerFactoryPluginInterface {
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
  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, array $settings, $label, $view_mode, array $third_party_settings, ConfigService $config, Token $token) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings);

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
          $configuration['label'],
          $configuration['view_mode'],
          $configuration['third_party_settings'],
          $container->get('gmap_polygon_field.config'),
          $container->get('token')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      $node = $item->getEntity();
      $element[$delta] = [
        '#type' => 'html_tag',
        '#tag' => 'div',
        '#attributes' => [
          'class' =>
          'gmap_polygon_field_map',
          'data-polyline-encoded' => $item->polyline,
        ],
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
    }
    return $element;
  }

}
