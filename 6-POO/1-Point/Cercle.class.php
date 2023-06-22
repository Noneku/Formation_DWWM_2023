<?php
include 'Point.class.php';

class Cercle
{

    private Point $_centre; //Objet de type Point
    private int $_rayon; //le rayon : int


public function __construct($x, $y, $rayon)
{
    $this->_centre = new Point($x, $y);
    $this->_rayon = $rayon;
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



?>