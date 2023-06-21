<?php

class Manager extends Personne{

    protected string $service;

    public function __construct($nom,$prenom,$salaire,$mail,$telephone,$service)
    {
        parent::__construct($nom,$prenom,$mail,$telephone,$salaire);
        $this->service = $service;
    }
    
    public function getService()
    {
        return $this->service;
    }

    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    public function claculerSalire()
{
    $salaire = $this->getSalaire();
    if ($this->service === "INFORMATIQUE") {
        $salaire*= 0.035;
    }

    return $salaire;
}

public function afficher(){

    echo "ID :"." ".$this->getId()." "."le salaire du Manager :"."".$this->getNom(). " ".$this->getPrenom()." ". "est :".$this->getSalaire(). " "."et son service est:"." ".$this->getService();echo PHP_EOL;
    
    }
}




















?>