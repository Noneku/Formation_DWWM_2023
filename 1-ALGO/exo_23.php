<?php

// Réecrire l'algo précédent mais cette fois ci on ne connait pas d'avance combien l'utilisateur va entrer de saisie. Affiche de surcroît en quelle position avait été saisie ce nombre
// La saisie d'arette lorsque l'utilisateur entre un 0. 

// Declaration des variables
$nbMax = null; 
$nb = 1;
$i=1;
$position = null;

// While : tant que le bombre saisie n'est pas égal à zéro alors demander un chiffre
while ($nb != 0) {
    
        $nb = readline("Entrez le numéro: ");

        $position++;
        
// condition dans le while 
        if ($nb > $nbMax) {

            echo "le chiffre maximum est ".$nbMax = $nb;
            echo "\n";

    
        } else {
    
            echo "le chiffre $nb n'est pas plus grand que $nbMax en position : $position ";
            echo "\n";
        }

    }

?>