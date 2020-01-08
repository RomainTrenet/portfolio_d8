<?php

namespace Drupal\custom_home\Controller;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Block\BlockManager;

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
  public function __construct() {
    $this->cacheBackend = $cache_backend;
  }*/
  //public function __construct(CacheBackendInterface $cache_backend) {.

  /**
   * Homepage content function.
   * @return array
   *   Array of elements composing page.
   */
  public function content() {
    // Get contact block.
    // @todo : check if it is not better to call plugin by 'use Drupal'.
    // $block_manager = \Drupal::service('plugin.manager.block');
    //$cache_backend = $this->prophesize(CacheBackendInterface::class);
    //$module_handler = $this->prophesize(ModuleHandlerInterface::class);
    //$this->logger = $this->prophesize(LoggerInterface::class);
    /*
    $this->blockManager = new BlockManager(new \ArrayObject(), $this->cache_backend);//, $module_handler->reveal(), $this->logger->reveal());
    $block_manager = new BlockManager();
    $config = [];
    $plugin_block = $block_manager->createInstance('home_contact_block', $config);
    $contact_form = $plugin_block->build();
    */

    $contact_form = 'truc';

    $contact_text = 'coucou';

    return [
      '#theme' => 'home_page',
      '#contact_form' => $contact_form,
      '#contact_text' => $contact_text,
    ];
  }

}
