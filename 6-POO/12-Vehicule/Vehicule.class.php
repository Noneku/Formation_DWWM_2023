<?php
abstract class  Vehicule{

private  int $matricule;
private string $annee;
private float $prix;
private static int $nb=0;

public function __construct($annee,$prix)
{
    $this->matricule = self::$nb;
    $this->annee = $annee;
    $this->prix = $prix;
}

Abstract  function Demarrer();
abstract function Accelerer();



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
}



?>