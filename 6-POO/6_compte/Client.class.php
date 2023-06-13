<?php

class Client
{

    private string $CIN;
    private string $Nom;
    private string $Prenom;
    private string $Tel;

    public function __construct(string $CIN, string $Nom,string $Prenom, string $Tel)
    {
        $this-> CIN = $CIN;
        $this-> Nom = $Nom;
        $this-> Prenom = $Prenom;
        $this-> Tel = $Tel;
    }
    public function afficher(){
        echo "CIN : ".$this-> CIN."\nNom : ".$this-> Nom."\nprénom : ".$this-> Prenom."\nTél : ".$this-> Tel."\n";
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
     * Get the value of Prenom
     */ 
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @return  self
     */ 
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Get the value of Tel
     */ 
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * Set the value of Tel
     *
     * @return  self
     */ 
    public function setTel($Tel)
    {
        $this->Tel = $Tel;

        return $this;
    }
}












?>