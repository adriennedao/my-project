<?php

namespace Drupal\my_project\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'about_block' block.
 *
 * @Block(
 *  id = "about_block",
 *  admin_label = @Translation("About_block"),
 * )
 */
class about_block extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['about_block']['#markup'] = 'About.';

    return $build;
  }

}
