<?php 

namespace MyLaravelApp;

use Illuminate\Support\Facades\Facade;

class OptionFacade extends Facade
{
	protected static function getFacadeAccessor() { return 'option'; }
}