<?php
// Demande à l'utilisateur de spécifier la taille du tableau
$taille = readline("Combien de valeurs voulez-vous entrer ? ");

// Création du tableau
$t = array();

// Demande à l'utilisateur d'entrer les valeurs
for ($i = 0; $i < $taille; $i++) {
    $valeur = readline("Entrez vos valeurs : ");
    $T[$i] = $valeur; // Ajoute la valeur au tableau
}

// Affichage des nombres pairs
echo "Les nombres pairs sont : ";
for ($i = 0; $i < count($T); $i++) {
    if ($T[$i] % 2 == 0) {
        echo $T[$i] . " ";
    }
}

echo "\n";

// Affichage des nombres impairs
echo "Les nombres impairs sont : ";
for ($i = 0; $i < count($T); $i++) {
    if ($T[$i] % 2 != 0) {
        echo $T[$i] . " ";
    }
}

?>
