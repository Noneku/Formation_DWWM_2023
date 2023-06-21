<?php

// Création de la class filiere 
class Filiere
{
    // Déclaration des attributs
    private static $id;
    private $code;
    private $libelle;
    private array $listeEtudiant;
    
    // Création du constructeur 
    public function __construct($code, $libelle, $listeEtudiant)
    {   // L'identifiant sera auto incrémenté
        self::$id++;
        $this->code = $code;
        $this->libelle = $libelle;
        $this->listeEtudiant = $listeEtudiant;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCode():string
    {
        return $this->code;
    }

    public function getLibelle():string
    {
        return $this->libelle;
    }
/**
     * Get the value of listeEtudiant
     */
    public function getListeEtudiant(): array
    {
        return $this->listeEtudiant;
    }

    /**
     * Set the value of listeEtudiant
     */
    public function setListeEtudiant(array $listeEtudiant): self
    {
        $this->listeEtudiant = $listeEtudiant;

        return $this;
    }

    // Fonction __tostring pour changer une variable en chaine de caractère et renvoyer au libellé de la matière entré 
    public function __toString()
    {
        return $this->libelle;
    }

}    