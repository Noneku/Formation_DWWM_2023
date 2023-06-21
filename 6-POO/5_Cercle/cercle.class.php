<?php
// Création de la class Point reprise du précédent exo 
class Point
{
    public $abscisse;
    public $ordonnee;

    public function __construct(float $x, float $y)
    {
        $this->abscisse = $x;
        $this->ordonnee = $y;
    }

    public function afficher()
    {
        return "POINT({$this->abscisse},{$this->ordonnee})";
    }
}
// Création de la class cercle 
class Cercle
{
    public $centre; // Attribut de type Point
    public $rayon;

    public function __construct($centre, $rayon)
    {
        $this->centre = $centre;

        $this->rayon = $rayon;
    }
    public function getPerimetre()
    {
        return 2 * M_PI * $this->rayon;
    }

    public function getSurface()
    {
        return M_PI * pow($this->rayon, 2);
    }

    public function appartient($p)
    {
        // Vérifie si la distance entre le centre du cercle et le point p est inférieure ou égale au rayon
        $distance = sqrt(pow($p->abscisse - $this->centre->ordonnee, 2) + pow($p->ordonnee - $this->centre->ordonnee, 2));
        return $distance <= $this->rayon;
    }

    public function afficher()
    {
        return "CERCLE({$this->centre->abscisse},{$this->centre->ordonnee},{$this->rayon})";
    }
}
