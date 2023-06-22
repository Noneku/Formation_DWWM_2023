<?php
require 'point.class.php';

class cercle {
 
        private int $centre;
        private int $rayon;
        private int $x;
        private int $y;

        public function __construct(int $centre, int $rayon, int $x, int $y) {
            $this->centre = $centre;
            $this->rayon = $rayon;
            $this->x = $x;
            $this->y = $y;
        }
    
        public function getPerimetre() :float {
            return 2 * pi() * $this->rayon;
        }
    
        public function getSurface() {
            return pi() * pow($this->rayon, 2);
        }
    
        public function appartient($point) :string {
            // Calcul de la distance entre le centre du cercle et le point donné
            $distance = sqrt(pow($point->abscisse - $this->centre->abscisse, 2) + pow($point->ordonnee - $this->centre->ordonnee, 2));
            // Vérification si la distance est inférieure ou égale au rayon du cercle
            return $distance <= $this->rayon;
        }
    
        public function afficher() {
            return "CERCLE(" . $this->centre->afficher() . "," . $this->rayon . ")";
        }
    }
    
    // Exemple d'utilisation des classes
    
    // Création d'un point
    $point = new Point(1, 2);
    echo $point->afficher() . "\n"; // Affiche POINT(1,2)
    
    // Création d'un cercle
    $cercle = new Cercle($point, 5);
    echo $cercle->afficher() . "\n"; // Affiche CERCLE(POINT(1,2),5)
    echo $cercle->getPerimetre() . "\n"; // Affiche le périmètre du cercle
    echo $cercle->getSurface() . "\n"; // Affiche la surface du cercle
    
    // Vérification si un point appartient au cercle
    $point2 = new Point(4, 5);
    if ($cercle->appartient($point2)) {
        echo "Le point appartient au cercle\n";
    } else {
        echo "Le point n'appartient pas au cercle\n";
    }

?>