<?php

namespace CountingUtil\Providers;

use CountingUtil\GlobalCounter;
use Illuminate\Support\ServiceProvider;

Class CounterServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(GlobalCounter::class, fn($app) => new GlobalCounter(config('counter.initialValue')));
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . "/../configs/counter.php" => config_path('counter.php')
        ]);

        $this->loadRoutesFrom(__DIR__ . "/../routes/counter.php");
        $this->loadViewsFrom(__DIR__ . "/../views", 'counter');

    }

}