<?php

//  Donner le resultat de la multiplication de 2 nombres en utilisant que des additions

$nb = readline("Entrez le premier nombre: ");
$multiplicateur = readline("Entrez le multiplicateur: ");
$resultat = null;

// $i est inférieur au multiplicateur, incrémenter +1 à chaque tour de boucle 
for ($i = 1; $i <= $multiplicateur ; $i++) {
    
    //à chaque tout de boucle $resultat va etre additionné par $nb, la valeur de $resultat sera écrasée à chaque tour de boucle par une nouvelle addition ( valeur stocké + $nb) et stoker le nouveau resultat
    $resultat += $nb;

}

echo " Le resultat de $nb * $multiplicateur est égal à : $resultat ";


?>