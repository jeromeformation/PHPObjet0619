<?php

class Car extends RollingVehicle
{
    public function __construct(string $name, string $fuel, ?int $kms = 0, ?int $nbWheels = 4)
    {
        parent::__construct($name, $fuel, $nbWheels, $kms);
    }

    public function makeNoise(): string
    {
        return 'Vrouuuuuuum vrouuum';
    }
}