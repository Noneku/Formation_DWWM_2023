<?php

class Point {
    private $x;
    private $y;
    
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficher() {
        echo "POINT(" . $this->x . "," . $this->y . ")\n";
    }
    
    public function getX() {
        return $this->x;
    }
    
    public function getY() {
        return $this->y;
    }
}

class Cercle {
    private $centre;
    private $rayon;
    
    public function __construct($centre, $rayon) {
        $this->centre = $centre;
        $this->rayon = $rayon;
    }

    public function getPerimetre(){
        return 2 * pi() * $this->rayon;
    }

    //
    public function getSurface() {
        return pi() * pow($this->rayon, 2);
    }

    public function appartient($p) {
        $distance = sqrt(pow($p->getX() - $this->centre->getX(), 2) + pow($p->getY() - $this->centre->getY(), 2));
        return $distance <= $this->rayon;
    }

    public function afficher() {
        echo "CERCLE(" . $this->centre->getX() . "," . $this->centre->getY() . "," . $this->rayon . ")\n";
    }
}

?>