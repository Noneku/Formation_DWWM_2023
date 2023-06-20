<?php

abstract class Vehicule {
    private $matricule;
    private $anneModele;
    private $prix;

    public function __construct($matricule, $anneModele, $prix) {
        $this->matricule = $matricule;
        $this->anneModele = $anneModele;
        $this->prix = $prix;
    }

    abstract public function demarrer();
    abstract public function accelerer();



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
}