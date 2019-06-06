<?php
namespace src\Vehicle;

class Moto extends AbstractRollingVehicle
{
    public function __construct(string $name, string $fuel, ?int $kms = 0, ?int $nbWheels = 2)
    {
        parent::__construct($name, $fuel, $nbWheels, $kms);
    }

    public function makeNoise(): string
    {
        return 'Bip bip biiiip';
    }
}