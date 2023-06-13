<?php

class Livre
{

    private string $titre;
    private string $auteur;
    private float $prix;
    
    
    function __construct(string $titre , string $auteur , float $prix)
    {

        $this -> titre = $titre;
        $this-> auteur = $auteur;
        $this-> prix = $prix;

    }

    function donnerTitre(): string {
        return "Donner le titre : $this->titre";
    }
    function donnerAuteur(): string {
        return "Donner l'auteur : $this->auteur";
    }
    function donnerPrix(): string {
        return "Donner le prix $this->prix";
    }


    function afficher(): void
    {
        echo"Le titre est $this->titre \n";
        echo"L'auteur est $this->auteur \n";
        echo"Le prix est $this->prix € \n \n";
        

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
     *
     * @return  self
     */ 
    public function setTitre($titre)
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
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
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
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}
?>