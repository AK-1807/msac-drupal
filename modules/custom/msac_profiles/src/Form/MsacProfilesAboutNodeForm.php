<?php

namespace Drupal\msac_profiles\Form;

use Drupal\node\NodeForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Custom form handler for the node edit forms.
 *
 * @internal
 */
class MsacProfilesAboutNodeForm extends NodeForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {

    /**
     * @var \Drupal\node\NodeInterface $node
     */
    $node = $this->entity;
    $form = parent::form($form, $form_state);

    if (\Drupal::moduleHandler()->moduleExists('honeypot')) {
      \Drupal::service('honeypot')->addFormProtection($form, $form_state, ['honeypot', 'time_restriction']);
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {

    parent::save($form, $form_state);

    $node = $this->entity;

    if ($node->id()) {
      $form_state->setValue('nid', $node->id());
      $form_state->set('nid', $node->id());

      $url = Url::fromUri('internal:/profile/about');
      $form_state->setRedirectUrl($url);

      // Remove the preview entry from the temp store, if any.
      $store = $this->tempStoreFactory->get('node_preview');
      $store->delete($node->uuid());
    }
    else {
      // In the unlikely case something went wrong on save, the node will be
      // rebuilt and node form redisplayed the same way as in preview.
      $this->messenger()->addError($this->t('The post could not be saved.'));
      $form_state->setRebuild();
    }
    return $form_state;
  }

}
