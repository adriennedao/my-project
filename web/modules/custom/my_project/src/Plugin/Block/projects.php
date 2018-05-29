<?php

namespace Drupal\my_project\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'projects' block.
 *
 * @Block(
 *  id = "projects",
 *  admin_label = @Translation("Projects"),
 * )
 */
class projects extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['projects']['#markup'] = 'projects.';

    return $build;
  }

}
