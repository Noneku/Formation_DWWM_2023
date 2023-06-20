<?php

class Voiture extends Vehicule
{
    private static $nbVehicule = 0;
    private $matricule;
    private $anneModele;
    private $prix;

    public function __construct($matricule, $anneModele, $prix)
    {
        self::$nbVehicule++;
        $this->matricule = "[".self::$nbVehicule."]-". $matricule;
        $this->anneModele = $anneModele;
        $this->prix = $prix;
    }

    public function demarrer() {
        return "La voiture demarre";
    }

    public function accelerer()
    {
        return "La voiture accelere";
    }

    public function __toString()
    {
        return
        "Matricule: ". $this->matricule. "\n".
        "Anne Modele: ". $this->anneModele. "\n".
        "Prix: ". $this->prix. "\n";
    }



    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of anneModele
     */ 
    public function getAnneModele()
    {
        return $this->anneModele;
    }

    /**
     * Set the value of anneModele
     *
     * @return  self
     */ 
    public function setAnneModele($anneModele)
    {
        $this->anneModele = $anneModele;

        return $this;
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
}
