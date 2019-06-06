<?php

abstract class AbstractVehicle
{
    protected $brand;
    protected $nbWheels;
    protected $motor;
    protected $kilomoters;

    public function __construct(string $brand, string $motor, int $nbWheels)
    {
        $this->kilomoters = 0;
        $this->brand = $brand;
        $this->motor = $motor;
        $this->nbWheels = $nbWheels;
    }

    public abstract function move(int $km): void;

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * @param mixed $nbWheels
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return mixed
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     */
    public function setMotor($motor): void
    {
        $this->motor = $motor;
    }


}