<?php


namespace PhpVan\Settings\Facades;


use Illuminate\Support\Facades\Facade;

class PhpVanSettings extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'settings';
    }
}