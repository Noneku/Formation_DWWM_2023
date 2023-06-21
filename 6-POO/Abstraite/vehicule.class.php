<?php
abstract class Vehicule
{
    private static $matricule;
    private int $anneeModele;
    private float $prix;

    public function __construct(int $anneeModele, float $prix)
    {
        $this->anneeModele = $anneeModele;
        $this->prix = $prix;
        self::$matricule++;
    }

    abstract public function demarrer();

    abstract public function accelerer();

    public function __toString(): string
    {
        return "Matricule : " . self::$matricule . "\nAnnée du modèle : " . $this->anneeModele . "\nPrix : " . $this->prix;
    }

    /**
     * Get the value of anneeModele
     */ 
    public function getAnneeModele()
    {
        return $this->anneeModele;
    }

    /**
     * Set the value of anneeModele
     *
     * @return  self
     */ 
    public function setAnneeModele($anneeModele)
    {
        $this->anneeModele = $anneeModele;

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