<?php

require_once('./Employe.php');

class Professeur extends Employe
{
    private string $specialite;

    function __construct(string $nom, string $prenom,float $salaire, string $specialite) {

        parent::__construct($nom, $prenom, $salaire);
    	$this->specialite = $specialite;
    
    }

    /**
    * @return string
    */
    public function getSpecialite(): string {
    	return $this->specialite;
    }

    /**
    * @param string $specialite
    */
    public function setSpecialite(string $specialite): void {
    	$this->specialite = $specialite;
    }

    /**
    * @return string
    */
    public function __toString(): string {
    	return "Specialite: {$this->specialite}";
    }
}
