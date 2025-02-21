<?php

namespace Drupal\custom_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a second section block.
 *
 * @Block(
 *   id = "second_section_block",
 *   admin_label = @Translation("Second Section Block")
 * )
 */
class SecondSectionBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'second-section',
    ];
  }
}
