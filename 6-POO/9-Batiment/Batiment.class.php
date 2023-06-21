<?php

class Batiment 

{
    protected string $adresse;
    protected float $superficie;

    public function __construct (string $adresse, float $superficie) {
        $this->adresse = $adresse;
        $this->superficie = $superficie;
    }

    public function __toString () : string {
        return "Ce batiment est situé au " .$this->adresse. "et sa superficie est de " .$this->superficie. " m².";
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
}

?>