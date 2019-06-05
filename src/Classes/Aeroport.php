<?php

class Aeroport
{
    /**
     * @var Vehicle[]
     */
    private $vehicles;

    public function __construct()
    {
        $this->vehicles = [];
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $vehicle->move(15);
        $this->vehicles[] = $vehicle;
    }
}