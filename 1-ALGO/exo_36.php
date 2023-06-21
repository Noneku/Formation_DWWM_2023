<?php
// Toujours à partir de deux tableaux précéemment saisis, écrivez un algorithme qui calcule le schtroumpf des deux tableaux. Pour calculer le schtroumpf,il faut multiplier chaque élément du tableau 1 par chaque élément du tableau 2, et additionner le tout. Par exemple si l'on a :
// Tableau 1: 2,5,8,4
// Tableau 2: 6,7
// Le schtroumpf sera: 6*2+6*5+6*8+6*4+7*2+7*5+7*8+7*4=247

// Variables
$tableau1 = array(2, 5, 8, 4);
$tableau2 = array(6, 7);
$schtroumpf = 0;
$tailleTableau1 = count($tableau1);
$tailleTableau2 = count($tableau2);

// Boucle for 
for ($i = 0; $i < $tailleTableau1; $i++) {
    for ($j = 0; $j < $tailleTableau2; $j++) {
        $schtroumpf += ($tableau1[$i] * $tableau2[$j]);
    }
}

// Affichage
echo "Le schtroumpf est : " . $schtroumpf;

?>









?>