# Laravel Options

This package allow to add delete retrive options value in laravel applications.

## installation

edit config/app.php file and add following lines

`'providers' => [
`	...
`	MyLaravelApp\OptionServiceProvider::class,
`]

`'aliases' => [
`	...
`	'Option' => MyLaravelApp\OptionFacade::class,
`]

## Usage

### Add value
`Option::set('key', 'value');`

### Retrive value
`Option::get('key');`

### Delete value
`Option::drop('key');`