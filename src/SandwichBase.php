<?php

namespace Drupal\workshop_plugin;

use Drupal\Component\Plugin\PluginBase;

/**
 * A base class to help developers implement their own sandwich plugins.
 *
 * This is a helper class which makes it easier for other developers to
 * implement sandwich plugins in their own modules. In SandwichBase we provide
 * some generic methods for handling tasks that are common to pretty much all
 * sandwich plugins. Thereby reducing the amount of boilerplate code required to
 * implement a sandwich plugin.
 *
 * In this case both the description and calories properties can be read from
 * the @Sandwich annotation. In most cases it is probably fine to just use that
 * value without any additional processing. However, if an individual plugin
 * needed to provide special handling around either of these things it could
 * just override the method in that class definition for that plugin.
 *
 * We intentionally declare our base class as abstract, and don't implement the
 * order() method required by \Drupal\plugin_type_example\SandwichInterface.
 * This way even if they are using our base class, developers will always be
 * required to define an order() method for their custom sandwich type.
 *
 * @see \Drupal\workshop_plugin\Annotation\Sandwich
 * @see \Drupal\workshop_plugin\SandwichInterface
 */
abstract class SandwichBase extends PluginBase implements SandwichInterface {



  public function hard_percent() {
    return NULL;
  }

  public function normal_percent() {
    return NULL;
  }


}
