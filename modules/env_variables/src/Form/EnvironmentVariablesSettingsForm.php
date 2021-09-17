<?php

namespace Drupal\env_variables\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure environment variables settings.
 */
class EnvironmentVariablesSettingsForm extends ConfigFormBase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'env_variables.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'env_variables_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }  

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $default = $this->config(static::SETTINGS)->get('env_path');
    $form['env_path'] = [
      '#type' => 'textfield',      
      '#title' => $this->t('Path (.env file)'),      
      '#default_value' => $default,
      '#description' => $this->t('Please enter the path of the .env file. Example: "/../" for outside docroot.'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $env_path = $form_state->getValue('env_path');   
    $config = $this->config(static::SETTINGS);    
    $config->set('env_path' , $env_path);   
    $config->save();
    parent::submitForm($form, $form_state);
  }

}
