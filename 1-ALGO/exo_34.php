<?php

//  Ecrivez un algrotyhme calculant la somme des valeurs d'un tableau 
//  Methode avec fonction 

$tableau = array (2, 4, 5, 6, 10);
$sommeTableau = null;


echo " le total du tableau est de : ". array_sum($tableau);
echo "\n";


// methode sans fonction 
// $i est inférieur à 5. La boucle doit donc faire 5 tours (itération) car le tableau à une longueur de 5. 

for ( $i=0; $i < count($tableau); $i++) {

// $tableau[$i] va récupérer le nombre de la boucle qui est égal à la position des chiffres dans le tableau 
// $sommeTableau va récupérer la valeur de $tableau[$i] à chaque tour de boucle tout en additionnant la nouvelle valeur avec l'ancienne valeur. 

    echo $sommeTableau += $tableau[$i];
    echo "\n";
}

echo "la somme du tableau est :". $sommeTableau;

?>