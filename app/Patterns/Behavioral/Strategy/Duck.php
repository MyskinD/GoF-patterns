<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 04.07.20
 * Time: 10:37
 */

namespace App\Patterns\Behavioral\Strategy;


use App\Patterns\Behavioral\Strategy\Contracts\FlyInterface;
use App\Patterns\Behavioral\Strategy\Contracts\QuackInterface;

abstract class Duck
{
    /** @var FlyInterface  */
    protected $flyBehavior;

    /** @var QuackInterface  */
    protected $quackBehavior;

    /**
     * Duck constructor.
     * @param FlyInterface $flyBehavior
     * @param QuackInterface $quackBehavior
     */
    public function __construct(FlyInterface $flyBehavior, QuackInterface $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    /**
     * @return mixed
     */
    public abstract function display(): string;

    /**
     * @return string
     */
    public function performFly(): string
    {
        return $this->flyBehavior->fly();
    }

    /**
     * @return string
     */
    public function performQuack(): string
    {
        return $this->quackBehavior->quack();
    }

    /**
     * @return string
     */
    public function swim(): string
    {
        return 'All ducks float, even decoys!';
    }

    /**
     * @param FlyInterface $fb
     */
    public function setFlyBehavior(FlyInterface $fb)
    {
        $this->flyBehavior = $fb;
    }

    /**
     * @param QuackInterface $qb
     */
    public function setQuackBehavior(QuackInterface $qb)
    {
        $this->quackBehavior = $qb;
    }
}