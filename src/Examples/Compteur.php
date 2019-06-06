<?php
namespace src\Examples;

class Compteur
{
    private static $compteur = 0;

    public static function addCompteur()
    {
        static::$compteur += 1;
    }

    /**
     * @return int
     */
    public static function getCompteur(): int
    {
        return self::$compteur;
    }
}