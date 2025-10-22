<?php

namespace Drupal\msac_profiles\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\user\RegisterForm;
use Drupal\node\Entity\Node;

/**
 * Form handler for the custom registration form.
 *
 * @internal
 */
class MsacProfilesRegisterForm extends RegisterForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {

    $form = parent::form($form, $form_state);

    // Create user type choice.
    $user_type = [
      'ind' => t('Artist/Performer'),
      'org' => t('Organization/Business'),
    ];
    $form['user_type'] = [
      '#type' => 'radios',
      '#title' => t('I am a...'),
      '#options' => $user_type,
      '#description' => t('Please choose if you wish to register as an individual artist, or an organization. This cannot be changed easily, so be sure to choose the correct classification.'),
      '#default_value' => 'ind',
      '#required' => TRUE,
    ];

    // Create terms and conditions checkbox.
    $form['terms'] = [
      '#type' => 'checkbox',
      '#title' => t('I accept the <a href="/terms" target="_blank">terms and conditions</a> of use.'),
      '#required' => TRUE,
    ];

    // Hide admin fields.
    unset($form['field_legacy_id']);
    unset($form['field_artist_id']);

    if (\Drupal::moduleHandler()->moduleExists('honeypot')) {
      \Drupal::service('honeypot')->addFormProtection($form, $form_state, ['honeypot', 'time_restriction']);
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  protected function actions(array $form, FormStateInterface $form_state) {
    $element = parent::actions($form, $form_state);
    $element['submit']['#value'] = $this->t('Sign Up');
    return $element;
  }

  /**
   * Custom functionality to save a user, then trigger node creation of an Artist or Organization.
   */
  public function save(array $form, FormStateInterface $form_state) {
    $account = $this->entity;
    $pass = $account->getPassword();

    // Add role of artist to new accounts.
    $account->addRole('artist');

    // Save has no return value so this cannot be tested.
    // Assume save has gone through correctly.
    $account->save();

    $form_state->set('user', $account);
    $form_state->setValue('uid', $account->id());

    // Get submitted values.
    $user_type = $form_state->getValue('user_type');
    $user_id = $account->id();

    $this->logger('user')->notice('New user: %name %email.', ['%name' => $form_state->getValue('name'), '%email' => '<' . $form_state->getValue('mail') . '>', 'type' => $account->toLink($this->t('Edit'), 'edit-form')->toString()]);

    // Add plain text password into user account to generate mail tokens.
    $account->password = $pass;

    // No email verification required; log in user immediately.
    if (!\Drupal::config('user.settings')->get('verify_mail') && $account->isActive()) {

      user_login_finalize($account);

      // Create artist or organization related to user.
      $this->createArtistOrOrganization($user_type, $user_id);

      // Redirect to interstatial form.
      $form_state->setRedirect('msac_profiles.msac_profile_interstatial');

    }
    // Something is wrong.
    else {
      $this->messenger()->addStatus($this->t('Sorry, there was an error creating your account.'));
      $form_state->setRedirect('<front>');
    }
  }

  /**
   * Creates a Node that is related to the User.
   */
  public function createArtistOrOrganization($user_type, $user_id) {

    // Choose content type Artist, or Organization, depending on choice.
    if ($user_type == 'ind') {
      $node_type = 'artist';
      $node_temp_title = 'Temporary artist profile for user #' . $user_id;
    }
    else {
      $node_type = 'organization';
      $node_temp_title = 'Temporary organization profile for user #' . $user_id;
    }

    // Create the corresponding Artist, or Organization Node.
    // Add temporary title, which will be overwritten later.
    $node = Node::create([
      'type' => $node_type,
      'title' => $node_temp_title,
      'uid' => $user_id,
    ]);
    $node->setPublished(FALSE);
    $node->save();

  }

}
