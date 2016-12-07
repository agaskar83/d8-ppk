<?php

/* 
 * @file
 * contain \Drupal\ks\Cotroller\KsController.php
 */

namespace Drupal\ks\Controller;

use Drupal\Core\Controller\ControllerBase;

class KsController extends ControllerBase{
    public function content() {
        return array(
            '#type'=>'markup',
            '#markup' => $this->t('Kknowledge portal dashboard'),
        );
}
}

