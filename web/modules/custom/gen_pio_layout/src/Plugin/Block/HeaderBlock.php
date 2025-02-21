<?php

namespace Drupal\custom_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a header block.
 *
 * @Block(
 *   id = "header_block",
 *   admin_label = @Translation("Header Block")
 * )
 */
class HeaderBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'header',
    ];
  }
}
