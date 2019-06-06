<?php

class Plane extends AbstractVehicle
{
    private $maxAlt;

    public function move(int $km): void
    {
        // On rajoute un comportement
        echo 'BRRRRRrrhh';
    }

    /**
     * @return mixed
     */
    public function getMaxAlt()
    {
        return $this->maxAlt;
    }

    /**
     * @param mixed $maxAlt
     */
    public function setMaxAlt($maxAlt): void
    {
        $this->maxAlt = $maxAlt;
    }

    public function getWheels()
    {
        return $this->nbWheels . ' roues';
    }
}