<?php
/**
 * Created by PhpStorm.
 * User: MyskinD
 * Date: 12.07.20
 * Time: 21:50
 */

namespace App\Patterns\Behavioral\Observer;


use App\Patterns\Behavioral\Observer\Contracts\Observer;
use App\Patterns\Behavioral\Observer\Contracts\Subject;

class WeatherData implements Subject
{
    /** @var array  */
    private $observers;

    /** @var float */
    private $temperature;

    /** @var float */
    private $humidity;

    /** @var float */
    private $pressure;

    /**
     * WeatherData constructor.
     */
    public function __construct()
    {
        $this->observers = [];
    }

    /**
     * @param Observer $observer
     * @return mixed|void
     */
    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param Observer $observer
     * @return mixed|void
     */
    public function removeObserver(Observer $observer)
    {
        $key = array_search($observer, $this->observers);
        if ($key >= 0) {
            unset($this->observers[$key]);
        }
    }

    /**
     * @return mixed|void
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update(
                $this->temperature,
                $this->humidity,
                $this->pressure
            );
        }
    }

    private function measurementsChanged()
    {
        $this->notifyObservers();
    }

    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function setMeasurements(
        float $temperature,
        float $humidity,
        float $pressure
    ) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

}