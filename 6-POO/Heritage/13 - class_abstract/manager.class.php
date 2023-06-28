<?php

class Manager extends Personne
{
    private $_service;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, string $salaire, string $_service)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->_service = $_service;
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
            "service: " . $this->getService() . "\n";
    }

    public function getService(): string
    {
        return $this->_service;
    }

    public function setService($_service): self
    {
        $this->_service = $_service;
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
