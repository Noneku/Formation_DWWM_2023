<?php
class Livre {
private string $titre;  
private string $auteur;
private float $prix;


public function __construct(string $titre, string $auteur, float $prix)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }


/*
public function getTitre() {
    return $this->titre;
}

public function getAuteur() {
    return $this->auteur;
}

public function getPrix() {
    return $this->prix;
}
*/


    public function afficherlivre(): void 
    {
        echo "titre: " . $this->titre . "\n";
        echo "auteur: " . $this->auteur . "\n";
        echo "prix: " . $this->prix . "\n";

    }





}

 

?>