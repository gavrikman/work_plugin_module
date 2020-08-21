<?php

namespace Drupal\workshop_plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DeriverBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\Discovery\ContainerDeriverInterface;
use Drupal\views\ViewsData;
use Drupal\workshop_plugin\Plugin\Sandwich\EasyPercent; $this->derivatives['privat_bank']['bank_name'];


class BankEasyDerive extends DeriverBase {


  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($base_plugin_definition) {

    $this->derivatives['privat_bank'] = $base_plugin_definition;
    $this->derivatives['privat_bank']['bank_name'] = 'Простий процент в Приват Банку';
    $this->derivatives['privat_bank']['year_bet'] = 2.75;
    $this->derivatives['privat_bank']['start_money'] = 2.15;
    $this->derivatives['privat_bank']['years'] = 4;


    $this->derivatives['rifizen_bank'] = $base_plugin_definition;
    $this->derivatives['rifizen_bank']['bank_name'] = 'Простий процент в Райфайзен Банку';
    $this->derivatives['rifizen_bank']['year_bet'] = 3.75;
    $this->derivatives['rifizen_bank']['start_money'] = 2.34;
    $this->derivatives['rifizen_bank']['years'] = 4;

    $this->derivatives['aval_bank'] = $base_plugin_definition;
    $this->derivatives['aval_bank']['bank_name'] = 'Простий процент в Аваль Банку';
    $this->derivatives['aval_bank']['year_bet'] = 4.75;
    $this->derivatives['aval_bank']['start_money'] = 1.80;
    $this->derivatives['aval_bank']['years'] = 5;

    return $this->derivatives;
  }

}
