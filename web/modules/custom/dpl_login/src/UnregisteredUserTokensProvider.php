<?php

namespace Drupal\dpl_login;

use Drupal\Core\TempStore\PrivateTempStore;
use Drupal\Core\TempStore\PrivateTempStoreFactory;

/**
 * Handles unregistered user token storage.
 */
class UnregisteredUserTokensProvider extends UserTokensProvider implements UserTokensProviderInterface {

  /**
   * User session storage.
   *
   * @var \Drupal\Core\TempStore\PrivateTempStore
   */
  protected PrivateTempStore $tempStore;

  /**
   * Constructor of UnregisteredUserTokensProvider.
   *
   * @param \Drupal\Core\TempStore\PrivateTempStoreFactory $temp_store_factory
   *   User session store factory.
   */
  public function __construct(PrivateTempStoreFactory $temp_store_factory) {
    $this->tempStore = $temp_store_factory->get(__CLASS__);
  }

}
