<?php

include("batiment.php");

// La classe Maison(fille) va hériter de la classe Batiment(mère)
class Maison extends Batiment {
    
    // Déclaration des attributs de la classe fille uniquement (pas besoin de déclarer ceux de la classe mère)
    private int $nbPieces;

// Constructeur
public function __construct (string $adresse, float $superficie, int $nbPieces){

    // Déclaration du constructeur parent pour que la classe fille hérite des attrbuts de la classe mère 
    parent::__construct($adresse, $superficie);
    
    $this->nbPieces = $nbPieces;

}

public function __toString() : string
{

    return " La maison se trouve au : ". $this->getAdresse()." de superficie ". $this->getSuperficie()." m²". "avec en nombre de piece(s) : $this->nbPieces";
    // OU: 
    // return parent::__toString(). " avec en nombre de piece(s) : $this->nbPieces";
    // Le parent::_toString() retourne la fonction dans la classe mère
    
    
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