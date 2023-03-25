<?php

namespace Drupal\certification_module\Plugin\QueueWorker;


use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Queue\QueueWorkerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\node\Entity\Node;

/**
 * A Manual Article Scrapper.
 *
 * @QueueWorker(
 *   id = "certification_worker",
 *   title = @Translation("Manual Article Scrapper"),
 * )
 */
class MyWorker extends QueueWorkerBase implements ContainerFactoryPluginInterface {

  public function __construct(array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
  {
    // TODO: Implement create() method.
    return new static($configuration, $plugin_id, $plugin_definition);
  }

//  /**
//   * Creates a new NewsArticleScrapperProcessorBase object.
//   *
//   * @param \Drupal\Core\Entity\EntityStorageInterface $paragraph_storage
//   *   The paragraph storage.
//   * @param \Drupal\Core\Entity\EntityStorageInterface $taxonomy_term_storage
//   *   The taxonomy term storage.
//   */
//  public function __construct(EntityStorageInterface $paragraph_storage, EntityStorageInterface $taxonomy_term_storage) {
//    $this->paragraphStorage = $paragraph_storage;
//    $this->taxonomyTermStorage = $taxonomy_term_storage;
//  }
//
//  /**
//   * {@inheritdoc}
//   */
//  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
//    return new static(
//      $container->get('entity_type.manager')->getStorage('paragraph'),
//      $container->get('entity_type.manager')->getStorage('taxonomy_term')
//    );
//  }

  public function processItem($data)
  {
    // TODO: Implement processItem() method.

    // Create a new node object.
    $node = Node::create([
      'type' => 'article', // Replace 'article' with the machine name of your content type.
      'title' => 'Your Node Title' . $data->nid,
      'body' => [
        'value' => 'Your Node Body',
        'format' => 'full_html', // Replace 'full_html' with the text format you want to use.
      ],
    ]);

    // Save the new node.
    $node->save();
  }
}
