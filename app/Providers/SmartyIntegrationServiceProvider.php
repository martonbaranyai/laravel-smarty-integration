<?php

namespace App\Providers;

use App\Smarty;
use Illuminate\Support\ServiceProvider;

class SmartyIntegrationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Smarty', function ($app) {
            $smarty = new Smarty();

            $smarty->setTemplateDir(resource_path('views'));
            $smarty->setCompileDir(storage_path('app/smarty/compile'));
            $smarty->setCacheDir(storage_path('app/smarty/cache'));
            $smarty->setConfigDir(base_path('config'));

            return $smarty;
        });
    }
}
