<?php

/*Toujours et encore sur le même principe, ecrivez un algo permettant, à l'utilisateur de saisir les notes d'une classe.
 Le programme, une fois la saisie,

  renvoie le nombre de ces notes supérieures à la moyenne de la classe */ 

//Declaration
  $valeur = readline("Combien de valeur souhaitez-vous ? : ");
  $moyenne = null;
  $tab = array();
  $nbrNote = 1;
  $nbrNoteSup = 0;
  $total = 0;

//Instructions

  for ($i=0; $i < $valeur; $i++) { 
    $tab[$i] = readline("Choisir votre nombre : ");
  }

  for ($i=0; $i < count($tab); $i++) { 
    $total += $tab[$i];
    $moyenne = $total / $nbrNote ;
    $nbrNote++;
  }

  for ($i=0; $i < count($tab); $i++) { 
    if($tab[$i] > $moyenne){
        $nbrNoteSup++;
        
        // print_r($tab[$i]);
        // echo"\n";
       ;
    }
  }echo"Nombre de note supérieur à la moyenne : $nbrNoteSup ";
  
  
?>