    <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\ks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'KS' Block
 *
 * @Block(
 *   id = "ks_block",
 *   admin_label = @Translation("KS block"),
 * )
 */
class KsBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('KS block!')
    );
  }
}