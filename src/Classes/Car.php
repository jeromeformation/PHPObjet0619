<?php


class Car extends AbstractVehicle
{
    public function move(int $km): void
    {
        echo 'Vrooum vroum la voiture';
    }
}