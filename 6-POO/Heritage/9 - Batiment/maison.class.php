<?php
class Maison extends Batiment
{
    private $nbPieces;
    private $adresse;
    private $superficie;

    public function __construct($adresse, $superficie, $nbPieces)
    {
        $this->adresse = new Batiment($adresse);
        $this->superficie = $superficie;
        $this->nbPieces = $nbPieces;
    }

    public function __toString()
    {
        echo "Cette maison situé au " . $this->getAdresse() . " avec une superficie de " . $this->getSuperficie() . " et a " . $this->nbPieces . " pieces";
    }
    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getSuperficie()
    {
        return $this->superficie;
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
