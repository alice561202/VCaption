<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Room extends Facade{
    protected static function getFacadeAccessor(){
        return 'room';
    }
}
