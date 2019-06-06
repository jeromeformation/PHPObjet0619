<?php
namespace src\Vehicle;

trait Energizer {

    private $energy = 100;

    /**
     * Recharge l'énergie à 100
     */
    public function fillMax(): void
    {
        $this->energy = 100;
    }

    /**
     * Consomme de l'énergie
     * @param int $energy
     */
    public function consumeEnergy(int $energy): void
    {
        $this->energy -= $energy;
    }

    /**
     * @return mixed
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @param mixed $energy
     */
    public function setEnergy($energy): void
    {
        $this->energy = $energy;
    }

}