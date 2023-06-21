<?php

abstract class Vehicule{

private string $matricule;
private int $année;
private string $modele;
private float $prix;
private static $nb = 0; 


function __construct($matricule , $année , $modele , $prix )
{
    $this->matricule = $matricule;
    $this->année = $année;
    $this->modele = $modele;
    $this->prix = $prix; 
}




abstract function démarrer();

abstract function avancer();



function __toString()
{
    return  "\nImmatriculé : ".$this->matricule."\nAnnée : ".$this->année."\nModele : ".$this->modele."\nPrix : ".$this->prix ;
    
    
}

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
 * Get the value of modele
 */ 
public function getModele()
{
return $this->modele;
}

/**
 * Set the value of modele
 *
 * @return  self
 */ 
public function setModele($modele)
{
$this->modele = $modele;

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

/**
 * Get the value of année
 */ 
public function getAnnée()
{
return $this->année;
}

/**
 * Set the value of année
 *
 * @return  self
 */ 
public function setAnnée($année)
{
$this->année = $année;

return $this;
}

/**
 * Get the value of nb
 */ 
public function getNb()
{
return $this->nb;
}

/**
 * Set the value of nb
 *
 * @return  self
 */ 
public function setNb($nb)
{
$this->nb = $nb;

return $this;
}
}