<?php

namespace Drupal\employee\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a form for adding an employee.
 */
class EmployeeForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'employee_employee';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['emp_firstname'] = [
      '#type' => 'textarea',
      '#title' => $this->t('First Name'),
      '#required' => TRUE,
      '#maxlength' =>30,
    ];

    $form['emp_lastname'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Last Name'),
      '#required' => TRUE,
      '#maxlength' =>30,
    ];

    $form['emp_email'] = [
      '#type' => 'email',
      '#title' => $this->t('Employee Email'),
      '#required' => TRUE,
      '#maxlength' =>100,
    ];

    $form['emp_zipcode'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Employee ZIP Code'),
      '#required' => TRUE,
      '#maxlength' =>6,
    ];

    $form['actions'] = [
      '#type' => 'actions',
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];

    return $form;
  }

 /**
 * {@inheritdoc}
 */
public function validateForm(array &$form, FormStateInterface $form_state) {
  $formField = $form_state->getValues();

  $firstName = trim($formField['emp_firstname']);
  $lastName = trim($formField['emp_lastname']);
  $email = trim($formField['emp_email']);
  $zipcode = trim($formField['emp_zipcode']);

  // expressions for validation.
  $nameRegex = '/^[A-Za-z\'-]+$/'; // Alphabetic characters with optional apostrophes and hyphens.
  $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/'; // Basic email format.
  $zipcodeRegex = '/^\d{6}$/'; // Exactly 6 digits.

  // Validating First Name
  if (!preg_match($nameRegex, $firstName)) {
    $form_state->setErrorByName('emp_firstname', $this->t('Invalid First Name.'));
  }

  // Validating Last Name
  if (!preg_match($nameRegex, $lastName)) {
    $form_state->setErrorByName('emp_lastname', $this->t('Invalid Last Name.'));
  }

  // Validating Email
  if (!preg_match($emailRegex, $email)) {
    $form_state->setErrorByName('emp_email', $this->t('Invalid email address.'));
  }

  // Validating ZIP Code
  if (!preg_match($zipcodeRegex, $zipcode)) {
    $form_state->setErrorByName('emp_zipcode', $this->t('Invalid ZIP Code.'));
  }
}

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addStatus($this->t('Employee data has been saved successfully.'));
    $form_state->setRedirect('<front>');
  }
}
