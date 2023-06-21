<?php
class Livre
{
   private $titre;
   private $auteur;
   private $prix;


    public function __construct(string $titre, string $auteur,  float $prix)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;

    }

    public function Afficher(): void
    {
        echo 'Le titre est ' . $this->titre . ', ';
        echo "l'auteur est " . $this->auteur . ', ';
        echo 'le prix est de ' . $this->prix;
    }



    public function Titre($titre)
    {
        return $this -> titre;
    }
    // public function getTitre()
    // {
    //     return $this->titre;
    // }



    public function Auteur($auteur)
    {
 

        return $this -> auteur;
    }

    // public function getAuteur()
    // {
    //     return $this->auteur;
    // }


    public function Prix($prix)
    {

        return $this->prix;
    }

    // public function getPrix()
    // {
    //     return $this->prix;
    // }

}