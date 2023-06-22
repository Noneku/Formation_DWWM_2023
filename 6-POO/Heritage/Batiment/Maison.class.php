<?php


class Maison extends Batiment
{
    private $nbPieces;

    public function __construct(string $adresse, float $superficie, int $nbPieces)
    {
        parent::__construct($adresse, $superficie);
        $this->nbPieces = $nbPieces;
    }

    public function __toString()
    {
        return parent::__toString() . ", et se compose de : " . $this->nbPieces . " pieces";
    }

    /**
     * @return int
     */
    public function getNbPieces(): int
    {
        return $this->nbPieces;
    }

    /**
     * @param int $nbPieces
     */
    public function setNbPieces(int $nbPieces)
    {
        $this->nbPieces = $nbPieces;
    }



}