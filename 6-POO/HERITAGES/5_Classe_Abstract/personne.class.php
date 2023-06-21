<?php

abstract class Personne {
    protected static int $count = 0;
    protected int $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $telephone;
    protected $salaire;
    
    public function __construct($nom,$prenom,$mail,$telephone,$salaire) {
        
        $this->id = ++self::$count;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    
    }
    
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setSalaire($salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }
    
    public function calculerSalaire() {
        return $this->salaire;
    }
    
    public function afficherInformations() {
        echo "Le salaire de " . $this->nom . " est de : " .$this->salaire. " €\n";
        echo "Le nouveau salaire de " . $this->nom . " est de : " . $this->calculerSalaire() . " €\n";
    }

}
