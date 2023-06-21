<?php
class Point
{
    private $abcisse;
    private $ordonnee1;

    public function __construct(float $x, float $y){
        $this->abcisse = $x;
        $this->ordonnee1 = $y;
    }

    public function norme(): String{
        $distance = sqrt(($this->abcisse*$this->abcisse)+($this->ordonnee1*$this->ordonnee1));
        return "la norme du point (".$this->abcisse.","."$this->ordonnee1".") est : "."$distance";
        
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
        return $this->ordonnee1;
    }

    /**
     * Set the value of ordonnee
     *
     * @return  self
     */ 
    public function setOrdonnee($ordonnee1)
    {
        $this->ordonnee1 = $ordonnee1;

        return $this;
    }



}
