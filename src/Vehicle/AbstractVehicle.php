<?php
namespace src\Vehicle;

abstract class AbstractVehicle implements VehicleInterface
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $fuel;
    /**
     * @var int|null
     */
    protected $kms;

    /**
     * AbstractVehicle constructor.
     * Typage des kilomètres :
     * - ?int : le type donné est un entier ou null (pas de paramètre)
     * - $kms = 0 : si le paramètre n'est pas donné, la valeur par défaut est 0
     * @param string $name
     * @param string $fuel
     * @param int|null $kms
     */
    public function __construct(string $name, string $fuel, ?int $kms = 0)
    {
        $this->name = $name;
        $this->fuel = $fuel;
        $this->kms = $kms;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFuel(): string
    {
        return $this->fuel;
    }

    /**
     * @param string $fuel
     */
    public function setFuel(string $fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @return int|null
     */
    public function getKms(): ?int
    {
        return $this->kms;
    }

    /**
     * @param int|null $kms
     */
    public function setKms(?int $kms): void
    {
        $this->kms = $kms;
    }
}