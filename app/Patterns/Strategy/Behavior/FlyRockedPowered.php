<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 05.07.20
 * Time: 1:21
 */

namespace App\Patterns\Strategy\Behavior;


use App\Patterns\Strategy\Contracts\FlyInterface;

class FlyRockedPowered implements FlyInterface
{
    /**
     * @return string
     */
    public function fly(): string
    {
        return 'I\'m flying with a rocket!';
    }
}