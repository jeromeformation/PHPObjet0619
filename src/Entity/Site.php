<?php

namespace src\Entity;

class Site {
    private $idRegion;
    private $nom;
    private $pays_id_pays;

    /**
     * @return mixed
     */
    public function getIdRegion()
    {
        return $this->idRegion;
    }

    /**
     * @param mixed $idRegion
     */
    public function setIdRegion($idRegion): void
    {
        $this->idRegion = $idRegion;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPaysIdPays()
    {
        return $this->pays_id_pays;
    }

    /**
     * @param mixed $pays_id_pays
     */
    public function setPaysIdPays($pays_id_pays): void
    {
        $this->pays_id_pays = $pays_id_pays;
    }


}