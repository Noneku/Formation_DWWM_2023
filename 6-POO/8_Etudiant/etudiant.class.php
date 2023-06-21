<?php

// Création de la class Etudiant 
class Etudiant
{
    // Déclaration des attributs
    private static $id;
    private $nom;
    private $prenom;
    private $dateNaissance;

    // Constructeur avec paeametre etudiant
    public function __construct($nom, $prenom,$dateNaissance)
    {
        self::$id++;  // L'identifiant sera auto incrémenté
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getId():int
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

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    // Fonction __to String pour transformer les variables en chaîne de caractère
    public function __toString()
    {
        return "Étudiant : [ID = " . self::$id . ", Nom = " . $this->nom . ", Prénom = " . $this->prenom . ", Date de naissance = " . $this->dateNaissance . "]";
    }
}