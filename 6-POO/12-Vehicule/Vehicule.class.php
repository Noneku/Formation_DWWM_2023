<?php

abstract class Vehicule 

{
    private int $matricule;
    private int $annee;
    private float $prix;
    public static int $cpt = 455;


    public function __construct ($annee, $prix) {
        $this->annee = $annee;
        $this->prix = $prix;

        self::$cpt++;
        $this->matricule = self::$cpt;
    }

    public function demarrer () {

    }

    public function accelerer () {

    }

    public function __toString () : string {
        return "\nMatricule : " .$this->matricule. "\nAnnée du modèle : " .$this->annee. "\nPrix : " .$this->prix. " €";
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

    /**
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

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


?>