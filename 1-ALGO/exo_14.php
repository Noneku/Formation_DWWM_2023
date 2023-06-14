<?php

// Ecire un algo qui demande deux nb à l'utilisateur et l'informe ensuite si leur produit est négatif ou positif 

// Déclaration : 
$nb1 = readline("Entrez un premier nombre : ");
$nb2 = readline("Entrez un deuxième nombre : "); 

// Instruction / Affichage : 
if (($nb1 > 0 and $nb2 > 0) || ($nb1 < 0 and $nb2 < 0)) {
    echo "Le produit de $nb1 et $nb2 est positif.";
} else {
    echo "Le produit de $nb1 et $nb2 est négatif.";
}

// ?>

?>