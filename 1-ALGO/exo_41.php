<?php 
// Ecrie m'algorithme effectuant le décalage des éléments d'un tableau
// Le tableau initial D,E,C,A,L,A,G,E
// Le tableau modifié (decalage à gauche) E,C,A,L,A,G,E,D

// Declaration du tableau 
$tabInitial = ['D', 'E', 'C', 'A', 'L', 'A', 'G', 'E'];
$tabModifie = array();

// Boucle for 
for ($i = 0; $i < (count($tabInitial)-1);$i++) {
    $tabModifie[$i] = $tabInitial[$i+1];
}

// Déplace chaque élément d'une position vers la gauche
$tabModifie[(count($tabInitial)-1)] = $tabInitial[0];

//  Affichage
print_r($tabModifie);

?>