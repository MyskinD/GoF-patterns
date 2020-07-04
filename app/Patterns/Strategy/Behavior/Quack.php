<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 04.07.20
 * Time: 21:42
 */

namespace App\Patterns\Strategy\Behavior;


use App\Patterns\Strategy\Contracts\QuackInterface;

class Quack implements QuackInterface
{
    /**
     * @return string
     */
    public function quack(): string
    {
        return 'Quack!';
    }
}