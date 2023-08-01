<?php

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase {
  public function simpleContent() {
    $element = [
      '#type' => 'markup',
      '#markup' => t('Welcome Drupal World.')
    ];
    return $element;
  }
}
