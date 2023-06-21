<?php

class Livre
{
    private string $Titre;
    private string $Auteur;
    private float $Prix;

    public function __construct(string $Titre, string $Auteur, float $Prix,)
    {
        $this->Titre = $Titre;
        $this->Auteur = $Auteur;
        $this->Prix = $Prix;
    }
    /**
     * Get the value of Titre
     */
    public function getTitre(): string
    {
        return $this->Titre;
    }
    /**
     * Set the value of Titre
     */
    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }
    /**
     * Get the value of Auteur
     */
    public function getAuteur(): string
    {
        return $this->Auteur;
    }
    /**
     * Set the value of Auteur
     */
    public function setAuteur($Auteur): self
    {
        $this->Auteur = $Auteur;
        return $this;
    }
    /**
     * Get the value of Prix
     */
    public function getPrix(): float
    {
        return $this->Prix;
    }
    /**
     * Set the value of Prix
     */
    public function setPrix(float $Prix): self
    {
        $this->Prix = $Prix;
        return $this;
    }

    public function afficher()
    {
        echo "Titre : " . $this->Titre . "\n";
        echo "Auteur : " . $this->Auteur . "\n";
        echo "Prix : " . $this->Prix . "\n";
    }
}
