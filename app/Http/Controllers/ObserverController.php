<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 11.07.20
 * Time: 23:09
 */

namespace App\Http\Controllers;


class ObserverController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main()
    {
        return view('behavioral.observer');
    }
}