<?php

namespace Drupal\workshop_plugin\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\workshop_plugin\SandwichPluginManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller for our example pages.
 */
class PluginTypeExampleController extends ControllerBase {

  /**
   * The sandwich plugin manager.
   *
   * We use this to get all of the sandwich plugins.
   *
   * @var \Drupal\plugin_type_example\SandwichPluginManager
   */
  protected $sandwichManager;

  /**
   * Constructor.
   *
   * @param \Drupal\plugin_type_example\SandwichPluginManager $sandwich_manager
   *   The sandwich plugin manager service. We're injecting this service so that
   *   we can use it to access the sandwich plugins.
   */
  public function __construct(SandwichPluginManager $sandwich_manager) {
    $this->sandwichManager = $sandwich_manager;
  }

  /**
   * Displays a page with an overview of our plugin type and plugins.
   *
   * Lists all the Sandwich plugin definitions by using methods on the
   * \Drupal\plugin_type_example\SandwichPluginManager class. Lists out the
   * description for each plugin found by invoking methods defined on the
   * plugins themselves. You can find the plugins we have defined in the
   * \Drupal\plugin_type_example\Plugin\Sandwich namespace.
   *
   * @return array
   *   Render API array with content for the page at
   *   /examples/plugin_type_example.
   */
  public function description() {
    $build = [];

    $sandwich_plugin_definitions = $this->sandwichManager->getDefinitions();



    // To get an instance of a plugin, we call createInstance() on the plugin
    // manager, passing the ID of the plugin we want to load. Let's output a
    // list of the plugins by loading an instance of each plugin definition and
    // collecting the description from each.
    $items = [];
    // The array of plugin definitions is keyed by plugin id, so we can just use
    // that to load our plugin instances.
    foreach ($sandwich_plugin_definitions as $plugin_id => $sandwich_plugin_definition) {
      // We now have a plugin instance. From here on it can be treated just as
      // any other object; have its properties examined, methods called, etc.
      $plugin = $this->sandwichManager->createInstance($plugin_id, ['of' => 'configuration values']);
      $items[] = $plugin->hard_percent();
      $items[] = $plugin->normal_percent();
    }

    $build['plugins'] = [
      '#theme' => 'item_list',
      '#title' => 'Sandwich plugins',
      '#items' => $items,
    ];

    return $build;
  }

  /**
   * {@inheritdoc}
   *
   * Override the parent method so that we can inject our sandwich plugin
   * manager service into the controller.
   *
   * For more about how dependency injection works read
   * https://www.drupal.org/node/2133171
   *
   * @see container
   */
  public static function create(ContainerInterface $container) {
    // Inject the plugin.manager.sandwich service that represents our plugin
    // manager as defined in the plugin_type_example.services.yml file.
    return new static($container->get('plugin.manager.sandwich'));
  }

}
