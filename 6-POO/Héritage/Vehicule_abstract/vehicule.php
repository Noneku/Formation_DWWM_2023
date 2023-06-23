<?php

abstract class Vehicule {

private string $matricule;
private int $annee;
private float $prix;


public function __construct(string $matricule, int $annee, float $prix){

    $this->matricule = $matricule;
    $this->annee = $annee;
    $this->prix =$prix;
    
}

abstract function demarrer();

abstract function accelerer();

abstract function __toString();



/**
 * Get the value of matricule
 */ 
public function getMatricule()
{
return $this->matricule;
}

/**
 * Set the value of matricule
 *
 * @return  self
 */ 
public function setMatricule($matricule)
{
$this->matricule = $matricule;

return $this;
}

/**
 * Get the value of annee
 */ 
public function getAnnee()
{
return $this->annee;
}

/**
 * Set the value of annee
 *
 * @return  self
 */ 
public function setAnnee($annee)
{
$this->annee = $annee;

return $this;
}

/**
 * Get the value of prix
 */ 
public function getPrix()
{
return $this->prix;
}

/**
 * Set the value of prix
 *
 * @return  self
 */ 
public function setPrix($prix)
{
$this->prix = $prix;

return $this;
}


}