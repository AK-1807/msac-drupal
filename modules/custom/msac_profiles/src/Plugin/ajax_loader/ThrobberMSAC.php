<?php

namespace Drupal\msac_profiles\Plugin\ajax_loader;

use Drupal\ajax_loader\ThrobberPluginBase;

/**
 * Class ThrobberMSAC.
 *
 * @Throbber(
 *   id = "throbber_msac",
 *   label = @Translation("MSAC")
 * )
 */
class ThrobberMSAC extends ThrobberPluginBase {

  /**
   * Function to set markup.
   *
   * @inheritdoc
   */
  protected function setMarkup() {
    return '<div class="msac-loading-spinner">
      <div role="presentation"></div>
      <div role="presentation"></div>
      <div role="presentation"></div>
      <div role="presentation"></div>
    </div>';
  }

  /**
   * Function to set css file.
   *
   * @inheritdoc
   */
  protected function setCssFile() {
    return $this->path . '/css/cube-grid.css';
  }

}
