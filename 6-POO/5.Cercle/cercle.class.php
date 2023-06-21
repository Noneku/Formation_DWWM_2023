<?php
include '.\1.Point\class.point.php';
class Cercle
{
    private Point $_centre;
    private int $_rayon;


    public function __construct(int $x, int $y, int $R)
    {
        $this->_centre = new Point ($x, $y);
        $this->_rayon = $R;
        
    }

    public function afficher(): void
    {
        echo 'CERCLE (' . $this->_centre.', '.$this->_rayon . ')';
        echo "\n";
        echo 'le périmètre est : ' . $this->getPérimètre();
        echo "\n";
        echo 'la surface est : ' .$this->getSurface();
    }

    public function getPérimètre() : float
    {
        $périmètre = ($this->_rayon)*2*3.14;
        return $périmètre;
    }

    public function getSurface() : float
    {
        $surface = pow($this->_rayon,2)*3.14;
        return $surface;
    }
    public function appartient(Point $point) : bool
    {
        $distanceCentrePoint = pow(($point->getAbcisse() - $this->x),2) + pow(($point->getOrdonnee() - $this->y),2);
        if($check == $point){
            return true;
        }else{
            return false; 
        }

    }


    /**
     * Get the value of _centre
     */ 
    public function get_centre()
    {
        return $this->_centre;
    }

    /**
     * Set the value of _centre
     *
     * @return  self
     */ 
    public function set_centre($_centre)
    {
        $this->_centre = $_centre;

        return $this;
    }

    /**
     * Get the value of _rayon
     */ 
    public function get_rayon()
    {
        return $this->_rayon;
    }

    /**
     * Set the value of _rayon
     *
     * @return  self
     */ 
    public function set_rayon($_rayon)
    {
        $this->_rayon = $_rayon;

        return $this;
    }
}
