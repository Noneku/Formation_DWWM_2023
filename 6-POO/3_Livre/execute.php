<?php

include "Livre.class.php";

$titre = readline("Donner le titre du livre : ");
$auteur = readline("Donner le nom de l'auteur : ");
$prix = readline("Donner le prix du livre: ");
$Livre1= new Livre($titre,$auteur,$prix);

echo "Livre 1\n";
$Livre1 -> afficherLivre();