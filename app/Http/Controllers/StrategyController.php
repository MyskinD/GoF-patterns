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
use Illuminate\Http\Request;

class StrategyController
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main(Request $request)
    {
        $data = $request->input('duck');

        if (!$data) {
//            return response()->make('Введите запрос с параметром duck', 400);
//            return redirect()->to('strategy')->with(['errors' => 'Введите запрос с параметром duck']);
        }

        dd($data);

        $miniDuckService = new MiniDuckService(new MallardDuck(new FlyWithWings(), new Quack()));
        $displayMini = $miniDuckService->display();
        $flyMini = $miniDuckService->performFly();
        $quackMini = $miniDuckService->performQuack();

        $modelDuckService = new ModelDuckService(new ModelDuck(new FlyNoWay(), new Quack()));
        $displayModel = $modelDuckService->display();
        $quackModel = $modelDuckService->performQuack();
        $flyModelBefore = $modelDuckService->performFly();
        $modelDuckService->setFly(new FlyRockedPowered());
        $flyModelAfter = $modelDuckService->performFly();

        return view('strategy', [
            'miniDuck' => [
                'displayMini' => $displayMini,
                'flyMini' => $flyMini,
                'quackMini' => $quackMini
            ],
            'modelDuck' => [
                'displayModel' => $displayModel,
                'quackModel' => $quackModel,
                'flyModelBefore' => $flyModelBefore,
                'flyModelAfter' => $flyModelAfter
            ]
        ]);
    }
}