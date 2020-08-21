<?php

namespace Drupal\workshop_plugin;

/**
 * An interface for all Sandwich type plugins.
 *
 * When defining a new plugin type you need to define an interface that all
 * plugins of the new type will implement. This ensures that consumers of the
 * plugin type have a consistent way of accessing the plugin's functionality. It
 * should include access to any public properties, and methods for accomplishing
 * whatever business logic anyone accessing the plugin might want to use.
 *
 * For example, an image manipulation plugin might have a "process" method that
 * takes a known input, probably an image file, and returns the processed
 * version of the file.
 *
 * In our case we'll define methods for accessing the human readable description
 * of a sandwich and the number of calories per serving. As well as a method for
 * ordering a sandwich.
 */
interface SandwichInterface {


  public function hard_percent();
  public function normal_percent();


}
