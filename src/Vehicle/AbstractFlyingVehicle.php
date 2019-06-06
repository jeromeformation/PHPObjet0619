<?php
namespace src\Vehicle;

abstract class AbstractFlyingVehicle extends AbstractVehicle
{
    /**
     * @var int
     */
    protected $wings;

    public function __construct(string $name, string $fuel, int $wings, ?int $kms = 0)
    {
        parent::__construct($name, $fuel, $kms);
        $this->wings = $wings;
    }

    /**
     * Un véhicule doit pouvoir avancer
     * @param int $km
     */
    public function move(int $km): void
    {
        echo $this->name . ": je vole dans le ciel ;";
    }

    /**
     * @return int
     */
    public function getWings(): int
    {
        return $this->wings;
    }

    /**
     * @param int $wings
     */
    public function setWings(int $wings): void
    {
        $this->wings = $wings;
    }

}