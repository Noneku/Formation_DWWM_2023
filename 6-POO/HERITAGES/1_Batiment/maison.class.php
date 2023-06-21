<?php
// Création de la class maison fille de la classe batiment 
class Maison extends Batiment {
    private $nbPieces;

    public function __construct(string $adresse, string $superficie,int $nbPieces) {
        parent::__construct($adresse, $superficie);
         
        $this->nbPieces = $nbPieces;
    }

    public function getNbPieces() {
        return $this->nbPieces;
    }

    public function setNbPieces($nbPieces) {
        $this->nbPieces = $nbPieces;
    }

    public function __toString() {
        return parent::__toString() . ", Nombre de pièces: " . $this->nbPieces;
    }
}
