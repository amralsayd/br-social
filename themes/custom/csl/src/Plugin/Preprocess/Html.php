<?php

namespace Drupal\csl\Plugin\Preprocess;

use Drupal\bootstrap\Plugin\Preprocess\PreprocessBase;

/**
 * Pre-processes variables for the "html" theme hook.
 *
 * @ingroup plugins_preprocess
 *
 * @BootstrapPreprocess("html")
 */
class Html extends PreprocessBase {

  /**
   * {@inheritdoc}
   */
  public function preprocess(array &$variables, $hook, array $info) {
    parent::preprocess($variables, $hook, $info);
    // Get all SVG Icons.
    $variables['svg_icons'] = file_get_contents(\Drupal::service('extension.path.resolver')->getPath('theme', 'csl') . '/icons/icons.svg');

  }

}
