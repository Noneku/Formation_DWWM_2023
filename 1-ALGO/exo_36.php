<?php


//Initialisation des variables
$tab1 = [2, 5, 8, 4];
$tab2 = [6, 7];
$i = 0; // Compteur
$j = 0; // Compteur
$res = 0; //Résultat

//Traitement
for ($i=0; $i < sizeof($tab1) ; $i++) { 
    for ($j=0; $j < sizeof($tab2); $j++) { 
        $res = $res + ($tab1[$i] * $tab2[$j]);
    }
}

echo "Le résultat est : ".$res;


// $tab1 = array(2,5,8,4);
// $tab2 = array(6,7);
// $resultat = 0 ;


// for ($i = 0 ; $i < count ($tab1) ; $i++){

// $resultat += $tab1 [$i] * $tab2[0];
// }

// for ($i = 0 ; $i < count($tab1);$i++){

//     $resultat += $tab1[$i]*$tab2[1];
    

// }

// echo "le resultat est $resultat  " ;
?>

