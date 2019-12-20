<?php

namespace Drupal\custom_home\Plugin\Block;

use Drupal\Core\Block\BlockBase;
// use Drupal\image\Entity\ImageStyle;.

/**
 * Provides the main home block.
 *
 * @Block(
 *   id = "home_branding",
 *   admin_label = @Translation("Home branding"),
 *   category = @Translation("Custom"),
 * )
 */
class HomeBranding extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    // @todo : admin page for elements.
    $image_path = drupal_get_path('module', 'custom_home') . '/img/fond_degrade.jpg';
    $title = 'Développeur Drupal &<br>Intégrateur.';
    $ctas = '<a href="#" class="btn-main btn-white">CONTACT</a><a href="#" class="btn-second btn-white">Mon C.V.</a><br>';
    $ctas .= '<a href="#" class="btn-third">THIRD</a><a href="#" class="btn-fourth">Fourth.</a>';

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
