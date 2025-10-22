<?php

namespace Drupal\msac_profiles\Controller;

use Drupal\user\Form\UserLoginForm;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\node\Entity\Node;
use Drupal\image\Entity\ImageStyle;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Custom controller for profiles pages, and registration workflow.
 */
class MsacProfilesController extends ControllerBase {

  public $profileSettings;
  public $user;
  public $userId;
  public $userEntity;
  public $loggedIn;
  public $relatedNode;
  public $relatedNodeEntity;
  public $profile;

  /**
   * Construct global vars.
   */
  public function __construct() {
    $this->profileSettings = $this->getProfileSettings();
    $this->user = \Drupal::currentUser();
    $this->userId = $this->user->id();
    $this->userEntity = \Drupal::entityTypeManager()->getStorage('user')->load($this->userId);
    $this->loggedIn = $this->user->isAuthenticated();

    if ($this->loggedIn) {
      $this->relatedNode = $this->getUserNodes($this->userId);
      if ($this->relatedNode) {
        $this->relatedNodeEntity = Node::load($this->relatedNode->id());
        $this->relatedNodeEntityRevision = $this->getMostRecentNodeRevision($this->relatedNode->id());
        $this->profile = $this->getProfile($this->relatedNodeEntity);
      }
      else {
        $response = new RedirectResponse('/');
        $response->send();
        return;
      }
    }
  }

  /**
   * Login/register.
   */
  public function login(Request $request) {

    $this->redirectToDashboardCheck();
    $registration_form = NULL;
    $login_form = NULL;
    // Load the login form.
    $login_form = \Drupal::formBuilder()->getForm(UserLoginForm::class);
    // Load a custom new user registration form.
    $registration_form = [];
    $entity = \Drupal::entityTypeManager()
      ->getStorage('user')
      ->create([]);
    $formObject = \Drupal::entityTypeManager()
      ->getFormObject('user', 'msac_profiles_register')
      ->setEntity($entity);
    $registration_form['form'] = \Drupal::formBuilder()->getForm($formObject);
    // Build render array.
    $intro = 'Register or log in to view profile.';
    $build = $this->buildMetaAndSettings($intro);
    $build['#theme'] = 'msac_profiles_login';
    $build['#registration_form'] = $registration_form;
    $build['#login_form'] = $login_form;
    return $build;
  }

  /**
   * Interstatial.
   */
  public function interstatial(Request $request) {
    $truncated_form = NULL;
    if ($this->relatedNode !== NULL) {
      $related_node_title = $this->relatedNode->get('title')->value;
      // If node title contains "Temporary".
      if (strpos($related_node_title, 'Temporary') !== FALSE) {
        // Load form display of truncated ind/org if temporary.
        $this->relatedNodeEntity->setTitle('');
        $truncated_form = [];
        $formObject = \Drupal::entityTypeManager()
          ->getFormObject('node', 'msac_profiles_truncated_ind_org_node')
          ->setEntity($this->relatedNodeEntity);
        $truncated_form['form'] = \Drupal::formBuilder()->getForm($formObject);
      }
    }
    // Build render array.
    $intro = 'A few more things to fill out.';
    $build = $this->buildMetaAndSettings($intro);
    $build['#theme'] = 'msac_profiles_interstatial';
    $build['#truncated_form'] = $truncated_form;
    return $build;
  }

  /**
   * Dashboard.
   */
  public function dashboard(Request $request) {
    $this->redirectToInterstatialCheck();
    // Build render array.
    $intro = 'My dashboard.';
    $build = $this->buildMetaAndSettings($intro);
    $build['#theme'] = 'msac_profiles_dashboard';
    $build['#logged_in'] = $this->loggedIn;
    $build['#profile'] = $this->profile;
    return $build;
  }

  /**
   * About.
   */
  public function about(Request $request) {
    $about_form = NULL;
    // Load artist/org edit form for about.
    $formObject = \Drupal::entityTypeManager()
      ->getFormObject('node', 'msac_profiles_about_node')
      ->setEntity($this->relatedNodeEntityRevision);
    $about_form['form'] = \Drupal::formBuilder()->getForm($formObject);
    // Check current status.
    $this->setAboutStatusMessages();
    // Build render array.
    $intro = 'My profile information.';
    $build = $this->buildMetaAndSettings($intro);
    $build['#theme'] = 'msac_profiles_about';
    $build['#about_form'] = $about_form;
    $build['#profile'] = $this->profile;
    return $build;
  }

