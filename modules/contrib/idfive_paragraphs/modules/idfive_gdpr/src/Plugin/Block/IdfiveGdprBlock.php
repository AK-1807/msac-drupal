<?php

namespace Drupal\idfive_gdpr\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Idfive GDPR Block.
 *
 * @Block(
 *   id = "idfive_gdpr_block",
 *   admin_label = @Translation("idfive GDPR Block")
 * )
 */
class IdfiveGdprBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {

    $form = parent::blockForm($form, $form_state);

    $help_markup = "<p>This block displays the GDPR bar. Please see the <a href='/admin/config/services/idfive_gdpr/settings' target='_blank'>idfive GDPR Module Configuration Page</a> for more details and settings.</p>";

    $form['help'] = [
      '#type' => 'markup',
      '#markup' => $help_markup,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $settings = \Drupal::config('idfive_gdpr.settings');
    $settings = $settings->getOriginal();
    $build['#theme'] = 'idfive_gdpr_block';
    // Parse down to just the settings we need for the block.
    $build['#gdpr_settings']['accept'] = $settings['idfive_gdpr_accept_text'];
    $build['#gdpr_settings']['decline'] = $settings['idfive_gdpr_decline_text'];
    $build['#gdpr_settings']['message'] = $settings['idfive_gdpr_message_text']['value'];
    return $build;
  }

}
