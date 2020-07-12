<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 04.07.20
 * Time: 22:02
 */

namespace App\Patterns\Behavioral\Strategy\Services;


use App\Patterns\Behavioral\Strategy\Contracts\FlyInterface;
use App\Patterns\Behavioral\Strategy\Duck;

class DuckService
{
    /** @var Duck  */
    protected $duck;

    /**
     * MallardDuckService constructor.
     * @param Duck $duck
     */
    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
    }

    /**
     * @return string
     */
    public function performFly(): string
    {
        return $this->duck->performFly();
    }

    /**
     * @return string
     */
    public function performQuack(): string
    {
        return $this->duck->performQuack();
    }

    /**
     * @return string
     */
    public function display(): string
    {
        return $this->duck->display();
    }

    /**
     * @param FlyInterface $flyBehavior
     */
    public function setFly(FlyInterface $flyBehavior): void
    {
        $this->duck->setFlyBehavior($flyBehavior);
    }
}