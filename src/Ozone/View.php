<?php


namespace Ozone;


use eftec\bladeone\BladeOne;

class View
{
    public static $views = __DIR__ . '/../../views';
    public static $cache = __DIR__ . '/../../cache';

    public static function make(){
        return new BladeOne(self::$views,self::$cache,BladeOne::MODE_DEBUG);
    }
}