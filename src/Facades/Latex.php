<?php
namespace Lorey\Latex\Facades;

use Illuminate\Support\Facades\Facade;

class Latex extends Facade
{
    protected static function getFacadeAccessor() { return 'latex'; }
}