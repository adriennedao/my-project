<?php

namespace Drupal\my_project\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'TemplateProgrammedBy' block.
 *
 * @Block(
 *  id = "template_programmed_by",
 *  admin_label = @Translation("Template programmed by"),
 * )
 */
class TemplateProgrammedBy extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['template_programmed_by']['#markup'] = '<p class="love">Made with <i class="icon ion-heart"></i>Adrienne Dao</p>';

    return $build;
  }

}