  /**
   * Work.
   */
  public function work(Request $request) {
    $this->checkWork($this->userId);
    $work = NULL;
    // Load views of current work.
    $work['image']['results'] = views_embed_view('dashboard_work', 'dashboard_block_image', $this->userId);
    $work['image']['msac_works_count'] = count(views_get_view_result('dashboard_work', 'dashboard_block_image', $this->userId));
    $work['video']['results'] = views_embed_view('dashboard_work', 'dashboard_block_video', $this->userId);
    $work['video']['msac_works_count'] = count(views_get_view_result('dashboard_work', 'dashboard_block_video', $this->userId));
    $work['audio']['results'] = views_embed_view('dashboard_work', 'dashboard_block_audio', $this->userId);
    $work['audio']['msac_works_count'] = count(views_get_view_result('dashboard_work', 'dashboard_block_audio', $this->userId));
    $work['document']['results'] = views_embed_view('dashboard_work', 'dashboard_block_document', $this->userId);
    $work['document']['msac_works_count'] = count(views_get_view_result('dashboard_work', 'dashboard_block_document', $this->userId));
    // Build render array.
    $intro = 'View, and add works.';
    $build = $this->buildMetaAndSettings($intro);
    $build['#theme'] = 'msac_profiles_work';
    $build['#work'] = $work;
    $build['#profile'] = $this->profile;
    return $build;
  }

  /**
   * Work Add.
   */
  public function workAdd($work_type, Request $request) {
    $work_form = NULL;
    $work_title = 'Add new ' . $work_type;
    $work_intro = $this->profileSettings['wk_add_' . $work_type . '_text'];
    // Load work add form.
    $work_node = \Drupal::entityTypeManager()
      ->getStorage('node')
      ->create(['type' => 'work']);
    $formObject = \Drupal::entityTypeManager()
      ->getFormObject('node', 'msac_profiles_work_node')
      ->setEntity($work_node);
    // Pass related node, and work type, to the form.
    $work_form['form'] = \Drupal::formBuilder()->getForm($formObject, $this->relatedNodeEntity, $this->profile, $work_type);
    // Build render array.
    $build = $this->buildMetaAndSettings($work_intro);
    $build['#theme'] = 'msac_profiles_work_add_edit';
    $build['#work_title'] = $work_title;
    $build['#work_intro'] = $work_intro;
    $build['#work_form'] = $work_form;
    $build['#profile'] = $this->profile;
    return $build;
  }

  /**
   * Work Edit.
   */
  public function workEdit($node, Request $request) {
    // Check access here, as via routing was not working correctly, due to revisions.
    $access_check = $node->access('update', $this->userEntity);
    if ($access_check == TRUE) {
      $work_form = NULL;
      $work_type = $node->get('field_work_type')->value;
      $work_title = 'Edit ' . $node->get('title')->value;
      $latest_revision = $this->getMostRecentNodeRevision($node->id());
      $formObject = \Drupal::entityTypeManager()
        ->getFormObject('node', 'msac_profiles_work_node')
        ->setEntity($latest_revision);
      $work_form['form'] = \Drupal::formBuilder()->getForm($formObject, $this->relatedNodeEntity, $this->profile, $work_type);
      $this->setWorkStatusMessages($node, $latest_revision);
      // Build render array.
      $intro = 'Add new artist works.';
      $build = $this->buildMetaAndSettings($intro);
      $build['#theme'] = 'msac_profiles_work_add_edit';
      $build['#work_title'] = $work_title;
      $build['#work_form'] = $work_form;
      $build['#profile'] = $this->profile;
      return $build;
    }
    else {
      throw new AccessDeniedHttpException();
    }
  }

  /**
   * Work Delete.
   */
  public function workDelete($node, Request $request) {
    // Check access here, as via routing was not working correctly, due to revisions.
    $access_check = $node->access('delete', $this->userEntity);
    if ($access_check == TRUE) {
      $work_form = NULL;
      $work_intro = '<p>This action cannot be undone, and this work (' . $node->get('title')->value . ') will be deleted permanently</p>';
      $work_title = 'Delete ' . $node->get('title')->value;
      $latest_revision = $this->getMostRecentNodeRevision($node->id());
      $formObject = \Drupal::entityTypeManager()
        ->getFormObject('node', 'msac_profiles_work_node_delete')
        ->setEntity($latest_revision);
      $work_form['form'] = \Drupal::formBuilder()->getForm($formObject);
      // $this->setWorkStatusMessages($node, $latest_revision);
      // Build render array.
      $intro = 'Delete artist works.';
      $build = $this->buildMetaAndSettings($intro);
      $build['#theme'] = 'msac_profiles_work_add_edit';
      $build['#work_title'] = $work_title;
      $build['#work_intro'] = $work_intro;
      $build['#work_form'] = $work_form;
      $build['#profile'] = $this->profile;
      return $build;
    }
    else {
      throw new AccessDeniedHttpException();
    }
  }

