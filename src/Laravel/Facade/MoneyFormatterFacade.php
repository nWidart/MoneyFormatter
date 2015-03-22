<?php namespace Nwidart\MoneyFormatter\Laravel\Facade;

use Illuminate\Support\Facades\Facade;

class MoneyFormatterFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Modules\AbstractnessMonitor\Application\Money\MoneyFormatter';
    }
}
