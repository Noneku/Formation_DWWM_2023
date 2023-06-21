<?php
// Tableau initial
$T = array(1, 3, 5, 7, 9, 11);

// Demande à l'utilisateur d'entrer une valeur
$X = readline("Entrez une valeur : ");

// Recherche de la position d'insertion dans le tableau
$position = count($T); // Position par défaut à la fin du tableau
for ($i = 0; $i < count($T); $i++) {
    if ($X <= $T[$i]) {
        $position = $i; // Met à jour la position si la valeur est inférieure ou égale
        break; // Sort de la boucle dès que la position est trouvée
    }
}

// Décalage des éléments du tableau vers la droite pour faire de la place à la nouvelle valeur
for ($i = count($T) - 1; $i >= $position; $i--) {
    $T[$i + 1] = $T[$i]; // Déplacement des éléments
}

// Insertion de la valeur dans le tableau à la position trouvée
$T[$position] = $X;

// Affichage du tableau mis à jour
for ($i = 0; $i < count($T); $i++) {
    echo $T[$i] . " ";
}
?>
