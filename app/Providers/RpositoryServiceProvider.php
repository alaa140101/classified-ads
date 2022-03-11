<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\{
    Ads\AdsInterface,
    Ads\AdsRepository,
};

class RpositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AdsInterface::class,
            AdsRepository::class,
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
