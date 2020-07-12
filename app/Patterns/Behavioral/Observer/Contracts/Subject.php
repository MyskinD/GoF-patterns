<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 12.07.20
 * Time: 12:06
 */

namespace App\Patterns\Behavioral\Observer\Contracts;


interface Subject
{
    /**
     * @param Observer $observer
     * @return mixed
     */
    public function registerObserver(Observer $observer);

    /**
     * @param Observer $observer
     * @return mixed
     */
    public function removeObserver(Observer $observer);

    /**
     * @return mixed
     */
    public function notifyObservers();
}