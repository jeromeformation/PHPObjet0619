<?php

class Moto
{
    private $marque;

    public function __construct($marque)
    {
        $this->marque = $marque;
    }

    public function __destruct()
    {
        echo 'Destruction';
    }

    public function __get($name)
    {
        var_dump('Propriété inexistante');
        var_dump('Propriété : ' . $name);
    }

    public function __set($name, $value)
    {
        var_dump('Propriété inexistante');
        var_dump('Propriété : ' . $name);
        var_dump('Valeur fournie : ' . $value);
    }

    public function __call($name, $arguments)
    {
        if($name === 'getName') {
            return $this->marque;
        }
    }

    public function __toString()
    {
        return 'Moto de marque : ' . $this->marque;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

}