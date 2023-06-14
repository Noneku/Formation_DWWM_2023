<?php

//on declare et saisie les variables
$nd= readline("Entrez un nombre de départ : ");



// on teste 

$somme = 0;
for ($i = 1; $i <$nd; $i++) {
    $somme += $i;       
}       

echo "La somme des entiers jusqu'a .$nd est : $somme\n";

?>