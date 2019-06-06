<?php
namespace src\Vehicle;

/**
 * Interface des véhicules
 */
interface VehicleInterface
{
    /**
     * Un véhicule doit pouvoir avancer
     * @param int $km
     */
    public function move(int $km): void;

    /**
     * Chaque véhicule a un bruit différent
     * @return string
     */
    public function makeNoise(): string;
}