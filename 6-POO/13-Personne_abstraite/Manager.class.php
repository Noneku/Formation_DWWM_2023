<?php

require_once ("./Personne.class.php");

class Manager extends Personne 

{
    private string $service;

    public function __construct ($nom, $prenom, $mail, $telephone, $salaire, $service) {

        Personne::__construct ($nom, $prenom, $mail, $telephone, $salaire);

        $this->service = $service;
    }

    public function calculerSalaire(): float
    {
        $this->salaire = $this->salaire * 1.35;
        return $this->salaire;
    }

   

    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
}


?>