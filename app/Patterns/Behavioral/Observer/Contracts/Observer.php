<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 12.07.20
 * Time: 12:07
 */

namespace App\Patterns\Behavioral\Observer\Contracts;


interface Observer
{
    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     * @return mixed
     */
    public function update(float $temp, float $humidity, float $pressure);
}