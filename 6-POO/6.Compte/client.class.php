<?php
class Client
{
    private string $CIN;
    private string $Nom;
    private string $Prenom;
    private string $Tél;
    public static int $cpt = 0;

    public function __construct(int $c, string $n, string $p, string $t)
    {   
        $this->CIN = $c;
        $this->Nom = $n;
        $this->Prenom = $p;
        $this->Tél = $t;
        self::$cpt++;
    }

    public function affichercompte(): void
    {
        echo "numéro de Compte: " . $this->cpt . "\n";
        // echo "Solde de compte: " . $this-> . "\n";
        echo "Propriétaire du compte : "."\n";
        echo "CIN : " . $this-> CIN. "\n";
        echo "Nom : " . $this-> Nom. "\n";
        echo "Nom : " . $this-> Prenom. "\n";
        echo "Tél : " . $this-> Tél. "\n";

    }
    /**
     * Get the value of CIN
     */
    public function getCIN()
    {
        return $this->CIN;
    }

    /**
     * Set the value of CIN
     *
     * @return  self
     */
    public function setCIN($CIN)
    {
        $this->CIN = $CIN;

        return $this;
    }

    /**
     * Get the value of Nom
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set the value of Nom
     *
     * @return  self
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Get the value of p
     */
    public function getP()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of p
     *
     * @return  self
     */
    public function setP($p)
    {
        $this->Prenom = $p;

        return $this;
    }

    /**
     * Get the value of Tél
     */ 
    public function getTél()
    {
        return $this->Tél;
    }

    /**
     * Set the value of Tél
     *
     * @return  self
     */ 
    public function setTél($Tél)
    {
        $this->Tél = $Tél;

        return $this;
    }
}