<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 05.07.20
 * Time: 1:23
 */

namespace App\Patterns\Strategy\Services;


use App\Patterns\Strategy\Contracts\FlyInterface;
use App\Patterns\Strategy\ModelDuck;

class ModelDuckService
{
    protected $model;

    public function __construct(ModelDuck $model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function performFly(): string
    {
        return $this->model->performFly();
    }

    /**
     * @return string
     */
    public function performQuack(): string
    {
        return $this->model->performQuack();
    }

    /**
     * @return string
     */
    public function display(): string
    {
        return $this->model->display();
    }

    /**
     * @param FlyInterface $flyBehavior
     */
    public function setFly(FlyInterface $flyBehavior): void
    {
        $this->model->setFlyBehavior($flyBehavior);
    }
}