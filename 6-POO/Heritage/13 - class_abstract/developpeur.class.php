<?php

class Developpeur extends Personne
{
    private string $_specialite;

    public function __construct(string $nom, string $prenom, string $mail, string  $telephone, float $salaire, $_specialite)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->_specialite = $_specialite;
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
            "specialite: " . $this->getSpecialite() . "\n";
    }

    public function getSpecialite(): string
    {
        return $this->_specialite;
    }

    public function setSpecialite($_specialite): self
    {
        $this->_specialite = $_specialite;
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
