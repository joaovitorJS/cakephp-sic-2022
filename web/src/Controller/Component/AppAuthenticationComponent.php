<?php

namespace App\Controller\Component;

use Authentication\Authenticator\UnauthenticatedException;
use Authentication\Controller\Component\AuthenticationComponent;
use Cake\Controller\Component\FlashComponent;

class AppAuthenticationComponent extends AuthenticationComponent
{
  public $components = [
    'Flash'
  ];

  protected function doIdentityCheck(): void 
  {
    try {
      parent::doIdentityCheck();
    } catch (UnauthenticatedException $exception) {
      $this->Flash->error("Precisa fazer login para acessar as páginas!");

      throw $exception;
    }
  }
}
