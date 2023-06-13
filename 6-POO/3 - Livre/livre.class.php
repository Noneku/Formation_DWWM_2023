<?php

class Livre
{
    private string $titre;
    private string $auteur;
    private string $prix;

    public function __construct(string $titre, string $auteur, int $prix)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }

    public function afficher(): void
    {
        echo "Le titre est " . $this->titre . "\n";
        echo "L'auteur est " . $this->auteur . "\n";
        echo "Le prix est " . $this->prix . "€" . "\n";
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }
}
