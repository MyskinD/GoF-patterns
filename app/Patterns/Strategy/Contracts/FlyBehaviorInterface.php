<?php
/**
 * Created by PhpStorm.
 * User: myskind
 * Date: 04.07.20
 * Time: 10:39
 */

namespace App\Patterns\Strategy\Contracts;


interface FlyBehaviorInterface
{
    /**
     * @return mixed
     */
    public function fly();
}