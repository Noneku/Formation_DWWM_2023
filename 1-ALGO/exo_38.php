<?php

// Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeurs. 
// Le programme, une fois la saisie terminéé, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau. 
// On prendra soin d'effectuer la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps.


$nbSaisie = readline("Entrez le nombre de saisie: ");
$tableau = array();
$nbMax = null;
$position = null;


for ( $i = 0; $i < $nbSaisie; $i++ ) {

    $tableau[$i] = readline("Entrez un nombre: ");
 

    if ( $tableau[$i] > $nbMax ) {

        $nbMax = $tableau[$i];
        $position++;
        
    } 

}

print_r($tableau);
echo "\n";
echo " le chiffre maximum est : " .$nbMax. " en position ".$position;

?>