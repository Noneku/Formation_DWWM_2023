<?php

class Cadre extends Employe{

private string $Indice;

public function __construct($Matricule,$Nom,$Prenom,$Date_de_naissance,$Indice)
{
    parent::__construct($Matricule,$Nom,$Prenom,$Date_de_naissance);
    $this->Indice = $Indice;


}

public function GetSalaire() {
    switch ($this->Indice) {
        case 1:
            return 13000;
        case 2:
            return 15000;
        case 3:
            return 17000;
        case 4:
            return 20000;
        default:
            return 0;
    }
}

public function __toString() {
    return parent::__toString() . "\nIndice: " . $this->Indice;
}







}

















?>