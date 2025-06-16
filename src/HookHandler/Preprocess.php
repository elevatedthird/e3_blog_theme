<?php

declare(strict_types=1);

namespace Drupal\e3_blog_theme\HookHandler;

use Drupal\Core\Hook\Attribute\Hook;

/**
 * Hook implementation.
 */
class Preprocess {

  /**
   * Hook implementation.
   */
  #[Hook('preprocess_node__blog_post')]
  public static function preprocessNodeBlog(&$variables): void {
    // Blog Preprocess.
  }

}

