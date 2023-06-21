<?php 
abstract class Vehicule {
protected $matricule;
protected $année;
protected $prix;
private static $nombreVehicules = 0;

public function __construct($année, $prix) {
    self::$nombreVehicules++;
    $this->matricule = self::$nombreVehicules;
     $this->année = $année;
    $this->prix = $prix; 
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

abstract public function demarrer();

abstract public function accelerer();

public function __toString() {
    return "Matricule: " . $this->matricule . ", Année du modèle: " . $this->année . ", Prix: " . $this->prix;

}
}
?>