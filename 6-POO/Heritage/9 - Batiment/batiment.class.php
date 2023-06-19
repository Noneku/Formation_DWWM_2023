<?php

class Batiment
{
    private $adresse;
    private $superficie;

    public function __construct($adresse)
    {
        $this->adresse = $adresse;
    }


    public function __toString()
    {
        return $this->adresse;
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
