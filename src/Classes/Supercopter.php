<?php

class Supercopter extends AbstractFlyingVehicle
{
    /**
     * Chaque véhicule a un bruit différent
     * @return string
     */
    public function makeNoise(): string
    {
        return 'Tataatatataatta !';
    }
}