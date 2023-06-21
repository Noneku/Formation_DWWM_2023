<?php

abstract class Vehicule {
    private static $matriculeCounter = 0;
    private $matricule;
    private $anneeModele;
    private $prix;

public function __construct($anneeModele, $prix) {
        $this->matricule = ++self::$matriculeCounter;
        $this->anneeModele = $anneeModele;
        
       
$this->prix = $prix;
    }

    public function getMatricule() {
        return $this->matricule;
    }

    public function setMatricule($matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getAnneeModele() {
        return $this->anneeModele;
    }

    public function setAnneeModele($anneeModele): self
    {
        $this->anneeModele = $anneeModele;

        return $this;
    }
    public function getPrix() {
        
        return $this->prix;
    }

    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public abstract function demarrer();

    public abstract function accelerer();

    public function __toString() {

        return "Le matricule est " . $this->matricule . ", L'année du modèle est " . $this->anneeModele . ", Le prix est " . $this->prix;
    }



    
}