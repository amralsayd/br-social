<?php

namespace Drupal\custom_ksu\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Correct config class.
 */
class correct_configForm extends ConfigFormBase {

  /**
   *
   */
  public function getFormID() {
    return 'correct_configForm';
  }

  /**
   *
   */
  protected function getEditableConfigNames() {

    return ['custom_ksu.correct.settings'];
  }

  /**
   *
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['entity_type'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Entity Type'),
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * Submit function.
   *
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *
   * @return void
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $entity_type = $form_state->getValue('entity_type');

    \Drupal::configFactory()->getEditable($entity_type)->delete();

    \Drupal::messenger()->addStatus("The following config corrected " . $entity_type);
  }

}
