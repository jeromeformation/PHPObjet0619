<?php

/**
 * Classe permettant de stocker des véhicules
 */
class Aeroport
{
    /**
     * Tableau stockant les véhicules
     * @var VehicleInterface[]
     */
    private $vehicles;

    /**
     * On initialise les véhicules en tant que tableau vide
     */
    public function __construct()
    {
        $this->vehicles = [];
    }

    /**
     * On ajoute un véhicule dans l'aéroport
     * On peut utiliser la méthode "move" grâce au typage
     * @param VehicleInterface $vehicle - Un bateau (Boat), un avion (Plane), ...
     */
    public function addVehicle(VehicleInterface $vehicle)
    {
        $vehicle->move(15);
        $this->vehicles[] = $vehicle;
    }

    /**
     * @return VehicleInterface[]
     */
    public function getVehicles(): array
    {
        return $this->vehicles;
    }

    /**
     * @param VehicleInterface[] $vehicles
     */
    public function setVehicles(array $vehicles): void
    {
        $this->vehicles = $vehicles;
    }
}