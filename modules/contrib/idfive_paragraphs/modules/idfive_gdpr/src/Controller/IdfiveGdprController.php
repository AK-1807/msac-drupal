<?php

namespace Drupal\idfive_gdpr\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Custom controller for profiles pages, and registration workflow.
 */
class IdfiveGdprController extends ControllerBase {

  public $gdprSettings;

  /**
   * Construct global vars.
   */
  public function __construct() {
    $this->gdprSettings = $this->getGdprSettings();
  }

  /**
   * Privacy Policy Page.
   */
  public function privacyPolicyPage(Request $request) {
    // Build render array.
    $intro = 'Defines the privacy policy for this website.';
    $build = $this->buildMetaAndSettings($intro);
    $build['#theme'] = 'idfive_gdpr_pp_page';
    return $build;
  }

  /**
   * Make all module settings available to insert into templates.
   */
  public function getGdprSettings() {
    $settings = \Drupal::config('idfive_gdpr.settings');
    return $settings->getOriginal();
  }

  /**
   * Build render metatags and other info for pages.
   */
  public function buildMetaAndSettings($description) {
    $description = [
      '#tag' => 'meta',
      '#attributes' => [
        'name' => 'description',
        'content' => $description,
      ],
    ];
    $build['#attached']['html_head'][] = [$description, 'description'];
    $build['#gdpr_settings'] = $this->gdprSettings;
    return $build;
  }

}
