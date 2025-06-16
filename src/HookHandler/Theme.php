<?php

declare(strict_types=1);

namespace Drupal\e3_blog_theme\HookHandler;

use Drupal\Core\Hook\Attribute\Hook;

/**
 * Hook implementation.
 */
class Theme {

  /**
   * Hook implementation.
   */
  #[Hook('theme')]
  public static function theme(): array {
    return [
      'node__blog_post__full' => [
        'template' => 'node--blog-post--full',
        'base hook' => 'node'
      ],
      'node__blog_post__teaser' => [
        'template' => 'node--blog-post--teaser',
        'base hook' => 'node'
      ],
      'node__blog_author' => [
        'template' => 'node--blog-author',
        'base hook' => 'node'
      ],
    ];
  }

}

