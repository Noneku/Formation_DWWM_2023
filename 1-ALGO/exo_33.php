<?php

$lt = readline("Entrez la valeur pour la longueur du tableau");
$nbn = 0;
$nbp = 0;

$tab = array();

for ($i=0; $i < $lt; $i++) { 
    $tab[$i] = readline("entrez un nombre dans le tableau : ");
    if ( $tab[$i] < 0 ) {
        $nbn++;
    }else{
        $nbp++;
    }
}

print_r($tab);
echo "Il y a $nbn nombres negatif et $nbp nombre positif";

?>
