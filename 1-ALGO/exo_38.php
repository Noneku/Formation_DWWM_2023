<?php
// Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeurs. Le programme, une fois la saisie terminéé, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau. On prendra soin d'effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps. 


// Saisie du nombre de valeurs à entrer
$n = readline("Combien de valeurs souhaitez-vous entrer ? ");

// Création du tableau
$tableau = array();

// Saisie des valeurs
for ($i = 0; $i < $n; $i++) {
echo "Valeur " . ($i + 1) . ": ";
$valeur = readline("Valeur " . ($i + 1) . ": ");
$tableau[] = $valeur;
}

// Variables 
$plusGrandeValeur = $tableau[0];
$position = 0;

// Boucle for pour rechercher la plus grande valeur
for ($i = 1; $i < $n; $i++) {
    if ($tableau[$i] > $plusGrandeValeur) {
       
$plusGrandeValeur = $tableau[$i]; 
$position = $i;
    }
}

// Affichage de la plus grande valeur et sa position
echo "La plus grande valeur est : " . $plusGrandeValeur . "\n";
echo "Elle se trouve à la position : " . ($position + 1) . "\n";

?>