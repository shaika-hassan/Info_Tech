<?php
namespace Drupal\employee\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a custom block.
 *
 * @Block(
 *   id = "employee_custom_block",
 *   admin_label = @Translation("Employee Custom Block"),
 * )
 */
class EmployeeCustomBlock extends BlockBase {

  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\employee\Form\EmployeeForm');
    return $form;
  }
  }
