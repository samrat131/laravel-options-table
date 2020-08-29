# Laravel Options Table

This package allow to add delete retrive options value in laravel applications.

## Installation

To use laravel-options-table in your project, please use Composer to add the package to your laravel applications
```
composer require samrat131/laravel-options-table
```

Edit `config/app.php` file and add following lines (only for laravel version below 5.5)

```
'providers' => [
	...
	Samrat131\LaravelOptionsTable\OptionServiceProvider::class,
]
```

```
'aliases' => [
	...
	'Option' => Samrat131\LaravelOptionsTable\OptionFacade::class,
]
```

### Vendor Publish & Migrate

Run this command in terminal `php artisan vendor:publish --tag="migrations"` to publish migration file of this package.

After that run `php artisan migrate` to migrate the table. This will create `options` table in your database.

## Usage

### Add value
```
Option::set('key', 'value');
```

### Retrive value
```
Option::get('key');
```

### Delete value
```
Option::drop('key');
```
