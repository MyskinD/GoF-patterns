<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 04.07.20
 * Time: 10:43
 */

namespace App\Patterns\Strategy\Contracts;


interface QuackInterface
{
    /**
     * @return string
     */
    public function quack(): string;
}