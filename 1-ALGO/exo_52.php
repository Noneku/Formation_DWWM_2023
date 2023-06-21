<?php
// Ecrire un algorithme qui calcule le nombre d'entiers pairs et le nombre d'entiers impairs d'un tableau d'entiers.

// Déclaration variables
$tab = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$nbPairs = 0;
$nbImpairs = 0;

// Boucle for 
for ($i = 0; $i < count($tab); $i++) { 
    
    // Vérifier si le nombre est pair ou impair
if ($tab[$i] % 2 === 0) {
        $nbPairs++;
}

else {
        $nbImpairs++;
    }
}

// Affichage
echo "Nombre d'entiers pairs : " . $nbPairs . "\n";
echo "Nombre d'entiers impairs : " . $nbImpairs . "\n";

?>