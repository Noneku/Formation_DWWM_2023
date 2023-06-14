<?php

//Déclarer une class

class Livre{

private string $Titre;
private string $Auteur;
private float  $Prix;
//constructeur
public function __construct( $Titre,$Auteur,$Prix)
{
    $this->Titre = $Titre;
    $this ->Auteur = $Auteur;
    $this->Prix = $Prix;
}

//getter $Titre
public function getTitre():string
{
return $this->Titre;
}

 //getter $Auteur
public function getAuteur() : string
{
return $this->Auteur;
}

 //getter Prix
public function getPrix() : float
{
return $this->Prix;
}

public function Afficher():void {

echo "Le titre est  " . $this->Titre . "\n";
echo "l'auteur c'est : " . $this->Auteur . "\n";
echo "le Prix: " . $this->Prix . "\n";



}



}









?>