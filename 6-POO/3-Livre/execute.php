<?php

include "livre.class.php";

$titre = readline("Donner le titre du livre 1 : ");
$auteur = readline("Donner l'auteur du livre 1 : ");
$prix = readline("Indiquer le prix du livre 1 : ");
$livre1 = new Livre ($titre, $auteur, $prix);
$livre1->Afficher();


$titre = readline("Donner le titre du livre 2 : ");
$auteur = readline("Donner l'auteur du livre 2 : ");
$prix = readline("Indiquer le prix du livre 2 : ");
$livre2 = new Livre ($titre, $auteur, $prix);
$livre2->Afficher();
?>