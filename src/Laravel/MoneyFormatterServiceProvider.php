<?php namespace Nwidart\MoneyFormatter\Laravel;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class MoneyFormatterServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     * @return void
     */
    public function register()
    {
        $this->registerAlias();
    }

    private function registerAlias()
    {
        $aliasLoader = AliasLoader::getInstance();
        $aliasLoader->alias('MoneyFormatter', 'Nwidart\MoneyFormatter\Laravel\Facade\MoneyFormatterFacade');
    }
}
