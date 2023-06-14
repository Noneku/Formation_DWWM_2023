<?php

class Rectangle 
{

    private $longueur;
    private $largeur;

    // Constructeur :
    public function __construct (float $largeur, float $longueur) {
        $this->longueur = $largeur;
        $this->largeur = $longueur;
    }


    // Fonction pour calculer le périmètre :
    public function perimetre() : float {

        $perimetre = ($this->longueur + $this->largeur) * 2;

        return $perimetre;
    }


    // Fonction pour calculer l'aire :
    public function aire () : float {

        $aire = ($this->longueur * $this->largeur);

        return $aire;
    }


    // Fonction pour déterminer s'il s'agit d'un carré ou non :
    public function estCarre () : bool {

        if ($this->largeur == $this->longueur) {
            return true;
        } else {
            return false;
        }
    }


    // Fonction qui affiche les caractéristiques :
    public function afficherRectangle () : void {
        
       echo "\nDonner la longueur du rectangle : " .$this->longueur. ".\n";
       echo "Donner la largeur du rectangle : " .$this->largeur.  ".\n";
       echo "- Longueur : " .$this->longueur. " cm.\n";
       echo "- Largeur : " .$this->largeur.  " cm.\n";
       echo "- Périmètre : " .$this->perimetre(). " cm.\n"; 
       echo "- Aire : " .$this->aire(). " cm².\n";
        
        if ($this->estCarre()) {
            echo "Il s'agit d'un carré.\n";
        } else {
            echo "Ce n'est pas un carré.\n";
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


?>