<?php

namespace Drupal\msac_profiles\Form;

use Drupal\node\Form\NodeDeleteForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Provides a form for deleting a work node.
 *
 * @internal
 */
class MsacProfilesWorkNodeDeleteForm extends NodeDeleteForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);

    /** @var \Drupal\Core\Entity\ContentEntityInterface $entity */
    unset($form['description']['#markup']);

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    /** @var \Drupal\Core\Entity\ContentEntityInterface $entity */
    $entity = $this->getEntity();
    $message = $this->getDeletionMessage();

    $entity->delete();
    $url = Url::fromUri('internal:/profile/work');
    $form_state->setRedirectUrl($url);

    $this->messenger()->addStatus($message);
    $this->logDeletionMessage();
  }

}
