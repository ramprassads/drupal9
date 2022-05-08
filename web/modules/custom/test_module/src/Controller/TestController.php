<?php

namespace Drupal\test_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides a Test contoller.
 */
class TestController extends ControllerBase{

  /**
   * {@inheritdoc}
   */
  public function content() {
    return [
      '#markup' => $this->t('Test content'),
    ];
  }

}
