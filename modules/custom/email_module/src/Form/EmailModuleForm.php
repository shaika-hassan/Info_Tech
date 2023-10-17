<?php

namespace Drupal\email_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class EmailModuleForm extends FormBase {

  public function getFormId() {
    return 'email_module_add_user_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('User Email'),
      '#required' => true,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add User to Queue'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $email = $form_state->getValue('email');
    // You should validate the email here.

    // Load the user by email.
    $user = user_load_by_mail($email);

    if ($user) {
      // Add the user ID to the 'email_welcome' queue.
      \Drupal::queue('email_welcome')->createItem($user->id());
      \Drupal::messenger()->addMessage($this->t('User added to the queue for welcome email.'));
    }
    else {
      \Drupal::messenger()->addMessage($this->t('User not found.'));
    }
  }
}
