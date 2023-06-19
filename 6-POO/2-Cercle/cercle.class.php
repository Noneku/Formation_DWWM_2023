<?php

class Cercle {
    
    private int $centre;
    private int $rayon;
    private int $x;
    private int $y;

    public function __construct(int $x, int $y, int $rayon)
    {
        $this->x = $x;
        $this->y = $y;
        $this->rayon = $rayon;
    }

    public function getSurface() : float {
        //Calcule de l'air Pi * rayon * rayon
        return 3.14 * (pow($this->rayon, 2));
    }
    public function getPerimetre() : float {
        //Calcule de l'air Pi * (rayon * 2)
        return 3.14 * ($this->rayon * 2);
    }

    public function appartient(Point $point) : string {
        //Calculer la distance (x,y) du cercle par rapport au point (x,y)
        //Si le tous est égal au rayon du cercle ALORS ce point appartient au cercle

        $distanceCentrePoint = pow(($point->getAbcisse() - $this->x),2) + pow(($point->getOrdonnee() - $this->y),2);
        
        //Racine carre de la distance des deux point
        $checkDistance = round(sqrt($distanceCentrePoint), 0);

        if($checkDistance <= $this->rayon){
            return "Ce point appartient au Cercle";
        } else {
            return "Ce point n'appartient pas au Cercle";
        }
    }

    public function affichage(Cercle $cercle) : void {

    }

}
?>

//