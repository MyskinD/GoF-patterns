<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 05.07.20
 * Time: 0:10
 */

namespace App\Patterns\Behavioral\Strategy;


use App\Patterns\Behavioral\Strategy\Contracts\FlyInterface;
use App\Patterns\Behavioral\Strategy\Contracts\QuackInterface;

class MallardDuck extends Duck
{
    /**
     * MallardDuck constructor.
     * @param FlyInterface $flyBehavior
     * @param QuackInterface $quackBehavior
     */
    public function __construct(FlyInterface $flyBehavior, QuackInterface $quackBehavior)
    {
        parent::__construct($flyBehavior, $quackBehavior);
    }

    /**
     * @return string
     */
    public function display(): string
    {
        return 'I\'m a real Mallard duck';
    }
}