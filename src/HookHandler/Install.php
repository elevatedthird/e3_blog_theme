<?php

declare(strict_types=1);

namespace Drupal\e3_blog_theme\HookHandler;

use Drupal\Core\Hook\Attribute\Hook;

/**
 * Hook implementation.
 */
class Install {

  /**
   * Hook implementation.
   */
  #[Hook('install')]
  public static function install():void {
    // Ensure Kinetic is the default theme.
    $active_theme = \Drupal::config('system.theme')->get('default');
    if ($active_theme !== 'kinetic') {
      throw new \Exception('Kinetic must be set as the default theme.');
    }
    // Get the required SDCs to add into the theme.
    $propelComponentsManager = \Drupal::service('propel.component_manager');
    // The paths are relative to the path in the GH repo.
    $propelComponentsManager->downloadSDC('components/04-pages/blog');
    $propelComponentsManager->downloadSDC('components/01-composites/teaser');
  }

}

