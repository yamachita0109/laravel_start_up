<?php

namespace App\Model\Login;

class LoginModel implements LoginInterface
{
  /**
   * コンストラクタ
   */
  public function __construct()
  {
  }

  public function get()
  {
    return 'login';
  }
}