<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 04.07.20
 * Time: 10:39
 */

namespace App\Patterns\Strategy\Contracts;


interface FlyInterface
{
    /**
     * @return string
     */
    public function fly(): string ;
}