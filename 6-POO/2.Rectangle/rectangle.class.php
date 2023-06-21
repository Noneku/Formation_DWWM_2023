<?php
class Rectangle
{
    private $longueur;
    private $largeur;


    /**
     * Get the value of dimension
     */
    public function __construct(float $longueur, float $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function périmètre(): float
    {
        $périmètre = ($this->longueur + $this->largeur) * 2;
        return $périmètre;
    }
    public function aire(): float
    {
        $aire = ($this->longueur * $this->largeur);
        return $aire;
    }

    public function estCarre(): bool
    {
        if ($this->longueur == $this->largeur) {
            return true;
        } else {
            return false;
        }

    }



    public function afficherRectangle(): void
    {
        echo "Longueur: " . $this->longueur . "\n";
        echo "largeur: " . $this->largeur . "\n";
        echo "Le périmètre est " . $this->périmètre() . "\n";
        echo "La surface est " . $this->aire() . "\n";
        if ($this->estCarre()) {
            echo "il s'agit d'un carré";
        } else {
            echo "Ce n'est pas un carré";
        }
    }


    // /**
    //  * Set the value of dimension
    //  *
    //  */ @return  self
    //  */ 
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get the value of ordonnee
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set the value of ordonnee
     *
     * @return  self
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }



}