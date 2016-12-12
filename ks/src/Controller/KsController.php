<?php

/* 
 * @file
 * contain \Drupal\ks\Cotroller\KsController.php
 */

namespace Drupal\ks\Controller;


use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class KsController extends ControllerBase{
    public function content() {
        return array(
            '#type'=>'markup',
            '#markup' => $this->t('Kknowledge portal dashboard'),
        );
}
	public function settings() {
		return array(
			'#type'=>'markup',
            '#markup' => $this->t('Kknowledge portal settings'),
		);
	}
}

