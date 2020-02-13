<?php

namespace Drupal\custom_home\Controller;

use Drupal\block\Entity\Block;
use Drupal\Core\Block\BlockManagerInterface;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class HomepageController.
 *
 * @package Drupal\custom_home\Controller
 *   Return build homepage.
 */
class HomepageController extends ControllerBase {

  /**
   * The cache backend service.
   *
   * @var \Drupal\Core\Cache\CacheBackendInterface
   */
  protected $cacheBackend;

  /**
   * Constructs a new HomeController object.
   * /
   * public function __construct() {
   * $this->cacheBackend = $cache_backend;
   * }.*/
  /**
   * Public function __construct(CacheBackendInterface $cache_backend) {.
   */
  protected $blockManager;

  /**
   * {@inheritdoc}
   */
  public function __construct(BlockManagerInterface $block_manager) {
    $this->blockManager = $block_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.block')
    );
  }

  /**
   * @todo : clean and implement cache.
   * Homepage content function.
   *
   * @return array
   *   Array of elements composing page.
   */
  public function content() {
    // Get contact block.
    // @todo : check if it is not better to call plugin by 'use Drupal'.
    // $block_manager = \Drupal::service('plugin.manager.block');
    // $cache_backend = $this->prophesize(CacheBackendInterface::class);
    // $module_handler = $this->prophesize(ModuleHandlerInterface::class);
    // $this->logger = $this->prophesize(LoggerInterface::class);
    // Contact form block.
    // You can hard code configuration or you load from settings.
    $config_contact_form = [];
    $plugin_block_contact_form = $this->blockManager->createInstance('home_contact_block', $config_contact_form);
    // Some blocks might implement access check.
    $access_result_contact_form = $plugin_block_contact_form->access(\Drupal::currentUser());
    // Return empty render array if user doesn't have access.
    // $access_result can be boolean or an AccessResult class.
    if (is_object($access_result_contact_form) && $access_result_contact_form->isForbidden() || is_bool($access_result_contact_form) && !$access_result_contact_form) {
      // You might need to add some cache tags/contexts.
      // return [];.
      // @todo remove.
      $contact_form = '';
    }
    // In some cases, you need to add the cache tags/context depending on
    // the block implemention. As it's possible to add the cache tags and
    // contexts in the render method and in ::getCacheTags and .
    // ::getCacheContexts methods.
    $contact_form = $plugin_block_contact_form->build();
    // @todo : test it.
    /*$block = Block::load('home_contact_block');
    $contact_form = \Drupal::entityTypeManager()
      ->getViewBuilder('block')
      ->view($block);*/

    // Contact form text.
    // You can hard code configuration or you load from settings.
    $config_contact_text = [];
    $plugin_block_contact_text = $this->blockManager->createInstance('home_contact_block', $config_contact_text);
    // Some blocks might implement access check.
    $access_result_contact_text = $plugin_block_contact_text->access(\Drupal::currentUser());
    // Return empty render array if user doesn't have access.
    // $access_result can be boolean or an AccessResult class.
    if (is_object($access_result_contact_text) && $access_result_contact_text->isForbidden() || is_bool($access_result_contact_text) && !$access_result_contact_text) {
      // You might need to add some cache tags/contexts.
      return [];
    }
    // In some cases, you need to add the cache tags/context depending on
    // the block implemention. As it's possible to add the cache tags and
    // contexts in the render method and in ::getCacheTags and .
    // ::getCacheContexts methods.
    $contact_text = $plugin_block_contact_text->build();

    return [
      '#theme' => 'home_page',
      '#contact_form' => $contact_form,
      '#contact_text' => $contact_text,
    ];
  }

}
