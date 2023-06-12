<?php
// //Déclaration de mes variables
// $better = 0;
// $position = 0;
// $i = 1;
// $nbr = readline("Entrer un nombre : ");

// //Tant que $nbr est strictement supérieur ou égal à $better, on enregistre le nombre dans $better
// while ($nbr >= $better) {
//     $nbr = readline("Entrer un nombre : ");
//     //Si $nbr est différent de 0, on enregistre
//     if($nbr != 0){
//         $better = $nbr;
//         $position = $i++;
//     }
//     else {
//         //Sinon on arréte la boucle
//         break;
//     }
// }
// echo "Le nombre le plus grand est $better à la position $position";

$nb = 0;
$pg = 0;
$pos = 0;
$i = 0;
do {
    $i++;
    $nb = readline("Entre vos nombre : ");
    if($pg < $nb){
        $pg = $nb;
        $pos = $i;
    }
} while($nb != 0);

echo "Le nombre ".$pg." à la position".$pos;

/*
   Reecrire l'algo de l'exo 22 mais cette fois-ci on ne connaît pas d'avance combien l'utilisateur souhaite saisir de nombres. La saisie des nombres s'arrêyte lorsque l'utilisateur entre un zéro.

    #Déclaration et saisit des variables
    echo "Entrez un nombre : ";
    $nbInit = trim(fgets(STDIN));
    $nbPos = 0;
    $nbComp = -INF;
    $i = 1;

    #Traitement
    while ($nbComp != 0) {
        if ($nbInit<$nbComp) {
            $nbInit = $nbComp;
            $nbPos = $i ;
        }
        $i++;
        echo "Entrez un nombre :";
        $nbComp = trim(fgets(STDIN));
    }

    echo "Le nombre le plus grand est ".$nbInit." il se trouve en position ".$nbPos.".";

*/
?>