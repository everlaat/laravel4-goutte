<?php namespace Elvedia\Goutte;

use Goutte\Client;

class Goutte {

  public function __construct() { }

  public static function getNewClient()
  {
    $client = new Client();
    return $client;
  }

}