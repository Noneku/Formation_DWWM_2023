<?php
// Création de la class client 
class Client

{
    // Déclaration des attributs en private 
    private $CIN;
    private $Nom;
    private $Prénom;
    private $Tél;

    // Constructeur avec en paramètre les informations du client 
    public function __construct($CIN, $Nom, $Prénom, $Tél)
    {
        $this->CIN = $CIN;
        $this->Nom = $Nom;
        $this->Prénom = $Prénom;
        $this->Tél = $Tél;
    }

    public function getCIN()
    {
        return $this->CIN;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getPrénom()
    {
        return $this->Prénom;
    }

    public function getTél()
    {
        return $this->Tél;
    }
    // Affichage des infos client
    public function afficher()
    {
        echo "Informations du client :\n";
        echo "CIN : " . $this->CIN . "\n";
        echo "Nom : " . $this->Nom . "\n";
        echo "Prénom : " . $this->Prénom . "\n";
        echo "Tél : " . $this->Tél . "\n";
    }
}
