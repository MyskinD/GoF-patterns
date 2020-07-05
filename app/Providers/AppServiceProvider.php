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
            \App\Patterns\Strategy\Behavior\FlyNoWay::class
        );

        $this->app->bind(
            \App\Patterns\Strategy\Contracts\FlyInterface::class,
            \App\Patterns\Strategy\Behavior\FlyRockedPowered::class
        );

        $this->app->bind(
            \App\Patterns\Strategy\Contracts\FlyInterface::class,
            \App\Patterns\Strategy\Behavior\FlyWithWings::class
        );

        $this->app->bind(
            \App\Patterns\Strategy\Contracts\QuackInterface::class,
            \App\Patterns\Strategy\Behavior\MuteQuack::class
        );

        $this->app->bind(
            \App\Patterns\Strategy\Contracts\QuackInterface::class,
            \App\Patterns\Strategy\Behavior\Quack::class
        );

        $this->app->bind(
            \App\Patterns\Strategy\Contracts\QuackInterface::class,
            \App\Patterns\Strategy\Behavior\Squeak::class
        );

        $this->app->bind(
            \App\Patterns\Strategy\Duck::class,
            \App\Patterns\Strategy\MallardDuck::class
        );

        $this->app->bind(
            \App\Patterns\Strategy\Duck::class,
            \App\Patterns\Strategy\ModelDuck::class
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
