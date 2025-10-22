<?php

namespace Drupal\node_delete_redirect\Validate;

use Drupal\Core\Form\FormStateInterface;

/**
 * Class NodeDeleteRedirectElemPathValidate.
 *
 * @package Drupal\node_delete_redirect\Validate
 */
class NodeDeleteRedirectElemPathValidate {

  /**
   * Validates given element.
   *
   * @param array $element
   *   Element array.
   * @param \Drupal\Core\Form\FormStateInterface $formState
   *   Form State Interface.
   * @param array $form
   *   Form object.
   */
  public static function validate(array &$element, FormStateInterface $formState, array &$form) {
    $parents = $element['#parents'];

    // If parent element is enabled.
    if ($formState->getValue("{$parents[0]}")["{$parents[1]}"]['is_enabled']) {
      $value = $element['#value'];

      $tArgs = [
        '%value' => $value,
      ];

      // Skip empty fields.
      if (empty($value)) {
        $formState->setError(
          $element,
          t('The path should not be empty.')
        );
      }

      // Skip arrays.
      if (is_array($value)) {
        $formState->setError(
          $element,
          t('Array not allowed.')
        );
      }

      // Skip leading slash.
      if (isset($value[0]) && $value[0] != '/') {
        $formState->setError(
          $element,
          t('Path must start with leading slash.')
        );
      }

      // Skip <front>.
      if (isset($value[0]) && $value[0] == '<') {
        $formState->setError(
          $element,
          t('Tokens not allowed.')
        );
      }
      // Check if the path is a valid Drupal internal path.
      if (!\Drupal::pathValidator()->getUrlIfValid($value)) {
        $formState->setError(
          $element,
          t('The path %value is either invalid, or you do not have access to it.', $tArgs)
        );
      }
    }
  }

}
