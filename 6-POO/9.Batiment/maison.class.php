<?php
include '\batiment.class.php';
class maison extends batiment
{
    private $nbPieces;

    public function __construct(int $nbP, string $a, string $s)
    {
        $this->nbPieces = $nbP;

    }

  
}