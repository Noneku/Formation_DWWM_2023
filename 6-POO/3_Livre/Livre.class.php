<?php

class Livre
{

 //Déclaration des attributs de la class    
    private string $Titre;
    private string $Auteur;
    private float $Prix;

//Constructeur de la class livre
    public function __construct(string $Titre, string $Auteur, float $Prix)
    {
        $this->Titre = $Titre;
        $this->Auteur = $Auteur;
        $this->Prix = $Prix;

    }

//Affiche les informations de la class livre
    public function afficherLivre(): void 
    {
        echo "Le titre du livre est ".$this->Titre."\n";
        echo "L'auteur est ".$this->Auteur."\n";
        echo "Le prix du livre est ".$this->Prix."\n";
    }


/**
 * Get the value of Titre
 */ 
    public function getTitre()
    {
        return $this->Titre;
    }

/**
 * Set the value of Titre
 *
 * @return  self
 */ 
    public function setTitre($Titre)
    {
        $this->Titre = $Titre;

        return $this;
    }

/**
 * Get the value of Auteur
 */ 
    public function getAuteur()
    {
        return $this->Auteur;
    }

/**
 * Set the value of Auteur
 *
 * @return  self
 */ 
    public function setAuteur($Auteur)
    {
        $this->Auteur = $Auteur;

        return $this;
    }

/**
 * Get the value of Prix
 */ 
    public function getPrix()
    {
        return $this->Prix;
    }

/**
 * Set the value of Prix
 *
 * @return  self
 */ 
    public function setPrix($Prix)
    {
        $this->Prix = $Prix;

        return $this;
    }
}