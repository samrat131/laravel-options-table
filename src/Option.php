<?php

namespace MyLaravelApp;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
	protected $fillable = ['name','value'];

    public $timestamps = false;

    public static function get($name)
    {
    	if ($name=='') {
    		return;
    	}
    	$option = Option::where('name', $name)->first();
        return is_null($option) ? $option : $option->value;
    }

    public static function set($name, $value)
    {
        if ($name=='') {
            return;
        }

        $option = Option::firstOrNew(['name' => $name]);
        $option->value = $value;
        return $option->save();
    }

    public static function drop($name)
    {
    	if ($name=='') {
    		return;
    	}

    	return Option::where('name', $name)->delete();
    }
}
