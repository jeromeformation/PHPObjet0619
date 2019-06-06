<?php
namespace src\Vehicle;

class Aeroport
{
    /**
     * @var VehicleInterface[]
     */
    private $vehicles;

    public function __construct()
    {
        $this->vehicles = [];
    }

    public function addVehicle(VehicleInterface $vehicle)
    {
        $this->vehicles[] = $vehicle;

        echo $vehicle->makeNoise();
    }
}

