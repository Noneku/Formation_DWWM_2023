<?php

class Cercle
{
    private Point $centre;
    private int $rayon;

    public function __construct(float $x, float $y, int $rayon)
    {
        $this->centre = new Point($x,$y);
        $this->rayon = $rayon;
    }

    public function getPerimetre(): float
    {
        return round(($this->rayon * 2) * pi(),2);
    }

    public function getSurface(): float
    {
        return round(pi() * pow($this->rayon, 2),2);
    }

    public function appartient(): bool
    {
        $distance = pow(($this->centre->getAbcisse() - $this->centre->getAbcisse()), 2) + pow(($this->centre->getOrdonnee() - $this->centre->getOrdonnee()), 2);
        $distance = sqrt($distance);
        if ($distance <= pow($this->rayon, 2)) {
            return true;
        } else {
            return false;
        }
    }

    public function afficher(): void
    {
        echo "CERCLE(" . $this->centre->getAbcisse() . "," . $this->centre->getOrdonnee() . "," . $this->rayon . ")";
    }
}
