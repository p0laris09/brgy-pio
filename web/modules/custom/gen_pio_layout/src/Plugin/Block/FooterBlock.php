<?php

namespace Drupal\custom_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a footer block.
 *
 * @Block(
 *   id = "footer_block",
 *   admin_label = @Translation("Footer Block")
 * )
 */
class FooterBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'footer',
    ];
  }
}
