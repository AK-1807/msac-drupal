<?php

namespace Drupal\idfive_gdpr\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class IdfiveGdprSettingsForm extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'idfive_gdpr.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'idfive_gdpr_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);
    $help_markup = "<p>This form is to adjust settings for general GDPR. Please see the <a href='/admin/help/idfive_gdpr' target='_blank'>idfive GDPR Module Help Page</a> for more details.</p>";

    $form['help'] = [
      '#type' => 'markup',
      '#markup' => $help_markup,
    ];

    // GDPR Global Bar.
    $form['idfive_gdpr_bar'] = [
      '#type' => 'details',
      '#title' => t('Global GDPR Bar'),
    ];

    $form['idfive_gdpr_bar']['idfive_gdpr_accept_text'] = [
      '#type' => 'textfield',
      '#title' => t('Accept button text'),
      '#default_value' => $config->get('idfive_gdpr_accept_text'),
      '#description'  => 'The text to appear in the accept button.',
      '#required' => TRUE,
    ];

    $form['idfive_gdpr_bar']['idfive_gdpr_decline_text'] = [
      '#type' => 'textfield',
      '#title' => t('Decline button text'),
      '#default_value' => $config->get('idfive_gdpr_decline_text'),
      '#description'  => 'The text to appear in the decline button.',
      '#required' => TRUE,
    ];

    $form['idfive_gdpr_bar']['idfive_gdpr_message_text'] = [
      '#type' => 'text_format',
      '#title' => t('GDPR Message'),
      '#default_value' => $config->get('idfive_gdpr_message_text.value'),
      '#description'  => 'The body text that appears in the GDPR bar.',
      '#format' => $config->get('idfive_gdpr_message_text.format'),
      '#required' => TRUE,
    ];

    // GDPR Privacy Policy Page.
    $form['idfive_gdpr_pp_page'] = [
      '#type' => 'details',
      '#title' => t('GDPR Privacy Policy Page'),
    ];

    // Show your settings checkbox.
    $form['idfive_gdpr_pp_page']['idfive_gdpr_pp_page_show_ys'] = [
      '#type' => 'checkbox',
      '#default_value' => $config->get('idfive_gdpr_pp_page_show_ys'),
      '#title' => t('Show user consent choice at top of page.'),
      '#required' => FALSE,
    ];

    $form['idfive_gdpr_pp_page']['idfive_gdpr_pp_page_ys_title'] = [
      '#type' => 'textfield',
      '#title' => t('Consent choice title'),
      '#default_value' => $config->get('idfive_gdpr_pp_page_ys_title'),
      '#description'  => 'The text to appear in consent choice section, if shown.',
      '#required' => TRUE,
    ];

    $form['idfive_gdpr_pp_page']['idfive_gdpr_pp_page_body'] = [
      '#type' => 'text_format',
      '#title' => t('GDPR Privacy Policy Page Body'),
      '#default_value' => $config->get('idfive_gdpr_pp_page_body.value'),
      '#description'  => 'The body text that appears in the GDPR Privacy Policy page.',
      '#format' => $config->get('idfive_gdpr_pp_page_body.format'),
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $this->configFactory->getEditable(static::SETTINGS)
      // Set the submitted configuration setting.
      ->set('idfive_gdpr_accept_text', $form_state->getValue('idfive_gdpr_accept_text'))
      ->set('idfive_gdpr_decline_text', $form_state->getValue('idfive_gdpr_decline_text'))
      ->set('idfive_gdpr_message_text', $form_state->getValue('idfive_gdpr_message_text'))
      ->set('idfive_gdpr_pp_page_show_ys', $form_state->getValue('idfive_gdpr_pp_page_show_ys'))
      ->set('idfive_gdpr_pp_page_ys_title', $form_state->getValue('idfive_gdpr_pp_page_ys_title'))
      ->set('idfive_gdpr_pp_page_body', $form_state->getValue('idfive_gdpr_pp_page_body'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
