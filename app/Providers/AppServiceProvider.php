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
            \App\Patterns\Strategy\Contracts\FlyInterface::class,
            \App\Patterns\Strategy\MallardDuck::class
        );

        $this->app->bind(
            \App\Patterns\Strategy\Contracts\QuackInterface::class,
            \App\Patterns\Strategy\MallardDuck::class
        );

        $this->app->bind(
            \App\Patterns\Strategy\MallardDuck::class,
            \App\Patterns\Strategy\Services\MiniDuckService::class
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
