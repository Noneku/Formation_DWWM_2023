<?php
class Developpeur extends Personne{

private string $specialite;

public function __construct($nom,$prenom,$mail,$telephone,$salaire,$specialite)
{
    parent::__construct($nom,$prenom,$mail,$telephone,$salaire);
    $this->specialite = $specialite;
}

public function calculerSalaire()
{
    return $this->salaire*=1.2;
}

public function __toString()
{
    return "le salaire du developpeur".$this->nom." ".$this->prenom." est : ".$this->salaire."€, sa specilaité : ".$this->specialite.".";
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