  /**
   * Account.
   */
  public function account(Request $request) {
    // Load custom user edit form.
    $formObject = \Drupal::entityTypeManager()
      ->getFormObject('user', 'msac_profiles_account')
      ->setEntity($this->userEntity);
    $user_form = \Drupal::formBuilder()->getForm($formObject);
    return [
      '#theme' => 'msac_profiles_account',
      '#profile_settings' => $this->profileSettings,
      '#user_form' => $user_form,
      '#profile' => $this->profile,
    ];
  }

  /**
   * Return artist/org node associated with a user.
   */
  public function getUserNodes($user_id) {
    $storage = \Drupal::getContainer()->get('entity_type.manager')->getStorage('node');
    $nids = $storage->getQuery();
    $nids = $nids->condition('type', ['artist', 'organization'], 'IN')
      ->accessCheck(true)
      ->condition('uid', $user_id)
      ->sort('title')
      ->execute();
    $result = $storage->loadMultiple($nids);
    $result = reset($result);
    return $result;
  }

  /**
   * Return artist/org profile node information for dashboard.
   */
  public function getProfile($entity) {
    $profile = [];
    $profile['name'] = $entity->get('title')->value;
    $profile['type'] = $entity->bundle();
    $profile['url'] = \Drupal::request()->getSchemeAndHttpHost() . \Drupal::service('path_alias.manager')->getAliasByPath('/node/' . $entity->id());
    if ($profile['type'] == 'artist') {
      if ($entity->field_artist_photo != NULL && !$entity->field_artist_photo->isEmpty()) {
        $profile['thumbnail'] = ImageStyle::load('optimized')->buildUrl($entity->field_artist_photo->entity->getFileUri());
      }
      if ($entity->field_artist_cover != NULL && !$entity->field_artist_cover->isEmpty()) {
        $profile['hero'] = ImageStyle::load('optimized')->buildUrl($entity->field_artist_cover->entity->getFileUri());
      }
    }
    elseif ($profile['type'] == 'organization') {
      if ($entity->field_org_image != NULL && !$entity->field_org_image->isEmpty()) {
        $profile['thumbnail'] = ImageStyle::load('optimized')->buildUrl($entity->field_org_image->entity->getFileUri());
      }
      if ($entity->field_org_cover != NULL && !$entity->field_org_cover->isEmpty()) {
        $profile['hero'] = ImageStyle::load('optimized')->buildUrl($entity->field_org_cover->entity->getFileUri());
      }
    }
    if ($entity->field_county != NULL && !$entity->field_county->isEmpty()) {
      $county_entity = $entity->field_county->entity;
      $profile['county'] = $this->getCouncil($county_entity);
    }
    $profile['funding'] = $this->getFunding($profile['type']);
    return $profile;
  }

  /**
   * Return grant nodes associated with a user type for dashboard.
   */
  public function getFunding($related_node_type) {
    $audience = 'artists';
    if ($related_node_type == 'organization') {
      $audience = 'organizations';
    }
    $storage = \Drupal::getContainer()->get('entity_type.manager')->getStorage('node');
    $nids = $storage->getQuery();
    $nids = $nids->condition('type', ['grant'], 'IN')
      ->accessCheck(true)
      ->condition('status', 1)
      ->condition('field_grant_audience', $audience)
      ->sort('title')
      ->range(0, 5)
      ->execute();
    $result = $storage->loadMultiple($nids);
    $funding = [];
    foreach ($result as $key => $grant_entity) {
      $funding[$key]['title'] = $grant_entity->get('title')->value;
      $funding[$key]['url'] = \Drupal::request()->getSchemeAndHttpHost() . \Drupal::service('path_alias.manager')->getAliasByPath('/node/' . $grant_entity->id());
      $funding[$key]['rolling_deadline'] = $grant_entity->get('field_grant_rolling_deadline')->value;
      $funding[$key]['deadline'] = $grant_entity->get('field_grant_ql_deadline')->value;
      $funding[$key]['application_closed'] = $grant_entity->get('field_grant_application_closed')->value;
    }
    return $funding;
  }

