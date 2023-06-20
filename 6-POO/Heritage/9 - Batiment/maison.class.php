<?php
class Maison extends Batiment
{
    private $nbPieces;

    public function __construct($adresse, $superficie, $nbPieces)
    {
        parent::__construct($adresse,$superficie);
        $this->nbPieces = $nbPieces;
    }

    public function __toString()
    {
        return "Cette maison situé au " . $this->getAdresse() . " avec une superficie de " . $this->getSuperficie() . " et a " . $this->nbPieces . " pieces";
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
