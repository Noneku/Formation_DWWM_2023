<?php

require_once ("./Personne.class.php");

class Developpeur extends Personne 

{
    private string $specialte;

    public function __construct ($nom, $prenom, $mail, $telephone, $salaire, $specialte) {

        Personne::__construct ($nom, $prenom, $mail, $telephone, $salaire, $specialte);

        $this->specialte = $specialte;
    }


    public function calculerSalaire(): float
    {
        $this->salaire = $this->salaire * 0.20;
        return $this->salaire;
    }

   

    /**
     * Get the value of specialte
     */ 
    public function getSpecialte()
    {
        return $this->specialte;
    }

    /**
     * Set the value of specialte
     *
     * @return  self
     */ 
    public function setSpecialte($specialte)
    {
        $this->specialte = $specialte;

        return $this;
    }
}



?>