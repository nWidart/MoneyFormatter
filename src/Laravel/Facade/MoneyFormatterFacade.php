<?php namespace Nwidart\MoneyFormatter\Laravel\Facade;

use Illuminate\Support\Facades\Facade;

class MoneyFormatterFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'money.formatter';
    }
}
