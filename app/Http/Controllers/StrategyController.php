<?php
/**
 * Created by PhpStorm.
 * User: myskind
 * Date: 03.07.20
 * Time: 23:05
 */

namespace App\Http\Controllers;


use App\Patterns\Behavioral\Strategy\Behavior\FlyNoWay;
use App\Patterns\Behavioral\Strategy\Behavior\FlyRockedPowered;
use App\Patterns\Behavioral\Strategy\Behavior\FlyWithWings;
use App\Patterns\Behavioral\Strategy\Behavior\Quack;
use App\Patterns\Behavioral\Strategy\MallardDuck;
use App\Patterns\Behavioral\Strategy\ModelDuck;
use App\Patterns\Behavioral\Strategy\Services\DuckService;

class StrategyController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main()
    {
        return view('behavioral.strategy');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mallardDuck()
    {
        $flyBehavior = new FlyWithWings();
        $quackBehavior = new Quack();
        $duck = new MallardDuck($flyBehavior, $quackBehavior);
        $duckService = new DuckService($duck);

        $display = $duckService->display();
        $fly = $duckService->performFly();
        $quack = $duckService->performQuack();

        return view('behavioral.strategy.mallardDuck', [
            'display' => $display,
            'quack' => $quack,
            'fly' => $fly
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function modelDuck()
    {
        $flyBehavior = new FlyNoWay();
        $quackBehavior = new Quack();
        $duck = new ModelDuck($flyBehavior, $quackBehavior);
        $duckService = new DuckService($duck);

        $display = $duckService->display();
        $quack = $duckService->performQuack();
        $flyBefore = $duckService->performFly();
        $newFlyBehavior = new FlyRockedPowered();
        $duckService->setFly($newFlyBehavior);
        $flyAfter = $duckService->performFly();

        return view('behavioral.strategy.modelDuck', [
            'display' => $display,
            'quack' => $quack,
            'flyBefore' => $flyBefore,
            'flyAfter' => $flyAfter
        ]);
    }
}