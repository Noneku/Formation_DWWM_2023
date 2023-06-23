<?php

include("personne.php");

// La classe Employe herite de la classe Personne

class Employe extends Personne {

protected float $salaire;


public function __construct(string $nom, string $prenom, float $salaire)
{

    parent::__construct($nom, $prenom);

    $this->salaire = $salaire;

}


public function __toString()
{

    return parent::__toString()." "." mon salaire est : ".$this->salaire;
    
    
}



}