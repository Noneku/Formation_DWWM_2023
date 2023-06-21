<?php

// Declaration de la Class
class Batiment {

// Attribut en private donc seule la classe mère peut les instanciers
private string $adresse;
private float $superficie;

// Constructeur 
public function __construct (string $adresse, float $superficie){

    $this->adresse = $adresse;
    $this->superficie = $superficie; 

}

public function __toString() : string
{

  return " Le batiment se trouve au : $this->adresse avec comme superficie $this->superficie m²";
    
    
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
