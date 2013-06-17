<?php namespace Elvedia\Goutte;

require_once 'goutte.phar';

use Goutte\Client;

class Goutte {

  public function __construct() { }

  public static function getNewClient()
  {
    $client = new Client();
    return $client;
  }
  
}