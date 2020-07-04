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
            \App\Patterns\Strategy\Contracts\FlyBehaviorInterface::class,
            \App\Patterns\Strategy\Duck::class
        );

        $this->app->bind(
            \App\Patterns\Strategy\Contracts\QuackBehaviorInterface::class,
            \App\Patterns\Strategy\Duck::class
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
