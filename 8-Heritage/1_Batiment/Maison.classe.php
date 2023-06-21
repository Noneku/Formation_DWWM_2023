<?php

include_once "Batiment.classe.php";

class Maison extends Batiment {
    private $nbPieces;

    public function __construct($adresse, $superficie, $nbPieces) {
        parent::__construct($adresse, $superficie);
        $this->nbPieces = $nbPieces;
    }

    public function getNbPieces() {
        return $this->nbPieces;
    }

    public function setNbPieces($nbPieces) {
        $this->nbPieces = $nbPieces;
        return $this;
    }

    public function __toString() {
        return parent::__toString() . " J'ai une maison avec: " . $this->getNbPieces() . " pièces.";
    }
}
?>






