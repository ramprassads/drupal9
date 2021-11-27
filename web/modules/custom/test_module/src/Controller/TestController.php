<?php

namespace Drupal\test_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class TestController extends ControllerBase
{
    public function content()
    {
        return [
            '#markup' => $this->t('Test content')
        ];    
    }
}