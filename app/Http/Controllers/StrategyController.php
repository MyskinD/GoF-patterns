<?php
/**
 * Created by PhpStorm.
 * User: myskind
 * Date: 03.07.20
 * Time: 23:05
 */

namespace App\Http\Controllers;


use App\Patterns\Strategy\Behavior\FlyNoWay;
use App\Patterns\Strategy\Behavior\FlyRockedPowered;
use App\Patterns\Strategy\Behavior\FlyWithWings;
use App\Patterns\Strategy\Behavior\Quack;
use App\Patterns\Strategy\MallardDuck;
use App\Patterns\Strategy\ModelDuck;
use App\Patterns\Strategy\Services\DuckService;

class StrategyController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main()
    {
        return view('strategy');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mallardDuck()
    {
        $duckService = new DuckService(new MallardDuck(new FlyWithWings(), new Quack()));
        $display = $duckService->display();
        $fly = $duckService->performFly();
        $quack = $duckService->performQuack();

        return view('strategy.mallardDuck', [
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
        $duckService = new duckService(new ModelDuck(new FlyNoWay(), new Quack()));
        $display = $duckService->display();
        $quack = $duckService->performQuack();
        $flyBefore = $duckService->performFly();
        $duckService->setFly(new FlyRockedPowered());
        $flyAfter = $duckService->performFly();

        return view('strategy.modelDuck', [
            'display' => $display,
            'quack' => $quack,
            'flyBefore' => $flyBefore,
            'flyAfter' => $flyAfter
        ]);
    }
}