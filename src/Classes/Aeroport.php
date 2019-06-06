<?php

class Aeroport
{
    /**
     * @var AbstractVehicle[]
     */
    private $vehicles;

    public function __construct()
    {
        $this->vehicles = [];
    }

    public function addVehicle(AbstractVehicle $vehicle)
    {
        $vehicle->move(15);
        $this->vehicles[] = $vehicle;
    }
}