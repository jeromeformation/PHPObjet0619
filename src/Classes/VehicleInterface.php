<?php

interface VehicleInterface {
    /**
     * Un véhicule doit pouvoir avancer d'un certain nombre de kilomètres
     * @param int $km
     */
    public function move(int $km): void;

    /**
     * Retourne le bruit du véhicule
     * @return string
     */
    public function makeNoise(): string;
}