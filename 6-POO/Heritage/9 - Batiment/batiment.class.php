<?php

class Batiment
{
    protected $adresse;
    protected $superficie;

    public function __construct($adresse, $superficie)
    {
        $this->adresse = $adresse;
        $this->superficie = $superficie;
    }


    public function __toString()
    {
        return "Ce batiment est situé au " . $this->getAdresse();
    }

    /**
     * Get the value of superficie
     */ 
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set the value of superficie
     *
     * @return  self
     */ 
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
}
