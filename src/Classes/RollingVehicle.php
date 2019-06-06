<?php

/**
 * Classe définissant les véhicules roulants
 */
abstract class RollingVehicle implements VehicleInterface
{
    /**
     * Le kilométrage du véhicule
     * @var int
     */
    private $kilometers;

    /**
     * Un véhicule doit pouvoir avancer d'un certain nombre de kilomètres
     * @param int $km
     */
    public function move(int $km): void
    {
        $this->kilometers += $km;
    }

    /**
     * Retourne le bruit du véhicule
     * @return string
     */
    public abstract function makeNoise(): string;

    /**
     * @return int
     */
    public function getKilometers(): int
    {
        return $this->kilometers;
    }

    /**
     * @param int $kilometers
     */
    public function setKilometers(int $kilometers): void
    {
        $this->kilometers = $kilometers;
    }
}