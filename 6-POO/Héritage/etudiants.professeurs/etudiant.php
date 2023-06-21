<?php

include("personne.php");

class Etudiant extends Personne {

private string $cne;


public function __construct(string $nom, string $prenom, string $cne)
{

    parent::__construct($nom, $prenom);

    $this->cne = $cne;


}


public function __toString()
{

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