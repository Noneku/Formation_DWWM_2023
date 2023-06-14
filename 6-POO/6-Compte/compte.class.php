<?php

require "client.class.php";


class Compte 

{
    private float $solde = 0;
    public static int $code = 1;
    private Client $client;
    public int $cpt;

    public function __construct ($client) {
        $this->client = $client;
        $this->cpt = self::$code++;
    }


    public function crediter (float $somme) : float {
        $this->solde += $somme; 
        return $this->solde;
    }

    public function crediterCpte ($somme, $compte) : float {
        $compte->solde -= $somme;
        $this->solde += $somme;
        return $this->solde;
    }

    public function debiter (float $somme) : float {
        $this->solde -= $somme; 
        return $this->solde;
    }

    public function debiterCpte ($somme, $compte) : float {
        $this->solde -= $somme;
        return $compte->solde += $somme;
    }

    public function afficherCpte ($client) {
        echo "Numéro de compte : " .$this->cpt. "\n";
        echo "Propriétaire du compte : \n";
        $client->afficher(). "\n";
        echo "Solde du compte : " .$this->solde. "€\n\n";
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
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }
}


?>