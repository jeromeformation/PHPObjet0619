<?php

class Boat extends Vehicle
{
    /**
     * @var array
     */
    private $ports;

    public function __construct(string $brand, string $motor, array $ports)
    {
        parent::__construct($brand, $motor, 0);
        $this->ports = $ports;
    }

    public function move(int $km): void
    {
        parent::move($km);
        echo 'Bbuububle';
    }

    /**
     * @return array
     */
    public function getPorts(): array
    {
        return $this->ports;
    }

    /**
     * @param array $ports
     */
    public function setPorts(array $ports): void
    {
        $this->ports = $ports;
    }


}