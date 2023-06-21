<?php

//Héritage de la classe Personne
class Developpeur extends Personne
{

private string $specialite;



public function __construct($specialite , $nom , $prenom , $mail , $telephone , $salaire )
{
    parent::__construct($nom , $prenom , $mail , $telephone , $salaire);
    $this->specialite = $specialite;
}

//Instanciation de la méthode abstraite calculerSalaire()
public function calculerSalaire(): float{
    return $this->salaire += ($this->salaire * 25 ) /100;
}


public function afficher(): void{

echo " Le salaire du développeur ".$this->nom." ".$this->prenom." est ".$this->salaire." € , sa spécialité : ".$this->specialite."\n";

}









/**
 * Get the value of specialite
 */ 
public function getSpecialite()
{
return $this->specialite;
}

/**
 * Set the value of specialite
 *
 * @return  self
 */ 
public function setSpecialite($specialite)
{
$this->specialite = $specialite;

return $this;
}
}

?>