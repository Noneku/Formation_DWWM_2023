<?php

require_once('./Personne.php');

class Employe extends Personne
{
  protected float $salaire;  

  function __construct(string $nom, string $prenom, float $salaire) {
    parent::__construct($nom, $prenom);
      $this->salaire = $salaire;
  
  }
  /**
  * @return float
  */
  public function getSalaire(): float {
  	return $this->salaire;
  }

  /**
  * @param float $salaire
  */
  public function setSalaire(float $salaire): void {
  	$this->salaire = $salaire;
  }


  /**
  * @return string
  */
  public function __toString(): string {
  	return "Salaire: {$this->salaire}";
  }
}
