<?php

namespace Drupal\msac_profiles\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\user\AccountForm;

/**
 * Form handler for the custom registration form.
 *
 * @internal
 */
class MsacProfilesAccountForm extends AccountForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {

    $form = parent::form($form, $form_state);

    // Hide admin fields.
    unset($form['field_legacy_id']);
    unset($form['field_artist_id']);

    if (\Drupal::moduleHandler()->moduleExists('honeypot')) {
      \Drupal::service('honeypot')->addFormProtection($form, $form_state, ['honeypot', 'time_restriction']);
    }

    return $form;
  }

}
