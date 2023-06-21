<?php

//  Donner le resultat de la multiplication de 2 nombres en utilisant que des additions

$nb = readline("Entrez le premier nombre: ");
$multiplicateur = readline("Entrez le multiplicateur: ");
$resultat = null;


for ($i = 1; $i <= $multiplicateur ; $i++) {
    
    $resultat += $nb;

}

echo " Le resultat de $nb * $multiplicateur est égal à : $resultat ";


?>