<?php
//  Ecrire un algorithme qui demande un nombre à l'utilisateur et l'informe ensuite si ce nombre est positif ou négatif 
// (on inclus cette fois ci où le nombre vaut 0)

// Permet de demander de saisir un nombre , attention le echo est avant la variable 
echo " Entrez votre nombre : ";
$nb =  trim(fgets(STDIN));

// stokage de la condition ( $nb<=0) dans la variable $condition 
$condition = $nb <= 0;

if ($condition) {
    echo " votre nombre est négatif";
} else {
    echo " votre nombre est positif";
}

?>