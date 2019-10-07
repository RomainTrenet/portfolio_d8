<?php

namespace Drupal\custom_home\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\image\Entity\ImageStyle;

/**
 * Provides the main home block.
 *
 * @Block(
 *   id = "home_main_block",
 *   admin_label = @Translation("Home main block"),
 *   category = @Translation("Custom"),
 * )
 */
class HomeMainBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // @todo : admin page for elements.
    $image_path = drupal_get_path('module', 'custom_home') . '/img/fond_degrade.jpg';
    $title = 'Développeur Drupal &<br>Intégrateur';

    return [
      '#theme' => 'home_main',
      '#title' => [
        '#markup' => $title,
        '#allowed_tags' => ['br'],
      ],
      '#subtitle' => 'Romain Trenet',
      '#cta' => 'mon cv',
      '#background_image' => $image_path,
    ];
  }

}
