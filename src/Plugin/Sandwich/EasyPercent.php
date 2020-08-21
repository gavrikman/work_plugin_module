<?php

namespace Drupal\workshop_plugin\Plugin\Sandwich;

use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\workshop_plugin\Annotation\Sandwich;
use Drupal\workshop_plugin\SandwichBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a meatball sandwich.
 *
 * Because the plugin manager class for our plugins uses annotated class
 * discovery, our meatball sandwich only needs to exist within the
 * Plugin\Sandwich namespace, and provide a Sandwich annotation to be declared
 * as a plugin. This is defined in
 * \Drupal\plugin_type_example\SandwichPluginManager::__construct().
 *
 * The following is the plugin annotation. This is parsed by Doctrine to make
 * the plugin definition. Any values defined here will be available in the
 * plugin definition.
 *
 * This should be used for metadata that is specifically required to instantiate
 * the plugin, or for example data that might be needed to display a list of all
 * available plugins where the user selects one. This means many plugin
 * annotations
 * 6can be reduced to a plugin ID, a label and perhaps a description.
 *
 * @Sandwich(
 *   id = "normal_percent",
 *   description = @Translation("Italian style meatballs drenched in irresistible marinara sauce, served on freshly baked bread."),
 *   deriver = "Drupal\workshop_plugin\Derivative\BankEasyDerive",
 * )
 */
class EasyPercent extends SandwichBase{

  public function normal_percent(){
    $bank_name=$this->getPluginDefinition()['bank_name'];
    $yearBet=$this->getPluginDefinition()['year_bet'];
    $startMoney=$this->getPluginDefinition()['start_money'];
    $years=$this->getPluginDefinition()['years'];
    $result=$startMoney + $startMoney * $yearBet * $years / 100;
    return $bank_name . $result;
  }

}
