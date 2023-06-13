<?php

/*Réecrire l'algorithme précédent, mais cette fois-ci on ne connaît pas d'avance combien l'utlisateur souhaite saisir de nombres. La saisie des nombres s'arrête lorsque l'utlisateur entre un zéro. */

//Declarations

$nbr = readline("Saisir un nombre1 : ");
$position = 0;
$i = 1;
// $stop = 1;
$nbr2 = $nbr;

//Instructions

while($nbr2 <> 0){
        $i++;
        // $stop = readline("Si vous souhaitez arreter la comparaison taper 0 sinon taper 1  : "); 
        $nbr2 = readline("Saisir nombre".$i." à comparer (zero pour arreter) : ");

        if($nbr < $nbr2){
               
              $nbr = $nbr2;
            $position = $i;
        }
    
           
    }
    //Affichage 
    echo "Le plus grand chiffre est $nbr, il se trouve en position $position .\n"; 


//Deuxème solution avec do , while

    // $nb = 0;
    // $pg = 0;
    // $pos = 0;
    // $i = 0;
    // do{
    //     $i++;
    //     $nb=readline("entrez un nombre : ");
    //     if($pg < $nb){
    //         $pg = $nb;
    //         $pos = $i;
    //     }
    // }while($nb!= 0);
    // echo "Le nombre ".$pg." position : ".$pos;








    // //3eme solution avec while
    //    #Déclaration et saisit des variables
    //    echo "Entrez un nombre : ";
    //    $nbInit = trim(fgets(STDIN));
    //    $nbPos = 0;
    //    $nbComp = -INF;
    //    $i = 1;
   
    //    #Traitement
    //    while ($nbComp != 0) {
    //        if ($nbInit<$nbComp) {
    //            $nbInit = $nbComp;
    //            $nbPos = $i ;
    //        }
    //        $i++;
    //        echo "Entrez un nombre :";
    //        $nbComp = trim(fgets(STDIN));
    //    }
   
    //    echo "Le nombre le plus grand est ".$nbInit." il se trouve en position ".$nbPos.".";
        



?>