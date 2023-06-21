<?php

include_once('personne.php');


class Manager extends Personne {

    private string $service;


public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, $service)

{

    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->mail = $mail;
    $this->telephone = $telephone;
    $this->salaire = $salaire;
    $this->service = $service;

    self::$id++;

}


public function calculerSalaire() {

$augmentation = $this->salaire * 0.35;
return $this->salaire + $augmentation;

}


public function afficher() : void {


echo self::$id. " - "."Le salaire du developpeur $this->nom"." "."$this->prenom est : ". $this->calculerSalaire()." €, son service : ". $this->getService();

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