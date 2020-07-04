<?php
/**
 * Created by PhpStorm.
 * User: myskind
 * Date: 04.07.20
 * Time: 10:37
 */

namespace App\Patterns\Strategy;


use App\Patterns\Strategy\Contracts\FlyBehaviorInterface;
use App\Patterns\Strategy\Contracts\QuackBehaviorInterface;

abstract class Duck
{
    /** @var FlyBehaviorInterface  */
    protected $flyBehavior;

    /** @var QuackBehaviorInterface  */
    protected $quackBehavior;

    /**
     * Duck constructor.
     * @param FlyBehaviorInterface $flyBehavior
     * @param QuackBehaviorInterface $quackBehavior
     */
    public function __construct(FlyBehaviorInterface $flyBehavior, QuackBehaviorInterface $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    /**
     * @return mixed
     */
    public abstract function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo 'All ducks float, even decoys!';
    }
}