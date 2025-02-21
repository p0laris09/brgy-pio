<?php

namespace Drupal\custom_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a first section block.
 *
 * @Block(
 *   id = "first_section_block",
 *   admin_label = @Translation("First Section Block")
 * )
 */
class FirstSectionBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'first-section',
    ];
  }
}
