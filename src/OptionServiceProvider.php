<?php

namespace Samrat131\LaravelOptionsTable;

use Illuminate\Support\ServiceProvider;
use Samrat131\LaravelOptionsTable\Option;

class OptionServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->publishes([
	        __DIR__.'/database/migrations/' => database_path('migrations')
	    ], 'migrations');
	}

	public function register()
	{
		$this->app->bind('option', function($app) {
			return new Option;
		});
	}
}