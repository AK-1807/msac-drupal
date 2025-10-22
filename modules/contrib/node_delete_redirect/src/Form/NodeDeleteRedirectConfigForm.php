<?php

namespace Drupal\node_delete_redirect\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Html;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Symfony\Component\DependencyInjection\ContainerInterface as ContainerInterfaceAlias;

/**
 * Class NodeDeleteRedirectConfigForm.
 *
 * @package Drupal\node_delete_redirect\Form
 */
class NodeDeleteRedirectConfigForm extends ConfigFormBase {

  use StringTranslationTrait;

  /**
   * Node configuration object.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $nodeConfigStorage;

  /**
   * NodeDeleteRedirectConfigForm constructor.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   Configuration factory object.
   * @param \Drupal\Core\Entity\EntityStorageInterface $nodeConfigStorage
   *   Node configuration object.
   */
  public function __construct(ConfigFactoryInterface $config_factory, EntityStorageInterface $nodeConfigStorage) {
    parent::__construct($config_factory);
    $this->nodeConfigStorage = $nodeConfigStorage;
  }

  /**
   * Static function create.
   *
   * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
   *   Container object.
   *
   * @return \Drupal\Core\Form\ConfigFormBase|\Drupal\node_delete_redirect\Form\NodeDeleteRedirectConfigForm
   *   Returns services.
   */
  public static function create(ContainerInterfaceAlias $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('entity_type.manager')->getStorage('node_type')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'node_delete_redirect.admin_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'node_delete_redirect.admin_settings_form',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('node_delete_redirect.admin_settings_form')
      ->get('ndr_admin_form_settings');

    $content_types = $this->nodeConfigStorage
      ->loadMultiple();

    $options = [
      0 => $this->t('Disable'),
      1 => $this->t('Enable'),
    ];

    $elemValidate = [
      [
        'Drupal\node_delete_redirect\Validate\NodeDeleteRedirectElemPathValidate',
        'validate',
      ],
    ];

    $formValidate = [
      [
        'Drupal\node_delete_redirect\Validate\NodeDeleteRedirectConfigFormValidate',
        'validate',
      ],
    ];

    $form['ndr_check'] = [
      '#type'          => 'radios',
      '#title'         => $this->t('Node Delete Redirect'),
      '#default_value' => isset($config['ndr_check']) ? $config['ndr_check'] : 0,
      '#options'       => $options,
      '#description'   => $this->t('When disabled, redirection rules will not apply.'),
      '#required'      => TRUE,
    ];

    $form['ndr_settings'] = [
      '#type'        => 'fieldset',
      '#title'       => $this->t('Enable Redirect For Content Type'),
      '#collapsible' => FALSE,
      '#collapsed'   => FALSE,
      '#tree'        => TRUE,
      '#states'      => [
        'visible' => [
          ':input[name=ndr_check]' => [
            'value' => 1,
          ],
        ],
      ],
    ];

    foreach ($content_types as $keys => $values) {
      $form['ndr_settings'][$keys]['is_enabled'] = [
        '#type'          => 'checkbox',
        '#title'         => Html::escape($values->label()),
        '#default_value' => isset($config['ndr_settings'][$keys]['is_enabled']) ? $config['ndr_settings'][$keys]['is_enabled'] : '',
      ];

      $form['ndr_settings'][$keys]['redirect_' . $keys . '_settings'] = [
        '#type'        => 'fieldset',
        '#title'       => $this->t('Redirect URL settings'),
        '#collapsible' => FALSE,
        '#collapsed'   => FALSE,
        '#parents'     => ['ndr_settings', $keys],
        '#states'      => [
          'visible' => [
            ':input[name=ndr_settings\[' . $keys . '\]\[is_enabled\]]' => [
              'checked' => TRUE,
            ],
          ],
        ],
      ];

      $form['ndr_settings'][$keys]['redirect_' . $keys . '_settings']['redirect'] = [
        '#type'             => 'textfield',
        '#title'            => $this->t('Redirect URL'),
        '#default_value'    => isset($config['ndr_settings'][$keys]['redirect']) ? $config['ndr_settings'][$keys]['redirect'] : '',
        '#description'      => $this->t('Example: /node'),
        '#element_validate' => $elemValidate,
        '#size'             => 45,
        '#maxlength'        => 128,
      ];

      $form['#validate'] = $formValidate;
    }

    $form['ndr_lang'] = [
      '#type'          => 'checkbox',
      '#title'         => $this->t('Enable language support (alpha)'),
      '#default_value' => isset($config['ndr_lang']) ? $config['ndr_lang'] : 0,
      '#options'       => $options,
      '#description'   => $this->t('When enabled, redirection will occur with current language prefix.'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();

    // Checking values before saving.
    if ($values['ndr_check']) {
      $content_types = $this->nodeConfigStorage
        ->loadMultiple();

      foreach (array_keys($content_types) as $type) {
        if (!$values['ndr_settings'][$type]['is_enabled']) {
          unset($values['ndr_settings'][$type]['redirect']);
        }
      }
    }
    else {
      unset($values['ndr_settings']);
    }

    // Saving settings.
    $this->config('node_delete_redirect.admin_settings_form')
      ->set('ndr_admin_form_settings', $values)
      ->save();
    parent::submitForm($form, $form_state);
  }

}
