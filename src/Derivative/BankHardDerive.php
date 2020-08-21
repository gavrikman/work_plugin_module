<?php

namespace Drupal\workshop_plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DeriverBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\Discovery\ContainerDeriverInterface;
use Drupal\views\ViewsData;
use Drupal\workshop_plugin\Plugin\Sandwich\EasyPercent;


class BankHardDerive extends DeriverBase {


  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($base_plugin_definition) {

    $this->derivatives['privat_bank'] = $base_plugin_definition;
    $this->derivatives['privat_bank']['bank_name'] = 'Сложний процент в Приват Банку';
    $this->derivatives['privat_bank']['year_bet'] = 3.75;
    $this->derivatives['privat_bank']['start_money'] = 50;
    $this->derivatives['privat_bank']['$year_add_bet'] = 1.75;
    $this->derivatives['privat_bank']['years'] = 1.75;

    $this->derivatives['rifizen_bank'] = $base_plugin_definition;
    $this->derivatives['rifizen_bank']['bank_name'] = 'Сложний процент в Райфайзен Банку';
    $this->derivatives['rifizen_bank']['year_bet'] = 3.25;
    $this->derivatives['rifizen_bank']['start_money'] = 50;
    $this->derivatives['rifizen_bank']['$year_add_bet'] = 1.75;
    $this->derivatives['rifizen_bank']['years'] = 1.75;


    $this->derivatives['aval_bank'] = $base_plugin_definition;
    $this->derivatives['aval_bank']['bank_name'] = 'Сложний процент в Аваль Банку';
    $this->derivatives['aval_bank']['year_bet'] = 4.75;
    $this->derivatives['aval_bank']['start_money'] = 50;
    $this->derivatives['aval_bank']['$year_add_bet'] = 1.75;
    $this->derivatives['aval_bank']['years'] = 1.75;
    return $this->derivatives;
  }

}
