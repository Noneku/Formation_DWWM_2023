<?php 
// Donnez le résultat de la multiplication de deux nombres  en ne faisant que des additions.


// Variables
$nb1 = readline("entrer nombre: ");
$nb2 = readline("entrer nombre: ");
$resultat = 0;

// Addition répétée pour la multiplication
for ($i = 0; $i < $nb2; $i++) {
    $resultat += $nb1;
}
    
// Affichage
    echo "$resultat";

?>