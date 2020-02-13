<?php

namespace Drupal\custom_home\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides the home contact text block.
 *
 * @Block(
 *   id = "home_contact_text",
 *   admin_label = @Translation("Home contact text"),
 *   category = @Translation("Custom"),
 * )
 */
class HomeContactText extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    // @todo : admin page for elements.
    $title = 'Mon title';
    $ctas = 'Mon CTA';

    return [
      '#theme' => 'home_branding',
      '#title' => FALSE,
      '#main_title' => [
        '#markup' => $title,
        '#allowed_tags' => ['br'],
      ],
      '#subtitle' => 'Romain Trenet',
      '#cta' => [
        '#markup' => $ctas,
        '#allowed_tags' => ['a'],
      ],
      '#background_image' => $image_path,
    ];
  }

}
