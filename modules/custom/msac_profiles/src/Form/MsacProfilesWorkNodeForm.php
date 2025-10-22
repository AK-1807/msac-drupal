<?php

namespace Drupal\msac_profiles\Form;

use Drupal\node\NodeForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Custom form handler for the work node edit forms.
 *
 * @internal
 */
class MsacProfilesWorkNodeForm extends NodeForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {

    /**
     * @var \Drupal\node\NodeInterface $node
     */
    $node = $this->entity;
    $form = parent::form($form, $form_state);
    // Hide some fields.
    // $form['revision_information']['#access'] = FALSE;
    // Get passed in profile to set the owner, if present, then hide field.
    if (isset($form_state->getBuildInfo()['args'][0])) {
      $profile = $form_state->getBuildInfo()['args'][0];
      $form['field_work_owner']['widget'][0]['target_id']['#default_value'] = $profile;
    }
    $form['field_work_owner']['#access'] = FALSE;

    // Get passed artist/org if set. Set artist field to artist name if type is artist.
    if (isset($form_state->getBuildInfo()['args'][1])) {
      $profile_info = $form_state->getBuildInfo()['args'][1];
      if ($profile_info['type'] == 'artist') {
        $form['field_work_artist_name']['widget'][0]['value']['#default_value'] = $profile_info['name'];
        $form['field_work_artist_name']['#disabled'] = TRUE;
      }
    }

    // Get passed in work type, if present, then hide field.
    if (isset($form_state->getBuildInfo()['args'][2])) {
      $type = $form_state->getBuildInfo()['args'][2];
      $form['field_work_type']['widget']['#default_value'] = $type;
      $form['#attributes']['class'][] = 'msac_profiles-work-create-edit--' . $type;
      $form['field_work_type']['#disabled'] = TRUE;

      // Alterations based on type.
      switch ($type) {
        case 'image':
          // Alterations for image.
          $form['title']['widget'][0]['value']['#title'] = t("Title of Piece/Name of Photo");
          $form['field_work_description']['widget'][0]['value']['#title'] = t("Description of Piece/Photo");
          break;

        case 'video':
          // Alterations for video.
          break;

        case 'audio':
          // Alterations for audio.
          break;

        case 'document':
          // Alterations for document.
          break;
      }

      $form['field_work_artistic_categories']['widget']['#title'] = t("Type of Art");
    }

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

      $url = Url::fromUri('internal:/profile/work');
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
  }

}
