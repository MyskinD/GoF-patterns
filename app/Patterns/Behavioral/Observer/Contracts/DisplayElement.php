<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 12.07.20
 * Time: 12:10
 */

namespace App\Patterns\Behavioral\Observer\Contracts;


interface DisplayElement
{
    /**
     * @return mixed
     */
    public function display();
}