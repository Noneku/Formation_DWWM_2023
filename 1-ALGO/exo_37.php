<?php

// Création du tableau et demande a l'utilisateur quelle taille il doit faire
$valeur = readline("Combien de valeur voulez vous ? : ");
$tab = array();
$tab2 = array();

// Boucle
for ($i=0; $i < $valeur ; $i++) { 
    $val = readline("Saisir vos valeur : ");
    $tab[$i] = $val;
    $tab2[$i] = $tab[$i] +1;
}

print_r($tab2);





?>