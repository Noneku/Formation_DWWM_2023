<?php
/*Ecrire l'algorithme effectuant le décalage des élélments d'un tableau.
Tableau initial D E C A L A G E
Tableau modifié (décalage à gauche) E C A L A G E D.
*/ 
function decalageGauche(&$tableau, $n) {
    $tmp = $tableau[0];
    
    for ($i = 0; $i < $n-1; $i++) {
        $tableau[$i] = $tableau[$i+1];
    }
    
    $tableau[$n-1] = $tmp;
}
++
tab = array('D', 'E', 'C', 'A', 'L', 'A', 'G', 'E');
$n = count($tableau);
decalageGauche($tableau, $n);


$tmp= 0;


?>