<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 04.07.20
 * Time: 21:43
 */

namespace App\Patterns\Behavioral\Strategy\Behavior;


use App\Patterns\Behavioral\Strategy\Contracts\QuackInterface;

class MuteQuack implements QuackInterface
{
    /**
     * @return string
     */
    public function quack(): string
    {
        return '<< Silence >>';
    }
}