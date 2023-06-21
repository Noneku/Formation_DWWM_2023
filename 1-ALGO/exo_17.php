<?php

// Ecrire un algorithme qui demande deux nombres à l'utilisateur et l'informe ensuite si le produit est négatif ou positif (on inclut cette fois le traitement du cas où le produit peut être nul)

// Demander le premier nombre à l'utilisateur
$nombre1 = readline("Entrez le premier nombre : ");

// Demander le deuxième nombre à l'utilisateur
$nombre2 = readline("Entrez le deuxième nombre : ");

// Calculer le produit
$produit = $nombre1 * $nombre2;

// Vérifier le signe du produit
if ($produit < 0) {
   
echo "Le produit est négatif."; 
}

elseif ($produit > 0) {

echo "Le produit est positif.";

} 

else {

echo "Le produit est nul.";

}

?>