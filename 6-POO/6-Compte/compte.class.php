<?php

class Compte
{
    private static $counter = 0;
    
    private int $numéroCompte;
    private float $solde;
    private $propriétaire;

    public function __construct($solde,$propriétaire) {
        $this->numéroCompte = self::$counter++;
        $this->solde = $solde;
        $this->propriétaire = $propriétaire;
    }




function crediter(float $somme): void{
    $this->solde += $somme;
    echo "Opération effectuée : compte créditer de $somme euros\n";

}





public function crediterCpt(float $somme, $compteADébiter): void {
  
        $compteADébiter->solde -= $somme;
        $this->solde += $somme;
        echo "Opération effectuée .\n";
   
}



function debiter($somme): void{
    $this->solde -= $somme;
    echo "Opération effectuée : compte débiter de $somme euros\n";
}




public function debiterCpt(float $somme, $compteACréditer): void {
  
        $compteACréditer->solde += $somme;
        $this->solde -= $somme;
        echo "Opération effectuée.\n";
   
}



public function afficherResume() {
    echo "\nRésumé du compte :\n";
    echo "Numéro de compte : " . $this->numéroCompte . "\n";
    echo "Solde : " . $this->solde . "\n";
    echo "Informations du propriétaire :\n";
    echo "CIN : " . $this->propriétaire->getCIN() . "\n";
    echo "Nom : " . $this->propriétaire->getNom() . "\n";
    echo "Prénom : " . $this->propriétaire->getPrenom() . "\n";
    echo "Tél : " . $this->propriétaire->getTel() . "\n";
}



  public static function afficherNombreComptes() {
        echo "Nombre de comptes créés : " . self::$counter . "\n";
}















    /**
     * Get the value of numéroCompte
     */ 
    public function getNuméroCompte(): int
    {
        return $this->numéroCompte;
    }

    /**
     * Set the value of numéroCompte
     *
     * @return  self
     */ 
    public function setNuméroCompte($numéroCompte)
    {
        $this->numéroCompte = $numéroCompte;

        return $this;
    }

    /**
     * Get the value of propriétaire
     */ 
    public function getPropriétaire(): string
    {
        return $this->propriétaire;
    }

    /**
     * Set the value of propriétaire
     *
     * @return  self
     */ 
    public function setPropriétaire($propriétaire)
    {
        $this->propriétaire = $propriétaire;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde(): float
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }
}




?>