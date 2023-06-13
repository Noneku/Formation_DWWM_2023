<?php

// include_once "client.class.php";

class Compte extends Client
{
    private Client $client;
    private $solde;
    private static int $code = 0;

    // public function __construct(float $solde, Client $client)
    public function __construct($CIN,  $Nom,  $Prenom,  $Tel, $solde)
    {
        $this->client = new Client($CIN,  $Nom,  $Prenom,  $Tel);
        $this->solde = $solde;
        // $this->client = $client;
        self::$code++;
    }

    public function crediter($somme)
    {
        return $this->solde += $somme;
    }

    public function crediterCpt($somme, Compte $compte)
    {
        if ($compte->solde >= $somme) {
            $this->solde += $somme;
            $compte->solde -= $somme;
        } else {
            return "Solde insuffisant";
        }
    }

    public function debiter($somme)
    {
        if ($this->solde >= $somme) {
            $this->solde = $this->solde - $somme;
        } else {
            return "Solde insuffisant";
        }
    }

    public function debiterCpt($somme, Compte $compte)
    {
        if ($this->solde <= $somme) {
            $this->solde -= $somme;
            $compte->solde += $somme;
        } else {
            return "Solde insuffisant";
        }
    }

    public function Resume()
    {
        echo "Prénom: " . $this->client->getPrenom() . "\n";
        echo "Nom: " . $this->client->getNom() . "\n";
        echo "CIN: " . $this->client->getCIN() . "\n";
        echo "Téléphone: " . $this->client->getTel() . "\n";
        echo "Solde: " . $this->solde . "\n";
    }


    public function nbCompteCree()
    {
        echo "Nombre de compte crée: " . self::$code;
    }

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return self::$code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}
