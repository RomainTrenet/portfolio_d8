<?php

namespace Drupal\custom_home\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HomepageController.
 *
 * @package Drupal\custom_home\Controller
 *   Return build homepage.
 */
class HomepageController extends ControllerBase {

  /**
   * Homepage content function.
   * @return array
   *   Array of elements composing page.
   */
  public function content() {
    return [
      '#markup' => $this->t('Hello !'),
    ];
  }

}
