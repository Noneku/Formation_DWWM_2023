<?php
/*Ecrire un algo qui demande a utilisateur de rentrez ds nombre et de les comparer la saisie s'arrete quand 0 est sasie*/

$nbr=0;
$comp=0;
$position=0;
$i=0;
//boucle for
do {
     $nbr= readline("tapez un nombre : ");
   
     $i++;
    //traitement
    if ($comp<$nbr) {

        $comp=$nbr;
        $position=$i;
        
    }  
} while ($nbr <> 0); 
 

//affichage
echo "le plus nombre grand est :".$comp."\nil est en ".$position." position";
//  /* Reecrire l'algo de l'exo 22 mais cette fois-ci on ne connaît pas d'avance combien l'utilisateur souhaite saisir de nombres. La saisie des nombres s'arrêyte lorsque l'utilisateur entre un zéro.*/

//     #Déclaration et saisit des variables
//     echo "Entrez un nombre : ";
//     $nbInit = trim(fgets(STDIN));
//     $nbPos = 0;
//     $nbComp = -INF;
//     $i = 1;

//     #Traitement
//     while ($nbComp != 0) {
//         if ($nbInit<$nbComp) {
//             $nbInit = $nbComp;
//             $nbPos = $i ;
//         }
//         $i++;
//         echo "Entrez un nombre :";
//         $nbComp = trim(fgets(STDIN));
//     }

//     echo "Le nombre le plus grand est ".$nbInit." il se trouve en position ".$nbPos.".";
?>