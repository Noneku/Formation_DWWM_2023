<?php
class Livre
{
    private string $titre;
    private string $auteur;
    private float $prix;

    public function __construct (string $titre, string $auteur, float $prix)

    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }

    /**
     * Get the value of titre
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of auteur
     */
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     */
    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
    
    //Méthode Afficher
    public function afficher() {
        echo "Titre: " . $this->titre . ", Auteur: " . $this->auteur . ", Prix: " . $this->prix;
    }
}
    

