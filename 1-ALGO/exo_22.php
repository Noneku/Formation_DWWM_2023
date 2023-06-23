<?php

// Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur, et qui lui dit ensuite quel était le plus grand parmis ces 20 nombres.

$nbMax = null; 

// utilisation d'une boucle et d'un if à l'intérieur de cette boucle

for ($i= 1; $i<=20; $i++) {

    // dans le cas où $i est inférieur ou egal à 20, alors demander un numero; incrémentation +1 jusqu'à 20
    $nb = readline("Entrez le numéro: ");
    
    // si le nombre saisie est inférieur à $nbMax qui est égal à 0 
    if ($nb > $nbMax) {
    
        // alors $nbMax va prendre la valeur de $nb 
        echo "le chiffre maximum est ".$nbMax = $nb;
        echo "\n";

    } else {
        
        // sinon afficher echo 
        echo "le chiffre $nb n'est pas plus grand que $nbMax";
        echo "\n";
    }
}

?>