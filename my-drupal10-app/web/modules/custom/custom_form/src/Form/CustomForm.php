<?php

namespace Drupal\custom_form\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class CustomForm extends FormBase
{

  public function getFormId()
  {
    return "custom_user_details_form";
  }

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['username'] = [
      '#type' => 'textfield',
      '#title' => 'Username',
      '#required' => true,
      '#weight' => 0,
    ];

    $form['email'] = [
      '#type' => 'email',
      '#title' => 'Email',
      '#required' => true,
      '#weight' => 1,
    ];

    $form['gender'] = [
      '#type' => 'select',
      '#title' => 'Gender',
      '#required' => true,
      '#options' => [
        'female' => 'Female',
        'male' => 'Male',
        'other' => 'Other',
      ],
      '#weight' => 2,
    ];

    $form['description'] = [
      '#type' => 'textarea',
      '#title' => 'Description',
      '#required' => true,
      '#rows' => 5,
      '#weight' => 3,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => 'Submit',
      '#weight' => 4,
    ];
    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state)
  {
    if (strlen($form_state->getValue('username')) < 5) {
      $form_state->setErrorByName('username', "Please make sure your username length is more than 5.");
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    \Drupal::messenger()->addMessage("Successfully");
  }
}
