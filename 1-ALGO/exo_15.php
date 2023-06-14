<?php

// ? Exercice effacé 

// Déclaration : 
$nom1 = readline("Entrez un premier nom : ");
$nom2 = readline("Entrez un deuxième nom : ");
$nom3 = readline("Entrez un troisième nom : ");

// Instructions / Affichage : 
if (($nom1[0]>$nom2[0]) && ($nom2[0]>$nom3[0])) {
    echo "Les noms $nom1, $nom2 et $nom3 sont rangé dans l'odre alhabétique.";
} else {
    echo "Les noms $nom1, $nom2 et $nom3 ne sont pas rangés dans l'odre alphabétique.";
}

?>