<?php

require_once ("./Personne.class.php");

class Developpeur extends Personne 

{
    private string $specialite;

    public function __construct ($nom, $prenom, $mail, $telephone, $salaire, $specialite) {

        Personne::__construct ($nom, $prenom, $mail, $telephone, $salaire, $specialite);

        $this->specialite = $specialite;
    }


    public function calculerSalaire(): float
    {
        $this->salaire = $this->salaire * 0.20;
        return $this->salaire;
    }


    public function __toString () {
        return "Le salaire du Développeur " .$this->nom. " " .$this->prenom. " est : " .$this->salaire. " €, sa spécialité : " .$this->specialite. ".\n";
    }

   

    /**
     * Get the value of specialte
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialte
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}



?>