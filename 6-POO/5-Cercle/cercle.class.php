<?php

class Cercle
{
    private Point $centre;
    private int $rayon;

    public function __construct(Point $centre, int $rayon)
    {
        $this->centre = $centre;
        $this->rayon = $rayon;
    }




    

    public function getPerimetre(): float
    {
        return 2 * pi() * $this->rayon;
    }

    public function getSurface(): float
    {
        return pow($this->rayon, 2) * pi();
    }

    public function appartient(Point $point): bool
    {
        return $point->appartientAuCercle($this->centre, $this->rayon);
    }

    public function afficher(): void
    {
        echo "CERCLE( rayon ". $this->rayon . ")";
    }











    
    /**
     * Get the value of rayon
     */ 
    public function getRayon(): float
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }
}











    

  

