<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 04.07.20
 * Time: 22:02
 */

namespace App\Patterns\Strategy\Services;


use App\Patterns\Strategy\MallardDuck;

class MallardDuckService
{
    /** @var MallardDuck  */
    protected $mallard;

    /**
     * MallardDuckService constructor.
     * @param MallardDuck $mallardDuck
     */
    public function __construct(MallardDuck $mallardDuck)
    {
        $this->mallard = $mallardDuck;
    }

    /**
     * @return string
     */
    public function performFly(): string
    {
        return $this->mallard->performFly();
    }

    /**
     * @return string
     */
    public function performQuack(): string
    {
        return $this->mallard->performQuack();
    }

    /**
     * @return string
     */
    public function display(): string
    {
        return $this->mallard->display();
    }
}