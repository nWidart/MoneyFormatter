<?php namespace Nwidart\MoneyFormatter\Laravel;

use Illuminate\Support\ServiceProvider;

use Illuminate\Foundation\AliasLoader;

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
