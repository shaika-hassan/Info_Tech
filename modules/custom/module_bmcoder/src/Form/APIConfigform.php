<?php declare(strict_types = 1);

namespace Drupal\module_bmcoder\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure Hello custom Module settings for this site.
 */
final class APIConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'module_bmcoder_api_configform';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames(): array {
    return ['module_bmcoder.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    // Load the values from the State API.
    $api_key = \Drupal::state()->get('module_bmcoder_api_key', '');
    $response_format = \Drupal::state()->get('module_bmcoder_response_format', '');
    $notification_type = \Drupal::state()->get('module_bmcoder_notification_type', '');

    $form['api_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API Key'),
      '#default_value' => $api_key,
    ];

    $form['response_format'] = [
      '#type' => 'select',
      '#title' => $this->t('Response Format'),
      '#options' => [
        'option1' => $this->t('Option 1'),
        'option2' => $this->t('Option 2'),
        'option3' => $this->t('Option 3'),
      ],
      '#default_value' => $response_format,
    ];

    $form['notification_type'] = [
      '#type' => 'radios',
      '#title' => $this->t('Notification Type'),
      '#options' => [
        'radio_option1' => $this->t('Radio Option 1'),
        'radio_option2' => $this->t('Radio Option 2'),
        'radio_option3' => $this->t('Radio Option 3'),
      ],
      '#default_value' => $notification_type,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    // Save the values to the State API.
    \Drupal::state()->set('module_bmcoder_api_key', $form_state->getValue('api_key'));
    \Drupal::state()->set('module_bmcoder_response_format', $form_state->getValue('response_format'));
    \Drupal::state()->set('module_bmcoder_notification_type', $form_state->getValue('notification_type'));

    parent::submitForm($form, $form_state);
  }
}
