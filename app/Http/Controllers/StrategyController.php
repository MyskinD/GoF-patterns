<?php
/**
 * Created by PhpStorm.
 * User: myskind
 * Date: 03.07.20
 * Time: 23:05
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class StrategyController
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main(Request $request)
    {
        return view('strategy');
    }
}