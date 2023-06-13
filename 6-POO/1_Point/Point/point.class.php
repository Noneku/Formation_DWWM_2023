<?php
class Point
{
    private $abcisse;
    private $ordonnee;

    public function __construct(float $x, float $y){
        $this->abcisse = $x;
        $this->ordonnee = $y;
    }

    public function norme(): float{
        $distance = sqrt(($this->abcisse*$this->abcisse)+($this->ordonnee*$this->ordonnee));
        return $distance;
    }

    /**
     * Get the value of abcisse
     */ 
    public function getAbcisse()
    {
        return $this->abcisse;
    }

    /**
     * Set the value of abcisse
     *
     * @return  self
     */ 
    public function setAbcisse($abcisse)
    {
        $this->abcisse = $abcisse;

        return $this;
    }

    /**
     * Get the value of ordonnee
     */ 
    public function getOrdonnee()
    {
        return $this->ordonnee;
    }

    /**
     * Set the value of ordonnee
     *
     * @return  self
     */ 
    public function setOrdonnee($ordonnee)
    {
        $this->ordonnee = $ordonnee;

        return $this;
    }



}
