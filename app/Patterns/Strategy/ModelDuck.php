<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 05.07.20
 * Time: 1:18
 */

namespace App\Patterns\Strategy;


use App\Patterns\Strategy\Contracts\FlyInterface;
use App\Patterns\Strategy\Contracts\QuackInterface;

class ModelDuck extends Duck
{
    /**
     * ModelDuck constructor.
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
        return 'I\'m a model duck';
    }
}