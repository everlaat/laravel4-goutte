<?php namespace Elvedia\Goutte\Facades\Laravel;

use Illuminate\Support\Facades\Facade;

class GoutteFacade extends Facade {

protected static function getFacadeAccessor() { return 'goutte'; }

}