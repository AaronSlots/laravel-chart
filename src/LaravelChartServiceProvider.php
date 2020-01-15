<?php

namespace ASSoftware\Laravel;

use Illuminate\Support\ServiceProvider;

class LaravelChartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'ASSoftware/Laravel');
    }
}
