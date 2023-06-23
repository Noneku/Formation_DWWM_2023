<?php

// Toujours à partir de deux tableaux précédemment saisis, écrivez un algorithme qui calcule le schtroumpf des deux tableaux. Pour calculer le schtroumpf, il faut multiplier chaque élément du
// tableau 1 par chaque élément du tableau 2, et additionner le tout.

// Le Schtroumpf sera :
// 6*2 + 6*5 + 6*8+ 6*4 + 7*2+ 7*5+ 7*8 + 7*4 =247

$tableau1 = array(2, 5, 8, 4);
$tableau2 = array (6, 7);
$resultat1 = null;
$resultat2 = null;

for ($i = 0 ;  $i < count($tableau1); $i++) {

// index0 tableau2 + index tableau 1 qui changera à chaque tour de boucle , addition avec le resultat précédent 
echo $resultat1 += $tableau2[0] * $tableau1[$i];
echo "\n";

}

// Meme systheme avec l'index1

for ($i = 0 ;  $i < count($tableau1); $i++) {

    echo $resultat2 += $tableau2[1] * $tableau1[$i];
    echo "\n";
    
}

// addition résultat1 et résultat 2
echo "le résultat est : ".$resultat1 + $resultat2; 
echo "\n";



// AUTRE METHODE : CORRECTION
//  BOUCLE DANS UNE BOUCLE 
// ____________________________________________________________________________________________________________________________________


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


?>