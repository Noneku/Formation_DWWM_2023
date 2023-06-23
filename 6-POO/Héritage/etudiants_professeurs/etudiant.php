<?php

include("personne.php");


// La classe Etudiant va hériter de la classe Personne
class Etudiant extends Personne {

// ajout d'un attribut propre à la classe Etudiant
private string $cne;

// contrcuteur
public function __construct(string $nom, string $prenom, string $cne)
{
    // on reprend le constructeur de la classe mère
    parent::__construct($nom, $prenom);

    $this->cne = $cne;


}

//  la classe Etudiant va hériter des methodes de la classe parent(mère)
public function __toString()
{

  // ajout du parent::__toString + le CNE
  return parent::__toString()." "." mon CNE est : ".$this->getCne();
    
    
}






/**
 * Get the value of cne
 */ 
public function getCne()
{
return $this->cne;
}

/**
 * Set the value of cne
 *
 * @return  self
 */ 
public function setCne($cne)
{
$this->cne = $cne;

return $this;
}



}



?>