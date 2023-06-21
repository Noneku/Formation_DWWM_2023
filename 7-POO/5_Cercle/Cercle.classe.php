<?php
//creation de la class point = centre du cercle
class Point {
    private float $x;
    private float $y;
//constructeur qui permet de définir les valeurs de x et de y.
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
//Une méthode afficher () qui affiche une chaîne de caractères POINT(x,y).
    public function afficher():void{
        echo "POINT(" . $this->x . "," . $this->y . ")";
    }
//getters de class point
    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    
}


//creation de la class cercle
class Cercle {
    private $centre;
    private $rayon;
//constructeur qui permis de definir les valeurs centre et rayon
    public function __construct($centre, $rayon) {
        $this->centre = $centre;
        $this->rayon = $rayon;
    }

    //methode getPerimetre():retourne le périmètre du cercle.
    public function getPerimetre():float{
        return 2 * M_PI * $this->rayon;
    }
//methode getSurface():retourne la surface du cercle.
    public function getSurface() :float{
        return M_PI * pow($this->rayon, 2);
    }
//methode appartient(Point p):retourne si le point p appartient ou non au cercle
    public function appartient($point) :bool{
        $distance = sqrt(pow($point->getX() - $this->centre->getX(), 2) + pow($point->getY() - $this->centre->getY(), 2));
        return $distance <= $this->rayon;

        
    }
    
//methode afficher(): Affiche une chaîne de caractères de type CERCLE(x,y,R)
    public function afficher() :void{
        echo "CERCLE(" . $this->centre->getX() . "," . $this->centre->getY() . "," . $this->rayon . ")";
    }


}








?>