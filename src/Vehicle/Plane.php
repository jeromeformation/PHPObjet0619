<?php
namespace src\Vehicle;

class Plane extends AbstractFlyingVehicle
{
    /**
     * Chaque véhicule a un bruit différent
     * @return string
     */
    public function makeNoise(): string
    {
        return 'FFFFRrrr ssschhsssshhhshhh';
    }
}