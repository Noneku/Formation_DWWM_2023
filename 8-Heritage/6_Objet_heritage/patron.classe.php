<?php
class Patron extends Employe{

    //un chiffre d’affaire et un pourcentage.
    private float $Chiffre_D_Affaire;
    private float $Pourcentage;
    
    
    public function __construct( $Matricule,$Nom,$Prenom,$Date_de_naissance,$Chiffre_D_Affaire,$Pourcentage)
    {
        parent::__construct($Matricule,$Nom,$Prenom,$Date_de_naissance);
        $this->Chiffre_D_Affaire =  $Chiffre_D_Affaire;
        $this->Pourcentage =   $Pourcentage;
    
    
    }
    
    public function GetSalaire()
{
    $salaire = $this->Chiffre_D_Affaire * ($this->Pourcentage / 100);
    
    return $salaire;
}
public function __toString() {
    return parent::__toString() . "\nChiffre d'affaire: " . $this->Chiffre_D_Affaire . "\nPourcentage: " . $this->Pourcentage;
}

    
    
    }

















?>