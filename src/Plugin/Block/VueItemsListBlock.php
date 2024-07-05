<?php

namespace Drupal\vue_items_list\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 *
 * @Block(
 *   id = "vue_items_list_block",
 *   admin_label = @Translation("Vue items List Block"),
 * )
 */
class VueItemsListBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'vue_items_list_block',
      '#attached' => [
        'library' => 'vue_items_list/vue-items-list-app',
      ],
      '#custom_data' => ['age' => '31', 'DOB' => '2 May 2000'],
      '#custom_string' => 'Hello Block!',
    ];
  }

}
