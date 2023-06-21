<?php


include "Batiment.class.php";

class Maison extends Batiment

{   
    private int $nbPieces;

    public function __construct (string $adresse, float $superficie, int $nbPieces) {
        
        Batiment::__construct($adresse, $superficie);

        $this->nbPieces = $nbPieces;
    }

    public function __toString () : string {
        return parent::__toString(). " et comporte " .$this->nbPieces. " pièces.";
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