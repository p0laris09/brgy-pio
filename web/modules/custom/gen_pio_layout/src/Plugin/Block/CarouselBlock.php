<?php

namespace Drupal\custom_layout\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a carousel block.
 *
 * @Block(
 *   id = "carousel_block",
 *   admin_label = @Translation("Carousel Block")
 * )
 */
class CarouselBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'carousel',
    ];
  }
}
