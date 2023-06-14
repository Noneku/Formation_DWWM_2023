<?php

// include_once "client.class.php";

class Compte extends Client
{
    private Client $client;
    private float $solde;
    private static int $nbCpt = 0;
    private int $code;

    // public function __construct(float $solde, Client $client)
    public function __construct(string $CIN, string $Nom, string $Prenom, string $Tel, float $solde)
    {
        $this->client = new Client($CIN,  $Nom,  $Prenom,  $Tel);
        $this->solde = $solde;
        // $this->client = $client;
        self::$nbCpt++;
        $this->code = self::$nbCpt;
    }

    public function crediter($somme): float
    {
        return $this->solde += $somme;
    }

    public function crediterCpt($somme, Compte $compte): float
    {
        if ($compte->solde >= $somme) {
            $this->solde += $somme;
            $compte->solde -= $somme;
        } else {
            return "Solde insuffisant";
        }
    }

    public function debiter($somme): float
    {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
        } else {
            return "Solde insuffisant";
        }
    }

    public function debiterCpt($somme, Compte $compte): float
    {
        if ($this->solde >= $somme) {
            $this->solde -= $somme;
            $compte->solde += $somme;
        } else {
            return "Solde insuffisant";
        }
    }

    public function Resume(): void
    {
        echo "Prénom: " . $this->client->getPrenom() . "\n";
        echo "Nom: " . $this->client->getNom() . "\n";
        echo "CIN: " . $this->client->getCIN() . "\n";
        echo "Téléphone: " . $this->client->getTel() . "\n";
        echo "Solde: " . $this->solde . "\n";
    }


    public function nbCompteCree(): void
    {
        echo "Nombre de compte crée: " . $this->code;
    }

    /**
     * Get the value of code
     */
    public function getCode(): int
    {
        return $this->code;;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of client
     */ 
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client): self
    {
        $this->client = $client;

        return $this;
    }
}
