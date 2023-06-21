<?php
// Demande à l'utilisateur de spécifier la taille du tableau
$n = readline("Combien de valeurs voulez-vous entrer ? ");

// Création du tableau
$t = array();

// Demande à l'utilisateur d'entrer les valeurs
for ($i = 0; $i < $n; $i++) {
    $valeur = readline("Entrez la valeur numéro : ");
    $t[$i] = $valeur; // Ajoute la valeur au tableau
}

// Recherche de l'élément le plus grand du tableau
$pg = $t[0]; // Initialise la variable avec la première valeur du tableau
for ($i = 1; $i < count($t); $i++) {
    if ($t[$i] > $pg) {
        $pg = $t[$i]; // Met à jour la variable si la valeur actuelle est plus grande
    }
}

// Affichage de l'élément le plus grand
echo "L'élément le plus grand du tableau est : " . $pg;
?>
