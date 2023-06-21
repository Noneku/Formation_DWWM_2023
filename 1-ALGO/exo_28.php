<?php

$nbLigne = readline("Entrez un chiffre: ");

// boucle dans une boucle
//  la premiere instruction va permettre de faire la premiere boucle, si $i est inférieur au nombre de ligne entré, elle va ajouter une ligne en plus
//  va afficher " 1,2,3,4,5,6,7 " soit 7 lignes
// on met un \n pour que les 7 lignes s'affichent à la vertificale



for ($i = 1; $i <= $nbLigne ; $i++ ) {
    
    echo "\n";
    echo "ligne : $i "." ";

// la premiere boucle va afficher 7 fois la deuxieme boucle
// pour la deuxieme boucle: si $a est inférieur ou egal à $i cela m'afffichera $a, soit 1, si je ne mets pas de égal elle ne remplit pas la condition donc ne m'affichera rien
// sauf que la premiere boucle demande 7 lignes donc dès que la premiere ligne de boucle est terminée, on passe à la deuxieme ligne de la boucle 
// pour la deuxieme ligne $i prendra 2, $a etant inférieur à 2, elle va rajouter une deuxieme ligne et ainsi de suite 

    for ($a = 1; $a <= $i ; $a++ ){

        echo $a; 
}

}

?>