<?php

class Rectangle
{
private $longueur;
private $largeur;

public function __construct(float $longueur, float $largeur){

    $this-> longueur = $longueur;
    $this-> largeur = $largeur;

}

//Fonction de calcul du perimetre
public function perimetre(){    
    $perimetre= ($this-> longueur+$this-> longueur)+($this-> largeur+$this-> largeur);
    return "le perimètre du rectangle est : ".$perimetre;
}

//Fonction de calcul de l'aire
public function aire(){    
    $aire= $this-> longueur*$this-> largeur;
    return "l'aire du rectangle est : ".$aire;
}

//Verification du carre
public function estCarre(){
    if( $this-> longueur == $this-> largeur){

        return true;
    }else {

}

}

//fonction resumé
public function afficherRectangle(){

    $perimetre= ($this-> longueur+$this-> longueur)+($this-> largeur+$this-> largeur);
    $aire= $this-> longueur*$this-> largeur;
    
    if ($this-> longueur == $this-> largeur){
        echo "Longueur: ".$this-> longueur."- Largeur: ".$this-> largeur."- Périmètre: ".$perimetre."- Aire: ".$aire." \nil s'agit d'un carré";

    }else{
        echo "ce n'est pas un carré";
    }

}








/**
 * Get the value of longueur
 */ 
public function getLongueur()
{
return $this->longueur;
}

/**
 * Set the value of longueur
 *
 * @return  self
 */ 
public function setLongueur($longueur)
{
$this->longueur = $longueur;

return $this;
}

/**
 * Get the value of largeur
 */ 
public function getLargeur()
{
return $this->largeur;
}

/**
 * Set the value of largeur
 *
 * @return  self
 */ 
public function setLargeur($largeur)
{
$this->largeur = $largeur;

return $this;
}
}