<?php

// Ecrire un algo qui effectue un décalage des éléments d'un tableau 

// Déclaration : 
$dec = array("D", "E", "C", "A", "L", "A", "G", "E");
$deca = array();



// Instructions : 
for ($i = 0; $i < count($dec); $i++) {
    $deca[$i] = $dec[$i+1];
}
$deca[count($deca)-1] = $dec[0];


// Affichage :
print_r($dec);
print_r($deca);
?>