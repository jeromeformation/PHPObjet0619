<?php

class Produit
{
    private $id;
    private $name;
    private $description;
    private $price;
    private $nbVues;
    private $dateCreation;
    private $dateModification;
    private $etatPublication;
    private $imageName;

    /**
     * Retourne les 50 premiers caractères de la description
     * @return string
     */
    public function getShortDescription(): string
    {
        return substr($this->description, 0, 50) . "...";
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        if ($price >= 0) {
            $this->price = $price;
        }
    }

    /**
     * @return mixed
     */
    public function getNbVues()
    {
        return $this->nbVues;
    }

    /**
     * @param mixed $nbVues
     */
    public function setNbVues($nbVues): void
    {
        if ($nbVues >= 0) {
            $this->$nbVues = $nbVues;
        }
        $this->nbVues = $nbVues;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation): void
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return mixed
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * @param mixed $dateModification
     */
    public function setDateModification($dateModification): void
    {
        $this->dateModification = $dateModification;
    }

    /**
     * @return mixed
     */
    public function getEtatPublication()
    {
        return $this->etatPublication;
    }

    /**
     * @param mixed $etatPublication
     */
    public function setEtatPublication($etatPublication): void
    {
        $this->etatPublication = $etatPublication;
    }

    /**
     * @return mixed
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @param mixed $imageName
     */
    public function setImageName($imageName): void
    {
        $this->imageName = $imageName;
    }

}
