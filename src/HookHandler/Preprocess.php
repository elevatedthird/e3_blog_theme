<?php

declare(strict_types=1);

namespace Drupal\e3_blog_theme\Preprocess;

/**
 * Hook implementation.
 */
class Preprocess {

  /**
   * Hook implementation.
   */
  #[Hook('preprocess_node__blog')]
  public function preprocessNodeBlog(&$variables): void {
    // Ensure Kinetic is the default theme.
  }

}

