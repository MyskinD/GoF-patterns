<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 04.07.20
 * Time: 21:46
 */

namespace App\Patterns\Strategy\Behavior;


use App\Patterns\Strategy\Contracts\QuackInterface;

class Squeak implements QuackInterface
{
    /**
     * @return string
     */
    public function quack(): string
    {
        return 'Squeak';
    }
}