<?php
/**
 * Created by PhpStorm.
 * User: myskind
 * Date: 04.07.20
 * Time: 10:43
 */

namespace App\Patterns\Strategy\Contracts;


interface QuackBehaviorInterface
{
    /**
     * @return mixed
     */
    public function quack();
}