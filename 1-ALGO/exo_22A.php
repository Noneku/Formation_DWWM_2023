<?php

// Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur, et qui lui dit ensuite quel était le plus grand parmis ces 20 nombres.

// Variables 
$nb2 = 0;

// Instruction
for ($i = 0; $i < 20; $i++) {
    $a = readline("Entrer un nombre");
    if ($nb2 < $a) {
    $nb2 = $a; }
}

// Affichage
echo $nb2;

?>