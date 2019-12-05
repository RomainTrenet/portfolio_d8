<?php

namespace Drupal\custom_home\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\image\Entity\ImageStyle;

/**
 * Provides the main home block.
 *
 * @Block(
 *   id = "home_contact_block",
 *   admin_label = @Translation("Home contact block"),
 *   category = @Translation("Custom"),
 * )
 */
class HomeContactBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      '#title' => [
        '#markup' => NULL,
      ],
      'webform' => [
        '#type' => 'webform',
        '#webform' => 'contact',
      ],
    ];
  }

}
