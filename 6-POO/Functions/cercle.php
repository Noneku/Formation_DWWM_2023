<?php
include '../Functions/point.class.php';
// Définition de la class cercle
class cercle{

// Définition des objets de la class
private Point $centre;  // Injection de dépenance de la class Point à la class Cercle
private $rayon;

// Définition d'un constructeur des valeurs x, y et rayon
public function __construct($x, $y, $rayon)
{
    $this->centre = New Point($x, $y);
    $this ->rayon = $rayon;
}

// Définition de la formule du périmetre
public function getPerimetre(){
    return 2 * $this->rayon * pi();
}

//Définition de la formule de surface
public function getSurface() {
    return pi() * pow($this->rayon, 2);
}

public function appartient(Point $p){
    
    $distanceCentrePoint = pow(($p->getAbcisse() - $this-> centre -> getAbcisse()),2) + pow(($p->getOrdonnee() - $this->centre ->getOrdonnee()),2);
}
    //  Renvoie à la fonction centre
     
    public function getcentre()
    {
        return $this->centre;
    }

   
    // Permet de modifié la fonction centre au besoin
     
    public function setcentre($centre)
    {
        $this->_centre = $centre;

        return $this;
    }

    //  Renvoie à la fonction rayon
    
    public function getrayon()
    {
        return $this->rayon;
    }

    // Permet de modifié la fonction rayon au besoin
   
    public function setrayon($rayon)
    {
        $this->_rayon = $rayon;

        return $this;
    }
}



?>