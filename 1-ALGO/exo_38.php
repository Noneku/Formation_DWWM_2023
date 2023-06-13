<?php
/* Ecrivez un algorithme permettant toujours sur le même principe, 
à l'utilisateur de saisir un nombre déterminé de valeurs. 
Le programme, une fois la siasie terminée, 
renvoie la plus grande valeur en precisant quelle position elle occupe dans le tableau.

On prendra soin d'effectuer la saisie dans une premier temps,
 et la recherche de la plus grande valeur du tableau dans un second temps. */ 

 $valeur = readline("Combien de valeur souhaitez-vous ? : ");
 $max = null;
 $pos = 0;

 for ($i=0; $i < $valeur; $i++) { 
   $tab[$i] = readline("Choisir votre nombre : ");
   //Instruction if dans le for
   
//    if($tab[$i] > $max){
//         $max = $tab[$i];
//         $pos = $i;
//    }
 }

 for ($j=0; $j < count($tab) ; $j++) { 
    if($tab[$j] > $max){
        $max = $tab[$j];
        $pos = $j;
    }
 }

 print_r($tab);

 echo "La plus grande valeur est $max et se trouve en position $pos."

?>