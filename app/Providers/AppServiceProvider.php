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
        $this->app->singleton('App\Http\ViewComposers\CategoryComposer');
        $this->app->singleton('App\Http\ViewComposers\CountryComposer');
        $this->app->singleton('App\Http\ViewComposers\CurrencyComposer');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            ['partials.categoryNav', 'partials.searchfrm', 'lists.categories'], 'App\Http\ViewComposers\CategoryComposer',
        );
        view()->composer(
            ['partials.searchfrm', 'lists.countries'], 'App\Http\ViewComposers\CountryComposer',
        );
        view()->composer(
            'lists.currencies', 'App\Http\ViewComposers\CurrencyComposer',
        );
        
    }
}
