<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 04.07.20
 * Time: 21:34
 */

namespace App\Patterns\Strategy\Behavior;


use App\Patterns\Strategy\Contracts\FlyInterface;

class FlyNoWay implements FlyInterface
{
    /**
     * @return string
     */
    public function fly(): string
    {
        return 'I can\'t fly';
    }
}