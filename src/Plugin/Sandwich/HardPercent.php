<?php

namespace Drupal\workshop_plugin\Plugin\Sandwich;

use Drupal\workshop_plugin\SandwichBase;

/**
 * Provides a ham sandwich.
 *
 * Because the plugin manager class for our plugins uses annotated class
 * discovery, our meatball sandwich only needs to exist within the
 * Plugin\Sandwich namespace, and provide a Sandwich annotation to be declared
 *  as a plugin. This is defined in
 * \Drupal\plugin_type_example\SandwichPluginManager::__construct().
 *
 * The following is the plugin annotation. This is parsed by Doctrine to make
 * the plugin definition. Any values defined here will be available in the
 * plugin definition.
 *
 * This should be used for metadata that is specifically required to instantiate
 * the plugin, or for example data that might be needed to display a list of all
 * available plugins where the user selects one. This means many plugin
 * annotations can be reduced to a plugin ID, a label and perhaps a description.
 *
 * @Sandwich(
 *   id = "hard_percent",
 *   description = @Translation("Ham, mustard, rocket, sun-dried tomatoes."),
 *   deriver = "Drupal\workshop_plugin\Derivative\BankHardDerive",
 * )
 */
class HardPercent extends SandwichBase {

  public function hard_percent(){
    $bankName=$this->getPluginDefinition()['bank_name'];
    $yearBet=$this->getPluginDefinition()['year_bet'];
    $startMoney=$this->getPluginDefinition()['start_money'];
    $yearAddBet=$this->getPluginDefinition()['year_bet'];
    $years=$this->getPluginDefinition()['years'];
    $result=$startMoney*(1+$yearBet/$yearAddBet)**$yearAddBet**$years;

    return $bankName . $result;
  }


}
