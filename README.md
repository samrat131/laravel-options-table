# Laravel Options Table

This package allow to add delete retrive options value in laravel applications.

## installation

edit config/app.php file and add following lines (only for laravel below v5.5)

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