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
use App\Patterns\Strategy\Services\MiniDuckService;
use App\Patterns\Strategy\Services\ModelDuckService;

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
    public function miniDuck()
    {
        $miniDuckService = new MiniDuckService(new MallardDuck(new FlyWithWings(), new Quack()));
        $display = $miniDuckService->display();
        $fly = $miniDuckService->performFly();
        $quack = $miniDuckService->performQuack();

        return view('strategy.miniDuck', [
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
        $modelDuckService = new ModelDuckService(new ModelDuck(new FlyNoWay(), new Quack()));
        $display = $modelDuckService->display();
        $quack = $modelDuckService->performQuack();
        $flyBefore = $modelDuckService->performFly();
        $modelDuckService->setFly(new FlyRockedPowered());
        $flyAfter = $modelDuckService->performFly();

        return view('strategy.modelDuck', [
            'display' => $display,
            'quack' => $quack,
            'flyBefore' => $flyBefore,
            'flyAfter' => $flyAfter
        ]);
    }
}