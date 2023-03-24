<?php

namespace Drupal\certification_module\Plugin\QueueWorker;


use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Queue\QueueWorkerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * A Manual Article Scrapper.
 *
 * @QueueWorker(
 *   id = "manual_article_scrapper",
 *   title = @Translation("Manual Article Scrapper"),
 * )
 */
class MyWorker extends QueueWorkerBase implements ContainerFactoryPluginInterface {


  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
  {
    // TODO: Implement create() method.
  }

  public function processItem($data)
  {
    // TODO: Implement processItem() method.
  }
}
