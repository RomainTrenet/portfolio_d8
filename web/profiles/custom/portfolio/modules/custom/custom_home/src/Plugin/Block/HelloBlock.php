<?php

namespace Drupal\custom_home\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "home_main_block",
 *   admin_label = @Translation("Home main block"),
 *   category = @Translation("Custom"),
 * )
 */
class HelloBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}
