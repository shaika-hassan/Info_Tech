<?php

namespace Drupal\custom_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a simple block for custom.
 *
 * @Block(
 *   id = "custom_block",
 *   admin_label = "Custom Block"
 * )
 */
class CustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $output = [
      '#markup' => $this->t('Hello, this is a custom block '),
    ];

    return $output;
  }

}
