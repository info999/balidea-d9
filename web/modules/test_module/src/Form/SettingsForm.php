<?php

namespace Drupal\test_module\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure Test module settings for this site.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'test_module_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['test_module.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['text_field'] = [
      '#type' => 'text_format',
      '#title' => $this->t('Text'),
      '#format' => 'basic_html',
      '#default_value' => $this->config('test_module.settings')->get('text_field.value'),
      //'#format' => $config->get('distance_selling_terms.format'),
    ];

    $form['integer_field'] = [
      '#type' => 'number',
      '#title' => $this->t('Integer'),
      '#default_value' => $this->config('test_module.settings')->get('integer_field'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
/*  public function validateForm(array &$form, FormStateInterface $form_state) {
    if ($form_state->getValue('Integer') != 11) {
      $form_state->setErrorByName('example', $this->t('The value is not correct.'));
    }
    parent::validateForm($form, $form_state);
  }*/

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('test_module.settings')
      ->set('text_field', $form_state->getValue('text_field'))
      ->set('integer_field', $form_state->getValue('integer_field'))
      ->save();
    parent::submitForm($form, $form_state);
  }

}
