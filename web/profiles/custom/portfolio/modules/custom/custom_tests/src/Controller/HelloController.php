<?php

namespace Drupal\custom_tests\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  /**
   * Genetare content for Hello page.
   *
   * @return array
   *   Data to render.
   */
  public function content() {
    $name = $this->currentUser()->getAccountName();
    $content = '<p>' . $this->t('Hello !') . '</p>';
    $content .= '<p>' . $this->t('You are on page Hello.') . '</p>';
    $content .= '<p>' . $this->t('You name is') . ' ' . $name . '.</p>';

    return [
      '#markup' => $content,
    ];
  }

}
