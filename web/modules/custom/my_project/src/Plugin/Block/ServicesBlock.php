<?php

namespace Drupal\my_project\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ServicesBlock' block.
 *
 * @Block(
 *  id = "services_block",
 *  admin_label = @Translation("Services"),
 * )
 */
class ServicesBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['services_block']['#markup'] = 'Services.';

    return $build;
  }

}
