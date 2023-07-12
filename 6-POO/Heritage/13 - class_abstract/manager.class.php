<?php

class Manager extends Personne
{
    private $_specialite;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, string $salaire, string $specialite)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->_specialite = $specialite;
    }

    public function calculerSalaire(): float
    {
        return $this->salaire *= 1.35;
    }

    public function afficher(): string
    {

        return
            "id: " . $this->getId() . "\n" .
            "nom: " . $this->getNom() . "\n" .
            "prenom: " . $this->getPrenom() . "\n" .
            "mail: " . $this->getMail() . "\n" .
            "telephone: " . $this->getTelephone() . "\n" .
            "salaire: " . $this->getSalaire() . "\n" .
            "specialite: " . $this->getSpecialite() . "\n";
    }

    public function getSpecialite(): string
    {
        return $this->_specialite;
    }

    public function setSpecialite($specialite): self
    {
        $this->_specialite = $specialite;
        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function getMail(): string
    {
        return $this->mail;
    }
    public function getTelephone(): string
    {
        return $this->telephone;
    }
    public function getSalaire(): string
    {
        return $this->salaire;
    }
}
