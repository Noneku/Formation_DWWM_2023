<?php


$saisieAge = readline("Entrez l'age: ");
$saisieSexe = readline("Entrez le sexe: "); 

// attention mettre un double égal qui signifie que cet opérateur compare deux valeurs et renvoie la valeur « true » si les deux valeurs sont égales
if ( $saisieAge >20 && $saisieSexe == "homme") {

    echo "Je paie des impots";

} elseif ($saisieAge>=18 && $saisieAge <=35 && $saisieSexe == "femme") {
    echo " Je paie des impots";

} else { 
    echo " Je ne paie pas d'impot ";

}

?>