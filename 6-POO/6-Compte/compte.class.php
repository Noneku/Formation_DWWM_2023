<?php

require "client.class.php";


class Compte 

{
    private float $solde = 0;
    public int $code;
    private Client $client;
    public static int $cpt = 0;

    public function __construct ($cni, $nom, $prenom, string $tel, $solde) {
        $this->client = new Client ($cni, $nom, $prenom, $tel);
        $this->solde = $solde;

        self::$cpt++;
        $this->code = self::$cpt;
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

    public function afficherCpte () {
        echo "Numéro de compte : " .$this->code. "\n";
        echo "Propriétaire du compte : \n";
        echo "Solde du compte : " .$this->solde. "€\n\n";
        echo "CNI : " . $this->client->getCni(). "\n" ;
        echo "Nom : " . $this->client->getNom(). "\n" ;
        echo "Prénom : " . $this->client->getPrenom(). "\n" ;
        echo "Tel : " . $this->client->getTel(). "\n" ;
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