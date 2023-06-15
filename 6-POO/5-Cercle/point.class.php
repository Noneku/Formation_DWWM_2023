<?php

class Point
{
    private float $abscisse;
    private float $ordonnee;

    public function __construct(float $x, float $y)
    {
        $this->abscisse = $x;
        $this->ordonnee = $y;
    }

    public function norme(): float
    {
        return sqrt(($this->abscisse * $this->abscisse) + ($this->ordonnee * $this->ordonnee));
    }

    public function afficher(): void
    {
        echo "POINT(" . $this->abscisse . "," . $this->ordonnee . ")";
    }

    public function appartientAuCercle(Point $centre, float $rayon): bool
    {
        $distance = sqrt(pow($this->abscisse - $centre->abscisse, 2) + pow($this->ordonnee - $centre->ordonnee, 2));
        return $distance <= $rayon;
    }
}






















