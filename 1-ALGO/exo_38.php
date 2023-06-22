<?php

$lt = readline("Entrez la valeur pour la longueur du tableau");

$tab1 = array();
$max = 0;
$pos = 0;


for ($i=0; $i < $lt; $i++) { 
    $tab1[$i] = readline("entrez un nombre dans le tableau : ");

    if ($tab1[$i] > $max) {
        $max = $tab1[$i];
        $pos = $i;
    }
}


echo "Le plus grand nombre saisi est : $max";
echo "\n";
echo "Il était à la position : $pos";


?>