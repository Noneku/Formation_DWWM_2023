<?php

class Maison extends Batiment {
    private int $nbPieces;

    function __construct(int $nbPieces) {
    	$this->nbPieces = $nbPieces;
    
    }

    /**
    * @return int
    */
    public function getNbPieces(): int {
    	return $this->nbPieces;
    }

    /**
    * @param int $nbPieces
    */
    public function setNbPieces(int $nbPieces): void {
    	$this->nbPieces = $nbPieces;
    }

    /**
    * @return string
    */
    public function __toString(): string {
    	return "NbPieces: {$this->nbPieces}";
    }
}
?>