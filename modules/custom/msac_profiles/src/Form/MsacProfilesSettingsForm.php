<?php

namespace Drupal\msac_profiles\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class MsacProfilesSettingsForm extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'msac_profiles.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'msac_profiles_settings';
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
    $help_markup = "<p>This form is to adjust settings for general use on the profiles dashboard. Please see the <a href='/admin/help/msac_profiles' target='_blank'>MSAC Profiles Module Help Page</a> for more details.</p>";

    $form['help'] = [
      '#type' => 'markup',
      '#markup' => $help_markup,
    ];

    // Dashboard Ind/Org Choice Text.
    $form['ind_org_choice'] = [
      '#type' => 'details',
      '#title' => t('Inividual/Organization registration or signup page'),
    ];

    $form['ind_org_choice']['ioc_intro_text'] = [
      '#type' => 'textarea',
      '#title' => t('Into Text'),
      '#default_value' => $config->get('ioc_intro_text'),
      '#description'  => 'Introductory text to the registration page.',
      '#required' => TRUE,
    ];

    $form['ind_org_choice']['ioc_artist_title'] = [
      '#type' => 'textfield',
      '#title' => t('Artist Title'),
      '#default_value' => $config->get('ioc_artist_title'),
      '#description'  => 'Artist title to the registration page.',
      '#required' => TRUE,
    ];

    $form['ind_org_choice']['ioc_artist_text'] = [
      '#type' => 'text_format',
      '#title' => t('Artist Text'),
      '#default_value' => $config->get('ioc_artist_text.value'),
      '#description'  => 'Artist text to the registration page.',
      '#format' => $config->get('ioc_artist_text.format'),
      '#required' => TRUE,
    ];

    $form['ind_org_choice']['ioc_org_title'] = [
      '#type' => 'textfield',
      '#title' => t('Organization Title'),
      '#default_value' => $config->get('ioc_org_title'),
      '#description'  => 'Organization title to the registration page.',
      '#required' => TRUE,
    ];

    $form['ind_org_choice']['ioc_org_text'] = [
      '#type' => 'text_format',
      '#title' => t('Organization Text'),
      '#default_value' => $config->get('ioc_org_text.value'),
      '#description'  => 'Organization text to the registration page.',
      '#format' => $config->get('ioc_org_text.format'),
      '#required' => TRUE,
    ];

    // Dashboard Ind/Org Choice Text.
    $form['intersticial_form'] = [
      '#type' => 'details',
      '#title' => t('Inividual/Organization more information'),
    ];

    $form['intersticial_form']['if_intro_text'] = [
      '#type' => 'text_format',
      '#title' => t('Intro Text'),
      '#default_value' => $config->get('if_intro_text.value'),
      '#description'  => 'Introductory text to the more details page.',
      '#format' => $config->get('if_intro_text.format'),
      '#required' => TRUE,
    ];

    // Dashboard Tab.
    $form['dashboard'] = [
      '#type' => 'details',
      '#title' => t('Dashboard Tab'),
    ];

    // Funding resources.
    $form['dashboard']['funding_resources'] = [
      '#type' => 'fieldset',
      '#title' => t('Funding Resources'),
    ];

    $form['dashboard']['funding_resources']['funding_resources_docs'] = [
      '#type' => 'text_format',
      '#title' => t('Funding Resources'),
      '#default_value' => $config->get('funding_resources_docs.value'),
      '#description'  => 'Add any resources text desired for the dashboard page.',
      '#format' => $config->get('funding_resources_docs.format'),
      '#required' => TRUE,
    ];

    // About Tab.
    $form['about'] = [
      '#type' => 'details',
      '#title' => t('About Tab'),
    ];

    $form['about']['at_intro_text'] = [
      '#type' => 'textarea',
      '#title' => t('Intro Text'),
      '#default_value' => $config->get('at_intro_text'),
      '#description'  => 'Introductory text to the about tab.',
      '#required' => TRUE,
    ];

    // Work Tab.
    $form['work'] = [
      '#type' => 'details',
      '#title' => t('Work Tab'),
    ];

    $form['work']['wk_limit'] = [
      '#type' => 'number',
      '#title' => t('Work Limit'),
      '#default_value' => $config->get('wk_limit'),
      '#description'  => 'The number of works to limit each type to on the dashboard work page.',
      '#required' => TRUE,
      '#min'  => 1,
      '#max'  => 9,
    ];

    $form['work']['wk_add_image_text'] = [
      '#type' => 'textarea',
      '#title' => t('Image Add Intro Text'),
      '#default_value' => $config->get('wk_add_image_text'),
      '#description'  => 'Introductory text to the Image add page.',
      '#required' => TRUE,
    ];

    $form['work']['wk_add_video_text'] = [
      '#type' => 'textarea',
      '#title' => t('Video Add Intro Text'),
      '#default_value' => $config->get('wk_add_video_text'),
      '#description'  => 'Introductory text to the Video add page.',
      '#required' => TRUE,
    ];

    $form['work']['wk_add_audio_text'] = [
      '#type' => 'textarea',
      '#title' => t('Image Add Audio Text'),
      '#default_value' => $config->get('wk_add_audio_text'),
      '#description'  => 'Introductory text to the Audio add page.',
      '#required' => TRUE,
    ];

    $form['work']['wk_add_document_text'] = [
      '#type' => 'textarea',
      '#title' => t('Image Add Document Text'),
      '#default_value' => $config->get('wk_add_document_text'),
      '#description'  => 'Introductory text to the Document add page.',
      '#required' => TRUE,
    ];

    // Account Tab.
    $form['account'] = [
      '#type' => 'details',
      '#title' => t('Account Tab'),
    ];

    $form['account']['acct_intro_text'] = [
      '#type' => 'text_format',
      '#title' => t('Intro Text'),
      '#default_value' => $config->get('acct_intro_text.value'),
      '#description'  => 'Add intro text for the account page. This should include steps needed to remove account.',
      '#format' => $config->get('acct_intro_text.format'),
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
      ->set('ioc_intro_text', $form_state->getValue('ioc_intro_text'))
      ->set('ioc_artist_title', $form_state->getValue('ioc_artist_title'))
      ->set('ioc_artist_text', $form_state->getValue('ioc_artist_text'))
      ->set('ioc_org_title', $form_state->getValue('ioc_org_title'))
      ->set('ioc_org_text', $form_state->getValue('ioc_org_text'))
      ->set('if_intro_text', $form_state->getValue('if_intro_text'))
      ->set('at_intro_text', $form_state->getValue('at_intro_text'))
      ->set('funding_resources_docs', $form_state->getValue('funding_resources_docs'))
      ->set('wk_limit', $form_state->getValue('wk_limit'))
      ->set('acct_intro_text', $form_state->getValue('acct_intro_text'))
      ->set('wk_add_image_text', $form_state->getValue('wk_add_image_text'))
      ->set('wk_add_video_text', $form_state->getValue('wk_add_video_text'))
      ->set('wk_add_audio_text', $form_state->getValue('wk_add_audio_text'))
      ->set('wk_add_document_text', $form_state->getValue('wk_add_document_text'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
