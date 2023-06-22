<?php

class Ouvrier extends Employe{


private string $Date_D_entrer;
private const SMIG = 2500;


public function __construct($Matricule,$Nom,$Prenom,$Date_de_naissance,$Date_D_entrer)
{
    parent::__construct($Matricule,$Nom,$Prenom,$Date_de_naissance);
    $this->Date_D_entrer = $Date_D_entrer;


}

public function GetSalaire() {
    $anneesAnciennete = date('2023') - date('2015', strtotime($this->Date_D_entrer));
    $salaire = self::SMIG + ($anneesAnciennete * 100);
    if ($salaire > self::SMIG * 2) {
        $salaire = self::SMIG * 2;
    }
    return $salaire;
}

public function __toString() {
    return parent::__toString() . "\nDate d'entrée: " . $this->Date_D_entrer;
}


}













?>