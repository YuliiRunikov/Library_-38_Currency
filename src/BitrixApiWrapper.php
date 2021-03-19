<?php

namespace Diynik_38_sdk;

class BitrixApiWrapper {

  private $userId = 0;

  private $token = '';

  public function __construct($userId, $token) {
    $this->userId = $userId;
    $this->token = $token;
  }
}