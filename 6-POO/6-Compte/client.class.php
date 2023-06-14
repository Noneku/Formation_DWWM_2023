<?php

class Client
{
    private string $CIN;
    private string $nom;
    private string $prenom;
    private string $tel;

    function __construct($CIN, $nom , $prenom , $tel)
    {
        $this-> CIN = $CIN;
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> tel = $tel; 
    }


    public function afficher() {
        echo "Informations du client :\n";
        echo "CIN : " . $this->CIN . "\n";
        echo "Nom : " . $this->nom . "\n";
        echo "Prénom : " . $this->prenom . "\n";
        echo "Tél : " . $this->tel . "\n"."\n";
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
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of prénom
     */ 
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prénom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}




?>