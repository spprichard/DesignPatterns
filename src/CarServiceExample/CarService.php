<?php

/**
 * Created by PhpStorm.
 * User: stevenprichard
 * Date: 2017-06-12
 * Time: 7:56 AM
 */
interface CarService
{
    public function getCost();
    public function getDescription();
}


class BasicInspection implements CarService
{
    //Core Service
    public function getCost()
    {
        return 20;
    }

    public function getDescription()
    {
        return "Basic Inspection";
    }
}

class OilChange implements CarService
{

    protected $carSevice;

    public function __construct(CarService $carService)
    {
        $this->carSevice = $carService;
    }


    public function getCost()
    {
        return 29 + $this->carSevice->getCost();
    }

    public function getDescription()
    {
        return $this->carSevice->getDescription() . ", and Oil Change";
    }
}

class TireRotation implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }


    public function getCost()
    {
        return 10 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ", and Tire Rotation";
    }
}

$service = (new TireRotation(new BasicInspection()));

echo $service->getDescription();
