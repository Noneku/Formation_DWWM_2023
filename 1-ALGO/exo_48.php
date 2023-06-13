<?php
/* Soit T un tableau N entiers. Ecrire l'algo qui détermine le plus grande des élément de ce tableau */ 


//Declaration
$tab = array();
$valeur = readline("Combien de valeur souhaitez-vous ? : ");
$pg = 0;


//Instructions
//Implementer le tableau
for ($i=0; $i < $valeur ; $i++) { 

    $tab[] = readline("Nombre à ajouter : ");
}

//Comparer les valeurs avec pg initialement défini à 0
for ($i=0; $i < count($tab) ; $i++) { 

    if($tab[$i] > $pg){
        $pg = $tab[$i];
 


    }
}

//Affichage
echo"Le nombre le plus grand est $pg";
?>