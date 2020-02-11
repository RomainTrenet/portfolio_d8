<?php

namespace Drupal\custom_tests\Controller;

use Drupal\Core\Controller\ControllerBase;

class TargetController extends ControllerBase {

  /**
   * Genetare content for Target page.
   *
   * @return array
   *   Data to render.
   */
  public function content() {
    $content = '<p>' . $this->t('Hello target page.') . '</p>';

    return [
      '#markup' => $content,
    ];
  }

}
