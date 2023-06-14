<?php

// Déclarations :
$i = 1;
$nb = 1;
$pg = 0;
$pos = 0;

// // Instructions :
// do {
//     $nb = readline("Entrez un nombre : ");
//     $i++;

//     if ($pg < $nb) {
//         $pg = $nb;
//         $pos = $i;

//     }

// } while ($nb != 0);


    // #Déclaration et saisit des variables
    // echo "Entrez un nombre : ";
    // $nbInit = trim(fgets(STDIN));
    // $nbPos = 0;
    // $nbComp = -INF;
    // $i = 1;

    // #Traitement
    // while ($nbComp != 0) {
    //     if ($nbInit<$nbComp) {
    //         $nbInit = $nbComp;
    //         $nbPos = $i ;
    //     }
    //     $i++;
    //     echo "Entrez un nombre :";
    //     $nbComp = trim(fgets(STDIN));
    // }

    // echo "Le nombre le plus grand est ".$nbInit." il se trouve en position ".$nbPos.".";

// Instructions :
while ($nb != 0) {

    $nb = readline("Entrez un nombre : ");

    if ($pg < $nb) {
        $pg = $nb;
        $pos = $i;
    }
    $i++;
}

// Affichage :
echo "Le plus grand nombre est $pg, il a été saisi en $pos e position.";

?>