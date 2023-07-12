<?php

class Developpeur extends Personne
{
    private $_service;

    public function __construct($nom, $prenom, $mail, $telephone, $salaire, $specialite)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->_service = $specialite;
    }

    public function calculerSalaire(): float
    {
        return $this->salaire *= 1.20;
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
            "specialite: " . $this->getService() . "\n";
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

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
}
