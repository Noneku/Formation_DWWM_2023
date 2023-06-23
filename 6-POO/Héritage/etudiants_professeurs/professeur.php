<?php

include("employe.php");

// La classe Professeur va hériter de la classe Employe qui herite de la classe Personne
class Professeur extends Employe {

// ajout d'un attribut  à la classe Professeur
private string $specialite;


public function __construct(string $nom, string $prenom, float $salaire, string $specialite)
{

    parent::__construct($nom, $prenom, $salaire);

    $this->specialite = $specialite;

}

//  la classe Professeur va hériter des methodes de la classe parent(mère) qui est la classe Employe
public function __toString()
{
     // ajout du parent::__toString + la spécialité 
    return parent::__toString()." "." ma spécialité  est : ".$this->getSpecialite();
    
    
}




/**
 * Get the value of specialite
 */ 
public function getSpecialite()
{
return $this->specialite;
}

/**
 * Set the value of specialite
 *
 * @return  self
 */ 
public function setSpecialite($specialite)
{
$this->specialite = $specialite;

return $this;
}


}