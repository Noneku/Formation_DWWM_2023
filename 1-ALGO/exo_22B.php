<?php
/*Ecrire un algo qui demande 20 nombre  et qui ensuite affiche le plus grand nombre sasisi ainsi que sa position */
// Declaration des variables

$nbr=0;
$comp=0;
$position=0;
//boucle for
for ($i=1; $i <= 20; $i++) { 
    $nbr= readline("tapez un nombre : ");
    //traitement
    if ($comp<$nbr) {
        $comp=$nbr;
        $position=$i;
    }  
}
//affichage
echo "le plus nombre grand est :".$comp."\nil est en ".$position." position";
// //autre methode
//     #Déclaration des variables
//     $pg = 0;
//     $nb = 0;
//     //$nbPos = 0;

//     #Traitement
//     for ($i = 0; $i <= 19; $i++) {
//         echo "Entrez un nombre : ";
//         $nb = trim(fgets(STDIN));

//         if ($pg < $nb) {
//             $pg = $nb;
//             $nbPos = $i+1;
//         }
//     }

//     echo "Le plus grand nombre est ".$pg;
//     echo " il est en position ".$nbPos;
?>