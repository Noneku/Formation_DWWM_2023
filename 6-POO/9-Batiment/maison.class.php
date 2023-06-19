<?php


//Maison hérite de Batiment
class Maison extends Batiment
{
//Declaration
private int $nbPieces;



//Création du construct avec des paramètres du parent
function __construct($nbPieces, $adresse , $superficie)
{
    //appelle du construct de parent 
    parent::__construct($adresse , $superficie);

    //parametre de Maison
    $this->nbPieces = $nbPieces;
}



//Conversion de l'objet en type string
function __toString()
{

  return "Adresse : ".$this -> getAdresse().
  "\n D'une superficie : ".$this-> getSuperficie()."\n Avec ".
  $this->nbPieces." pieces"; 

}









/**
 * Get the value of nbPieces
 */ 
public function getNbPieces()
{
return $this->nbPieces;
}

/**
 * Set the value of nbPieces
 *
 * @return  self
 */ 
public function setNbPieces($nbPieces)
{
$this->nbPieces = $nbPieces;

return $this;
}


}
?>