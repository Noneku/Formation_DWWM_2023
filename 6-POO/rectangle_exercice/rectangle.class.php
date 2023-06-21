<?php

// La classe est le moule qui sert à fabriquer les objets

class Rectangle {

// Déclaration des attributs 
private float $Longueur;
private float $Largeur;

// Déclaration du constructeur

public function __construct(float $x, float $y){

    //obtenir la propriété d'une classe par $this->
    $this->Longueur = $x; 
    $this->Largeur = $y;

}

// Déclaration de la fonction/Méthode : Vérification du périmetre 
public function perimetre() : float {
    
    return (($this->Longueur + $this->Largeur)*2);
    

}

// Déclaration de la fonction/Méthode : Vérification de l'aire
public function aire() : float {

  return ($this->Longueur * $this->Largeur);
    
}

// Déclaration de la fonction/Méthode : Vérification si c'est un carré
public function estCarre(): bool {

    if ( $this->Longueur != $this->Largeur) {

        return true;

    } else {

        return false;
    }

}

// Déclaration de la fonction/Méthode : affichage de tous les attributs
public function afficherRectangle(): void {
    
    echo "- longueur :". $this->Longueur ; 
    echo " - largeur :".$this->Largeur; 
    echo " - Perimetre :". $this->perimetre();
    echo " - aire :" .$this->aire(); 
    
    if ( $this->Longueur != $this->Largeur) {
    
        echo "- Ce n'est pas un carré";
    
    } else {
    
        echo " - Il s'agit d'un carré ";
    } ;

}

/**
 * Get the value of Largeur
 */ 
public function getLargeur()
{
return $this->Largeur;
}

/**
 * Set the value of Largeur
 *
 * @return  self
 */ 
public function setLargeur($Largeur)
{
$this->Largeur = $Largeur;

return $this;
}

/**
 * Get the value of Longueur
 */ 
public function getLongueur()
{
return $this->Longueur;
}

/**
 * Set the value of Longueur
 *
 * @return  self
 */ 
public function setLongueur($Longueur)
{
$this->Longueur = $Longueur;

return $this;
}


}



?>