  /**
   * Check work to see if any are in need of approval.
   */
  public function checkWork($user_id) {
    $storage = \Drupal::getContainer()->get('entity_type.manager')->getStorage('node');
    $nids = $storage->getQuery();
    $nids = $nids->condition('type', ['work'], 'IN')
      ->accessCheck(true)
      ->condition('uid', $user_id)
      ->sort('title')
      ->execute();
    $result = $storage->loadMultiple($nids);
    $pending = NULL;
    $message = 'Some of your work has updates that are pending MSAC approval.';
    foreach ($result as $key => $work_entity) {
      $latest_revision = $this->getMostRecentNodeRevision($work_entity->id());
      if ($work_entity->isPublished()) {
        if ($work_entity->vid->value !== $latest_revision->vid->value) {
          $pending = TRUE;
        }
      }
      else {
        $pending = TRUE;
      }
    }
    if ($pending == TRUE) {
      \Drupal::messenger()->addWarning($message);
    }
  }

  /**
   * Return artist/org county info for dashboard.
   */
  public function getCouncil($county_entity) {
    if ($county_entity == NULL) {
      return;
    }
    $county_info = [];
    $county_info['county_name'] = $county_entity->get('name')->value;
    $county_info['org_name'] = $county_entity->get('field_cac_name')->value;
    $county_info['email'] = $county_entity->get('field_cac_email')->value;
    $county_info['phone'] = $county_entity->get('field_cac_phone')->value;
    if ($county_entity->field_cac_website != NULL && !$county_entity->field_cac_website->isEmpty()) {
      $county_info['website'] = $county_entity->get('field_cac_website')->first()->getValue();
    }
    if ($county_entity->field_cac_address != NULL && !$county_entity->field_cac_address->isEmpty()) {
      $county_info['address'] = $county_entity->get('field_cac_address')->first()->getValue();
    }
    return $county_info;
  }

  /**
   * Make all module settings available to insert into dashboard templates.
   */
  public function getProfileSettings() {
    $settings = \Drupal::config('msac_profiles.settings');
    return $settings->getOriginal();
  }

  /**
   * Set status message as to revisions/publishing/etc for profiles.
   */
  public function setAboutStatusMessages() {
    if ($this->relatedNodeEntity->isPublished()) {
      if ($this->relatedNodeEntity->vid->value !== $this->relatedNodeEntityRevision->vid->value) {
        $message = 'Your profile updates are pending MSAC approval.';
      }
    }
    else {
      $message = 'Your profile is pending MSAC approval.';
    }
    if (isset($message)) {
      \Drupal::messenger()->addWarning($message);
    }
  }

  /**
   * Set status message as to revisions/publishing/etc for work.
   */
  public function setWorkStatusMessages($published, $revision) {
    if ($published->isPublished()) {
      if ($published->vid->value !== $revision->vid->value) {
        $message = 'Your work updates are pending MSAC approval.';
      }
    }
    else {
      $message = 'Your work is pending MSAC approval.';
    }
    if (isset($message)) {
      \Drupal::messenger()->addWarning($message);
    }
  }

  /**
   * Get current node revision.
   */
  public function getMostRecentNodeRevision($nid) {
    $rid = \Drupal::entityTypeManager()
      ->getStorage('node')
      ->getLatestRevisionId($nid);
    $node = \Drupal::entityTypeManager()
      ->getStorage('node')
      ->loadRevision($rid);
    return $node;
  }

  /**
   * Check to see user is logged in, if so, forward from login to dashboard.
   */
  public function redirectToDashboardCheck() {
    if ($this->loggedIn == 1) {
      $url = '/profile/dashboard';
      $response = new RedirectResponse($url);
      $response->send();
      return;
    }
  }

  /**
   * Check to see user is temp, if so, go to interstatial.
   */
  public function redirectToInterstatialCheck() {
    if ($this->relatedNode) {
      $related_node_title = $this->relatedNode->get('title')->value;
      // If node title contains "Temporary".
      if (strpos($related_node_title, 'Temporary') !== FALSE) {
        $url = '/profile/additional_questions';
        $response = new RedirectResponse($url);
        $response->send();
        return;
      }
    }
  }

  /**
   * Build render metatags.
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
    $build['#profile_settings'] = $this->profileSettings;
    return $build;
  }

}
