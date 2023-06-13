<?php

class Rectangle
{

    private $longueur;
    private $largeur;


    function __construct(float $longueur , float $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }


    function périmètre(float $longueur , float $largeur){

        $périmètre = (2*$this->largeur)+(2*$this->longueur);
        return $périmètre;
        
    }


    function aire(float $longueur , float $largeur){

        $aire = ($this->largeur*$this->longueur);
        return $aire;
       

    }


    function estCarre(float $longueur , float $largeur){
        if($this->longueur == $this->largeur){
            echo "C'est un carré\n";
        }else{
            echo "Ce n'est pas un carré \n";
        }
    }

    function afficherRectangle($longueur,$largeur){
        echo "Affichage du rectangle : \n";
        echo "Longueur :".$this-> longueur."\n"; 
        echo "Largeur :".$this-> largeur."\n"; 
        echo "Périmètre :". $this->périmètre($longueur,$largeur)."\n";
        echo "Aire :".$this -> aire($longueur,$largeur)."\n";
        $this -> estCarre($longueur,$largeur)."\n";

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

?>