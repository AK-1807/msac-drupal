<?php

namespace Drupal\gmap_polygon_field\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\gmap_polygon_field\Services\ConfigService;
use Drupal\Core\Utility\Token;

/**
 * Controller routines for demo page.
 */
class SamplePageController extends ControllerBase {
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
  public function __construct(ConfigService $config, Token $token) {
    $this->config = $config;
    $this->token = $token;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('gmap_polygon_field.config'),
      $container->get('token')
    );
  }

  /**
   * Content of demo page.
   *
   * @return array
   *   Array to render.
   */
  public function content() {
    if (empty($this->config->get('gmap_polygon_field_api_key'))) {
      return [
        '#type' => 'markup',
        '#markup' => $this->t('You have to specify Google Maps API key first. Go to Configuration -> Content authoring -> GMap Polygon Field.'),
        '#cache' => [
          'tags' => [
            'config:gmap_polygon_field.settings',
          ],
        ],
      ];
    }

    $content = [
      '#suffix' => '<div class="gmap_polygon_field_map gmap-editable"></div>',
      '#attributes' => ['class' => ['gmap_polygon_field']],
      '#attached' => [
        'library' => ['gmap_polygon_field/gmap-polygon-field'],
        'drupalSettings' => [
          'gmap_polygon_field' => [
            'strokeColor' => $this->token->replace($this->config->get('gmap_polygon_field_stroke_color')),
            'strokeOpacity' => $this->token->replace($this->config->get('gmap_polygon_field_stroke_opacity')),
            'strokeWeight' => $this->token->replace($this->config->get('gmap_polygon_field_stroke_weight')),
            'fillColor' => $this->token->replace($this->config->get('gmap_polygon_field_fill_color')),
          ],
        ],
      ],
    ];
    $content += [
      '#type' => 'textfield',
      '#attributes' => ['class' => ['gmap_polygon_field_poly_text']],
      '#size' => 70,
    ];
    $content['#cache']['tags'] = [
      'config:gmap_polygon_field.settings',
    ];
    return $content;
  }

}
