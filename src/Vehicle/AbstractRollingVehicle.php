<?php
namespace src\Vehicle;

abstract class AbstractRollingVehicle extends AbstractVehicle
{
    /**
     * @var int
     */
    protected $nbWheels;

    /**
     * RollingVehicle constructor.
     * @param string $name
     * @param string $fuel
     * @param int $nbWheels
     * @param int|null $kms
     */
    public function __construct(string $name, string $fuel, int $nbWheels, ?int $kms = 0)
    {
        parent::__construct($name, $fuel, $kms);
        $this->nbWheels = $nbWheels;
    }

    public function move(int $km): void
    {
        $this->kms += $km;
        echo "<p>{$this->name} : Je roule $km kilomètres sur la route</p>";
        echo "<p>{$this->makeNoise()}</p>";
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }


}