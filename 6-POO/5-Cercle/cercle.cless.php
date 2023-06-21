<?php

class Cercle
{
    private Point $centre;
    private $rayon;
    private $x;
    private $y;

    public function __construct(int $x, int $y, int $rayon)
    {
        $this->x = $x;
        $this->y = $y;
        $this->rayon = $rayon;
    }

    public function getPerimetre(): float
    {
        return ($this->rayon * 2) * pi();
    }

    public function getSurface(): float
    {
        return pi() * pow($this->rayon, 2);
    }

    public function appartient(Point $point): bool
    {
        $distance = pow(($point->getAbcisse() - $this->x), 2) + pow(($point->getOrdonnee() - $this->y), 2);
        $distance = round(sqrt($distance), 0);
        if ($distance <= pow($this->rayon, 2)) {
            return true;
        } else {
            return false;
        }
    }

    public function afficher(): void
    {
        echo "CERCLE(" . $this->x . "," . $this->y . "," . $this->rayon . ")";
    }
}