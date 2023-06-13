<?php

require "Client.class.php";

class Compte
{
    public static int $nCompte=1;
    private float $solde=0;
    private Client $proprietaire;
    public int $cpt;
public function __construct($proprietaire)
{
    
    $this-> proprietaire = $proprietaire;
    $this->cpt = self::$nCompte++;

}


public function Crediter(float $somme):float
{
    return $this->solde+=$somme;
}

public function CrediterCpt( $Compteadebiter,float $somme):float
{
    $Compteadebiter->solde-=$somme;
    return $this->solde+=$somme;
}

public function Debiter(float $solde):float
{
    return $this->solde-=$solde;
}

public function DebiterCpt( $CompteaCrediter,float $somme):float
{
    $this->solde-=$somme;
    
    return $CompteaCrediter->solde+=$somme; 
}

public function afficherCompte(Client $client):void
{

    $client= new Client($client-> getCIN(), $client->getNom(), $client-> getPrenom(), $client-> getTel());
    
    echo "Numero de compte : ".$this->cpt;
    echo "\nPropriétaire du compte :\n";
    $client->afficher();
    echo"Solde : ".$this->solde;

}
public function afficherNBCompte():void
{
    echo self::$nCompte;
}


    /**
     * Get the value of nCompte
     */ 
    public function getNCompte()
    {
        return $this->nCompte;
    }

    /**
     * Set the value of nCompte
     *
     * @return  self
     */ 
    public function setNCompte($nCompte)
    {
        $this->nCompte = $nCompte;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
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

    /**
     * Get the value of proprietaire
     */ 
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set the value of proprietaire
     *
     * @return  self
     */ 
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }
}



?>