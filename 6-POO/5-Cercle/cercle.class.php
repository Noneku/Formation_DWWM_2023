<?php

require "../1-Point\Point\point.class.php";

class Cercle 

{
    private Point $centre;
    private float $rayon;

    public function __construct ($x, $y, $rayon) {
        $this->centre = new Point ($x, $y);
        $this->rayon = $rayon;
    }


    public function getPerimetre () {
        $perimetre = ($this->rayon*2)*pi();
        return $perimetre;
    }

    public function getSurface () {
        $aire = pow($this->rayon, 2)*pi();
        return $aire;
    }

    public function appartient (Point $point) : bool {

        $point = new Point ($point -> getAbcisse(), $point -> getOrdonnee());
        $check = pow(($point->getAbcisse()-$this->centre-> getAbcisse()),2)+pow(($point->getOrdonnee()-$this->centre-> getOrdonnee()),2);;

        if ($check <= $this->rayon) {
            return true;
        } else {
            return false;
        }
    }

    public function afficher (Point $point) {

        if ($this->appartient($point)) {
            echo "Le point est dans le cercle.";
        } else {
            echo "Le point n'est pas dans le cercle.";
        }
    }

    /**
     * Get the value of rayon
     *
     * @return float
     */
    public function getRayon(): float
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @param float $rayon
     *
     * @return self
     */
    public function setRayon(float $rayon): self
    {
        $this->rayon = $rayon;

        return $this;
    }

    /**
     * Get the value of centre
     */ 
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Set the value of centre
     *
     * @return  self
     */ 
    public function setCentre($centre)
    {
        $this->centre = $centre;

        return $this;
    }
}

?>