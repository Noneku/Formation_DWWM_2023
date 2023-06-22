<?php

class Rectangle {

    private $Longueur;
    private $Largeur;

    function __construct(float $Longueur, float $Largeur)
    {
        $this->Longueur = $Longueur;
        $this->Largeur = $Largeur;
    }

    public function perimetre(){
        $calculP = ($this->Longueur + $this->Largeur)*2;
        return "Le périmetre du rectangle est " .$calculP;
    }

    public function aire(){
        $calculA = ($this->Longueur * $this->Largeur);
        return "L'aire du rectangle est " .$calculA;
    }

    public function estCarre(){
        if ($this->Longueur == $this->Largeur) {
            return "cest un carré";
        }else {
            return "Ce n'est pas un carré";
        }
    }

    public function afficherRectangle(){

        $calculP = ($this->Longueur + $this->Largeur)*2;
        $calculA = ($this->Longueur * $this->Largeur);
        $carre = $this->estCarre();

        return "Longueur : $this->Longueur  Largeur : $this->Largeur  Périmétre : $calculP  Aire : $calculA  $carre";
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