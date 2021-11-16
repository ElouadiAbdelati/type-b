<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Services\ManifestationService',
            'App\Services\ServicesImpl\ManifestationServiceImpl'
        );
        $this->app->bind(
            'App\Services\DemandeService',
            'App\Services\ServicesImpl\DemandeServiceImpl'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
