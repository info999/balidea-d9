<?php

namespace Drupal\test_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Test module routes.
 */
class TestModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build = [
      '#theme' => 'test-module-test-page',
      '#integer_field' => $this->config('test_module.settings')->get('integer_field'),
      '#text_field' => [
        '#type' => 'processed_text',
        '#text' => $this->config('test_module.settings')->get('text_field.value'),
        '#format' => 'basic_html',
      ]

    ];

    return $build;
  }

  /**
   * Returns a page title for different languages.
   */
/*  public function getTitle() {
    // Get current language code
    $language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    switch($language) {
      case 'es':
        $title = 'Configuración de la página de prueba';
        break;
      case 'en':
        $title = 'Test page';
        break;
    }
    return  $title;
  } */

}
